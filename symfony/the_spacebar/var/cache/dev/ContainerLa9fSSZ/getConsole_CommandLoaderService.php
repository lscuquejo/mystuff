<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'console.command_loader' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/console/CommandLoader/CommandLoaderInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/console/CommandLoader/ContainerCommandLoader.php';

return $this->services['console.command_loader'] = new \Symfony\Component\Console\CommandLoader\ContainerCommandLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
    'SensioLabs\\Security\\Command\\SecurityCheckerCommand' => array('privates', 'SensioLabs\\Security\\Command\\SecurityCheckerCommand', 'getSecurityCheckerCommandService.php', true),
    'console.command.about' => array('privates', 'console.command.about', 'getConsole_Command_AboutService.php', true),
    'console.command.assets_install' => array('privates', 'console.command.assets_install', 'getConsole_Command_AssetsInstallService.php', true),
    'console.command.cache_clear' => array('privates', 'console.command.cache_clear', 'getConsole_Command_CacheClearService.php', true),
    'console.command.cache_pool_clear' => array('privates', 'console.command.cache_pool_clear', 'getConsole_Command_CachePoolClearService.php', true),
    'console.command.cache_pool_delete' => array('privates', 'console.command.cache_pool_delete', 'getConsole_Command_CachePoolDeleteService.php', true),
    'console.command.cache_pool_prune' => array('privates', 'console.command.cache_pool_prune', 'getConsole_Command_CachePoolPruneService.php', true),
    'console.command.cache_warmup' => array('privates', 'console.command.cache_warmup', 'getConsole_Command_CacheWarmupService.php', true),
    'console.command.config_debug' => array('privates', 'console.command.config_debug', 'getConsole_Command_ConfigDebugService.php', true),
    'console.command.config_dump_reference' => array('privates', 'console.command.config_dump_reference', 'getConsole_Command_ConfigDumpReferenceService.php', true),
    'console.command.container_debug' => array('privates', 'console.command.container_debug', 'getConsole_Command_ContainerDebugService.php', true),
    'console.command.debug_autowiring' => array('privates', 'console.command.debug_autowiring', 'getConsole_Command_DebugAutowiringService.php', true),
    'console.command.event_dispatcher_debug' => array('privates', 'console.command.event_dispatcher_debug', 'getConsole_Command_EventDispatcherDebugService.php', true),
    'console.command.router_debug' => array('privates', 'console.command.router_debug', 'getConsole_Command_RouterDebugService.php', true),
    'console.command.router_match' => array('privates', 'console.command.router_match', 'getConsole_Command_RouterMatchService.php', true),
    'console.command.yaml_lint' => array('privates', 'console.command.yaml_lint', 'getConsole_Command_YamlLintService.php', true),
    'twig.command.debug' => array('privates', 'twig.command.debug', 'getTwig_Command_DebugService.php', true),
    'twig.command.lint' => array('privates', 'twig.command.lint', 'getTwig_Command_LintService.php', true),
    'var_dumper.command.server_dump' => array('privates', 'var_dumper.command.server_dump', 'getVarDumper_Command_ServerDumpService.php', true),
    'web_server.command.server_log' => array('privates', 'web_server.command.server_log', 'getWebServer_Command_ServerLogService.php', true),
    'web_server.command.server_run' => array('privates', 'web_server.command.server_run', 'getWebServer_Command_ServerRunService.php', true),
    'web_server.command.server_start' => array('privates', 'web_server.command.server_start', 'getWebServer_Command_ServerStartService.php', true),
    'web_server.command.server_status' => array('privates', 'web_server.command.server_status', 'getWebServer_Command_ServerStatusService.php', true),
    'web_server.command.server_stop' => array('privates', 'web_server.command.server_stop', 'getWebServer_Command_ServerStopService.php', true),
)), array('about' => 'console.command.about', 'assets:install' => 'console.command.assets_install', 'cache:clear' => 'console.command.cache_clear', 'cache:pool:clear' => 'console.command.cache_pool_clear', 'cache:pool:prune' => 'console.command.cache_pool_prune', 'cache:pool:delete' => 'console.command.cache_pool_delete', 'cache:warmup' => 'console.command.cache_warmup', 'debug:config' => 'console.command.config_debug', 'config:dump-reference' => 'console.command.config_dump_reference', 'debug:container' => 'console.command.container_debug', 'debug:autowiring' => 'console.command.debug_autowiring', 'debug:event-dispatcher' => 'console.command.event_dispatcher_debug', 'debug:router' => 'console.command.router_debug', 'router:match' => 'console.command.router_match', 'lint:yaml' => 'console.command.yaml_lint', 'server:run' => 'web_server.command.server_run', 'server:start' => 'web_server.command.server_start', 'server:stop' => 'web_server.command.server_stop', 'server:status' => 'web_server.command.server_status', 'server:log' => 'web_server.command.server_log', 'debug:twig' => 'twig.command.debug', 'lint:twig' => 'twig.command.lint', 'server:dump' => 'var_dumper.command.server_dump', 'security:check' => 'SensioLabs\\Security\\Command\\SecurityCheckerCommand'));
