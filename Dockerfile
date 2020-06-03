FROM alpine

ENV LIGHTTPD_VERSION=1.4.55-r1

RUN apk add --update --no-cache \
	lighttpd=${LIGHTTPD_VERSION} \
	lighttpd-mod_auth \
  && rm -rf /var/cache/apk/*

COPY start-lighttpd.sh /usr/local/bin/
COPY index.html /var/www/localhost/htdocs/
EXPOSE 80

CMD ["start-lighttpd.sh"]
