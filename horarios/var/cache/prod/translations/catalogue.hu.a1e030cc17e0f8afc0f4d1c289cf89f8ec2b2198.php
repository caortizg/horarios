<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('hu', array (
  'validators' => 
  array (
    'This value should be false.' => 'Ennek az értéknek hamisnak kell lennie.',
    'This value should be true.' => 'Ennek az értéknek igaznak kell lennie.',
    'This value should be of type {{ type }}.' => 'Ennek az értéknek {{ type }} típusúnak kell lennie.',
    'This value should be blank.' => 'Ennek az értéknek üresnek kell lennie.',
    'The value you selected is not a valid choice.' => 'A választott érték érvénytelen.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Legalább {{ limit }} értéket kell kiválasztani.|Legalább {{ limit }} értéket kell kiválasztani.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Legfeljebb {{ limit }} értéket lehet kiválasztani.|Legfeljebb {{ limit }} értéket lehet kiválasztani.',
    'One or more of the given values is invalid.' => 'A megadott értékek közül legalább egy érvénytelen.',
    'This field was not expected.' => 'Nem várt mező.',
    'This field is missing.' => 'Ez a mező hiányzik.',
    'This value is not a valid date.' => 'Ez az érték nem egy érvényes dátum.',
    'This value is not a valid datetime.' => 'Ez az érték nem egy érvényes időpont.',
    'This value is not a valid email address.' => 'Ez az érték nem egy érvényes e-mail cím.',
    'The file could not be found.' => 'A fájl nem található.',
    'The file is not readable.' => 'A fájl nem olvasható.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'A fájl túl nagy ({{ size }} {{ suffix }}). A legnagyobb megengedett méret {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'A fájl MIME típusa érvénytelen ({{ type }}). Az engedélyezett MIME típusok: {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Ez az érték legfeljebb {{ limit }} lehet.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Ez az érték túl hosszú. Legfeljebb {{ limit }} karaktert tartalmazhat.|Ez az érték túl hosszú. Legfeljebb {{ limit }} karaktert tartalmazhat.',
    'This value should be {{ limit }} or more.' => 'Ez az érték legalább {{ limit }} kell, hogy legyen.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Ez az érték túl rövid. Legalább {{ limit }} karaktert kell tartalmaznia.|Ez az érték túl rövid. Legalább {{ limit }} karaktert kell tartalmaznia.',
    'This value should not be blank.' => 'Ez az érték nem lehet üres.',
    'This value should not be null.' => 'Ez az érték nem lehet null.',
    'This value should be null.' => 'Ennek az értéknek nullnak kell lennie.',
    'This value is not valid.' => 'Ez az érték nem érvényes.',
    'This value is not a valid time.' => 'Ez az érték nem egy érvényes időpont.',
    'This value is not a valid URL.' => 'Ez az érték nem egy érvényes URL.',
    'The two values should be equal.' => 'A két értéknek azonosnak kell lennie.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'A fájl túl nagy. A megengedett maximális méret: {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'A fájl túl nagy.',
    'The file could not be uploaded.' => 'A fájl nem tölthető fel.',
    'This value should be a valid number.' => 'Ennek az értéknek érvényes számnak kell lennie.',
    'This file is not a valid image.' => 'Ez a fájl nem egy érvényes kép.',
    'This is not a valid IP address.' => 'Ez az érték nem egy érvényes IP cím.',
    'This value is not a valid language.' => 'Ez az érték nem egy érvényes nyelv.',
    'This value is not a valid locale.' => 'Ez az érték nem egy érvényes területi beállítás.',
    'This value is not a valid country.' => 'Ez az érték nem egy érvényes ország.',
    'This value is already used.' => 'Ez az érték már használatban van.',
    'The size of the image could not be detected.' => 'A kép méretét nem lehet megállapítani.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'A kép szélessége túl nagy ({{ width }}px). A megengedett legnagyobb szélesség {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'A kép szélessége túl kicsi ({{ width }}px). Az elvárt legkisebb szélesség {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'A kép magassága túl nagy ({{ height }}px). A megengedett legnagyobb magasság {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'A kép magassága túl kicsi ({{ height }}px). Az elvárt legkisebb magasság {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Ez az érték a felhasználó jelenlegi jelszavával kell megegyezzen.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Ennek az értéknek pontosan {{ limit }} karaktert kell tartalmaznia.|Ennek az értéknek pontosan {{ limit }} karaktert kell tartalmaznia.',
    'The file was only partially uploaded.' => 'A fájl csak részben lett feltöltve.',
    'No file was uploaded.' => 'Nem lett fájl feltöltve.',
    'No temporary folder was configured in php.ini.' => 'Nincs ideiglenes könyvtár beállítva a php.ini-ben.',
    'Cannot write temporary file to disk.' => 'Az ideiglenes fájl nem írható a lemezre.',
    'A PHP extension caused the upload to fail.' => 'Egy PHP bővítmény miatt a feltöltés nem sikerült.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Ennek a gyűjteménynek legalább {{ limit }} elemet kell tartalmaznia.|Ennek a gyűjteménynek legalább {{ limit }} elemet kell tartalmaznia.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Ez a gyűjtemény legfeljebb {{ limit }} elemet tartalmazhat.|Ez a gyűjtemény legfeljebb {{ limit }} elemet tartalmazhat.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Ennek a gyűjteménynek pontosan {{ limit }} elemet kell tartalmaznia.|Ennek a gyűjteménynek pontosan {{ limit }} elemet kell tartalmaznia.',
    'Invalid card number.' => 'Érvénytelen kártyaszám.',
    'Unsupported card type or invalid card number.' => 'Nem támogatott kártyatípus vagy érvénytelen kártyaszám.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Érvénytelen nemzetközi bankszámlaszám (IBAN).',
    'This value is not a valid ISBN-10.' => 'Ez az érték nem egy érvényes ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Ez az érték nem egy érvényes ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Ez az érték nem egy érvényes ISBN-10 vagy ISBN-13.',
    'This value is not a valid ISSN.' => 'Ez az érték nem egy érvényes ISSN.',
    'This value is not a valid currency.' => 'Ez az érték nem egy érvényes pénznem.',
    'This value should be equal to {{ compared_value }}.' => 'Ez az érték legyen {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Ez az érték nagyobb legyen, mint {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Ez az érték nagyobb vagy egyenlő legyen, mint {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ez az érték ugyanolyan legyen, mint {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Ez az érték kisebb legyen, mint {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Ez az érték kisebb vagy egyenlő legyen, mint {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Ez az érték ne legyen {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ez az érték ne legyen ugyanolyan, mint {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'A képarány túl nagy ({{ ratio }}). A megengedett legnagyobb képarány {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'A képarány túl kicsi ({{ ratio }}). A megengedett legkisebb képarány {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'A kép négyzet alakú ({{ width }}x{{ height }}px). A négyzet alakú képek nem engedélyezettek.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'A kép fekvő tájolású ({{ width }}x{{ height }}px). A fekvő tájolású képek nem engedélyezettek.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'A kép álló tájolású ({{ width }}x{{ height }}px). Az álló tájolású képek nem engedélyezettek.',
    'An empty file is not allowed.' => 'Üres fájl nem megengedett.',
    'The host could not be resolved.' => 'Az állomásnevet nem lehet feloldani.',
    'This value does not match the expected {{ charset }} charset.' => 'Ez az érték nem az elvárt {{ charset }} karakterkódolást használja.',
    'This is not a valid Business Identifier Code (BIC).' => 'Érvénytelen nemzetközi bankazonosító kód (BIC/SWIFT).',
    'This form should not contain extra fields.' => 'Ez a mezőcsoport nem tartalmazhat extra mezőket.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'A feltöltött fájl túl nagy. Kérem, próbáljon egy kisebb fájlt feltölteni.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Érvénytelen CSRF token. Kérem, próbálja újra elküldeni az űrlapot.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Hitelesítési hiba lépett fel.',
    'Authentication credentials could not be found.' => 'Nem találhatók hitelesítési információk.',
    'Authentication request could not be processed due to a system problem.' => 'A hitelesítési kérést rendszerhiba miatt nem lehet feldolgozni.',
    'Invalid credentials.' => 'Érvénytelen hitelesítési információk.',
    'Cookie has already been used by someone else.' => 'Ezt a sütit valaki más már felhasználta.',
    'Not privileged to request the resource.' => 'Nem rendelkezik az erőforrás eléréséhez szükséges jogosultsággal.',
    'Invalid CSRF token.' => 'Érvénytelen CSRF token.',
    'Digest nonce has expired.' => 'A kivonat bélyege (nonce) lejárt.',
    'No authentication provider found to support the authentication token.' => 'Nem található a hitelesítési tokent támogató hitelesítési szolgáltatás.',
    'No session available, it either timed out or cookies are not enabled.' => 'Munkamenet nem áll rendelkezésre, túllépte az időkeretet vagy a sütik le vannak tiltva.',
    'No token could be found.' => 'Nem található token.',
    'Username could not be found.' => 'A felhasználónév nem található.',
    'Account has expired.' => 'A fiók lejárt.',
    'Credentials have expired.' => 'A hitelesítési információk lejártak.',
    'Account is disabled.' => 'Felfüggesztett fiók.',
    'Account is locked.' => 'Zárolt fiók.',
  ),
));

$catalogueEs = new MessageCatalogue('es', array (
  'validators' => 
  array (
    'This value should be false.' => 'Este valor debería ser falso.',
    'This value should be true.' => 'Este valor debería ser verdadero.',
    'This value should be of type {{ type }}.' => 'Este valor debería ser de tipo {{ type }}.',
    'This value should be blank.' => 'Este valor debería estar vacío.',
    'The value you selected is not a valid choice.' => 'El valor seleccionado no es una opción válida.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Debe seleccionar al menos {{ limit }} opción.|Debe seleccionar al menos {{ limit }} opciones.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Debe seleccionar como máximo {{ limit }} opción.|Debe seleccionar como máximo {{ limit }} opciones.',
    'One or more of the given values is invalid.' => 'Uno o más de los valores indicados no son válidos.',
    'This field was not expected.' => 'Este campo no se esperaba.',
    'This field is missing.' => 'Este campo está desaparecido.',
    'This value is not a valid date.' => 'Este valor no es una fecha válida.',
    'This value is not a valid datetime.' => 'Este valor no es una fecha y hora válidas.',
    'This value is not a valid email address.' => 'Este valor no es una dirección de email válida.',
    'The file could not be found.' => 'No se pudo encontrar el archivo.',
    'The file is not readable.' => 'No se puede leer el archivo.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'El archivo es demasiado grande ({{ size }} {{ suffix }}). El tamaño máximo permitido es {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'El tipo mime del archivo no es válido ({{ type }}). Los tipos mime válidos son {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Este valor debería ser {{ limit }} o menos.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Este valor es demasiado largo. Debería tener {{ limit }} carácter o menos.|Este valor es demasiado largo. Debería tener {{ limit }} caracteres o menos.',
    'This value should be {{ limit }} or more.' => 'Este valor debería ser {{ limit }} o más.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Este valor es demasiado corto. Debería tener {{ limit }} carácter o más.|Este valor es demasiado corto. Debería tener {{ limit }} caracteres o más.',
    'This value should not be blank.' => 'Este valor no debería estar vacío.',
    'This value should not be null.' => 'Este valor no debería ser nulo.',
    'This value should be null.' => 'Este valor debería ser nulo.',
    'This value is not valid.' => 'Este valor no es válido.',
    'This value is not a valid time.' => 'Este valor no es una hora válida.',
    'This value is not a valid URL.' => 'Este valor no es una URL válida.',
    'The two values should be equal.' => 'Los dos valores deberían ser iguales.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'El archivo es demasiado grande. El tamaño máximo permitido es {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'El archivo es demasiado grande.',
    'The file could not be uploaded.' => 'No se pudo subir el archivo.',
    'This value should be a valid number.' => 'Este valor debería ser un número válido.',
    'This file is not a valid image.' => 'El archivo no es una imagen válida.',
    'This is not a valid IP address.' => 'Esto no es una dirección IP válida.',
    'This value is not a valid language.' => 'Este valor no es un idioma válido.',
    'This value is not a valid locale.' => 'Este valor no es una localización válida.',
    'This value is not a valid country.' => 'Este valor no es un país válido.',
    'This value is already used.' => 'Este valor ya se ha utilizado.',
    'The size of the image could not be detected.' => 'No se pudo determinar el tamaño de la imagen.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'El ancho de la imagen es demasiado grande ({{ width }}px). El ancho máximo permitido es de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'El ancho de la imagen es demasiado pequeño ({{ width }}px). El ancho mínimo requerido es {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La altura de la imagen es demasiado grande ({{ height }}px). La altura máxima permitida es de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La altura de la imagen es demasiado pequeña ({{ height }}px). La altura mínima requerida es de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Este valor debería ser la contraseña actual del usuario.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Este valor debería tener exactamente {{ limit }} carácter.|Este valor debería tener exactamente {{ limit }} caracteres.',
    'The file was only partially uploaded.' => 'El archivo fue sólo subido parcialmente.',
    'No file was uploaded.' => 'Ningún archivo fue subido.',
    'No temporary folder was configured in php.ini.' => 'Ninguna carpeta temporal fue configurada en php.ini.',
    'Cannot write temporary file to disk.' => 'No se pudo escribir el archivo temporal en el disco.',
    'A PHP extension caused the upload to fail.' => 'Una extensión de PHP hizo que la subida fallara.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Esta colección debe contener {{ limit }} elemento o más.|Esta colección debe contener {{ limit }} elementos o más.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Esta colección debe contener {{ limit }} elemento o menos.|Esta colección debe contener {{ limit }} elementos o menos.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Esta colección debe contener exactamente {{ limit }} elemento.|Esta colección debe contener exactamente {{ limit }} elementos.',
    'Invalid card number.' => 'Número de tarjeta inválido.',
    'Unsupported card type or invalid card number.' => 'Tipo de tarjeta no soportado o número de tarjeta inválido.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Esto no es un International Bank Account Number (IBAN) válido.',
    'This value is not a valid ISBN-10.' => 'Este valor no es un ISBN-10 válido.',
    'This value is not a valid ISBN-13.' => 'Este valor no es un ISBN-13 válido.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Este valor no es ni un ISBN-10 válido ni un ISBN-13 válido.',
    'This value is not a valid ISSN.' => 'Este valor no es un ISSN válido.',
    'This value is not a valid currency.' => 'Este valor no es una divisa válida.',
    'This value should be equal to {{ compared_value }}.' => 'Este valor debería ser igual que {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Este valor debería ser mayor que {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Este valor debería ser mayor o igual que {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor debería ser idéntico a {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Este valor debería ser menor que {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Este valor debería ser menor o igual que {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Este valor debería ser distinto de {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor no debería ser idéntico a {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'La proporción de la imagen es demasiado grande ({{ ratio }}). La máxima proporción permitida es {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'La proporción de la imagen es demasiado pequeña ({{ ratio }}). La mínima proporción permitida es {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'La imagen es cuadrada ({{ width }}x{{ height }}px). Las imágenes cuadradas no están permitidas.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'La imagen está orientada horizontalmente ({{ width }}x{{ height }}px). Las imágenes orientadas horizontalmente no están permitidas.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'La imagen está orientada verticalmente ({{ width }}x{{ height }}px). Las imágenes orientadas verticalmente no están permitidas.',
    'An empty file is not allowed.' => 'No está permitido un archivo vacío.',
    'The host could not be resolved.' => 'No se puede resolver el host.',
    'This value does not match the expected {{ charset }} charset.' => 'La codificación de caracteres para este valor debería ser {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'No es un Código de Identificación Bancaria (BIC) válido.',
    'This form should not contain extra fields.' => 'Este formulario no debería contener campos adicionales.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'El archivo subido es demasiado grande. Por favor, suba un archivo más pequeño.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'El token CSRF no es válido. Por favor, pruebe a enviar nuevamente el formulario.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Ocurrió un error de autenticación.',
    'Authentication credentials could not be found.' => 'No se encontraron las credenciales de autenticación.',
    'Authentication request could not be processed due to a system problem.' => 'La solicitud de autenticación no se pudo procesar debido a un problema del sistema.',
    'Invalid credentials.' => 'Credenciales no válidas.',
    'Cookie has already been used by someone else.' => 'La cookie ya ha sido usada por otra persona.',
    'Not privileged to request the resource.' => 'No tiene privilegios para solicitar el recurso.',
    'Invalid CSRF token.' => 'Token CSRF no válido.',
    'Digest nonce has expired.' => 'El vector de inicialización (digest nonce) ha expirado.',
    'No authentication provider found to support the authentication token.' => 'No se encontró un proveedor de autenticación que soporte el token de autenticación.',
    'No session available, it either timed out or cookies are not enabled.' => 'No hay ninguna sesión disponible, ha expirado o las cookies no están habilitados.',
    'No token could be found.' => 'No se encontró ningún token.',
    'Username could not be found.' => 'No se encontró el nombre de usuario.',
    'Account has expired.' => 'La cuenta ha expirado.',
    'Credentials have expired.' => 'Las credenciales han expirado.',
    'Account is disabled.' => 'La cuenta está deshabilitada.',
    'Account is locked.' => 'La cuenta está bloqueada.',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEs);

return $catalogue;
