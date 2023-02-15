# Based on https://github.com/sherifabdlnaby/kubephp

ARG PHP_VERSION="7.2.34"
ARG COMPOSER_VERSION="2.0"
ARG XDEBUG_VERSION="3.1.1"

# -------------------------------------------------- Composer Image ----------------------------------------------------

FROM composer:${COMPOSER_VERSION} as composer

# ======================================================================================================================
#                                                   --- Base ---
# ---------------  This stage install needed extenstions, plugins and add all needed configurations  -------------------

FROM php:${PHP_VERSION}-alpine AS base

# Required Args ( inherited from start of file, or passed at build )
ARG IMAGE_DEPS
ARG RUNTIME_DEPS

RUN IMAGE_DEPS="tini gettext curl"; \
    RUNTIME_DEPS=""; \
    apk add --no-cache ${IMAGE_DEPS} ${RUNTIME_DEPS}

RUN apk add bash

# ---------------------------------------- Install / Enable PHP Extensions ---------------------------------------------

 # PHP Extensions --------------------------------- \

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
RUN chmod uga+x /usr/local/bin/install-php-extensions && \
    IPE_GD_WITHOUTAVIF=1 install-php-extensions xdebug

# ------------------------------------------------- Permissions --------------------------------------------------------

# - Clean bundled config/users & recreate them with UID 1000 for docker compatability in dev container.
# - Create composer directories (since we run as non-root later)
RUN deluser --remove-home www-data && adduser -u1000 -D www-data && rm -rf /var/www /usr/local/etc/php-fpm.d/* && \
    mkdir -p /var/www/.composer /app && chown -R www-data:www-data /app /var/www/.composer

# --------------------------------------------------- Scripts ----------------------------------------------------------

COPY docker/*-base          \
     docker/command-loop    \
     # to
     /usr/local/bin/

RUN  chmod +x /usr/local/bin/*-base /usr/local/bin/command-loop

# ---------------------------------------------------- Composer --------------------------------------------------------

COPY --from=composer /usr/bin/composer /usr/bin/composer

# ----------------------------------------------------- MISC -----------------------------------------------------------

RUN touch /var/log/tmp.log

WORKDIR /app
USER www-data

# -------------------------------------------------- ENTRYPOINT --------------------------------------------------------

ENTRYPOINT ["entrypoint-base"]
CMD ["tail", "-f", "/var/log/tmp.log"]

# ======================================================================================================================
#                                                  --- Vendor ---
# ---------------  This stage will install composer runtime dependinces and install app dependinces.  ------------------
# ======================================================================================================================

FROM composer as vendor

ARG PHP_VERSION

# Copy Dependencies files
COPY composer.json composer.json
COPY composer.lock composer.lock

# Set PHP Version of the Image
RUN composer config platform.php ${PHP_VERSION}

# Install Dependeinces
RUN composer install -n --no-progress --ignore-platform-reqs --no-dev --prefer-dist --no-scripts --no-autoloader

# ======================================================================================================================
# ==============================================  DEVELOPMENT IMAGE  ===================================================
#                                                   --- DEV ---
# ======================================================================================================================

FROM base as app-dev

ARG XDEBUG_VERSION
#ENV APP_ENV dev
ENV APP_DEBUG 1

# Switch root to install stuff
USER root

# For Composer Installs
RUN apk add git openssh; \
# Enable Xdebug
docker-php-ext-enable xdebug

USER www-data