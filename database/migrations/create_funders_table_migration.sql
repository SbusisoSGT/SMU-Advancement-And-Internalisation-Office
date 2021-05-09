--
-- Table structure for table `funders`
--

CREATE TABLE `funders` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mobile_numbers` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



--
-- Indexes for table `funders`
--
ALTER TABLE `funders`
  ADD PRIMARY KEY (`id`);


-
-- AUTO_INCREMENT for table `funders`
--
ALTER TABLE `funders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

COMMIT;