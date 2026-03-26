App → http://localhost:8080
Prometheus → http://localhost:9090

comando: up => ver exporter configurados

Grafana → http://localhost:3000

usuario:admin password:admin


👉 Si haces varias peticiones a /load.php:

verás subir requests en Prometheus
verás workers activos en PHP-FPM
podrás probar saturación


👉 esto genera tráfico constante y verás Grafana cobrar vida 😄
wget http://localhost:8080


