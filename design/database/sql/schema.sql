CREATE TABLE public.tb_items (
	item_id int8 NOT NULL,
	item_name varchar(50) NOT NULL,
	item_measure_id int4 NOT NULL
);
ALTER TABLE public.tb_items ADD CONSTRAINT tb_items_pkey PRIMARY KEY(item_id);
CREATE TABLE public.tb_users (
	user_id int4 NOT NULL,
	username varchar(20) NOT NULL,
	password varchar(100) NOT NULL,
	email varchar(100) NOT NULL,
	reg_date date NOT NULL
);
ALTER TABLE public.tb_users ADD CONSTRAINT tb_users_pkey PRIMARY KEY(user_id);
CREATE TABLE public.tb_requests (
	request_id int8 NOT NULL,
	request_type varchar NOT NULL,
	request_date timestamptz NOT NULL,
	request_detail varchar(1000) NOT NULL,
	request_status bit NOT NULL,
	item_id int8 NOT NULL
);
ALTER TABLE public.tb_requests ADD CONSTRAINT tb_requests_pkey PRIMARY KEY(request_id);
