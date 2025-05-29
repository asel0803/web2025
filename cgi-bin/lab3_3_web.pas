PROGRAM Greeting(INPUT, OUTPUT);
USES
  SysUtils;
VAR
  QueryString, Name: STRING;
  PosName: INTEGER;
BEGIN
  WRITELN('Content-Type: text/plain');
  WRITELN;
  QueryString := GetEnvironmentVariable('QUERY_STRING');
  PosName := Pos('name=', QueryString);
  
  IF PosName <> 0 THEN
    BEGIN
      Name := Copy(QueryString, PosName + 5, LENGTH(QueryString) - PosName - 4);
      IF Name = '' THEN
        Name := 'Anonymous';
      WRITELN('Hello, ', Name, '!')
    END
  ELSE
    WRITELN('Hello, Anonymous!')
END.
