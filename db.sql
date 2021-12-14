--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `programmer`
--

CREATE TABLE `programmer` (
  `programmer_id` int(11) NOT NULL,
  `programmer_name` varchar(200) NOT NULL,
  `programmer_skill` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programmer`
--

INSERT INTO `programmer` (`programmer_id`, `programmer_name`, `programmer_skill`) VALUES
(1, 'John Smith', 'PHP, Mysql'),
(2, 'Peter Parker', 'Codeigniter, JQuery, Ajax, AngularJS'),
(3, 'Andrew Lee', 'PHP, Codeigniter, Laravel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `programmer`
--
ALTER TABLE `programmer`
  ADD PRIMARY KEY (`programmer_id`);