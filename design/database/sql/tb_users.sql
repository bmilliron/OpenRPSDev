CREATE TABLE tb_users
(
  user_id integer,
  username character varying(20),
  password character varying(100),
  email character varying(100),
  reg_date date,
  PRIMARY KEY (user_id)
) 
;
COMMENT ON TABLE tb_users IS 'Main users table';
COMMENT ON COLUMN tb_users.reg_date IS 'registration date';