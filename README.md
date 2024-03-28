<h1>LFI (Local File Inclusion) </h1>
Es una vulnerabilidad de seguridad en aplicaciones web que permite a un atacante leer archivos locales del servidor a través de la inclusión de archivos. Esto puede ocurrir cuando una aplicación web 
permite que los usuarios ingresen nombres de archivos o rutas de archivos como entrada y luego incluye estos valores directamente en el código fuente de la página web sin una validación adecuada.

<h1>Use</h1>
<span>Este codigo proporciona una simulacón de una vulnerabilidad (Web) de tipo LFI, para usarlo solo descarga el RAR 
o clona el repositorio en tu terminal y luego ejécuta el server.py y empieza a navegar por las rutas de la web
pasando parámetros a la url.</span>

<h3>Clone repository </h3>
       
    git clone https://github.com/JosFramework/Local-File-Inclusion.git

<h3>Enter on carpet </h3>

    cd Local-File-Inclusion/
    
    cd LFI


<h3>Execute this server (PHP) width python</h3>

    python3 server.py
