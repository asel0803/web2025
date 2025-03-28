PROGRAM PrintName(INPUT, OUTPUT);
uses
    DOS;
BEGIN {PrintHello}
  WRITELN('HTTP/2 200 Ok');
  WRITELN ('Content-Type: text/plain');
  WRITELN;
  WRITELN('Hello,', GetEnv('QUERY_STRING'))
END. {PrintHello}
f