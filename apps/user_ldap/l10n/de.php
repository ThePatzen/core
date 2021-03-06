<?php $TRANSLATIONS = array(
"Failed to clear the mappings." => "Löschen der Zuordnung fehlgeschlagen.",
"Failed to delete the server configuration" => "Löschen der Serverkonfiguration fehlgeschlagen",
"The configuration is valid and the connection could be established!" => "Die Konfiguration ist gültig und die Verbindung konnte hergestellt werden!",
"The configuration is valid, but the Bind failed. Please check the server settings and credentials." => "Die Konfiguration ist gültig aber die Verbindung ist fehlgeschlagen. Bitte überprüfe die Servereinstellungen und Anmeldeinformationen.",
"The configuration is invalid. Please look in the ownCloud log for further details." => "Die Konfiguration ist ungültig, sieh für weitere Details bitte im ownCloud Log nach",
"Deletion failed" => "Löschen fehlgeschlagen",
"Take over settings from recent server configuration?" => "Einstellungen von letzter Konfiguration übernehmen?",
"Keep settings?" => "Einstellungen beibehalten?",
"Cannot add server configuration" => "Das Hinzufügen der Serverkonfiguration schlug fehl",
"mappings cleared" => "Zuordnungen gelöscht",
"Success" => "Erfolgreich",
"Error" => "Fehler",
"Connection test succeeded" => "Verbindungstest erfolgreich",
"Connection test failed" => "Verbindungstest fehlgeschlagen",
"Do you really want to delete the current Server Configuration?" => "Möchtest Du die aktuelle Serverkonfiguration wirklich löschen?",
"Confirm Deletion" => "Löschung bestätigen",
"<b>Warning:</b> Apps user_ldap and user_webdavauth are incompatible. You may experience unexpected behaviour. Please ask your system administrator to disable one of them." => "<b>Warnung:</b> Die Anwendungen user_ldap und user_webdavauth sind inkompatibel. Es kann demzufolge zu unerwartetem Verhalten kommen. Bitte Deinen Systemadministator eine der beiden Anwendungen zu deaktivieren.",
"<b>Warning:</b> The PHP LDAP module is not installed, the backend will not work. Please ask your system administrator to install it." => "<b>Warnung:</b> Da das PHP-Modul für LDAP nicht installiert ist, wird das Backend nicht funktionieren. Bitte Deinen Systemadministrator das Modul zu installieren.",
"Server configuration" => "Serverkonfiguration",
"Add Server Configuration" => "Serverkonfiguration hinzufügen",
"Host" => "Host",
"You can omit the protocol, except you require SSL. Then start with ldaps://" => "Du kannst das Protokoll auslassen, außer wenn Du SSL benötigst. Beginne dann mit ldaps://",
"Base DN" => "Basis-DN",
"One Base DN per line" => "Ein Basis-DN pro Zeile",
"You can specify Base DN for users and groups in the Advanced tab" => "Du kannst Basis-DN für Benutzer und Gruppen in dem \"Erweitert\"-Reiter konfigurieren",
"User DN" => "Benutzer-DN",
"The DN of the client user with which the bind shall be done, e.g. uid=agent,dc=example,dc=com. For anonymous access, leave DN and Password empty." => "Der DN des Benutzers für LDAP-Bind, z.B.: uid=agent,dc=example,dc=com. Für anonymen Zugriff lasse DN und Passwort leer.",
"Password" => "Passwort",
"For anonymous access, leave DN and Password empty." => "Lasse die Felder DN und Passwort für anonymen Zugang leer.",
"User Login Filter" => "Benutzer-Login-Filter",
"Defines the filter to apply, when login is attempted. %%uid replaces the username in the login action." => "Bestimmt den angewendeten Filter, wenn eine Anmeldung versucht wird. %%uid ersetzt den Benutzernamen beim Anmeldeversuch.",
"use %%uid placeholder, e.g. \"uid=%%uid\"" => "verwende %%uid Platzhalter, z. B. \"uid=%%uid\"",
"User List Filter" => "Benutzer-Filter-Liste",
"Defines the filter to apply, when retrieving users." => "Definiert den Filter für die Anfrage der Benutzer.",
"without any placeholder, e.g. \"objectClass=person\"." => "ohne Platzhalter, z.B.: \"objectClass=person\"",
"Group Filter" => "Gruppen-Filter",
"Defines the filter to apply, when retrieving groups." => "Definiert den Filter für die Anfrage der Gruppen.",
"without any placeholder, e.g. \"objectClass=posixGroup\"." => "ohne Platzhalter, z.B.: \"objectClass=posixGroup\"",
"Connection Settings" => "Verbindungseinstellungen",
"Configuration Active" => "Konfiguration aktiv",
"When unchecked, this configuration will be skipped." => "Konfiguration wird übersprungen wenn deaktiviert",
"Port" => "Port",
"Backup (Replica) Host" => "Backup Host (Kopie)",
"Give an optional backup host. It must be a replica of the main LDAP/AD server." => "Gib einen optionalen Backup Host an. Es muss sich um eine Kopie des Haupt LDAP/AD Servers handeln.",
"Backup (Replica) Port" => "Backup Port",
"Disable Main Server" => "Hauptserver deaktivieren",
"When switched on, ownCloud will only connect to the replica server." => "Wenn aktiviert, wird ownCloud ausschließlich den Backupserver verwenden.",
"Use TLS" => "Nutze TLS",
"Do not use it additionally for LDAPS connections, it will fail." => "Benutze es nicht zusammen mit LDAPS Verbindungen, es wird fehlschlagen.",
"Case insensitve LDAP server (Windows)" => "LDAP-Server (Windows: Groß- und Kleinschreibung bleibt unbeachtet)",
"Turn off SSL certificate validation." => "Schalte die SSL-Zertifikatsprüfung aus.",
"If connection only works with this option, import the LDAP server's SSL certificate in your ownCloud server." => "Falls die Verbindung es erfordert, muss das SSL-Zertifikat des LDAP-Server importiert werden.",
"Not recommended, use for testing only." => "Nicht empfohlen, nur zu Testzwecken.",
"Cache Time-To-Live" => "Speichere Time-To-Live zwischen",
"in seconds. A change empties the cache." => "in Sekunden. Eine Änderung leert den Cache.",
"Directory Settings" => "Ordnereinstellungen",
"User Display Name Field" => "Feld für den Anzeigenamen des Benutzers",
"The LDAP attribute to use to generate the user`s ownCloud name." => "Das LDAP-Attribut für die Generierung des Benutzernamens in ownCloud. ",
"Base User Tree" => "Basis-Benutzerbaum",
"One User Base DN per line" => "Ein Benutzer Basis-DN pro Zeile",
"User Search Attributes" => "Benutzersucheigenschaften",
"Optional; one attribute per line" => "Optional; ein Attribut pro Zeile",
"Group Display Name Field" => "Feld für den Anzeigenamen der Gruppe",
"The LDAP attribute to use to generate the groups`s ownCloud name." => "Das LDAP-Attribut für die Generierung des Gruppennamens in ownCloud. ",
"Base Group Tree" => "Basis-Gruppenbaum",
"One Group Base DN per line" => "Ein Gruppen Basis-DN pro Zeile",
"Group Search Attributes" => "Gruppensucheigenschaften",
"Group-Member association" => "Assoziation zwischen Gruppe und Benutzer",
"Special Attributes" => "Spezielle Eigenschaften",
"Quota Field" => "Kontingent Feld",
"Quota Default" => "Standard Kontingent",
"in bytes" => "in Bytes",
"Email Field" => "E-Mail Feld",
"User Home Folder Naming Rule" => "Benennungsregel für das Home-Verzeichnis des Benutzers",
"Leave empty for user name (default). Otherwise, specify an LDAP/AD attribute." => "Ohne Eingabe wird der Benutzername (Standard) verwendet. Anderenfall trage ein LDAP/AD-Attribut ein.",
"Internal Username" => "Interner Benutzername",
"By default the internal username will be created from the UUID attribute. It makes sure that the username is unique and characters do not need to be converted. The internal username has the restriction that only these characters are allowed: [ a-zA-Z0-9_.@- ].  Other characters are replaced with their ASCII correspondence or simply omitted. On collisions a number will be added/increased. The internal username is used to identify a user internally. It is also the default name for the user home folder in ownCloud. It is also a port of remote URLs, for instance for all *DAV services. With this setting, the default behaviour can be overriden. To achieve a similar behaviour as before ownCloud 5 enter the user display name attribute in the following field. Leave it empty for default behaviour. Changes will have effect only on newly mapped (added) LDAP users." => "Standardmäßig wird der interne Benutzername aus der UUID erstellt. Dies stellt sicher, daß der Name einmalig ist und keine Zeichen umgewandelt werden müssen. Für den internen Benutzernamen sind nur die folgenden Zeichen zulässig: [ a-zA-Z0-9_.@- ]. Andere Zeichen werden durch ihr ASCII-Äquivalent ersetzt oder ausgelassen. Bei Kollisionen wird eine Nummer hinzugefügt/erhöht. Der interne Benutzername wird verwendet, um einen Benutzer intern zu identifizieren. Er ist auch der Standardname für das Benutzerverzeichnis in ownCloud und Teil von Remote-URLs, unter anderem für alle *DAV-Dienste. Mit dieser Einstellung kann das Standardverhalten geändert werden. Um ein ähnliches Verhalten wie in ownCloud 5 zu erreichen, geben Sie das Benutzer-Anzeige-Namen-Attribut in das folgende Feld ein. Änderungen betreffen nur neu angelegte LDAP-Benutzer.",
"Internal Username Attribute:" => "Attribut für interne Benutzernamen:",
"Override UUID detection" => "UUID-Erkennung überschreiben",
"By default, ownCloud autodetects the UUID attribute. The UUID attribute is used to doubtlessly identify LDAP users and groups. Also, the internal username will be created based on the UUID, if not specified otherwise above. You can override the setting and pass an attribute of your choice. You must make sure that the attribute of your choice can be fetched for both users and groups and it is unique. Leave it empty for default behaviour. Changes will have effect only on newly mapped (added) LDAP users and groups." => "Standardmäßig erkennt ownCloud das UUID-Attribut automatisch. Das UUID-Attribut wird benutzt, um LDAP-Benutzer und Gruppen eindeutig zu identifizieren. Außerdem wird der interne Benutzername basierend auf der UUID erstellt, wenn nicht anders angegeben. Sie können dieses Verhalten ändern und ein Attribut Ihrer Wahl angeben. Sie müssen sichergehen, dass das Attribut Ihrer Wahl auf Benutzer und Gruppen anwendbar und einzigartig ist. Für das Standardverhalten lassen Sie das Feld leer. Änderungen betreffen nur neu angelegte LDAP-Benutzer und Gruppen.",
"UUID Attribute:" => "UUID-Attribut:",
"Username-LDAP User Mapping" => "LDAP-Benutzernamenzuordnung",
"ownCloud uses usernames to store and assign (meta) data. In order to precisely identify and recognize users, each LDAP user will have a internal username. This requires a mapping from ownCloud username to LDAP user. The created username is mapped to the UUID of the LDAP user. Additionally the DN is cached as well to reduce LDAP interaction, but it is not used for identification. If the DN changes, the changes will be found by ownCloud. The internal ownCloud name is used all over in ownCloud. Clearing the Mappings will have leftovers everywhere. Clearing the Mappings is not configuration sensitive, it affects all LDAP configurations! Do never clear the mappings in a production environment. Only clear mappings in a testing or experimental stage." => "OwnCloud nutzt die Benutzernamen, um (Meta)Daten zuzuordnen und zu speichern. Um Benutzer eindeutig und präzise zu identifizieren, hat jeder LDAP-Benutzer einen internen Benutzernamen. Dies erfordert eine Zuordnung vom OwnCloud-Benutzernamen zum LDAP-Benutzer. Der erstellte Benutzername wird der UUID des LDAP-Benutzernamens zugeordnet. Zusätzlich wird der DN zwischengespeichert, um die Interaktion mit LDAP zu minimieren, was aber nicht der Identifikation dient. Ändert sich der DN, werden die Änderungen durch OwnCloud gefunden. Der interne OwnCloud-Name, wird in der gesamten OwnCloud verwendet. Werden die Zuordnungen gelöscht, bleiben überall Reste in der OwnCloud. Die Löschung der Zuordnungen kann nicht in der Konfiguration vorgenommen werden, beeinflusst aber die LDAP-Konfiguration! Lösche niemals die Zuordnungen in einer produktiven Umgebung. Lösche die Zuordnungen nur in einer Test- oder Experimentierumgebung.",
"Clear Username-LDAP User Mapping" => "Lösche LDAP-Benutzernamenzuordnung",
"Clear Groupname-LDAP Group Mapping" => "Lösche LDAP-Gruppennamenzuordnung",
"Test Configuration" => "Testkonfiguration",
"Help" => "Hilfe"
);
