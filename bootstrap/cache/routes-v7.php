<?php

/*
|--------------------------------------------------------------------------
| Load The Translated Cached Routes
|--------------------------------------------------------------------------
|
| Here we will load the compiled route array that holds all of the route
| information for an application. This allows us to instantaneously
| load the entire route map into the router.
|
| This also preps LaravelLocalization to deal with translated routes.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/admin/settings/api/sanctum-token' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.sanctum-token.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/api/sanctum-token/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.sanctum-token.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.sanctum-token.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/api' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.settings.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/api/send-notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.send-notification',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/api/device-tokens-stats' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.device-tokens-stats',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/api/upload-service-account' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.upload-service-account',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/api/remove-service-account' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.remove-service-account',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Q8z6Tcbm6xi6EO4Z',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::84i5GHieQUeYahWt',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/email/check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Txj2nyzKVvYzFtVE',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/password/forgot' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NvPA8B9EtXvTI8T7',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/resend-verify-account-email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IufwrrnoB6uvSXaV',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/device-tokens' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6RvItdjonDYkkiOE',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4sP3kRTFKodRo2Yc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sagjcyV63owsntSh',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/me' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FT8op65rtiip6qfs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hbNFgUrUOpw61WvU',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/update/avatar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jxhoXJadLXs46s4d',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/update/password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::05CCGPc9spEPZPNt',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eCsX0d6dMbMa9B2s',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vFAuzb0NUMXwbqq5',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/device-tokens/by-token' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QlVmXn7rjbKbodKR',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/notifications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jBJTfUnkvoj7xoa1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/notifications/stats' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wUUxwkdi6bxL8uPT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/notifications/mark-all-read' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kX7vp8VjeO4AVbqW',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/tools/data-synchronize' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tools.data-synchronize',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/data-synchronize/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'data-synchronize.upload',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/get-started/save' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get-started.save',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/welcome' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'installers.welcome',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/welcome/next' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'installers.welcome.next',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/requirements' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'installers.requirements.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/environments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'installers.environments.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/environments/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'installers.environments.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/themes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'installers.themes.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'installers.themes.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/theme-presets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'installers.theme-presets.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'installers.theme-presets.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/accounts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'installers.accounts.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/accounts/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'installers.accounts.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/licenses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'installers.licenses.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/licenses/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'installers.licenses.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/final' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'installers.final',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/licenses/skip' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'installers.licenses.skip',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/menus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'menus.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/menus/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'menus.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'menus.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/menus/ajax/get-node' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'menus.get-node',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/optimize' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'optimize.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'optimize.settings.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/pages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pages.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/pages/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pages.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'pages.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/pages/visual-builder/render-items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pages.visual-builder.render-items',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/pages/visual-builder/render-types' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pages.visual-builder.render-types',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/pages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4Mn5OGrqAHbPwHoM',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/options' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.options',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/general' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.general',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'settings.general.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/admin-appearance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.admin-appearance',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'settings.admin-appearance.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/cache' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.cache',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/cache/cache' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.cache.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/datatables' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.datatables',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'settings.datatables.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/media' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.media',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'settings.media.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/media/generate-thumbnails' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.media.generate-thumbnails',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/license/verify/old' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.license.verify',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/license/verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.license.verify.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/license/activate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.license.activate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/license/deactivate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.license.deactivate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/license/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.license.reset',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.email',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'settings.email.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/email/test/send' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.email.test.send',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/email/templates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.email.template',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'settings.email.template.update-settings',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/email/rules' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.email.rules',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'settings.rules.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/phone-number' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.phone-number.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'settings.phone-number.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/system' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'system.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/system/info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'system.info',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/system/info/get-addition-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'system.info.get-addition-data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/system/cache' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'system.cache',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/system/cache/clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'system.cache.clear',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/system/check-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'system.check-update',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/system/updater' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'system.updater',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'system.updater.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/system/cleanup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'system.cleanup',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'system.cleanup.process',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/system/debug-mode/turn-off' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'system.debug-mode.turn-off',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/system/cronjob' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'system.cronjob',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/system/security' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'system.security',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/membership/authorize' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'membership.authorize',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/license/check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'license.check',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/menu-items-count' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'menu-items-count',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/unlicensed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'unlicensed',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'unlicensed.skip',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/notifications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'notifications.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/notifications/read-all-notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'notifications.read-all-notification',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/notifications/destroy-all-notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'notifications.destroy-all-notification',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/notifications/count-unread' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'notifications.count-unread',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/toggle-theme-mode' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'toggle-theme-mode',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'core.global-search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/core-icons' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'core-icons',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/tables/bulk-changes/data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'table.bulk-change.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/tables/bulk-changes/save' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'table.bulk-change.save',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/tables/bulk-actions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'table.bulk-action.dispatch',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/tables/filters' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'table.filter.input',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/tables/columns-visibility' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'table.update-columns-visibility',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'access.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'access.login.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'access.password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'access.password.reset.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'access.password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'access.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/system/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/system/users/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'users.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/system/roles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/system/roles/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'roles.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/system/roles/json' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles.list.json',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/system/roles/assign' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles.assign',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/widgets/hide' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.hide_widget',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/widgets/hides' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.hide_widgets',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/widgets/order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.update_widget_order',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/widgets/setting-item' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.edit_widget_setting_item',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/media' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'media.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/media/popup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'media.popup',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/media/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'media.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/media/breadcrumbs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'media.breadcrumbs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/media/global-actions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'media.global_actions',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/media/download' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'media.download',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/media/files/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'media.files.upload',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/media/files/upload-from-editor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'media.files.upload.from.editor',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/media/files/download-url' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'media.download_url',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/media/folders/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'media.folders.create',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/plugins' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JJpOAXLbW8zMIsgp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/plugins/installed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'plugins.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/plugins/status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'plugins.change.status',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/plugins/marketplace/ajax/plugins' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'plugins.marketplace.ajax.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/permalink' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'slug.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'slug.settings.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ajax/slug/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'slug.create',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/theme/custom-css' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'theme.custom-css',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'theme.custom-css.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/theme/custom-js' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'theme.custom-js',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'theme.custom-js.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/theme/custom-html' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'theme.custom-html',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'theme.custom-html.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/theme/robots-txt' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'theme.robots-txt',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'theme.robots-txt.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/website-tracking' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.website-tracking',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'settings.website-tracking.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/app/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VDeomIaiF2jz3Hqa',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/app/channels' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sfxFw90FGKgCpdvn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/app/listen' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::x3vXGNazCWN1LiYE',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/app/live-now' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::alNqD7HPbs7vlnhb',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/app/read' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7OmMLvuLRmQBqctt',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/app/saints' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::113pfxryGXMivNUO',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/app/donate/config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Qsdy8yhTwTtJaurX',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/app/prayer-requests' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wDL5mHRSBpMGZEj9',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/up' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kzTas5x1w2pE1TwO',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/feed-sources' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.feed-sources.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.feed-sources.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/feed-sources/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.feed-sources.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api-docs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.docs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api-docs/openapi.json' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.docs.spec',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/youtube-channels' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.youtube-channels.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.youtube-channels.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/youtube-channels/hero-image' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.youtube-channels.hero-image',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/youtube-channels/sync-all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.youtube-channels.sync-all',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/youtube-channels/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.youtube-channels.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/podcast-shows' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.podcast-shows.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.podcast-shows.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/podcast-shows/hero-image' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.podcast-shows.hero-image',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/podcast-shows/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.podcast-shows.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/widgets/load-widget' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::H1DwQxlA955rVahh',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/widgets/get-widget-form' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'widgets.get_form',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/widgets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'widgets.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/widgets/save-widgets-to-sidebar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'widgets.save_widgets_sidebar',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/widgets/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'widgets.destroy',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/donate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'donation.guest.form',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'donation.guest.initiate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/donate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'donation.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'donation.initiate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/donate/history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'donation.history',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/languages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'languages.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/languages/options' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.language',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/languages/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'languages.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/languages/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'languages.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/languages/set-default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'languages.set.default',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/languages/get' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'languages.get',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/languages/edit-setting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'languages.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/languages/change-item-language' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'languages.change.item.language',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/languages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YN7U7u2YPz2ft7RI',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/languages/current' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8J4qrZQzq7vJOYzu',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/ads' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ads.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/ads/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ads.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'ads.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/ads' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ads.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'ads.settings.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/ads' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::maWD5dKmLI4U1555',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/ai-writer/generate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ai-writer.generate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/ai-writer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ai-writer.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'ai-writer.settings.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/analytics/general' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'analytics.general',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/analytics/page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'analytics.page',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/analytics/browser' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'analytics.browser',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/analytics/referrer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'analytics.referrer',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/analytics' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'analytics.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'analytics.settings.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/analytics/json' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'analytics.settings.json',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/en/ajax/announcements' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.ajax.announcementsen.public.ajax.announcements',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/announcements' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'announcements.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/announcements/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'announcements.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'announcements.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/announcements/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'announcements.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'announcements.settings.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/audit-logs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'audit-log.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/audit-logs/widgets/activities' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'audit-log.widget.activities',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/audit-logs/items/empty' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'audit-log.empty',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/system/backups' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backups.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/system/backups/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backups.create',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog/reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blog.reports.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog/posts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'posts.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog/posts/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'posts.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'posts.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog/posts/widgets/recent-posts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'posts.widget.recent-posts',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categories.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog/categories/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categories.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'categories.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog/categories/update-tree' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categories.update-tree',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog/categories/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categories.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog/tags' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tags.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog/tags/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tags.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'tags.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog/tags/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tags.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog/tools/data-synchronize/export/posts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tools.data-synchronize.export.posts.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'tools.data-synchronize.export.posts.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog/tools/data-synchronize/import/posts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tools.data-synchronize.import.posts.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'tools.data-synchronize.import.posts.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog/tools/data-synchronize/import/posts/validate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tools.data-synchronize.import.posts.validate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blog/tools/data-synchronize/import/posts/download-example' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tools.data-synchronize.import.posts.download-example',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blog.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'blog.settings.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/en/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.searchen.public.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::81ShqhtwVUigH2mw',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/posts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1UZCCBUZ9LedwRZm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wQF7Uq4PZqEtZR4n',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/tags' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fYgJMOjujOGkcCEX',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/posts/filters' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6qKFj3ysZhtPo0hs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/categories/filters' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1ky64QLiveGgsCVQ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/captcha' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'captcha.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'captcha.settings.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/contacts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contacts.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/contacts/custom-fields' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contacts.custom-fields.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/contacts/custom-fields/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contacts.custom-fields.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'contacts.custom-fields.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/contact' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contact.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'contact.settings.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/en/contact/send' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.send.contacten.public.send.contact',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/contacts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iO5rBtK4IbY6DLC5',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/comments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fob-comment.comments.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/comments/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fob-comment.comments.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'fob-comment.comments.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/comment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fob-comment.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'fob-comment.settings.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/en/fob-comment/comments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fob-comment.public.comments.indexen.fob-comment.public.comments.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'fob-comment.public.comments.storeen.fob-comment.public.comments.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/galleries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'galleries.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/galleries/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'galleries.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'galleries.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/en/galleries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.galleriesen.public.galleries',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/members' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'member.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/members/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'member.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'member.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/members/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'member.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/members' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'member.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'member.settings.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/tables/bulk-changes/data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.table.bulk-change.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/tables/bulk-changes/save' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.table.bulk-change.save',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/tables/bulk-actions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.table.bulk-action.dispatch',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/tables/filters' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.table.filter.input',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/tables/columns-visibility' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.table.update-columns-visibility',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/en/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.loginen.public.member.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.login.posten.public.member.login.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/en/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.registeren.public.member.register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.register.posten.public.member.register.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/en/password/request' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.password.requesten.public.member.password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/en/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.password.emailen.public.member.password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/en/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.password.updateen.public.member.password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/en/register/confirm/resend' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.resend_confirmationen.public.member.resend_confirmation',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/en/account/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.logouten.public.member.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/en/account/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.dashboarden.public.member.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/en/account/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.settingsen.public.member.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.post.settingsen.public.member.post.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/en/account/security' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.post.securityen.public.member.post.security',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/en/account/avatar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.avataren.public.member.avatar',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/en/ajax/members/activity-logs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.activity-logsen.public.member.activity-logs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/en/ajax/members/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.uploaden.public.member.upload',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/en/ajax/members/upload-from-editor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.upload-from-editoren.public.member.upload-from-editor',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/en/account/posts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.posts.indexen.public.member.posts.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/en/account/posts/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.posts.createen.public.member.posts.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.posts.storeen.public.member.posts.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/en/ajax/members/tags/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.tags.allen.public.member.tags.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/newsletters' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'newsletter.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/newsletter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'newsletter.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'newsletter.settings.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/en/newsletter/subscribe' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.newsletter.subscribeen.public.newsletter.subscribe',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/en/ajax/newsletter/popup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.ajax.newsletter-popupen.public.ajax.newsletter-popup',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/request-logs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'request-log.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/request-logs/widgets/request-errors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'request-log.widget.request-errors',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/request-logs/items/empty' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'request-log.empty',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/social-login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'social-login.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'social-login.settings.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/facebook/data-deletion-request-callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'facebook-data-deletion-request-callback',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/facebook-data-deletion-request-callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TVgOU6MIVEMdZsQs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/auth/apple' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bO2z3wcSrYViKxNC',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/auth/google' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5CYdQ2VQu8PAwRsw',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/auth/facebook' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AakvOuv4IKAuXWJv',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/auth/x' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::X8WeV8lYqbIF8rQy',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/translations/locales' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'translations.locales',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'translations.locales.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/translations' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'translations.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/translations/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'translations.group.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/translations/theme' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'translations.theme-translations',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/translations/theme/post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'translations.theme-translations.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/translations/theme/re-import' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'translations.theme-translations.re-import',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/tools/data-synchronize/export/theme-translations/export' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tools.data-synchronize.export.theme-translations.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'tools.data-synchronize.export.theme-translations.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/tools/data-synchronize/export/other-translations' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tools.data-synchronize.export.other-translations.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'tools.data-synchronize.export.other-translations.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/tools/data-synchronize/import/theme-translations' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tools.data-synchronize.import.theme-translations.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'tools.data-synchronize.import.theme-translations.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/tools/data-synchronize/import/theme-translations/validate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tools.data-synchronize.import.theme-translations.validate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/tools/data-synchronize/import/other-translations' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tools.data-synchronize.import.other-translations.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'tools.data-synchronize.import.other-translations.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/tools/data-synchronize/import/other-translations/validate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tools.data-synchronize.import.other-translations.validate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/live-streams/hero-image' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'live-streams.hero-image',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/live-streams/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'live-streams.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/live-streams/fetch-live' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'live-streams.fetch-live',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/live-streams/seed-channels' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'live-streams.seed-channels',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/live-streams' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'live-streams.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/live-streams/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'live-streams.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'live-streams.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/community/forums' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'community-forums.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/community/forums/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'community-forums.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'community-forums.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/en/feed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.community.feeden.public.community.feed',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/en/ajax/feed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.community.feed.storeen.public.community.feed.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/en/groups' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.community.groupsen.public.community.groups',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/en/ajax/groups' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.community.groups.storeen.public.community.groups.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/en/forums' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.community.forumsen.public.community.forums',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/en/ajax/render-ui-blocks' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.ajax.render-ui-blocken.public.ajax.render-ui-block',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/read' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.read',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/search-suggest' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.search-suggest',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/videos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.videos',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/watch' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.watch',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/channel-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iEvfj6KiOioA5fcx',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/watch-page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.watch.legacy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/live' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.live',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/live-streams' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.live-streams',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/members' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.members',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/listen' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.listen',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/saints' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.saints',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/about' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.about',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/prayer-request' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.prayer-request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'public.prayer-request.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/en/ajax/shortcode-blog-posts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.ajax.shortcode-blog-postsen.public.ajax.shortcode-blog-posts',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/en/ajax/shortcode-blog-categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.ajax.shortcode-blog-categoriesen.public.ajax.shortcode-blog-categories',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/en/ajax/widget-blog-posts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.ajax.widget-blog-postsen.public.ajax.widget-blog-posts',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/en/ajax/widget-blog-categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.ajax.widget-blog-categoriesen.public.ajax.widget-blog-categories',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/en/ajax/widget-breaking-news' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.ajax.widget-breaking-newsen.public.ajax.widget-breaking-news',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/en/ajax/menu-sidebar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.ajax.menu-sidebaren.public.ajax.menu-sidebar',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/en/admin/settings/sitemap' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sitemap.settingsen.sitemap.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'sitemap.settings.updateen.sitemap.settings.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/en/admin/settings/sitemap/generate-key' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sitemap.settings.generate-keyen.sitemap.settings.generate-key',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/en/admin/settings/sitemap/create-key-file' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sitemap.settings.create-key-fileen.sitemap.settings.create-key-file',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/en/admin/settings/sitemap/submit-sitemap' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sitemap.settings.submit-sitemapen.sitemap.settings.submit-sitemap',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/en' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.indexen.public.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/en/sitemap.xml' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.sitemapen.public.sitemap',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ajax/announcements' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.ajax.announcements',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contact/send' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.send.contact',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/fob-comment/comments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fob-comment.public.comments.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'fob-comment.public.comments.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/galleries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.galleries',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.login.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.register.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/request' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register/confirm/resend' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.resend_confirmation',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.post.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/security' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.post.security',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/avatar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.avatar',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ajax/members/activity-logs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.activity-logs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ajax/members/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.upload',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ajax/members/upload-from-editor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.upload-from-editor',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/posts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.posts.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/posts/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.posts.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.posts.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ajax/members/tags/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.tags.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/newsletter/subscribe' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.newsletter.subscribe',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ajax/newsletter/popup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.ajax.newsletter-popup',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/feed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.community.feed',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ajax/feed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.community.feed.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/groups' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.community.groups',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ajax/groups' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.community.groups.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/forums' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.community.forums',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ajax/render-ui-blocks' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.ajax.render-ui-block',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ajax/shortcode-blog-posts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.ajax.shortcode-blog-posts',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ajax/shortcode-blog-categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.ajax.shortcode-blog-categories',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ajax/widget-blog-posts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.ajax.widget-blog-posts',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ajax/widget-blog-categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.ajax.widget-blog-categories',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ajax/widget-breaking-news' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.ajax.widget-breaking-news',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ajax/menu-sidebar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.ajax.menu-sidebar',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/sitemap' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sitemap.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'sitemap.settings.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/sitemap/generate-key' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sitemap.settings.generate-key',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/sitemap/create-key-file' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sitemap.settings.create-key-file',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/sitemap/submit-sitemap' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sitemap.settings.submit-sitemap',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sitemap.xml' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.sitemap',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/a(?|d(?|min/(?|s(?|ettings/(?|api/sanctum\\-token/([0-9]+)(*:65)|email/templates/([^/]++)/([^/]++)/([^/]++)(?|/(?|status(*:127)|edit(*:139)|restore(*:154)|preview(*:169)|iframe(*:183))|(*:192))|languages/delete/([0-9]+)(*:226))|ystem/(?|users/(?|([0-9]+)(*:261)|m(?|odify\\-profile\\-image/([^/]++)(*:303)|ake\\-super/([0-9]+)(*:330))|delete\\-profile\\-image/([^/]++)(*:370)|p(?|assword/([0-9]+)(*:398)|rofile/(?|([0-9]+)(?|(*:427))|([0-9]+)/preferences(?|(*:459))))|remove\\-super/([0-9]+)(*:492))|roles/(?|edit/([0-9]+)(?|(*:526))|([0-9]+)(*:543)|duplicate/([0-9]+)(*:569))|backups/(?|d(?|elete/([^/]++)(*:607)|ownload\\-(?|database/([^/]++)(*:644)|uploads\\-folder/([^/]++)(*:676)))|restore/([^/]++)(*:702)))|hort\\-codes/ajax\\-get\\-admin\\-config/([^/]++)(*:757))|me(?|nus/(?|edit/([0-9]+)(?|(*:794))|([0-9]+)(*:811))|mbers/(?|edit/([0-9]+)(?|(*:845))|([0-9]+)(*:862)|verify\\-email/([0-9]+)(*:892)))|p(?|a(?|ges/(?|edit/([0-9]+)(?|(*:933))|([0-9]+)(*:950)|([^/]++)/(?|visual\\-builder(?|(*:988)|/save(*:1001))|preview(*:1018)))|ssword/reset/([^/]++)(*:1050))|lugins/(?|([^/]++)(*:1078)|check\\-requirement(*:1105)|new(*:1117)|marketplace/ajax/(?|([^/]++)(?|(*:1157)|/(?|i(?|frame(*:1179)|nstall(*:1194))|update(?:/([^/]++))?(*:1224)))|check\\-update(*:1248)))|odcast\\-shows/([^/]++)(?|/e(?|dit(*:1292)|pisodes(?|/(?|create(*:1321)|([^/]++)(?|/edit(*:1346)|(*:1355)))|(*:1366)))|(*:1377)))|n(?|otifications/(?|([0-9]+)(*:1416)|read\\-notification/([0-9]+)(*:1452))|ewsletters/([0-9]+)(*:1481))|t(?|heme/options(?:/([^/]++))?(?|(*:1524))|ools/data\\-synchronize/(?|import/translations/([^/]++)(?|(*:1591)|/(?|validate(*:1612)|download\\-example(*:1638))|(*:1648))|export/translations/([^/]++)(?|(*:1689)))|ranslations/locales/(?|([^/]++)(*:1731)|download/([^/]++)(*:1757)))|feed\\-sources/(?|([^/]++)(?|/(?|edit(*:1804)|sync(*:1817))|(*:1827))|s(?|eed\\-catholic(*:1854)|ync\\-all\\-now(*:1876))|itunes\\-search(*:1900))|youtube\\-channels/([^/]++)(?|/(?|edit(*:1947)|sync(*:1960))|(*:1970))|l(?|anguage\\-advanced/save/([0-9]+)(*:2015)|ive\\-streams/(?|edit/([0-9]+)(?|(*:2056))|([0-9]+)(*:2074)))|a(?|ds/(?|edit/([0-9]+)(?|(*:2111))|([0-9]+)(*:2129))|nnouncements/(?|edit/([0-9]+)(?|(*:2171))|([0-9]+)(*:2189))|udit\\-logs/([0-9]+)(*:2218))|blog/(?|posts/(?|edit/([0-9]+)(?|(*:2261))|([0-9]+)(*:2279))|categories/(?|edit/([0-9]+)(?|(*:2319))|([0-9]+)(*:2337))|tags/(?|edit/([0-9]+)(?|(*:2371))|([0-9]+)(*:2389)))|co(?|ntacts/(?|edit/([0-9]+)(?|(*:2431))|([0-9]+)(*:2449)|custom\\-fields/(?|edit/([0-9]+)(?|(*:2492))|([0-9]+)(*:2510))|reply/([^/]++)(*:2534))|mm(?|ents/(?|edit/([0-9]+)(?|(*:2573))|([0-9]+)(*:2591)|([^/]++)/reply(*:2614))|unity/forums/(?|edit/([0-9]+)(?|(*:2656))|([0-9]+)(*:2674))))|galleries/(?|edit/([0-9]+)(?|(*:2715))|([0-9]+)(*:2733))|request\\-logs/([0-9]+)(*:2765))|s\\-click/([^/]++)(*:2792))|pi/(?|v1/(?|device\\-tokens/(?|([0-9]+)(?|(*:2843))|([0-9]+)/deactivate(*:2872))|notifications/(?|([0-9]+)/read(*:2912)|([0-9]+)/clicked(*:2937)|([0-9]+)(*:2954))|p(?|ages/([0-9]+)(*:2981)|osts/([^/]++)(*:3003))|categories/([^/]++)(*:3032))|app/(?|channels/([^/]++)(*:3066)|listen/([^/]++)(*:3090)))|c(?|count/(?|donate/(?|return/([^/]++)(*:3139)|cancel/([^/]++)(*:3163))|posts/(?|edit/([0-9]+)(?|(*:3198))|([0-9]+)(*:3216)))|\\-([^/]++)/([^/]++)(?|(*:3249)|/([^/]++)/([^/\\.]++)\\.jpg(*:3283)))|uth(?|/(?|([^/]++)(*:3312)|callback/([^/]++)(*:3338))|or/([^/]++)(*:3359))|jax/(?|feed/([^/]++)(?|/like(*:3397)|(*:3406))|groups/([^/]++)/(?|join(*:3439)|leave(*:3453))|categories/([^/]++)/posts(*:3488)))|/media/files/([^/]++)/([^/]++)(*:3529)|/donate/(?|return/([^/]++)/([^/]++)(*:3573)|cancel/([^/]++)/([^/]++)(*:3606))|/l(?|anguages/change\\-data\\-language/([^/]++)(*:3661)|isten/([^/]++)(*:3684))|/en(?|/(?|a(?|ds\\-click/([^/]++)(*:3726)|c(?|\\-([^/]++)/([^/]++)(?|(*:3761)|/([^/]++)/([^/\\.]++)\\.jpg(*:3795))|count/posts/(?|edit/([0-9]+)(?|(*:3836))|([0-9]+)(*:3854)))|uthor/([^/]++)(*:3879)|jax/(?|feed/([^/]++)(?|/like(*:3916)|(*:3925))|groups/([^/]++)/(?|join(*:3958)|leave(*:3972))|categories/([^/]++)/posts(*:4007)))|f(?|o(?|b\\-comment/comments/([^/]++)/reply(*:4060)|rums/(?|category/([^/]++)(?|(*:4097)|/topic(*:4112))|topic/([^/]++)(?|(*:4139)|/reply(*:4154))))|eed/([^/]++)(*:4178))|password/reset/([^/]++)(*:4211)|register/confirm/([^/]++)(*:4245)|newsletter/unsubscribe/([^/]++)(*:4285)|groups/([^/]++)(*:4309)|([^/\\.]++)\\.(xml|xml-mobile|html|txt|ror-rss|ror-rdf|google-news)(*:4383))|(?:/([^/]++))?(*:4407)|/(blog|tag|galleries|author)(?:/([^/]++))?(*:4458))|/f(?|acebook\\-deletion\\-status/([^/]++)(*:4507)|o(?|b\\-comment/comments/([^/]++)/reply(*:4554)|rums/(?|category/([^/]++)(?|(*:4591)|/topic(*:4606))|topic/([^/]++)(?|(*:4633)|/reply(*:4648))))|eed/([^/]++)(*:4672))|/storage/(.*)(*:4695)|/watch/([^/]++)(*:4719)|/password/reset/([^/]++)(*:4752)|/register/confirm/([^/]++)(*:4787)|/newsletter/unsubscribe/([^/]++)(*:4828)|/groups/([^/]++)(*:4853)|/([^/\\.]++)\\.(xml|xml-mobile|html|txt|ror-rss|ror-rdf|google-news)(*:4928)|/([^/]++)?(*:4947)|/(blog|tag|galleries|author)(?:/([^/]++))?(*:4998))/?$}sDu',
    ),
    3 => 
    array (
      65 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.sanctum-token.destroy',
          ),
          1 => 
          array (
            0 => 'sanctum_token',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      127 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.email.template.status.update',
          ),
          1 => 
          array (
            0 => 'type',
            1 => 'module',
            2 => 'template',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      139 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.email.template.edit',
          ),
          1 => 
          array (
            0 => 'type',
            1 => 'module',
            2 => 'template',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      154 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.email.template.restore',
          ),
          1 => 
          array (
            0 => 'type',
            1 => 'module',
            2 => 'template',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      169 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.email.template.preview',
          ),
          1 => 
          array (
            0 => 'type',
            1 => 'module',
            2 => 'template',
          ),
          2 => 
          array (
            'POST' => 0,
            'GET' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      183 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.email.template.iframe',
          ),
          1 => 
          array (
            0 => 'type',
            1 => 'module',
            2 => 'template',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      192 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.email.template.update',
          ),
          1 => 
          array (
            0 => 'type',
            1 => 'module',
            2 => 'template',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      226 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'languages.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      261 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.destroy',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      303 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.profile.image',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      330 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.make-super',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      370 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.profile.image.destroy',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      398 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.change-password',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      427 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.profile.view',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'users.update-profile',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      459 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.update-preferences',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'users.',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      492 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.remove-super',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      526 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles.edit',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'roles.update',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      543 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles.destroy',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      569 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles.duplicate',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      607 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backups.destroy',
          ),
          1 => 
          array (
            0 => 'folder',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      644 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backups.download.database',
          ),
          1 => 
          array (
            0 => 'folder',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      676 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backups.download.uploads.folder',
          ),
          1 => 
          array (
            0 => 'folder',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      702 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backups.restore',
          ),
          1 => 
          array (
            0 => 'folder',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      757 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'short-codes.ajax-get-admin-config',
          ),
          1 => 
          array (
            0 => 'key',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      794 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'menus.edit',
          ),
          1 => 
          array (
            0 => 'menu',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'menus.update',
          ),
          1 => 
          array (
            0 => 'menu',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      811 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'menus.destroy',
          ),
          1 => 
          array (
            0 => 'menu',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      845 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'member.edit',
          ),
          1 => 
          array (
            0 => 'member',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'member.update',
          ),
          1 => 
          array (
            0 => 'member',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      862 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'member.destroy',
          ),
          1 => 
          array (
            0 => 'member',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      892 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'member.verify-email',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      933 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pages.edit',
          ),
          1 => 
          array (
            0 => 'page',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'pages.update',
          ),
          1 => 
          array (
            0 => 'page',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      950 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pages.destroy',
          ),
          1 => 
          array (
            0 => 'page',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      988 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pages.visual-builder',
          ),
          1 => 
          array (
            0 => 'page',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1001 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pages.visual-builder.save',
          ),
          1 => 
          array (
            0 => 'page',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1018 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pages.preview',
          ),
          1 => 
          array (
            0 => 'page',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1050 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'access.password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1078 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'plugins.remove',
          ),
          1 => 
          array (
            0 => 'plugin',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1105 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'plugins.check-requirement',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1117 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'plugins.new',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1157 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'plugins.marketplace.ajax.detail',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1179 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'plugins.marketplace.ajax.iframe',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1194 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'plugins.marketplace.ajax.install',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1224 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'plugins.marketplace.ajax.update',
            'name' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'name',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1248 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'plugins.marketplace.ajax.check-update',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1292 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.podcast-shows.edit',
          ),
          1 => 
          array (
            0 => 'podcastShow',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1321 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.podcast-shows.episodes.create',
          ),
          1 => 
          array (
            0 => 'podcastShow',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1346 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.podcast-shows.episodes.edit',
          ),
          1 => 
          array (
            0 => 'podcastShow',
            1 => 'episode',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1355 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.podcast-shows.episodes.update',
          ),
          1 => 
          array (
            0 => 'podcastShow',
            1 => 'episode',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.podcast-shows.episodes.destroy',
          ),
          1 => 
          array (
            0 => 'podcastShow',
            1 => 'episode',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1366 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.podcast-shows.episodes.store',
          ),
          1 => 
          array (
            0 => 'podcastShow',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1377 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.podcast-shows.update',
          ),
          1 => 
          array (
            0 => 'podcastShow',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.podcast-shows.destroy',
          ),
          1 => 
          array (
            0 => 'podcastShow',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1416 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'notifications.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1452 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'notifications.read-notification',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1481 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'newsletter.destroy',
          ),
          1 => 
          array (
            0 => 'newsletter',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1524 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'theme.options',
            'id' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'theme.options.post',
            'id' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1591 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tools.data-synchronize.import.translations.index',
          ),
          1 => 
          array (
            0 => 'type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1612 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tools.data-synchronize.import.translations.validate',
          ),
          1 => 
          array (
            0 => 'type',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1638 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tools.data-synchronize.import.translations.download-example',
          ),
          1 => 
          array (
            0 => 'type',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1648 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tools.data-synchronize.import.translations.store',
          ),
          1 => 
          array (
            0 => 'type',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1689 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tools.data-synchronize.export.translations.index',
          ),
          1 => 
          array (
            0 => 'type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'tools.data-synchronize.export.translations.store',
          ),
          1 => 
          array (
            0 => 'type',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1731 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'translations.locales.delete',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1757 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'translations.locales.download',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1804 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.feed-sources.edit',
          ),
          1 => 
          array (
            0 => 'feedSource',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1817 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.feed-sources.sync',
          ),
          1 => 
          array (
            0 => 'feedSource',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1827 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.feed-sources.update',
          ),
          1 => 
          array (
            0 => 'feedSource',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.feed-sources.destroy',
          ),
          1 => 
          array (
            0 => 'feedSource',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1854 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.feed-sources.seed-catholic',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1876 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.feed-sources.sync-all-now',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1900 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.feed-sources.itunes-search',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1947 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.youtube-channels.edit',
          ),
          1 => 
          array (
            0 => 'youtubeChannel',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1960 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.youtube-channels.sync',
          ),
          1 => 
          array (
            0 => 'youtubeChannel',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1970 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.youtube-channels.update',
          ),
          1 => 
          array (
            0 => 'youtubeChannel',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.youtube-channels.destroy',
          ),
          1 => 
          array (
            0 => 'youtubeChannel',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2015 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'language-advanced.save',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2056 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'live-streams.edit',
          ),
          1 => 
          array (
            0 => 'liveStream',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'live-streams.update',
          ),
          1 => 
          array (
            0 => 'liveStream',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2074 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'live-streams.destroy',
          ),
          1 => 
          array (
            0 => 'liveStream',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2111 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ads.edit',
          ),
          1 => 
          array (
            0 => 'ads',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'ads.update',
          ),
          1 => 
          array (
            0 => 'ads',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2129 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ads.destroy',
          ),
          1 => 
          array (
            0 => 'ads',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2171 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'announcements.edit',
          ),
          1 => 
          array (
            0 => 'announcement',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'announcements.update',
          ),
          1 => 
          array (
            0 => 'announcement',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2189 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'announcements.destroy',
          ),
          1 => 
          array (
            0 => 'announcement',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2218 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'audit-log.destroy',
          ),
          1 => 
          array (
            0 => 'audit_log',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2261 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'posts.edit',
          ),
          1 => 
          array (
            0 => 'post',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'posts.update',
          ),
          1 => 
          array (
            0 => 'post',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2279 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'posts.destroy',
          ),
          1 => 
          array (
            0 => 'post',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2319 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categories.edit',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'categories.update',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2337 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categories.destroy',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2371 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tags.edit',
          ),
          1 => 
          array (
            0 => 'tag',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'tags.update',
          ),
          1 => 
          array (
            0 => 'tag',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2389 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tags.destroy',
          ),
          1 => 
          array (
            0 => 'tag',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2431 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contacts.edit',
          ),
          1 => 
          array (
            0 => 'contact',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'contacts.update',
          ),
          1 => 
          array (
            0 => 'contact',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2449 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contacts.destroy',
          ),
          1 => 
          array (
            0 => 'contact',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2492 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contacts.custom-fields.edit',
          ),
          1 => 
          array (
            0 => 'custom_field',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'contacts.custom-fields.update',
          ),
          1 => 
          array (
            0 => 'custom_field',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2510 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contacts.custom-fields.destroy',
          ),
          1 => 
          array (
            0 => 'custom_field',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2534 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contacts.reply',
          ),
          1 => 
          array (
            0 => 'contact',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2573 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fob-comment.comments.edit',
          ),
          1 => 
          array (
            0 => 'comment',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'fob-comment.comments.update',
          ),
          1 => 
          array (
            0 => 'comment',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2591 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fob-comment.comments.destroy',
          ),
          1 => 
          array (
            0 => 'comment',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2614 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fob-comment.comments.reply',
          ),
          1 => 
          array (
            0 => 'comment',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2656 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'community-forums.edit',
          ),
          1 => 
          array (
            0 => 'forumCategory',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'community-forums.update',
          ),
          1 => 
          array (
            0 => 'forumCategory',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2674 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'community-forums.destroy',
          ),
          1 => 
          array (
            0 => 'forumCategory',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2715 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'galleries.edit',
          ),
          1 => 
          array (
            0 => 'gallery',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'galleries.update',
          ),
          1 => 
          array (
            0 => 'gallery',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2733 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'galleries.destroy',
          ),
          1 => 
          array (
            0 => 'gallery',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2765 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'request-log.destroy',
          ),
          1 => 
          array (
            0 => 'request_log',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2792 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.ads-click',
          ),
          1 => 
          array (
            0 => 'key',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2843 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CXHBJCLnxd271u1B',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VNsZcvqBdLMpkZDn',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2872 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JIbAptTG3d7feFqh',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2912 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fsG0DGqsNcuV3hFh',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2937 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::D0r97TlTAOKdHvmG',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2954 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mXCkifhAghRedrkI',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2981 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LoZcdtoRX0pNPE3N',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3003 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gKGAsYbOCT4JAG7Y',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3032 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Tb79eiECikoNbtqa',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3066 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xzxR1JrGZhdiEMAw',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3090 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::r2vblvJZkHEpLLDM',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3139 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'donation.return',
          ),
          1 => 
          array (
            0 => 'donation',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3163 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'donation.cancel',
          ),
          1 => 
          array (
            0 => 'donation',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3198 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.posts.edit',
          ),
          1 => 
          array (
            0 => 'post',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.posts.update',
          ),
          1 => 
          array (
            0 => 'post',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3216 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.posts.destroy',
          ),
          1 => 
          array (
            0 => 'post',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3249 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.ads-click.alternative',
          ),
          1 => 
          array (
            0 => 'randomHash',
            1 => 'adsKey',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3283 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.ads-click.image',
          ),
          1 => 
          array (
            0 => 'randomHash',
            1 => 'adsKey',
            2 => 'size',
            3 => 'hashName',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3312 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'auth.social',
          ),
          1 => 
          array (
            0 => 'provider',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3338 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'auth.social.callback',
          ),
          1 => 
          array (
            0 => 'provider',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3359 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'author.show',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3397 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.community.feed.like',
          ),
          1 => 
          array (
            0 => 'post',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3406 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.community.feed.destroy',
          ),
          1 => 
          array (
            0 => 'post',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3439 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.community.groups.join',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3453 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.community.groups.leave',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3488 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.ajax.posts-by-category',
          ),
          1 => 
          array (
            0 => 'categoryId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3529 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'media.indirect.url',
          ),
          1 => 
          array (
            0 => 'hash',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3573 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'donation.guest.return',
          ),
          1 => 
          array (
            0 => 'donation',
            1 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3606 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'donation.guest.cancel',
          ),
          1 => 
          array (
            0 => 'donation',
            1 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3661 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'languages.change.data.language',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3684 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.listen.show',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3726 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.ads-clicken.public.ads-click',
          ),
          1 => 
          array (
            0 => 'key',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3761 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.ads-click.alternativeen.public.ads-click.alternative',
          ),
          1 => 
          array (
            0 => 'randomHash',
            1 => 'adsKey',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3795 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.ads-click.imageen.public.ads-click.image',
          ),
          1 => 
          array (
            0 => 'randomHash',
            1 => 'adsKey',
            2 => 'size',
            3 => 'hashName',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3836 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.posts.editen.public.member.posts.edit',
          ),
          1 => 
          array (
            0 => 'post',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.posts.updateen.public.member.posts.update',
          ),
          1 => 
          array (
            0 => 'post',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3854 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.posts.destroyen.public.member.posts.destroy',
          ),
          1 => 
          array (
            0 => 'post',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3879 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'author.showen.author.show',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3916 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.community.feed.likeen.public.community.feed.like',
          ),
          1 => 
          array (
            0 => 'post',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3925 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.community.feed.destroyen.public.community.feed.destroy',
          ),
          1 => 
          array (
            0 => 'post',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3958 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.community.groups.joinen.public.community.groups.join',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3972 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.community.groups.leaveen.public.community.groups.leave',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4007 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.ajax.posts-by-categoryen.public.ajax.posts-by-category',
          ),
          1 => 
          array (
            0 => 'categoryId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4060 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fob-comment.public.comments.replyen.fob-comment.public.comments.reply',
          ),
          1 => 
          array (
            0 => 'comment',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4097 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.community.forum.categoryen.public.community.forum.category',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4112 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.community.forum.topic.storeen.public.community.forum.topic.store',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4139 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.community.forum.topicen.public.community.forum.topic',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4154 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.community.forum.reply.storeen.public.community.forum.reply.store',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4178 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'feeds.showen.feeds.show',
          ),
          1 => 
          array (
            0 => 'name',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4211 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.password.reseten.public.member.password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4245 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.confirmen.public.member.confirm',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4285 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.newsletter.unsubscribeen.public.newsletter.unsubscribe',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4309 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.community.groups.showen.public.community.groups.show',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4383 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.sitemap.indexen.public.sitemap.index',
          ),
          1 => 
          array (
            0 => 'key',
            1 => 'extension',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4407 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.singleen.public.single',
            'slug' => NULL,
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4458 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cJV3UF3FpvZ2kDWJ',
            'slug' => NULL,
          ),
          1 => 
          array (
            0 => 'prefix',
            1 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4507 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'facebook-deletion-status',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4554 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fob-comment.public.comments.reply',
          ),
          1 => 
          array (
            0 => 'comment',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4591 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.community.forum.category',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4606 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.community.forum.topic.store',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4633 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.community.forum.topic',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4648 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.community.forum.reply.store',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4672 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'feeds.show',
          ),
          1 => 
          array (
            0 => 'name',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4695 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storage.local',
          ),
          1 => 
          array (
            0 => 'path',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4719 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.watch.channel',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4752 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4787 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.member.confirm',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4828 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.newsletter.unsubscribe',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4853 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.community.groups.show',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4928 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.sitemap.index',
          ),
          1 => 
          array (
            0 => 'key',
            1 => 'extension',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4947 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public.single',
            'slug' => NULL,
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4998 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::S6ueccbVH3C4CEWy',
            'slug' => NULL,
          ),
          1 => 
          array (
            0 => 'prefix',
            1 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'api.sanctum-token.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/settings/api/sanctum-token',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'api.sanctum-token.index',
        'uses' => 'Botble\\Api\\Http\\Controllers\\SanctumTokenController@index',
        'controller' => 'Botble\\Api\\Http\\Controllers\\SanctumTokenController@index',
        'namespace' => NULL,
        'prefix' => 'admin/settings/api/sanctum-token/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.sanctum-token.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/api/sanctum-token/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'api.sanctum-token.create',
        'uses' => 'Botble\\Api\\Http\\Controllers\\SanctumTokenController@create',
        'controller' => 'Botble\\Api\\Http\\Controllers\\SanctumTokenController@create',
        'namespace' => NULL,
        'prefix' => 'admin/settings/api/sanctum-token/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.sanctum-token.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/api/sanctum-token/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'api.sanctum-token.store',
        'uses' => 'Botble\\Api\\Http\\Controllers\\SanctumTokenController@store',
        'controller' => 'Botble\\Api\\Http\\Controllers\\SanctumTokenController@store',
        'namespace' => NULL,
        'prefix' => 'admin/settings/api/sanctum-token/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.sanctum-token.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/settings/api/sanctum-token/{sanctum_token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'api.sanctum-token.destroy',
        'uses' => 'Botble\\Api\\Http\\Controllers\\SanctumTokenController@destroy',
        'controller' => 'Botble\\Api\\Http\\Controllers\\SanctumTokenController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/settings/api/sanctum-token/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'sanctum_token' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/api',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'api.settings',
        'uses' => 'Botble\\Api\\Http\\Controllers\\ApiController@edit',
        'controller' => 'Botble\\Api\\Http\\Controllers\\ApiController@edit',
        'as' => 'api.settings',
        'namespace' => NULL,
        'prefix' => 'admin/settings/api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.settings.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/api',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'api.settings',
        'uses' => 'Botble\\Api\\Http\\Controllers\\ApiController@update',
        'controller' => 'Botble\\Api\\Http\\Controllers\\ApiController@update',
        'as' => 'api.settings.update',
        'namespace' => NULL,
        'prefix' => 'admin/settings/api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.send-notification' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/api/send-notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'api.settings',
        'uses' => 'Botble\\Api\\Http\\Controllers\\ApiController@sendNotification',
        'controller' => 'Botble\\Api\\Http\\Controllers\\ApiController@sendNotification',
        'as' => 'api.send-notification',
        'namespace' => NULL,
        'prefix' => 'admin/settings/api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.device-tokens-stats' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/api/device-tokens-stats',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'api.settings',
        'uses' => 'Botble\\Api\\Http\\Controllers\\ApiController@getDeviceTokensStats',
        'controller' => 'Botble\\Api\\Http\\Controllers\\ApiController@getDeviceTokensStats',
        'as' => 'api.device-tokens-stats',
        'namespace' => NULL,
        'prefix' => 'admin/settings/api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.upload-service-account' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/api/upload-service-account',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'api.settings',
        'uses' => 'Botble\\Api\\Http\\Controllers\\ApiController@uploadServiceAccount',
        'controller' => 'Botble\\Api\\Http\\Controllers\\ApiController@uploadServiceAccount',
        'as' => 'api.upload-service-account',
        'namespace' => NULL,
        'prefix' => 'admin/settings/api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.remove-service-account' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/api/remove-service-account',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'api.settings',
        'uses' => 'Botble\\Api\\Http\\Controllers\\ApiController@removeServiceAccount',
        'controller' => 'Botble\\Api\\Http\\Controllers\\ApiController@removeServiceAccount',
        'as' => 'api.remove-service-account',
        'namespace' => NULL,
        'prefix' => 'admin/settings/api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Q8z6Tcbm6xi6EO4Z' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Botble\\Api\\Http\\Controllers\\AuthenticationController@register',
        'controller' => 'Botble\\Api\\Http\\Controllers\\AuthenticationController@register',
        'namespace' => 'Botble\\Api\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::Q8z6Tcbm6xi6EO4Z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::84i5GHieQUeYahWt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Botble\\Api\\Http\\Controllers\\AuthenticationController@login',
        'controller' => 'Botble\\Api\\Http\\Controllers\\AuthenticationController@login',
        'namespace' => 'Botble\\Api\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::84i5GHieQUeYahWt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Txj2nyzKVvYzFtVE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/email/check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Botble\\Api\\Http\\Controllers\\AuthenticationController@checkEmail',
        'controller' => 'Botble\\Api\\Http\\Controllers\\AuthenticationController@checkEmail',
        'namespace' => 'Botble\\Api\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::Txj2nyzKVvYzFtVE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NvPA8B9EtXvTI8T7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/password/forgot',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Botble\\Api\\Http\\Controllers\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'Botble\\Api\\Http\\Controllers\\ForgotPasswordController@sendResetLinkEmail',
        'namespace' => 'Botble\\Api\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::NvPA8B9EtXvTI8T7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IufwrrnoB6uvSXaV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/resend-verify-account-email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Botble\\Api\\Http\\Controllers\\VerificationController@resend',
        'controller' => 'Botble\\Api\\Http\\Controllers\\VerificationController@resend',
        'namespace' => 'Botble\\Api\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::IufwrrnoB6uvSXaV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6RvItdjonDYkkiOE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/device-tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'Botble\\Api\\Http\\Controllers\\DeviceTokenController@store',
        'controller' => 'Botble\\Api\\Http\\Controllers\\DeviceTokenController@store',
        'namespace' => 'Botble\\Api\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::6RvItdjonDYkkiOE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sagjcyV63owsntSh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'Botble\\Api\\Http\\Controllers\\AuthenticationController@logout',
        'controller' => 'Botble\\Api\\Http\\Controllers\\AuthenticationController@logout',
        'namespace' => 'Botble\\Api\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::sagjcyV63owsntSh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FT8op65rtiip6qfs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/me',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'Botble\\Api\\Http\\Controllers\\ProfileController@getProfile',
        'controller' => 'Botble\\Api\\Http\\Controllers\\ProfileController@getProfile',
        'namespace' => 'Botble\\Api\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::FT8op65rtiip6qfs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hbNFgUrUOpw61WvU' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/me',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'Botble\\Api\\Http\\Controllers\\ProfileController@updateProfile',
        'controller' => 'Botble\\Api\\Http\\Controllers\\ProfileController@updateProfile',
        'namespace' => 'Botble\\Api\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::hbNFgUrUOpw61WvU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jxhoXJadLXs46s4d' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/update/avatar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'Botble\\Api\\Http\\Controllers\\ProfileController@updateAvatar',
        'controller' => 'Botble\\Api\\Http\\Controllers\\ProfileController@updateAvatar',
        'namespace' => 'Botble\\Api\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::jxhoXJadLXs46s4d',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::05CCGPc9spEPZPNt' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/update/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'Botble\\Api\\Http\\Controllers\\ProfileController@updatePassword',
        'controller' => 'Botble\\Api\\Http\\Controllers\\ProfileController@updatePassword',
        'namespace' => 'Botble\\Api\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::05CCGPc9spEPZPNt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eCsX0d6dMbMa9B2s' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'Botble\\Api\\Http\\Controllers\\ProfileController@getSettings',
        'controller' => 'Botble\\Api\\Http\\Controllers\\ProfileController@getSettings',
        'namespace' => 'Botble\\Api\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::eCsX0d6dMbMa9B2s',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vFAuzb0NUMXwbqq5' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'Botble\\Api\\Http\\Controllers\\ProfileController@updateSettings',
        'controller' => 'Botble\\Api\\Http\\Controllers\\ProfileController@updateSettings',
        'namespace' => 'Botble\\Api\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::vFAuzb0NUMXwbqq5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4sP3kRTFKodRo2Yc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/device-tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'Botble\\Api\\Http\\Controllers\\DeviceTokenController@index',
        'controller' => 'Botble\\Api\\Http\\Controllers\\DeviceTokenController@index',
        'namespace' => 'Botble\\Api\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::4sP3kRTFKodRo2Yc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CXHBJCLnxd271u1B' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/device-tokens/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'Botble\\Api\\Http\\Controllers\\DeviceTokenController@update',
        'controller' => 'Botble\\Api\\Http\\Controllers\\DeviceTokenController@update',
        'namespace' => 'Botble\\Api\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::CXHBJCLnxd271u1B',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'id' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QlVmXn7rjbKbodKR' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/device-tokens/by-token',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'Botble\\Api\\Http\\Controllers\\DeviceTokenController@destroyByToken',
        'controller' => 'Botble\\Api\\Http\\Controllers\\DeviceTokenController@destroyByToken',
        'namespace' => 'Botble\\Api\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::QlVmXn7rjbKbodKR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VNsZcvqBdLMpkZDn' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/device-tokens/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'Botble\\Api\\Http\\Controllers\\DeviceTokenController@destroy',
        'controller' => 'Botble\\Api\\Http\\Controllers\\DeviceTokenController@destroy',
        'namespace' => 'Botble\\Api\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::VNsZcvqBdLMpkZDn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'id' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JIbAptTG3d7feFqh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/device-tokens/{id}/deactivate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'Botble\\Api\\Http\\Controllers\\DeviceTokenController@deactivate',
        'controller' => 'Botble\\Api\\Http\\Controllers\\DeviceTokenController@deactivate',
        'namespace' => 'Botble\\Api\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::JIbAptTG3d7feFqh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'id' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jBJTfUnkvoj7xoa1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/notifications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'Botble\\Api\\Http\\Controllers\\NotificationController@index',
        'controller' => 'Botble\\Api\\Http\\Controllers\\NotificationController@index',
        'namespace' => 'Botble\\Api\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::jBJTfUnkvoj7xoa1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wUUxwkdi6bxL8uPT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/notifications/stats',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'Botble\\Api\\Http\\Controllers\\NotificationController@getStats',
        'controller' => 'Botble\\Api\\Http\\Controllers\\NotificationController@getStats',
        'namespace' => 'Botble\\Api\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::wUUxwkdi6bxL8uPT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kX7vp8VjeO4AVbqW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/notifications/mark-all-read',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'Botble\\Api\\Http\\Controllers\\NotificationController@markAllAsRead',
        'controller' => 'Botble\\Api\\Http\\Controllers\\NotificationController@markAllAsRead',
        'namespace' => 'Botble\\Api\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::kX7vp8VjeO4AVbqW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fsG0DGqsNcuV3hFh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/notifications/{id}/read',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'Botble\\Api\\Http\\Controllers\\NotificationController@markAsRead',
        'controller' => 'Botble\\Api\\Http\\Controllers\\NotificationController@markAsRead',
        'namespace' => 'Botble\\Api\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::fsG0DGqsNcuV3hFh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'id' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::D0r97TlTAOKdHvmG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/notifications/{id}/clicked',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'Botble\\Api\\Http\\Controllers\\NotificationController@markAsClicked',
        'controller' => 'Botble\\Api\\Http\\Controllers\\NotificationController@markAsClicked',
        'namespace' => 'Botble\\Api\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::D0r97TlTAOKdHvmG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'id' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mXCkifhAghRedrkI' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/notifications/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'Botble\\Api\\Http\\Controllers\\NotificationController@destroy',
        'controller' => 'Botble\\Api\\Http\\Controllers\\NotificationController@destroy',
        'namespace' => 'Botble\\Api\\Http\\Controllers',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::mXCkifhAghRedrkI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'id' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tools.data-synchronize' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tools/data-synchronize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'tools.data-synchronize',
        'uses' => 'Botble\\DataSynchronize\\Http\\Controllers\\DataSynchronizeController@index',
        'controller' => 'Botble\\DataSynchronize\\Http\\Controllers\\DataSynchronizeController@index',
        'namespace' => NULL,
        'prefix' => 'admin',
        'where' => 
        array (
        ),
        'as' => 'tools.data-synchronize',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'data-synchronize.upload' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/data-synchronize/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
          3 => 'Botble\\Base\\Http\\Middleware\\DisableInDemoModeMiddleware',
        ),
        'permission' => 'tools.data-synchronize',
        'uses' => 'Botble\\DataSynchronize\\Http\\Controllers\\UploadController@__invoke',
        'controller' => 'Botble\\DataSynchronize\\Http\\Controllers\\UploadController@__invoke',
        'as' => 'data-synchronize.upload',
        'namespace' => NULL,
        'prefix' => 'admin/data-synchronize',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'get-started.save' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/get-started/save',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
          3 => 'preventDemo',
        ),
        'as' => 'get-started.save',
        'uses' => 'Botble\\GetStarted\\Http\\Controllers\\GetStartedController@save',
        'permission' => false,
        'controller' => 'Botble\\GetStarted\\Http\\Controllers\\GetStartedController@save',
        'namespace' => 'Botble\\GetStarted\\Http\\Controllers',
        'prefix' => 'admin/get-started',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'installers.welcome' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/welcome',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'uses' => 'Botble\\Installer\\Http\\Controllers\\InstallController@index',
        'controller' => 'Botble\\Installer\\Http\\Controllers\\InstallController@index',
        'as' => 'installers.welcome',
        'namespace' => NULL,
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'installers.welcome.next' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'install/welcome/next',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'uses' => 'Botble\\Installer\\Http\\Controllers\\InstallController@next',
        'controller' => 'Botble\\Installer\\Http\\Controllers\\InstallController@next',
        'as' => 'installers.welcome.next',
        'namespace' => NULL,
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'installers.requirements.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'install/requirements',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'as' => 'installers.requirements.index',
        'uses' => 'Botble\\Installer\\Http\\Controllers\\RequirementController@index',
        'controller' => 'Botble\\Installer\\Http\\Controllers\\RequirementController@index',
        'namespace' => NULL,
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'installers.environments.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'install/environments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'as' => 'installers.environments.index',
        'uses' => 'Botble\\Installer\\Http\\Controllers\\EnvironmentController@index',
        'controller' => 'Botble\\Installer\\Http\\Controllers\\EnvironmentController@index',
        'namespace' => NULL,
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'installers.environments.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'install/environments/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'as' => 'installers.environments.store',
        'uses' => 'Botble\\Installer\\Http\\Controllers\\EnvironmentController@store',
        'controller' => 'Botble\\Installer\\Http\\Controllers\\EnvironmentController@store',
        'namespace' => NULL,
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'installers.themes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/themes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'installing',
        ),
        'uses' => 'Botble\\Installer\\Http\\Controllers\\ThemeController@index',
        'controller' => 'Botble\\Installer\\Http\\Controllers\\ThemeController@index',
        'as' => 'installers.themes.index',
        'namespace' => NULL,
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'installers.themes.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'install/themes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'installing',
        ),
        'uses' => 'Botble\\Installer\\Http\\Controllers\\ThemeController@store',
        'controller' => 'Botble\\Installer\\Http\\Controllers\\ThemeController@store',
        'as' => 'installers.themes.store',
        'namespace' => NULL,
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'installers.theme-presets.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/theme-presets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'installing',
        ),
        'uses' => 'Botble\\Installer\\Http\\Controllers\\ThemePresetController@index',
        'controller' => 'Botble\\Installer\\Http\\Controllers\\ThemePresetController@index',
        'as' => 'installers.theme-presets.index',
        'namespace' => NULL,
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'installers.theme-presets.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'install/theme-presets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'installing',
        ),
        'uses' => 'Botble\\Installer\\Http\\Controllers\\ThemePresetController@store',
        'controller' => 'Botble\\Installer\\Http\\Controllers\\ThemePresetController@store',
        'as' => 'installers.theme-presets.store',
        'namespace' => NULL,
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'installers.accounts.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'install/accounts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'installing',
        ),
        'as' => 'installers.accounts.index',
        'uses' => 'Botble\\Installer\\Http\\Controllers\\AccountController@index',
        'controller' => 'Botble\\Installer\\Http\\Controllers\\AccountController@index',
        'namespace' => NULL,
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'installers.accounts.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'install/accounts/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'installing',
        ),
        'as' => 'installers.accounts.store',
        'uses' => 'Botble\\Installer\\Http\\Controllers\\AccountController@store',
        'controller' => 'Botble\\Installer\\Http\\Controllers\\AccountController@store',
        'namespace' => NULL,
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'installers.licenses.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'install/licenses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'installing',
        ),
        'as' => 'installers.licenses.index',
        'uses' => 'Botble\\Installer\\Http\\Controllers\\LicenseController@index',
        'controller' => 'Botble\\Installer\\Http\\Controllers\\LicenseController@index',
        'namespace' => NULL,
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'installers.licenses.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'install/licenses/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'installing',
        ),
        'as' => 'installers.licenses.store',
        'uses' => 'Botble\\Installer\\Http\\Controllers\\LicenseController@store',
        'controller' => 'Botble\\Installer\\Http\\Controllers\\LicenseController@store',
        'namespace' => NULL,
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'installers.final' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/final',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'installing',
        ),
        'uses' => 'Botble\\Installer\\Http\\Controllers\\FinalController@index',
        'controller' => 'Botble\\Installer\\Http\\Controllers\\FinalController@index',
        'as' => 'installers.final',
        'namespace' => NULL,
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'installers.licenses.skip' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'install/licenses/skip',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'installing',
        ),
        'uses' => 'Botble\\Installer\\Http\\Controllers\\LicenseController@skip',
        'controller' => 'Botble\\Installer\\Http\\Controllers\\LicenseController@skip',
        'as' => 'installers.licenses.skip',
        'namespace' => NULL,
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menus.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/menus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'menus.index',
        'uses' => 'Botble\\Menu\\Http\\Controllers\\MenuController@index',
        'controller' => 'Botble\\Menu\\Http\\Controllers\\MenuController@index',
        'namespace' => 'Botble\\Menu\\Http\\Controllers',
        'prefix' => 'admin/menus',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menus.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/menus/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'menus.create',
        'uses' => 'Botble\\Menu\\Http\\Controllers\\MenuController@create',
        'controller' => 'Botble\\Menu\\Http\\Controllers\\MenuController@create',
        'namespace' => 'Botble\\Menu\\Http\\Controllers',
        'prefix' => 'admin/menus',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menus.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/menus/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'menus.store',
        'uses' => 'Botble\\Menu\\Http\\Controllers\\MenuController@store',
        'controller' => 'Botble\\Menu\\Http\\Controllers\\MenuController@store',
        'namespace' => 'Botble\\Menu\\Http\\Controllers',
        'prefix' => 'admin/menus',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menus.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/menus/edit/{menu}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'menus.edit',
        'uses' => 'Botble\\Menu\\Http\\Controllers\\MenuController@edit',
        'controller' => 'Botble\\Menu\\Http\\Controllers\\MenuController@edit',
        'namespace' => 'Botble\\Menu\\Http\\Controllers',
        'prefix' => 'admin/menus',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'menu' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menus.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/menus/edit/{menu}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'menus.update',
        'uses' => 'Botble\\Menu\\Http\\Controllers\\MenuController@update',
        'controller' => 'Botble\\Menu\\Http\\Controllers\\MenuController@update',
        'namespace' => 'Botble\\Menu\\Http\\Controllers',
        'prefix' => 'admin/menus',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'menu' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menus.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/menus/{menu}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'menus.destroy',
        'uses' => 'Botble\\Menu\\Http\\Controllers\\MenuController@destroy',
        'controller' => 'Botble\\Menu\\Http\\Controllers\\MenuController@destroy',
        'namespace' => 'Botble\\Menu\\Http\\Controllers',
        'prefix' => 'admin/menus',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'menu' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menus.get-node' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/menus/ajax/get-node',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'menus.get-node',
        'uses' => 'Botble\\Menu\\Http\\Controllers\\MenuController@getNode',
        'permission' => 'menus.index',
        'controller' => 'Botble\\Menu\\Http\\Controllers\\MenuController@getNode',
        'namespace' => 'Botble\\Menu\\Http\\Controllers',
        'prefix' => 'admin/menus',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'optimize.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/optimize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'optimize.settings',
        'uses' => 'Botble\\Optimize\\Http\\Controllers\\Settings\\OptimizeSettingController@edit',
        'controller' => 'Botble\\Optimize\\Http\\Controllers\\Settings\\OptimizeSettingController@edit',
        'namespace' => 'Botble\\Optimize\\Http\\Controllers',
        'prefix' => 'admin/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'optimize.settings.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/optimize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'optimize.settings.update',
        'uses' => 'Botble\\Optimize\\Http\\Controllers\\Settings\\OptimizeSettingController@update',
        'permission' => 'optimize.settings',
        'controller' => 'Botble\\Optimize\\Http\\Controllers\\Settings\\OptimizeSettingController@update',
        'namespace' => 'Botble\\Optimize\\Http\\Controllers',
        'prefix' => 'admin/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pages.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/pages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'pages.index',
        'uses' => 'Botble\\Page\\Http\\Controllers\\PageController@index',
        'controller' => 'Botble\\Page\\Http\\Controllers\\PageController@index',
        'namespace' => 'Botble\\Page\\Http\\Controllers',
        'prefix' => 'admin/pages',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pages.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/pages/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'pages.create',
        'uses' => 'Botble\\Page\\Http\\Controllers\\PageController@create',
        'controller' => 'Botble\\Page\\Http\\Controllers\\PageController@create',
        'namespace' => 'Botble\\Page\\Http\\Controllers',
        'prefix' => 'admin/pages',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pages.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/pages/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'pages.store',
        'uses' => 'Botble\\Page\\Http\\Controllers\\PageController@store',
        'controller' => 'Botble\\Page\\Http\\Controllers\\PageController@store',
        'namespace' => 'Botble\\Page\\Http\\Controllers',
        'prefix' => 'admin/pages',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pages.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/pages/edit/{page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'pages.edit',
        'uses' => 'Botble\\Page\\Http\\Controllers\\PageController@edit',
        'controller' => 'Botble\\Page\\Http\\Controllers\\PageController@edit',
        'namespace' => 'Botble\\Page\\Http\\Controllers',
        'prefix' => 'admin/pages',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'page' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pages.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/pages/edit/{page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'pages.update',
        'uses' => 'Botble\\Page\\Http\\Controllers\\PageController@update',
        'controller' => 'Botble\\Page\\Http\\Controllers\\PageController@update',
        'namespace' => 'Botble\\Page\\Http\\Controllers',
        'prefix' => 'admin/pages',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'page' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pages.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/pages/{page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'pages.destroy',
        'uses' => 'Botble\\Page\\Http\\Controllers\\PageController@destroy',
        'controller' => 'Botble\\Page\\Http\\Controllers\\PageController@destroy',
        'namespace' => 'Botble\\Page\\Http\\Controllers',
        'prefix' => 'admin/pages',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'page' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pages.visual-builder' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/pages/{page}/visual-builder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'pages.visual-builder',
        'uses' => 'Botble\\Page\\Http\\Controllers\\PageController@visualBuilder',
        'permission' => 'pages.edit',
        'controller' => 'Botble\\Page\\Http\\Controllers\\PageController@visualBuilder',
        'namespace' => 'Botble\\Page\\Http\\Controllers',
        'prefix' => 'admin/pages',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pages.preview' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/pages/{page}/preview',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'pages.preview',
        'uses' => 'Botble\\Page\\Http\\Controllers\\PageController@preview',
        'permission' => 'pages.edit',
        'controller' => 'Botble\\Page\\Http\\Controllers\\PageController@preview',
        'namespace' => 'Botble\\Page\\Http\\Controllers',
        'prefix' => 'admin/pages',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pages.visual-builder.save' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/pages/{page}/visual-builder/save',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'pages.visual-builder.save',
        'uses' => 'Botble\\Page\\Http\\Controllers\\PageController@saveVisualBuilder',
        'permission' => 'pages.edit',
        'controller' => 'Botble\\Page\\Http\\Controllers\\PageController@saveVisualBuilder',
        'namespace' => 'Botble\\Page\\Http\\Controllers',
        'prefix' => 'admin/pages',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pages.visual-builder.render-items' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/pages/visual-builder/render-items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'pages.visual-builder.render-items',
        'uses' => 'Botble\\Page\\Http\\Controllers\\PageController@renderShortcodeItems',
        'permission' => 'pages.edit',
        'controller' => 'Botble\\Page\\Http\\Controllers\\PageController@renderShortcodeItems',
        'namespace' => 'Botble\\Page\\Http\\Controllers',
        'prefix' => 'admin/pages',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pages.visual-builder.render-types' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/pages/visual-builder/render-types',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'pages.visual-builder.render-types',
        'uses' => 'Botble\\Page\\Http\\Controllers\\PageController@renderShortcodeTypes',
        'permission' => 'pages.edit',
        'controller' => 'Botble\\Page\\Http\\Controllers\\PageController@renderShortcodeTypes',
        'namespace' => 'Botble\\Page\\Http\\Controllers',
        'prefix' => 'admin/pages',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4Mn5OGrqAHbPwHoM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/pages',
      'action' => 
      array (
        'middleware' => 'api',
        'uses' => 'Botble\\Page\\Http\\Controllers\\API\\PageController@index',
        'controller' => 'Botble\\Page\\Http\\Controllers\\API\\PageController@index',
        'namespace' => 'Botble\\Page\\Http\\Controllers\\API',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::4Mn5OGrqAHbPwHoM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LoZcdtoRX0pNPE3N' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/pages/{id}',
      'action' => 
      array (
        'middleware' => 'api',
        'uses' => 'Botble\\Page\\Http\\Controllers\\API\\PageController@show',
        'controller' => 'Botble\\Page\\Http\\Controllers\\API\\PageController@show',
        'namespace' => 'Botble\\Page\\Http\\Controllers\\API',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::LoZcdtoRX0pNPE3N',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'id' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'settings.index',
        'uses' => 'Botble\\Setting\\Http\\Controllers\\HomeSettingController@index',
        'controller' => 'Botble\\Setting\\Http\\Controllers\\HomeSettingController@index',
        'namespace' => 'Botble\\Setting\\Http\\Controllers',
        'prefix' => 'admin/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.options' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/options',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'settings.options',
        'uses' => 'Botble\\Setting\\Http\\Controllers\\HomeSettingController@index',
        'permission' => 'settings.index',
        'controller' => 'Botble\\Setting\\Http\\Controllers\\HomeSettingController@index',
        'namespace' => 'Botble\\Setting\\Http\\Controllers',
        'prefix' => 'admin/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.general' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/general',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'settings.general',
        'uses' => 'Botble\\Setting\\Http\\Controllers\\GeneralSettingController@edit',
        'permission' => 'settings.options',
        'controller' => 'Botble\\Setting\\Http\\Controllers\\GeneralSettingController@edit',
        'namespace' => 'Botble\\Setting\\Http\\Controllers',
        'prefix' => 'admin/settings/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.general.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/general',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'settings.general.update',
        'uses' => 'Botble\\Setting\\Http\\Controllers\\GeneralSettingController@update',
        'permission' => 'settings.options',
        'controller' => 'Botble\\Setting\\Http\\Controllers\\GeneralSettingController@update',
        'namespace' => 'Botble\\Setting\\Http\\Controllers',
        'prefix' => 'admin/settings/general',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.admin-appearance' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/admin-appearance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'settings.admin-appearance',
        'uses' => 'Botble\\Setting\\Http\\Controllers\\AdminAppearanceSettingController@index',
        'controller' => 'Botble\\Setting\\Http\\Controllers\\AdminAppearanceSettingController@index',
        'namespace' => 'Botble\\Setting\\Http\\Controllers',
        'prefix' => 'admin/settings/admin-appearance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.admin-appearance.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/admin-appearance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'settings.admin-appearance.update',
        'uses' => 'Botble\\Setting\\Http\\Controllers\\AdminAppearanceSettingController@update',
        'permission' => 'settings.admin-appearance',
        'controller' => 'Botble\\Setting\\Http\\Controllers\\AdminAppearanceSettingController@update',
        'namespace' => 'Botble\\Setting\\Http\\Controllers',
        'prefix' => 'admin/settings/admin-appearance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.cache' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/cache',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'settings.cache',
        'uses' => 'Botble\\Setting\\Http\\Controllers\\CacheSettingController@edit',
        'controller' => 'Botble\\Setting\\Http\\Controllers\\CacheSettingController@edit',
        'namespace' => 'Botble\\Setting\\Http\\Controllers',
        'prefix' => 'admin/settings/cache',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.cache.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/cache/cache',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'settings.cache.update',
        'uses' => 'Botble\\Setting\\Http\\Controllers\\CacheSettingController@update',
        'permission' => 'settings.cache',
        'controller' => 'Botble\\Setting\\Http\\Controllers\\CacheSettingController@update',
        'namespace' => 'Botble\\Setting\\Http\\Controllers',
        'prefix' => 'admin/settings/cache',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.datatables' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/datatables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'settings.datatables',
        'uses' => 'Botble\\Setting\\Http\\Controllers\\DataTableSettingController@edit',
        'controller' => 'Botble\\Setting\\Http\\Controllers\\DataTableSettingController@edit',
        'namespace' => 'Botble\\Setting\\Http\\Controllers',
        'prefix' => 'admin/settings/datatables',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.datatables.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/datatables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'settings.datatables.update',
        'uses' => 'Botble\\Setting\\Http\\Controllers\\DataTableSettingController@update',
        'permission' => 'settings.datatables',
        'controller' => 'Botble\\Setting\\Http\\Controllers\\DataTableSettingController@update',
        'namespace' => 'Botble\\Setting\\Http\\Controllers',
        'prefix' => 'admin/settings/datatables',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.media' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/media',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'settings.media',
        'uses' => 'Botble\\Setting\\Http\\Controllers\\MediaSettingController@edit',
        'controller' => 'Botble\\Setting\\Http\\Controllers\\MediaSettingController@edit',
        'namespace' => 'Botble\\Setting\\Http\\Controllers',
        'prefix' => 'admin/settings/media',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.media.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/media',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
          3 => 'preventDemo',
        ),
        'as' => 'settings.media.update',
        'uses' => 'Botble\\Setting\\Http\\Controllers\\MediaSettingController@update',
        'permission' => 'settings.media',
        'controller' => 'Botble\\Setting\\Http\\Controllers\\MediaSettingController@update',
        'namespace' => 'Botble\\Setting\\Http\\Controllers',
        'prefix' => 'admin/settings/media',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.media.generate-thumbnails' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/media/generate-thumbnails',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
          3 => 'preventDemo',
        ),
        'as' => 'settings.media.generate-thumbnails',
        'uses' => 'Botble\\Setting\\Http\\Controllers\\MediaSettingController@generateThumbnails',
        'permission' => 'settings.media',
        'controller' => 'Botble\\Setting\\Http\\Controllers\\MediaSettingController@generateThumbnails',
        'namespace' => 'Botble\\Setting\\Http\\Controllers',
        'prefix' => 'admin/settings/media',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.license.verify' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/license/verify/old',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'settings.license.verify',
        'uses' => 'Botble\\Setting\\Http\\Controllers\\GeneralSettingController@getVerifyLicense',
        'permission' => false,
        'controller' => 'Botble\\Setting\\Http\\Controllers\\GeneralSettingController@getVerifyLicense',
        'namespace' => 'Botble\\Setting\\Http\\Controllers',
        'prefix' => 'admin/settings/license',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.license.verify.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/license/verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'settings.license.verify.index',
        'uses' => 'Botble\\Setting\\Http\\Controllers\\GeneralSettingController@getVerifyLicense',
        'permission' => false,
        'controller' => 'Botble\\Setting\\Http\\Controllers\\GeneralSettingController@getVerifyLicense',
        'namespace' => 'Botble\\Setting\\Http\\Controllers',
        'prefix' => 'admin/settings/license',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.license.activate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/license/activate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
          3 => 'preventDemo',
        ),
        'as' => 'settings.license.activate',
        'uses' => 'Botble\\Setting\\Http\\Controllers\\GeneralSettingController@activateLicense',
        'permission' => 'core.manage.license',
        'controller' => 'Botble\\Setting\\Http\\Controllers\\GeneralSettingController@activateLicense',
        'namespace' => 'Botble\\Setting\\Http\\Controllers',
        'prefix' => 'admin/settings/license',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.license.deactivate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/license/deactivate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
          3 => 'preventDemo',
        ),
        'as' => 'settings.license.deactivate',
        'uses' => 'Botble\\Setting\\Http\\Controllers\\GeneralSettingController@deactivateLicense',
        'permission' => 'core.manage.license',
        'controller' => 'Botble\\Setting\\Http\\Controllers\\GeneralSettingController@deactivateLicense',
        'namespace' => 'Botble\\Setting\\Http\\Controllers',
        'prefix' => 'admin/settings/license',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.license.reset' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/license/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
          3 => 'preventDemo',
        ),
        'as' => 'settings.license.reset',
        'uses' => 'Botble\\Setting\\Http\\Controllers\\GeneralSettingController@resetLicense',
        'permission' => 'core.manage.license',
        'controller' => 'Botble\\Setting\\Http\\Controllers\\GeneralSettingController@resetLicense',
        'namespace' => 'Botble\\Setting\\Http\\Controllers',
        'prefix' => 'admin/settings/license',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.email' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'settings.email',
        'as' => 'settings.email',
        'uses' => 'Botble\\Setting\\Http\\Controllers\\EmailSettingController@edit',
        'controller' => 'Botble\\Setting\\Http\\Controllers\\EmailSettingController@edit',
        'namespace' => 'Botble\\Setting\\Http\\Controllers',
        'prefix' => 'admin/settings/email',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.email.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
          3 => 'preventDemo',
        ),
        'permission' => 'settings.email',
        'as' => 'settings.email.update',
        'uses' => 'Botble\\Setting\\Http\\Controllers\\EmailSettingController@update',
        'controller' => 'Botble\\Setting\\Http\\Controllers\\EmailSettingController@update',
        'namespace' => 'Botble\\Setting\\Http\\Controllers',
        'prefix' => 'admin/settings/email',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.email.test.send' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/email/test/send',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'settings.email',
        'as' => 'settings.email.test.send',
        'uses' => 'Botble\\Setting\\Http\\Controllers\\EmailTestController@__invoke',
        'controller' => 'Botble\\Setting\\Http\\Controllers\\EmailTestController@__invoke',
        'namespace' => 'Botble\\Setting\\Http\\Controllers',
        'prefix' => 'admin/settings/email',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.email.template' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/email/templates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'settings.email',
        'as' => 'settings.email.template',
        'uses' => 'Botble\\Setting\\Http\\Controllers\\EmailTemplateSettingController@index',
        'controller' => 'Botble\\Setting\\Http\\Controllers\\EmailTemplateSettingController@index',
        'namespace' => 'Botble\\Setting\\Http\\Controllers',
        'prefix' => 'admin/settings/email/templates',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.email.template.update-settings' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/email/templates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'settings.email',
        'as' => 'settings.email.template.update-settings',
        'uses' => 'Botble\\Setting\\Http\\Controllers\\EmailTemplateSettingController@update',
        'controller' => 'Botble\\Setting\\Http\\Controllers\\EmailTemplateSettingController@update',
        'namespace' => 'Botble\\Setting\\Http\\Controllers',
        'prefix' => 'admin/settings/email/templates',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.email.template.status.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/email/templates/{type}/{module}/{template}/status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
          3 => 'preventDemo',
        ),
        'permission' => 'settings.email',
        'as' => 'settings.email.template.status.update',
        'uses' => 'Botble\\Setting\\Http\\Controllers\\EmailTemplateStatusController@__invoke',
        'controller' => 'Botble\\Setting\\Http\\Controllers\\EmailTemplateStatusController@__invoke',
        'namespace' => 'Botble\\Setting\\Http\\Controllers',
        'prefix' => 'admin/settings/email/templates/{type}/{module}/{template}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.email.template.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/email/templates/{type}/{module}/{template}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'settings.email',
        'as' => 'settings.email.template.edit',
        'uses' => 'Botble\\Setting\\Http\\Controllers\\EmailTemplateController@index',
        'controller' => 'Botble\\Setting\\Http\\Controllers\\EmailTemplateController@index',
        'namespace' => 'Botble\\Setting\\Http\\Controllers',
        'prefix' => 'admin/settings/email/templates/{type}/{module}/{template}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.email.template.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/email/templates/{type}/{module}/{template}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
          3 => 'preventDemo',
        ),
        'permission' => 'settings.email',
        'as' => 'settings.email.template.update',
        'uses' => 'Botble\\Setting\\Http\\Controllers\\EmailTemplateController@update',
        'controller' => 'Botble\\Setting\\Http\\Controllers\\EmailTemplateController@update',
        'namespace' => 'Botble\\Setting\\Http\\Controllers',
        'prefix' => 'admin/settings/email/templates/{type}/{module}/{template}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.email.template.restore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/email/templates/{type}/{module}/{template}/restore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
          3 => 'preventDemo',
        ),
        'permission' => 'settings.email',
        'as' => 'settings.email.template.restore',
        'uses' => 'Botble\\Setting\\Http\\Controllers\\EmailTemplateRestoreController@__invoke',
        'controller' => 'Botble\\Setting\\Http\\Controllers\\EmailTemplateRestoreController@__invoke',
        'namespace' => 'Botble\\Setting\\Http\\Controllers',
        'prefix' => 'admin/settings/email/templates/{type}/{module}/{template}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.email.template.preview' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
        1 => 'GET',
        2 => 'HEAD',
      ),
      'uri' => 'admin/settings/email/templates/{type}/{module}/{template}/preview',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'settings.email',
        'as' => 'settings.email.template.preview',
        'uses' => 'Botble\\Setting\\Http\\Controllers\\EmailTemplatePreviewController@__invoke',
        'controller' => 'Botble\\Setting\\Http\\Controllers\\EmailTemplatePreviewController@__invoke',
        'namespace' => 'Botble\\Setting\\Http\\Controllers',
        'prefix' => 'admin/settings/email/templates/{type}/{module}/{template}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.email.template.iframe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/email/templates/{type}/{module}/{template}/iframe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'settings.email',
        'as' => 'settings.email.template.iframe',
        'uses' => 'Botble\\Setting\\Http\\Controllers\\EmailTemplateIframeController@__invoke',
        'controller' => 'Botble\\Setting\\Http\\Controllers\\EmailTemplateIframeController@__invoke',
        'namespace' => 'Botble\\Setting\\Http\\Controllers',
        'prefix' => 'admin/settings/email/templates/{type}/{module}/{template}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.email.rules' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/email/rules',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'settings.email',
        'uses' => 'Botble\\Setting\\Http\\Controllers\\EmailRuleSettingController@edit',
        'controller' => 'Botble\\Setting\\Http\\Controllers\\EmailRuleSettingController@edit',
        'as' => 'settings.email.rules',
        'namespace' => 'Botble\\Setting\\Http\\Controllers',
        'prefix' => 'admin/settings/email',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.rules.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/email/rules',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 
        array (
          0 => 'settings.email',
          1 => 'settings.email.rules',
        ),
        'as' => 'settings.rules.update',
        'uses' => 'Botble\\Setting\\Http\\Controllers\\EmailRuleSettingController@update',
        'controller' => 'Botble\\Setting\\Http\\Controllers\\EmailRuleSettingController@update',
        'namespace' => 'Botble\\Setting\\Http\\Controllers',
        'prefix' => 'admin/settings/email',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.phone-number.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/phone-number',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'settings.phone-number.index',
        'uses' => 'Botble\\Setting\\Http\\Controllers\\PhoneNumberSettingController@edit',
        'permission' => 'settings.phone-number',
        'controller' => 'Botble\\Setting\\Http\\Controllers\\PhoneNumberSettingController@edit',
        'namespace' => 'Botble\\Setting\\Http\\Controllers',
        'prefix' => 'admin/settings/phone-number',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.phone-number.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/phone-number',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'settings.phone-number.update',
        'uses' => 'Botble\\Setting\\Http\\Controllers\\PhoneNumberSettingController@update',
        'permission' => 'settings.phone-number',
        'controller' => 'Botble\\Setting\\Http\\Controllers\\PhoneNumberSettingController@update',
        'namespace' => 'Botble\\Setting\\Http\\Controllers',
        'prefix' => 'admin/settings/phone-number',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'system.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/system',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'system.index',
        'uses' => 'Botble\\Base\\Http\\Controllers\\SystemController@getIndex',
        'permission' => 'core.system',
        'controller' => 'Botble\\Base\\Http\\Controllers\\SystemController@getIndex',
        'namespace' => 'Botble\\Base\\Http\\Controllers',
        'prefix' => 'admin/system',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'system.info' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/system/info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'superuser',
        'uses' => 'Botble\\Base\\Http\\Controllers\\SystemInformationController@index',
        'controller' => 'Botble\\Base\\Http\\Controllers\\SystemInformationController@index',
        'namespace' => 'Botble\\Base\\Http\\Controllers',
        'prefix' => 'admin/system/info',
        'where' => 
        array (
        ),
        'as' => 'system.info',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'system.info.get-addition-data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/system/info/get-addition-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
          3 => 'Botble\\Base\\Http\\Middleware\\RequiresJsonRequestMiddleware',
        ),
        'permission' => 'superuser',
        'uses' => 'Botble\\Base\\Http\\Controllers\\SystemInformationController@getAdditionData',
        'controller' => 'Botble\\Base\\Http\\Controllers\\SystemInformationController@getAdditionData',
        'namespace' => 'Botble\\Base\\Http\\Controllers',
        'prefix' => 'admin/system/info',
        'where' => 
        array (
        ),
        'as' => 'system.info.get-addition-data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'system.cache' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/system/cache',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'superuser',
        'uses' => 'Botble\\Base\\Http\\Controllers\\CacheManagementController@index',
        'controller' => 'Botble\\Base\\Http\\Controllers\\CacheManagementController@index',
        'namespace' => 'Botble\\Base\\Http\\Controllers',
        'prefix' => 'admin/system/cache',
        'where' => 
        array (
        ),
        'as' => 'system.cache',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'system.cache.clear' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/system/cache/clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
          3 => 'preventDemo',
        ),
        'permission' => 'superuser',
        'uses' => 'Botble\\Base\\Http\\Controllers\\CacheManagementController@destroy',
        'controller' => 'Botble\\Base\\Http\\Controllers\\CacheManagementController@destroy',
        'namespace' => 'Botble\\Base\\Http\\Controllers',
        'prefix' => 'admin/system/cache',
        'where' => 
        array (
        ),
        'as' => 'system.cache.clear',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'system.check-update' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/system/check-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'system.check-update',
        'uses' => 'Botble\\Base\\Http\\Controllers\\SystemController@getCheckUpdate',
        'permission' => 'superuser',
        'controller' => 'Botble\\Base\\Http\\Controllers\\SystemController@getCheckUpdate',
        'namespace' => 'Botble\\Base\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'system.updater' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/system/updater',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'system.updater',
        'uses' => 'Botble\\Base\\Http\\Controllers\\SystemController@getUpdater',
        'permission' => 'superuser',
        'controller' => 'Botble\\Base\\Http\\Controllers\\SystemController@getUpdater',
        'namespace' => 'Botble\\Base\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'system.updater.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/system/updater',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
          3 => 'preventDemo',
        ),
        'as' => 'system.updater.post',
        'uses' => 'Botble\\Base\\Http\\Controllers\\SystemController@postUpdater',
        'permission' => 'superuser',
        'controller' => 'Botble\\Base\\Http\\Controllers\\SystemController@postUpdater',
        'namespace' => 'Botble\\Base\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'system.cleanup' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/system/cleanup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'system.cleanup',
        'uses' => 'Botble\\Base\\Http\\Controllers\\SystemController@getCleanup',
        'permission' => 'superuser',
        'controller' => 'Botble\\Base\\Http\\Controllers\\SystemController@getCleanup',
        'namespace' => 'Botble\\Base\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'system.cleanup.process' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/system/cleanup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
          3 => 'preventDemo',
        ),
        'as' => 'system.cleanup.process',
        'uses' => 'Botble\\Base\\Http\\Controllers\\SystemController@getCleanup',
        'permission' => 'superuser',
        'controller' => 'Botble\\Base\\Http\\Controllers\\SystemController@getCleanup',
        'namespace' => 'Botble\\Base\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'system.debug-mode.turn-off' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/system/debug-mode/turn-off',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
          3 => 'preventDemo',
        ),
        'as' => 'system.debug-mode.turn-off',
        'uses' => 'Botble\\Base\\Http\\Controllers\\DebugModeController@postTurnOff',
        'permission' => 'superuser',
        'controller' => 'Botble\\Base\\Http\\Controllers\\DebugModeController@postTurnOff',
        'namespace' => 'Botble\\Base\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'system.cronjob' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/system/cronjob',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'system.cronjob',
        'uses' => 'Botble\\Base\\Http\\Controllers\\CronjobSettingController@index',
        'controller' => 'Botble\\Base\\Http\\Controllers\\CronjobSettingController@index',
        'namespace' => 'Botble\\Base\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'system.security' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/system/security',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'system.security',
        'uses' => 'Botble\\Base\\Http\\Controllers\\SecuritySettingController@index',
        'controller' => 'Botble\\Base\\Http\\Controllers\\SecuritySettingController@index',
        'namespace' => 'Botble\\Base\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'membership.authorize' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/membership/authorize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => false,
        'as' => 'membership.authorize',
        'uses' => 'Botble\\Base\\Http\\Controllers\\SystemController@postAuthorize',
        'controller' => 'Botble\\Base\\Http\\Controllers\\SystemController@postAuthorize',
        'namespace' => 'Botble\\Base\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'license.check' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/license/check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => false,
        'as' => 'license.check',
        'uses' => 'Botble\\Base\\Http\\Controllers\\SystemController@checkLicense',
        'controller' => 'Botble\\Base\\Http\\Controllers\\SystemController@checkLicense',
        'namespace' => 'Botble\\Base\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menu-items-count' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/menu-items-count',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => false,
        'as' => 'menu-items-count',
        'uses' => 'Botble\\Base\\Http\\Controllers\\SystemController@getMenuItemsCount',
        'controller' => 'Botble\\Base\\Http\\Controllers\\SystemController@getMenuItemsCount',
        'namespace' => 'Botble\\Base\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'unlicensed' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/unlicensed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => false,
        'as' => 'unlicensed',
        'uses' => 'Botble\\Base\\Http\\Controllers\\UnlicensedController@index',
        'controller' => 'Botble\\Base\\Http\\Controllers\\UnlicensedController@index',
        'namespace' => 'Botble\\Base\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'unlicensed.skip' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/unlicensed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => false,
        'as' => 'unlicensed.skip',
        'uses' => 'Botble\\Base\\Http\\Controllers\\UnlicensedController@postSkip',
        'controller' => 'Botble\\Base\\Http\\Controllers\\UnlicensedController@postSkip',
        'namespace' => 'Botble\\Base\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'notifications.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notifications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => false,
        'as' => 'notifications.index',
        'uses' => 'Botble\\Base\\Http\\Controllers\\NotificationController@index',
        'controller' => 'Botble\\Base\\Http\\Controllers\\NotificationController@index',
        'namespace' => 'Botble\\Base\\Http\\Controllers',
        'prefix' => 'admin/notifications',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'notifications.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/notifications/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => false,
        'as' => 'notifications.destroy',
        'uses' => 'Botble\\Base\\Http\\Controllers\\NotificationController@destroy',
        'controller' => 'Botble\\Base\\Http\\Controllers\\NotificationController@destroy',
        'namespace' => 'Botble\\Base\\Http\\Controllers',
        'prefix' => 'admin/notifications',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'id' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'notifications.read-notification' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notifications/read-notification/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => false,
        'as' => 'notifications.read-notification',
        'uses' => 'Botble\\Base\\Http\\Controllers\\NotificationController@read',
        'controller' => 'Botble\\Base\\Http\\Controllers\\NotificationController@read',
        'namespace' => 'Botble\\Base\\Http\\Controllers',
        'prefix' => 'admin/notifications',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'id' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'notifications.read-all-notification' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/notifications/read-all-notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => false,
        'as' => 'notifications.read-all-notification',
        'uses' => 'Botble\\Base\\Http\\Controllers\\NotificationController@readAll',
        'controller' => 'Botble\\Base\\Http\\Controllers\\NotificationController@readAll',
        'namespace' => 'Botble\\Base\\Http\\Controllers',
        'prefix' => 'admin/notifications',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'notifications.destroy-all-notification' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/notifications/destroy-all-notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => false,
        'as' => 'notifications.destroy-all-notification',
        'uses' => 'Botble\\Base\\Http\\Controllers\\NotificationController@deleteAll',
        'controller' => 'Botble\\Base\\Http\\Controllers\\NotificationController@deleteAll',
        'namespace' => 'Botble\\Base\\Http\\Controllers',
        'prefix' => 'admin/notifications',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'notifications.count-unread' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notifications/count-unread',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => false,
        'as' => 'notifications.count-unread',
        'uses' => 'Botble\\Base\\Http\\Controllers\\NotificationController@countUnread',
        'controller' => 'Botble\\Base\\Http\\Controllers\\NotificationController@countUnread',
        'namespace' => 'Botble\\Base\\Http\\Controllers',
        'prefix' => 'admin/notifications',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'toggle-theme-mode' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/toggle-theme-mode',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => false,
        'uses' => 'Botble\\Base\\Http\\Controllers\\ToggleThemeModeController@__invoke',
        'controller' => 'Botble\\Base\\Http\\Controllers\\ToggleThemeModeController@__invoke',
        'namespace' => 'Botble\\Base\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'toggle-theme-mode',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'core.global-search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => false,
        'uses' => 'Botble\\Base\\Http\\Controllers\\SearchController@__invoke',
        'controller' => 'Botble\\Base\\Http\\Controllers\\SearchController@__invoke',
        'namespace' => 'Botble\\Base\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'core.global-search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'core-icons' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/core-icons',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
          3 => 'Botble\\Base\\Http\\Middleware\\RequiresJsonRequestMiddleware',
        ),
        'permission' => false,
        'uses' => 'Botble\\Base\\Http\\Controllers\\CoreIconController@index',
        'controller' => 'Botble\\Base\\Http\\Controllers\\CoreIconController@index',
        'namespace' => 'Botble\\Base\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'core-icons',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'table.bulk-change.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tables/bulk-changes/data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => false,
        'uses' => 'Botble\\Table\\Http\\Controllers\\TableBulkChangeController@index',
        'controller' => 'Botble\\Table\\Http\\Controllers\\TableBulkChangeController@index',
        'as' => 'table.bulk-change.data',
        'namespace' => NULL,
        'prefix' => 'admin/tables/bulk-changes',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'table.bulk-change.save' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/tables/bulk-changes/save',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => false,
        'uses' => 'Botble\\Table\\Http\\Controllers\\TableBulkChangeController@update',
        'controller' => 'Botble\\Table\\Http\\Controllers\\TableBulkChangeController@update',
        'as' => 'table.bulk-change.save',
        'namespace' => NULL,
        'prefix' => 'admin/tables/bulk-changes',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'table.bulk-action.dispatch' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/tables/bulk-actions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => false,
        'uses' => 'Botble\\Table\\Http\\Controllers\\TableBulkActionController@__invoke',
        'controller' => 'Botble\\Table\\Http\\Controllers\\TableBulkActionController@__invoke',
        'as' => 'table.bulk-action.dispatch',
        'namespace' => NULL,
        'prefix' => 'admin/tables/bulk-actions',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'table.filter.input' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tables/filters',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => false,
        'uses' => 'Botble\\Table\\Http\\Controllers\\TableFilterController@__invoke',
        'controller' => 'Botble\\Table\\Http\\Controllers\\TableFilterController@__invoke',
        'as' => 'table.filter.input',
        'namespace' => NULL,
        'prefix' => 'admin/tables/filters',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'table.update-columns-visibility' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/tables/columns-visibility',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
          3 => 'preventDemo',
        ),
        'permission' => false,
        'uses' => 'Botble\\Table\\Http\\Controllers\\TableColumnVisibilityController@update',
        'controller' => 'Botble\\Table\\Http\\Controllers\\TableColumnVisibilityController@update',
        'as' => 'table.update-columns-visibility',
        'namespace' => NULL,
        'prefix' => 'admin/tables/columns-visibility',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'access.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'guest',
        ),
        'uses' => 'Botble\\ACL\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'controller' => 'Botble\\ACL\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'namespace' => 'Botble\\ACL\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'access.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'access.login.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'guest',
        ),
        'uses' => 'Botble\\ACL\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'Botble\\ACL\\Http\\Controllers\\Auth\\LoginController@login',
        'namespace' => 'Botble\\ACL\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'access.login.post',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'access.password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'guest',
        ),
        'uses' => 'Botble\\ACL\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'Botble\\ACL\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'namespace' => 'Botble\\ACL\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'access.password.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'access.password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/password/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'guest',
        ),
        'uses' => 'Botble\\ACL\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'Botble\\ACL\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'namespace' => 'Botble\\ACL\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'access.password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'access.password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'guest',
        ),
        'uses' => 'Botble\\ACL\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'controller' => 'Botble\\ACL\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'namespace' => 'Botble\\ACL\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'access.password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'access.password.reset.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'guest',
        ),
        'uses' => 'Botble\\ACL\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'controller' => 'Botble\\ACL\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'namespace' => 'Botble\\ACL\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'access.password.reset.post',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'access.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'access.logout',
        'uses' => 'Botble\\ACL\\Http\\Controllers\\Auth\\LoginController@logout',
        'permission' => false,
        'controller' => 'Botble\\ACL\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => 'Botble\\ACL\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/system/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'users.index',
        'uses' => 'Botble\\ACL\\Http\\Controllers\\UserController@index',
        'controller' => 'Botble\\ACL\\Http\\Controllers\\UserController@index',
        'namespace' => 'Botble\\ACL\\Http\\Controllers',
        'prefix' => 'admin/system/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/system/users/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'users.create',
        'uses' => 'Botble\\ACL\\Http\\Controllers\\UserController@create',
        'controller' => 'Botble\\ACL\\Http\\Controllers\\UserController@create',
        'namespace' => 'Botble\\ACL\\Http\\Controllers',
        'prefix' => 'admin/system/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/system/users/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'users.store',
        'uses' => 'Botble\\ACL\\Http\\Controllers\\UserController@store',
        'controller' => 'Botble\\ACL\\Http\\Controllers\\UserController@store',
        'namespace' => 'Botble\\ACL\\Http\\Controllers',
        'prefix' => 'admin/system/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/system/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'users.destroy',
        'uses' => 'Botble\\ACL\\Http\\Controllers\\UserController@destroy',
        'controller' => 'Botble\\ACL\\Http\\Controllers\\UserController@destroy',
        'namespace' => 'Botble\\ACL\\Http\\Controllers',
        'prefix' => 'admin/system/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'user' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.profile.image' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/system/users/modify-profile-image/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'users.profile.image',
        'uses' => 'Botble\\ACL\\Http\\Controllers\\UserController@postAvatar',
        'permission' => false,
        'controller' => 'Botble\\ACL\\Http\\Controllers\\UserController@postAvatar',
        'namespace' => 'Botble\\ACL\\Http\\Controllers',
        'prefix' => 'admin/system/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'id' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.profile.image.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/system/users/delete-profile-image/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'users.profile.image.destroy',
        'uses' => 'Botble\\ACL\\Http\\Controllers\\UserController@removeAvatar',
        'permission' => false,
        'controller' => 'Botble\\ACL\\Http\\Controllers\\UserController@removeAvatar',
        'namespace' => 'Botble\\ACL\\Http\\Controllers',
        'prefix' => 'admin/system/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'id' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.change-password' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/system/users/password/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
          3 => 'Botble\\ACL\\Http\\Middleware\\CheckUserUpdatePermission',
          4 => 'preventDemo',
        ),
        'as' => 'users.change-password',
        'uses' => 'Botble\\ACL\\Http\\Controllers\\UserController@postChangePassword',
        'permission' => false,
        'controller' => 'Botble\\ACL\\Http\\Controllers\\UserController@postChangePassword',
        'namespace' => 'Botble\\ACL\\Http\\Controllers',
        'prefix' => 'admin/system/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'user' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.profile.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/system/users/profile/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
          3 => 'Botble\\ACL\\Http\\Middleware\\CheckUserUpdatePermission',
        ),
        'as' => 'users.profile.view',
        'uses' => 'Botble\\ACL\\Http\\Controllers\\UserController@getUserProfile',
        'permission' => false,
        'controller' => 'Botble\\ACL\\Http\\Controllers\\UserController@getUserProfile',
        'namespace' => 'Botble\\ACL\\Http\\Controllers',
        'prefix' => 'admin/system/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'user' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.update-profile' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/system/users/profile/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
          3 => 'Botble\\ACL\\Http\\Middleware\\CheckUserUpdatePermission',
          4 => 'preventDemo',
        ),
        'as' => 'users.update-profile',
        'uses' => 'Botble\\ACL\\Http\\Controllers\\UserController@postUpdateProfile',
        'permission' => false,
        'controller' => 'Botble\\ACL\\Http\\Controllers\\UserController@postUpdateProfile',
        'namespace' => 'Botble\\ACL\\Http\\Controllers',
        'prefix' => 'admin/system/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'user' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.update-preferences' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/system/users/profile/{user}/preferences',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
          3 => 'Botble\\ACL\\Http\\Middleware\\CheckUserUpdatePermission',
          4 => 'preventDemo',
        ),
        'as' => 'users.update-preferences',
        'uses' => 'Botble\\ACL\\Http\\Controllers\\UserController@updatePreferences',
        'permission' => false,
        'controller' => 'Botble\\ACL\\Http\\Controllers\\UserController@updatePreferences',
        'namespace' => 'Botble\\ACL\\Http\\Controllers',
        'prefix' => 'admin/system/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'user' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'admin/system/users/profile/{user}/preferences',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
          3 => 'Botble\\ACL\\Http\\Middleware\\CheckUserUpdatePermission',
        ),
        'uses' => 'Botble\\ACL\\Http\\Controllers\\UserController@patchUpdatePreferences',
        'permission' => false,
        'controller' => 'Botble\\ACL\\Http\\Controllers\\UserController@patchUpdatePreferences',
        'as' => 'users.',
        'namespace' => 'Botble\\ACL\\Http\\Controllers',
        'prefix' => 'admin/system/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'user' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.make-super' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/system/users/make-super/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'users.make-super',
        'uses' => 'Botble\\ACL\\Http\\Controllers\\UserController@makeSuper',
        'permission' => 'superuser',
        'controller' => 'Botble\\ACL\\Http\\Controllers\\UserController@makeSuper',
        'namespace' => 'Botble\\ACL\\Http\\Controllers',
        'prefix' => 'admin/system/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'user' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.remove-super' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/system/users/remove-super/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
          3 => 'preventDemo',
        ),
        'as' => 'users.remove-super',
        'uses' => 'Botble\\ACL\\Http\\Controllers\\UserController@removeSuper',
        'permission' => 'superuser',
        'controller' => 'Botble\\ACL\\Http\\Controllers\\UserController@removeSuper',
        'namespace' => 'Botble\\ACL\\Http\\Controllers',
        'prefix' => 'admin/system/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'user' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'roles.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/system/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'roles.index',
        'uses' => 'Botble\\ACL\\Http\\Controllers\\RoleController@index',
        'controller' => 'Botble\\ACL\\Http\\Controllers\\RoleController@index',
        'namespace' => 'Botble\\ACL\\Http\\Controllers',
        'prefix' => 'admin/system/roles',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'roles.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/system/roles/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'roles.create',
        'uses' => 'Botble\\ACL\\Http\\Controllers\\RoleController@create',
        'controller' => 'Botble\\ACL\\Http\\Controllers\\RoleController@create',
        'namespace' => 'Botble\\ACL\\Http\\Controllers',
        'prefix' => 'admin/system/roles',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'roles.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/system/roles/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'roles.store',
        'uses' => 'Botble\\ACL\\Http\\Controllers\\RoleController@store',
        'controller' => 'Botble\\ACL\\Http\\Controllers\\RoleController@store',
        'namespace' => 'Botble\\ACL\\Http\\Controllers',
        'prefix' => 'admin/system/roles',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'roles.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/system/roles/edit/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'roles.edit',
        'uses' => 'Botble\\ACL\\Http\\Controllers\\RoleController@edit',
        'controller' => 'Botble\\ACL\\Http\\Controllers\\RoleController@edit',
        'namespace' => 'Botble\\ACL\\Http\\Controllers',
        'prefix' => 'admin/system/roles',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'role' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'roles.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/system/roles/edit/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'roles.update',
        'uses' => 'Botble\\ACL\\Http\\Controllers\\RoleController@update',
        'controller' => 'Botble\\ACL\\Http\\Controllers\\RoleController@update',
        'namespace' => 'Botble\\ACL\\Http\\Controllers',
        'prefix' => 'admin/system/roles',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'role' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'roles.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/system/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'roles.destroy',
        'uses' => 'Botble\\ACL\\Http\\Controllers\\RoleController@destroy',
        'controller' => 'Botble\\ACL\\Http\\Controllers\\RoleController@destroy',
        'namespace' => 'Botble\\ACL\\Http\\Controllers',
        'prefix' => 'admin/system/roles',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'role' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'roles.duplicate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/system/roles/duplicate/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'roles.duplicate',
        'uses' => 'Botble\\ACL\\Http\\Controllers\\RoleController@getDuplicate',
        'permission' => 'roles.create',
        'controller' => 'Botble\\ACL\\Http\\Controllers\\RoleController@getDuplicate',
        'namespace' => 'Botble\\ACL\\Http\\Controllers',
        'prefix' => 'admin/system/roles',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'role' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'roles.list.json' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/system/roles/json',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'roles.list.json',
        'uses' => 'Botble\\ACL\\Http\\Controllers\\RoleController@getJson',
        'permission' => 'roles.index',
        'controller' => 'Botble\\ACL\\Http\\Controllers\\RoleController@getJson',
        'namespace' => 'Botble\\ACL\\Http\\Controllers',
        'prefix' => 'admin/system/roles',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'roles.assign' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/system/roles/assign',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'roles.assign',
        'uses' => 'Botble\\ACL\\Http\\Controllers\\RoleController@postAssignMember',
        'permission' => 'roles.edit',
        'controller' => 'Botble\\ACL\\Http\\Controllers\\RoleController@postAssignMember',
        'namespace' => 'Botble\\ACL\\Http\\Controllers',
        'prefix' => 'admin/system/roles',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'dashboard.index',
        'uses' => 'Botble\\Dashboard\\Http\\Controllers\\DashboardController@getDashboard',
        'permission' => false,
        'controller' => 'Botble\\Dashboard\\Http\\Controllers\\DashboardController@getDashboard',
        'namespace' => 'Botble\\Dashboard\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.hide_widget' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/widgets/hide',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => false,
        'as' => 'dashboard.hide_widget',
        'uses' => 'Botble\\Dashboard\\Http\\Controllers\\DashboardController@getHideWidget',
        'controller' => 'Botble\\Dashboard\\Http\\Controllers\\DashboardController@getHideWidget',
        'namespace' => 'Botble\\Dashboard\\Http\\Controllers',
        'prefix' => 'admin/widgets',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.hide_widgets' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/widgets/hides',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => false,
        'as' => 'dashboard.hide_widgets',
        'uses' => 'Botble\\Dashboard\\Http\\Controllers\\DashboardController@postHideWidgets',
        'controller' => 'Botble\\Dashboard\\Http\\Controllers\\DashboardController@postHideWidgets',
        'namespace' => 'Botble\\Dashboard\\Http\\Controllers',
        'prefix' => 'admin/widgets',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.update_widget_order' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/widgets/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => false,
        'as' => 'dashboard.update_widget_order',
        'uses' => 'Botble\\Dashboard\\Http\\Controllers\\DashboardController@postUpdateWidgetOrder',
        'controller' => 'Botble\\Dashboard\\Http\\Controllers\\DashboardController@postUpdateWidgetOrder',
        'namespace' => 'Botble\\Dashboard\\Http\\Controllers',
        'prefix' => 'admin/widgets',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.edit_widget_setting_item' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/widgets/setting-item',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => false,
        'as' => 'dashboard.edit_widget_setting_item',
        'uses' => 'Botble\\Dashboard\\Http\\Controllers\\DashboardController@postEditWidgetSettingItem',
        'controller' => 'Botble\\Dashboard\\Http\\Controllers\\DashboardController@postEditWidgetSettingItem',
        'namespace' => 'Botble\\Dashboard\\Http\\Controllers',
        'prefix' => 'admin/widgets',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'media.indirect.url' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'media/files/{hash}/{id}',
      'action' => 
      array (
        'as' => 'media.indirect.url',
        'uses' => 'Botble\\Media\\Http\\Controllers\\PublicMediaController@show',
        'middleware' => 'throttle',
        'controller' => 'Botble\\Media\\Http\\Controllers\\PublicMediaController@show',
        'namespace' => 'Botble\\Media\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'media.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/media',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'media.index',
        'as' => 'media.index',
        'uses' => 'Botble\\Media\\Http\\Controllers\\MediaController@getMedia',
        'controller' => 'Botble\\Media\\Http\\Controllers\\MediaController@getMedia',
        'namespace' => 'Botble\\Media\\Http\\Controllers',
        'prefix' => 'admin/media',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'media.popup' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/media/popup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'media.index',
        'as' => 'media.popup',
        'uses' => 'Botble\\Media\\Http\\Controllers\\MediaController@getPopup',
        'controller' => 'Botble\\Media\\Http\\Controllers\\MediaController@getPopup',
        'namespace' => 'Botble\\Media\\Http\\Controllers',
        'prefix' => 'admin/media',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'media.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/media/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'media.index',
        'as' => 'media.list',
        'uses' => 'Botble\\Media\\Http\\Controllers\\MediaController@getList',
        'controller' => 'Botble\\Media\\Http\\Controllers\\MediaController@getList',
        'namespace' => 'Botble\\Media\\Http\\Controllers',
        'prefix' => 'admin/media',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'media.breadcrumbs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/media/breadcrumbs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'media.index',
        'as' => 'media.breadcrumbs',
        'uses' => 'Botble\\Media\\Http\\Controllers\\MediaController@getBreadcrumbs',
        'controller' => 'Botble\\Media\\Http\\Controllers\\MediaController@getBreadcrumbs',
        'namespace' => 'Botble\\Media\\Http\\Controllers',
        'prefix' => 'admin/media',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'media.global_actions' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/media/global-actions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'media.index',
        'as' => 'media.global_actions',
        'uses' => 'Botble\\Media\\Http\\Controllers\\MediaController@postGlobalActions',
        'controller' => 'Botble\\Media\\Http\\Controllers\\MediaController@postGlobalActions',
        'namespace' => 'Botble\\Media\\Http\\Controllers',
        'prefix' => 'admin/media',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'media.download' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/media/download',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'media.index',
        'as' => 'media.download',
        'uses' => 'Botble\\Media\\Http\\Controllers\\MediaController@download',
        'controller' => 'Botble\\Media\\Http\\Controllers\\MediaController@download',
        'namespace' => 'Botble\\Media\\Http\\Controllers',
        'prefix' => 'admin/media',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'media.files.upload' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/media/files/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'media.index',
        'as' => 'media.files.upload',
        'uses' => 'Botble\\Media\\Http\\Controllers\\MediaFileController@postUpload',
        'controller' => 'Botble\\Media\\Http\\Controllers\\MediaFileController@postUpload',
        'namespace' => 'Botble\\Media\\Http\\Controllers',
        'prefix' => 'admin/media/files',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'media.files.upload.from.editor' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/media/files/upload-from-editor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'media.index',
        'as' => 'media.files.upload.from.editor',
        'uses' => 'Botble\\Media\\Http\\Controllers\\MediaFileController@postUploadFromEditor',
        'controller' => 'Botble\\Media\\Http\\Controllers\\MediaFileController@postUploadFromEditor',
        'namespace' => 'Botble\\Media\\Http\\Controllers',
        'prefix' => 'admin/media/files',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'media.download_url' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/media/files/download-url',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'media.index',
        'as' => 'media.download_url',
        'uses' => 'Botble\\Media\\Http\\Controllers\\MediaFileController@postDownloadUrl',
        'controller' => 'Botble\\Media\\Http\\Controllers\\MediaFileController@postDownloadUrl',
        'namespace' => 'Botble\\Media\\Http\\Controllers',
        'prefix' => 'admin/media/files',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'media.folders.create' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/media/folders/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'media.index',
        'as' => 'media.folders.create',
        'uses' => 'Botble\\Media\\Http\\Controllers\\MediaFolderController@store',
        'controller' => 'Botble\\Media\\Http\\Controllers\\MediaFolderController@store',
        'namespace' => 'Botble\\Media\\Http\\Controllers',
        'prefix' => 'admin/media/folders',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JJpOAXLbW8zMIsgp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => 'admin/plugins',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'uses' => '\\Illuminate\\Routing\\RedirectController@__invoke',
        'controller' => '\\Illuminate\\Routing\\RedirectController',
        'namespace' => 'Botble\\PluginManagement\\Http\\Controllers',
        'prefix' => 'admin/plugins',
        'where' => 
        array (
        ),
        'as' => 'generated::JJpOAXLbW8zMIsgp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'destination' => 'plugins/installed',
        'status' => 302,
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'plugins.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/plugins/installed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'plugins.index',
        'uses' => 'Botble\\PluginManagement\\Http\\Controllers\\PluginManagementController@index',
        'controller' => 'Botble\\PluginManagement\\Http\\Controllers\\PluginManagementController@index',
        'namespace' => 'Botble\\PluginManagement\\Http\\Controllers',
        'prefix' => 'admin/plugins',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'plugins.change.status' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/plugins/status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
          3 => 'preventDemo',
        ),
        'as' => 'plugins.change.status',
        'uses' => 'Botble\\PluginManagement\\Http\\Controllers\\PluginManagementController@update',
        'permission' => 'plugins.index',
        'controller' => 'Botble\\PluginManagement\\Http\\Controllers\\PluginManagementController@update',
        'namespace' => 'Botble\\PluginManagement\\Http\\Controllers',
        'prefix' => 'admin/plugins',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'plugins.remove' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/plugins/{plugin}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
          3 => 'preventDemo',
        ),
        'as' => 'plugins.remove',
        'uses' => 'Botble\\PluginManagement\\Http\\Controllers\\PluginManagementController@destroy',
        'permission' => 'plugins.index',
        'controller' => 'Botble\\PluginManagement\\Http\\Controllers\\PluginManagementController@destroy',
        'namespace' => 'Botble\\PluginManagement\\Http\\Controllers',
        'prefix' => 'admin/plugins',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'plugins.check-requirement' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/plugins/check-requirement',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'plugins.check-requirement',
        'uses' => 'Botble\\PluginManagement\\Http\\Controllers\\PluginManagementController@checkRequirement',
        'permission' => 'plugins.index',
        'controller' => 'Botble\\PluginManagement\\Http\\Controllers\\PluginManagementController@checkRequirement',
        'namespace' => 'Botble\\PluginManagement\\Http\\Controllers',
        'prefix' => 'admin/plugins',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'plugins.new' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/plugins/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'plugins.new',
        'uses' => 'Botble\\PluginManagement\\Http\\Controllers\\MarketplaceController@index',
        'permission' => 'plugins.marketplace',
        'controller' => 'Botble\\PluginManagement\\Http\\Controllers\\MarketplaceController@index',
        'namespace' => 'Botble\\PluginManagement\\Http\\Controllers',
        'prefix' => 'admin/plugins',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'plugins.marketplace.ajax.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/plugins/marketplace/ajax/plugins',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'plugins.marketplace',
        'as' => 'plugins.marketplace.ajax.list',
        'uses' => 'Botble\\PluginManagement\\Http\\Controllers\\MarketplaceController@list',
        'controller' => 'Botble\\PluginManagement\\Http\\Controllers\\MarketplaceController@list',
        'namespace' => 'Botble\\PluginManagement\\Http\\Controllers',
        'prefix' => 'admin/plugins/marketplace/ajax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'plugins.marketplace.ajax.detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/plugins/marketplace/ajax/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'plugins.marketplace',
        'as' => 'plugins.marketplace.ajax.detail',
        'uses' => 'Botble\\PluginManagement\\Http\\Controllers\\MarketplaceController@detail',
        'controller' => 'Botble\\PluginManagement\\Http\\Controllers\\MarketplaceController@detail',
        'namespace' => 'Botble\\PluginManagement\\Http\\Controllers',
        'prefix' => 'admin/plugins/marketplace/ajax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'plugins.marketplace.ajax.iframe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/plugins/marketplace/ajax/{id}/iframe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'plugins.marketplace',
        'as' => 'plugins.marketplace.ajax.iframe',
        'uses' => 'Botble\\PluginManagement\\Http\\Controllers\\MarketplaceController@iframe',
        'controller' => 'Botble\\PluginManagement\\Http\\Controllers\\MarketplaceController@iframe',
        'namespace' => 'Botble\\PluginManagement\\Http\\Controllers',
        'prefix' => 'admin/plugins/marketplace/ajax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'plugins.marketplace.ajax.install' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/plugins/marketplace/ajax/{id}/install',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
          3 => 'preventDemo',
        ),
        'permission' => 'plugins.marketplace',
        'as' => 'plugins.marketplace.ajax.install',
        'uses' => 'Botble\\PluginManagement\\Http\\Controllers\\MarketplaceController@install',
        'controller' => 'Botble\\PluginManagement\\Http\\Controllers\\MarketplaceController@install',
        'namespace' => 'Botble\\PluginManagement\\Http\\Controllers',
        'prefix' => 'admin/plugins/marketplace/ajax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'plugins.marketplace.ajax.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/plugins/marketplace/ajax/{id}/update/{name?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
          3 => 'preventDemo',
        ),
        'permission' => 'plugins.marketplace',
        'as' => 'plugins.marketplace.ajax.update',
        'uses' => 'Botble\\PluginManagement\\Http\\Controllers\\MarketplaceController@update',
        'controller' => 'Botble\\PluginManagement\\Http\\Controllers\\MarketplaceController@update',
        'namespace' => 'Botble\\PluginManagement\\Http\\Controllers',
        'prefix' => 'admin/plugins/marketplace/ajax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'plugins.marketplace.ajax.check-update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/plugins/marketplace/ajax/check-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'plugins.marketplace',
        'as' => 'plugins.marketplace.ajax.check-update',
        'uses' => 'Botble\\PluginManagement\\Http\\Controllers\\MarketplaceController@checkUpdate',
        'controller' => 'Botble\\PluginManagement\\Http\\Controllers\\MarketplaceController@checkUpdate',
        'namespace' => 'Botble\\PluginManagement\\Http\\Controllers',
        'prefix' => 'admin/plugins/marketplace/ajax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'short-codes.ajax-get-admin-config' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/short-codes/ajax-get-admin-config/{key}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'short-codes.ajax-get-admin-config',
        'uses' => 'Botble\\Shortcode\\Http\\Controllers\\ShortcodeController@ajaxGetAdminConfig',
        'permission' => false,
        'controller' => 'Botble\\Shortcode\\Http\\Controllers\\ShortcodeController@ajaxGetAdminConfig',
        'namespace' => 'Botble\\Shortcode\\Http\\Controllers',
        'prefix' => 'admin/short-codes',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'slug.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/permalink',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'slug.settings',
        'uses' => 'Botble\\Slug\\Http\\Controllers\\SlugController@edit',
        'permission' => 'settings.options',
        'controller' => 'Botble\\Slug\\Http\\Controllers\\SlugController@edit',
        'namespace' => 'Botble\\Slug\\Http\\Controllers',
        'prefix' => 'admin/settings/permalink',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'slug.settings.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/permalink',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
          3 => 'preventDemo',
        ),
        'as' => 'slug.settings.update',
        'uses' => 'Botble\\Slug\\Http\\Controllers\\SlugController@update',
        'permission' => 'settings.options',
        'controller' => 'Botble\\Slug\\Http\\Controllers\\SlugController@update',
        'namespace' => 'Botble\\Slug\\Http\\Controllers',
        'prefix' => 'admin/settings/permalink',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'slug.create' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ajax/slug/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
        ),
        'as' => 'slug.create',
        'uses' => 'Botble\\Slug\\Http\\Controllers\\SlugController@store',
        'controller' => 'Botble\\Slug\\Http\\Controllers\\SlugController@store',
        'namespace' => 'Botble\\Slug\\Http\\Controllers',
        'prefix' => '/ajax/slug',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'theme.options' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/theme/options/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'theme.options',
        'uses' => 'Botble\\Theme\\Http\\Controllers\\ThemeController@getOptions',
        'controller' => 'Botble\\Theme\\Http\\Controllers\\ThemeController@getOptions',
        'namespace' => 'Botble\\Theme\\Http\\Controllers',
        'prefix' => 'admin/theme/options/{id?}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'theme.options.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/theme/options/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'theme.options.post',
        'uses' => 'Botble\\Theme\\Http\\Controllers\\ThemeController@postUpdate',
        'permission' => 'theme.options',
        'controller' => 'Botble\\Theme\\Http\\Controllers\\ThemeController@postUpdate',
        'namespace' => 'Botble\\Theme\\Http\\Controllers',
        'prefix' => 'admin/theme/options/{id?}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'theme.custom-css' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/theme/custom-css',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'theme.custom-css',
        'uses' => 'Botble\\Theme\\Http\\Controllers\\ThemeController@getCustomCss',
        'controller' => 'Botble\\Theme\\Http\\Controllers\\ThemeController@getCustomCss',
        'namespace' => 'Botble\\Theme\\Http\\Controllers',
        'prefix' => 'admin/theme/custom-css',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'theme.custom-css.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/theme/custom-css',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
          3 => 'preventDemo',
        ),
        'as' => 'theme.custom-css.post',
        'uses' => 'Botble\\Theme\\Http\\Controllers\\ThemeController@postCustomCss',
        'permission' => 'theme.custom-css',
        'controller' => 'Botble\\Theme\\Http\\Controllers\\ThemeController@postCustomCss',
        'namespace' => 'Botble\\Theme\\Http\\Controllers',
        'prefix' => 'admin/theme/custom-css',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'theme.custom-js' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/theme/custom-js',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'theme.custom-js',
        'uses' => 'Botble\\Theme\\Http\\Controllers\\ThemeController@getCustomJs',
        'controller' => 'Botble\\Theme\\Http\\Controllers\\ThemeController@getCustomJs',
        'namespace' => 'Botble\\Theme\\Http\\Controllers',
        'prefix' => 'admin/theme/custom-js',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'theme.custom-js.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/theme/custom-js',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
          3 => 'preventDemo',
        ),
        'as' => 'theme.custom-js.post',
        'uses' => 'Botble\\Theme\\Http\\Controllers\\ThemeController@postCustomJs',
        'permission' => 'theme.custom-js',
        'controller' => 'Botble\\Theme\\Http\\Controllers\\ThemeController@postCustomJs',
        'namespace' => 'Botble\\Theme\\Http\\Controllers',
        'prefix' => 'admin/theme/custom-js',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'theme.custom-html' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/theme/custom-html',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'theme.custom-html',
        'uses' => 'Botble\\Theme\\Http\\Controllers\\ThemeController@getCustomHtml',
        'controller' => 'Botble\\Theme\\Http\\Controllers\\ThemeController@getCustomHtml',
        'namespace' => 'Botble\\Theme\\Http\\Controllers',
        'prefix' => 'admin/theme/custom-html',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'theme.custom-html.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/theme/custom-html',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
          3 => 'preventDemo',
        ),
        'as' => 'theme.custom-html.post',
        'uses' => 'Botble\\Theme\\Http\\Controllers\\ThemeController@postCustomHtml',
        'permission' => 'theme.custom-html',
        'controller' => 'Botble\\Theme\\Http\\Controllers\\ThemeController@postCustomHtml',
        'namespace' => 'Botble\\Theme\\Http\\Controllers',
        'prefix' => 'admin/theme/custom-html',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'theme.robots-txt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/theme/robots-txt',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'theme.robots-txt',
        'uses' => 'Botble\\Theme\\Http\\Controllers\\ThemeController@getRobotsTxt',
        'controller' => 'Botble\\Theme\\Http\\Controllers\\ThemeController@getRobotsTxt',
        'namespace' => 'Botble\\Theme\\Http\\Controllers',
        'prefix' => 'admin/theme/robots-txt',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'theme.robots-txt.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/theme/robots-txt',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
          3 => 'preventDemo',
        ),
        'as' => 'theme.robots-txt.post',
        'uses' => 'Botble\\Theme\\Http\\Controllers\\ThemeController@postRobotsTxt',
        'permission' => 'theme.robots-txt',
        'controller' => 'Botble\\Theme\\Http\\Controllers\\ThemeController@postRobotsTxt',
        'namespace' => 'Botble\\Theme\\Http\\Controllers',
        'prefix' => 'admin/theme/robots-txt',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.website-tracking' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/website-tracking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'settings.website-tracking',
        'uses' => 'Botble\\Theme\\Http\\Controllers\\WebsiteTrackingSettingController@edit',
        'controller' => 'Botble\\Theme\\Http\\Controllers\\WebsiteTrackingSettingController@edit',
        'namespace' => 'Botble\\Theme\\Http\\Controllers',
        'prefix' => 'admin/settings/website-tracking',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.website-tracking.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/website-tracking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
          3 => 'preventDemo',
        ),
        'as' => 'settings.website-tracking.update',
        'uses' => 'Botble\\Theme\\Http\\Controllers\\WebsiteTrackingSettingController@update',
        'permission' => 'settings.website-tracking',
        'controller' => 'Botble\\Theme\\Http\\Controllers\\WebsiteTrackingSettingController@update',
        'namespace' => 'Botble\\Theme\\Http\\Controllers',
        'prefix' => 'admin/settings/website-tracking',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VDeomIaiF2jz3Hqa' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/app/home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AppContentController@home',
        'controller' => 'App\\Http\\Controllers\\Api\\AppContentController@home',
        'namespace' => NULL,
        'prefix' => 'api/app',
        'where' => 
        array (
        ),
        'as' => 'generated::VDeomIaiF2jz3Hqa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sfxFw90FGKgCpdvn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/app/channels',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AppContentController@channels',
        'controller' => 'App\\Http\\Controllers\\Api\\AppContentController@channels',
        'namespace' => NULL,
        'prefix' => 'api/app',
        'where' => 
        array (
        ),
        'as' => 'generated::sfxFw90FGKgCpdvn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xzxR1JrGZhdiEMAw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/app/channels/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AppContentController@channelDetail',
        'controller' => 'App\\Http\\Controllers\\Api\\AppContentController@channelDetail',
        'namespace' => NULL,
        'prefix' => 'api/app',
        'where' => 
        array (
        ),
        'as' => 'generated::xzxR1JrGZhdiEMAw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::x3vXGNazCWN1LiYE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/app/listen',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AppContentController@listen',
        'controller' => 'App\\Http\\Controllers\\Api\\AppContentController@listen',
        'namespace' => NULL,
        'prefix' => 'api/app',
        'where' => 
        array (
        ),
        'as' => 'generated::x3vXGNazCWN1LiYE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::r2vblvJZkHEpLLDM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/app/listen/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AppContentController@listenDetail',
        'controller' => 'App\\Http\\Controllers\\Api\\AppContentController@listenDetail',
        'namespace' => NULL,
        'prefix' => 'api/app',
        'where' => 
        array (
        ),
        'as' => 'generated::r2vblvJZkHEpLLDM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::alNqD7HPbs7vlnhb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/app/live-now',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AppContentController@liveNow',
        'controller' => 'App\\Http\\Controllers\\Api\\AppContentController@liveNow',
        'namespace' => NULL,
        'prefix' => 'api/app',
        'where' => 
        array (
        ),
        'as' => 'generated::alNqD7HPbs7vlnhb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7OmMLvuLRmQBqctt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/app/read',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AppContentController@read',
        'controller' => 'App\\Http\\Controllers\\Api\\AppContentController@read',
        'namespace' => NULL,
        'prefix' => 'api/app',
        'where' => 
        array (
        ),
        'as' => 'generated::7OmMLvuLRmQBqctt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::113pfxryGXMivNUO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/app/saints',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AppContentController@saints',
        'controller' => 'App\\Http\\Controllers\\Api\\AppContentController@saints',
        'namespace' => NULL,
        'prefix' => 'api/app',
        'where' => 
        array (
        ),
        'as' => 'generated::113pfxryGXMivNUO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Qsdy8yhTwTtJaurX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/app/donate/config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AppContentController@donateConfig',
        'controller' => 'App\\Http\\Controllers\\Api\\AppContentController@donateConfig',
        'namespace' => NULL,
        'prefix' => 'api/app',
        'where' => 
        array (
        ),
        'as' => 'generated::Qsdy8yhTwTtJaurX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wDL5mHRSBpMGZEj9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/app/prayer-requests',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\PrayerRequestController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\PrayerRequestController@store',
        'namespace' => NULL,
        'prefix' => 'api/app',
        'where' => 
        array (
        ),
        'as' => 'generated::wDL5mHRSBpMGZEj9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kzTas5x1w2pE1TwO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'up',
      'action' => 
      array (
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:807:"function () {
                    $exception = null;

                    try {
                        \\Illuminate\\Support\\Facades\\Event::dispatch(new \\Illuminate\\Foundation\\Events\\DiagnosingHealth);
                    } catch (\\Throwable $e) {
                        if (app()->hasDebugModeEnabled()) {
                            throw $e;
                        }

                        report($e);

                        $exception = $e->getMessage();
                    }

                    return response(\\Illuminate\\Support\\Facades\\View::file(\'/var/www/html/vendor/laravel/framework/src/Illuminate/Foundation/Configuration\'.\'/../resources/health-up.blade.php\', [
                        \'exception\' => $exception,
                    ]), status: $exception ? 500 : 200);
                }";s:5:"scope";s:54:"Illuminate\\Foundation\\Configuration\\ApplicationBuilder";s:4:"this";N;s:4:"self";s:32:"0000000000000f1f0000000000000000";}}',
        'as' => 'generated::kzTas5x1w2pE1TwO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.feed-sources.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/feed-sources',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'core',
          3 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FeedSourceController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\FeedSourceController@index',
        'as' => 'admin.feed-sources.index',
        'namespace' => NULL,
        'prefix' => 'admin/feed-sources',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.feed-sources.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/feed-sources/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'core',
          3 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FeedSourceController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\FeedSourceController@create',
        'as' => 'admin.feed-sources.create',
        'namespace' => NULL,
        'prefix' => 'admin/feed-sources',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.feed-sources.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/feed-sources',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'core',
          3 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FeedSourceController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\FeedSourceController@store',
        'as' => 'admin.feed-sources.store',
        'namespace' => NULL,
        'prefix' => 'admin/feed-sources',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.feed-sources.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/feed-sources/{feedSource}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'core',
          3 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FeedSourceController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\FeedSourceController@edit',
        'as' => 'admin.feed-sources.edit',
        'namespace' => NULL,
        'prefix' => 'admin/feed-sources',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.feed-sources.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/feed-sources/{feedSource}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'core',
          3 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FeedSourceController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\FeedSourceController@update',
        'as' => 'admin.feed-sources.update',
        'namespace' => NULL,
        'prefix' => 'admin/feed-sources',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.feed-sources.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/feed-sources/{feedSource}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'core',
          3 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FeedSourceController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\FeedSourceController@destroy',
        'as' => 'admin.feed-sources.destroy',
        'namespace' => NULL,
        'prefix' => 'admin/feed-sources',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.feed-sources.sync' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/feed-sources/{feedSource}/sync',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'core',
          3 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FeedSourceController@sync',
        'controller' => 'App\\Http\\Controllers\\Admin\\FeedSourceController@sync',
        'as' => 'admin.feed-sources.sync',
        'namespace' => NULL,
        'prefix' => 'admin/feed-sources',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.feed-sources.seed-catholic' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/feed-sources/seed-catholic',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'core',
          3 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FeedSourceController@seedCatholic',
        'controller' => 'App\\Http\\Controllers\\Admin\\FeedSourceController@seedCatholic',
        'as' => 'admin.feed-sources.seed-catholic',
        'namespace' => NULL,
        'prefix' => 'admin/feed-sources',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.feed-sources.sync-all-now' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/feed-sources/sync-all-now',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'core',
          3 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FeedSourceController@syncAllNow',
        'controller' => 'App\\Http\\Controllers\\Admin\\FeedSourceController@syncAllNow',
        'as' => 'admin.feed-sources.sync-all-now',
        'namespace' => NULL,
        'prefix' => 'admin/feed-sources',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.feed-sources.itunes-search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/feed-sources/itunes-search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'core',
          3 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FeedSourceController@itunesSearch',
        'controller' => 'App\\Http\\Controllers\\Admin\\FeedSourceController@itunesSearch',
        'as' => 'admin.feed-sources.itunes-search',
        'namespace' => NULL,
        'prefix' => 'admin/feed-sources',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.docs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api-docs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ApiDocsController@index',
        'controller' => 'App\\Http\\Controllers\\ApiDocsController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'api.docs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.docs.spec' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api-docs/openapi.json',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ApiDocsController@openApi',
        'controller' => 'App\\Http\\Controllers\\ApiDocsController@openApi',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'api.docs.spec',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.youtube-channels.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/youtube-channels',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'core',
          3 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\YouTubeChannelController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\YouTubeChannelController@index',
        'as' => 'admin.youtube-channels.index',
        'namespace' => NULL,
        'prefix' => 'admin/youtube-channels',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.youtube-channels.hero-image' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/youtube-channels/hero-image',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'core',
          3 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\YouTubeChannelController@updateHero',
        'controller' => 'App\\Http\\Controllers\\Admin\\YouTubeChannelController@updateHero',
        'as' => 'admin.youtube-channels.hero-image',
        'namespace' => NULL,
        'prefix' => 'admin/youtube-channels',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.youtube-channels.sync-all' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/youtube-channels/sync-all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'core',
          3 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\YouTubeChannelController@syncAll',
        'controller' => 'App\\Http\\Controllers\\Admin\\YouTubeChannelController@syncAll',
        'as' => 'admin.youtube-channels.sync-all',
        'namespace' => NULL,
        'prefix' => 'admin/youtube-channels',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.youtube-channels.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/youtube-channels/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'core',
          3 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\YouTubeChannelController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\YouTubeChannelController@create',
        'as' => 'admin.youtube-channels.create',
        'namespace' => NULL,
        'prefix' => 'admin/youtube-channels',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.youtube-channels.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/youtube-channels',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'core',
          3 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\YouTubeChannelController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\YouTubeChannelController@store',
        'as' => 'admin.youtube-channels.store',
        'namespace' => NULL,
        'prefix' => 'admin/youtube-channels',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.youtube-channels.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/youtube-channels/{youtubeChannel}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'core',
          3 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\YouTubeChannelController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\YouTubeChannelController@edit',
        'as' => 'admin.youtube-channels.edit',
        'namespace' => NULL,
        'prefix' => 'admin/youtube-channels',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.youtube-channels.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/youtube-channels/{youtubeChannel}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'core',
          3 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\YouTubeChannelController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\YouTubeChannelController@update',
        'as' => 'admin.youtube-channels.update',
        'namespace' => NULL,
        'prefix' => 'admin/youtube-channels',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.youtube-channels.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/youtube-channels/{youtubeChannel}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'core',
          3 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\YouTubeChannelController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\YouTubeChannelController@destroy',
        'as' => 'admin.youtube-channels.destroy',
        'namespace' => NULL,
        'prefix' => 'admin/youtube-channels',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.youtube-channels.sync' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/youtube-channels/{youtubeChannel}/sync',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'core',
          3 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\YouTubeChannelController@sync',
        'controller' => 'App\\Http\\Controllers\\Admin\\YouTubeChannelController@sync',
        'as' => 'admin.youtube-channels.sync',
        'namespace' => NULL,
        'prefix' => 'admin/youtube-channels',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.podcast-shows.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/podcast-shows',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'core',
          3 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PodcastShowController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\PodcastShowController@index',
        'as' => 'admin.podcast-shows.index',
        'namespace' => NULL,
        'prefix' => 'admin/podcast-shows',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.podcast-shows.hero-image' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/podcast-shows/hero-image',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'core',
          3 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PodcastShowController@updateHero',
        'controller' => 'App\\Http\\Controllers\\Admin\\PodcastShowController@updateHero',
        'as' => 'admin.podcast-shows.hero-image',
        'namespace' => NULL,
        'prefix' => 'admin/podcast-shows',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.podcast-shows.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/podcast-shows/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'core',
          3 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PodcastShowController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\PodcastShowController@create',
        'as' => 'admin.podcast-shows.create',
        'namespace' => NULL,
        'prefix' => 'admin/podcast-shows',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.podcast-shows.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/podcast-shows',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'core',
          3 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PodcastShowController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\PodcastShowController@store',
        'as' => 'admin.podcast-shows.store',
        'namespace' => NULL,
        'prefix' => 'admin/podcast-shows',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.podcast-shows.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/podcast-shows/{podcastShow}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'core',
          3 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PodcastShowController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\PodcastShowController@edit',
        'as' => 'admin.podcast-shows.edit',
        'namespace' => NULL,
        'prefix' => 'admin/podcast-shows',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.podcast-shows.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/podcast-shows/{podcastShow}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'core',
          3 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PodcastShowController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\PodcastShowController@update',
        'as' => 'admin.podcast-shows.update',
        'namespace' => NULL,
        'prefix' => 'admin/podcast-shows',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.podcast-shows.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/podcast-shows/{podcastShow}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'core',
          3 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PodcastShowController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\PodcastShowController@destroy',
        'as' => 'admin.podcast-shows.destroy',
        'namespace' => NULL,
        'prefix' => 'admin/podcast-shows',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.podcast-shows.episodes.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/podcast-shows/{podcastShow}/episodes/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'core',
          3 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PodcastShowController@createEpisode',
        'controller' => 'App\\Http\\Controllers\\Admin\\PodcastShowController@createEpisode',
        'as' => 'admin.podcast-shows.episodes.create',
        'namespace' => NULL,
        'prefix' => 'admin/podcast-shows',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.podcast-shows.episodes.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/podcast-shows/{podcastShow}/episodes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'core',
          3 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PodcastShowController@storeEpisode',
        'controller' => 'App\\Http\\Controllers\\Admin\\PodcastShowController@storeEpisode',
        'as' => 'admin.podcast-shows.episodes.store',
        'namespace' => NULL,
        'prefix' => 'admin/podcast-shows',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.podcast-shows.episodes.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/podcast-shows/{podcastShow}/episodes/{episode}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'core',
          3 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PodcastShowController@editEpisode',
        'controller' => 'App\\Http\\Controllers\\Admin\\PodcastShowController@editEpisode',
        'as' => 'admin.podcast-shows.episodes.edit',
        'namespace' => NULL,
        'prefix' => 'admin/podcast-shows',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.podcast-shows.episodes.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/podcast-shows/{podcastShow}/episodes/{episode}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'core',
          3 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PodcastShowController@updateEpisode',
        'controller' => 'App\\Http\\Controllers\\Admin\\PodcastShowController@updateEpisode',
        'as' => 'admin.podcast-shows.episodes.update',
        'namespace' => NULL,
        'prefix' => 'admin/podcast-shows',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.podcast-shows.episodes.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/podcast-shows/{podcastShow}/episodes/{episode}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'core',
          3 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PodcastShowController@destroyEpisode',
        'controller' => 'App\\Http\\Controllers\\Admin\\PodcastShowController@destroyEpisode',
        'as' => 'admin.podcast-shows.episodes.destroy',
        'namespace' => NULL,
        'prefix' => 'admin/podcast-shows',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::H1DwQxlA955rVahh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/widgets/load-widget',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'uses' => 'Botble\\Widget\\Http\\Controllers\\WidgetController@showWidget',
        'controller' => 'Botble\\Widget\\Http\\Controllers\\WidgetController@showWidget',
        'namespace' => 'Botble\\Widget\\Http\\Controllers',
        'prefix' => 'admin/widgets',
        'where' => 
        array (
        ),
        'as' => 'generated::H1DwQxlA955rVahh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'widgets.get_form' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/widgets/get-widget-form',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'widgets.get_form',
        'uses' => 'Botble\\Widget\\Http\\Controllers\\WidgetController@getWidgetForm',
        'permission' => 'widgets.index',
        'controller' => 'Botble\\Widget\\Http\\Controllers\\WidgetController@getWidgetForm',
        'namespace' => 'Botble\\Widget\\Http\\Controllers',
        'prefix' => 'admin/widgets',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'widgets.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/widgets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'widgets.index',
        'uses' => 'Botble\\Widget\\Http\\Controllers\\WidgetController@index',
        'controller' => 'Botble\\Widget\\Http\\Controllers\\WidgetController@index',
        'namespace' => 'Botble\\Widget\\Http\\Controllers',
        'prefix' => 'admin/widgets',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'widgets.save_widgets_sidebar' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/widgets/save-widgets-to-sidebar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'widgets.save_widgets_sidebar',
        'uses' => 'Botble\\Widget\\Http\\Controllers\\WidgetController@update',
        'permission' => 'widgets.index',
        'controller' => 'Botble\\Widget\\Http\\Controllers\\WidgetController@update',
        'namespace' => 'Botble\\Widget\\Http\\Controllers',
        'prefix' => 'admin/widgets',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'widgets.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/widgets/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'widgets.destroy',
        'uses' => 'Botble\\Widget\\Http\\Controllers\\WidgetController@destroy',
        'permission' => 'widgets.index',
        'controller' => 'Botble\\Widget\\Http\\Controllers\\WidgetController@destroy',
        'namespace' => 'Botble\\Widget\\Http\\Controllers',
        'prefix' => 'admin/widgets',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'donation.guest.form' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'donate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
        ),
        'uses' => 'App\\Http\\Controllers\\DonationController@guestForm',
        'controller' => 'App\\Http\\Controllers\\DonationController@guestForm',
        'as' => 'donation.guest.form',
        'namespace' => NULL,
        'prefix' => 'donate',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'donation.guest.initiate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'donate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
        ),
        'uses' => 'App\\Http\\Controllers\\DonationController@guestInitiate',
        'controller' => 'App\\Http\\Controllers\\DonationController@guestInitiate',
        'as' => 'donation.guest.initiate',
        'namespace' => NULL,
        'prefix' => 'donate',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'donation.guest.return' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'donate/return/{donation}/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
        ),
        'uses' => 'App\\Http\\Controllers\\DonationController@guestReturn',
        'controller' => 'App\\Http\\Controllers\\DonationController@guestReturn',
        'as' => 'donation.guest.return',
        'namespace' => NULL,
        'prefix' => 'donate',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'donation.guest.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'donate/cancel/{donation}/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
        ),
        'uses' => 'App\\Http\\Controllers\\DonationController@guestCancel',
        'controller' => 'App\\Http\\Controllers\\DonationController@guestCancel',
        'as' => 'donation.guest.cancel',
        'namespace' => NULL,
        'prefix' => 'donate',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'donation.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/donate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'member',
        ),
        'uses' => 'App\\Http\\Controllers\\DonationController@index',
        'controller' => 'App\\Http\\Controllers\\DonationController@index',
        'as' => 'donation.index',
        'namespace' => NULL,
        'prefix' => 'account/donate',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'donation.initiate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'account/donate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'member',
        ),
        'uses' => 'App\\Http\\Controllers\\DonationController@initiate',
        'controller' => 'App\\Http\\Controllers\\DonationController@initiate',
        'as' => 'donation.initiate',
        'namespace' => NULL,
        'prefix' => 'account/donate',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'donation.return' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/donate/return/{donation}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'member',
        ),
        'uses' => 'App\\Http\\Controllers\\DonationController@return',
        'controller' => 'App\\Http\\Controllers\\DonationController@return',
        'as' => 'donation.return',
        'namespace' => NULL,
        'prefix' => 'account/donate',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'donation.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/donate/cancel/{donation}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'member',
        ),
        'uses' => 'App\\Http\\Controllers\\DonationController@cancel',
        'controller' => 'App\\Http\\Controllers\\DonationController@cancel',
        'as' => 'donation.cancel',
        'namespace' => NULL,
        'prefix' => 'account/donate',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'donation.history' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/donate/history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'member',
        ),
        'uses' => 'App\\Http\\Controllers\\DonationController@history',
        'controller' => 'App\\Http\\Controllers\\DonationController@history',
        'as' => 'donation.history',
        'namespace' => NULL,
        'prefix' => 'account/donate',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'languages.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/languages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'languages.index',
        'uses' => 'Botble\\Language\\Http\\Controllers\\LanguageController@index',
        'controller' => 'Botble\\Language\\Http\\Controllers\\LanguageController@index',
        'namespace' => 'Botble\\Language\\Http\\Controllers',
        'prefix' => 'admin/settings/languages',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.language' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/languages/options',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'settings.language',
        'uses' => 'Botble\\Language\\Http\\Controllers\\LanguageController@index',
        'permission' => 'languages.index',
        'controller' => 'Botble\\Language\\Http\\Controllers\\LanguageController@index',
        'namespace' => 'Botble\\Language\\Http\\Controllers',
        'prefix' => 'admin/settings/languages',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'languages.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/languages/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
          3 => 'preventDemo',
        ),
        'as' => 'languages.store',
        'uses' => 'Botble\\Language\\Http\\Controllers\\LanguageController@store',
        'permission' => 'languages.create',
        'controller' => 'Botble\\Language\\Http\\Controllers\\LanguageController@store',
        'namespace' => 'Botble\\Language\\Http\\Controllers',
        'prefix' => 'admin/settings/languages',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'languages.edit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/languages/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
          3 => 'preventDemo',
        ),
        'as' => 'languages.edit',
        'uses' => 'Botble\\Language\\Http\\Controllers\\LanguageController@update',
        'controller' => 'Botble\\Language\\Http\\Controllers\\LanguageController@update',
        'namespace' => 'Botble\\Language\\Http\\Controllers',
        'prefix' => 'admin/settings/languages',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'languages.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/settings/languages/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
          3 => 'preventDemo',
        ),
        'as' => 'languages.destroy',
        'uses' => 'Botble\\Language\\Http\\Controllers\\LanguageController@destroy',
        'controller' => 'Botble\\Language\\Http\\Controllers\\LanguageController@destroy',
        'namespace' => 'Botble\\Language\\Http\\Controllers',
        'prefix' => 'admin/settings/languages',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'id' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'languages.set.default' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/languages/set-default',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'languages.set.default',
        'uses' => 'Botble\\Language\\Http\\Controllers\\LanguageController@getSetDefault',
        'permission' => 'languages.edit',
        'controller' => 'Botble\\Language\\Http\\Controllers\\LanguageController@getSetDefault',
        'namespace' => 'Botble\\Language\\Http\\Controllers',
        'prefix' => 'admin/settings/languages',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'languages.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/languages/get',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'languages.get',
        'uses' => 'Botble\\Language\\Http\\Controllers\\LanguageController@getLanguage',
        'permission' => 'languages.edit',
        'controller' => 'Botble\\Language\\Http\\Controllers\\LanguageController@getLanguage',
        'namespace' => 'Botble\\Language\\Http\\Controllers',
        'prefix' => 'admin/settings/languages',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'languages.settings' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/languages/edit-setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'languages.settings',
        'uses' => 'Botble\\Language\\Http\\Controllers\\Settings\\LanguageSettingController@update',
        'permission' => 'languages.edit',
        'controller' => 'Botble\\Language\\Http\\Controllers\\Settings\\LanguageSettingController@update',
        'namespace' => 'Botble\\Language\\Http\\Controllers',
        'prefix' => 'admin/settings/languages',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'languages.change.item.language' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'languages/change-item-language',
      'action' => 
      array (
        'as' => 'languages.change.item.language',
        'uses' => 'Botble\\Language\\Http\\Controllers\\LanguageController@postChangeItemLanguage',
        'permission' => false,
        'controller' => 'Botble\\Language\\Http\\Controllers\\LanguageController@postChangeItemLanguage',
        'namespace' => 'Botble\\Language\\Http\\Controllers',
        'prefix' => '/languages',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'languages.change.data.language' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'languages/change-data-language/{locale}',
      'action' => 
      array (
        'as' => 'languages.change.data.language',
        'uses' => 'Botble\\Language\\Http\\Controllers\\LanguageController@getChangeDataLanguage',
        'permission' => false,
        'controller' => 'Botble\\Language\\Http\\Controllers\\LanguageController@getChangeDataLanguage',
        'namespace' => 'Botble\\Language\\Http\\Controllers',
        'prefix' => '/languages',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YN7U7u2YPz2ft7RI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/languages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Botble\\Language\\Http\\Middleware\\ApiLanguageMiddleware',
        ),
        'uses' => 'Botble\\Language\\Http\\Controllers\\API\\LanguageController@index',
        'controller' => 'Botble\\Language\\Http\\Controllers\\API\\LanguageController@index',
        'namespace' => 'Botble\\Language\\Http\\Controllers\\API',
        'prefix' => 'api/v1/languages',
        'where' => 
        array (
        ),
        'as' => 'generated::YN7U7u2YPz2ft7RI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8J4qrZQzq7vJOYzu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/languages/current',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Botble\\Language\\Http\\Middleware\\ApiLanguageMiddleware',
        ),
        'uses' => 'Botble\\Language\\Http\\Controllers\\API\\LanguageController@getCurrentLanguage',
        'controller' => 'Botble\\Language\\Http\\Controllers\\API\\LanguageController@getCurrentLanguage',
        'namespace' => 'Botble\\Language\\Http\\Controllers\\API',
        'prefix' => 'api/v1/languages',
        'where' => 
        array (
        ),
        'as' => 'generated::8J4qrZQzq7vJOYzu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'language-advanced.save' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/language-advanced/save/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'language-advanced.save',
        'uses' => 'Botble\\LanguageAdvanced\\Http\\Controllers\\LanguageAdvancedController@save',
        'permission' => false,
        'controller' => 'Botble\\LanguageAdvanced\\Http\\Controllers\\LanguageAdvancedController@save',
        'namespace' => NULL,
        'prefix' => 'admin/language-advanced',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'id' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tools.data-synchronize.import.translations.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tools/data-synchronize/import/translations/{type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'translations.import',
        'uses' => 'Botble\\LanguageAdvanced\\Http\\Controllers\\TranslationImportController@index',
        'as' => 'tools.data-synchronize.import.translations.index',
        'controller' => 'Botble\\LanguageAdvanced\\Http\\Controllers\\TranslationImportController@index',
        'namespace' => NULL,
        'prefix' => 'admin/tools/data-synchronize/import/translations/{type}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tools.data-synchronize.import.translations.validate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/tools/data-synchronize/import/translations/{type}/validate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'translations.import',
        'uses' => 'Botble\\LanguageAdvanced\\Http\\Controllers\\TranslationImportController@validateData',
        'as' => 'tools.data-synchronize.import.translations.validate',
        'controller' => 'Botble\\LanguageAdvanced\\Http\\Controllers\\TranslationImportController@validateData',
        'namespace' => NULL,
        'prefix' => 'admin/tools/data-synchronize/import/translations/{type}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tools.data-synchronize.import.translations.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/tools/data-synchronize/import/translations/{type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'translations.import',
        'uses' => 'Botble\\LanguageAdvanced\\Http\\Controllers\\TranslationImportController@import',
        'as' => 'tools.data-synchronize.import.translations.store',
        'controller' => 'Botble\\LanguageAdvanced\\Http\\Controllers\\TranslationImportController@import',
        'namespace' => NULL,
        'prefix' => 'admin/tools/data-synchronize/import/translations/{type}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tools.data-synchronize.import.translations.download-example' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/tools/data-synchronize/import/translations/{type}/download-example',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'translations.import',
        'uses' => 'Botble\\LanguageAdvanced\\Http\\Controllers\\TranslationImportController@downloadExample',
        'as' => 'tools.data-synchronize.import.translations.download-example',
        'controller' => 'Botble\\LanguageAdvanced\\Http\\Controllers\\TranslationImportController@downloadExample',
        'namespace' => NULL,
        'prefix' => 'admin/tools/data-synchronize/import/translations/{type}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tools.data-synchronize.export.translations.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tools/data-synchronize/export/translations/{type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'translations.export',
        'uses' => 'Botble\\LanguageAdvanced\\Http\\Controllers\\TranslationExportController@index',
        'as' => 'tools.data-synchronize.export.translations.index',
        'controller' => 'Botble\\LanguageAdvanced\\Http\\Controllers\\TranslationExportController@index',
        'namespace' => NULL,
        'prefix' => 'admin/tools/data-synchronize/export/translations/{type}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tools.data-synchronize.export.translations.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/tools/data-synchronize/export/translations/{type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'translations.export',
        'uses' => 'Botble\\LanguageAdvanced\\Http\\Controllers\\TranslationExportController@store',
        'as' => 'tools.data-synchronize.export.translations.store',
        'controller' => 'Botble\\LanguageAdvanced\\Http\\Controllers\\TranslationExportController@store',
        'namespace' => NULL,
        'prefix' => 'admin/tools/data-synchronize/export/translations/{type}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ads.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/ads',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'ads.index',
        'uses' => 'Botble\\Ads\\Http\\Controllers\\AdsController@index',
        'controller' => 'Botble\\Ads\\Http\\Controllers\\AdsController@index',
        'namespace' => 'Botble\\Ads\\Http\\Controllers',
        'prefix' => 'admin/ads',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ads.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/ads/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'ads.create',
        'uses' => 'Botble\\Ads\\Http\\Controllers\\AdsController@create',
        'controller' => 'Botble\\Ads\\Http\\Controllers\\AdsController@create',
        'namespace' => 'Botble\\Ads\\Http\\Controllers',
        'prefix' => 'admin/ads',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ads.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/ads/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'ads.store',
        'uses' => 'Botble\\Ads\\Http\\Controllers\\AdsController@store',
        'controller' => 'Botble\\Ads\\Http\\Controllers\\AdsController@store',
        'namespace' => 'Botble\\Ads\\Http\\Controllers',
        'prefix' => 'admin/ads',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ads.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/ads/edit/{ads}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'ads.edit',
        'uses' => 'Botble\\Ads\\Http\\Controllers\\AdsController@edit',
        'controller' => 'Botble\\Ads\\Http\\Controllers\\AdsController@edit',
        'namespace' => 'Botble\\Ads\\Http\\Controllers',
        'prefix' => 'admin/ads',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'ads' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ads.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/ads/edit/{ads}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'ads.update',
        'uses' => 'Botble\\Ads\\Http\\Controllers\\AdsController@update',
        'controller' => 'Botble\\Ads\\Http\\Controllers\\AdsController@update',
        'namespace' => 'Botble\\Ads\\Http\\Controllers',
        'prefix' => 'admin/ads',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'ads' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ads.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/ads/{ads}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'ads.destroy',
        'uses' => 'Botble\\Ads\\Http\\Controllers\\AdsController@destroy',
        'controller' => 'Botble\\Ads\\Http\\Controllers\\AdsController@destroy',
        'namespace' => 'Botble\\Ads\\Http\\Controllers',
        'prefix' => 'admin/ads',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'ads' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ads.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/ads',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'ads.settings',
        'uses' => 'Botble\\Ads\\Http\\Controllers\\Settings\\AdsSettingController@edit',
        'controller' => 'Botble\\Ads\\Http\\Controllers\\Settings\\AdsSettingController@edit',
        'namespace' => 'Botble\\Ads\\Http\\Controllers',
        'prefix' => 'admin/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ads.settings.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/ads',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'ads.settings.update',
        'uses' => 'Botble\\Ads\\Http\\Controllers\\Settings\\AdsSettingController@update',
        'permission' => 'ads.settings',
        'controller' => 'Botble\\Ads\\Http\\Controllers\\Settings\\AdsSettingController@update',
        'namespace' => 'Botble\\Ads\\Http\\Controllers',
        'prefix' => 'admin/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.ads-clicken.public.ads-click' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/ads-click/{key}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
        ),
        'as' => 'public.ads-clicken.public.ads-click',
        'uses' => 'Botble\\Ads\\Http\\Controllers\\PublicController@getAdsClick',
        'controller' => 'Botble\\Ads\\Http\\Controllers\\PublicController@getAdsClick',
        'namespace' => 'Botble\\Ads\\Http\\Controllers',
        'prefix' => '/en',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.ads-click.alternativeen.public.ads-click.alternative' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/ac-{randomHash}/{adsKey}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
        ),
        'as' => 'public.ads-click.alternativeen.public.ads-click.alternative',
        'uses' => 'Botble\\Ads\\Http\\Controllers\\PublicController@getAdsClickAlternative',
        'controller' => 'Botble\\Ads\\Http\\Controllers\\PublicController@getAdsClickAlternative',
        'namespace' => 'Botble\\Ads\\Http\\Controllers',
        'prefix' => '/en',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.ads-click.imageen.public.ads-click.image' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/ac-{randomHash}/{adsKey}/{size}/{hashName}.jpg',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
        ),
        'as' => 'public.ads-click.imageen.public.ads-click.image',
        'uses' => 'Botble\\Ads\\Http\\Controllers\\PublicController@getAdsImage',
        'controller' => 'Botble\\Ads\\Http\\Controllers\\PublicController@getAdsImage',
        'namespace' => 'Botble\\Ads\\Http\\Controllers',
        'prefix' => '/en',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::maWD5dKmLI4U1555' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/ads',
      'action' => 
      array (
        'middleware' => 'api',
        'uses' => 'Botble\\Ads\\Http\\Controllers\\API\\AdsController@index',
        'controller' => 'Botble\\Ads\\Http\\Controllers\\API\\AdsController@index',
        'namespace' => 'Botble\\Ads\\Http\\Controllers\\API',
        'prefix' => 'api/v1/ads',
        'where' => 
        array (
        ),
        'as' => 'generated::maWD5dKmLI4U1555',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ai-writer.generate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/ai-writer/generate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => false,
        'uses' => 'ArchiElite\\AiWriter\\Http\\Controllers\\AiWriterController@generate',
        'controller' => 'ArchiElite\\AiWriter\\Http\\Controllers\\AiWriterController@generate',
        'as' => 'ai-writer.generate',
        'namespace' => NULL,
        'prefix' => 'admin/ai-writer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ai-writer.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/ai-writer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'ai-writer.settings',
        'uses' => 'ArchiElite\\AiWriter\\Http\\Controllers\\Settings\\AiWriterSettingController@edit',
        'controller' => 'ArchiElite\\AiWriter\\Http\\Controllers\\Settings\\AiWriterSettingController@edit',
        'as' => 'ai-writer.settings',
        'namespace' => NULL,
        'prefix' => 'admin/settings/ai-writer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ai-writer.settings.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/ai-writer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
          3 => 'preventDemo',
        ),
        'permission' => 'ai-writer.settings',
        'as' => 'ai-writer.settings.update',
        'uses' => 'ArchiElite\\AiWriter\\Http\\Controllers\\Settings\\AiWriterSettingController@update',
        'controller' => 'ArchiElite\\AiWriter\\Http\\Controllers\\Settings\\AiWriterSettingController@update',
        'namespace' => NULL,
        'prefix' => 'admin/settings/ai-writer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'analytics.general' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/analytics/general',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'analytics.general',
        'uses' => 'Botble\\Analytics\\Http\\Controllers\\AnalyticsController@getGeneral',
        'controller' => 'Botble\\Analytics\\Http\\Controllers\\AnalyticsController@getGeneral',
        'namespace' => NULL,
        'prefix' => 'admin/analytics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'analytics.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/analytics/page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'analytics.page',
        'uses' => 'Botble\\Analytics\\Http\\Controllers\\AnalyticsController@getTopVisitPages',
        'controller' => 'Botble\\Analytics\\Http\\Controllers\\AnalyticsController@getTopVisitPages',
        'namespace' => NULL,
        'prefix' => 'admin/analytics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'analytics.browser' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/analytics/browser',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'analytics.browser',
        'uses' => 'Botble\\Analytics\\Http\\Controllers\\AnalyticsController@getTopBrowser',
        'controller' => 'Botble\\Analytics\\Http\\Controllers\\AnalyticsController@getTopBrowser',
        'namespace' => NULL,
        'prefix' => 'admin/analytics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'analytics.referrer' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/analytics/referrer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'analytics.referrer',
        'uses' => 'Botble\\Analytics\\Http\\Controllers\\AnalyticsController@getTopReferrer',
        'controller' => 'Botble\\Analytics\\Http\\Controllers\\AnalyticsController@getTopReferrer',
        'namespace' => NULL,
        'prefix' => 'admin/analytics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'analytics.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/analytics',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'analytics.settings',
        'uses' => 'Botble\\Analytics\\Http\\Controllers\\Settings\\AnalyticsSettingController@edit',
        'controller' => 'Botble\\Analytics\\Http\\Controllers\\Settings\\AnalyticsSettingController@edit',
        'as' => 'analytics.settings',
        'namespace' => NULL,
        'prefix' => 'admin/settings/analytics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'analytics.settings.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/analytics',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'analytics.settings',
        'as' => 'analytics.settings.update',
        'uses' => 'Botble\\Analytics\\Http\\Controllers\\Settings\\AnalyticsSettingController@update',
        'controller' => 'Botble\\Analytics\\Http\\Controllers\\Settings\\AnalyticsSettingController@update',
        'namespace' => NULL,
        'prefix' => 'admin/settings/analytics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'analytics.settings.json' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/analytics/json',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'analytics.settings',
        'as' => 'analytics.settings.json',
        'uses' => 'Botble\\Analytics\\Http\\Controllers\\AnalyticsSettingJsonController@__invoke',
        'controller' => 'Botble\\Analytics\\Http\\Controllers\\AnalyticsSettingJsonController@__invoke',
        'namespace' => NULL,
        'prefix' => 'admin/settings/analytics',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.ajax.announcementsen.public.ajax.announcements' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/ajax/announcements',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'Botble\\Base\\Http\\Middleware\\RequiresJsonRequestMiddleware',
        ),
        'uses' => 'ArchiElite\\Announcement\\Http\\Controllers\\PublicController@ajaxGetAnnouncements',
        'controller' => 'ArchiElite\\Announcement\\Http\\Controllers\\PublicController@ajaxGetAnnouncements',
        'namespace' => NULL,
        'prefix' => '/en',
        'where' => 
        array (
        ),
        'as' => 'public.ajax.announcementsen.public.ajax.announcements',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'announcements.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/announcements',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'announcements.index',
        'uses' => 'ArchiElite\\Announcement\\Http\\Controllers\\AnnouncementController@index',
        'controller' => 'ArchiElite\\Announcement\\Http\\Controllers\\AnnouncementController@index',
        'namespace' => NULL,
        'prefix' => 'admin/announcements/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'announcements.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/announcements/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'announcements.create',
        'uses' => 'ArchiElite\\Announcement\\Http\\Controllers\\AnnouncementController@create',
        'controller' => 'ArchiElite\\Announcement\\Http\\Controllers\\AnnouncementController@create',
        'namespace' => NULL,
        'prefix' => 'admin/announcements/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'announcements.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/announcements/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'announcements.store',
        'uses' => 'ArchiElite\\Announcement\\Http\\Controllers\\AnnouncementController@store',
        'controller' => 'ArchiElite\\Announcement\\Http\\Controllers\\AnnouncementController@store',
        'namespace' => NULL,
        'prefix' => 'admin/announcements/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'announcements.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/announcements/edit/{announcement}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'announcements.edit',
        'uses' => 'ArchiElite\\Announcement\\Http\\Controllers\\AnnouncementController@edit',
        'controller' => 'ArchiElite\\Announcement\\Http\\Controllers\\AnnouncementController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/announcements/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'announcement' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'announcements.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/announcements/edit/{announcement}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'announcements.update',
        'uses' => 'ArchiElite\\Announcement\\Http\\Controllers\\AnnouncementController@update',
        'controller' => 'ArchiElite\\Announcement\\Http\\Controllers\\AnnouncementController@update',
        'namespace' => NULL,
        'prefix' => 'admin/announcements/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'announcement' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'announcements.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/announcements/{announcement}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'announcements.destroy',
        'uses' => 'ArchiElite\\Announcement\\Http\\Controllers\\AnnouncementController@destroy',
        'controller' => 'ArchiElite\\Announcement\\Http\\Controllers\\AnnouncementController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/announcements/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'announcement' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'announcements.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/announcements/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'announcements.settings',
        'uses' => 'ArchiElite\\Announcement\\Http\\Controllers\\Settings\\AnnouncementSettingController@edit',
        'controller' => 'ArchiElite\\Announcement\\Http\\Controllers\\Settings\\AnnouncementSettingController@edit',
        'as' => 'announcements.settings',
        'namespace' => NULL,
        'prefix' => 'admin/announcements/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'announcements.settings.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/announcements/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'announcements.settings',
        'uses' => 'ArchiElite\\Announcement\\Http\\Controllers\\Settings\\AnnouncementSettingController@update',
        'controller' => 'ArchiElite\\Announcement\\Http\\Controllers\\Settings\\AnnouncementSettingController@update',
        'as' => 'announcements.settings.update',
        'namespace' => NULL,
        'prefix' => 'admin/announcements/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'audit-log.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/audit-logs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'audit-log.index',
        'uses' => 'Botble\\AuditLog\\Http\\Controllers\\AuditLogController@index',
        'controller' => 'Botble\\AuditLog\\Http\\Controllers\\AuditLogController@index',
        'namespace' => 'Botble\\AuditLog\\Http\\Controllers',
        'prefix' => 'admin/audit-logs',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'audit-log.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/audit-logs/{audit_log}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'audit-log.destroy',
        'uses' => 'Botble\\AuditLog\\Http\\Controllers\\AuditLogController@destroy',
        'controller' => 'Botble\\AuditLog\\Http\\Controllers\\AuditLogController@destroy',
        'namespace' => 'Botble\\AuditLog\\Http\\Controllers',
        'prefix' => 'admin/audit-logs',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'audit_log' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'audit-log.widget.activities' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/audit-logs/widgets/activities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'audit-log.widget.activities',
        'uses' => 'Botble\\AuditLog\\Http\\Controllers\\AuditLogController@getWidgetActivities',
        'permission' => 'audit-log.index',
        'controller' => 'Botble\\AuditLog\\Http\\Controllers\\AuditLogController@getWidgetActivities',
        'namespace' => 'Botble\\AuditLog\\Http\\Controllers',
        'prefix' => 'admin/audit-logs',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'audit-log.empty' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/audit-logs/items/empty',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'audit-log.empty',
        'uses' => 'Botble\\AuditLog\\Http\\Controllers\\AuditLogController@deleteAll',
        'permission' => 'audit-log.destroy',
        'controller' => 'Botble\\AuditLog\\Http\\Controllers\\AuditLogController@deleteAll',
        'namespace' => 'Botble\\AuditLog\\Http\\Controllers',
        'prefix' => 'admin/audit-logs',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'backups.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/system/backups',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'backups.index',
        'uses' => 'Botble\\Backup\\Http\\Controllers\\BackupController@getIndex',
        'controller' => 'Botble\\Backup\\Http\\Controllers\\BackupController@getIndex',
        'namespace' => 'Botble\\Backup\\Http\\Controllers',
        'prefix' => 'admin/system/backups',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'backups.create' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/system/backups/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
          3 => 'preventDemo',
        ),
        'as' => 'backups.create',
        'uses' => 'Botble\\Backup\\Http\\Controllers\\BackupController@store',
        'controller' => 'Botble\\Backup\\Http\\Controllers\\BackupController@store',
        'namespace' => 'Botble\\Backup\\Http\\Controllers',
        'prefix' => 'admin/system/backups',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'backups.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/system/backups/delete/{folder}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
          3 => 'preventDemo',
        ),
        'as' => 'backups.destroy',
        'uses' => 'Botble\\Backup\\Http\\Controllers\\BackupController@destroy',
        'controller' => 'Botble\\Backup\\Http\\Controllers\\BackupController@destroy',
        'namespace' => 'Botble\\Backup\\Http\\Controllers',
        'prefix' => 'admin/system/backups',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'backups.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/system/backups/restore/{folder}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'backups.restore',
        'uses' => 'Botble\\Backup\\Http\\Controllers\\BackupController@getRestore',
        'controller' => 'Botble\\Backup\\Http\\Controllers\\BackupController@getRestore',
        'namespace' => 'Botble\\Backup\\Http\\Controllers',
        'prefix' => 'admin/system/backups',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'backups.download.database' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/system/backups/download-database/{folder}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
          3 => 'preventDemo',
        ),
        'as' => 'backups.download.database',
        'uses' => 'Botble\\Backup\\Http\\Controllers\\BackupController@getDownloadDatabase',
        'permission' => 'backups.index',
        'controller' => 'Botble\\Backup\\Http\\Controllers\\BackupController@getDownloadDatabase',
        'namespace' => 'Botble\\Backup\\Http\\Controllers',
        'prefix' => 'admin/system/backups',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'backups.download.uploads.folder' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/system/backups/download-uploads-folder/{folder}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
          3 => 'preventDemo',
        ),
        'as' => 'backups.download.uploads.folder',
        'uses' => 'Botble\\Backup\\Http\\Controllers\\BackupController@getDownloadUploadFolder',
        'permission' => 'backups.index',
        'controller' => 'Botble\\Backup\\Http\\Controllers\\BackupController@getDownloadUploadFolder',
        'namespace' => 'Botble\\Backup\\Http\\Controllers',
        'prefix' => 'admin/system/backups',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blog.reports.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog/reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'blog.reports.index',
        'uses' => 'Botble\\Blog\\Http\\Controllers\\ReportController@index',
        'permission' => 'blog.reports',
        'controller' => 'Botble\\Blog\\Http\\Controllers\\ReportController@index',
        'namespace' => 'Botble\\Blog\\Http\\Controllers',
        'prefix' => 'admin/blog',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'posts.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/blog/posts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'posts.index',
        'uses' => 'Botble\\Blog\\Http\\Controllers\\PostController@index',
        'controller' => 'Botble\\Blog\\Http\\Controllers\\PostController@index',
        'namespace' => 'Botble\\Blog\\Http\\Controllers',
        'prefix' => 'admin/blog/posts',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'posts.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog/posts/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'posts.create',
        'uses' => 'Botble\\Blog\\Http\\Controllers\\PostController@create',
        'controller' => 'Botble\\Blog\\Http\\Controllers\\PostController@create',
        'namespace' => 'Botble\\Blog\\Http\\Controllers',
        'prefix' => 'admin/blog/posts',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'posts.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blog/posts/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'posts.store',
        'uses' => 'Botble\\Blog\\Http\\Controllers\\PostController@store',
        'controller' => 'Botble\\Blog\\Http\\Controllers\\PostController@store',
        'namespace' => 'Botble\\Blog\\Http\\Controllers',
        'prefix' => 'admin/blog/posts',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'posts.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog/posts/edit/{post}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'posts.edit',
        'uses' => 'Botble\\Blog\\Http\\Controllers\\PostController@edit',
        'controller' => 'Botble\\Blog\\Http\\Controllers\\PostController@edit',
        'namespace' => 'Botble\\Blog\\Http\\Controllers',
        'prefix' => 'admin/blog/posts',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'post' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'posts.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blog/posts/edit/{post}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'posts.update',
        'uses' => 'Botble\\Blog\\Http\\Controllers\\PostController@update',
        'controller' => 'Botble\\Blog\\Http\\Controllers\\PostController@update',
        'namespace' => 'Botble\\Blog\\Http\\Controllers',
        'prefix' => 'admin/blog/posts',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'post' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'posts.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/blog/posts/{post}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'posts.destroy',
        'uses' => 'Botble\\Blog\\Http\\Controllers\\PostController@destroy',
        'controller' => 'Botble\\Blog\\Http\\Controllers\\PostController@destroy',
        'namespace' => 'Botble\\Blog\\Http\\Controllers',
        'prefix' => 'admin/blog/posts',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'post' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'posts.widget.recent-posts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog/posts/widgets/recent-posts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'posts.widget.recent-posts',
        'uses' => 'Botble\\Blog\\Http\\Controllers\\PostController@getWidgetRecentPosts',
        'permission' => 'posts.index',
        'controller' => 'Botble\\Blog\\Http\\Controllers\\PostController@getWidgetRecentPosts',
        'namespace' => 'Botble\\Blog\\Http\\Controllers',
        'prefix' => 'admin/blog/posts',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categories.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/blog/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'categories.index',
        'uses' => 'Botble\\Blog\\Http\\Controllers\\CategoryController@index',
        'controller' => 'Botble\\Blog\\Http\\Controllers\\CategoryController@index',
        'namespace' => 'Botble\\Blog\\Http\\Controllers',
        'prefix' => 'admin/blog/categories',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categories.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog/categories/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'categories.create',
        'uses' => 'Botble\\Blog\\Http\\Controllers\\CategoryController@create',
        'controller' => 'Botble\\Blog\\Http\\Controllers\\CategoryController@create',
        'namespace' => 'Botble\\Blog\\Http\\Controllers',
        'prefix' => 'admin/blog/categories',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categories.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blog/categories/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'categories.store',
        'uses' => 'Botble\\Blog\\Http\\Controllers\\CategoryController@store',
        'controller' => 'Botble\\Blog\\Http\\Controllers\\CategoryController@store',
        'namespace' => 'Botble\\Blog\\Http\\Controllers',
        'prefix' => 'admin/blog/categories',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categories.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog/categories/edit/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'categories.edit',
        'uses' => 'Botble\\Blog\\Http\\Controllers\\CategoryController@edit',
        'controller' => 'Botble\\Blog\\Http\\Controllers\\CategoryController@edit',
        'namespace' => 'Botble\\Blog\\Http\\Controllers',
        'prefix' => 'admin/blog/categories',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'category' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categories.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blog/categories/edit/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'categories.update',
        'uses' => 'Botble\\Blog\\Http\\Controllers\\CategoryController@update',
        'controller' => 'Botble\\Blog\\Http\\Controllers\\CategoryController@update',
        'namespace' => 'Botble\\Blog\\Http\\Controllers',
        'prefix' => 'admin/blog/categories',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'category' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categories.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/blog/categories/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'categories.destroy',
        'uses' => 'Botble\\Blog\\Http\\Controllers\\CategoryController@destroy',
        'controller' => 'Botble\\Blog\\Http\\Controllers\\CategoryController@destroy',
        'namespace' => 'Botble\\Blog\\Http\\Controllers',
        'prefix' => 'admin/blog/categories',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'category' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categories.update-tree' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/blog/categories/update-tree',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'categories.update-tree',
        'uses' => 'Botble\\Blog\\Http\\Controllers\\CategoryController@updateTree',
        'permission' => 'categories.index',
        'controller' => 'Botble\\Blog\\Http\\Controllers\\CategoryController@updateTree',
        'namespace' => 'Botble\\Blog\\Http\\Controllers',
        'prefix' => 'admin/blog/categories',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categories.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog/categories/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'categories.search',
        'uses' => 'Botble\\Blog\\Http\\Controllers\\CategoryController@getSearch',
        'permission' => 'categories.index',
        'controller' => 'Botble\\Blog\\Http\\Controllers\\CategoryController@getSearch',
        'namespace' => 'Botble\\Blog\\Http\\Controllers',
        'prefix' => 'admin/blog/categories',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tags.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/blog/tags',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'tags.index',
        'uses' => 'Botble\\Blog\\Http\\Controllers\\TagController@index',
        'controller' => 'Botble\\Blog\\Http\\Controllers\\TagController@index',
        'namespace' => 'Botble\\Blog\\Http\\Controllers',
        'prefix' => 'admin/blog/tags',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tags.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog/tags/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'tags.create',
        'uses' => 'Botble\\Blog\\Http\\Controllers\\TagController@create',
        'controller' => 'Botble\\Blog\\Http\\Controllers\\TagController@create',
        'namespace' => 'Botble\\Blog\\Http\\Controllers',
        'prefix' => 'admin/blog/tags',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tags.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blog/tags/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'tags.store',
        'uses' => 'Botble\\Blog\\Http\\Controllers\\TagController@store',
        'controller' => 'Botble\\Blog\\Http\\Controllers\\TagController@store',
        'namespace' => 'Botble\\Blog\\Http\\Controllers',
        'prefix' => 'admin/blog/tags',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tags.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog/tags/edit/{tag}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'tags.edit',
        'uses' => 'Botble\\Blog\\Http\\Controllers\\TagController@edit',
        'controller' => 'Botble\\Blog\\Http\\Controllers\\TagController@edit',
        'namespace' => 'Botble\\Blog\\Http\\Controllers',
        'prefix' => 'admin/blog/tags',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'tag' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tags.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blog/tags/edit/{tag}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'tags.update',
        'uses' => 'Botble\\Blog\\Http\\Controllers\\TagController@update',
        'controller' => 'Botble\\Blog\\Http\\Controllers\\TagController@update',
        'namespace' => 'Botble\\Blog\\Http\\Controllers',
        'prefix' => 'admin/blog/tags',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'tag' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tags.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/blog/tags/{tag}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'tags.destroy',
        'uses' => 'Botble\\Blog\\Http\\Controllers\\TagController@destroy',
        'controller' => 'Botble\\Blog\\Http\\Controllers\\TagController@destroy',
        'namespace' => 'Botble\\Blog\\Http\\Controllers',
        'prefix' => 'admin/blog/tags',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'tag' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tags.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog/tags/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'tags.all',
        'uses' => 'Botble\\Blog\\Http\\Controllers\\TagController@getAllTags',
        'permission' => 'tags.index',
        'controller' => 'Botble\\Blog\\Http\\Controllers\\TagController@getAllTags',
        'namespace' => 'Botble\\Blog\\Http\\Controllers',
        'prefix' => 'admin/blog/tags',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tools.data-synchronize.export.posts.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog/tools/data-synchronize/export/posts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'posts.export',
        'uses' => 'Botble\\Blog\\Http\\Controllers\\ExportPostController@index',
        'controller' => 'Botble\\Blog\\Http\\Controllers\\ExportPostController@index',
        'as' => 'tools.data-synchronize.export.posts.index',
        'namespace' => 'Botble\\Blog\\Http\\Controllers',
        'prefix' => 'admin/blog/tools/data-synchronize/export/posts',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tools.data-synchronize.export.posts.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blog/tools/data-synchronize/export/posts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'posts.export',
        'uses' => 'Botble\\Blog\\Http\\Controllers\\ExportPostController@store',
        'controller' => 'Botble\\Blog\\Http\\Controllers\\ExportPostController@store',
        'as' => 'tools.data-synchronize.export.posts.store',
        'namespace' => 'Botble\\Blog\\Http\\Controllers',
        'prefix' => 'admin/blog/tools/data-synchronize/export/posts',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tools.data-synchronize.import.posts.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog/tools/data-synchronize/import/posts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'posts.import',
        'uses' => 'Botble\\Blog\\Http\\Controllers\\ImportPostController@index',
        'controller' => 'Botble\\Blog\\Http\\Controllers\\ImportPostController@index',
        'as' => 'tools.data-synchronize.import.posts.index',
        'namespace' => 'Botble\\Blog\\Http\\Controllers',
        'prefix' => 'admin/blog/tools/data-synchronize/import/posts',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tools.data-synchronize.import.posts.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blog/tools/data-synchronize/import/posts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'posts.import',
        'uses' => 'Botble\\Blog\\Http\\Controllers\\ImportPostController@import',
        'controller' => 'Botble\\Blog\\Http\\Controllers\\ImportPostController@import',
        'as' => 'tools.data-synchronize.import.posts.store',
        'namespace' => 'Botble\\Blog\\Http\\Controllers',
        'prefix' => 'admin/blog/tools/data-synchronize/import/posts',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tools.data-synchronize.import.posts.validate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blog/tools/data-synchronize/import/posts/validate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'posts.import',
        'uses' => 'Botble\\Blog\\Http\\Controllers\\ImportPostController@validateData',
        'controller' => 'Botble\\Blog\\Http\\Controllers\\ImportPostController@validateData',
        'as' => 'tools.data-synchronize.import.posts.validate',
        'namespace' => 'Botble\\Blog\\Http\\Controllers',
        'prefix' => 'admin/blog/tools/data-synchronize/import/posts',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tools.data-synchronize.import.posts.download-example' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blog/tools/data-synchronize/import/posts/download-example',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'posts.import',
        'uses' => 'Botble\\Blog\\Http\\Controllers\\ImportPostController@downloadExample',
        'controller' => 'Botble\\Blog\\Http\\Controllers\\ImportPostController@downloadExample',
        'as' => 'tools.data-synchronize.import.posts.download-example',
        'namespace' => 'Botble\\Blog\\Http\\Controllers',
        'prefix' => 'admin/blog/tools/data-synchronize/import/posts',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blog.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'blog.settings',
        'uses' => 'Botble\\Blog\\Http\\Controllers\\Settings\\BlogSettingController@edit',
        'controller' => 'Botble\\Blog\\Http\\Controllers\\Settings\\BlogSettingController@edit',
        'as' => 'blog.settings',
        'namespace' => 'Botble\\Blog\\Http\\Controllers',
        'prefix' => 'admin/settings/blog',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blog.settings.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'blog.settings',
        'as' => 'blog.settings.update',
        'uses' => 'Botble\\Blog\\Http\\Controllers\\Settings\\BlogSettingController@update',
        'controller' => 'Botble\\Blog\\Http\\Controllers\\Settings\\BlogSettingController@update',
        'namespace' => 'Botble\\Blog\\Http\\Controllers',
        'prefix' => 'admin/settings/blog',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.searchen.public.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
        ),
        'as' => 'public.searchen.public.search',
        'uses' => 'Botble\\Blog\\Http\\Controllers\\PublicController@getSearch',
        'controller' => 'Botble\\Blog\\Http\\Controllers\\PublicController@getSearch',
        'namespace' => 'Botble\\Blog\\Http\\Controllers',
        'prefix' => '/en',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::81ShqhtwVUigH2mw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/search',
      'action' => 
      array (
        'middleware' => 'api',
        'uses' => 'Botble\\Blog\\Http\\Controllers\\API\\PostController@getSearch',
        'controller' => 'Botble\\Blog\\Http\\Controllers\\API\\PostController@getSearch',
        'namespace' => 'Botble\\Blog\\Http\\Controllers\\API',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::81ShqhtwVUigH2mw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1UZCCBUZ9LedwRZm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/posts',
      'action' => 
      array (
        'middleware' => 'api',
        'uses' => 'Botble\\Blog\\Http\\Controllers\\API\\PostController@index',
        'controller' => 'Botble\\Blog\\Http\\Controllers\\API\\PostController@index',
        'namespace' => 'Botble\\Blog\\Http\\Controllers\\API',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::1UZCCBUZ9LedwRZm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wQF7Uq4PZqEtZR4n' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/categories',
      'action' => 
      array (
        'middleware' => 'api',
        'uses' => 'Botble\\Blog\\Http\\Controllers\\API\\CategoryController@index',
        'controller' => 'Botble\\Blog\\Http\\Controllers\\API\\CategoryController@index',
        'namespace' => 'Botble\\Blog\\Http\\Controllers\\API',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::wQF7Uq4PZqEtZR4n',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fYgJMOjujOGkcCEX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/tags',
      'action' => 
      array (
        'middleware' => 'api',
        'uses' => 'Botble\\Blog\\Http\\Controllers\\API\\TagController@index',
        'controller' => 'Botble\\Blog\\Http\\Controllers\\API\\TagController@index',
        'namespace' => 'Botble\\Blog\\Http\\Controllers\\API',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::fYgJMOjujOGkcCEX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6qKFj3ysZhtPo0hs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/posts/filters',
      'action' => 
      array (
        'middleware' => 'api',
        'uses' => 'Botble\\Blog\\Http\\Controllers\\API\\PostController@getFilters',
        'controller' => 'Botble\\Blog\\Http\\Controllers\\API\\PostController@getFilters',
        'namespace' => 'Botble\\Blog\\Http\\Controllers\\API',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::6qKFj3ysZhtPo0hs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gKGAsYbOCT4JAG7Y' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/posts/{slug}',
      'action' => 
      array (
        'middleware' => 'api',
        'uses' => 'Botble\\Blog\\Http\\Controllers\\API\\PostController@findBySlug',
        'controller' => 'Botble\\Blog\\Http\\Controllers\\API\\PostController@findBySlug',
        'namespace' => 'Botble\\Blog\\Http\\Controllers\\API',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::gKGAsYbOCT4JAG7Y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1ky64QLiveGgsCVQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/categories/filters',
      'action' => 
      array (
        'middleware' => 'api',
        'uses' => 'Botble\\Blog\\Http\\Controllers\\API\\CategoryController@getFilters',
        'controller' => 'Botble\\Blog\\Http\\Controllers\\API\\CategoryController@getFilters',
        'namespace' => 'Botble\\Blog\\Http\\Controllers\\API',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::1ky64QLiveGgsCVQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Tb79eiECikoNbtqa' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/categories/{slug}',
      'action' => 
      array (
        'middleware' => 'api',
        'uses' => 'Botble\\Blog\\Http\\Controllers\\API\\CategoryController@findBySlug',
        'controller' => 'Botble\\Blog\\Http\\Controllers\\API\\CategoryController@findBySlug',
        'namespace' => 'Botble\\Blog\\Http\\Controllers\\API',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::Tb79eiECikoNbtqa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'captcha.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/captcha',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'captcha.settings',
        'uses' => 'Botble\\Captcha\\Http\\Controllers\\Settings\\CaptchaSettingController@edit',
        'controller' => 'Botble\\Captcha\\Http\\Controllers\\Settings\\CaptchaSettingController@edit',
        'as' => 'captcha.settings',
        'namespace' => 'Botble\\Captcha\\Http\\Controllers',
        'prefix' => 'admin/settings/captcha',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'captcha.settings.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/captcha',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'captcha.settings',
        'as' => 'captcha.settings.update',
        'uses' => 'Botble\\Captcha\\Http\\Controllers\\Settings\\CaptchaSettingController@update',
        'controller' => 'Botble\\Captcha\\Http\\Controllers\\Settings\\CaptchaSettingController@update',
        'namespace' => 'Botble\\Captcha\\Http\\Controllers',
        'prefix' => 'admin/settings/captcha',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contacts.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/contacts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'contacts.index',
        'uses' => 'Botble\\Contact\\Http\\Controllers\\ContactController@index',
        'controller' => 'Botble\\Contact\\Http\\Controllers\\ContactController@index',
        'namespace' => 'Botble\\Contact\\Http\\Controllers',
        'prefix' => 'admin/contacts',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contacts.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/contacts/edit/{contact}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'contacts.edit',
        'uses' => 'Botble\\Contact\\Http\\Controllers\\ContactController@edit',
        'controller' => 'Botble\\Contact\\Http\\Controllers\\ContactController@edit',
        'namespace' => 'Botble\\Contact\\Http\\Controllers',
        'prefix' => 'admin/contacts',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'contact' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contacts.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/contacts/edit/{contact}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'contacts.update',
        'uses' => 'Botble\\Contact\\Http\\Controllers\\ContactController@update',
        'controller' => 'Botble\\Contact\\Http\\Controllers\\ContactController@update',
        'namespace' => 'Botble\\Contact\\Http\\Controllers',
        'prefix' => 'admin/contacts',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'contact' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contacts.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/contacts/{contact}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'contacts.destroy',
        'uses' => 'Botble\\Contact\\Http\\Controllers\\ContactController@destroy',
        'controller' => 'Botble\\Contact\\Http\\Controllers\\ContactController@destroy',
        'namespace' => 'Botble\\Contact\\Http\\Controllers',
        'prefix' => 'admin/contacts',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'contact' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contacts.custom-fields.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/contacts/custom-fields',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'contact.custom-fields',
        'as' => 'contacts.custom-fields.index',
        'uses' => 'Botble\\Contact\\Http\\Controllers\\CustomFieldController@index',
        'controller' => 'Botble\\Contact\\Http\\Controllers\\CustomFieldController@index',
        'namespace' => 'Botble\\Contact\\Http\\Controllers',
        'prefix' => 'admin/contacts/custom-fields',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contacts.custom-fields.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/contacts/custom-fields/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'contact.custom-fields',
        'as' => 'contacts.custom-fields.create',
        'uses' => 'Botble\\Contact\\Http\\Controllers\\CustomFieldController@create',
        'controller' => 'Botble\\Contact\\Http\\Controllers\\CustomFieldController@create',
        'namespace' => 'Botble\\Contact\\Http\\Controllers',
        'prefix' => 'admin/contacts/custom-fields',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contacts.custom-fields.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/contacts/custom-fields/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'contact.custom-fields',
        'as' => 'contacts.custom-fields.store',
        'uses' => 'Botble\\Contact\\Http\\Controllers\\CustomFieldController@store',
        'controller' => 'Botble\\Contact\\Http\\Controllers\\CustomFieldController@store',
        'namespace' => 'Botble\\Contact\\Http\\Controllers',
        'prefix' => 'admin/contacts/custom-fields',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contacts.custom-fields.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/contacts/custom-fields/edit/{custom_field}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'contact.custom-fields',
        'as' => 'contacts.custom-fields.edit',
        'uses' => 'Botble\\Contact\\Http\\Controllers\\CustomFieldController@edit',
        'controller' => 'Botble\\Contact\\Http\\Controllers\\CustomFieldController@edit',
        'namespace' => 'Botble\\Contact\\Http\\Controllers',
        'prefix' => 'admin/contacts/custom-fields',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'custom_field' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contacts.custom-fields.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/contacts/custom-fields/edit/{custom_field}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'contact.custom-fields',
        'as' => 'contacts.custom-fields.update',
        'uses' => 'Botble\\Contact\\Http\\Controllers\\CustomFieldController@update',
        'controller' => 'Botble\\Contact\\Http\\Controllers\\CustomFieldController@update',
        'namespace' => 'Botble\\Contact\\Http\\Controllers',
        'prefix' => 'admin/contacts/custom-fields',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'custom_field' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contacts.custom-fields.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/contacts/custom-fields/{custom_field}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'contact.custom-fields',
        'as' => 'contacts.custom-fields.destroy',
        'uses' => 'Botble\\Contact\\Http\\Controllers\\CustomFieldController@destroy',
        'controller' => 'Botble\\Contact\\Http\\Controllers\\CustomFieldController@destroy',
        'namespace' => 'Botble\\Contact\\Http\\Controllers',
        'prefix' => 'admin/contacts/custom-fields',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'custom_field' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contacts.reply' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/contacts/reply/{contact}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'contacts.reply',
        'uses' => 'Botble\\Contact\\Http\\Controllers\\ContactController@postReply',
        'permission' => 'contacts.edit',
        'controller' => 'Botble\\Contact\\Http\\Controllers\\ContactController@postReply',
        'namespace' => 'Botble\\Contact\\Http\\Controllers',
        'prefix' => 'admin/contacts',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'id' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contact.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'contact.settings',
        'uses' => 'Botble\\Contact\\Http\\Controllers\\Settings\\ContactSettingController@edit',
        'controller' => 'Botble\\Contact\\Http\\Controllers\\Settings\\ContactSettingController@edit',
        'namespace' => 'Botble\\Contact\\Http\\Controllers',
        'prefix' => 'admin/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contact.settings.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'contact.settings.update',
        'uses' => 'Botble\\Contact\\Http\\Controllers\\Settings\\ContactSettingController@update',
        'permission' => 'contact.settings',
        'controller' => 'Botble\\Contact\\Http\\Controllers\\Settings\\ContactSettingController@update',
        'namespace' => 'Botble\\Contact\\Http\\Controllers',
        'prefix' => 'admin/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.send.contacten.public.send.contact' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'en/contact/send',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
        ),
        'as' => 'public.send.contacten.public.send.contact',
        'uses' => 'Botble\\Contact\\Http\\Controllers\\PublicController@postSendContact',
        'controller' => 'Botble\\Contact\\Http\\Controllers\\PublicController@postSendContact',
        'namespace' => 'Botble\\Contact\\Http\\Controllers',
        'prefix' => '/en',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iO5rBtK4IbY6DLC5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/contacts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle:5,1',
        ),
        'uses' => 'Botble\\Contact\\Http\\Controllers\\API\\ContactController@store',
        'controller' => 'Botble\\Contact\\Http\\Controllers\\API\\ContactController@store',
        'namespace' => 'Botble\\Contact\\Http\\Controllers\\API',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::iO5rBtK4IbY6DLC5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fob-comment.comments.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/comments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'fob-comment.comments.index',
        'uses' => 'FriendsOfBotble\\Comment\\Http\\Controllers\\CommentController@index',
        'controller' => 'FriendsOfBotble\\Comment\\Http\\Controllers\\CommentController@index',
        'namespace' => NULL,
        'prefix' => 'admin/comments',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fob-comment.comments.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/comments/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'fob-comment.comments.create',
        'uses' => 'FriendsOfBotble\\Comment\\Http\\Controllers\\CommentController@create',
        'controller' => 'FriendsOfBotble\\Comment\\Http\\Controllers\\CommentController@create',
        'namespace' => NULL,
        'prefix' => 'admin/comments',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fob-comment.comments.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/comments/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'fob-comment.comments.store',
        'uses' => 'FriendsOfBotble\\Comment\\Http\\Controllers\\CommentController@store',
        'controller' => 'FriendsOfBotble\\Comment\\Http\\Controllers\\CommentController@store',
        'namespace' => NULL,
        'prefix' => 'admin/comments',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fob-comment.comments.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/comments/edit/{comment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'fob-comment.comments.edit',
        'uses' => 'FriendsOfBotble\\Comment\\Http\\Controllers\\CommentController@edit',
        'controller' => 'FriendsOfBotble\\Comment\\Http\\Controllers\\CommentController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/comments',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'comment' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fob-comment.comments.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/comments/edit/{comment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'fob-comment.comments.update',
        'uses' => 'FriendsOfBotble\\Comment\\Http\\Controllers\\CommentController@update',
        'controller' => 'FriendsOfBotble\\Comment\\Http\\Controllers\\CommentController@update',
        'namespace' => NULL,
        'prefix' => 'admin/comments',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'comment' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fob-comment.comments.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/comments/{comment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'fob-comment.comments.destroy',
        'uses' => 'FriendsOfBotble\\Comment\\Http\\Controllers\\CommentController@destroy',
        'controller' => 'FriendsOfBotble\\Comment\\Http\\Controllers\\CommentController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/comments',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'comment' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fob-comment.comments.reply' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/comments/{comment}/reply',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'uses' => 'FriendsOfBotble\\Comment\\Http\\Controllers\\ReplyCommentController@__invoke',
        'controller' => 'FriendsOfBotble\\Comment\\Http\\Controllers\\ReplyCommentController@__invoke',
        'as' => 'fob-comment.comments.reply',
        'namespace' => NULL,
        'prefix' => 'admin/comments',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fob-comment.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/comment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'fob-comment.settings',
        'uses' => 'FriendsOfBotble\\Comment\\Http\\Controllers\\Settings\\CommentSettingController@edit',
        'controller' => 'FriendsOfBotble\\Comment\\Http\\Controllers\\Settings\\CommentSettingController@edit',
        'as' => 'fob-comment.settings',
        'namespace' => NULL,
        'prefix' => 'admin/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fob-comment.settings.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/comment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'fob-comment.settings',
        'uses' => 'FriendsOfBotble\\Comment\\Http\\Controllers\\Settings\\CommentSettingController@update',
        'controller' => 'FriendsOfBotble\\Comment\\Http\\Controllers\\Settings\\CommentSettingController@update',
        'as' => 'fob-comment.settings.update',
        'namespace' => NULL,
        'prefix' => 'admin/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fob-comment.public.comments.indexen.fob-comment.public.comments.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/fob-comment/comments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
        ),
        'uses' => 'FriendsOfBotble\\Comment\\Http\\Controllers\\Fronts\\CommentController@index',
        'controller' => 'FriendsOfBotble\\Comment\\Http\\Controllers\\Fronts\\CommentController@index',
        'as' => 'fob-comment.public.comments.indexen.fob-comment.public.comments.index',
        'namespace' => NULL,
        'prefix' => 'en/fob-comment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fob-comment.public.comments.storeen.fob-comment.public.comments.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'en/fob-comment/comments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
        ),
        'uses' => 'FriendsOfBotble\\Comment\\Http\\Controllers\\Fronts\\CommentController@store',
        'controller' => 'FriendsOfBotble\\Comment\\Http\\Controllers\\Fronts\\CommentController@store',
        'as' => 'fob-comment.public.comments.storeen.fob-comment.public.comments.store',
        'namespace' => NULL,
        'prefix' => 'en/fob-comment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fob-comment.public.comments.replyen.fob-comment.public.comments.reply' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'en/fob-comment/comments/{comment}/reply',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
        ),
        'uses' => 'FriendsOfBotble\\Comment\\Http\\Controllers\\Fronts\\ReplyCommentController@__invoke',
        'controller' => 'FriendsOfBotble\\Comment\\Http\\Controllers\\Fronts\\ReplyCommentController',
        'as' => 'fob-comment.public.comments.replyen.fob-comment.public.comments.reply',
        'namespace' => NULL,
        'prefix' => 'en/fob-comment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'galleries.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/galleries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'galleries.index',
        'uses' => 'Botble\\Gallery\\Http\\Controllers\\GalleryController@index',
        'controller' => 'Botble\\Gallery\\Http\\Controllers\\GalleryController@index',
        'namespace' => 'Botble\\Gallery\\Http\\Controllers',
        'prefix' => 'admin/galleries',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'galleries.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/galleries/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'galleries.create',
        'uses' => 'Botble\\Gallery\\Http\\Controllers\\GalleryController@create',
        'controller' => 'Botble\\Gallery\\Http\\Controllers\\GalleryController@create',
        'namespace' => 'Botble\\Gallery\\Http\\Controllers',
        'prefix' => 'admin/galleries',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'galleries.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/galleries/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'galleries.store',
        'uses' => 'Botble\\Gallery\\Http\\Controllers\\GalleryController@store',
        'controller' => 'Botble\\Gallery\\Http\\Controllers\\GalleryController@store',
        'namespace' => 'Botble\\Gallery\\Http\\Controllers',
        'prefix' => 'admin/galleries',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'galleries.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/galleries/edit/{gallery}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'galleries.edit',
        'uses' => 'Botble\\Gallery\\Http\\Controllers\\GalleryController@edit',
        'controller' => 'Botble\\Gallery\\Http\\Controllers\\GalleryController@edit',
        'namespace' => 'Botble\\Gallery\\Http\\Controllers',
        'prefix' => 'admin/galleries',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'gallery' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'galleries.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/galleries/edit/{gallery}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'galleries.update',
        'uses' => 'Botble\\Gallery\\Http\\Controllers\\GalleryController@update',
        'controller' => 'Botble\\Gallery\\Http\\Controllers\\GalleryController@update',
        'namespace' => 'Botble\\Gallery\\Http\\Controllers',
        'prefix' => 'admin/galleries',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'gallery' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'galleries.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/galleries/{gallery}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'galleries.destroy',
        'uses' => 'Botble\\Gallery\\Http\\Controllers\\GalleryController@destroy',
        'controller' => 'Botble\\Gallery\\Http\\Controllers\\GalleryController@destroy',
        'namespace' => 'Botble\\Gallery\\Http\\Controllers',
        'prefix' => 'admin/galleries',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'gallery' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.galleriesen.public.galleries' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/galleries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
        ),
        'as' => 'public.galleriesen.public.galleries',
        'uses' => 'Botble\\Gallery\\Http\\Controllers\\PublicController@getGalleries',
        'controller' => 'Botble\\Gallery\\Http\\Controllers\\PublicController@getGalleries',
        'namespace' => 'Botble\\Gallery\\Http\\Controllers',
        'prefix' => '/en',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'member.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/members',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'member.index',
        'uses' => 'Botble\\Member\\Http\\Controllers\\MemberController@index',
        'controller' => 'Botble\\Member\\Http\\Controllers\\MemberController@index',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => 'admin/members',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'member.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/members/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'member.create',
        'uses' => 'Botble\\Member\\Http\\Controllers\\MemberController@create',
        'controller' => 'Botble\\Member\\Http\\Controllers\\MemberController@create',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => 'admin/members',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'member.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/members/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'member.store',
        'uses' => 'Botble\\Member\\Http\\Controllers\\MemberController@store',
        'controller' => 'Botble\\Member\\Http\\Controllers\\MemberController@store',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => 'admin/members',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'member.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/members/edit/{member}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'member.edit',
        'uses' => 'Botble\\Member\\Http\\Controllers\\MemberController@edit',
        'controller' => 'Botble\\Member\\Http\\Controllers\\MemberController@edit',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => 'admin/members',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'member' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'member.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/members/edit/{member}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'member.update',
        'uses' => 'Botble\\Member\\Http\\Controllers\\MemberController@update',
        'controller' => 'Botble\\Member\\Http\\Controllers\\MemberController@update',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => 'admin/members',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'member' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'member.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/members/{member}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'member.destroy',
        'uses' => 'Botble\\Member\\Http\\Controllers\\MemberController@destroy',
        'controller' => 'Botble\\Member\\Http\\Controllers\\MemberController@destroy',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => 'admin/members',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'member' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'member.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/members/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'member.search',
        'uses' => 'Botble\\Member\\Http\\Controllers\\MemberController@search',
        'permission' => 'member.index',
        'controller' => 'Botble\\Member\\Http\\Controllers\\MemberController@search',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => 'admin/members',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'member.verify-email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/members/verify-email/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'member.verify-email',
        'uses' => 'Botble\\Member\\Http\\Controllers\\MemberController@verifyEmail',
        'permission' => 'member.edit',
        'controller' => 'Botble\\Member\\Http\\Controllers\\MemberController@verifyEmail',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => 'admin/members',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'id' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'member.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/members',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'member.settings',
        'uses' => 'Botble\\Member\\Http\\Controllers\\Settings\\MemberSettingController@edit',
        'controller' => 'Botble\\Member\\Http\\Controllers\\Settings\\MemberSettingController@edit',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => 'admin/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'member.settings.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/members',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'member.settings.update',
        'uses' => 'Botble\\Member\\Http\\Controllers\\Settings\\MemberSettingController@update',
        'permission' => 'member.settings',
        'controller' => 'Botble\\Member\\Http\\Controllers\\Settings\\MemberSettingController@update',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => 'admin/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'author.showen.author.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/author/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
        ),
        'uses' => 'Botble\\Member\\Http\\Controllers\\PublicController@getAuthor',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => '/en',
        'where' => 
        array (
        ),
        'controller' => 'Botble\\Member\\Http\\Controllers\\PublicController@getAuthor',
        'as' => 'author.showen.author.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.table.bulk-change.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/tables/bulk-changes/data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'member',
        ),
        'permission' => false,
        'uses' => 'Botble\\Table\\Http\\Controllers\\TableBulkChangeController@index',
        'controller' => 'Botble\\Table\\Http\\Controllers\\TableBulkChangeController@index',
        'as' => 'public.member.table.bulk-change.data',
        'namespace' => NULL,
        'prefix' => 'account/tables/bulk-changes',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.table.bulk-change.save' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'account/tables/bulk-changes/save',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'member',
        ),
        'permission' => false,
        'uses' => 'Botble\\Table\\Http\\Controllers\\TableBulkChangeController@update',
        'controller' => 'Botble\\Table\\Http\\Controllers\\TableBulkChangeController@update',
        'as' => 'public.member.table.bulk-change.save',
        'namespace' => NULL,
        'prefix' => 'account/tables/bulk-changes',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.table.bulk-action.dispatch' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'account/tables/bulk-actions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'member',
        ),
        'permission' => false,
        'uses' => 'Botble\\Table\\Http\\Controllers\\TableBulkActionController@__invoke',
        'controller' => 'Botble\\Table\\Http\\Controllers\\TableBulkActionController@__invoke',
        'as' => 'public.member.table.bulk-action.dispatch',
        'namespace' => NULL,
        'prefix' => 'account/tables/bulk-actions',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.table.filter.input' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/tables/filters',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'member',
        ),
        'permission' => false,
        'uses' => 'Botble\\Table\\Http\\Controllers\\TableFilterController@__invoke',
        'controller' => 'Botble\\Table\\Http\\Controllers\\TableFilterController@__invoke',
        'as' => 'public.member.table.filter.input',
        'namespace' => NULL,
        'prefix' => 'account/tables/filters',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.table.update-columns-visibility' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'account/tables/columns-visibility',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'member',
          3 => 'preventDemo',
        ),
        'permission' => false,
        'uses' => 'Botble\\Table\\Http\\Controllers\\TableColumnVisibilityController@update',
        'controller' => 'Botble\\Table\\Http\\Controllers\\TableColumnVisibilityController@update',
        'as' => 'public.member.table.update-columns-visibility',
        'namespace' => NULL,
        'prefix' => 'account/tables/columns-visibility',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.loginen.public.member.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'member.guest',
        ),
        'uses' => 'Botble\\Member\\Http\\Controllers\\LoginController@showLoginForm',
        'controller' => 'Botble\\Member\\Http\\Controllers\\LoginController@showLoginForm',
        'as' => 'public.member.loginen.public.member.login',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => '/en',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.login.posten.public.member.login.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'en/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'member.guest',
        ),
        'uses' => 'Botble\\Member\\Http\\Controllers\\LoginController@login',
        'controller' => 'Botble\\Member\\Http\\Controllers\\LoginController@login',
        'as' => 'public.member.login.posten.public.member.login.post',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => '/en',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.registeren.public.member.register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'member.guest',
        ),
        'uses' => 'Botble\\Member\\Http\\Controllers\\RegisterController@showRegistrationForm',
        'controller' => 'Botble\\Member\\Http\\Controllers\\RegisterController@showRegistrationForm',
        'as' => 'public.member.registeren.public.member.register',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => '/en',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.register.posten.public.member.register.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'en/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'member.guest',
        ),
        'uses' => 'Botble\\Member\\Http\\Controllers\\RegisterController@register',
        'controller' => 'Botble\\Member\\Http\\Controllers\\RegisterController@register',
        'as' => 'public.member.register.posten.public.member.register.post',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => '/en',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.password.requesten.public.member.password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/password/request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'member.guest',
        ),
        'uses' => 'Botble\\Member\\Http\\Controllers\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'Botble\\Member\\Http\\Controllers\\ForgotPasswordController@showLinkRequestForm',
        'as' => 'public.member.password.requesten.public.member.password.request',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => '/en',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.password.emailen.public.member.password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'en/password/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'member.guest',
        ),
        'uses' => 'Botble\\Member\\Http\\Controllers\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'Botble\\Member\\Http\\Controllers\\ForgotPasswordController@sendResetLinkEmail',
        'as' => 'public.member.password.emailen.public.member.password.email',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => '/en',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.password.updateen.public.member.password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'en/password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'member.guest',
        ),
        'uses' => 'Botble\\Member\\Http\\Controllers\\ResetPasswordController@reset',
        'controller' => 'Botble\\Member\\Http\\Controllers\\ResetPasswordController@reset',
        'as' => 'public.member.password.updateen.public.member.password.update',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => '/en',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.password.reseten.public.member.password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'member.guest',
        ),
        'uses' => 'Botble\\Member\\Http\\Controllers\\ResetPasswordController@showResetForm',
        'controller' => 'Botble\\Member\\Http\\Controllers\\ResetPasswordController@showResetForm',
        'as' => 'public.member.password.reseten.public.member.password.reset',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => '/en',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.resend_confirmationen.public.member.resend_confirmation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/register/confirm/resend',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'member',
        ),
        'uses' => 'Botble\\Member\\Http\\Controllers\\RegisterController@resendConfirmation',
        'controller' => 'Botble\\Member\\Http\\Controllers\\RegisterController@resendConfirmation',
        'as' => 'public.member.resend_confirmationen.public.member.resend_confirmation',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => '/en',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.confirmen.public.member.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/register/confirm/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'member',
        ),
        'uses' => 'Botble\\Member\\Http\\Controllers\\RegisterController@confirm',
        'controller' => 'Botble\\Member\\Http\\Controllers\\RegisterController@confirm',
        'as' => 'public.member.confirmen.public.member.confirm',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => '/en',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.logouten.public.member.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'en/account/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'member',
        ),
        'uses' => 'Botble\\Member\\Http\\Controllers\\LoginController@logout',
        'controller' => 'Botble\\Member\\Http\\Controllers\\LoginController@logout',
        'as' => 'public.member.logouten.public.member.logout',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => 'en/account',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.dashboarden.public.member.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/account/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'member',
        ),
        'as' => 'public.member.dashboarden.public.member.dashboard',
        'uses' => 'Botble\\Member\\Http\\Controllers\\PublicController@getDashboard',
        'controller' => 'Botble\\Member\\Http\\Controllers\\PublicController@getDashboard',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => 'en/account',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.settingsen.public.member.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/account/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'member',
        ),
        'as' => 'public.member.settingsen.public.member.settings',
        'uses' => 'Botble\\Member\\Http\\Controllers\\PublicController@getSettings',
        'controller' => 'Botble\\Member\\Http\\Controllers\\PublicController@getSettings',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => 'en/account',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.post.settingsen.public.member.post.settings' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'en/account/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'member',
        ),
        'as' => 'public.member.post.settingsen.public.member.post.settings',
        'uses' => 'Botble\\Member\\Http\\Controllers\\PublicController@postSettings',
        'controller' => 'Botble\\Member\\Http\\Controllers\\PublicController@postSettings',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => 'en/account',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.post.securityen.public.member.post.security' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'en/account/security',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'member',
        ),
        'as' => 'public.member.post.securityen.public.member.post.security',
        'uses' => 'Botble\\Member\\Http\\Controllers\\PublicController@postSecurity',
        'controller' => 'Botble\\Member\\Http\\Controllers\\PublicController@postSecurity',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => 'en/account',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.avataren.public.member.avatar' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'en/account/avatar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'member',
        ),
        'as' => 'public.member.avataren.public.member.avatar',
        'uses' => 'Botble\\Member\\Http\\Controllers\\PublicController@postAvatar',
        'controller' => 'Botble\\Member\\Http\\Controllers\\PublicController@postAvatar',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => 'en/account',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.activity-logsen.public.member.activity-logs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/ajax/members/activity-logs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'member',
        ),
        'as' => 'public.member.activity-logsen.public.member.activity-logs',
        'uses' => 'Botble\\Member\\Http\\Controllers\\PublicController@getActivityLogs',
        'controller' => 'Botble\\Member\\Http\\Controllers\\PublicController@getActivityLogs',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => 'en/ajax/members',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.uploaden.public.member.upload' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'en/ajax/members/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'member',
        ),
        'as' => 'public.member.uploaden.public.member.upload',
        'uses' => 'Botble\\Member\\Http\\Controllers\\PublicController@postUpload',
        'controller' => 'Botble\\Member\\Http\\Controllers\\PublicController@postUpload',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => 'en/ajax/members',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.upload-from-editoren.public.member.upload-from-editor' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'en/ajax/members/upload-from-editor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'member',
        ),
        'as' => 'public.member.upload-from-editoren.public.member.upload-from-editor',
        'uses' => 'Botble\\Member\\Http\\Controllers\\PublicController@postUploadFromEditor',
        'controller' => 'Botble\\Member\\Http\\Controllers\\PublicController@postUploadFromEditor',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => 'en/ajax/members',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.posts.indexen.public.member.posts.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'en/account/posts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'member',
        ),
        'as' => 'public.member.posts.indexen.public.member.posts.index',
        'uses' => 'Botble\\Member\\Http\\Controllers\\PostController@index',
        'controller' => 'Botble\\Member\\Http\\Controllers\\PostController@index',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => 'en/account/posts',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.posts.createen.public.member.posts.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/account/posts/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'member',
        ),
        'as' => 'public.member.posts.createen.public.member.posts.create',
        'uses' => 'Botble\\Member\\Http\\Controllers\\PostController@create',
        'controller' => 'Botble\\Member\\Http\\Controllers\\PostController@create',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => 'en/account/posts',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.posts.storeen.public.member.posts.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'en/account/posts/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'member',
        ),
        'as' => 'public.member.posts.storeen.public.member.posts.store',
        'uses' => 'Botble\\Member\\Http\\Controllers\\PostController@store',
        'controller' => 'Botble\\Member\\Http\\Controllers\\PostController@store',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => 'en/account/posts',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.posts.editen.public.member.posts.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/account/posts/edit/{post}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'member',
        ),
        'as' => 'public.member.posts.editen.public.member.posts.edit',
        'uses' => 'Botble\\Member\\Http\\Controllers\\PostController@edit',
        'controller' => 'Botble\\Member\\Http\\Controllers\\PostController@edit',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => 'en/account/posts',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'post' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.posts.updateen.public.member.posts.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'en/account/posts/edit/{post}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'member',
        ),
        'as' => 'public.member.posts.updateen.public.member.posts.update',
        'uses' => 'Botble\\Member\\Http\\Controllers\\PostController@update',
        'controller' => 'Botble\\Member\\Http\\Controllers\\PostController@update',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => 'en/account/posts',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'post' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.posts.destroyen.public.member.posts.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'en/account/posts/{post}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'member',
        ),
        'as' => 'public.member.posts.destroyen.public.member.posts.destroy',
        'uses' => 'Botble\\Member\\Http\\Controllers\\PostController@destroy',
        'controller' => 'Botble\\Member\\Http\\Controllers\\PostController@destroy',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => 'en/account/posts',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'post' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.tags.allen.public.member.tags.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/ajax/members/tags/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'member',
        ),
        'as' => 'public.member.tags.allen.public.member.tags.all',
        'uses' => 'Botble\\Member\\Http\\Controllers\\PostController@getAllTags',
        'controller' => 'Botble\\Member\\Http\\Controllers\\PostController@getAllTags',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => 'en/ajax/members',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'newsletter.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/newsletters',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'newsletter.index',
        'uses' => 'Botble\\Newsletter\\Http\\Controllers\\NewsletterController@index',
        'controller' => 'Botble\\Newsletter\\Http\\Controllers\\NewsletterController@index',
        'namespace' => 'Botble\\Newsletter\\Http\\Controllers',
        'prefix' => 'admin/newsletters',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'newsletter.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/newsletters/{newsletter}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'newsletter.destroy',
        'uses' => 'Botble\\Newsletter\\Http\\Controllers\\NewsletterController@destroy',
        'controller' => 'Botble\\Newsletter\\Http\\Controllers\\NewsletterController@destroy',
        'namespace' => 'Botble\\Newsletter\\Http\\Controllers',
        'prefix' => 'admin/newsletters',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'newsletter' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'newsletter.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/newsletter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'newsletter.settings',
        'uses' => 'Botble\\Newsletter\\Http\\Controllers\\Settings\\NewsletterSettingController@edit',
        'controller' => 'Botble\\Newsletter\\Http\\Controllers\\Settings\\NewsletterSettingController@edit',
        'namespace' => 'Botble\\Newsletter\\Http\\Controllers',
        'prefix' => 'admin/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'newsletter.settings.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/newsletter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'newsletter.settings.update',
        'uses' => 'Botble\\Newsletter\\Http\\Controllers\\Settings\\NewsletterSettingController@update',
        'permission' => 'newsletter.settings',
        'controller' => 'Botble\\Newsletter\\Http\\Controllers\\Settings\\NewsletterSettingController@update',
        'namespace' => 'Botble\\Newsletter\\Http\\Controllers',
        'prefix' => 'admin/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.newsletter.subscribeen.public.newsletter.subscribe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'en/newsletter/subscribe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
        ),
        'as' => 'public.newsletter.subscribeen.public.newsletter.subscribe',
        'uses' => 'Botble\\Newsletter\\Http\\Controllers\\PublicController@postSubscribe',
        'controller' => 'Botble\\Newsletter\\Http\\Controllers\\PublicController@postSubscribe',
        'namespace' => 'Botble\\Newsletter\\Http\\Controllers',
        'prefix' => '/en',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.newsletter.unsubscribeen.public.newsletter.unsubscribe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/newsletter/unsubscribe/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
        ),
        'as' => 'public.newsletter.unsubscribeen.public.newsletter.unsubscribe',
        'uses' => 'Botble\\Newsletter\\Http\\Controllers\\PublicController@getUnsubscribe',
        'controller' => 'Botble\\Newsletter\\Http\\Controllers\\PublicController@getUnsubscribe',
        'namespace' => 'Botble\\Newsletter\\Http\\Controllers',
        'prefix' => '/en',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.ajax.newsletter-popupen.public.ajax.newsletter-popup' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/ajax/newsletter/popup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'Botble\\Base\\Http\\Middleware\\RequiresJsonRequestMiddleware',
        ),
        'uses' => 'Botble\\Newsletter\\Http\\Controllers\\PublicController@ajaxLoadPopup',
        'controller' => 'Botble\\Newsletter\\Http\\Controllers\\PublicController@ajaxLoadPopup',
        'namespace' => 'Botble\\Newsletter\\Http\\Controllers',
        'prefix' => '/en',
        'where' => 
        array (
        ),
        'as' => 'public.ajax.newsletter-popupen.public.ajax.newsletter-popup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'request-log.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/request-logs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'request-log.index',
        'uses' => 'Botble\\RequestLog\\Http\\Controllers\\RequestLogController@index',
        'controller' => 'Botble\\RequestLog\\Http\\Controllers\\RequestLogController@index',
        'namespace' => 'Botble\\RequestLog\\Http\\Controllers',
        'prefix' => 'admin/request-logs',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'request-log.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/request-logs/{request_log}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'request-log.destroy',
        'uses' => 'Botble\\RequestLog\\Http\\Controllers\\RequestLogController@destroy',
        'controller' => 'Botble\\RequestLog\\Http\\Controllers\\RequestLogController@destroy',
        'namespace' => 'Botble\\RequestLog\\Http\\Controllers',
        'prefix' => 'admin/request-logs',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'request_log' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'request-log.widget.request-errors' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/request-logs/widgets/request-errors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'request-log.widget.request-errors',
        'uses' => 'Botble\\RequestLog\\Http\\Controllers\\RequestLogController@getWidgetRequestErrors',
        'permission' => 'request-log.index',
        'controller' => 'Botble\\RequestLog\\Http\\Controllers\\RequestLogController@getWidgetRequestErrors',
        'namespace' => 'Botble\\RequestLog\\Http\\Controllers',
        'prefix' => 'admin/request-logs',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'request-log.empty' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/request-logs/items/empty',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'request-log.empty',
        'uses' => 'Botble\\RequestLog\\Http\\Controllers\\RequestLogController@deleteAll',
        'permission' => 'request-log.destroy',
        'controller' => 'Botble\\RequestLog\\Http\\Controllers\\RequestLogController@deleteAll',
        'namespace' => 'Botble\\RequestLog\\Http\\Controllers',
        'prefix' => 'admin/request-logs',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'feeds.showen.feeds.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/feed/{name}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
        ),
        'uses' => 'Botble\\RssFeed\\Http\\Controllers\\RssFeedController@show',
        'controller' => 'Botble\\RssFeed\\Http\\Controllers\\RssFeedController@show',
        'namespace' => NULL,
        'prefix' => '/en',
        'where' => 
        array (
        ),
        'as' => 'feeds.showen.feeds.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'social-login.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/social-login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'social-login.settings',
        'uses' => 'Botble\\SocialLogin\\Http\\Controllers\\Settings\\SocialLoginSettingController@edit',
        'controller' => 'Botble\\SocialLogin\\Http\\Controllers\\Settings\\SocialLoginSettingController@edit',
        'namespace' => 'Botble\\SocialLogin\\Http\\Controllers',
        'prefix' => 'admin/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'social-login.settings.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/social-login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'social-login.settings.update',
        'uses' => 'Botble\\SocialLogin\\Http\\Controllers\\Settings\\SocialLoginSettingController@update',
        'permission' => 'social-login.settings',
        'controller' => 'Botble\\SocialLogin\\Http\\Controllers\\Settings\\SocialLoginSettingController@update',
        'namespace' => 'Botble\\SocialLogin\\Http\\Controllers',
        'prefix' => 'admin/settings',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'auth.social' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/{provider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
        ),
        'as' => 'auth.social',
        'uses' => 'Botble\\SocialLogin\\Http\\Controllers\\SocialLoginController@redirectToProvider',
        'controller' => 'Botble\\SocialLogin\\Http\\Controllers\\SocialLoginController@redirectToProvider',
        'namespace' => 'Botble\\SocialLogin\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'auth.social.callback' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/callback/{provider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
        ),
        'as' => 'auth.social.callback',
        'uses' => 'Botble\\SocialLogin\\Http\\Controllers\\SocialLoginController@handleProviderCallback',
        'controller' => 'Botble\\SocialLogin\\Http\\Controllers\\SocialLoginController@handleProviderCallback',
        'namespace' => 'Botble\\SocialLogin\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'facebook-data-deletion-request-callback' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'facebook/data-deletion-request-callback',
      'action' => 
      array (
        'as' => 'facebook-data-deletion-request-callback',
        'uses' => 'Botble\\SocialLogin\\Http\\Controllers\\FacebookDataDeletionRequestCallbackController@handle',
        'controller' => 'Botble\\SocialLogin\\Http\\Controllers\\FacebookDataDeletionRequestCallbackController@handle',
        'namespace' => 'Botble\\SocialLogin\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TVgOU6MIVEMdZsQs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'facebook-data-deletion-request-callback',
      'action' => 
      array (
        'uses' => 'Botble\\SocialLogin\\Http\\Controllers\\FacebookDataDeletionRequestCallbackController@redirect',
        'controller' => 'Botble\\SocialLogin\\Http\\Controllers\\FacebookDataDeletionRequestCallbackController@redirect',
        'namespace' => 'Botble\\SocialLogin\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::TVgOU6MIVEMdZsQs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'facebook-deletion-status' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'facebook-deletion-status/{id}',
      'action' => 
      array (
        'as' => 'facebook-deletion-status',
        'uses' => 'Botble\\SocialLogin\\Http\\Controllers\\FacebookDataDeletionRequestCallbackController@show',
        'controller' => 'Botble\\SocialLogin\\Http\\Controllers\\FacebookDataDeletionRequestCallbackController@show',
        'namespace' => 'Botble\\SocialLogin\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bO2z3wcSrYViKxNC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/auth/apple',
      'action' => 
      array (
        'middleware' => 'api',
        'uses' => 'Botble\\SocialLogin\\Http\\Controllers\\API\\AppleLoginController@login',
        'controller' => 'Botble\\SocialLogin\\Http\\Controllers\\API\\AppleLoginController@login',
        'namespace' => 'Botble\\SocialLogin\\Http\\Controllers\\API',
        'prefix' => 'api/v1/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::bO2z3wcSrYViKxNC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5CYdQ2VQu8PAwRsw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/auth/google',
      'action' => 
      array (
        'middleware' => 'api',
        'uses' => 'Botble\\SocialLogin\\Http\\Controllers\\API\\GoogleLoginController@login',
        'controller' => 'Botble\\SocialLogin\\Http\\Controllers\\API\\GoogleLoginController@login',
        'namespace' => 'Botble\\SocialLogin\\Http\\Controllers\\API',
        'prefix' => 'api/v1/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::5CYdQ2VQu8PAwRsw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AakvOuv4IKAuXWJv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/auth/facebook',
      'action' => 
      array (
        'middleware' => 'api',
        'uses' => 'Botble\\SocialLogin\\Http\\Controllers\\API\\FacebookLoginController@login',
        'controller' => 'Botble\\SocialLogin\\Http\\Controllers\\API\\FacebookLoginController@login',
        'namespace' => 'Botble\\SocialLogin\\Http\\Controllers\\API',
        'prefix' => 'api/v1/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::AakvOuv4IKAuXWJv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::X8WeV8lYqbIF8rQy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/auth/x',
      'action' => 
      array (
        'middleware' => 'api',
        'uses' => 'Botble\\SocialLogin\\Http\\Controllers\\API\\XLoginController@login',
        'controller' => 'Botble\\SocialLogin\\Http\\Controllers\\API\\XLoginController@login',
        'namespace' => 'Botble\\SocialLogin\\Http\\Controllers\\API',
        'prefix' => 'api/v1/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::X8WeV8lYqbIF8rQy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'translations.locales' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/translations/locales',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'translations.locales',
        'as' => 'translations.locales',
        'uses' => 'Botble\\Translation\\Http\\Controllers\\LocaleController@index',
        'controller' => 'Botble\\Translation\\Http\\Controllers\\LocaleController@index',
        'namespace' => 'Botble\\Translation\\Http\\Controllers',
        'prefix' => 'admin/translations/locales',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'translations.locales.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/translations/locales',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
          3 => 'preventDemo',
        ),
        'permission' => 'translations.locales',
        'as' => 'translations.locales.post',
        'uses' => 'Botble\\Translation\\Http\\Controllers\\LocaleController@store',
        'controller' => 'Botble\\Translation\\Http\\Controllers\\LocaleController@store',
        'namespace' => 'Botble\\Translation\\Http\\Controllers',
        'prefix' => 'admin/translations/locales',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'translations.locales.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/translations/locales/{locale}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
          3 => 'preventDemo',
        ),
        'permission' => 'translations.locales',
        'as' => 'translations.locales.delete',
        'uses' => 'Botble\\Translation\\Http\\Controllers\\LocaleController@destroy',
        'controller' => 'Botble\\Translation\\Http\\Controllers\\LocaleController@destroy',
        'namespace' => 'Botble\\Translation\\Http\\Controllers',
        'prefix' => 'admin/translations/locales',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'translations.locales.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/translations/locales/download/{locale}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
          3 => 'preventDemo',
        ),
        'permission' => 'translations.locales',
        'as' => 'translations.locales.download',
        'uses' => 'Botble\\Translation\\Http\\Controllers\\LocaleController@download',
        'controller' => 'Botble\\Translation\\Http\\Controllers\\LocaleController@download',
        'namespace' => 'Botble\\Translation\\Http\\Controllers',
        'prefix' => 'admin/translations/locales',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'translations.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/translations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'translations.index',
        'as' => 'translations.index',
        'uses' => 'Botble\\Translation\\Http\\Controllers\\TranslationController@index',
        'controller' => 'Botble\\Translation\\Http\\Controllers\\TranslationController@index',
        'namespace' => 'Botble\\Translation\\Http\\Controllers',
        'prefix' => 'admin/translations',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'translations.group.edit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/translations/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
          3 => 'preventDemo',
        ),
        'permission' => 'translations.index',
        'as' => 'translations.group.edit',
        'uses' => 'Botble\\Translation\\Http\\Controllers\\TranslationController@update',
        'controller' => 'Botble\\Translation\\Http\\Controllers\\TranslationController@update',
        'namespace' => 'Botble\\Translation\\Http\\Controllers',
        'prefix' => 'admin/translations',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'translations.theme-translations' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/translations/theme',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'translations.theme-translations',
        'as' => 'translations.theme-translations',
        'uses' => 'Botble\\Translation\\Http\\Controllers\\ThemeTranslationController@index',
        'controller' => 'Botble\\Translation\\Http\\Controllers\\ThemeTranslationController@index',
        'namespace' => 'Botble\\Translation\\Http\\Controllers',
        'prefix' => 'admin/translations/theme',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'translations.theme-translations.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/translations/theme/post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
          3 => 'preventDemo',
        ),
        'permission' => 'translations.theme-translations',
        'as' => 'translations.theme-translations.post',
        'uses' => 'Botble\\Translation\\Http\\Controllers\\ThemeTranslationController@update',
        'controller' => 'Botble\\Translation\\Http\\Controllers\\ThemeTranslationController@update',
        'namespace' => 'Botble\\Translation\\Http\\Controllers',
        'prefix' => 'admin/translations/theme',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'translations.theme-translations.re-import' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/translations/theme/re-import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
          3 => 'preventDemo',
        ),
        'permission' => 'translations.theme-translations',
        'as' => 'translations.theme-translations.re-import',
        'uses' => 'Botble\\Translation\\Http\\Controllers\\ReImportThemeTranslationController@__invoke',
        'controller' => 'Botble\\Translation\\Http\\Controllers\\ReImportThemeTranslationController@__invoke',
        'namespace' => 'Botble\\Translation\\Http\\Controllers',
        'prefix' => 'admin/translations/theme',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tools.data-synchronize.export.theme-translations.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tools/data-synchronize/export/theme-translations/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'theme-translations.export',
        'uses' => 'Botble\\Translation\\Http\\Controllers\\ExportThemeTranslationController@index',
        'controller' => 'Botble\\Translation\\Http\\Controllers\\ExportThemeTranslationController@index',
        'as' => 'tools.data-synchronize.export.theme-translations.index',
        'namespace' => 'Botble\\Translation\\Http\\Controllers',
        'prefix' => 'admin/tools/data-synchronize/export/theme-translations/export',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tools.data-synchronize.export.theme-translations.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/tools/data-synchronize/export/theme-translations/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'theme-translations.export',
        'uses' => 'Botble\\Translation\\Http\\Controllers\\ExportThemeTranslationController@store',
        'controller' => 'Botble\\Translation\\Http\\Controllers\\ExportThemeTranslationController@store',
        'as' => 'tools.data-synchronize.export.theme-translations.store',
        'namespace' => 'Botble\\Translation\\Http\\Controllers',
        'prefix' => 'admin/tools/data-synchronize/export/theme-translations/export',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tools.data-synchronize.export.other-translations.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tools/data-synchronize/export/other-translations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'other-translations.export',
        'uses' => 'Botble\\Translation\\Http\\Controllers\\ExportOtherTranslationController@index',
        'controller' => 'Botble\\Translation\\Http\\Controllers\\ExportOtherTranslationController@index',
        'as' => 'tools.data-synchronize.export.other-translations.index',
        'namespace' => 'Botble\\Translation\\Http\\Controllers',
        'prefix' => 'admin/tools/data-synchronize/export/other-translations',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tools.data-synchronize.export.other-translations.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/tools/data-synchronize/export/other-translations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'other-translations.export',
        'uses' => 'Botble\\Translation\\Http\\Controllers\\ExportOtherTranslationController@store',
        'controller' => 'Botble\\Translation\\Http\\Controllers\\ExportOtherTranslationController@store',
        'as' => 'tools.data-synchronize.export.other-translations.store',
        'namespace' => 'Botble\\Translation\\Http\\Controllers',
        'prefix' => 'admin/tools/data-synchronize/export/other-translations',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tools.data-synchronize.import.theme-translations.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tools/data-synchronize/import/theme-translations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'theme-translations.import',
        'uses' => 'Botble\\Translation\\Http\\Controllers\\ImportThemeTranslationController@index',
        'controller' => 'Botble\\Translation\\Http\\Controllers\\ImportThemeTranslationController@index',
        'as' => 'tools.data-synchronize.import.theme-translations.index',
        'namespace' => 'Botble\\Translation\\Http\\Controllers',
        'prefix' => 'admin/tools/data-synchronize/import/theme-translations',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tools.data-synchronize.import.theme-translations.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/tools/data-synchronize/import/theme-translations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'theme-translations.import',
        'uses' => 'Botble\\Translation\\Http\\Controllers\\ImportThemeTranslationController@import',
        'controller' => 'Botble\\Translation\\Http\\Controllers\\ImportThemeTranslationController@import',
        'as' => 'tools.data-synchronize.import.theme-translations.store',
        'namespace' => 'Botble\\Translation\\Http\\Controllers',
        'prefix' => 'admin/tools/data-synchronize/import/theme-translations',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tools.data-synchronize.import.theme-translations.validate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/tools/data-synchronize/import/theme-translations/validate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'theme-translations.import',
        'uses' => 'Botble\\Translation\\Http\\Controllers\\ImportThemeTranslationController@validateData',
        'controller' => 'Botble\\Translation\\Http\\Controllers\\ImportThemeTranslationController@validateData',
        'as' => 'tools.data-synchronize.import.theme-translations.validate',
        'namespace' => 'Botble\\Translation\\Http\\Controllers',
        'prefix' => 'admin/tools/data-synchronize/import/theme-translations',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tools.data-synchronize.import.other-translations.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tools/data-synchronize/import/other-translations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'other-translations.import',
        'uses' => 'Botble\\Translation\\Http\\Controllers\\ImportOtherTranslationController@index',
        'controller' => 'Botble\\Translation\\Http\\Controllers\\ImportOtherTranslationController@index',
        'as' => 'tools.data-synchronize.import.other-translations.index',
        'namespace' => 'Botble\\Translation\\Http\\Controllers',
        'prefix' => 'admin/tools/data-synchronize/import/other-translations',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tools.data-synchronize.import.other-translations.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/tools/data-synchronize/import/other-translations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'other-translations.import',
        'uses' => 'Botble\\Translation\\Http\\Controllers\\ImportOtherTranslationController@import',
        'controller' => 'Botble\\Translation\\Http\\Controllers\\ImportOtherTranslationController@import',
        'as' => 'tools.data-synchronize.import.other-translations.store',
        'namespace' => 'Botble\\Translation\\Http\\Controllers',
        'prefix' => 'admin/tools/data-synchronize/import/other-translations',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tools.data-synchronize.import.other-translations.validate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/tools/data-synchronize/import/other-translations/validate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'permission' => 'other-translations.import',
        'uses' => 'Botble\\Translation\\Http\\Controllers\\ImportOtherTranslationController@validateData',
        'controller' => 'Botble\\Translation\\Http\\Controllers\\ImportOtherTranslationController@validateData',
        'as' => 'tools.data-synchronize.import.other-translations.validate',
        'namespace' => 'Botble\\Translation\\Http\\Controllers',
        'prefix' => 'admin/tools/data-synchronize/import/other-translations',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'live-streams.hero-image' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/live-streams/hero-image',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'uses' => 'Acm\\LiveStream\\Http\\Controllers\\Admin\\LiveStreamController@updateHero',
        'controller' => 'Acm\\LiveStream\\Http\\Controllers\\Admin\\LiveStreamController@updateHero',
        'as' => 'live-streams.hero-image',
        'namespace' => NULL,
        'prefix' => 'admin/live-streams',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'live-streams.settings' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/live-streams/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'uses' => 'Acm\\LiveStream\\Http\\Controllers\\Admin\\LiveStreamController@saveSettings',
        'controller' => 'Acm\\LiveStream\\Http\\Controllers\\Admin\\LiveStreamController@saveSettings',
        'as' => 'live-streams.settings',
        'namespace' => NULL,
        'prefix' => 'admin/live-streams',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'live-streams.fetch-live' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/live-streams/fetch-live',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'uses' => 'Acm\\LiveStream\\Http\\Controllers\\Admin\\LiveStreamController@fetchLive',
        'controller' => 'Acm\\LiveStream\\Http\\Controllers\\Admin\\LiveStreamController@fetchLive',
        'as' => 'live-streams.fetch-live',
        'namespace' => NULL,
        'prefix' => 'admin/live-streams',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'live-streams.seed-channels' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/live-streams/seed-channels',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'uses' => 'Acm\\LiveStream\\Http\\Controllers\\Admin\\LiveStreamController@seedChannels',
        'controller' => 'Acm\\LiveStream\\Http\\Controllers\\Admin\\LiveStreamController@seedChannels',
        'as' => 'live-streams.seed-channels',
        'namespace' => NULL,
        'prefix' => 'admin/live-streams',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'live-streams.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/live-streams',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'live-streams.index',
        'uses' => 'Acm\\LiveStream\\Http\\Controllers\\Admin\\LiveStreamController@index',
        'controller' => 'Acm\\LiveStream\\Http\\Controllers\\Admin\\LiveStreamController@index',
        'namespace' => NULL,
        'prefix' => 'admin/live-streams/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'live-streams.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/live-streams/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'live-streams.create',
        'uses' => 'Acm\\LiveStream\\Http\\Controllers\\Admin\\LiveStreamController@create',
        'controller' => 'Acm\\LiveStream\\Http\\Controllers\\Admin\\LiveStreamController@create',
        'namespace' => NULL,
        'prefix' => 'admin/live-streams/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'live-streams.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/live-streams/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'live-streams.store',
        'uses' => 'Acm\\LiveStream\\Http\\Controllers\\Admin\\LiveStreamController@store',
        'controller' => 'Acm\\LiveStream\\Http\\Controllers\\Admin\\LiveStreamController@store',
        'namespace' => NULL,
        'prefix' => 'admin/live-streams/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'live-streams.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/live-streams/edit/{liveStream}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'live-streams.edit',
        'uses' => 'Acm\\LiveStream\\Http\\Controllers\\Admin\\LiveStreamController@edit',
        'controller' => 'Acm\\LiveStream\\Http\\Controllers\\Admin\\LiveStreamController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/live-streams/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'liveStream' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'live-streams.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/live-streams/edit/{liveStream}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'live-streams.update',
        'uses' => 'Acm\\LiveStream\\Http\\Controllers\\Admin\\LiveStreamController@update',
        'controller' => 'Acm\\LiveStream\\Http\\Controllers\\Admin\\LiveStreamController@update',
        'namespace' => NULL,
        'prefix' => 'admin/live-streams/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'liveStream' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'live-streams.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/live-streams/{liveStream}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'live-streams.destroy',
        'uses' => 'Acm\\LiveStream\\Http\\Controllers\\Admin\\LiveStreamController@destroy',
        'controller' => 'Acm\\LiveStream\\Http\\Controllers\\Admin\\LiveStreamController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/live-streams/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'liveStream' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'community-forums.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/community/forums',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'community-forums.index',
        'uses' => 'Acm\\Community\\Http\\Controllers\\Admin\\ForumCategoryController@index',
        'controller' => 'Acm\\Community\\Http\\Controllers\\Admin\\ForumCategoryController@index',
        'namespace' => NULL,
        'prefix' => 'admin/community/forums/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'community-forums.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/community/forums/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'community-forums.create',
        'uses' => 'Acm\\Community\\Http\\Controllers\\Admin\\ForumCategoryController@create',
        'controller' => 'Acm\\Community\\Http\\Controllers\\Admin\\ForumCategoryController@create',
        'namespace' => NULL,
        'prefix' => 'admin/community/forums/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'community-forums.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/community/forums/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'community-forums.store',
        'uses' => 'Acm\\Community\\Http\\Controllers\\Admin\\ForumCategoryController@store',
        'controller' => 'Acm\\Community\\Http\\Controllers\\Admin\\ForumCategoryController@store',
        'namespace' => NULL,
        'prefix' => 'admin/community/forums/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'community-forums.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/community/forums/edit/{forumCategory}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'community-forums.edit',
        'uses' => 'Acm\\Community\\Http\\Controllers\\Admin\\ForumCategoryController@edit',
        'controller' => 'Acm\\Community\\Http\\Controllers\\Admin\\ForumCategoryController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/community/forums/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'forumCategory' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'community-forums.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/community/forums/edit/{forumCategory}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'community-forums.update',
        'uses' => 'Acm\\Community\\Http\\Controllers\\Admin\\ForumCategoryController@update',
        'controller' => 'Acm\\Community\\Http\\Controllers\\Admin\\ForumCategoryController@update',
        'namespace' => NULL,
        'prefix' => 'admin/community/forums/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'forumCategory' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'community-forums.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/community/forums/{forumCategory}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'auth',
        ),
        'as' => 'community-forums.destroy',
        'uses' => 'Acm\\Community\\Http\\Controllers\\Admin\\ForumCategoryController@destroy',
        'controller' => 'Acm\\Community\\Http\\Controllers\\Admin\\ForumCategoryController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/community/forums/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'forumCategory' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.community.feeden.public.community.feed' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/feed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
        ),
        'uses' => 'Acm\\Community\\Http\\Controllers\\Front\\FeedController@index',
        'controller' => 'Acm\\Community\\Http\\Controllers\\Front\\FeedController@index',
        'namespace' => NULL,
        'prefix' => '/en',
        'where' => 
        array (
        ),
        'as' => 'public.community.feeden.public.community.feed',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.community.feed.storeen.public.community.feed.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'en/ajax/feed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
        ),
        'uses' => 'Acm\\Community\\Http\\Controllers\\Front\\FeedController@store',
        'controller' => 'Acm\\Community\\Http\\Controllers\\Front\\FeedController@store',
        'namespace' => NULL,
        'prefix' => '/en',
        'where' => 
        array (
        ),
        'as' => 'public.community.feed.storeen.public.community.feed.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.community.feed.likeen.public.community.feed.like' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'en/ajax/feed/{post}/like',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
        ),
        'uses' => 'Acm\\Community\\Http\\Controllers\\Front\\FeedController@like',
        'controller' => 'Acm\\Community\\Http\\Controllers\\Front\\FeedController@like',
        'namespace' => NULL,
        'prefix' => '/en',
        'where' => 
        array (
        ),
        'as' => 'public.community.feed.likeen.public.community.feed.like',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.community.feed.destroyen.public.community.feed.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'en/ajax/feed/{post}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
        ),
        'uses' => 'Acm\\Community\\Http\\Controllers\\Front\\FeedController@destroy',
        'controller' => 'Acm\\Community\\Http\\Controllers\\Front\\FeedController@destroy',
        'namespace' => NULL,
        'prefix' => '/en',
        'where' => 
        array (
        ),
        'as' => 'public.community.feed.destroyen.public.community.feed.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.community.groupsen.public.community.groups' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/groups',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
        ),
        'uses' => 'Acm\\Community\\Http\\Controllers\\Front\\GroupController@index',
        'controller' => 'Acm\\Community\\Http\\Controllers\\Front\\GroupController@index',
        'namespace' => NULL,
        'prefix' => '/en',
        'where' => 
        array (
        ),
        'as' => 'public.community.groupsen.public.community.groups',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.community.groups.storeen.public.community.groups.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'en/ajax/groups',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
        ),
        'uses' => 'Acm\\Community\\Http\\Controllers\\Front\\GroupController@store',
        'controller' => 'Acm\\Community\\Http\\Controllers\\Front\\GroupController@store',
        'namespace' => NULL,
        'prefix' => '/en',
        'where' => 
        array (
        ),
        'as' => 'public.community.groups.storeen.public.community.groups.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.community.groups.showen.public.community.groups.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/groups/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
        ),
        'uses' => 'Acm\\Community\\Http\\Controllers\\Front\\GroupController@show',
        'controller' => 'Acm\\Community\\Http\\Controllers\\Front\\GroupController@show',
        'namespace' => NULL,
        'prefix' => '/en',
        'where' => 
        array (
        ),
        'as' => 'public.community.groups.showen.public.community.groups.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.community.groups.joinen.public.community.groups.join' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'en/ajax/groups/{slug}/join',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
        ),
        'uses' => 'Acm\\Community\\Http\\Controllers\\Front\\GroupController@join',
        'controller' => 'Acm\\Community\\Http\\Controllers\\Front\\GroupController@join',
        'namespace' => NULL,
        'prefix' => '/en',
        'where' => 
        array (
        ),
        'as' => 'public.community.groups.joinen.public.community.groups.join',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.community.groups.leaveen.public.community.groups.leave' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'en/ajax/groups/{slug}/leave',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
        ),
        'uses' => 'Acm\\Community\\Http\\Controllers\\Front\\GroupController@leave',
        'controller' => 'Acm\\Community\\Http\\Controllers\\Front\\GroupController@leave',
        'namespace' => NULL,
        'prefix' => '/en',
        'where' => 
        array (
        ),
        'as' => 'public.community.groups.leaveen.public.community.groups.leave',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.community.forumsen.public.community.forums' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/forums',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
        ),
        'uses' => 'Acm\\Community\\Http\\Controllers\\Front\\ForumController@index',
        'controller' => 'Acm\\Community\\Http\\Controllers\\Front\\ForumController@index',
        'namespace' => NULL,
        'prefix' => '/en',
        'where' => 
        array (
        ),
        'as' => 'public.community.forumsen.public.community.forums',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.community.forum.categoryen.public.community.forum.category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/forums/category/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
        ),
        'uses' => 'Acm\\Community\\Http\\Controllers\\Front\\ForumController@showCategory',
        'controller' => 'Acm\\Community\\Http\\Controllers\\Front\\ForumController@showCategory',
        'namespace' => NULL,
        'prefix' => '/en',
        'where' => 
        array (
        ),
        'as' => 'public.community.forum.categoryen.public.community.forum.category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.community.forum.topic.storeen.public.community.forum.topic.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'en/forums/category/{slug}/topic',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
        ),
        'uses' => 'Acm\\Community\\Http\\Controllers\\Front\\ForumController@storeTopic',
        'controller' => 'Acm\\Community\\Http\\Controllers\\Front\\ForumController@storeTopic',
        'namespace' => NULL,
        'prefix' => '/en',
        'where' => 
        array (
        ),
        'as' => 'public.community.forum.topic.storeen.public.community.forum.topic.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.community.forum.topicen.public.community.forum.topic' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/forums/topic/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
        ),
        'uses' => 'Acm\\Community\\Http\\Controllers\\Front\\ForumController@showTopic',
        'controller' => 'Acm\\Community\\Http\\Controllers\\Front\\ForumController@showTopic',
        'namespace' => NULL,
        'prefix' => '/en',
        'where' => 
        array (
        ),
        'as' => 'public.community.forum.topicen.public.community.forum.topic',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.community.forum.reply.storeen.public.community.forum.reply.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'en/forums/topic/{slug}/reply',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
        ),
        'uses' => 'Acm\\Community\\Http\\Controllers\\Front\\ForumController@storeReply',
        'controller' => 'Acm\\Community\\Http\\Controllers\\Front\\ForumController@storeReply',
        'namespace' => NULL,
        'prefix' => '/en',
        'where' => 
        array (
        ),
        'as' => 'public.community.forum.reply.storeen.public.community.forum.reply.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storage.local' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'storage/{path}',
      'action' => 
      array (
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:3:{s:4:"disk";s:5:"local";s:6:"config";a:5:{s:6:"driver";s:5:"local";s:4:"root";s:25:"/var/www/html/storage/app";s:5:"serve";b:1;s:5:"throw";b:0;s:6:"report";b:0;}s:12:"isProduction";b:1;}s:8:"function";s:323:"function (\\Illuminate\\Http\\Request $request, string $path) use ($disk, $config, $isProduction) {
                    return (new \\Illuminate\\Filesystem\\ServeFile(
                        $disk,
                        $config,
                        $isProduction
                    ))($request, $path);
                }";s:5:"scope";s:47:"Illuminate\\Filesystem\\FilesystemServiceProvider";s:4:"this";N;s:4:"self";s:32:"000000000000129b0000000000000000";}}',
        'as' => 'storage.local',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'path' => '.*',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.ajax.render-ui-blocken.public.ajax.render-ui-block' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'en/ajax/render-ui-blocks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'throttle:60,1',
          5 => 'Botble\\Base\\Http\\Middleware\\RequiresJsonRequestMiddleware',
          6 => 'Botble\\Shortcode\\Http\\Middleware\\ShortcodePerformanceMiddleware',
        ),
        'uses' => 'Botble\\Shortcode\\Http\\Controllers\\ShortcodeController@ajaxRenderUiBlock',
        'controller' => 'Botble\\Shortcode\\Http\\Controllers\\ShortcodeController@ajaxRenderUiBlock',
        'namespace' => NULL,
        'prefix' => '/en',
        'where' => 
        array (
        ),
        'as' => 'public.ajax.render-ui-blocken.public.ajax.render-ui-block',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.read' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'read',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:1468:"function (\\Illuminate\\Http\\Request $request) {
        $catId = $request->integer(\'category\');
        $sort  = $request->input(\'sort\', \'latest\');

        $baseQuery = fn () => \\Botble\\Blog\\Models\\Post::query()
            ->with([\'slugable\', \'categories\', \'tags\'])
            ->wherePublished()
            ->whereDoesntHave(\'metadata\', fn ($q) => $q
                ->where(\'meta_key\', \'video_url\')
                ->whereNotNull(\'meta_value\')
                ->where(\'meta_value\', \'!=\', \'\'))
            ->whereDoesntHave(\'metadata\', fn ($q) => $q
                ->where(\'meta_key\', \'audio\')
                ->whereNotNull(\'meta_value\')
                ->where(\'meta_value\', \'!=\', \'\'))
            ->whereDoesntHave(\'categories\', fn ($q) => $q->where(\'id\', 3));

        $totalArticles = $baseQuery()->count();

        $posts = $baseQuery()
            ->when($catId, fn ($q) => $q->whereHas(\'categories\', fn ($cq) => $cq->where(\'id\', $catId)))
            ->when($sort === \'popular\', fn ($q) => $q->orderByDesc(\'views\'), fn ($q) => $q->latest())
            ->paginate(12)
            ->withQueryString();

        $categories = \\Botble\\Blog\\Models\\Category::query()
            ->whereHas(\'posts\', fn ($q) => $q->wherePublished())
            ->where(\'id\', \'!=\', 3)
            ->orderBy(\'name\')
            ->get();

        return \\Botble\\Theme\\Facades\\Theme::scope(\'read\', \\compact(\'posts\', \'categories\', \'catId\', \'sort\', \'totalArticles\'))->render();
    }";s:5:"scope";s:34:"Illuminate\\Support\\ServiceProvider";s:4:"this";N;s:4:"self";s:32:"00000000000013010000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'public.read',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.search-suggest' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/search-suggest',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:2087:"function (\\Illuminate\\Http\\Request $request) {
        $q = \\trim($request->input(\'q\', \'\'));
        if (\\strlen($q) < 2) {
            return \\response()->json([\'results\' => []]);
        }

        $like = "%{$q}%";
        $results = [];

        // Articles
        $articles = \\Botble\\Blog\\Models\\Post::query()
            ->wherePublished()
            ->where(\'name\', \'like\', $like)
            ->whereDoesntHave(\'metadata\', fn ($mq) => $mq->where(\'meta_key\', \'video_url\')->whereNotNull(\'meta_value\')->where(\'meta_value\', \'!=\', \'\'))
            ->limit(4)
            ->get([\'id\', \'name\', \'image\']);

        foreach ($articles as $p) {
            $results[] = [\'type\' => \'article\', \'label\' => $p->name, \'url\' => $p->url, \'icon\' => \'📰\'];
        }

        // Videos
        $videos = \\Botble\\Blog\\Models\\Post::query()
            ->wherePublished()
            ->where(\'name\', \'like\', $like)
            ->whereHas(\'metadata\', fn ($mq) => $mq->where(\'meta_key\', \'video_url\')->whereNotNull(\'meta_value\')->where(\'meta_value\', \'!=\', \'\'))
            ->limit(3)
            ->get([\'id\', \'name\']);

        foreach ($videos as $v) {
            $results[] = [\'type\' => \'video\', \'label\' => $v->name, \'url\' => $v->url, \'icon\' => \'🎬\'];
        }

        // Forum topics
        $topics = \\Acm\\Community\\Models\\ForumTopic::published()
            ->where(\'title\', \'like\', $like)
            ->limit(3)
            ->get([\'id\', \'title\', \'slug\']);

        foreach ($topics as $t) {
            $results[] = [\'type\' => \'forum\', \'label\' => $t->title, \'url\' => \\route(\'public.community.forum.topic\', $t->slug), \'icon\' => \'💬\'];
        }

        // Live streams
        $streams = \\Acm\\LiveStream\\Models\\LiveStream::published()
            ->where(\'title\', \'like\', $like)
            ->limit(2)
            ->get([\'id\', \'title\']);

        foreach ($streams as $s) {
            $results[] = [\'type\' => \'stream\', \'label\' => $s->title, \'url\' => \\route(\'public.live\'), \'icon\' => \'📺\'];
        }

        return \\response()->json([\'results\' => \\array_slice($results, 0, 8)]);
    }";s:5:"scope";s:34:"Illuminate\\Support\\ServiceProvider";s:4:"this";N;s:4:"self";s:32:"00000000000013040000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'api.search-suggest',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.videos' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'videos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:1069:"function (\\Illuminate\\Http\\Request $request) {
        $tagId = $request->integer(\'tag\');
        $sort  = $request->input(\'sort\', \'latest\');

        $query = \\Botble\\Blog\\Models\\Post::query()
            ->with([\'slugable\', \'categories\', \'tags\'])
            ->wherePublished()
            ->whereHas(\'metadata\', fn ($q) => $q->where(\'meta_key\', \'video_url\')
                ->whereNotNull(\'meta_value\')
                ->where(\'meta_value\', \'!=\', \'\'))
            ->when($tagId, fn ($q) => $q->whereHas(\'tags\', fn ($tq) => $tq->where(\'id\', $tagId)))
            ->when($sort === \'popular\', fn ($q) => $q->orderByDesc(\'views\'), fn ($q) => $q->latest());

        $videos   = $query->paginate(12)->withQueryString();
        $videoTags = \\Botble\\Blog\\Models\\Tag::query()->whereHas(\'posts\', fn ($q) => $q->wherePublished()
            ->whereHas(\'metadata\', fn ($mq) => $mq->where(\'meta_key\', \'video_url\'))
        )->orderBy(\'name\')->get();

        return \\Botble\\Theme\\Facades\\Theme::scope(\'videos\', \\compact(\'videos\', \'videoTags\', \'tagId\', \'sort\'))->render();
    }";s:5:"scope";s:34:"Illuminate\\Support\\ServiceProvider";s:4:"this";N;s:4:"self";s:32:"00000000000013060000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'public.videos',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.watch' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'watch',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:542:"function () {
        $channels = \\Illuminate\\Support\\Facades\\Cache::remember(\'watch.channels\', \\now()->addMinutes(10), function () {
            return \\App\\Models\\YouTubeChannel::query()
                ->active()
                ->withCount(\'videos\')
                ->orderBy(\'sort_order\')
                ->orderBy(\'name\')
                ->get();
        });

        $heroImage = \\setting(\'watch_page_hero_image\');

        return \\Botble\\Theme\\Facades\\Theme::scope(\'watch-channels\', \\compact(\'channels\', \'heroImage\'))->render();
    }";s:5:"scope";s:34:"Illuminate\\Support\\ServiceProvider";s:4:"this";N;s:4:"self";s:32:"00000000000013080000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'public.watch',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iEvfj6KiOioA5fcx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'channel-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:43:"fn () => \\redirect()->route(\'public.watch\')";s:5:"scope";s:34:"Illuminate\\Support\\ServiceProvider";s:4:"this";N;s:4:"self";s:32:"000000000000130a0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::iEvfj6KiOioA5fcx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.watch.channel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'watch/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:1020:"function (\\Illuminate\\Http\\Request $request, string $slug) {
        $channel = \\App\\Models\\YouTubeChannel::query()
            ->active()
            ->withCount(\'videos\')
            ->where(\'slug\', $slug)
            ->firstOrFail();

        $videos = \\App\\Models\\YouTubeChannelVideo::query()
            ->where(\'youtube_channel_id\', $channel->id)
            ->orderByDesc(\'is_live\')
            ->orderByDesc(\'published_at\')
            ->paginate(18)
            ->withQueryString();

        $selectedVideo = null;
        $videoId = \\trim((string) $request->input(\'video\', \'\'));

        if ($videoId !== \'\') {
            $selectedVideo = \\App\\Models\\YouTubeChannelVideo::query()
                ->where(\'youtube_channel_id\', $channel->id)
                ->where(\'youtube_video_id\', $videoId)
                ->first();
        }

        $selectedVideo ??= $videos->first();

        return \\Botble\\Theme\\Facades\\Theme::scope(\'watch-channel\', \\compact(\'channel\', \'videos\', \'selectedVideo\'))->render();
    }";s:5:"scope";s:34:"Illuminate\\Support\\ServiceProvider";s:4:"this";N;s:4:"self";s:32:"000000000000130c0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'public.watch.channel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.watch.legacy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'watch-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:963:"function (\\Illuminate\\Http\\Request $request) {
        $channelValue = \\trim((string) $request->input(\'channel\', \'\'));
        $videoValue = \\trim((string) $request->input(\'video\', \'\'));

        $channel = \\App\\Models\\YouTubeChannel::query()
            ->active()
            ->when($channelValue !== \'\', function ($query) use ($channelValue) {
                $slug = \\Illuminate\\Support\\Str::slug($channelValue);

                $query->where(function ($inner) use ($channelValue, $slug) {
                    $inner->where(\'slug\', $slug)
                        ->orWhere(\'name\', $channelValue);
                });
            })
            ->orderBy(\'sort_order\')
            ->first();

        if (! $channel) {
            return \\redirect()->route(\'public.watch\');
        }

        return \\redirect()->route(\'public.watch.channel\', \\array_filter([
            \'slug\' => $channel->slug,
            \'video\' => $videoValue ?: null,
        ]));
    }";s:5:"scope";s:34:"Illuminate\\Support\\ServiceProvider";s:4:"this";N;s:4:"self";s:32:"000000000000130e0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'public.watch.legacy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.live' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'live',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:302:"function () {
        $liveNow  = \\Acm\\LiveStream\\Models\\LiveStream::live()->orderBy(\'order_column\')->get();
        $upcoming = \\Acm\\LiveStream\\Models\\LiveStream::upcoming()->limit(20)->get();

        return \\Botble\\Theme\\Facades\\Theme::scope(\'live\', \\compact(\'liveNow\', \'upcoming\'))->render();
    }";s:5:"scope";s:34:"Illuminate\\Support\\ServiceProvider";s:4:"this";N;s:4:"self";s:32:"00000000000013100000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'public.live',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.live-streams' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/live-streams',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:357:"function () {
        $streams = \\Acm\\LiveStream\\Models\\LiveStream::live()
            ->orderBy(\'order_column\')
            ->get([\'id\', \'title\', \'embed_url\', \'source_name\', \'location\', \'thumbnail\', \'is_live\', \'scheduled_at\']);

        return \\response()->json([
            \'data\'  => $streams,
            \'total\' => $streams->count(),
        ]);
    }";s:5:"scope";s:34:"Illuminate\\Support\\ServiceProvider";s:4:"this";N;s:4:"self";s:32:"00000000000013120000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'api.live-streams',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.members' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'members',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:1025:"function (\\Illuminate\\Http\\Request $request) {
        $query = $request->input(\'q\', \'\');

        $members = \\Botble\\Member\\Models\\Member::query()
            ->where(\'status\', \'activated\')
            ->when($query, fn ($q) => $q->where(function ($sq) use ($query) {
                $sq->where(\'first_name\', \'like\', "%{$query}%")
                   ->orWhere(\'last_name\', \'like\', "%{$query}%")
                   ->orWhere(\'description\', \'like\', "%{$query}%");
            }))
            ->orderByDesc(\'created_at\')
            ->paginate(24)
            ->withQueryString();

        $totalMembers = \\Botble\\Member\\Models\\Member::where(\'status\', \'activated\')->count();
        $totalGroups  = \\Acm\\Community\\Models\\CommunityGroup::where(\'status\', \'published\')->count();
        $totalTopics  = \\Acm\\Community\\Models\\ForumTopic::where(\'status\', \'published\')->count();

        return \\Botble\\Theme\\Facades\\Theme::scope(\'members\', \\compact(\'members\', \'query\', \'totalMembers\', \'totalGroups\', \'totalTopics\'))->render();
    }";s:5:"scope";s:34:"Illuminate\\Support\\ServiceProvider";s:4:"this";N;s:4:"self";s:32:"00000000000013140000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'public.members',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.listen' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'listen',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:1082:"function (\\Illuminate\\Http\\Request $request) {
        $category = \\trim((string) $request->input(\'category\', \'\'));
        $sort = $request->input(\'sort\', \'name\');

        $shows = \\App\\Models\\PodcastShow::query()
            ->active()
            ->withCount(\'episodes\')
            ->when($category !== \'\', fn ($query) => $query->where(\'category\', $category))
            ->when(
                $sort === \'episodes\',
                fn ($query) => $query->orderByDesc(\'episodes_count\')->orderBy(\'name\'),
                fn ($query) => $query->orderBy(\'sort_order\')->orderBy(\'name\')
            )
            ->get();

        $categories = \\App\\Models\\PodcastShow::query()
            ->active()
            ->whereNotNull(\'category\')
            ->where(\'category\', \'!=\', \'\')
            ->distinct()
            ->orderBy(\'category\')
            ->pluck(\'category\');

        $heroImage = \\setting(\'listen_page_hero_image\');

        return \\Botble\\Theme\\Facades\\Theme::scope(\'listen-shows\', \\compact(\'shows\', \'categories\', \'category\', \'sort\', \'heroImage\'))->render();
    }";s:5:"scope";s:34:"Illuminate\\Support\\ServiceProvider";s:4:"this";N;s:4:"self";s:32:"00000000000013160000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'public.listen',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.listen.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'listen/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:983:"function (\\Illuminate\\Http\\Request $request, string $slug) {
        $show = \\App\\Models\\PodcastShow::query()
            ->active()
            ->withCount(\'episodes\')
            ->where(\'slug\', $slug)
            ->firstOrFail();

        $episodes = \\App\\Models\\PodcastEpisode::query()
            ->where(\'podcast_show_id\', $show->id)
            ->orderByDesc(\'is_featured\')
            ->orderByDesc(\'published_at\')
            ->orderByDesc(\'episode_number\')
            ->paginate(18)
            ->withQueryString();

        $selectedEpisode = null;
        $epId = (int) $request->input(\'episode\', 0);

        if ($epId > 0) {
            $selectedEpisode = \\App\\Models\\PodcastEpisode::query()
                ->where(\'podcast_show_id\', $show->id)
                ->find($epId);
        }

        $selectedEpisode ??= $episodes->first();

        return \\Botble\\Theme\\Facades\\Theme::scope(\'listen-show\', \\compact(\'show\', \'episodes\', \'selectedEpisode\'))->render();
    }";s:5:"scope";s:34:"Illuminate\\Support\\ServiceProvider";s:4:"this";N;s:4:"self";s:32:"00000000000013180000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'public.listen.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.saints' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'saints',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:1173:"function (\\Illuminate\\Http\\Request $request) {
        $query  = $request->input(\'q\', \'\');
        $letter = $request->input(\'letter\', \'\');

        // Category ID 3 = Saints & Feast Days
        $saintsQuery = \\Botble\\Blog\\Models\\Post::query()
            ->with([\'slugable\', \'categories\', \'tags\'])
            ->wherePublished()
            ->whereHas(\'categories\', fn ($q) => $q->where(\'id\', 3))
            ->when($query, fn ($q) => $q->where(\'name\', \'like\', "%{$query}%"))
            ->when($letter, fn ($q) => $q->where(\'name\', \'like\', "{$letter}%"))
            ->orderBy(\'name\');

        $saints = $saintsQuery->paginate(18)->withQueryString();

        // Build available letters for A-Z filter
        $availableLetters = \\Botble\\Blog\\Models\\Post::query()
            ->wherePublished()
            ->whereHas(\'categories\', fn ($q) => $q->where(\'id\', 3))
            ->selectRaw(\'UPPER(LEFT(name, 1)) as letter\')
            ->distinct()
            ->orderBy(\'letter\')
            ->pluck(\'letter\')
            ->toArray();

        return \\Botble\\Theme\\Facades\\Theme::scope(\'saints\', \\compact(\'saints\', \'query\', \'letter\', \'availableLetters\'))->render();
    }";s:5:"scope";s:34:"Illuminate\\Support\\ServiceProvider";s:4:"this";N;s:4:"self";s:32:"000000000000131a0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'public.saints',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.about' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:89:"function () {
        return \\Botble\\Theme\\Facades\\Theme::scope(\'about\')->render();
    }";s:5:"scope";s:34:"Illuminate\\Support\\ServiceProvider";s:4:"this";N;s:4:"self";s:32:"000000000000131c0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'public.about',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.prayer-request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'prayer-request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
        ),
        'uses' => 'App\\Http\\Controllers\\PrayerRequestController@show',
        'controller' => 'App\\Http\\Controllers\\PrayerRequestController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'public.prayer-request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.prayer-request.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'prayer-request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
        ),
        'uses' => 'App\\Http\\Controllers\\PrayerRequestController@store',
        'controller' => 'App\\Http\\Controllers\\PrayerRequestController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'public.prayer-request.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.ajax.posts-by-categoryen.public.ajax.posts-by-category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/ajax/categories/{categoryId}/posts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'web',
          3 => 'core',
          4 => 'localeSessionRedirect',
          5 => 'localizationRedirect',
          6 => 'Botble\\Base\\Http\\Middleware\\RequiresJsonRequestMiddleware',
        ),
        'uses' => 'Theme\\Echo\\Http\\Controllers\\EchoController@ajaxGetPostByCategory',
        'controller' => 'Theme\\Echo\\Http\\Controllers\\EchoController@ajaxGetPostByCategory',
        'as' => 'public.ajax.posts-by-categoryen.public.ajax.posts-by-category',
        'namespace' => NULL,
        'prefix' => 'en/ajax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.ajax.shortcode-blog-postsen.public.ajax.shortcode-blog-posts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/ajax/shortcode-blog-posts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'web',
          3 => 'core',
          4 => 'localeSessionRedirect',
          5 => 'localizationRedirect',
          6 => 'Botble\\Base\\Http\\Middleware\\RequiresJsonRequestMiddleware',
        ),
        'uses' => 'Theme\\Echo\\Http\\Controllers\\EchoController@ajaxShortcodeBlogPosts',
        'controller' => 'Theme\\Echo\\Http\\Controllers\\EchoController@ajaxShortcodeBlogPosts',
        'as' => 'public.ajax.shortcode-blog-postsen.public.ajax.shortcode-blog-posts',
        'namespace' => NULL,
        'prefix' => 'en/ajax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.ajax.shortcode-blog-categoriesen.public.ajax.shortcode-blog-categories' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/ajax/shortcode-blog-categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'web',
          3 => 'core',
          4 => 'localeSessionRedirect',
          5 => 'localizationRedirect',
          6 => 'Botble\\Base\\Http\\Middleware\\RequiresJsonRequestMiddleware',
        ),
        'uses' => 'Theme\\Echo\\Http\\Controllers\\EchoController@ajaxShortcodeBlogCategories',
        'controller' => 'Theme\\Echo\\Http\\Controllers\\EchoController@ajaxShortcodeBlogCategories',
        'as' => 'public.ajax.shortcode-blog-categoriesen.public.ajax.shortcode-blog-categories',
        'namespace' => NULL,
        'prefix' => 'en/ajax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.ajax.widget-blog-postsen.public.ajax.widget-blog-posts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/ajax/widget-blog-posts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'web',
          3 => 'core',
          4 => 'localeSessionRedirect',
          5 => 'localizationRedirect',
          6 => 'Botble\\Base\\Http\\Middleware\\RequiresJsonRequestMiddleware',
        ),
        'uses' => 'Theme\\Echo\\Http\\Controllers\\EchoController@ajaxWidgetBlogPosts',
        'controller' => 'Theme\\Echo\\Http\\Controllers\\EchoController@ajaxWidgetBlogPosts',
        'as' => 'public.ajax.widget-blog-postsen.public.ajax.widget-blog-posts',
        'namespace' => NULL,
        'prefix' => 'en/ajax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.ajax.widget-blog-categoriesen.public.ajax.widget-blog-categories' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/ajax/widget-blog-categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'web',
          3 => 'core',
          4 => 'localeSessionRedirect',
          5 => 'localizationRedirect',
          6 => 'Botble\\Base\\Http\\Middleware\\RequiresJsonRequestMiddleware',
        ),
        'uses' => 'Theme\\Echo\\Http\\Controllers\\EchoController@ajaxWidgetBlogCategories',
        'controller' => 'Theme\\Echo\\Http\\Controllers\\EchoController@ajaxWidgetBlogCategories',
        'as' => 'public.ajax.widget-blog-categoriesen.public.ajax.widget-blog-categories',
        'namespace' => NULL,
        'prefix' => 'en/ajax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.ajax.widget-breaking-newsen.public.ajax.widget-breaking-news' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/ajax/widget-breaking-news',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'web',
          3 => 'core',
          4 => 'localeSessionRedirect',
          5 => 'localizationRedirect',
          6 => 'Botble\\Base\\Http\\Middleware\\RequiresJsonRequestMiddleware',
        ),
        'uses' => 'Theme\\Echo\\Http\\Controllers\\EchoController@ajaxWidgetBreakingNews',
        'controller' => 'Theme\\Echo\\Http\\Controllers\\EchoController@ajaxWidgetBreakingNews',
        'as' => 'public.ajax.widget-breaking-newsen.public.ajax.widget-breaking-news',
        'namespace' => NULL,
        'prefix' => 'en/ajax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.ajax.menu-sidebaren.public.ajax.menu-sidebar' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/ajax/menu-sidebar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'web',
          3 => 'core',
          4 => 'localeSessionRedirect',
          5 => 'localizationRedirect',
          6 => 'Botble\\Base\\Http\\Middleware\\RequiresJsonRequestMiddleware',
        ),
        'uses' => 'Theme\\Echo\\Http\\Controllers\\EchoController@ajaxMenuSidebar',
        'controller' => 'Theme\\Echo\\Http\\Controllers\\EchoController@ajaxMenuSidebar',
        'as' => 'public.ajax.menu-sidebaren.public.ajax.menu-sidebar',
        'namespace' => NULL,
        'prefix' => 'en/ajax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sitemap.settingsen.sitemap.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/admin/settings/sitemap',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'auth',
        ),
        'as' => 'sitemap.settingsen.sitemap.settings',
        'uses' => 'Botble\\Sitemap\\Http\\Controllers\\SitemapSettingController@edit',
        'controller' => 'Botble\\Sitemap\\Http\\Controllers\\SitemapSettingController@edit',
        'namespace' => 'Botble\\Sitemap\\Http\\Controllers',
        'prefix' => 'en/admin/settings/sitemap',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sitemap.settings.updateen.sitemap.settings.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'en/admin/settings/sitemap',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'auth',
        ),
        'as' => 'sitemap.settings.updateen.sitemap.settings.update',
        'uses' => 'Botble\\Sitemap\\Http\\Controllers\\SitemapSettingController@update',
        'permission' => 'sitemap.settings',
        'controller' => 'Botble\\Sitemap\\Http\\Controllers\\SitemapSettingController@update',
        'namespace' => 'Botble\\Sitemap\\Http\\Controllers',
        'prefix' => 'en/admin/settings/sitemap',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sitemap.settings.generate-keyen.sitemap.settings.generate-key' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'en/admin/settings/sitemap/generate-key',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'auth',
        ),
        'as' => 'sitemap.settings.generate-keyen.sitemap.settings.generate-key',
        'uses' => 'Botble\\Sitemap\\Http\\Controllers\\SitemapSettingController@generateKey',
        'permission' => 'sitemap.settings',
        'controller' => 'Botble\\Sitemap\\Http\\Controllers\\SitemapSettingController@generateKey',
        'namespace' => 'Botble\\Sitemap\\Http\\Controllers',
        'prefix' => 'en/admin/settings/sitemap',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sitemap.settings.create-key-fileen.sitemap.settings.create-key-file' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'en/admin/settings/sitemap/create-key-file',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'auth',
        ),
        'as' => 'sitemap.settings.create-key-fileen.sitemap.settings.create-key-file',
        'uses' => 'Botble\\Sitemap\\Http\\Controllers\\SitemapSettingController@createKeyFile',
        'permission' => 'sitemap.settings',
        'controller' => 'Botble\\Sitemap\\Http\\Controllers\\SitemapSettingController@createKeyFile',
        'namespace' => 'Botble\\Sitemap\\Http\\Controllers',
        'prefix' => 'en/admin/settings/sitemap',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sitemap.settings.submit-sitemapen.sitemap.settings.submit-sitemap' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'en/admin/settings/sitemap/submit-sitemap',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'auth',
        ),
        'as' => 'sitemap.settings.submit-sitemapen.sitemap.settings.submit-sitemap',
        'uses' => 'Botble\\Sitemap\\Http\\Controllers\\SitemapSettingController@submitSitemap',
        'permission' => 'sitemap.settings',
        'controller' => 'Botble\\Sitemap\\Http\\Controllers\\SitemapSettingController@submitSitemap',
        'namespace' => 'Botble\\Sitemap\\Http\\Controllers',
        'prefix' => 'en/admin/settings/sitemap',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.indexen.public.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
        ),
        'uses' => 'Botble\\Theme\\Http\\Controllers\\PublicController@getIndex',
        'controller' => 'Botble\\Theme\\Http\\Controllers\\PublicController@getIndex',
        'namespace' => NULL,
        'prefix' => '/en',
        'where' => 
        array (
        ),
        'as' => 'public.indexen.public.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.sitemapen.public.sitemap' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/sitemap.xml',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
        ),
        'uses' => 'Botble\\Theme\\Http\\Controllers\\PublicController@getSiteMap',
        'controller' => 'Botble\\Theme\\Http\\Controllers\\PublicController@getSiteMap',
        'namespace' => NULL,
        'prefix' => '/en',
        'where' => 
        array (
        ),
        'as' => 'public.sitemapen.public.sitemap',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.sitemap.indexen.public.sitemap.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/{key}.{extension}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
        ),
        'uses' => 'Botble\\Theme\\Http\\Controllers\\PublicController@getSiteMapIndex',
        'controller' => 'Botble\\Theme\\Http\\Controllers\\PublicController@getSiteMapIndex',
        'namespace' => NULL,
        'prefix' => '/en',
        'where' => 
        array (
        ),
        'as' => 'public.sitemap.indexen.public.sitemap.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'extension' => 'xml|xml-mobile|html|txt|ror-rss|ror-rdf|google-news',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.singleen.public.single' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/{slug?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
        ),
        'uses' => 'Botble\\Theme\\Http\\Controllers\\PublicController@getView',
        'controller' => 'Botble\\Theme\\Http\\Controllers\\PublicController@getView',
        'namespace' => NULL,
        'prefix' => '/en',
        'where' => 
        array (
        ),
        'as' => 'public.singleen.public.single',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cJV3UF3FpvZ2kDWJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'en/{prefix}/{slug?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
        ),
        'uses' => 'Botble\\Theme\\Http\\Controllers\\PublicController@getViewWithPrefix',
        'controller' => 'Botble\\Theme\\Http\\Controllers\\PublicController@getViewWithPrefix',
        'namespace' => NULL,
        'prefix' => '/en',
        'where' => 
        array (
        ),
        'as' => 'generated::cJV3UF3FpvZ2kDWJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'prefix' => 'blog|tag|galleries|author',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.ads-click' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ads-click/{key}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
        ),
        'as' => 'public.ads-click',
        'uses' => 'Botble\\Ads\\Http\\Controllers\\PublicController@getAdsClick',
        'controller' => 'Botble\\Ads\\Http\\Controllers\\PublicController@getAdsClick',
        'namespace' => 'Botble\\Ads\\Http\\Controllers',
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.ads-click.alternative' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ac-{randomHash}/{adsKey}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
        ),
        'as' => 'public.ads-click.alternative',
        'uses' => 'Botble\\Ads\\Http\\Controllers\\PublicController@getAdsClickAlternative',
        'controller' => 'Botble\\Ads\\Http\\Controllers\\PublicController@getAdsClickAlternative',
        'namespace' => 'Botble\\Ads\\Http\\Controllers',
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.ads-click.image' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ac-{randomHash}/{adsKey}/{size}/{hashName}.jpg',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
        ),
        'as' => 'public.ads-click.image',
        'uses' => 'Botble\\Ads\\Http\\Controllers\\PublicController@getAdsImage',
        'controller' => 'Botble\\Ads\\Http\\Controllers\\PublicController@getAdsImage',
        'namespace' => 'Botble\\Ads\\Http\\Controllers',
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.ajax.announcements' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ajax/announcements',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'Botble\\Base\\Http\\Middleware\\RequiresJsonRequestMiddleware',
        ),
        'uses' => 'ArchiElite\\Announcement\\Http\\Controllers\\PublicController@ajaxGetAnnouncements',
        'controller' => 'ArchiElite\\Announcement\\Http\\Controllers\\PublicController@ajaxGetAnnouncements',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'public.ajax.announcements',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
        ),
        'as' => 'public.search',
        'uses' => 'Botble\\Blog\\Http\\Controllers\\PublicController@getSearch',
        'controller' => 'Botble\\Blog\\Http\\Controllers\\PublicController@getSearch',
        'namespace' => 'Botble\\Blog\\Http\\Controllers',
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.send.contact' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'contact/send',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
        ),
        'as' => 'public.send.contact',
        'uses' => 'Botble\\Contact\\Http\\Controllers\\PublicController@postSendContact',
        'controller' => 'Botble\\Contact\\Http\\Controllers\\PublicController@postSendContact',
        'namespace' => 'Botble\\Contact\\Http\\Controllers',
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fob-comment.public.comments.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fob-comment/comments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
        ),
        'uses' => 'FriendsOfBotble\\Comment\\Http\\Controllers\\Fronts\\CommentController@index',
        'controller' => 'FriendsOfBotble\\Comment\\Http\\Controllers\\Fronts\\CommentController@index',
        'as' => 'fob-comment.public.comments.index',
        'namespace' => NULL,
        'prefix' => '/fob-comment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fob-comment.public.comments.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'fob-comment/comments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
        ),
        'uses' => 'FriendsOfBotble\\Comment\\Http\\Controllers\\Fronts\\CommentController@store',
        'controller' => 'FriendsOfBotble\\Comment\\Http\\Controllers\\Fronts\\CommentController@store',
        'as' => 'fob-comment.public.comments.store',
        'namespace' => NULL,
        'prefix' => '/fob-comment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fob-comment.public.comments.reply' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'fob-comment/comments/{comment}/reply',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
        ),
        'uses' => 'FriendsOfBotble\\Comment\\Http\\Controllers\\Fronts\\ReplyCommentController@__invoke',
        'controller' => 'FriendsOfBotble\\Comment\\Http\\Controllers\\Fronts\\ReplyCommentController',
        'as' => 'fob-comment.public.comments.reply',
        'namespace' => NULL,
        'prefix' => '/fob-comment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.galleries' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'galleries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
        ),
        'as' => 'public.galleries',
        'uses' => 'Botble\\Gallery\\Http\\Controllers\\PublicController@getGalleries',
        'controller' => 'Botble\\Gallery\\Http\\Controllers\\PublicController@getGalleries',
        'namespace' => 'Botble\\Gallery\\Http\\Controllers',
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'author.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'author/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
        ),
        'uses' => 'Botble\\Member\\Http\\Controllers\\PublicController@getAuthor',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'controller' => 'Botble\\Member\\Http\\Controllers\\PublicController@getAuthor',
        'as' => 'author.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'member.guest',
        ),
        'uses' => 'Botble\\Member\\Http\\Controllers\\LoginController@showLoginForm',
        'controller' => 'Botble\\Member\\Http\\Controllers\\LoginController@showLoginForm',
        'as' => 'public.member.login',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.login.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'member.guest',
        ),
        'uses' => 'Botble\\Member\\Http\\Controllers\\LoginController@login',
        'controller' => 'Botble\\Member\\Http\\Controllers\\LoginController@login',
        'as' => 'public.member.login.post',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'member.guest',
        ),
        'uses' => 'Botble\\Member\\Http\\Controllers\\RegisterController@showRegistrationForm',
        'controller' => 'Botble\\Member\\Http\\Controllers\\RegisterController@showRegistrationForm',
        'as' => 'public.member.register',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.register.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'member.guest',
        ),
        'uses' => 'Botble\\Member\\Http\\Controllers\\RegisterController@register',
        'controller' => 'Botble\\Member\\Http\\Controllers\\RegisterController@register',
        'as' => 'public.member.register.post',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'member.guest',
        ),
        'uses' => 'Botble\\Member\\Http\\Controllers\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'Botble\\Member\\Http\\Controllers\\ForgotPasswordController@showLinkRequestForm',
        'as' => 'public.member.password.request',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'member.guest',
        ),
        'uses' => 'Botble\\Member\\Http\\Controllers\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'Botble\\Member\\Http\\Controllers\\ForgotPasswordController@sendResetLinkEmail',
        'as' => 'public.member.password.email',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'member.guest',
        ),
        'uses' => 'Botble\\Member\\Http\\Controllers\\ResetPasswordController@reset',
        'controller' => 'Botble\\Member\\Http\\Controllers\\ResetPasswordController@reset',
        'as' => 'public.member.password.update',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'member.guest',
        ),
        'uses' => 'Botble\\Member\\Http\\Controllers\\ResetPasswordController@showResetForm',
        'controller' => 'Botble\\Member\\Http\\Controllers\\ResetPasswordController@showResetForm',
        'as' => 'public.member.password.reset',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.resend_confirmation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register/confirm/resend',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'member',
        ),
        'uses' => 'Botble\\Member\\Http\\Controllers\\RegisterController@resendConfirmation',
        'controller' => 'Botble\\Member\\Http\\Controllers\\RegisterController@resendConfirmation',
        'as' => 'public.member.resend_confirmation',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register/confirm/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'member',
        ),
        'uses' => 'Botble\\Member\\Http\\Controllers\\RegisterController@confirm',
        'controller' => 'Botble\\Member\\Http\\Controllers\\RegisterController@confirm',
        'as' => 'public.member.confirm',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'account/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'member',
        ),
        'uses' => 'Botble\\Member\\Http\\Controllers\\LoginController@logout',
        'controller' => 'Botble\\Member\\Http\\Controllers\\LoginController@logout',
        'as' => 'public.member.logout',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => '/account',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'member',
        ),
        'as' => 'public.member.dashboard',
        'uses' => 'Botble\\Member\\Http\\Controllers\\PublicController@getDashboard',
        'controller' => 'Botble\\Member\\Http\\Controllers\\PublicController@getDashboard',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => '/account',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'member',
        ),
        'as' => 'public.member.settings',
        'uses' => 'Botble\\Member\\Http\\Controllers\\PublicController@getSettings',
        'controller' => 'Botble\\Member\\Http\\Controllers\\PublicController@getSettings',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => '/account',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.post.settings' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'account/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'member',
        ),
        'as' => 'public.member.post.settings',
        'uses' => 'Botble\\Member\\Http\\Controllers\\PublicController@postSettings',
        'controller' => 'Botble\\Member\\Http\\Controllers\\PublicController@postSettings',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => '/account',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.post.security' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'account/security',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'member',
        ),
        'as' => 'public.member.post.security',
        'uses' => 'Botble\\Member\\Http\\Controllers\\PublicController@postSecurity',
        'controller' => 'Botble\\Member\\Http\\Controllers\\PublicController@postSecurity',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => '/account',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.avatar' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'account/avatar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'member',
        ),
        'as' => 'public.member.avatar',
        'uses' => 'Botble\\Member\\Http\\Controllers\\PublicController@postAvatar',
        'controller' => 'Botble\\Member\\Http\\Controllers\\PublicController@postAvatar',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => '/account',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.activity-logs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ajax/members/activity-logs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'member',
        ),
        'as' => 'public.member.activity-logs',
        'uses' => 'Botble\\Member\\Http\\Controllers\\PublicController@getActivityLogs',
        'controller' => 'Botble\\Member\\Http\\Controllers\\PublicController@getActivityLogs',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => '/ajax/members',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.upload' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ajax/members/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'member',
        ),
        'as' => 'public.member.upload',
        'uses' => 'Botble\\Member\\Http\\Controllers\\PublicController@postUpload',
        'controller' => 'Botble\\Member\\Http\\Controllers\\PublicController@postUpload',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => '/ajax/members',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.upload-from-editor' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ajax/members/upload-from-editor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'member',
        ),
        'as' => 'public.member.upload-from-editor',
        'uses' => 'Botble\\Member\\Http\\Controllers\\PublicController@postUploadFromEditor',
        'controller' => 'Botble\\Member\\Http\\Controllers\\PublicController@postUploadFromEditor',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => '/ajax/members',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.posts.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'account/posts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'member',
        ),
        'as' => 'public.member.posts.index',
        'uses' => 'Botble\\Member\\Http\\Controllers\\PostController@index',
        'controller' => 'Botble\\Member\\Http\\Controllers\\PostController@index',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => '/account/posts',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.posts.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/posts/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'member',
        ),
        'as' => 'public.member.posts.create',
        'uses' => 'Botble\\Member\\Http\\Controllers\\PostController@create',
        'controller' => 'Botble\\Member\\Http\\Controllers\\PostController@create',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => '/account/posts',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.posts.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'account/posts/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'member',
        ),
        'as' => 'public.member.posts.store',
        'uses' => 'Botble\\Member\\Http\\Controllers\\PostController@store',
        'controller' => 'Botble\\Member\\Http\\Controllers\\PostController@store',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => '/account/posts',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.posts.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/posts/edit/{post}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'member',
        ),
        'as' => 'public.member.posts.edit',
        'uses' => 'Botble\\Member\\Http\\Controllers\\PostController@edit',
        'controller' => 'Botble\\Member\\Http\\Controllers\\PostController@edit',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => '/account/posts',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'post' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.posts.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'account/posts/edit/{post}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'member',
        ),
        'as' => 'public.member.posts.update',
        'uses' => 'Botble\\Member\\Http\\Controllers\\PostController@update',
        'controller' => 'Botble\\Member\\Http\\Controllers\\PostController@update',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => '/account/posts',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'post' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.posts.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'account/posts/{post}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'member',
        ),
        'as' => 'public.member.posts.destroy',
        'uses' => 'Botble\\Member\\Http\\Controllers\\PostController@destroy',
        'controller' => 'Botble\\Member\\Http\\Controllers\\PostController@destroy',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => '/account/posts',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'post' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.member.tags.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ajax/members/tags/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'member',
        ),
        'as' => 'public.member.tags.all',
        'uses' => 'Botble\\Member\\Http\\Controllers\\PostController@getAllTags',
        'controller' => 'Botble\\Member\\Http\\Controllers\\PostController@getAllTags',
        'namespace' => 'Botble\\Member\\Http\\Controllers',
        'prefix' => '/ajax/members',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.newsletter.subscribe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'newsletter/subscribe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
        ),
        'as' => 'public.newsletter.subscribe',
        'uses' => 'Botble\\Newsletter\\Http\\Controllers\\PublicController@postSubscribe',
        'controller' => 'Botble\\Newsletter\\Http\\Controllers\\PublicController@postSubscribe',
        'namespace' => 'Botble\\Newsletter\\Http\\Controllers',
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.newsletter.unsubscribe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'newsletter/unsubscribe/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
        ),
        'as' => 'public.newsletter.unsubscribe',
        'uses' => 'Botble\\Newsletter\\Http\\Controllers\\PublicController@getUnsubscribe',
        'controller' => 'Botble\\Newsletter\\Http\\Controllers\\PublicController@getUnsubscribe',
        'namespace' => 'Botble\\Newsletter\\Http\\Controllers',
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.ajax.newsletter-popup' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ajax/newsletter/popup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'Botble\\Base\\Http\\Middleware\\RequiresJsonRequestMiddleware',
        ),
        'uses' => 'Botble\\Newsletter\\Http\\Controllers\\PublicController@ajaxLoadPopup',
        'controller' => 'Botble\\Newsletter\\Http\\Controllers\\PublicController@ajaxLoadPopup',
        'namespace' => 'Botble\\Newsletter\\Http\\Controllers',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'public.ajax.newsletter-popup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'feeds.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'feed/{name}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
        ),
        'uses' => 'Botble\\RssFeed\\Http\\Controllers\\RssFeedController@show',
        'controller' => 'Botble\\RssFeed\\Http\\Controllers\\RssFeedController@show',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'feeds.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.community.feed' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'feed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
        ),
        'uses' => 'Acm\\Community\\Http\\Controllers\\Front\\FeedController@index',
        'controller' => 'Acm\\Community\\Http\\Controllers\\Front\\FeedController@index',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'public.community.feed',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.community.feed.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ajax/feed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
        ),
        'uses' => 'Acm\\Community\\Http\\Controllers\\Front\\FeedController@store',
        'controller' => 'Acm\\Community\\Http\\Controllers\\Front\\FeedController@store',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'public.community.feed.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.community.feed.like' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ajax/feed/{post}/like',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
        ),
        'uses' => 'Acm\\Community\\Http\\Controllers\\Front\\FeedController@like',
        'controller' => 'Acm\\Community\\Http\\Controllers\\Front\\FeedController@like',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'public.community.feed.like',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.community.feed.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'ajax/feed/{post}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
        ),
        'uses' => 'Acm\\Community\\Http\\Controllers\\Front\\FeedController@destroy',
        'controller' => 'Acm\\Community\\Http\\Controllers\\Front\\FeedController@destroy',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'public.community.feed.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.community.groups' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'groups',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
        ),
        'uses' => 'Acm\\Community\\Http\\Controllers\\Front\\GroupController@index',
        'controller' => 'Acm\\Community\\Http\\Controllers\\Front\\GroupController@index',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'public.community.groups',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.community.groups.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ajax/groups',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
        ),
        'uses' => 'Acm\\Community\\Http\\Controllers\\Front\\GroupController@store',
        'controller' => 'Acm\\Community\\Http\\Controllers\\Front\\GroupController@store',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'public.community.groups.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.community.groups.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'groups/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
        ),
        'uses' => 'Acm\\Community\\Http\\Controllers\\Front\\GroupController@show',
        'controller' => 'Acm\\Community\\Http\\Controllers\\Front\\GroupController@show',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'public.community.groups.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.community.groups.join' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ajax/groups/{slug}/join',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
        ),
        'uses' => 'Acm\\Community\\Http\\Controllers\\Front\\GroupController@join',
        'controller' => 'Acm\\Community\\Http\\Controllers\\Front\\GroupController@join',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'public.community.groups.join',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.community.groups.leave' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ajax/groups/{slug}/leave',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
        ),
        'uses' => 'Acm\\Community\\Http\\Controllers\\Front\\GroupController@leave',
        'controller' => 'Acm\\Community\\Http\\Controllers\\Front\\GroupController@leave',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'public.community.groups.leave',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.community.forums' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'forums',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
        ),
        'uses' => 'Acm\\Community\\Http\\Controllers\\Front\\ForumController@index',
        'controller' => 'Acm\\Community\\Http\\Controllers\\Front\\ForumController@index',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'public.community.forums',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.community.forum.category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'forums/category/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
        ),
        'uses' => 'Acm\\Community\\Http\\Controllers\\Front\\ForumController@showCategory',
        'controller' => 'Acm\\Community\\Http\\Controllers\\Front\\ForumController@showCategory',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'public.community.forum.category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.community.forum.topic.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'forums/category/{slug}/topic',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
        ),
        'uses' => 'Acm\\Community\\Http\\Controllers\\Front\\ForumController@storeTopic',
        'controller' => 'Acm\\Community\\Http\\Controllers\\Front\\ForumController@storeTopic',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'public.community.forum.topic.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.community.forum.topic' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'forums/topic/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
        ),
        'uses' => 'Acm\\Community\\Http\\Controllers\\Front\\ForumController@showTopic',
        'controller' => 'Acm\\Community\\Http\\Controllers\\Front\\ForumController@showTopic',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'public.community.forum.topic',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.community.forum.reply.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'forums/topic/{slug}/reply',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
        ),
        'uses' => 'Acm\\Community\\Http\\Controllers\\Front\\ForumController@storeReply',
        'controller' => 'Acm\\Community\\Http\\Controllers\\Front\\ForumController@storeReply',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'public.community.forum.reply.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.ajax.render-ui-block' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ajax/render-ui-blocks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'throttle:60,1',
          5 => 'Botble\\Base\\Http\\Middleware\\RequiresJsonRequestMiddleware',
          6 => 'Botble\\Shortcode\\Http\\Middleware\\ShortcodePerformanceMiddleware',
        ),
        'uses' => 'Botble\\Shortcode\\Http\\Controllers\\ShortcodeController@ajaxRenderUiBlock',
        'controller' => 'Botble\\Shortcode\\Http\\Controllers\\ShortcodeController@ajaxRenderUiBlock',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'public.ajax.render-ui-block',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.ajax.posts-by-category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ajax/categories/{categoryId}/posts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'web',
          3 => 'core',
          4 => 'localeSessionRedirect',
          5 => 'localizationRedirect',
          6 => 'Botble\\Base\\Http\\Middleware\\RequiresJsonRequestMiddleware',
        ),
        'uses' => 'Theme\\Echo\\Http\\Controllers\\EchoController@ajaxGetPostByCategory',
        'controller' => 'Theme\\Echo\\Http\\Controllers\\EchoController@ajaxGetPostByCategory',
        'as' => 'public.ajax.posts-by-category',
        'namespace' => NULL,
        'prefix' => '/ajax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.ajax.shortcode-blog-posts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ajax/shortcode-blog-posts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'web',
          3 => 'core',
          4 => 'localeSessionRedirect',
          5 => 'localizationRedirect',
          6 => 'Botble\\Base\\Http\\Middleware\\RequiresJsonRequestMiddleware',
        ),
        'uses' => 'Theme\\Echo\\Http\\Controllers\\EchoController@ajaxShortcodeBlogPosts',
        'controller' => 'Theme\\Echo\\Http\\Controllers\\EchoController@ajaxShortcodeBlogPosts',
        'as' => 'public.ajax.shortcode-blog-posts',
        'namespace' => NULL,
        'prefix' => '/ajax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.ajax.shortcode-blog-categories' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ajax/shortcode-blog-categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'web',
          3 => 'core',
          4 => 'localeSessionRedirect',
          5 => 'localizationRedirect',
          6 => 'Botble\\Base\\Http\\Middleware\\RequiresJsonRequestMiddleware',
        ),
        'uses' => 'Theme\\Echo\\Http\\Controllers\\EchoController@ajaxShortcodeBlogCategories',
        'controller' => 'Theme\\Echo\\Http\\Controllers\\EchoController@ajaxShortcodeBlogCategories',
        'as' => 'public.ajax.shortcode-blog-categories',
        'namespace' => NULL,
        'prefix' => '/ajax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.ajax.widget-blog-posts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ajax/widget-blog-posts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'web',
          3 => 'core',
          4 => 'localeSessionRedirect',
          5 => 'localizationRedirect',
          6 => 'Botble\\Base\\Http\\Middleware\\RequiresJsonRequestMiddleware',
        ),
        'uses' => 'Theme\\Echo\\Http\\Controllers\\EchoController@ajaxWidgetBlogPosts',
        'controller' => 'Theme\\Echo\\Http\\Controllers\\EchoController@ajaxWidgetBlogPosts',
        'as' => 'public.ajax.widget-blog-posts',
        'namespace' => NULL,
        'prefix' => '/ajax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.ajax.widget-blog-categories' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ajax/widget-blog-categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'web',
          3 => 'core',
          4 => 'localeSessionRedirect',
          5 => 'localizationRedirect',
          6 => 'Botble\\Base\\Http\\Middleware\\RequiresJsonRequestMiddleware',
        ),
        'uses' => 'Theme\\Echo\\Http\\Controllers\\EchoController@ajaxWidgetBlogCategories',
        'controller' => 'Theme\\Echo\\Http\\Controllers\\EchoController@ajaxWidgetBlogCategories',
        'as' => 'public.ajax.widget-blog-categories',
        'namespace' => NULL,
        'prefix' => '/ajax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.ajax.widget-breaking-news' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ajax/widget-breaking-news',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'web',
          3 => 'core',
          4 => 'localeSessionRedirect',
          5 => 'localizationRedirect',
          6 => 'Botble\\Base\\Http\\Middleware\\RequiresJsonRequestMiddleware',
        ),
        'uses' => 'Theme\\Echo\\Http\\Controllers\\EchoController@ajaxWidgetBreakingNews',
        'controller' => 'Theme\\Echo\\Http\\Controllers\\EchoController@ajaxWidgetBreakingNews',
        'as' => 'public.ajax.widget-breaking-news',
        'namespace' => NULL,
        'prefix' => '/ajax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.ajax.menu-sidebar' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ajax/menu-sidebar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'web',
          3 => 'core',
          4 => 'localeSessionRedirect',
          5 => 'localizationRedirect',
          6 => 'Botble\\Base\\Http\\Middleware\\RequiresJsonRequestMiddleware',
        ),
        'uses' => 'Theme\\Echo\\Http\\Controllers\\EchoController@ajaxMenuSidebar',
        'controller' => 'Theme\\Echo\\Http\\Controllers\\EchoController@ajaxMenuSidebar',
        'as' => 'public.ajax.menu-sidebar',
        'namespace' => NULL,
        'prefix' => '/ajax',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sitemap.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/sitemap',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'auth',
        ),
        'as' => 'sitemap.settings',
        'uses' => 'Botble\\Sitemap\\Http\\Controllers\\SitemapSettingController@edit',
        'controller' => 'Botble\\Sitemap\\Http\\Controllers\\SitemapSettingController@edit',
        'namespace' => 'Botble\\Sitemap\\Http\\Controllers',
        'prefix' => 'admin/settings/sitemap',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sitemap.settings.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/sitemap',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'auth',
        ),
        'as' => 'sitemap.settings.update',
        'uses' => 'Botble\\Sitemap\\Http\\Controllers\\SitemapSettingController@update',
        'permission' => 'sitemap.settings',
        'controller' => 'Botble\\Sitemap\\Http\\Controllers\\SitemapSettingController@update',
        'namespace' => 'Botble\\Sitemap\\Http\\Controllers',
        'prefix' => 'admin/settings/sitemap',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sitemap.settings.generate-key' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/sitemap/generate-key',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'auth',
        ),
        'as' => 'sitemap.settings.generate-key',
        'uses' => 'Botble\\Sitemap\\Http\\Controllers\\SitemapSettingController@generateKey',
        'permission' => 'sitemap.settings',
        'controller' => 'Botble\\Sitemap\\Http\\Controllers\\SitemapSettingController@generateKey',
        'namespace' => 'Botble\\Sitemap\\Http\\Controllers',
        'prefix' => 'admin/settings/sitemap',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sitemap.settings.create-key-file' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/sitemap/create-key-file',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'auth',
        ),
        'as' => 'sitemap.settings.create-key-file',
        'uses' => 'Botble\\Sitemap\\Http\\Controllers\\SitemapSettingController@createKeyFile',
        'permission' => 'sitemap.settings',
        'controller' => 'Botble\\Sitemap\\Http\\Controllers\\SitemapSettingController@createKeyFile',
        'namespace' => 'Botble\\Sitemap\\Http\\Controllers',
        'prefix' => 'admin/settings/sitemap',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sitemap.settings.submit-sitemap' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/sitemap/submit-sitemap',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
          4 => 'web',
          5 => 'core',
          6 => 'auth',
        ),
        'as' => 'sitemap.settings.submit-sitemap',
        'uses' => 'Botble\\Sitemap\\Http\\Controllers\\SitemapSettingController@submitSitemap',
        'permission' => 'sitemap.settings',
        'controller' => 'Botble\\Sitemap\\Http\\Controllers\\SitemapSettingController@submitSitemap',
        'namespace' => 'Botble\\Sitemap\\Http\\Controllers',
        'prefix' => 'admin/settings/sitemap',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
        ),
        'uses' => 'Botble\\Theme\\Http\\Controllers\\PublicController@getIndex',
        'controller' => 'Botble\\Theme\\Http\\Controllers\\PublicController@getIndex',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'public.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.sitemap' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sitemap.xml',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
        ),
        'uses' => 'Botble\\Theme\\Http\\Controllers\\PublicController@getSiteMap',
        'controller' => 'Botble\\Theme\\Http\\Controllers\\PublicController@getSiteMap',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'public.sitemap',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.sitemap.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{key}.{extension}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
        ),
        'uses' => 'Botble\\Theme\\Http\\Controllers\\PublicController@getSiteMapIndex',
        'controller' => 'Botble\\Theme\\Http\\Controllers\\PublicController@getSiteMapIndex',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'public.sitemap.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'extension' => 'xml|xml-mobile|html|txt|ror-rss|ror-rdf|google-news',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public.single' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{slug?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
        ),
        'uses' => 'Botble\\Theme\\Http\\Controllers\\PublicController@getView',
        'controller' => 'Botble\\Theme\\Http\\Controllers\\PublicController@getView',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'public.single',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::S6ueccbVH3C4CEWy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{prefix}/{slug?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'core',
          2 => 'localeSessionRedirect',
          3 => 'localizationRedirect',
        ),
        'uses' => 'Botble\\Theme\\Http\\Controllers\\PublicController@getViewWithPrefix',
        'controller' => 'Botble\\Theme\\Http\\Controllers\\PublicController@getViewWithPrefix',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'generated::S6ueccbVH3C4CEWy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'prefix' => 'blog|tag|galleries|author',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);

Language::setSerializedTranslatedRoutes('YTowOnt9');
