FROM bitnami/laravel:9.3.12-debian-11-r2
RUN apt-get update -y
RUN apt-get install -y gnupg wget curl
RUN apt-get install -y software-properties-common
RUN wget -qO- https://packages.microsoft.com/keys/microsoft.asc | sudo apt-key add -
RUN add-apt-repository -y "$(wget -qO- https://packages.microsoft.com/config/ubuntu/20.04/mssql-server-2022.list)"
RUN apt-get update
RUN apt-get install -y mssql-server
RUN curl https://packages.microsoft.com/keys/microsoft.asc | sudo apt-key add -
RUN curl https://packages.microsoft.com/config/ubuntu/20.04/prod.list | sudo tee /etc/apt/sources.list.d/msprod.list
RUN apt-get update
RUN  ACCEPT_EULA=Y  apt-get install -y --force-yes mssql-tools  
RUN apt-get install -y unixodbc-dev
RUN apt-get install -y msodbcsql17 
RUN echo 'export PATH="$PATH:/opt/mssql-tools/bin"' >> ~/.bashrc \
source ~/.bashrc  
RUN pecl channel-update pecl.php.net
RUN apt-get -y install g++ make
RUN pecl install  sqlsrv 
RUN pecl install  pdo_sqlsrv
RUN echo "" >> /opt/bitnami/php/lib/php.ini
RUN echo "extension=sqlsrv.so" >> /opt/bitnami/php/lib/php.ini
RUN echo "" >> /opt/bitnami/php/lib/php.ini
RUN echo "extension=pdo_sqlsrv.so" >> /opt/bitnami/php/lib/php.ini

