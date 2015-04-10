CREATE TABLE device (
	id 				SERIAL primary key,
	name 			varchar(32),
	owner 			varchar(32)
);

CREATE TABLE vehicle (
	id 				SERIAL primary key,
	name			varchar(32),
	brand 			varchar(32),
	engine 			varchar(32),
	max_fuel 		real
);

CREATE TABLE data_type (
	id 				SERIAL primary key,
	type 			varchar(32)
);

CREATE TABLE telemetry_data (
	id 				SERIAL primary key,
	device_id 		integer references device(id),
	data_type_id 	integer references data_type(id),
	time 			timestamp,
	position 		point,
	speed 			real,
	comments 		text
);


CREATE TABLE issues (
	id 				SERIAL primary key,
	device_id 		integer references device(id),
	issue 			text
);

CREATE TABLE user_role (
	id 				SERIAL primary key,
	name 			varchar(32)
);

CREATE TABLE "user" (
	id 				SERIAL primary key,
	name 			varchar(32),
	role 			integer references user_role(id)
);

CREATE TABLE user_x_user_role (
	id 				SERIAL primary key,
	user_role_id 	integer references user_role(id),
	user_id 		integer references "user"(id)
);

CREATE TABLE user_x_device (
	id 				SERIAL 	primary key,
	device_id		integer references device(id),
	user_id 		integer references "user"(id)
);

CREATE TABLE user_x_vehicle (
	id 				SERIAL 	primary key,
	user_id 		integer references "user"(id),
	vehicle_id 		integer references vehicle(id)
);