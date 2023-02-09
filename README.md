# card-dealer-assessment
# Programming Test
### Theme: Playing cards will be given out to n(number) people
2. Purpose: Total 52 cards containing 1-13 of each Spade(S), Heart(H), Diamond(D), Club(C) will be
given to n people randomly.
### Program Input : Number of people (numerical value)
### Output format :
a. Spade = S, Heart = H, Diamond = D, Club = C
b. Card 2 to 9 are, as it is, 1=A,10=X,11=J,12=Q,13=K
c. The card distributed to the first person on the first row will be separated (comma),
d. The card distributed to the second person on the second row will be separated(comma),
e. [LF] is not allowed. Example:
S-A,H-X,.....
D-3,H-J,.....
### Running the application
- Build the app image with the following command:
```bash
docker-compose build app
```
- When the build is finished, you can run the environment in background mode with:
```bash
docker-compose up -d
```
- Now run `composer install` to install the application dependencies:

```bash
docker-compose exec app composer install
```
- Generate a unique application key with the Artisan Laravel command-line tool. This key is used to encrypt user sessions and other sensitive data:

```bash
docker-compose exec app php artisan key:generate
```
- You're all set! Now open browser and type `http://localhost` in the address bar.

# SQL Improvement Logic Test
For SQL Improvement Logic test, please find the written explanation of the logical improvement in text file
`sql_improvement_test.txt`
