# icinga_plugins
Icinga check plugins and event handlers

eh_restart_service

Event handler script that checks for service status on debian base system and then restarts the service in case an exit code of the status check was between 1 and 3. The handler also logs its operations. See the script for more documentation.
