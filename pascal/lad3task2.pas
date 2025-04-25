PROGRAM PrintName(INPUT, OUTPUT);
uses
    DOS;
VAR
  Query: STRING;
BEGIN {PrintHello}
  WRITELN('HTTP/2 200 Ok');
  WRITELN ('Content-Type: text/plain');
  WRITELN;
  Query := GetEnv('QUERY_STRING');
  IF Query = 'lanterns=1'
  THEN
    WRITELN('Brtish coming by sea')
  ELSE
    IF Query = 'lanterns=2'
    THEN
      WRITELN('British coming by land')
   ELSE
     WRITELN('No information')   
  
END. {PrintHello}
