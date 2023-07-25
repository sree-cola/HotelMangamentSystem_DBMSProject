TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER `t1` AFTER INSERT ON `roombook` FOR EACH ROW BEGIN\nINSERT INTO booking VALUES(New.id,NEW.FName,NEW.LName,NEW.Phone,NEW.cout);\nEND' 'CREATE DEFINER=`root`@`localhost` TRIGGER `t2` AFTER DELETE ON `roombook` FOR EACH ROW BEGIN \nINSERT INTO roombookdeletion VALUES(Old.id,Old.Title,Old.FName,Old.LName,Old.Email,Old.Phone,Old.TRoom,Old.cin,Old.cout,Old.nodays);\nEND'
sql_modes=1098907648 1098907648
definers='root@localhost' 'root@localhost'
client_cs_names='utf8mb4' 'utf8mb4'
connection_cl_names='utf8mb4_unicode_ci' 'utf8mb4_unicode_ci'
db_cl_names='utf8mb4_general_ci' 'utf8mb4_general_ci'
created=167402453195 167402419853
