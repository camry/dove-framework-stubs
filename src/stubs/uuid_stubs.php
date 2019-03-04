<?php
const UUID_TYPE_DCE          = 4;
const UUID_TYPE_DEFAULT      = 0;
const UUID_TYPE_INVALID      = -42;
const UUID_TYPE_NAME         = 1;
const UUID_TYPE_NULL         = -1;
const UUID_TYPE_RANDOM       = 4;
const UUID_TYPE_TIME         = 1;
const UUID_VARIANT_DCE       = 1;
const UUID_VARIANT_MICROSOFT = 2;
const UUID_VARIANT_OTHER     = 3;

function uuid_compare($uuid1, $uuid2) {
}

/**
 * @param int|null $uuid_type
 * @return string
 */
function uuid_create($uuid_type = NULL) {
}

function uuid_is_null($uuid) {
}

function uuid_is_valid($uuid) {
}

function uuid_mac($uuid) {
}

function uuid_parse($uuid) {
}

function uuid_time($uuid) {
}

function uuid_type($uuid) {
}

function uuid_unparse($uuid) {
}

function uuid_variant($uuid) {
}