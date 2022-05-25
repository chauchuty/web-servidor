<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite1d87bc908c71694f8082d397d50c2b2
{
    public static $classMap = array (
        'Button' => __DIR__ . '/../..' . '/pages/modal.type.php',
        'ComposerAutoloaderInite1d87bc908c71694f8082d397d50c2b2' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInite1d87bc908c71694f8082d397d50c2b2' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Database' => __DIR__ . '/../..' . '/db.php',
        'Field' => __DIR__ . '/../..' . '/pages/modal.type.php',
        'Modal' => __DIR__ . '/../..' . '/pages/modal.type.php',
        'Partida' => __DIR__ . '/../..' . '/models/partida.model.php',
        'PartidaController' => __DIR__ . '/../..' . '/controller/partida.controller.php',
        'Team' => __DIR__ . '/../..' . '/models/team.model.php',
        'TeamController' => __DIR__ . '/../..' . '/controller/team.controller.php',
        'Usuario' => __DIR__ . '/../..' . '/models/usuario.model.php',
        'UsuarioController' => __DIR__ . '/../..' . '/controller/usuario.controller.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInite1d87bc908c71694f8082d397d50c2b2::$classMap;

        }, null, ClassLoader::class);
    }
}
