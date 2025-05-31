<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tema;

class TemaSeeder extends Seeder
{
    public function run(): void
    {
        // 1) COMPONENTES DE COMPUTADORAS
        Tema::create([
            'titulo'      => 'COMPONENTES DE COMPUTADORAS',
            'descripcion' => <<<'DESC'
Hardware
• Descripción: Es la parte física de un sistema de cómputo, que incluye componentes como el monitor, teclado, mouse, CPU, memoria y disco duro. Todo lo que se puede ver y tocar.

Software
• Descripción: Es la parte intangible, compuesta por programas e instrucciones que indican al hardware qué hacer. Ejemplo: sistema operativo, aplicaciones y programación.

Tipos de Software más comunes
• Sistema operativo: controla el hardware y ofrece una interfaz para la interacción con el usuario.
• Aplicaciones: programas que realizan tareas específicas, como edición de texto, presentaciones, videojuegos, etc.
• Programación: el proceso de crear software mediante lenguajes de programación.

Unidades de Medida
• Bit: unidad básica de información, puede ser 0 o 1.
• Byte: 8 bits; almacena un solo carácter de texto.
• Kilobyte (KB), Megabyte (MB), Gigabyte (GB), Terabyte (TB): unidades mayores para medir almacenamiento de datos.

Ciclo de procesamiento
1. Entrada: el sistema recibe datos desde dispositivos de entrada (teclado, mouse).
2. Procesamiento: la CPU procesa los datos con las instrucciones del software.
3. Salida: el sistema envía los resultados a dispositivos de salida (monitor, impresora).

Clasificación de las Computadoras
• Supercomputadoras: potencia extremadamente alta, uso en cálculos científicos. Ejemplos: IBM Summit, Fugaku.
• Macrocomputadoras: potencia alta, uso en procesamiento intensivo. Ejemplos: IBM zSeries, Unisys.
• Minicomputadoras: potencia moderada, uso en tareas empresariales y control. Ejemplos: VAX de DEC, IBM AS/400.
• Microcomputadoras: baja potencia, uso general como PCs, laptops, smartphones. Ejemplos: Raspberry Pi, Arduino, ESP8266.

AWS (Amazon Web Services)
• Descripción: infraestructura global que utiliza servidores físicos de marcas como Dell, HP y Supermicro distribuidos en centros de datos en varias regiones geográficas.
DESC
        ]);

        // 2) SISTEMAS OPERATIVOS 1
        Tema::create([
            'titulo'      => 'SISTEMAS OPERATIVOS 1',
            'descripcion' => <<<'DESC'
¿Qué es un Sistema Operativo (SO)?
Es el programa que gestiona el hardware y permite ejecutar el resto de los programas en una computadora. Sin un sistema operativo, el equipo no puede funcionar.

Arquitectura básica de un SO

Objetivo principal: Facilitar el uso del sistema y ejecutar programas eficientemente.
Objetivos secundarios: Uso eficiente de CPU, memoria y periféricos, detección y corrección de errores, facilidad para actualizarse, bajo consumo y protección del sistema.

Tareas del Sistema Operativo
• Gestión de memoria  
• Control de procesos  
• Manejo de archivos  
• Gestión de dispositivos de entrada y salida  
• Protección de recursos del sistema  

Protección en el Sistema Operativo
Modo Kernel y Modo Usuario para separar tareas críticas y de usuario.
Evita que un programa afecte a otros o acceda directamente a recursos no autorizados.
El procesador realiza interrupciones periódicas para repartir el uso.
La memoria impide acceso no autorizado entre programas.
El hardware bloquea accesos directos a periféricos.

Tipos de Sistemas Operativos
• Sistemas Abiertos: permiten modificar el código (ej: Linux, Unix).
• Sistemas Cerrados: el código no está disponible (ej: Windows, macOS).

Software de Aplicación
Programas diseñados para realizar tareas específicas.

Categorías comunes:
• Aplicaciones de negocio
• Aplicaciones de utilería
• Aplicaciones personales
• Aplicaciones de entretenimiento

Lenguajes de Programación
• Son formas estructuradas para comunicar instrucciones a una máquina.
• Se usan para crear programas, expresar algoritmos o controlar sistemas físicos y lógicos.
• Incluyen símbolos y reglas (sintaxis y semántica).
• El proceso completo de escribir, probar y mantener código se llama programación.
DESC
        ]);

        // 3) SISTEMAS OPERATIVOS 2
        Tema::create([
            'titulo'      => 'SISTEMAS OPERATIVOS 2',
            'descripcion' => <<<'DESC'
¿Qué es un Sistema Operativo?
Es un software fundamental que actúa como intermediario entre el hardware y los programas. Coordina y controla los recursos del sistema para que los programas se ejecuten y el usuario pueda interactuar con la computadora.

Gestión de Dispositivos de Entrada/Salida  
El sistema operativo administra los dispositivos conectados como teclados, ratones, pantallas e impresoras. Detecta, inicializa y coordina el acceso a estos dispositivos para que se comuniquen eficientemente con el sistema.

Interfaz de Usuario  
Permite la interacción con la computadora. Puede ser:  
• GUI (interfaz gráfica): ventanas, íconos, menús.  
• CLI (línea de comandos): comandos escritos.  
• Facilita la ejecución de programas y la gestión de archivos.

Funciones Principales del Sistema Operativo  
1. Gestión de seguridad: protege datos y recursos del sistema. Control de accesos, autenticación, encriptación, detección de amenazas.  
2. Gestión de procesos: crea, ejecuta y finaliza procesos. Asigna recursos como CPU y memoria.  
3. Gestión de memoria: asigna y libera espacio en memoria (RAM y disco). Utiliza técnicas como paginación, segmentación y memoria virtual.  
4. Gestión de archivos: organiza archivos y directorios en dispositivos como discos duros y USB. Permite crear, leer, modificar y borrar archivos.

Arquitectura Básica de un Sistema Operativo  
• Núcleo (Kernel): controla el hardware y coordina la ejecución de los programas.  
• Gestor de procesos: administra la ejecución y planificación de procesos.  
• Gestor de memoria: maneja el uso de RAM y memoria secundaria.  
• Sistema de archivos: organiza y permite el acceso a los archivos.  
• Gestor de dispositivos: administra el acceso a periféricos de entrada/salida.  
• Interfaz de usuario: permite al usuario comunicarse con el sistema, por medio de GUI o CLI.
DESC
        ]);

        // 4) BASE DE DATOS
        Tema::create([
            'titulo'      => 'BASE DE DATOS',
            'descripcion' => <<<'DESC'
Introducción a las Bases de Datos  
Inicialmente, se usaban archivos planos que dificultaban la administración de datos. Las bases de datos surgieron para organizar información de forma eficiente y accesible.

¿Qué es una base de datos?  
Conjunto de datos relacionados, almacenados sistemáticamente para su uso posterior.  
Ejemplo: una biblioteca puede ser vista como una base de datos de libros indexados.

Sistema de Base de Datos  
Sistema computarizado para almacenar, recuperar y actualizar información importante para personas o instituciones.

Sistema de Gestión de Bases de Datos (SGBD o DBMS)  
Software que actúa como interfaz entre la base de datos, el usuario y las aplicaciones.

Funciones principales:  
• Crear y estructurar bases de datos (DDL)  
• Manipular datos (insertar, eliminar, modificar, consultar) usando DML  
• Almacenar grandes volúmenes de datos de forma segura  
• Controlar acceso simultáneo y mantener coherencia  

Ventajas de usar una base de datos  
• Evita la redundancia de datos  
• Asegura la consistencia  
• Permite compartir información  
• Mejora la integridad de los datos  

Roles clave: Administrador de Base de Datos (DBA)  
Responsable de:  
• Seguridad y rendimiento  
• Mantenimiento y respaldo  
• Control de acceso de usuarios  

Modelo Entidad-Relación (E-R)  
Base del diseño de bases de datos relacionales.  

Conceptos clave:  
• Entidad: objeto o concepto real (ej. Libro, Estudiante)  
• Atributo: característica de la entidad (ej. nombre, código)  
• Llave primaria (PK): identifica de forma única cada registro  
• Llave foránea (FK): conecta una entidad con otra  
• Relación: vínculo entre entidades  

Tipos de Relaciones  
• Relación 1 a 1: un registro se asocia con uno solo  
• Relación 1 a muchos (1 a *): un registro se relaciona con varios  
• Relación muchos a muchos (* a *): varios registros en ambas tablas se relacionan entre sí
DESC
        ]);

        // 5) REDES PARA PRINCIPIANTES
        Tema::create([
            'titulo'      => 'REDES PARA PRINCIPIANTES',
            'descripcion' => <<<'DESC'
¿Qué es una red de computadoras?  
Una red de computadoras es un conjunto de equipos (computadoras, servidores, impresoras, dispositivos móviles, etc.) conectados entre sí para compartir recursos, intercambiar datos y comunicarse.

Tipos de redes  
1. LAN (Local Area Network):  
   • Red local, como la de una casa, oficina o escuela. Tiene cobertura limitada.  
2. WAN (Wide Area Network):  
   • Conecta redes que están en distintas ubicaciones geográficas (ej. el internet).  
3. MAN (Metropolitan Area Network):  
   • Cubre una ciudad o un campus grande.  
4. PAN (Personal Area Network):  
   • Red de corto alcance, como la conexión entre tu celular y audífonos Bluetooth.

Componentes básicos de una red  
• Nodo: cada dispositivo conectado a una red.  
• Router: encaminador que conecta distintas redes (ej. tu casa con internet).  
• Switch: dispositivo que conecta varios equipos dentro de una LAN.  
• Servidor: equipo que ofrece servicios o recursos a otros equipos (clientes).  
• Cliente: dispositivo que accede a recursos del servidor.

Tipos de conexión  
• Alámbrica (por cable): usa cables Ethernet. Es estable y rápida.  
• Inalámbrica (Wi-Fi): usa señales de radio. Más práctica, pero menos estable.

Beneficios de usar redes  
• Compartir archivos y recursos (como impresoras).  
• Acceso remoto a información.  
• Mejor comunicación interna.

Protocolos de red  
Son reglas que definen cómo se comunican los dispositivos. Los más comunes son:  
• TCP/IP: protocolo base de internet.  
• HTTP/HTTPS: para acceder a sitios web.  
• FTP: para transferencia de archivos.  
• SMTP/IMAP/POP3: para correo electrónico.  
• DNS: traduce nombres de dominio a direcciones IP.

Dirección IP  
Es el número que identifica a un dispositivo en una red.  
Ejemplo: 192.168.1.1  
• IPv4: tiene 4 bloques numéricos.  
• IPv6: más largo, creado para soportar más dispositivos.

Modelo OSI (Open Systems Interconnection)  
Guía que divide la comunicación en redes en 7 capas, de abajo hacia arriba:  
1. Física (hardware, cables)  
2. Enlace de datos (conexión directa)  
3. Red (rutear, IP)  
4. Transporte (TCP, UDP)  
5. Sesión (mantiene activa la comunicación)  
6. Presentación (traducción de datos)  
7. Aplicación (programas como navegadores)
DESC
        ]);

        // 6) BASES NÚMERICAS
        Tema::create([
            'titulo'      => 'BASES NÚMERICAS',
            'descripcion' => <<<'DESC'
¿Qué es una base numérica?  
Es el sistema en que se representa un número; dependiendo de cuántos símbolos (dígitos) diferentes se pueden usar. Cada posición del número representa una potencia de la base.

Bases más comunes:  
1. Base Decimal (Base 10):  
   • Es el sistema que usamos a diario. Usa 10 dígitos: del 0 al 9.  
   • Ejemplo: 473 = 4×10² + 7×10¹ + 3×10⁰  
2. Base Binaria (Base 2):  
   • Usada por las computadoras. Solo usa 2 dígitos: 0 y 1.  
   • Ejemplo: 1011 = 1×2³ + 0×2² + 1×2¹ + 1×2⁰ = 11 en decimal.  
3. Base Octal (Base 8):  
   • Usa 8 dígitos: del 0 al 7.  
   • Ejemplo: 157₈ = 1×8² + 5×8¹ + 7×8⁰ = 111 en decimal.  
4. Base Hexadecimal (Base 16):  
   • Usa 16 símbolos: del 0 al 9 y las letras A a F (donde A=10, B=11, …, F=15).  
   • Ejemplo: 1F₁₆ = 1×16¹ + 15×16⁰ = 31 en decimal.

Conversión entre bases:  
• De Binario a Decimal: multiplica cada dígito binario por 2 elevado a su posición (de derecha a izquierda) y suma.  
  – Ejemplo: 1101 → 1×2³ + 1×2² + 0×2¹ + 1×2⁰ = 13.  
• De Decimal a Binario: divide el número entre 2 y guarda los residuos. El resultado se lee de abajo hacia arriba.  
  – Ejemplo: 13 → 1101.  
• De Decimal a Octal o Hexadecimal: mismo método que con binario, pero dividiendo entre 8 o 16 respectivamente.  
• De Binario a Hexadecimal: agrupa los bits de 4 en 4 desde la derecha y reemplaza con el valor hexadecimal.  
  – Ejemplo: 10101110 → AE₁₆.

Importancia en informática:  
Las computadoras trabajan internamente con base binaria. Las bases octal y hexadecimal se usan como forma más compacta de representar binarios en programación, redes, electrónica, etc.
DESC
        ]);

        // 7) CISCO PACKET TRACER
        Tema::create([
            'titulo'      => 'CISCO PACKET TRACER',
            'descripcion' => <<<'DESC'
¿Qué es Cisco Packet Tracer?  
Es un simulador de redes desarrollado por Cisco que permite a estudiantes y profesionales diseñar, configurar y probar redes sin necesidad de hardware físico.

¿Por qué se usa Packet Tracer?  
• Crear topologías de red (conexiones entre routers, switches, PCs, etc.)  
• Simular tráfico de red para ver cómo se comportan los paquetes de datos  
• Practicar comandos en línea de comandos (CLI) de routers y switches  
• Aprender conceptos de redes como direccionamiento IP, protocolos, VLANs, etc.  
• Prepararse para certificaciones como Cisco CCNA

Ventajas del simulador:  
• Gratuito para estudiantes de Cisco Networking Academy  
• Permite experimentar con configuraciones sin dañar equipos reales  
• Compatible con sistemas Windows, Linux y macOS  
• Incluye dispositivos virtuales con interfaces reales y funcionales  
• Modo en tiempo real y modo de simulación para observar paso a paso el flujo de datos

Componentes básicos del entorno de Packet Tracer:  
• Área de trabajo: espacio donde se colocan los dispositivos  
• Barra de dispositivos: incluye routers, switches, PCs, cables, etc.  
• Ventana de configuración: permite cambiar nombres, direcciones IP, etc.  
• Pestañas de simulación: para ver cómo viajan los paquetes  
• CLI (Command Line Interface): para ejecutar comandos en routers y switches

Primeros pasos recomendados:  
• Colocar dos PCs y conectarlas con un cable cruzado  
• Asignar direcciones IP a cada PC  
• Probar conectividad con el comando ping  
• Explorar cómo añadir routers y switches para formar una red más compleja
DESC
        ]);

        // 8) SUBNETING
        Tema::create([
            'titulo'      => 'SUBNETING',
            'descripcion' => <<<'DESC'
¿Qué es una dirección IP?  
Una dirección IP (Internet Protocol) es un número único que identifica a un dispositivo dentro de una red. Funciona como la "dirección postal" del equipo para enviar y recibir datos.

Formato de IPv4:  
Consta de 4 bloques de números separados por puntos, cada uno de 0 a 255.  
Ejemplo: 192.168.1.1

Estructura de una IP:  
• Parte de red: identifica la red a la que pertenece el dispositivo.  
• Parte de host: identifica al dispositivo dentro de esa red.

¿Qué es una máscara de subred?  
La máscara de subred define cuántos bits de la dirección IP corresponden a la red y cuántos al host.  
Ejemplo: 255.255.255.0 indica que los primeros 24 bits son red y los últimos 8 son host.

CIDR (Classless Inter-Domain Routing):  
Forma de expresar la máscara de subred con un “/” seguido del número de bits para red.  
Ejemplo: /24 equivale a 255.255.255.0

Subnetting (subredes):  
Es el proceso de dividir una red grande en subredes más pequeñas.

Ventajas:  
• Mejora la organización y seguridad.  
• Reduce el tráfico local.  
• Permite asignar rangos IP más eficientes.

Cálculos comunes en subnetting:  
• Número de subredes posibles  
  – Fórmula: 2ⁿ donde n es el número de bits tomados del host para subred.  
• Número de hosts por subred  
  – Fórmula: 2ᵏ - 2 donde k es el número de bits restantes para host.  

Ejemplo práctico:  
IP: 192.168.1.0/26  
• 26 bits para red → 6 bits para host  
• Hosts por subred: 2⁶ - 2 = 62  
• Subredes posibles desde /24 a /26: 2⁽²⁶⁻²⁴⁾ = 4 subredes

Clases de direcciones IP (clásico):  
• Clase A: 1.0.0.0 a 126.255.255.255 → redes grandes  
• Clase B: 128.0.0.0 a 191.255.255.255 → redes medianas  
• Clase C: 192.0.0.0 a 223.255.255.255 → redes pequeñas  
• Clase D: 224.0.0.0 a 239.255.255.255 → multicast  
• Clase E: 240.0.0.0 a 255.255.255.255 → reservado

Direcciones especiales:  
• 127.0.0.1 → localhost (autocomunicación)  
• 0.0.0.0 → dirección no asignada  
• 255.255.255.255 → broadcast a todos los dispositivos
DESC
        ]);

        // 9) INICIO EN LA PROGRAMACIÓN
        Tema::create([
            'titulo'      => 'INICIO EN LA PROGRAMACIÓN',
            'descripcion' => <<<'DESC'
Lenguajes de programación web – Guía básica para principiantes  
El desarrollo web se divide en dos grandes áreas:  
• Front-end: lo que el usuario ve e interactúa en el navegador.  
• Back-end: lo que ocurre “detrás” del sitio: lógica, bases de datos, servidor.

1. HTML (HyperText Markup Language)  
• No es un lenguaje de programación, sino de marcado.  
• Define la estructura y contenido de las páginas web.  
• Usa etiquetas como <h1>, <p>, <img>, <a>, etc.  
• Todos los sitios web lo usan como base.

2. CSS (Cascading Style Sheets)  
• Define la apariencia visual del HTML (colores, fuentes, distribución).  
• Usa selectores y propiedades.  
• Permite hacer sitios responsivos y visualmente atractivos.

3. JavaScript (JS)  
• Lenguaje de programación del lado del cliente.  
• Permite añadir interactividad a los sitios web (formularios dinámicos, sliders, etc.).  
• Funciona en todos los navegadores modernos.  
• También puede usarse en el back-end con Node.js.

4. PHP (Hypertext Preprocessor)  
• Lenguaje del lado del servidor.  
• Muy usado para generar contenido dinámico.  
• Compatible con bases de datos (como MySQL).  
• Usado por plataformas como WordPress, Joomla o Drupal.

5. Python  
• Lenguaje versátil, usado también en desarrollo web (principalmente con Django o Flask).  
• Sintaxis limpia y fácil de aprender.  
• Ideal para desarrollo rápido y proyectos con inteligencia artificial o análisis de datos.

6. Java  
• Usado para aplicaciones web complejas y de alto rendimiento.  
• Muy seguro y robusto.  
• Utiliza frameworks como Spring para web empresarial.

7. Ruby  
• Lenguaje simple y elegante.  
• Ruby on Rails es su framework más conocido para desarrollo web.  
• Permite crear aplicaciones de manera rápida con menos código.

8. TypeScript  
• Superset de JavaScript que añade tipado estático.  
• Mejora la escalabilidad y mantenibilidad de aplicaciones grandes.  
• Usado en conjunto con frameworks como Angular.

9. SQL (Structured Query Language)  
• Lenguaje para interactuar con bases de datos relacionales.  
• Permite consultar, insertar, actualizar y eliminar datos.  
• Es usado por prácticamente todos los lenguajes del lado del servidor.
DESC
        ]);
    }
}
