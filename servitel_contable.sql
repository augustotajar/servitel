-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 22-11-2016 a las 15:34:15
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `servitel_contable`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivos`
--

CREATE TABLE `archivos` (
  `id` int(11) NOT NULL,
  `ruta` varchar(256) NOT NULL,
  `tarea` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `nombre_orig` varchar(100) NOT NULL,
  `extension` varchar(5) NOT NULL,
  `fecha` datetime NOT NULL,
  `usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `archivos`
--

INSERT INTO `archivos` (`id`, `ruta`, `tarea`, `nombre`, `nombre_orig`, `extension`, `fecha`, `usuario`) VALUES
(1, '/opt/lampp/htdocs/servitel/uploads/1/2c17eb99de7fc46ab705055a5c23b691.mp3', 1, '2c17eb99de7fc46ab705055a5c23b691.mp3', 'ride-twenty-one-pilots.mp3', '.mp3', '2016-10-13 10:46:28', 11),
(2, '/opt/lampp/htdocs/servitel/uploads/1/2604bb258ee5347a020324adf95e9b62.jpg', 1, '2604bb258ee5347a020324adf95e9b62.jpg', 'tumblr_n92vgllYb61thd9lpo1_1280.jpg', '.jpg', '2016-10-13 10:58:28', 11),
(3, '/opt/lampp/htdocs/servitel/uploads/1/f30dcf8040c56210da37b854be458d6c.jpg', 1, 'f30dcf8040c56210da37b854be458d6c.jpg', 'Recursos-Humanos-3.jpg', '.jpg', '2016-10-13 15:46:12', 11),
(4, '/opt/lampp/htdocs/servitel/uploads/2/c50f262dd727746ff18435e44935a819.jpg', 2, 'c50f262dd727746ff18435e44935a819.jpg', 'IMG_20161007_134223825.jpg', '.jpg', '2016-10-13 16:03:23', 11),
(5, '/opt/lampp/htdocs/servitel/uploads/5/ee8929a73f00a226d1935fa707bb23ac.jpg', 5, 'ee8929a73f00a226d1935fa707bb23ac.jpg', 'IMG_20151107_220357812.jpg', '.jpg', '2016-10-26 11:00:42', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('6bba6d87679251468549812422fc95bb', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/52.0.2743.116 Chrome/52.0.2743.11', 1479389198, ''),
('c7122c3312694a8ca5cb1fee6ed36163', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/52.0.2743.116 Chrome/52.0.2743.11', 1479473391, 'a:14:{s:9:"user_data";s:0:"";s:3:"uid";s:2:"11";s:9:"unique_id";s:23:"57ad281760cb37.43634467";s:13:"primer_nombre";s:7:"AUGUSTO";s:14:"segundo_nombre";s:0:"";s:15:"primer_apellido";s:4:"JARA";s:16:"segundo_apellido";s:0:"";s:4:"tipo";s:1:"1";s:10:"id_cliente";N;s:5:"email";s:22:"AUGUSTOTAJAR@GMAIL.COM";s:11:"permissions";s:1:"0";s:10:"created_at";s:19:"2016-08-11 21:06:23";s:10:"updated_at";s:19:"2016-09-30 08:05:46";s:9:"logged_in";b:1;}'),
('fbbdeac8497ee22965e9affa6c8c0247', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/52.0.2743.116 Chrome/52.0.2743.11', 1479312599, 'a:13:{s:3:"uid";s:2:"11";s:9:"unique_id";s:23:"57ad281760cb37.43634467";s:13:"primer_nombre";s:7:"AUGUSTO";s:14:"segundo_nombre";s:0:"";s:15:"primer_apellido";s:4:"JARA";s:16:"segundo_apellido";s:0:"";s:4:"tipo";s:1:"1";s:10:"id_cliente";N;s:5:"email";s:22:"AUGUSTOTAJAR@GMAIL.COM";s:11:"permissions";s:1:"0";s:10:"created_at";s:19:"2016-08-11 21:06:23";s:10:"updated_at";s:19:"2016-09-30 08:05:46";s:9:"logged_in";b:1;}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `rif` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefono1` varchar(20) DEFAULT NULL,
  `telefono2` varchar(20) DEFAULT NULL,
  `direccion` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `rif`, `email`, `telefono1`, `telefono2`, `direccion`) VALUES
(3, 'CABUMAICA, C.A.', '123456', 'CABUMAICA@GMAIL.COM', '', '', ''),
(6, 'ASOC. PUERTO PUNTO , R.L.', '1324567', 'PUERTOPUNTO@GMAIL.COM', '', '', ''),
(7, 'LEXULIGHT', '12345678', 'LEXULIGHT@GMAIL.COM', '', '', ''),
(8, 'BONALCA', '123456789', 'BONALCA@GMAIL.COM', '', '', ''),
(9, 'ASOC. COOP. INSUMECI, R.L.', '987654', 'INSUMECI@GMAIL.COM', '', '', ''),
(10, 'ASOC. COOP. MI PACHITO, R.L.', '9876543', 'MIPACHITO@GMAIL.COM', '', '', ''),
(11, 'ASOC. COOP. FACUPI, R.L.', '98765432', 'FACUPI@GMAIL.COM', '', '', ''),
(12, 'ASOC. COOP. HUMANOS, R.L.', '98765431', 'HUMANOS@GMAIL.COM', '', '', ''),
(13, 'ASOC. COOP. FERTILIZANTES, R.L.', '963852', 'FERTILIZANTES@GMAIL.COM', '', '', ''),
(14, 'ASOC. COOP. GEICA, R.L.', '9638527', 'GEICA@GMAIL.COM', '', '', ''),
(15, 'METAL PROMECA', '96385274', 'METPRO@GMAIL.COM', '', '', ''),
(16, 'ASOC. COOP. ALEXANDRAS', '963852741', 'ALEXANDRAS@GMAIL.COM', '', '', ''),
(17, 'ASOC. COOP. PROYEG 520, R.L.', '789456', 'PROYEG520@GMAIL.COM', '', '', ''),
(18, 'JS MAYORISTA, C.A.', 'J316428940', 'JSMAYORISTA@GMAIL.COM', '', '', ''),
(19, 'Prueba, C.A.', 'J31642894', 'prueba@gmail.com', '04242456353', '02433324565', 'Maracay'),
(25, 'Cliente', 'J978979', 'cliente@gmail.com', '', '', ''),
(26, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `contenido` text NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `ultima_modificacion` datetime DEFAULT NULL,
  `url_img` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `contenido`, `fecha_creacion`, `ultima_modificacion`, `url_img`) VALUES
(6, 'Montilla: Al Simadi se podrá acceder sin restricciones de monto o precio', 'Emen.- Ricardo Montilla, presidente de la Asociación Nacional de Operadores de Valores, ratificó este jueves que el Sistema Marginal de Divisas (Simadi) será un mercado "libre y se podrá acceder sin restricción de monto o precios".\n\nAsí lo señaló durante entrevista en Televen en la que dijo que la Gaceta Oficial publicada ayer establece los mecanismos del menudeo, las transferencias y los títulos valores.\n\nDijo que las casas de cambio tienen unas características para atender a los clientes, lo mismo ocurres con los operadores de valores y los bancos. Explicó que los 300 dólares diarios en las casas de cambio "no significa que la persona natural no puede ir a una casa de bolsa pueda adquirir una cantidad mayor".\n\nMontilla dijo, que de acuerdo a las necesidades de la persona, ésta puede ir a un banco o un operador de valor y solicitar más de la cantidad establecida que se puede obtener a través de las casas de cambio.\n\nEl presidente de la Asociación de Operadores de Valores ratificó que la plataforma del Simadi será la misma que se utilizó para el Sicad 2.\n\nPara hoy se espera que se publiquen otros convenios cambiarios aclarando cuáles serán los rubros que estarán en cada uno de los tres sistemas cambiarios.\n\nLeer más en: http://www.ultimasnoticias.com.ve/noticias/actualidad/economia/montilla-al-simadi-se-podra-acceder-sin-restriccio.aspx#ixzz3RY5IBDmd\n', '2015-02-12 11:56:10', NULL, NULL),
(8, 'Casas de cambio venderán $ 2 mil a personas por mes', 'Caracas.- El Ministerio de Finanzas y el Banco Central de Venezuela (BCV) publicaron ayer el Convenio Cambiario N° 33, según el cual se regirá el recién creado Sistema Marginal de Divisas (Simadi) y una resolución que aplica para las transacciones de moneda extranjera en las casas  de cambio.\n\nEn la norma conjunta se establecen los montos en dólares que pueden venderse en la llamada modalidad de menudeo -uno de las tres esquemas que componen el sistema junto a la transacciones en la banca y las casas de bolsa para la  compra venta de divisas.\n\nEl texto publicado en la Gaceta Oficial Extraordinaria número 6.171, indica que las personas naturales podrán comprar a diario $300 y $2mil mensuales y hasta $10 mil al año.\n\nSegún los artículo 9 y 24 del Convenio N° 33, el tipo de cambio aplicable a estás operaciones de venta de divisas será el publicado diariamente por el BCV en su página web.\n\nEl presidente del BCV, Nelson Merentes, reiteró ayer que las  otras modalidades del Simadi -operaciones en la Banca Universal, transferencias  y operaciones de títulos valores- no tendrán límite en la cantidad de  divisas para la compra -venta . \n\n“Hay limitaciones en el llamado menudeo, pero se pueden hacer transacciones en cuentas (en el sistema bancario)  por cualquier tipo de monto, incluso desde el exterior a Venezuela. Allí no hay limitaciones”, subrayó Merentes.  \n\nNo es una solución\n\nEntretanto, los analistas criticaron que el nuevo esquema  atienda sólo entre 2% y 3% del mercado del dólar.    \n\nEl presidente de Datanálisis, Luis Vicente León, aunque cree que es una “buena noticia” que en el Simadi el valor de las divisas flote libremente, lamentó que el Ejecutivo adelante que el mecanismo manejará “un porcentaje pequeño de transacciones sobre el total de operaciones en divisas”, cuando debió ser el mercado principal para superar algunos desequilibrios de la economía.    \n\nLa postura del investigador del Centro Internacional Miranda, Víctor Álvarez, fue similar, al apuntar que la propia denominación “marginal” del sistema “lo descalifica de ser una solución de largo aliento”, porque no resuelve la escasez de dólares.    \n\nÁlvarez recordó que el país recibirá este año la mitad de las divisas que obtuvo en 2014 debido al desplome de los precios del petróleo -cuyo promedio anual está en $41- por lo que dijo que era necesario activar un esquema que “pudiera resolver la aguda restricción”.    \n\nAmbos coincidieron en que el Gobierno se equivocó -este martes- al anunciar que junto a un Simadi limitado, mantendrá las tasas “absurdas” del Cencoex a Bs 6,30 y del Sicad a Bs 12.\n\n"Estas medidas son contrarias a lo que requiere la economía (...) porque la mayoría de las divisas las van a vender a Bs 6,3 y Bs 12 que es un absurdo y no resolverá los problemas” de corrupción, arbitraje e ineficiencia.    \n\nEcoanalítica ventiló que fuentes oficiales indicaron que la previsión es que el tipo de cambio en el Simadi inicie entre Bs 125 y Bs 140.    \n\nMerentes declaró que si los precios del sistema marginal y el mercado negro “son muy parecidos, no tiene sentido irse a un mercado ilegal”.', '2015-02-12 17:44:06', NULL, NULL),
(9, 'Inflación en Venezuela podría llegar al 100% en 2015: S&P', 'NUEVA YORK (Reuters) — La agencia Standard & Poor’s bajó este lunes la calificación de crédito soberana de Venezuela a ‘CCC’ desde ‘CCC+’, con perspectiva negativa, tomando en cuenta la caída de los precios del petróleo y el fracaso del Gobierno en enfrentar las distorsiones económicas.\n\nS&P señaló que la economía de Venezuela podría contraerse hasta un 7% en 2015 y la inflación llegaría al 100% o más a fin de año por una escasez de productos básicos.\n\n"Creemos que la presión está aumentando para que el Gobierno reestructure parte de su deuda en el mercado o lleve adelante una operación de gestión de pasivos para refinanciar parte de su deuda con vencimiento en los próximos uno o dos años", dijo S&P en un comunicado.\n\nEl sistema de control cambiario y los enormes subsidios a los combustibles de Venezuela estarían drenando las reservas internacionales del país sudamericano, reduciendo su capacidad para cumplir con el pago de su deuda.\n\nLos bonos soberanos venezolanos se negocian actualmente a precios alarmantes, con rendimientos anuales de entre 20% y 53%.\n\nLa agencia considera que existe un 50% de probabilidades de reducir la calificación de deuda soberana de Venezuela este año o el próximo a ‘default selectivo’, lo que podría ocurrir por "un canje de deuda llevado a cabo en circunstancias complicadas".\n\nLos bonos venezolanos han rebotado desde la semana pasada por un aumento de los precios del petróleo. El precio del Global venezolano al 2027 subió 3 puntos básicos este lunes para rendir 23.439%.\n\nEl presidente Nicolás Maduro ha dicho que Venezuela cumplirá con sus compromisos y descartó la posibilidad de un default, diciendo que era un rumor propagado por los enemigos del país.\n\nMuchos inversores en Wall Street siguen teniendo bonos venezolanos en sus carteras, destacando las enormes reservas petroleras de la nación sudamericana y sus sólidos antecedentes en el pago de su deuda.\n\nEn una mención por separado, S&P mantuvo la calificación de deuda de Ecuador en ‘B+/B’ y el panorama estable para su economía, reflejando la expectativa de que el Gobierno tome medidas para contener su déficit fiscal', '2015-02-12 17:45:53', NULL, NULL),
(13, 'Nuevo Código Orgánico Tributario. Decreto 1434 Gaceta Nº 6152 de fecha 18/11/2014', 'Los cambios mas resaltantes son los siguientes:\n\n1. La interposición del recurso jerárquico  NO SUSPENDE LA ACCIÓN DE COBRO por parte de la administración\n\n2. Competencia de embargo para la administración tributaria, para ello se cambió el concepto de juicio ejecutivo  el cual antes era realizado vía jurisdiccional por el de cobro ejecutivo el cual es ejecutado por la administración tributaria,  se le atribuye a la Administración Tributaria las facultades de cobro ejecutivo (cobrar sus deudas en vía administrativa, sin necesidad de ir a tribunales)., el acta de intimación una vez notificada adquiere carácter de título ejecutivo para iniciar el cobro ejecutivo.\n\n3. Incremento de la sanción pecuniaria en más de 1000%\n\n4. Se incrementa la sanción por deberes formales en un 200% adicional si el contribuyente es sujeto pasivo especial.\n\n5. Incorporar a los Consejos Comunales como Auxiliares de la Administración Tributaria.\n\n6. No prescribirá la acción del Estado para perseguir y castigar los ilícitos tributarios sancionados con penas restrictivas de libertad\n\n7. la sanción material por no retener se incrementó a 500% del tributo no retenido\n\n8. La sanción por retener y no enterar antes de los 100 días es de 5% por cada día de retraso en el pago\n\n9. la sanción por retener y enterar después de los 100 días es 1000% del monto no enterado y pena privativa de libertad\n\n10. La sanción por omisos mediante el procedimiento de recaudación se incremento de 10% a 30%.\n\n11. La sanción  por sumarios no allanados  de 112,25 % aumento a 200%.\n\n12. La sanción por allanamientos es 30%\n\n13.  Se ampliaron los ilícitos que dan origen a clausura del establecimiento , antes se cerraban por libros de impuestos indirectos y por no emitir facturas ahora cierran por mas causales\n', '2015-02-19 15:27:58', NULL, NULL),
(14, 'Cónyuges pueden declarar el ISLR en forma conjunta o separada', 'El Servicio Nacional Integrado de Administración Aduanera y Tributaria (SENIAT), recuerda que los contribuyentes que presenten su declaración del Impuesto Sobre la Renta (ISLR) correspondiente al ejercicio fiscal 2014, como comunidad conyugal no separada de bienes (matrimonio o concubinato), tienen la opción de hacerlo de forma conjunta o de manera separada, donde cada uno cumple con la presentación de la misma.\n\n \n\nLa declaración conjunta es aquella que se presenta incluyendo en un solo procedimiento, la totalidad de los enriquecimientos percibidos por la comunidad conyugal, vale decir, por ambos cónyuges o concubinos, sin hacer distinción de la persona que haya obtenido los diferentes tipos de rentas objeto de gravamen.\n\n \n\nEn el caso de efectuar la declaración por separado, la mujer tiene sólo la posibilidad de incluir sus sueldos u honorarios profesionales de manera particular según sea el caso, y el resto de los enriquecimientos obtenidos deberán ser incorporados en la declaración de su pareja, como parte de la comunidad conyugal.\n\n \n\nEntretanto, la Ley de Impuesto Sobre la Renta establece que en caso de presentarse la declaración separada, las cargas por hijos también podrán ser divididas entre ambos o ser utilizadas por uno de los dos contribuyentes, nunca deberán ser utilizadas de forma simultánea, por cuanto corren el riesgo de ser sancionados.\n\n \n\nLas cargas familiares permitidas por la normativa tributaria son las siguientes: ascendientes directos, es decir, padre y madre vivos y dependientes económicamente del contribuyente; hijos menores de 18 años o menores de 25 años, siempre y cuando estén estudiando.\n\n \n\nUna consideración especial de la ley es que se acepta como carga a los hijos mayores de 25 años, cuando presenten alguna enfermedad comprobable, para lo cual requieran algún tipo de educación o atención especial.\n\n \n\nEl SENIAT, bajo los lineamientos del Superintendente José David Cabello Rondón, facilita a los contribuyentes el cumplimiento de sus obligaciones tributarias, en consonancia con las políticas de la Gran Misión Eficiencia o Nada, implementadas por el presidente Nicolás Maduro.', '2015-02-19 15:41:30', NULL, NULL),
(15, 'Aprueban aumento de la Unidad Tributaria a 150 bolívares', 'La Comisión Permanente de Finanzas y Desarrollo Económico de la Asamblea Nacional (AN) aprobó el reajuste del valor de la Unidad Tributaria (UT) a 150 bolívares, que regirá para el ejercicio fiscal 2015.\n\nLa UT actual es de 127 bolívares y, una vez se publique en Gaceta Oficial, pasará a 150 bolívares, representando un incremento de 18%.\n\nLa nueva Unidad Tributaria será la que se aplique de ahora en adelante para trámites con el Estado y servirá para la determinación de tarifas y multas. También se aplicará para la declaración de ingresos estimados. Para la declaración definitiva de impuestos de 2014 se aplicará la UT de Bs 127.', '2015-02-26 08:30:07', NULL, NULL),
(16, 'Nuevo formato DPJ de la declaración definitiva de ISLR para personas jurídicas', ' El SENIAT a través de su página web incorporó un nuevo formato de Declaración Definitiva de ISLR para Personas Jurídicas.\nCon este formato este organismo procede a discriminar el estado demostrativo de ingresos, costos y gastos, así como, la conciliación fiscal de rentas en tres (3) secciones independientes a saber:\n\n       Rentas de fuente territorial\n       Rentas de fuente extraterritorial\n       Rentas exentas o exoneradas\n\n\nEsta nueva presentación, pareciera que pretende dar detalle de algunas partidas que destacan la ley y el reglamento del ISLR, que pudieran ser de interés para el efectivo control fiscal del SENIAT, a los fines de facilitar su función a través de la minería de datos; aspecto este que requiere analizar, si los contribuyentes requieren adecuaciones de su detalle contable.\nLos cambios más significativos observados por quien escribe, son los siguientes:\n\nEstado demostrativo de ingresos:\n\n    Se hace una diferenciación de los ingresos recibidos por operaciones de crédito y/o de contado, en el caso de ventas de bienes inmuebles.\n     Se hace una diferenciación de los ingresos recibidos por arrendamiento y subarrendamiento de bienes muebles e inmuebles.\n     Se discriminan los ingresos o ventas brutas, de bienes, servicios y por honorarios profesionales.\n     Se incluyen los rubros intereses varios e ingresos por venta de acciones\n\nEstado demostrativo de costos:\n\nSe incluyen nuevas casillas para indicar el costo de ventas de inmuebles e inversión en acciones en\ncaso de enajenación durante el ejercicio fiscal.\n\nEstado demostrativo de gastos:\n\n           Se discriminan los numerales establecidos en el artículo 27 de la ley.\n       Se realiza una sumatoria de los gastos, previo al cálculo de la utilidad o pérdida del ejercicio, para luego incluir las erogaciones por concepto de donaciones y liberalidades.\n           Exceso de Gastos Administrativos y Conservación de Inmuebles. \n        Exceso de Liberalidades y Donaciones.\n\n\n\nPartidas No Gravables:\n      Nueva sección donde se colocan de forma diferenciada los ingresos contabilizados no gravables.\n\nDividendos:\nEn esta sección nueva, se debe indicar si el pago de dividendos se efectuó en efectivo o en acciones, resaltando el monto del dividendo decretado.\n\nDel análisis general realizado al cambio del formato, me llamó especialmente la atención, la preponderancia de partidas incluidas en forma detallada que hacen alusión a la tenencia y comercialización de bienes inmuebles, incluso el nivel de detalle solicitado relacionado con el ajuste por inflación de los activos fijos desincorporados de la contabilidad de la empresa, así como el pago de comisiones por enajenación de este tipo de bienes.\n\nPor lo antes expuesto, advierto a mis lectores la importancia de este último comentario.\n\nArtículo desarrollado en colaboración con Renny Calderín, Socio de la División de Impuestos de la firma: Varela y Asociados. ', '2015-02-26 08:32:40', NULL, NULL),
(17, 'Crean nomenclatura de RIF para Consejos Comunales', 'El presidente de la República, Nicolás Maduro, informó que fue creada la nomenclatura del Registro de Información Fiscal (RIF) con denominación C para los Consejos Comunales.\nMaduro destacó que la propuesta fue presentada por el vicepresidente del Área Territorial, Elías Jaua.\n\n"Que se incorpore y se cree para la utilización del alfabético del Registro Único de Información Fiscal (RIF) como es llevado por las autoridades tributarias la letra C para distinguir a los consejos comunales y demás organizaciones del pueblo venezolano, aprobado", informó. ', '2015-03-30 08:44:49', NULL, NULL),
(18, 'LAS IGLESIAS Y EL IVA', 'LAS IGLESIAS Y EL IVA\n\nLa ley de impuesto al valor agregado (IVA) establece en sus artículos 17, 18,19 y 64 varios supuestos de exención del pago del impuesto en referencia, como lo son algunas importaciones, la transferencia de determinados bienes y la prestación de ciertos servicios.\n\nLa ley de IVA establece las exenciones con relación a las actividades que son objeto de gravamen, es decir, con respecto a la enajenación de bienes muebles, la prestación de servicios y la importación de bienes, y no con relación a las personas que materializan y deben pagar el precitado impuesto.\n\nEllo se entiende, toda vez que la ley en cuestión establece un conjunto de exenciones denominadas por las doctrinas objetivas, las cuales constituyen dispensa total del pago del impuesto en virtud de ciertos actos, hechos o negocios jurídicos que, por política de estado, se ha considerado conveniente atribuirles el beneficio fiscal, con prescindencia de un sujeto en particular o de categoría de sujetos.\n\nEn efecto, si el impuesto sobre las ventas es real, como lo tiene establecido la doctrina, y además es indirecto, no tiene sentido que la ley establezca exenciones de tipo personal con fundamento en los niveles de ingreso y patrimonio y en general las condiciones empresariales y personales del contribuyente.\n\nPor consiguiente cuando las iglesias funjan como adquirientes, receptores o beneficiario de bienes o servicios gravados, estarán en la obligación de soportar el impuesto correspondiente, y en caso, que realice operaciones gravadas, deberá trasladar el impuesto, todo de conformidad con el articulo 29 de la ley de IVA según su ultima moficacion publicada en decreto 1436 gaceta oficial nro 6152  de fecha 18/11/2014.\n\nDe acuerdo a doctrinas del seniat las iglesias no se encuentran exentas del pago del impuesto al valor agregado (IVA), toda vez que la ley en cuestión, no dispensa del cumplimiento de la obligación tributaria a las personas sujetas a la misma, sino que prevee exenciones objetivas por la realización de determinadas actividades, sin embargo no se manifiesta con lo referente a la no sujecion, al no aparecer expresamente definido como gravable dentro de la ley el servicio que prestan las iglesias.\n\nEn el caso de los servicios que prestan las iglesias tales como rescatar a los jóvenes de la perdición eterna, alejándolos de los vicios, las drogas y malos hábitos  no encajan dentro de las actividades consideradas por la ley como exentas de IVA .\n\nPor una parte el numeral 3 del Art 14 no condiciona la exclusividad para gozar de la exención de islr, sin embargo para el caso del IVA, el numeral 4 del articulo 19 de la ley de IVA si condiciona la exclusividad, es decir el objeto de estas instituciones debería de ser exclusivo para servicios de hospedaje, alimentación, a estudiantes, ancianos, discapacitados, enfermos, etc.  Contraponiéndose si coloca fines religiosos paralelamente.\n\nTambién consideramos que el servicio que prestan las iglesias no esta del todo claro en la definición de servicio, aunado al hecho de que se requiere una contraprestación para ser considerado un servicio gravado que indica la ley de IVA en el numeral 4 del articulo 4 de la ley de IVA y que indica lo siguiente:\n\nArtículo 4 ley IVA. A los efectos de esta Ley, se entenderá por:4. Servicios: Cualquier actividad independiente en la que sean principales las obligaciones de hacer. También se consideran servicios los contratos de obras mobiliarias e inmobiliarias, incluso cuando el contratista aporte los materiales; los suministros de agua, electricidad, teléfono y aseo; los arrendamientos de bienes muebles, arrendamientos de bienes inmuebles con fines distintos al residencial y cualesquiera otra cesión de uso, a título oneroso, de tales bienes o derechos, los arrendamientos o cesiones de bienes muebles destinados a fondo de comercio situados en el país, así como los arrendamientos o cesiones para el uso de bienes incorporales tales como marcas, patentes, derechos de autor, obras artísticas e intelectuales, proyectos científicos y técnicos, estudios, instructivos, programas de informática y demás bienes comprendidos y regulados en la legislación sobre propiedad industrial, comercial, intelectual o de transferencia tecnológica. Igualmente califican como servicios las actividades de lotería, distribución de billetes de lotería, bingos, casinos y demás juegos de azar.\nAsimismo califican como servicios las actividades realizadas por clubes sociales y deportivos, ya sea a favor de los socios o afiliados que concurren para conformar el club o de terceros.No califican como servicios las actividades realizadas por los hipódromos, ni las actividades realizadas por las loterías oficiales del Estado\ncomo podemos observar , los servicios prestados por las iglesias no aparecen expresamente como los servicios de los clubes por ejemplo  alli no definen las ofrendas o el diezmo como servicio, nosotros consideramos que no son contribuyentes de IVA , mas sin embargo , en consultas evacuadas por muchas iglesias ante el seniat , la respuesta es de que si son contribuyentes de IVA.\n\nRecomendamos a los representantes de las diversas iglesias en el pais sometan a consideracion ante el SENIAT la posibilidad de un DECRETO DE EXONERACION PARA LAS ACTIVIDADES RELIGIOSAS tanto de IVA como de ISLR.\n\nEs importante recordar que por la via de exencion o exoneracion de IVA solo conseguiria pasar a contribuyente formal por lo tanto subsisten la obligacion del cumplimiento de los deberoes formales como lo son facturar, llevar libros y declarar. Sin embargo, via NO SUJECION , no son sujetos de iva ,tal como lo son las ventas de bienes inmuebles o como estaban anteriormente las cooperativas hasta el 01-12-2014 , por lo que otra via seria que al no estar especificado como un servicio gravable en el numeral 4 del art 4 de la ley de iva, podria considerarse como un servicio NO SUJETO DE IVA por lo tanto nogravable.\n\nAnte la diatriba presentada recomendamos a todas las iglesias , primero que se inscriban en el RIF, y aquellos q ya estaban inscritas y no llevaban contabilidad en el 2014, declaren islr ejercicio 2014 como inactivo, ya que asi tendria posteriormente tiempo de hacer una sustitutiva mientras corrige el problema de la contabilidad\n\n\nMaria Rosa Campos\nAbogada\nMagister en Hacienda Publica y Administracion Tributaria Internacional', '2015-03-30 08:47:20', NULL, NULL),
(19, 'Compra y Venta  de Créditos Tributarios', 'Compra de créditos tributarios\n\nPara el pago de tu ISLR puedes optar por adquirir créditos tributarios de un tercero. De esta forma cumples cabalmente tu obligación tributaria aplicando la compensación de los créditos adquiridos. Estos créditos son adquiridos con descuento, representando para ti o tu empresa, un ahorro fiscal con sustento en la normal legal.\n\nCesión de créditos tributarios\n\nPero si tu caso es que tienes excedentes del ISLR que superan el importe de tus obligaciones de pago de impuesto, entonces lo más adecuado a los efectos financieros es que realices la cesión de tales créditos a un tercero. El descuento que se aplicará en la venta de tus créditos dependerá de la salud financiera de la empresa y de la referencia que la misma tenga. En todo caso, el descuento aplicado en la cesión es menor a la pérdida que por efecto de la inflación y el costo del dinero en el tiempo implica esperar hasta un año o más para poderlo aplicar en tu próxima declaración del ISLR.\n\nSi el excedente de impuesto es por retenciones del IVA no descontadas, es conveniente evaluar si esta condición es permanente y de incremento de los saldos no descontados, en donde la opción más rentable es la cesión del crédito.\n', '2015-03-30 08:56:03', NULL, NULL),
(20, 'Deducción de gastos por pasajes asociados a viajes al exterior para determinar el ISLR ', 'Respecto a los gastos de traslados de empleados, el artículo 66 del Reglamento (2003) de la ley de ISLR señala que: \n\nLa deducción por concepto de gastos de traslado de nuevos empleados, incluidos los gastos de su cónyuge e hijos menores, desde el último puerto de embarque hasta Venezuela y los de regreso, salvo cuando sean transferidos a una empresa matriz, filial o conexa, comprenderán tanto el importe de los pasajes y fletes de equipajes, como los gastos de embalaje y seguro de los efectos personales, los desembolsos por traslado al puerto y los gastos de hotel y alimentación hechos fuera del domicilio de tales empleados. \n\nEn los demás casos de gastos de traslado entre el exterior y Venezuela o viceversa, se admitirá la deducción de todos los gastos hechos en el país y sólo un cincuenta por ciento (50%) de los egresos correspondientes a pasajes y fletes de equipajes del propio empleado, director, gerente o administrador, siempre que tales gastos sean normales y necesarios para producir el enriquecimiento. \n\nParágrafo Único. Cuando las personas a que se refiere el numeral 7 del artículo 27 de la Ley, se hayan detenido en lugares intermedios entre el puerto extranjero de salida y Venezuela, se considerará como puerto de embarque aquél último donde tales personas permanecieron por más de cinco (5) días. En los casos de retorno se considerará como lugar de destino aquél donde las referidas personas permanezcan por más de cinco (5) días después de su salida del país.\n\n\nEl primer párrafo o encabezamiento del artículo previamente reproducido establece una excepción a la no imputación de costos y deducciones extraterritoriales al enriquecimiento de fuente territorial. \n\nEn el supuesto previsto en el segundo párrafo o primer aparte del artículo en comentarios, no hay excepción alguna a la norma de determinación de enriquecimiento global, sino el implícito reconocimiento del principio que se recoge en materia de transporte internacional, que el 50% del pasaje o flete reputa como uno de fuente territorial. En ese sentido a la renta neta de fuente territorial, se le admite el 50% del valor del pasaje y flete internacional por equipaje, siempre que el gasto de traslado del personal de la empresa sea normal y necesario para producir el enriquecimiento de ésta. En este supuesto, no se admiten como deducciones a la renta territorial, los gastos de hospedaje, alimentación u otros que sean pagados en el exterior, ello por cuanto éstas aplicaciones serían sin lugar a dudas extraterritoriales, aunque sean normales y necesarias para producir la renta.\n\nSe establece de esta forma que los pasajes y fletes de traslados desde el país y hacia el país de personal de la empresa cuando sean normales y necesarios para producir la renta, tienen dos componentes, un 50% es territorial y el restante es extraterritorial. De allí que el componente territorial es plenamente deducible a la renta de fuente territorial, mientras que la porción del gasto que se considera en dicha abstracción jurídica como no territorial, al no ser realizado en el país, no pude ser deducido para la renta territorial.\n\nA partir de la reforma de la Ley de ISLR del año 1999 se incorpora una excepción para los casos de los exportadores, a quienes se les admite como deducciones los gastos extraterritoriales en los términos previstos en el Parágrafo Séptimo del artículo 27 de dicha Ley, el cual reproducimos a continuación:\n\nParágrafo Séptimo. En los casos de exportación de bienes manufacturados en el país, o de prestación de servicios en el exterior, de fuente venezolana, se admitirá la deducción de los gastos normales y necesarios hechos en el exterior, relacionados y aplicables a las referidas exportaciones o actividades, tales como los gastos de viajes, de propaganda, de oficina, de exposiciones y ferias, incluidos los de transporte de los bienes a exhibirse en estos últimos eventos, siempre y cuando el contribuyente disponga en la República Bolivariana de Venezuela de los comprobantes correspondientes que respalden su derecho a la deducción.\n\nSe concluye entonces que el 50% de los pasajes y fletes de equipaje del personal que realice gestiones fuera del país asociados a la comercialización de exportaciones, será deducido a la renta territorial por ser estos territoriales conforme el principio de distribución que corresponde a estos conceptos, pero también lo será el 50% restante de dichos gastos, pero esta vez por la previsión del artículo 27 de la Ley respecto a los exportadores que pueden imputar a la renta territorial las deducciones extraterritoriales indicadas en su Parágrafo Séptimo.\n\nPor: Camilo London\n         Asesor tributario\n', '2015-03-30 08:58:32', NULL, NULL),
(21, 'El SNC reforma el Manual de Requisitos de Inscripcion ante el RNC en linea ', 'Haciendo honor al dicho “Errar es de humanos y de Sabios Rectificar”; nos encontramos que en la revisión que nuevamente realizamos del manual de requisitos legales, técnicos y financieros colocado en el portal web del SNC, que el ente público ha rectificado, sus lineamientos relacionados a la presentación de la información financiera, en lo cual podemos destacar que queda a potestad del Contador Público el uso o no del papel de seguridad, así como el visado; por otra parte ya no establecen el modelo de informe, sino que se remiten a mencionar que los mismos deben ser elaborados bajos los parámetros de la normas contables establecidas por  FCCPV, así mismo eliminaron la firma del contador en todas las hojas que incluían hasta los estados financieros; aclaran que la misma solo deberá presentarse en cada hoja del informe presentado por el profesional independiente actuante según el caso, por este lado se eliminan del informe el cuarto párrafo que incluía la declaración jurada del Contador en ejercicio independiente, que debía asumir la responsabilidad administrativa, civil y penal por la información presentada; pero al mismo tiempo impone el anexo de un documento, aparte del informe, que es exactamente la mencionada declaración jurada, pero esta vez solo ciñéndose a que el contador independiente, manifieste que ha planificado y ejecutado su labor bajo los parámetros de las normas contables emitidas por la FCCPV y conforme al referido manual emitido por el RNC y que autoriza a tal órgano público a comprobar tales hechos, en los papeles de trabajo que para tal fin deben existir y su responsabilidad ante su actuación será la que establezca las leyes de la República. Así mismo encontramos como documento anexo una declaración jurada de parte del representante legal y que también debe ser manifiesta por el contador de la empresa, donde ambos certifican que la información financiera presentada han sido revisadas y corresponde fielmente a las operaciones de la empresa, donde además incluyen su huella digital y autorizan al SNC comprobar la veracidad de dicha información. Es importante reseñar que es el Acta de Declaración Jurada y Consignación de Documentos que acompaña la entrega de la documentación digitalizada donde se hace manifiesto por parte del representante legal de la empresa que este asumirá la responsabilidad administrativa, civil y penal por la veracidad y copias fiel del original de la información presentada ante el respectivo órgano. Para finalizar en el portal encontraran, que dicho manual se acompaña con modelos de la forma como deben presentarse los estados financieros.', '2015-03-30 15:07:26', NULL, NULL),
(22, 'Tutorial Anexo IV para el RNC', 'Tutorial para Anexo IV-2  Registro Nacional de Contratistas,  cortesía del  Licenciado Jesús Daniel Duran\n\n<a href="https://www.youtube.com/watch?v=bGvLIz8NkSk">Ver el Video</a>', '2015-06-09 16:42:58', NULL, NULL),
(23, 'El IPC y la determinación del ISLR', '<a >Click para ir a la publicación</a>', '2015-07-06 16:12:27', NULL, NULL),
(24, 'CONSIDERACIONES SOBRE NUEVO REGIMEN DE RETENCION DEL IVA (P. A. SNAT/2015/0049)', '<b>Algunas conideraciones del nuevo Regimen de Retencion del IVA</b>\n\n Se especifica en  el  artículo 1 que los sujetos pasivos calificados como especiales, además de ser calificados, también deben ser notificados. \n\n Se incluye un nuevo supuesto de no aplicación de retenciones a aquellos proveedores que sean agentes de percepción de impuesto y trate operaciones de ventas de bebidas alcohólicas, fósforos,  cigarrillos, tabacos y otros derivados del tabaco; con lo cual se evita que un agente de percepción sea objeto de control por parte de sus clientes.\n\n\n También se modifica que los exportadores para no estar sujetos a retención de IVA, además de estar inscritos en el Registro de Exportadores,  deben haber realizado durante los últimos 6 meses  alguna solicitud de recuperación de IVA con ocasión a su actividad de exportación,  la cual no se encuentra regulada por lo dispuesto en el artículo  43 de la LIVA. \n\n Se incluye el supuesto de no aplicación de retención, para los proveedores cuyas ventas exentas o exoneradas representen un porcentaje mayor al 50% del total de sus ventas o ingresos durante el ejercicio fiscal anterior.\n\n\n El artículo 5,  se modifica el procedimiento de retención del 100% de IVA a las operaciones gravables en las que no se indica o desglosa en la factura, asumiendo ahora que el precio facturado incluye el IVA.\n\n La notas de débito se incluyen dentro de los supuestos de retención   del 100% cuando no cumplan los requisitos previstos en la Ley y sus reglamentos.\n\n\n Se aplicará la retención del 100% del IVA, cuando los datos de la factura no coincidan  con los datos del RIF, incluyendo su domicilio o no se encuentre inscrito dicho proveedor en el RIF.\n\n Se incluyen cambios en el artículo que especificaba el derecho a recuperación del IVA retenido no descontado, cuando las cantidades hubieran sido debidamente declaradas y enteradas por los agentes de retención y se reflejen en el estado de cuenta del contribuyente, conforme a lo establecido en el COT 2014.\n\n\n El articulo 16  reduce a  dos (02) días hábiles el plazo para entregar el comprobante de retención una vez finalizado el período de imposición del IVA a aquel en el cual se haya realizado la retención.  También se exige la indicar en el comprobante de retención  el Numero de Control de la factura  y ahora también el de la Nota de Débito.\n  \n Se suprime la obligación de los proveedores de identificar y discriminar en el  libro de ventas, las operaciones efectuadas con los agentes de retención.\n', '2015-08-26 10:34:22', NULL, NULL),
(25, 'Análisis: Reforma de la Ley de ISLR del 30/12/2015 Por: Camilo London  @eltributario', 'Reforma de la Ley de ISLR publicada en la Gaceta Oficial Extraordinaria Nro. 6.210 del 30/12/2015\nEn la Gaceta Oficial extraordinaria Nro. 6.210 del 30/12/2015 se publica la reforma parcial del texto de la Ley de ISLR. Esto mediante Decreto con Rango, fuerza y valor de Ley  Nro. 2.163 del Ejecutivo Nacional conforme las facultades especiales legislativas que le fueron conferidas mediante ley habilitante.\n\nLa reforma parcial de la normativa legal que regula a uno de los tributos nacionales de mayor relevancia y sin lugar a dudas el de mayor historia que se remonta en el país al año 1942, modifica los artículos 5, 32, 52, 86 (Ahora artículo 84); 173 (Ahora artículo 171) y 195 (Ahora artículo 193). \n\nDicha reforma suprime dos artículos, el 56 y 57. El artículo que refiere a la vigencia de la Ley también es reformado, artículo 200 que ahora pasa a se el 198. En razón de la supresión de dos artículos, desde el anterior artículo 58 y todos los demás que le siguen, quedan ahora con una numeración adecuada a dicha modificación del correlativo.\n\n\nLa exposición de motivos resulta en mi entender escueta, incluso basada en falsas premisas que deberán ser motivo de un franco debate nacional ante lo relevante de los cambios que se proponen con este instrumento legal tributario. Pero ese es tema de otro artículo aún en construcción. Centrémonos entonces en los aspectos meramente descriptivos de la reforma en cuestión:\n\n\n1) Nuevo régimen de disponibilidad de la renta\n\nCon la modificación de los artículos 5 y 32 de la Ley de ISLR, se realiza un cambio relevante a los criterios que la norma establecía para reconocer la disponibilidad de la renta a efectos de determinar el enriquecimiento neto a partir del cual determinar el tributo.\n\nLa reforma del artículo 5 de la Ley establece que algunas de las rentas que anteriormente eran consideradas disponibles en la oportunidad de ser éstas pagadas al beneficiario, ahora se considerarán disponibles en el ejercicio fiscal en que se realicen las operaciones que les producen, es decir, cuando se causen.\n\nSigue manteniéndose la excepción relativa a los casos de los enriquecimientos provenientes de la sesión de crédito y operaciones de descuento, cuyo producto sea recuperable en varias anualidades, donde éstas serán consideradas disponibles en dichos años, en forma proporcional al beneficio que corresponda. Así como los producidos bajo relación de dependencia y las ganancias fortuitas que se seguirán considerando disponibles en la oportunidad de ser pagadas. \n\nAsí, quedan ahora sujetos a la condición de gravados cuando se causen en el ejercicio, los enriquecimientos provenientes de la cesión del uso o goce de bienes, muebles o inmuebles, incluidos los derivados de regalías y demás participaciones análogas y los dividendos, los producidos por el libre ejercicio de profesiones no mercantiles y la enajenación de bienes inmuebles.\n\nPor otra parte la modificación del artículo 32 de la Ley, es una consecuencia directa de la reforma del artículo 5. Ello por cuanto en dicha norma se establecían las disposiciones que correspondían a la determinación del enriquecimiento neto de los casos de ingresos disponibles cuando eran cobrados, que ahora ya no tendrán aplicación. Se suprime, además, el Parágrafo Único del artículo 32 que establecía una norma que buscaba evitar la elusión en materia de deducciones causadas y no pagadas, aunque era incompleta al no prever un mecanismo proporcional para el que era afectado por el impago. \n\n2) Se incrementa el ISLR de los enriquecimientos por actividades bancarias, financieras, de seguro y reaseguro\n\nEl artículo 52 de la ley de ISLR se modifica para establecer un gravamen proporcional, (no progresivo), sobre los enriquecimientos por actividades bancarias, financieras, de seguro y reaseguro obtenidos por personas jurídicas o entidades domiciliadas en el país, el cual será  el 40%. Este resulta superior al tramo más gravoso de la tarifa aplicable a las demás personas jurídicas y sus asimiladas, que queda en 34%.\n\n3) Se  suprimen los artículos que desarrollaban el sistema de rebajas por inversiones\n\nSe suprimen los artículos 56 y 57 de la Ley de ISLR, que contenían el sistema de rebajas por inversiones aplicables en este tributo.\n\n4) Se incorpora la definición del abono en cuenta en la Ley y se indica de forma expresa la oportunidad en la cual realizar la retención del ISLR\n\nCon la modificación del artículo 86, (Ahora artículo 84), se incorpora en el texto de la ley la definición de “abono en cuenta”, que previo a la reforma estaba definido solo en el Reglamento de la Ley. Por otra parte se establece que la retención del ISLR deberá hacerse en el momento del pago o el abono en cuenta, según lo que ocurra primero.\n\n5) Se excluyen del ajuste por inflación fiscal a los sujetos pasivos especiales\n\nQuizás la más controversial de las reformas establecidas sobre el texto de la ley de ISLR sea la prevista con la modificación de su artículo 173, (Ahora artículo 171). Se trata de la exclusión del sistema del ajuste por inflación fiscal, a los contribuyentes que hayan sido designados por el SENIAT como Sujetos Especiales. Con ello, se suman nuevas exclusiones a las ya previstas en la reforma habilitante de noviembre de 2014 que para ese momento solo excluyó del sistema a las entidades bancarias, financieras, de seguros y reaseguro.\n\nHay que tener en cuenta que al ser eliminado el API fiscal ello causará un efecto que en nada depende del tamaño del contribuyente, ni de sus ingresos. Esto porque toda empresa, pequeña, mediana, grande, o muy grande, que tenga una posición monetaria neta activa generará una pérdida por inflación, que al no ser reconocida le hará pagar más impuesto del debido, pero si una de esas empresas tiene una posición monetaria neta pasiva generará una utilidad por inflación, que al no ser reconocida le hará pagar menos impuesto del debido. Es decir, que el efecto del API en la recaudación del tributo no está supeditado al tamaño de la empresa, sino a su posición monetaria neta. Por ello resulta absurda e inexplicable una exclusión general del API fiscal a los SPE, con la intención de incrementar la recaudación del impuesto.\n\nCon esta exclusión se desmonta de forma abrupta, un sistema complejo y plenamente justificado desde la perspectiva técnica en atención al principio de la capacidad contributiva,  el cual reconocía el efecto de la inflación en la renta neta real del contribuyente, con la plena convicción de que el resultado histórico o nominal no era una fuente objetiva de la capacidad económica del sujeto pasivo, por lo que era necesaria la corrección monetaria para adecuar la base imponible antes de aplicar la determinación del ISLR.\n\nLa reforma plantea además una presunta violación al principio de justicia y legalidad tributaria. En primer término se establece un régimen diferenciado entre los sujetos pasivos especiales y los demás contribuyentes, que carece de un sustento objetivo. Siendo entonces una distinción caprichosa y arbitraria que podría imponer regímenes tributarios distintos, a sujetos pasivos con la misma capacidad económica, contrario a la justicia que debe caracterizar al tributo.\n\nCon respecto a la legalidad, se debe tener en cuenta que la designación de los llamados Sujetos Pasivos Especiales (SPE) se da por efecto de un acto administrativo del SENIAT cuando se cumplen unos supuestos mínimos relativos al nivel de ingreso conforme lo prevé la normativa jurídica, pero tal calificación no es automática al lograrse dicho nivel de ingresos. Es decir, ser un SPE no opera de pleno de derecho, sino que depende de la manifestación de voluntad del ente Administrativo una vez que se cumplen unos supuestos relativos a la cuantía de los ingresos brutos que esta debe verificar. Con esto queda supeditado el régimen fiscal del ISLR de un contribuyente, a un acto de la Administración Tributaria y no a un supuesto de Ley objetivo, con lo cual podría entenderse que se estaría vulnerando el principio de legalidad tributaria de rango constitucional.\n\n6) Se delega en el SENIAT el régimen contable para aplicar la exclusión del API fiscal y se modifican las normas para la declaración estimada de rentas de los excluidos\n\nQueda nuevamente establecido que el SENIAT definirá las normas contables que deberán aplicar los contribuyentes excluidos para determinar el ISLR una vez suprimidos del API fiscal. Esto ya ocurrió con el sector bancario y de seguros con la reforma del año 2014. Así, se delega en un acto normativo sublegal una materia que atañe a la determinación misma de la obligación tributaria, lo cual excedería la disposición constitucional relativa a la reserva legal tributaria.  \n\nLo nuevo del artículo 195 de la Ley, (ahora artículo 193), es que para efectos de la declaración estimada de rentas del ejercicio fiscal que se inicie bajo la vigencia de la nueva reforma, los contribuyentes excluidos del API fiscal, deberán excluir igualmente el efecto de este en su renta del ejercicio inmediatamente anterior a efectos de cuantificar el anticipo del ISLR.\n\n7) Entrada en vigencia de la reforma\n\nEsta reforma entrará en vigencia el día siguiente de la publicación en la Gaceta Oficial, la cual fue publicada el 30 de diciembre de 2015.\n\n8) Lo anunciado pero no desarrollado\n\nSe indica en la exposición de motivos la eliminación de las eximentes de responsabilidad tributaria, previstas en el artículo 171, (Ahora artículo 169), pero ello no fue establecido en articulado de la reforma, siendo que se mantienen en el texto reimpreso con la única variación del número de artículo por el efecto de la supresión de los artículos 56 y 57.\n\nLo que viene…\n\nSobre los efectos de esta reciente reforma de la Ley de ISLR queda mucho por decir y evaluar respecto a sus consecuencias para la economía del país, para las inversiones que son requeridas para reflotar a la producción nacional, para la necesaria seguridad jurídica que atraiga capitales y emprendimiento productivos, y en general para el desarrollo de un sistema tributario nacional armónico que acate fielmente a los preceptos contenidos en los artículos 316 y 317 de la Constitución Nacional. \n\n\nCamilo London\n\n@eltributario\n', '2016-01-07 11:45:21', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE `tareas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `cliente` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `prioridad` int(11) NOT NULL,
  `estatus` int(11) NOT NULL,
  `progreso` int(11) DEFAULT NULL,
  `responsable` int(11) NOT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`id`, `titulo`, `cliente`, `descripcion`, `prioridad`, `estatus`, `progreso`, `responsable`, `fecha_inicio`, `fecha_fin`) VALUES
(1, 'LEXULIGHT', 25, ' ESPERANDO SOPORTES DE LA CONSTRUCCION EN PROCESO.', 1, 2, 10, 11, '2015-09-01', NULL),
(2, 'METAL PROMECA', 15, 'POR ARMAR ARCHIVO Y CUADRO DE EXCELL ', 1, 0, 0, 8, '2015-09-02', NULL),
(3, 'ALEXANDRAS', 16, 'SE LE SOLICITO UNA SERIE DE SOPORTES, LLAMAR PARA RECORDARLES ', 1, 1, 0, 7, '2015-08-27', '2015-09-01'),
(4, 'CABUMAICA', 25, ' LOS INGRESOS SE COLOCARON PARA NO DECLARAR EN CERO ', 1, 1, 50, 7, '2015-07-01', NULL),
(5, 'PROYEG 520', 17, ' EN ESPERA DE ANALISIS RNC', 1, 3, 100, 7, '2015-08-24', '2016-08-11'),
(6, 'RNC', 6, 'ESPERANDO DEPOSITO DEL RNC ', 2, 3, 100, 9, '2015-08-31', '2016-08-10'),
(7, 'TAREA DE PRUEBA 1', 6, ' TAREA DE PRUEBA 1', 1, 1, 84, 8, '2016-08-11', '2016-09-15'),
(8, 'TAREA DE PRUEBA 2', 10, ' TAREA DE PRUEBA 2', 1, 0, 23, 6, '2016-08-11', '2016-08-22'),
(9, 'TAREA DE PRUEBA 3', 9, ' TAREA DE PRUEBA 3', 0, 0, 0, 8, '2016-08-11', '2016-08-15'),
(10, 'Prueba', 16, ' ', 0, 0, 0, 11, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `uid` int(11) NOT NULL,
  `unique_id` varchar(23) NOT NULL,
  `primer_nombre` varchar(80) NOT NULL,
  `segundo_nombre` varchar(80) DEFAULT NULL,
  `primer_apellido` varchar(80) DEFAULT NULL,
  `segundo_apellido` varchar(80) DEFAULT NULL,
  `tipo` int(1) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `permissions` int(11) NOT NULL,
  `encrypted_password` varchar(256) NOT NULL,
  `salt` varchar(10) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`uid`, `unique_id`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `tipo`, `id_cliente`, `email`, `permissions`, `encrypted_password`, `salt`, `created_at`, `updated_at`) VALUES
(1, '15', 'admin', '', '', '', 0, NULL, 'admin', 777, '2311@dmin', '0', '2015-02-09 00:00:00', NULL),
(6, '57ac859544cc94.37600599', 'FRANCISCO', '', 'GONZÁLEZ', '', 3, NULL, 'FGONZALEZ@SERVITELCONTABLE.COM', 0, 'N3IERrUhd3Ub6jzSc++7DkVKqg5v3gJToCFPqba7wiKiBTXYnFXgQGlbTXwgB3QM4vXGWb2ZVLL/fOqvEGoufvT0a/xvHmROHuKAH1Xjd6Subw/zdrzXrIsuABAx/4CQ', '7ecc90a144', '2016-08-11 09:33:01', NULL),
(7, '57ac85c1bc1df3.04138462', 'ELVIS', '', 'GARCIA', '', 1, NULL, 'EGARCIA@SERVITELCONTABLE.COM', 0, '5FhJDiJ2ylgu66twQvXLH92n21ByffkrUFEMdxG57zTDpWe0qOwuH8mlruL7QLDMIY5J+Bg/mQhqRoyrPbTVE8tc02nifHw/b2Sra4yzfNO+M4FLmQZxL5dhjHN+Llb3', '663258ae15', '2016-08-11 09:33:45', NULL),
(8, '57ac85e00f3db3.19548033', 'ELINET', '', 'ATACHO', '', 1, NULL, 'EATACHO@GMAIL.COM', 0, 'uPOTMjVQBOdsGWneSkkMNTgInUz2ED3YNMghH3Aa3hxONtVeoidBECyt4Eo4kxc36YgXn2q4WHvJ/oGSeMHA+mcxX9xzKz/btNyLnDjsu8sJOxSRxa6REWrw/WfQdi1v', 'feeefd6c43', '2016-08-11 09:34:16', NULL),
(9, '57ac86098abee1.56426077', 'CARMEN', 'PAOLA', 'MAVAREZ', '', 1, NULL, 'CMAVAREZ@SERVITELCONTABLE.COM', 0, 'zsO7o9e090P6AegoaZata8aWMoQERCvvAVRnc0BsgpKLghUG0+3AnrvXwO5a/8LNmkeVFhMb61KfdzcryzyfyI0oXfkVnfAq/ZKQfkZDES/cU5zMwUBsAZl7U6ZrJwCd', 'dcb7fbfbde', '2016-08-11 09:34:57', '2016-11-15 11:46:46'),
(10, '57ac8628d6d6d9.87278090', 'YONARA', '', 'GARCIA', '', 1, NULL, 'YGARCIA@GMAIL.COM', 0, 'B49dHduAIC9fOK/w+ID2dP3ZKR2ZKbqj6oCYztXkWR6DxS9wHi7y1z7O/7eibVreEuZmRhHdNvLqMrl4zc05ouXtl9xE7SuhRH7X0qGwQd/FtTnfxgkWLtQPQqHDRrla', '678155fd53', '2016-08-11 09:35:28', NULL),
(11, '57ad281760cb37.43634467', 'AUGUSTO', '', 'JARA', '', 1, NULL, 'AUGUSTOTAJAR@GMAIL.COM', 0, '5OwS3tUlDVwIDM5aalCER3w2CVIakAuPScsUhhACEDXvweh9WMWw6gGDRSx0ZPiTg3mPEhxHjbfxCnzg/FbLv/V9J4NYBUTs8BxI7WNCqM/vepW58yKZLzqJPzPrfRil', '36f5ec70c6', '2016-08-11 21:06:23', '2016-09-30 08:05:46'),
(12, '581b4a337f3c15.35161712', 'Prueba, C.A.', NULL, NULL, NULL, 2, NULL, 'prueba@gmail.com', 0, 'oAheu7SlaaRCE4HsIfBy/W1ABG9TsuvttxxRiDNNyRxmyt3m4iiRW/uUivu8OzcofBMJpnDxiU6Rx2t0+7ieNPj3QSkgS0icL23ek25+Bl9bW9A7ABialxTt/YphfDMx', '5a6a4f34ac', '2016-11-03 10:01:15', NULL),
(16, '581b58ffb82846.36510348', 'Cliente', 'Prueba', NULL, '', 2, 25, 'cliente@gmail.com', 0, 'H9GNFwrviPS5GKr5foX8+JTwtTHMtnLTSobgZypoWD4evuJCuSuOsJl23hu/pH6JSRN3tjfpAe2l85kxaBdamhYNBJvPb2U3EdGL6sVRDZw0jjkCgf+ww5Ql+5hFuy+o', 'eff86f59c9', '2016-11-03 11:04:23', '2016-11-07 12:28:47'),
(17, '582b4b480b0173.95415573', '', NULL, NULL, NULL, 2, 26, '', 0, '3n9VEToArFOg7oLdi6wjX46zf+pQF5MmhZCLtf08LMpLSo52Y4fMDAD1K4/1CAmU03/CNYtTYZ5DdHCCziZJoyj87/W9j/hasm8F4zSRGUHVa/U5zpn3O3YB8Z06EUUW', '15aab846e4', '2016-11-15 13:22:08', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `archivos`
--
ALTER TABLE `archivos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tarea_id` (`tarea`),
  ADD KEY `usuario_id` (`usuario`);

--
-- Indices de la tabla `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rif` (`rif`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `responsable` (`responsable`),
  ADD KEY `cliente` (`cliente`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `unique_id` (`unique_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `clienteIndex` (`id_cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `archivos`
--
ALTER TABLE `archivos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT de la tabla `tareas`
--
ALTER TABLE `tareas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `archivos`
--
ALTER TABLE `archivos`
  ADD CONSTRAINT `archivos_ibfk_1` FOREIGN KEY (`tarea`) REFERENCES `tareas` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `archivos_ibfk_2` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`uid`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD CONSTRAINT `fk_cliente` FOREIGN KEY (`cliente`) REFERENCES `clientes` (`id`),
  ADD CONSTRAINT `fk_usurio` FOREIGN KEY (`responsable`) REFERENCES `usuarios` (`uid`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `id_ciente` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
