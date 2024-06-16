comment on database postgres is 'default administrative connection database';

create table users
(
    id       serial
        primary key,
    email    varchar(100)      not null,
    password varchar(100)      not null,
    nickname varchar(32),
    role     integer default 0 not null
);

alter table users
    owner to docker;

create table posts
(
    id      serial
        primary key,
    title   varchar(100)  not null,
    content varchar(2000) not null,
    author  integer       not null
        constraint posts_users_id_fk
            references users,
    date    date          not null
);

alter table posts
    owner to docker;

create function delete_user_posts() returns trigger
    language plpgsql
as
$$
BEGIN
    DELETE FROM posts WHERE author = OLD.id;
    RETURN OLD;
END;
$$;

alter function delete_user_posts() owner to docker;

create trigger delete_user_posts_trigger
    before delete
    on users
    for each row
execute procedure delete_user_posts();

