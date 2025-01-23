# Partimos de una base oficial de python
FROM python:alpine

# El directorio de trabajo es desde donde se ejecuta el contenedor al iniciarse
WORKDIR /app

# Copiamos todos los archivos del build context al directorio /app del contenedor
COPY . /app

# Ejecutamos pip para instalar las dependencias en el contenedor
RUN pip install --trusted-host pypi.python.org -r requirements.txt

# Indicamos que este contenedor se comunica por el puerto 80/tcp
EXPOSE 80

# Declaramos una variable de entorno
ENV NAME World

# Ejecuta nuestra aplicación cuando se inicia el contenedor
CMD ["python", "app.py"]