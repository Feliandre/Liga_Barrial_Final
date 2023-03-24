import { createPool } from "mysql2/promise"

import {
    DB_HOST,
    DB_DATABSE,
    DB_PASSWORD,
    DB_USERNAME,
    DB_PORT
} from './config.js'

export const pool = createPool({
    user: DB_USERNAME,
    password: DB_PASSWORD,
    host: DB_HOST,
    port: DB_PORT,
    database: DB_DATABSE
})