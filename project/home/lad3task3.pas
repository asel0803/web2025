PROGRAM Hellosmbd(INPUT, OUTPUT);
USES
  DOS;

VAR
  QueryString, Name: STRING;
  PosName: INTEGER;

BEGIN
  WRITELN('Content-Type: text/plain');
  WRITELN;

  QueryString := GetEnv('QUERY_STRING');
  PosName := Pos('name=', QueryString);

  IF PosName > 0
  THEN
    BEGIN
      Name := Copy(QueryString, PosName + 5, 15);
      WRITELN('Hello dear, ', Name, '!')
    END
  ELSE
    WRITELN('Hello Anonymous!')
END.