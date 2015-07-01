CREATE TABLE tb_users
(
  user_id integer,
  username character varying(20) NOT NULL,
  password character varying(100) NOT NULL,
  email character varying(100) NOT NULL,
  reg_date date NOT NULL,
  PRIMARY KEY (user_id)
) INHERITS ();
;
COMMENT ON TABLE tb_users IS 'Main users table';
COMMENT ON COLUMN tb_users.reg_date IS 'registration date';
CREATE TABLE tb_requests
(
   ,
  request_id bigint,
  request_type character varying NOT NULL,
  request_date timestamp with time zone NOT NULL,
  request_detail character varying(1000) NOT NULL,
  request_status bit NOT NULL,
  item_id bigint NOT NULL,
  PRIMARY KEY (request_id)
);
CREATE TABLE tb_items
(
   ,
  item_id bigint,
  item_name character varying(50) NOT NULL,
  item_measure_id integer NOT NULL,
  PRIMARY KEY (item_id)
);
COMMENT ON TABLE tb_items IS 'master items table';
