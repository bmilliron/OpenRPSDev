CREATE TABLE tb_items (
	item_id int8 NOT NULL,
	item_name varchar(50) NOT NULL,
	item_measure_id int4 NOT NULL
);
ALTER TABLE tb_items ADD CONSTRAINT tb_items_pkey PRIMARY KEY(item_id);
CREATE TABLE tb_requests (
	request_id int8 NOT NULL,
	request_type varchar NOT NULL,
	request_date timestamptz NOT NULL,
	request_detail varchar(1000) NOT NULL,
	request_status bit NOT NULL,
	item_id int8 NOT NULL,
	user_id int4
);
ALTER TABLE tb_requests ADD CONSTRAINT tb_requests_pkey PRIMARY KEY(request_id);
CREATE INDEX fki_item_id ON tb_requests (item_id);
CREATE INDEX fki_user_id ON tb_requests (user_id);
CREATE TABLE tb_users (
	user_id int4 NOT NULL,
	username varchar(20) NOT NULL,
	password varchar(100) NOT NULL,
	email varchar(100) NOT NULL,
	reg_date date NOT NULL
);
ALTER TABLE tb_users ADD CONSTRAINT tb_users_pkey PRIMARY KEY(user_id);
ALTER TABLE tb_requests ADD CONSTRAINT fk_item_id FOREIGN KEY (item_id) REFERENCES tb_items(item_id) ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE tb_requests ADD CONSTRAINT fk_user_id FOREIGN KEY (user_id) REFERENCES tb_users(user_id) ON DELETE NO ACTION ON UPDATE NO ACTION;
