Laravel Web Installer

Do you want your clients to be able to install a Laravel project just like they do with WordPress or any other CMS? This Laravel package allows users who don't use Composer, SSH etc to install your application just by following the setup wizard. The current features are :

- Check For Server Requirements.
- Check For Folders Permissions.
- Ability to set database information.
- Migrate The Database.
- Seed The Tables.

Installation

First, pull in the package through Composer.

composer require eunion/install

And then run :

composer update
After that, include the service provider within config/app.php.

'providers' => [
    Eunion\LaravelInstaller\Providers\LaravelInstallerServiceProvider::class,
];
