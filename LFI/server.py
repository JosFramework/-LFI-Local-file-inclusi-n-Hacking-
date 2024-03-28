import webbrowser
import subprocess

try:
    # Tu código principal aquí
    while True:
        pass 
        # Definir la ruta al archivo index.php
        ruta_index_php = "index.php"

        # Iniciar el servidor local en segundo plano
        proceso_servidor = subprocess.Popen(["php", "-S", "localhost:8000"])

        webbrowser.open('http://localhost:8000/index.php')

        proceso_servidor.wait()

except KeyboardInterrupt:
    print("\nAdiós. Gracias por usar el programa.")
