# SQL Test

### Test Environment Deployment

The test project directory has the following structure

```
project/
├─ files/
│  ├─ owners.csv
│  ├─ pets.csv
│  ├─ procedures-details.csv
│  ├─ procedures-history.csv
├─ docker-compose.yaml
├─ init-database.sh
├─ load-files.sh
```

In order to make the initial deployment you must complete the scripts of the directory according to the following specification.

The `docker-compose.yaml` file should start three services:

- `dbserver`: A **PostgreSQL** server container that when starting up should run the script `init-database.sh`. This initialization bash script should ensure that the database `testdb` exists by creating (if necessary) the database and then the tables that match the schema of the `.csv` files of the `files` directory.
- `dbloader`: This container should run a client that connects to the database, checks if the database is empty or not and in the case of being empty then loads the `.csv` files of the `files` directory into the database using the `load-files.sh` script. There are no restrictions for the client that you can use although we recommend using **psql** for easy deployment.
- `dbmanager`: This container should run a manager client for making queries and checking the health of the system. There are no restrictions for the manager client that you can use although we strongly recommend using **pgAdmin4** on its web version for easy automatic deployment.

### Querying the Database

Solve the following queries, save your answers in a `queries.sql` file in the project's folder.

1. Retrieve by each kind of pet the top 3 most used procedures. The output should have the following structure:

   ```
   +--------+------------+------+
   |  kind  | procedure  | uses |
   +--------+------------+------+
   | Dog    | Flea Spray |    3 |
   | Cat    | Flea Spray |    5 |
   | Parrot | Casting    |    2 |
   +--------+------------+------+
   ```

2. "Pivot" the result table of the previous query using the `procedure` column like:

   ```
   +------------+---------+
   | Flea Spray | Casting |
   +------------+---------+
   | Cat        | Parrot  |
   | Dog        | Null    |
   +------------+---------+
   ```

   Notice that the value in each column are sorted in descending order by the `uses` value

3. Return an ID list of all the pets that its owner has at least another pet of the same kind.



