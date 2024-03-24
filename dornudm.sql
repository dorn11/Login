CREATE TABLE Borrower (
    borrower_id INT PRIMARY KEY,
    name_khmer VARCHAR(255),
    name_english VARCHAR(255),
    nickname VARCHAR(100),
    gender VARCHAR(10),
    date_of_birth DATE,
    marital_status VARCHAR(20),
    id_type VARCHAR(50),
    id_number VARCHAR(50),
    address VARCHAR(255),
    province VARCHAR(100),
    district VARCHAR(100),
    commune VARCHAR(100),
    village VARCHAR(100),
    phone VARCHAR(20),
    occupation VARCHAR(100),
    revenue DECIMAL(10, 2),
    photo VARCHAR(255),
    map_location VARCHAR(255)
);

CREATE TABLE Loan (
    loan_id INT PRIMARY KEY,
    borrower_id INT,
    loan_amount DECIMAL(10, 2),
    loan_date DATE,
    interest_rate DECIMAL(5, 2),
    loan_status VARCHAR(20),
    due_date DATE,
    payment_frequency VARCHAR(20),
    total_payments INT,
    remaining_balance DECIMAL(10, 2),
    FOREIGN KEY (borrower_id) REFERENCES Borrower(borrower_id)
);

CREATE TABLE Payment (
    payment_id INT PRIMARY KEY,
    loan_id INT,
    payment_amount DECIMAL(10, 2),
    payment_date DATE,
    payment_method VARCHAR(50),
    FOREIGN KEY (loan_id) REFERENCES Loan(loan_id)
);
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;