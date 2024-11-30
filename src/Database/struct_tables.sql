create table if not exists dashboards
(
    id      integer primary key autoincrement,
    name    text not null,
    display text not null,
    url     text not null,
    order   text not null
);

create table if not exists dashboard_cards
(
    id         integer primary key autoincrement,
    name       text not null,
    display    text not null,
    row        text not null,
    column     text not null,
    order      text not null,
    chart_json text
);