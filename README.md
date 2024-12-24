# Develop a PHP API with CRUD Operations

# Overview

This project demonstrates the creation of a PHP-based RESTful API for performing CRUD operations on a database with three tables: `Users`, `Products`, and `Orders`. It is designed following best practices, with a clear structure and error handling.

---

# VIDEO LINK of TASK 🎥
https://drive.google.com/file/d/1Id82k5QSuL_Qxm3Yc-WD4NpSbsskMosZ/view?usp=sharing


#### User (Customet)
| Column  | Type         | Description          |
|---------|--------------|----------------------|
| id      | INT (PK)     | Auto-increment ID    |
| name    | TEXT         | Customer name        |
| email   | TEXT         | Customer email       |
| phone   | BIGINIT      | Customer phone number|

#### Products
| Column       | Type         | Description               |
|--------------|--------------|---------------------------|
| id           | INT (PK)     | Auto-increment ID         |
| p_name       | TEXT         | Product Name              |
| price        | DOUBLE       | Product Price             |

#### Orders
| Column         | Type         | Description                                   |
|----------------|--------------|-----------------------------------------------|
| id             | INT (PK)     | Auto-increment ID                             |
| order_date     | DATE         | Date of Order                                 |
| status         | TEXT         | Status of Order                               |


### HTTP Methods Used:
- **POST**: For inserting new data.
- **GET**: For retrieving data.
- **PUT**: For updating existing data.
- **DELETE**: For deleting data.

