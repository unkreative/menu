import mysql.connector

database = 'internat'
tables_to_create = [
  'lundi',
  'mardi',
  'mercredi',
  'jeudi',
  'vendredi'
]

config = {
  'user': 'root',
  'password': 'root',
  'host': 'localhost',
  'unix_socket': '/Applications/MAMP/tmp/mysql/mysql.sock',
  'database': f'{database}',
  'raise_on_warnings': True
}

cnx = mysql.connector.connect(**config)
cursor = cnx.cursor(dictionary=True)
for table in tables_to_create:
  cursor.execute(f"CREATE TABLE `{database}`.`{table}` (`ID` INT(6), `date` DATE NULL DEFAULT NULL, `potage` TEXT , `subtitle_potage` TEXT , `plat_1` TEXT , `subtitle_plat_1` TEXT , `plat_2` TEXT , `subtitle_plat_2` TEXT , `accompagnement` TEXT , `subtitle_accompagnement` TEXT , `légumes` TEXT , `subtitle_légumes` TEXT , `dessert` TEXT , `subtitle_dessert` TEXT)")


# cursor.execute('CREATE TABLE 22022 (potage VARCHAR(255), subtitle_potage VARCHAR(255), plat_1 VARCHAR(255), subtitle_plat_1 VARCHAR(255), plat_2 VARCHAR(255), subtitle_plat_2 VARCHAR(255), accompagnement VARCHAR(255), subtitle_accompagnement VARCHAR(255), légumes VARCHAR(255), subtitle_légumes VARCHAR(255), dessert VARCHAR(255), subtitle_dessert VARCHAR(255))')
cnx.close()
