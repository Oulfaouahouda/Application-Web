# une image nginx officielle
FROM nginx:alpine

# fichiers de l'application dans le répertoire de l'image Docker
COPY . /usr/share/nginx/html

# le port sur lequel Nginx écoute
EXPOSE 80

# Démarrage Nginx
CMD ["nginx", "-g", "daemon off;"]
