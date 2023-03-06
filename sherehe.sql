
--
-- Database: `sherehe`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE customers (
  customer_id int(20) NOT NULL,
  customer_name text NOT NULL,
  customer_email varchar(20) NOT NULL,
  username varchar(20) NOT NULL,
  password varchar(25) NOT NULL,
  customer_phone int(20) NOT NULL
) ;

--
-- Dumping data for table `customers`
--

INSERT INTO customers (customer_id, customer_name, customer_email, username, password, customer_phone) VALUES
(1, 'Mike Taxson', 'mkuu@gmail.com', 'mikeushuru', 'qwerty12345', 712345678),
(2, 'Con Williams', 'ushuru@gmail.com', 'thedon', 'thedon123', 798765432),
(3, 'Mkuu', 'ulemsee@gmail.com', 'ulemsee', 'wewe123', 2147483647),
(4, 'Admin', 'admin@gmail.com', 'admin', 'admin123', 98776765);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE feedback (
  Feedback_ID int(11) NOT NULL,
  name text NOT NULL,
  email text NOT NULL,
  topic text NOT NULL,
  message text NOT NULL,
  date date NOT NULL
) ;

--
-- Dumping data for table `feedback`
--

INSERT INTO feedback (Feedback_ID, name, email, topic, message, date) VALUES
(1, 'Peter', 'peter@gmail.com', 'Review', 'It is a good system with a lot of potential', '2023-02-28'),
(2, 'Mutua', 'Mutua@gmail.com', 'Inquiry', 'Is the system up for sale?', '2023-02-28'),
(3, 'Faith', 'faith@gmail.com', 'Review', 'It Is a good system, keep on improving it.', '2023-02-28');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_history`
--

CREATE TABLE ticket_history (
  customer_id int(20) NOT NULL,
  event_name text NOT NULL,
  event_date date NOT NULL,
  ticket_price varchar(20) NOT NULL,
  no_of_tickets int(100) NOT NULL,
  customer_name text NOT NULL,
  customer_email varchar(20) NOT NULL,
  customer_phone varchar(20) NOT NULL
) ;

--
-- Dumping data for table `ticket_history`
--

INSERT INTO ticket_history (customer_id, event_name, event_date, ticket_price, no_of_tickets, customer_name, customer_email, customer_phone) VALUES
(1, 'Okoa Festival', '2023-02-01', '2000', 3, 'Mike Taxson', 'mkuu@gmail.com', '0712345678'),
(2, 'Meet & Grill', '2023-02-28', '1500', 5, 'Con Williams', 'ushuru@gmail.com', '0798765432');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE customers
  ADD PRIMARY KEY (customer_id);

--
-- Indexes for table `feedback`
--
ALTER TABLE feedback
  ADD PRIMARY KEY (Feedback_ID);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE customers
  MODIFY customer_id int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE feedback
  MODIFY Feedback_ID int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
