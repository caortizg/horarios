<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('ca', array (
  'validators' => 
  array (
    'This value should be false.' => 'Aquest valor hauria de ser fals.',
    'This value should be true.' => 'Aquest valor hauria de ser cert.',
    'This value should be of type {{ type }}.' => 'Aquest valor hauria de ser del tipus {{ type }}.',
    'This value should be blank.' => 'Aquest valor hauria d\'estar buit.',
    'The value you selected is not a valid choice.' => 'El valor seleccionat no és una opció vàlida.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Ha de seleccionar almenys {{ limit }} opció.|Ha de seleccionar almenys {{ limit }} opcions.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Ha de seleccionar com a màxim {{ limit }} opció.|Ha de seleccionar com a màxim {{ limit }} opcions.',
    'One or more of the given values is invalid.' => 'Un o més dels valors facilitats són incorrectes.',
    'This field was not expected.' => 'Aquest camp no s\'esperava.',
    'This field is missing.' => 'Aquest camp està desaparegut.',
    'This value is not a valid date.' => 'Aquest valor no és una data vàlida.',
    'This value is not a valid datetime.' => 'Aquest valor no és una data i hora vàlida.',
    'This value is not a valid email address.' => 'Aquest valor no és una adreça d\'email vàlida.',
    'The file could not be found.' => 'No s\'ha pogut trobar l\'arxiu.',
    'The file is not readable.' => 'No es pot llegir l\'arxiu.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'L\'arxiu és massa gran ({{ size }} {{ suffix }}). La grandària màxima permesa és {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'El tipus mime de l\'arxiu no és vàlid ({{ type }}). Els tipus mime vàlids són {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Aquest valor hauria de ser {{ limit }} o menys.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Aquest valor és massa llarg. Hauria de tenir {{ limit }} caràcter o menys.|Aquest valor és massa llarg. Hauria de tenir {{ limit }} caràcters o menys.',
    'This value should be {{ limit }} or more.' => 'Aquest valor hauria de ser {{ limit }} o més.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Aquest valor és massa curt. Hauria de tenir {{ limit }} caràcters o més.',
    'This value should not be blank.' => 'Aquest valor no hauria d\'estar buit.',
    'This value should not be null.' => 'Aquest valor no hauria de ser null.',
    'This value should be null.' => 'Aquest valor hauria de ser null.',
    'This value is not valid.' => 'Aquest valor no és vàlid.',
    'This value is not a valid time.' => 'Aquest valor no és una hora vàlida.',
    'This value is not a valid URL.' => 'Aquest valor no és una URL vàlida.',
    'The two values should be equal.' => 'Els dos valors haurien de ser iguals.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'L\'arxiu és massa gran. El tamany màxim permés és {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'L\'arxiu és massa gran.',
    'The file could not be uploaded.' => 'No es pot pujar l\'arxiu.',
    'This value should be a valid number.' => 'Aquest valor hauria de ser un nombre vàlid.',
    'This file is not a valid image.' => 'L\'arxiu no és una imatge vàlida.',
    'This is not a valid IP address.' => 'Això no és una adreça IP vàlida.',
    'This value is not a valid language.' => 'Aquest valor no és un idioma vàlid.',
    'This value is not a valid locale.' => 'Aquest valor no és una localització vàlida.',
    'This value is not a valid country.' => 'Aquest valor no és un país vàlid.',
    'This value is already used.' => 'Aquest valor ja s\'ha utilitzat.',
    'The size of the image could not be detected.' => 'No s\'ha pogut determinar la grandària de la imatge.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'L\'amplària de la imatge és massa gran ({{ width }}px). L\'amplària màxima permesa són {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'L\'amplària de la imatge és massa petita ({{ width }}px). L\'amplària mínima requerida són {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'L\'altura de la imatge és massa gran ({{ height }}px). L\'altura màxima permesa són {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'L\'altura de la imatge és massa petita ({{ height }}px). L\'altura mínima requerida són {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Aquest valor hauria de ser la contrasenya actual de l\'usuari.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Aquest valor hauria de tenir exactament {{ limit }} caràcter.|Aquest valor hauria de tenir exactament {{ limit }} caràcters.',
    'The file was only partially uploaded.' => 'L\'arxiu va ser només pujat parcialment.',
    'No file was uploaded.' => 'Cap arxiu va ser pujat.',
    'No temporary folder was configured in php.ini.' => 'Cap carpeta temporal va ser configurada en php.ini.',
    'Cannot write temporary file to disk.' => 'No es va poder escriure l\'arxiu temporal en el disc.',
    'A PHP extension caused the upload to fail.' => 'Una extensió de PHP va fer que la pujada fallara.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Aquesta col·lecció ha de contenir {{ limit }} element o més.|Aquesta col·lecció ha de contenir {{ limit }} elements o més.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Aquesta col·lecció ha de contenir {{ limit }} element o menys.|Aquesta col·lecció ha de contenir {{ limit }} elements o menys.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Aquesta col·lecció ha de contenir exactament {{ limit }} element.|Aquesta col·lecció ha de contenir exactament {{ limit }} elements.',
    'Invalid card number.' => 'Número de targeta invàlid.',
    'Unsupported card type or invalid card number.' => 'Tipus de targeta no suportada o número de targeta invàlid.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Això no és un nombre de compte bancari internacional (IBAN) vàlid.',
    'This value is not a valid ISBN-10.' => 'Aquest valor no és un ISBN-10 vàlid.',
    'This value is not a valid ISBN-13.' => 'Aquest valor no és un ISBN-13 vàlid.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Aquest valor no és ni un ISBN-10 vàlid ni un ISBN-13 vàlid.',
    'This value is not a valid ISSN.' => 'Aquest valor no és un ISSN vàlid.',
    'This value is not a valid currency.' => 'Aquest valor no és una divisa vàlida.',
    'This value should be equal to {{ compared_value }}.' => 'Aquest valor hauria de ser igual a {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Aquest valor hauria de ser més gran a {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Aquest valor hauria de ser major o igual a {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Aquest valor hauria de ser idèntic a {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Aquest valor hauria de ser menor a {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Aquest valor hauria de ser menor o igual a {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Aquest valor no hauria de ser igual a {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Aquest valor no hauria de idèntic a {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'La proporció de l\'imatge és massa gran ({{ ratio }}). La màxima proporció permesa és {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'La proporció de l\'imatge és massa petita ({{ ratio }}). La mínima proporció permesa és {{ max_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'L\'imatge és quadrada({{ width }}x{{ height }}px). Les imatges quadrades no estan permeses.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'L\'imatge està orientada horitzontalment ({{ width }}x{{ height }}px). Les imatges orientades horitzontalment no estan permeses.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'L\'imatge està orientada verticalment ({{ width }}x{{ height }}px). Les imatges orientades verticalment no estan permeses.',
    'An empty file is not allowed.' => 'No està permès un fixter buit.',
    'This form should not contain extra fields.' => 'Aquest formulari no hauria de contenir camps addicionals.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'L\'arxiu pujat és massa gran. Per favor, pugi un arxiu més petit.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'El token CSRF no és vàlid. Per favor, provi d\'enviar novament el formulari.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Ha succeït un error d\'autenticació.',
    'Authentication credentials could not be found.' => 'No s\'han trobat les credencials d\'autenticació.',
    'Authentication request could not be processed due to a system problem.' => 'La solicitud d\'autenticació no s\'ha pogut processar per un problema del sistema.',
    'Invalid credentials.' => 'Credencials no vàlides.',
    'Cookie has already been used by someone else.' => 'La cookie ja ha estat utilitzada per una altra persona.',
    'Not privileged to request the resource.' => 'No té privilegis per solicitar el recurs.',
    'Invalid CSRF token.' => 'Token CSRF no vàlid.',
    'Digest nonce has expired.' => 'El vector d\'inicialització (digest nonce) ha expirat.',
    'No authentication provider found to support the authentication token.' => 'No s\'ha trobat un proveïdor d\'autenticació que suporti el token d\'autenticació.',
    'No session available, it either timed out or cookies are not enabled.' => 'No hi ha sessió disponible, ha expirat o les cookies no estan habilitades.',
    'No token could be found.' => 'No s\'ha trobat cap token.',
    'Username could not be found.' => 'No s\'ha trobat el nom d\'usuari.',
    'Account has expired.' => 'El compte ha expirat.',
    'Credentials have expired.' => 'Les credencials han expirat.',
    'Account is disabled.' => 'El compte està deshabilitat.',
    'Account is locked.' => 'El compte està bloquejat.',
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
