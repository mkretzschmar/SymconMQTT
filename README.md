MQTT Module for IP-Symcon
================

This module provides an MQTT Publisher as I/O Instance.
The MQTT Client Implementation based on phpMQTT from bluerhinos (https://github.com/bluerhinos/phpMQTT).

Usage:

<?

...
MQTT_Publish($id, $topic, $content, $qos, $retained);

?>
