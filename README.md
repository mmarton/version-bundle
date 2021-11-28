# Version Bundle
This is a simple plugin built for Mautic 4 to enable querying the MAUTIC version constatn.

## Installation
**todo** composer install support is still under development in mautic, until use the manual method  
`composer require marton/version-bundle`

1. download the repo
2. upload to mautic-install-path/plugin/MauticVersionBundle
3. clear-cache
4. install plugin through admin page

## Usage
After install enable it in the plugins admin page, and you can access the version on url /api/version.

## Testing

**todo**
Phpstan doesn'twork due to a mautic core-lib installation problem. see https://github.com/mautic/mautic/issues/10651

`composer phpunit`  
`composer phpstan`  
`composer phpcs`
