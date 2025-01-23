FROM node:18-alpine

# Configuramos el directorio de trabajo
WORKDIR /app

# Copiamos los archivos package*.json que contienen las dependencias
COPY package*.json ./

# Instalamos las dependencias
RUN npm install

# Copiamos el código de la aplicación
COPY . .

# Indicamos el puerto que usará la aplicación por defecto
EXPOSE 3000

# Iniciamos la aplicación
CMD ["node", "server.js"]