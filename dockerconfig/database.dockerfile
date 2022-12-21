FROM mysql:8.0.29
COPY ./dockerconfig/config-file.cnf /etc/mysql/conf.d
