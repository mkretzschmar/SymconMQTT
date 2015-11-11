<?
    // Klassendefinition
    class MQTTClient extends IPSModule {
        /**
        * Die folgenden Funktionen stehen automatisch zur Verfügung, wenn das Modul über die "Module Control" eingefügt wurden.
        * Die Funktionen werden, mit dem selbst eingerichteten Prefix, in PHP und JSON-RPC wiefolgt zur Verfügung gestellt:
        *
        * MQT_Publish($id);
        *
        */
        public function Publish() {
            echo $this->InstanceID;
        }
    }
?>