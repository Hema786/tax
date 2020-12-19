-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 13, 2020 at 06:19 AM
-- Server version: 5.6.41-84.1
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digit9ls_taxer`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `created_at`, `updated_at`, `username`, `image`, `first_name`, `last_name`, `email`, `password`, `status`) VALUES
(1, '2020-10-07 03:46:07', NULL, 'admin', '', 'tax', 'kamkar', 'admin@gmail.com', '$2y$13$4SUKFKV03ZolfDwLIsZRBuD4i7iELPZRMEJojODgP3s5S4dER.J0m', 1);

-- --------------------------------------------------------

--
-- Table structure for table `advancepayments`
--

CREATE TABLE `advancepayments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `amount` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(20) NOT NULL,
  `booked_by` int(20) NOT NULL,
  `booked_for` int(20) NOT NULL,
  `booking_date` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `booking_time` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `calendars`
--

CREATE TABLE `calendars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `city_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `department_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `designation_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(20) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `join_date` date NOT NULL,
  `job_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` bigint(20) NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `event` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `question` text COLLATE utf8_unicode_ci NOT NULL,
  `answer` text COLLATE utf8_unicode_ci NOT NULL,
  `answer1` text COLLATE utf8_unicode_ci NOT NULL,
  `answer2` text COLLATE utf8_unicode_ci NOT NULL,
  `answer3` text COLLATE utf8_unicode_ci NOT NULL,
  `answer4` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`, `answer1`, `answer2`, `answer3`, `answer4`) VALUES
(1, 'What is the best retirement strategy', 'Invest', 'Save', 'Invest', '', ''),
(2, 'The following is not taxable as income under the head \"Salaries\".', 'Commission received by a full time director', 'Commission received by a full time director', 'Remuneration received by a partner', 'Allowances received by an employee', 'Free accommodation given to an employee'),
(3, 'What is an annuity?', 'A series of equal payments at equal time periods and guaranteed for a fixed number of years', 'An investment that has no definite end and a stream of cash payments that continues forever', 'A stream of cash flows that start one year from today and continue while growing by a constant growth rate', 'A series of equal payments at equal time periods and guaranteed for a fixed number of years', 'A series of unequal payments at equal time periods which are guaranteed for a fixed number of years'),
(4, 'What is working capital?', 'Current Assets - Current Liabilities', 'Equity Capital - Total Liabilities', 'Equity Capital + Retained Earnings', 'Total Assets - Total Liabilities', 'Current Assets - Current Liabilities'),
(5, 'Which of these is an annual consolidated tax statement', 'Form 26AS', 'Form 26AS', 'Form 12', 'Form 12BB', 'Form 12A'),
(6, 'If a late payment is sent to a collections agency, how long will it remain on your credit history even if you have paid it off?', '6-7 years', 'less than a year', '1 to 3 years', '4 to 5 years', '6-7 years'),
(7, 'What investments come under 80CCD', 'PPF', 'PPF', 'NPS', 'ELSS', 'NSC'),
(8, 'Your piece of ownership in a company is called', 'Share of Stock', 'Dividends', 'Share of Stock', 'Profits', 'Portion'),
(9, 'Whom does income tax department works under', 'CBDT', 'State Govt', 'President', 'Income Tax Commission', 'CBDT'),
(10, 'The highest Administrative Authority for Income Tax in India is', 'CBDT', 'Finance Minister', 'CBDT', 'President of India', 'Director of Income Tax'),
(11, 'In terms of size, what position does the Indian economy occupy in the world?', '7th', '10th', '7th', '2nd', '3rd'),
(12, 'What is the lock in period of tax saving FDs', '5 years', '3 years', '4 years', '5 years', '6 years'),
(13, 'What is the formula for calculating your net worth?', 'assets minus liabilities', 'assets minus liabilities', 'liabilities minus assets', 'assets plus liabilities', 'assets divided by liabilities'),
(14, 'The Indian rupee is a legal tender in two other countries. One is Nepal. The other is\r\n', 'Bhutan', 'Pakistan', 'Sri Lanka', 'Bhutan', 'Afghanistan'),
(15, 'What is the Lock in period of PPF', '15 years', '5 years', '10 years', '15 years', '20 years'),
(16, 'You didn’t submit proof of sum invested so your employer cut tax. Now you can\r\n', 'Claim the deduction at the time of filing your return and get a refund', 'Claim the deduction later but won’t be eligible for tax refund', 'Claim the deduction at the time of filing your return and get a refund', 'No longer claim the deduction if it does not figure in your Form 16', 'Claim the deduction in next year while filing return'),
(17, 'Surcharge on tax @ 15% is applicable in case of an individual, if total income exceeds', '1 crore', '1 crore', '2 crore', '50 lakh', '5 crore'),
(18, 'Pension is taxable under which head of income?', 'Salary', 'Salary', 'Other sources', 'Capital gains', 'House property'),
(19, 'Which is the largest commercial bank in India?', 'State Bank of India', 'State Bank of India', 'Reserve Bank of India', 'ICICI Bank', 'Bank of India'),
(20, 'The surcharge is levied when the total income of an individual exceeds', '50 lakh', '50 lakh', '1 crore', '2 crore', '5 crore'),
(21, 'Who is known as the ‘Father of Economics’?', 'Adam Smith', 'Chanakya', 'Machiavelli', 'Adam Smith', 'Dr Manmohan Singh'),
(22, 'What is the allowed deduction from the annual value of the house property', '30%', '15%', '20%', '25%', '30%'),
(23, 'Forex Trading is an investment option for', 'Seasoned Investors', 'Everyone', 'Seasoned Investors', 'Companies only', 'Individuals only'),
(24, 'Previous year is', 'Income earning year', 'Preceding year', 'Income earning year', 'Tax calculating year', 'Income computation year'),
(25, 'In case of a female individual, who is of 59 years of age, what is the maximum exemption limit for AY 2020-21', 'Rs 2,50,000', 'Rs 2,50,000\r\n', 'Rs 3,00,000', 'Rs 5,00,000', 'There is no exemption limit at all'),
(26, 'Which is NOT true about investments', 'Always invest only for tax savings purposes', 'Always invest only for tax savings purposes', 'Diversification will help lower the risk', 'Never invest only for tax savings purposes', 'Never invest using borrowed money'),
(27, 'The concept of present value relates to the idea that', 'The discount rate is always higher when you invest now than in the future', 'The discount rate is always higher when you invest now than in the future', 'The discount rate is always higher when you invest in the future than now', 'The money you have now is worth less today than an identical amount you would receive in the future', 'The money you have now is worth more today than an identical amount you would receive in the future'),
(28, 'Subletting of house property is taxable under the head', 'Income from other sources', 'Income from house property', 'Income from Capital Gain', 'Profit and Gain of Business and Profession', 'Income from other sources'),
(29, 'Other things being equal, what causes a decrease in demand?', 'rise in the price of the commodity', 'fall in the price of the substitute', 'fall in the price of the commodity', 'rise in the income of the consumer', 'rise in the price of the commodity'),
(30, 'Salary received by a Member of Parliament is taxable under the head', 'Income from salary', 'Income from salary', 'Capital gains', 'Profits and gains of business or profession', 'Income from other sources'),
(31, 'Interest for the pre-acquisition period is deductible in ………………. installments', '5', '3', '5', '7', '9'),
(32, 'Which of the following is not a direct tax?', 'Sales Tax', 'Sales Tax', 'Income Tax', 'Wealth Tax', 'Estate Tax'),
(33, 'To lessen tax burden on individuals with income up to 5 lakh rupees, the ceiling of tax rebate under section 87A has been raised to', '12,500 rupees', '3,000 rupees', '7,000 rupees', '10,000 rupees', '12,500 rupees'),
(34, 'A person can earn income from', 'All of above', 'Income from one head', 'Income from two heads', 'Income from three heads', 'All of above'),
(35, 'Which of these best describes balloon payment?\r\n', 'A lump-sum payment at a maturity of a balloon loan', 'A lump-sum payment at a maturity of a balloon loan', 'Bridge Loan', 'Payment for party balloons', 'None of the above'),
(36, 'Payment made in cash in a single day exceeding ………….. is disallowed as per the provisions of the income tax act', '10000', '5000', '10000', '15000', '20000'),
(37, 'What is the limit of investments allowed under section 80C', 'Rs.1.5 Lakhs', 'Rs.1 Lakhs', 'Rs.1.25 Lakhs', 'Rs.1.5 Lakhs', 'Rs.1.75 Lakhs'),
(38, 'Through open market operations, the RBI purchase and sell', 'all of these', 'foreign exchange', 'gold', 'government securities', 'all of these'),
(39, 'Expenditure incurred on exempted income is …………. as deduction', 'Not Allowed', 'Fully Allowed', 'Partly Allowed', 'Not Allowed', 'None of these'),
(40, 'A firm is said to be of optimum size when', 'average total cost is at a minimum', 'average total cost is at a minimum', 'marginal cost is at a minimum\r\n', 'marginal cost is equal to marginal revenue', 'the firm is maximizing its profit'),
(41, 'Which of the following taxes is the largest source of revenue for the Government of India?', 'GST', 'Corporate Tax', 'Income Tax', 'GST', 'Wealth Tax'),
(42, 'Which of these is a safe investment instrument?', 'Bonds', 'Equity indexes', 'Stocks', 'Bonds', 'Mutual Funds'),
(43, 'Income received in India is taxable in the hands of', 'All assessees', 'Resident only', 'Resident and ordinarily resident only', 'Non-resident only', 'All assessees'),
(44, 'A person with the age of ……… or more is considered as a super senior citizen as per Income-tax Act', '80', '56', '60', '80', '100'),
(45, 'When the price of a bond is above the face value, the bond is said to be', 'Trading at premium', 'Trading at par', 'Trading at discount', 'Trading at premium', 'Trading below par'),
(46, 'What does the devaluation of a currency mean?', 'decrease in the external value of money', 'decrease in the internal value of money', 'decrease in the external value of money', 'decrease both in the external and internal values of money', 'all of above'),
(47, 'Imagine that the interest rate on your savings account was 6% per year and inflation was 7% per year. After one year, would your ability to buy something with the money in this account be:', 'less than today', 'more than today', 'less than today', 'exactly the same', 'don\'t know'),
(48, 'Which of the following is a risk to consider when investing?', 'All of Above', 'Your money is not liquid', 'Inflation', 'You could lose all of your money', 'All of the above'),
(49, 'The salary, remuneration, or compensation received by the partners is taxable under the head', 'Income from Business', 'Income from Other Sources', 'Income from Business', 'Salary', 'None of the above'),
(50, 'Development means economic growth with', 'social change', 'price stability', 'social change', 'inflation', 'deflation'),
(51, 'Which of the following is known as plastic money?', 'credit cards', 'bearer cheques', 'credit cards', 'demand drafts', 'gift cheques'),
(52, 'Gratuity received by a government employee is', 'Fully exempted', 'Fully exempted', 'Partly exempted', 'Fully taxable', 'Exempted up to Rs:1,00,000'),
(53, 'Which one of the following is more effective in controlling prices in the long run?', 'increase in production', 'decrease in production', 'increase in the rate of employment', 'decrease in the rate of interest', 'increase in production'),
(54, 'What best describes the Indian Economy', 'Mixed', 'Capitalist', 'Socialistic', 'Federal', 'Mixed'),
(55, 'Number of digits in a PAN card are-', '10', '8', '10', '12', '15'),
(56, 'Which amongst the following is not a head of Income?', 'Income from Exports', 'Salaries', 'Income from house Property', 'Income from Other sources', 'Income from Exports'),
(57, 'The law of demand states that', 'when price falls, demand increases', 'demand increases with increase in income', 'when income and prices rise, the demand also rises', 'when price falls, demand increases', 'when price increases, demand increases'),
(58, 'Income Tax is', 'Direct Tax', 'Direct Tax', 'Indirect Tax', 'Corporate Tax', 'None of the above'),
(59, 'Income from the illegal business is', 'Fully Taxable', 'Fully Taxable', 'Fully Exempt', 'Partly Taxable', 'None of the above'),
(60, 'If you were able to earn interest at 15% and you started with Rs 10,000, how much would you have after 3 years?', 'Rs.15,209/-', 'Rs.13,098/-', 'Rs.15,209/-', 'Rs. 17,624/-', 'Rs. 11,500/-'),
(61, 'The National Stock Exchange (NSE) is located at', 'Mumbai', 'Mumbai', 'New Delhi', 'Chennai', 'Kolkata'),
(62, 'If Rs 1.5 lakh limit under Sec 80C is exhausted, save more tax by…', 'Investing in the National Pension Scheme', 'Investing in the National Pension Scheme', 'Contributing to the Voluntary Provident Fund', 'Buying a pension plan from an insurance company', 'There is no option to save more than Rs 1.5 lakh'),
(63, 'As a general rule, how many months\' expenses do financial planners recommend that you set aside in an emergency fund?', '6 to 9 months', '1 to 3 months', '3 to 6 months', '6 to 9 months', '9 to 12 months'),
(64, 'What is taxable income?', 'Gross Income minus deductions', 'Gross Income minus deductions', 'Gross Income', 'Salary Income', 'Total Income'),
(65, 'To be an Ordinarily resident in India, an individual must satisfy', 'One Basic Condition and Both Additional Conditions', 'Both Basic Conditions and One Additional Condition', 'One Basic Condition and Both Additional Conditions', 'One Basic Condition and One Additional Condition', 'Both Basic Conditions and Both Additional Conditions');

-- --------------------------------------------------------

--
-- Table structure for table `hras`
--

CREATE TABLE `hras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `basic_salary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dearness_allowance` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hra_recieved` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_rent_paid` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `live_location` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hras`
--

INSERT INTO `hras` (`id`, `basic_salary`, `dearness_allowance`, `hra_recieved`, `total_rent_paid`, `live_location`, `email_address`, `created_at`, `updated_at`) VALUES
(3, '55', '5454', '5412', '7885', 'yes', 'dfsd@gmail.com', '2020-10-10 03:35:56', '2020-10-10 03:35:56'),
(4, '4545', '545', '454', '54545', 'no', 'fdf@gmail.com', '2020-10-10 03:41:43', '2020-10-10 03:41:43'),
(5, '7878', '87', '878', '78', 'yes', '78@gmail.com', '2020-10-10 03:45:42', '2020-10-10 03:45:42'),
(6, '4545', '4545', '45', '45', 'no', '45@gmail.com', '2020-10-10 03:46:56', '2020-10-10 03:46:56'),
(7, '4545', '4545', '45', '45', 'no', '45@gmail.com', '2020-10-10 03:47:33', '2020-10-10 03:47:33'),
(8, '4545', '4545', '45', '45', 'no', '45@gmail.com', '2020-10-10 03:48:13', '2020-10-10 03:48:13'),
(9, '4545', '4545', '45', '45', 'no', '45@gmail.com', '2020-10-10 03:48:36', '2020-10-10 03:48:36'),
(10, '4545', '4545', '45', '45', 'no', '45@gmail.com', '2020-10-10 03:49:23', '2020-10-10 03:49:23'),
(11, '6454', '4545', '4545', '4564654', 'yes', 'fd@gmail.com', '2020-10-10 03:50:05', '2020-10-10 03:50:05'),
(12, '4', '4', '556', '54564', 'no', 'ygh@gmail.com', '2020-10-10 03:51:40', '2020-10-10 03:51:40'),
(13, 'edfzds', 'fdgdf', 'dfgg', 'fdg', 'no', 'cornercollabo@gmail.com', '2020-10-10 04:04:40', '2020-10-10 04:04:40'),
(14, '2000', '1000', '500', '125', 'yes', 'cornercollabo@gmail.com', '2020-10-10 04:23:32', '2020-10-10 04:23:32'),
(15, '2000', '1000', '500', '125', 'yes', 'cornercollabo@gmail.com', '2020-10-10 04:23:55', '2020-10-10 04:23:55'),
(16, '545', '454', '54', '545', 'no', '4545@gmail.com', '2020-10-10 04:26:29', '2020-10-10 04:26:29'),
(17, '545', '454', '54', '545', 'no', '45@gmail.com', '2020-10-10 04:27:12', '2020-10-10 04:27:12'),
(18, '545', '454', '54', '545', 'no', '45@gmail.com', '2020-10-10 04:28:40', '2020-10-10 04:28:40'),
(19, '545', '454', '54', '545', 'no', '45@gmail.com', '2020-10-10 04:29:36', '2020-10-10 04:29:36'),
(20, '54', '54', '54', '545', 'yes', '45@gmail.com', '2020-10-10 04:30:02', '2020-10-10 04:30:02'),
(21, '54', '54', '54', '545', 'yes', '45@gmail.com', '2020-10-10 04:43:50', '2020-10-10 04:43:50'),
(22, '54', '54', '54', '545', 'yes', '45@gmail.com', '2020-10-10 04:44:10', '2020-10-10 04:44:10'),
(23, '54', '54', '54', '545', 'yes', '45@gmail.com', '2020-10-10 05:16:39', '2020-10-10 05:16:39'),
(24, '54', '54', '54', '545', 'yes', '45@gmail.com', '2020-10-10 05:16:49', '2020-10-10 05:16:49'),
(25, '54', '54', '54', '545', 'yes', '45@gmail.com', '2020-10-10 05:21:02', '2020-10-10 05:21:02'),
(26, '54', '54', '54', '545', 'yes', '45@gmail.com', '2020-10-10 05:22:06', '2020-10-10 05:22:06'),
(27, '54', '54', '54', '545', 'yes', '45@gmail.com', '2020-10-10 05:23:57', '2020-10-10 05:23:57'),
(28, '20000', '1200', '1200', '4500', 'yes', 'cornercollabo@gmail.com', '2020-10-11 23:20:04', '2020-10-11 23:20:04'),
(29, '25000', '1200', '1500', '246', 'no', 'bvc@gma.com', '2020-10-14 03:07:29', '2020-10-14 03:07:29'),
(30, '25000', '1200', '1500', '246', 'no', 'bvc@gma.com', '2020-10-15 02:16:25', '2020-10-15 02:16:25'),
(31, '252000', '225', '225', '225', 'yes', 'cornercollabo@gmail.com', '2020-10-15 10:18:37', '2020-10-15 10:18:37');

-- --------------------------------------------------------

--
-- Table structure for table `incometaxes`
--

CREATE TABLE `incometaxes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `total_income` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hra_recieved` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rent_recieved` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `incometaxes`
--

INSERT INTO `incometaxes` (`id`, `total_income`, `hra_recieved`, `rent_recieved`, `created_at`, `updated_at`) VALUES
(3, '55', '5454', '5412', '2020-10-10 03:35:56', '2020-10-10 03:35:56'),
(4, '4545', '545', '454', '2020-10-10 03:41:43', '2020-10-10 03:41:43'),
(5, '7878', '87', '878', '2020-10-10 03:45:42', '2020-10-10 03:45:42'),
(6, '4545', '4545', '45', '2020-10-10 03:46:56', '2020-10-10 03:46:56'),
(7, '4545', '4545', '45', '2020-10-10 03:47:33', '2020-10-10 03:47:33'),
(8, '4545', '4545', '45', '2020-10-10 03:48:13', '2020-10-10 03:48:13'),
(9, '4545', '4545', '45', '2020-10-10 03:48:36', '2020-10-10 03:48:36'),
(10, '4545', '4545', '45', '2020-10-10 03:49:23', '2020-10-10 03:49:23'),
(11, '6454', '4545', '4545', '2020-10-10 03:50:05', '2020-10-10 03:50:05'),
(12, '4', '4', '556', '2020-10-10 03:51:40', '2020-10-10 03:51:40'),
(13, 'edfzds', 'fdgdf', 'dfgg', '2020-10-10 04:04:40', '2020-10-10 04:04:40'),
(14, '2000', '1000', '500', '2020-10-10 04:23:32', '2020-10-10 04:23:32'),
(15, '2000', '1000', '500', '2020-10-10 04:23:55', '2020-10-10 04:23:55'),
(16, '545', '454', '54', '2020-10-10 04:26:29', '2020-10-10 04:26:29'),
(17, '545', '454', '54', '2020-10-10 04:27:12', '2020-10-10 04:27:12'),
(18, '545', '454', '54', '2020-10-10 04:28:40', '2020-10-10 04:28:40'),
(19, '545', '454', '54', '2020-10-10 04:29:36', '2020-10-10 04:29:36'),
(20, '54', '54', '54', '2020-10-10 04:30:02', '2020-10-10 04:30:02'),
(21, '54', '54', '54', '2020-10-10 04:43:50', '2020-10-10 04:43:50'),
(22, '54', '54', '54', '2020-10-10 04:44:10', '2020-10-10 04:44:10'),
(23, '54', '54', '54', '2020-10-10 05:16:39', '2020-10-10 05:16:39'),
(24, '54', '54', '54', '2020-10-10 05:16:49', '2020-10-10 05:16:49'),
(25, '54', '54', '54', '2020-10-10 05:21:02', '2020-10-10 05:21:02'),
(26, '54', '54', '54', '2020-10-10 05:22:06', '2020-10-10 05:22:06'),
(27, '54', '54', '54', '2020-10-10 05:23:57', '2020-10-10 05:23:57'),
(28, '20000', '1200', '1200', '2020-10-11 23:20:04', '2020-10-11 23:20:04'),
(29, '1212121', '2122', '2212', '2020-10-12 02:29:16', '2020-10-12 02:29:16');

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `leave_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  `days` bigint(20) NOT NULL,
  `reason` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `leave_type_offer` tinyint(4) NOT NULL DEFAULT '0',
  `is_approved` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `managesalaries`
--

CREATE TABLE `managesalaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `working_days` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gross_salary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_03_10_044553_create_employees_table', 1),
(4, '2019_03_10_050306_create_admins_table', 1),
(5, '2019_03_10_050652_create_cities_table', 1),
(6, '2019_03_10_050845_create_departments_table', 1),
(7, '2019_03_10_050953_create_salaries_table', 1),
(8, '2019_03_14_025243_create_shifts_table', 1),
(9, '2019_03_17_061433_create_leaves_table', 1),
(10, '2019_03_17_094258_create_totalleaves_table', 1),
(11, '2019_03_17_114000_create_profiles_table', 1),
(12, '2019_03_18_061726_create_downloads_table', 1),
(13, '2019_03_24_051434_create_managesalaries_table', 1),
(14, '2019_03_25_143643_create_designations_table', 1),
(15, '2019_04_10_113018_create_advancepayments_table', 1),
(16, '2019_04_21_111757_create_events_table', 1),
(17, '2019_04_26_023012_create_calendars_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`) VALUES
(1, 'View users'),
(2, 'Create users'),
(3, 'Edit users'),
(4, 'Delete users'),
(5, 'View prospects'),
(6, 'Edit procpects'),
(7, 'Delete prospects'),
(8, 'View admins'),
(9, 'Create admins'),
(10, 'Edit admins'),
(11, 'Delete admins'),
(12, 'View roles'),
(13, 'Add roles'),
(14, 'Edit roles'),
(15, 'Delete roles'),
(16, 'View/Edit site settings'),
(17, 'View/Edit payment settings'),
(18, 'View/Edit general settings');

-- --------------------------------------------------------

--
-- Table structure for table `pricingplan`
--

CREATE TABLE `pricingplan` (
  `id` int(20) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `recommended` int(1) NOT NULL,
  `tenure` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `line1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `line2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `line3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `line4` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `line5` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `line6` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pricingplan`
--

INSERT INTO `pricingplan` (`id`, `title`, `price`, `recommended`, `tenure`, `line1`, `line2`, `line3`, `line4`, `line5`, `line6`) VALUES
(1, 'Limited', '999', 0, '0', 'line 1 description', 'line 2 description', 'line 3 description', 'line 4 description', '', ''),
(2, 'Brilliant', '1999', 1, '0', 'line 1 description', 'line 2 description', 'line 3 description', 'line 4 description', 'line 5 description', 'line 6 description'),
(3, 'Basic', '1299', 0, '0', 'line 1 description', 'line 2 description', 'line 3 description', 'line 4 description', 'line 5 description', '');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rents`
--

CREATE TABLE `rents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `total_income` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hra_recieved` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rent_recieved` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rents`
--

INSERT INTO `rents` (`id`, `total_income`, `hra_recieved`, `rent_recieved`, `created_at`, `updated_at`) VALUES
(3, '55', '5454', '5412', '2020-10-10 03:35:56', '2020-10-10 03:35:56'),
(4, '4545', '545', '454', '2020-10-10 03:41:43', '2020-10-10 03:41:43'),
(5, '7878', '87', '878', '2020-10-10 03:45:42', '2020-10-10 03:45:42'),
(6, '4545', '4545', '45', '2020-10-10 03:46:56', '2020-10-10 03:46:56'),
(7, '4545', '4545', '45', '2020-10-10 03:47:33', '2020-10-10 03:47:33'),
(8, '4545', '4545', '45', '2020-10-10 03:48:13', '2020-10-10 03:48:13'),
(9, '4545', '4545', '45', '2020-10-10 03:48:36', '2020-10-10 03:48:36'),
(10, '4545', '4545', '45', '2020-10-10 03:49:23', '2020-10-10 03:49:23'),
(11, '6454', '4545', '4545', '2020-10-10 03:50:05', '2020-10-10 03:50:05'),
(12, '4', '4', '556', '2020-10-10 03:51:40', '2020-10-10 03:51:40'),
(13, 'edfzds', 'fdgdf', 'dfgg', '2020-10-10 04:04:40', '2020-10-10 04:04:40'),
(14, '2000', '1000', '500', '2020-10-10 04:23:32', '2020-10-10 04:23:32'),
(15, '2000', '1000', '500', '2020-10-10 04:23:55', '2020-10-10 04:23:55'),
(16, '545', '454', '54', '2020-10-10 04:26:29', '2020-10-10 04:26:29'),
(17, '545', '454', '54', '2020-10-10 04:27:12', '2020-10-10 04:27:12'),
(18, '545', '454', '54', '2020-10-10 04:28:40', '2020-10-10 04:28:40'),
(19, '545', '454', '54', '2020-10-10 04:29:36', '2020-10-10 04:29:36'),
(20, '54', '54', '54', '2020-10-10 04:30:02', '2020-10-10 04:30:02'),
(21, '54', '54', '54', '2020-10-10 04:43:50', '2020-10-10 04:43:50'),
(22, '54', '54', '54', '2020-10-10 04:44:10', '2020-10-10 04:44:10'),
(23, '54', '54', '54', '2020-10-10 05:16:39', '2020-10-10 05:16:39'),
(24, '54', '54', '54', '2020-10-10 05:16:49', '2020-10-10 05:16:49'),
(25, '54', '54', '54', '2020-10-10 05:21:02', '2020-10-10 05:21:02'),
(26, '54', '54', '54', '2020-10-10 05:22:06', '2020-10-10 05:22:06'),
(27, '54', '54', '54', '2020-10-10 05:23:57', '2020-10-10 05:23:57'),
(28, '20000', '1200', '1200', '2020-10-11 23:20:04', '2020-10-11 23:20:04'),
(29, '1212121', '2122', '2212', '2020-10-12 02:29:16', '2020-10-12 02:29:16'),
(30, '1000000', '19000', '12000', '2020-10-13 09:06:31', '2020-10-13 09:06:31'),
(31, '4565', '1500', '456', '2020-10-15 02:17:18', '2020-10-15 02:17:18'),
(32, '1456256', '25532', '5233', '2020-10-15 10:18:56', '2020-10-15 10:18:56'),
(33, '1456256', '25532', '5233', '2020-10-15 10:19:06', '2020-10-15 10:19:06'),
(34, '4565', '1500', '456', '2020-10-15 14:48:43', '2020-10-15 14:48:43'),
(35, '4565', '1500', '456', '2020-10-16 02:06:53', '2020-10-16 02:06:53');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) NOT NULL,
  `role_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `role_permission_ids` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `role_permission_ids`) VALUES
(1, 'Super Admin', ''),
(2, 'Admin', ''),
(3, 'CA', ''),
(4, 'guest', ''),
(5, 'prospects', '');

-- --------------------------------------------------------

--
-- Table structure for table `salaries`
--

CREATE TABLE `salaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `salary_amount` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shifts`
--

CREATE TABLE `shifts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `shift` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` int(20) NOT NULL,
  `meta_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `meta_value` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `meta_name`, `meta_value`) VALUES
(1, 'from_time', '09:00'),
(2, 'to_time', '19:00'),
(3, 'weekend', '1'),
(4, 'booking_time', '15');

-- --------------------------------------------------------

--
-- Table structure for table `taxes`
--

CREATE TABLE `taxes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `pan_number` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `marital_status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `flat_number` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `premise_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_primary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_secondary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `employer_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `employer_type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary_as_section` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary_as_perquisites` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary_as_profit` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hra_exemption` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lta_exemption` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `other_exemption` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `standard_deduction` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `professional_tax` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tds_deduction` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tan_deduction` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `interest_income_saving` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `interest_income_deposite` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `other_income` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `divident_income_domestic` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `divident_income_mutual` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `interest_income_ppf` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `other_excempt_income` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gross_agriculture` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `expenditure_agriculture` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `unabsorbed_agriculture` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `net_agriculture` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `house_property_type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `interest_paid_loan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `financial_year_date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_interest_paid` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `investment_under_section` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `interest_earned_saving_account` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `medical_insurance_premium` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `health_checkup_fee` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `interest_on_higher_education` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contribution_amount` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contribution_to_nps` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `employer_contribution` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taxes`
--

INSERT INTO `taxes` (`id`, `first_name`, `middle_name`, `last_name`, `gender`, `dob`, `pan_number`, `father_name`, `marital_status`, `flat_number`, `premise_name`, `street`, `pincode`, `area`, `city`, `state`, `country`, `mobile_phone`, `email_primary`, `email_secondary`, `employer_name`, `employer_type`, `salary_as_section`, `salary_as_perquisites`, `salary_as_profit`, `hra_exemption`, `lta_exemption`, `other_exemption`, `standard_deduction`, `professional_tax`, `tds_deduction`, `tan_deduction`, `interest_income_saving`, `interest_income_deposite`, `other_income`, `divident_income_domestic`, `divident_income_mutual`, `interest_income_ppf`, `other_excempt_income`, `gross_agriculture`, `expenditure_agriculture`, `unabsorbed_agriculture`, `net_agriculture`, `house_property_type`, `interest_paid_loan`, `financial_year_date`, `total_interest_paid`, `investment_under_section`, `interest_earned_saving_account`, `medical_insurance_premium`, `health_checkup_fee`, `interest_on_higher_education`, `contribution_amount`, `contribution_to_nps`, `employer_contribution`, `created_at`, `updated_at`) VALUES
(6, 'hghjg', 'ghjgh', 'ghgh', 'male', '2020-10-29', '565GFGFG', 'Gfgfg', 'prefer', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-10-09 23:24:56', '2020-10-09 23:24:56'),
(7, 'gfgh', 'fgf', 'gfgf', 'female', '2020-10-27', 'hghjghg453434', 'gfgfg', 'Prefer Not to Disclose', '545', 'fgfg', 'gfgfg', 'fdgd', 'gfdd', 'fdfdgf', 'rajasthan', 'india', '76757556', 'gdgfdfdf@gmail.com', 'fdfdfg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-10-09 23:49:08', '2020-10-09 23:49:08'),
(8, 'trtr', 'trt', 'rtrt', 'male', '2020-10-29', '565DFGDFgd', 'yffghf', 'Prefer Not to Disclose', 'tyrty', 'rtr', 'trt', 'rt', 'ryt', 'gfgfgh', 'delhi', 'india', '6566', 'gfgfg@gmail.com', 'yurytyu', 'fgfgfg', 'Central Government', '6565', '6565', '65', '656', '65', '656', '56', '56', '56', '56', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-10-10 00:22:06', '2020-10-10 00:22:06'),
(9, 'r', 'trt', 'rt', 'female', '2020-10-21', 'rt', 'rt', 'married', 'gghg', 'hg', 'hg', 'gg', 'gh', 'g', 'delhi', 'india', '07018558115', 'dsfsfd@gmail.com', 'dsfefe@gmail.com', 'ghghg', 'State Government', 'iijij', 'h', 'jh', 'jhj', 'hj', 'hj', 'hj', 'hj', 'hj', 'hj', 'hjhjh', 'jhjhjh', 'jhjhjhj', 'hjhjhjh', 'hjhjhj', 'hjhjhjh', 'jhj', 'hj', 'hj', 'hjh', 'jhjh', '', '', '', '', '', '', '', '', '', '', '', '', '2020-10-10 00:50:50', '2020-10-10 00:50:50'),
(10, 'deepak', 'singh', 'gahlot', 'male', '2020-10-21', 'HORPS0715E', 'Sumer Singh', 'unmarried', '545', 'fgfg', 'Civil Lines', '302007', 'gfdd', 'jaipur', 'rajasthan', 'india', '07018558115', 'cornercollabo@gmail.com', 'cornercollabo@gmail.com', 'Collabo Corner', 'State Government', '6565', '6565', '65', '656', '65', '656', '56', '56', '56', '56', 'hjhjh', 'jhjhjh', 'jhjhjhj', 'hjhjhjh', 'hjhjhj', 'hjhjhjh', 'jhj', 'hj', 'hj', 'hjh', 'jhjh', 'Deemed Let Out Property', '959', '2020-10-15', '54', '54545', '54545', '5566', '646545', '54545', '54545', '45754', '5465', '2020-10-11 23:56:56', '2020-10-11 23:56:56');

-- --------------------------------------------------------

--
-- Table structure for table `taxplanners`
--

CREATE TABLE `taxplanners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `basic_salary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dearness_allowance` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hra_recieved` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_rent_paid` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `live_location` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taxplanners`
--

INSERT INTO `taxplanners` (`id`, `basic_salary`, `dearness_allowance`, `hra_recieved`, `total_rent_paid`, `live_location`, `email_address`, `created_at`, `updated_at`) VALUES
(3, '55', '5454', '5412', '7885', 'yes', 'dfsd@gmail.com', '2020-10-10 03:35:56', '2020-10-10 03:35:56'),
(4, '4545', '545', '454', '54545', 'no', 'fdf@gmail.com', '2020-10-10 03:41:43', '2020-10-10 03:41:43'),
(5, '7878', '87', '878', '78', 'yes', '78@gmail.com', '2020-10-10 03:45:42', '2020-10-10 03:45:42'),
(6, '4545', '4545', '45', '45', 'no', '45@gmail.com', '2020-10-10 03:46:56', '2020-10-10 03:46:56'),
(7, '4545', '4545', '45', '45', 'no', '45@gmail.com', '2020-10-10 03:47:33', '2020-10-10 03:47:33'),
(8, '4545', '4545', '45', '45', 'no', '45@gmail.com', '2020-10-10 03:48:13', '2020-10-10 03:48:13'),
(9, '4545', '4545', '45', '45', 'no', '45@gmail.com', '2020-10-10 03:48:36', '2020-10-10 03:48:36'),
(10, '4545', '4545', '45', '45', 'no', '45@gmail.com', '2020-10-10 03:49:23', '2020-10-10 03:49:23'),
(11, '6454', '4545', '4545', '4564654', 'yes', 'fd@gmail.com', '2020-10-10 03:50:05', '2020-10-10 03:50:05'),
(12, '4', '4', '556', '54564', 'no', 'ygh@gmail.com', '2020-10-10 03:51:40', '2020-10-10 03:51:40'),
(13, 'edfzds', 'fdgdf', 'dfgg', 'fdg', 'no', 'cornercollabo@gmail.com', '2020-10-10 04:04:40', '2020-10-10 04:04:40'),
(14, '2000', '1000', '500', '125', 'yes', 'cornercollabo@gmail.com', '2020-10-10 04:23:32', '2020-10-10 04:23:32'),
(15, '2000', '1000', '500', '125', 'yes', 'cornercollabo@gmail.com', '2020-10-10 04:23:55', '2020-10-10 04:23:55'),
(16, '545', '454', '54', '545', 'no', '4545@gmail.com', '2020-10-10 04:26:29', '2020-10-10 04:26:29'),
(17, '545', '454', '54', '545', 'no', '45@gmail.com', '2020-10-10 04:27:12', '2020-10-10 04:27:12'),
(18, '545', '454', '54', '545', 'no', '45@gmail.com', '2020-10-10 04:28:40', '2020-10-10 04:28:40'),
(19, '545', '454', '54', '545', 'no', '45@gmail.com', '2020-10-10 04:29:36', '2020-10-10 04:29:36'),
(20, '54', '54', '54', '545', 'yes', '45@gmail.com', '2020-10-10 04:30:02', '2020-10-10 04:30:02'),
(21, '54', '54', '54', '545', 'yes', '45@gmail.com', '2020-10-10 04:43:50', '2020-10-10 04:43:50'),
(22, '54', '54', '54', '545', 'yes', '45@gmail.com', '2020-10-10 04:44:10', '2020-10-10 04:44:10'),
(23, '54', '54', '54', '545', 'yes', '45@gmail.com', '2020-10-10 05:16:39', '2020-10-10 05:16:39'),
(24, '54', '54', '54', '545', 'yes', '45@gmail.com', '2020-10-10 05:16:49', '2020-10-10 05:16:49'),
(25, '54', '54', '54', '545', 'yes', '45@gmail.com', '2020-10-10 05:21:02', '2020-10-10 05:21:02'),
(26, '54', '54', '54', '545', 'yes', '45@gmail.com', '2020-10-10 05:22:06', '2020-10-10 05:22:06'),
(27, '54', '54', '54', '545', 'yes', '45@gmail.com', '2020-10-10 05:23:57', '2020-10-10 05:23:57'),
(28, '20000', '1200', '1200', '4500', 'yes', 'cornercollabo@gmail.com', '2020-10-11 23:20:04', '2020-10-11 23:20:04'),
(29, '25000', '1200', '1500', '246', 'no', 'bvc@gma.com', '2020-10-14 03:07:29', '2020-10-14 03:07:29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_token_auth`
--

CREATE TABLE `tbl_token_auth` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `selector_hash` varchar(255) NOT NULL,
  `is_expired` int(11) NOT NULL DEFAULT '0',
  `expiry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_token_auth`
--

INSERT INTO `tbl_token_auth` (`id`, `email`, `password_hash`, `selector_hash`, `is_expired`, `expiry_date`) VALUES
(0, 'admin@gmail.com', '$2y$10$RO2xusUcOE8N6GuMB9FVUOLIHaULyAjgB83QJQyDJ4YI7L1xWKGvu', '$2y$10$N0QbpY74tC9YdVeN3d.D1ui.md1diCnHHmd58XPczxcR1G9Lr1Vsi', 0, '2020-11-25 07:06:33'),
(0, 'admin@gmail.com', '$2y$10$bDwtl0Yb3vp1aLhk5Y/OJ.H2Pbsr1xRi20.rUryNY8dUl0srebJfS', '$2y$10$/J0iBGrz0ASo5BDUASAaBeggRKbLoah7XnAEzijheRdJ8NzITst7.', 0, '2021-01-01 14:50:37'),
(0, 'admin@gmail.com', '$2y$10$hsWYPHpN.LYEZnpwN9lHKemCXreBYtF.nre0Ha5EP8l.6Xwm.POVC', '$2y$10$yY/SQyn0xZYuQCsZwhcw6ei1N0NFdebqfn37QLCADNSGnSYOTOOP.', 0, '2021-01-01 17:05:22');

-- --------------------------------------------------------

--
-- Table structure for table `totalleaves`
--

CREATE TABLE `totalleaves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `leaves_count` bigint(20) DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `salary` bigint(20) DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `join_date` date DEFAULT NULL,
  `job_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` bigint(20) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `assigned_ca_id` int(20) DEFAULT NULL,
  `google_id` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `leaves_count`, `username`, `image`, `first_name`, `last_name`, `role`, `salary`, `email`, `password`, `status`, `phone`, `address`, `gender`, `dob`, `join_date`, `job_type`, `city`, `age`, `remember_token`, `created_at`, `updated_at`, `assigned_ca_id`, `google_id`) VALUES
(1, NULL, 'admin', '1602479580.jpg', 'tax', 'kamkar', '2', NULL, 'admin@gmail.com', '$2y$13$4SUKFKV03ZolfDwLIsZRBuD4i7iELPZRMEJojODgP3s5S4dER.J0m', 1, 9866567794, 'butwal', 'male', '2019-03-12', '2019-03-12', 'sales', 'butwal', 23, NULL, '2020-10-07 03:46:06', '2020-10-11 23:43:00', 0, ''),
(4, NULL, 'abcd', '1602479751.jpg', 'xyz', 'pqr', '3', NULL, 'user@gmail.com', '$2y$12$t8HN0JQ7QtHcm4UAgqJamOqPGIhEWuj6wH/wyPckMTWBE6o7om/Ku', 1, 9866567794, 'butwal', 'male', '2019-03-12', '2019-03-12', 'Developer', 'butwal', 25, NULL, '2020-10-07 03:46:07', '2020-10-11 23:45:51', 0, ''),
(6, NULL, 'johndoe', NULL, 'John', 'Doe', '1', NULL, 'johndoe@yopmail.com', '$2y$10$Ybq4/r9DFu.UEEbGg7JRMOhg44GdWSuZQKY3i8vHKOXnMiXp9TkFC', 1, 9999999999, '', '', '0000-00-00', '0000-00-00', '', '', 0, NULL, NULL, NULL, 0, ''),
(15, NULL, 'johndoe', NULL, 'John', 'Doe', '5', NULL, 'john@yopmail.com', '$2y$10$fRdcZSSgoY.rizgf2Z0tuu.KtvAzi96KbS4sdrOnVjEDijT0EBV6C', 1, 9999999999, '', '', '0000-00-00', '0000-00-00', '', '', 0, NULL, NULL, NULL, 0, ''),
(21, NULL, '', NULL, 'Divesh', 'Jangid', '2', NULL, 'divesh@yopmail.com', '$2y$10$YJ2Na7wQzMDSqOftVwC6CuWGRuBSGvJLDoVXYgbghHEb8Ti42HdY2', 1, 0, '', '', '0000-00-00', '0000-00-00', '', '', 0, NULL, NULL, NULL, 0, ''),
(25, NULL, '', NULL, 'Divesh 1', 'Jangid', '4', NULL, 'divesh+1@yopmail.com', '$2y$10$Ybq4/r9DFu.UEEbGg7JRMOhg44GdWSuZQKY3i8vHKOXnMiXp9TkFC', 1, 0, '', '', '0000-00-00', '0000-00-00', '', '', 0, NULL, NULL, NULL, 0, ''),
(26, NULL, '', NULL, 'Divesh 2', 'Jangid', '4', NULL, 'divesh+2@yopmail.com', '$2y$10$YJ2Na7wQzMDSqOftVwC6CuWGRuBSGvJLDoVXYgbghHEb8Ti42HdY2', 1, 0, '', '', '0000-00-00', '0000-00-00', '', '', 0, NULL, NULL, NULL, 0, ''),
(28, NULL, 'Divesh Jangid', NULL, 'Divesh', 'Jangid', '4', NULL, 'divesh.jangid@gmail.com', 'ya29.a0AfH6SMCUDhktnyZ78SE84EMGwu0ACO8yR9bYBrNLloDiOdkVEZmgkgFa7xyLYj3bq-zJxtKUfhzi2CMhUS5GDL_oJ4H9BbaW7p-p3MLW2d1uoYqXmPaHKXgAtBHrEakQPJjs8Swhvqo5NyEFv2f_c2WCTdK22rC0bkXsFAQbkPCh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-27 18:50:40', '2020-11-27 18:50:40', NULL, '108257984343338560023'),
(29, NULL, 'Vidushi Jain', NULL, 'Vidushi', 'Jain', '4', NULL, 'infodigitalwebspot@gmail.com', 'ya29.a0AfH6SMD0Kl8hXoWlVmwN5YBmIrIh5clS206GocVflkhI3FtdHKWTnsKqmpzmJqY5VPKTGEFoMHTrI7-mL6ckVFFF3Ip5YbpwNqCZqbd4iIuguiNpVrtr8p5W1Dx64LYI4kCc02kvR3xkP-S37agwgbT2bceMkai0w-fforGJC0A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-28 06:11:51', '2020-11-28 06:11:51', NULL, '105209375945749738683'),
(30, NULL, 'Yathesht Jain', NULL, 'Yathesht', 'Jain', '4', NULL, 'cayathesht@gmail.com', 'ya29.a0AfH6SMCtCwBE-JlVg6jc9KXxYtecLDb2_Kf3-XxGUwkLv9aAuLa4LAly1IuR6AbUOQ4MrLO5UNZ9m0_EoxhIJyt4BipE7iMCzvIWKD7F7bp2-hePZL7-05U8b9HDXsmk2JThhX9l6oVbG8hXu0_C1U9dHnjFTK0inqkFu8gMcSw', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-29 08:14:59', '2020-11-29 08:14:59', NULL, '102324861631025173817'),
(31, NULL, 'demotest', NULL, 'demo', 'test', '4', NULL, 'demotest@gmail.com', '$2y$10$Ehrzkpn1lRJkrSxx.4n.0.9mjYV6Szayw7zmjDlVqOCn9chlSk9e6', NULL, 8989876767, 'jaipur', 'male', '2020-11-24', '2020-11-28', 'tax', 'jaipur', 29, NULL, '2020-11-30 06:50:22', '2020-11-30 06:50:22', NULL, NULL),
(32, NULL, 'arihant bakshi', NULL, 'arihant', 'bakshi', '4', NULL, 'arihant3072@gmail.com', 'ya29.a0AfH6SMA7O6KcD3FpY0PDOZDR1FBpUjU4gUMmslRC25zXiP7FyBcX7Xb_SpBQnCLzZMyo964U2QzrF1kX6dK6qLb4IpuvsV-2LMs6XODu1kmyFyEVRgTQ0cp2DieS0J5AbEoEH46jkOHqgGP2kBaqKQJe18rCqNIpi8_mXQewC3o', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-12-01 05:39:17', '2020-12-01 05:39:17', NULL, '116927519309561732150');

-- --------------------------------------------------------

--
-- Table structure for table `user_timeline`
--

CREATE TABLE `user_timeline` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `browsed` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_timeline`
--

INSERT INTO `user_timeline` (`id`, `user_id`, `browsed`, `date`, `time`) VALUES
(1, 14, 'Rent Calculator', '26/10/2012', '09:12 AM'),
(2, 15, 'Tax Planner', '26/10/2012', '08:23 PM'),
(3, 14, 'Tax Planner', '27/10/2020', '9:02 AM'),
(4, 15, 'HRA Calculator', '27/10/2020', '08:23 PM'),
(5, 14, 'Rent Calculator', '27/10/2020', '10:15 AM'),
(6, 15, 'HRA Calculator', '28/10/2020', '12:00 AM'),
(7, 15, 'HRA Calculator', '07/11/2020', '06:58 AM'),
(8, 15, 'HRA Calculator', '01/12/2020', '11:03 AM'),
(9, 15, 'HRA Calculator', '01/12/2020', '11:04 AM'),
(10, 15, 'HRA Calculator', '01/12/2020', '11:34 AM'),
(11, 15, 'HRA Calculator', '01/12/2020', '11:35 AM'),
(12, 15, 'HRA Calculator', '02/12/2020', '11:11 AM'),
(13, 15, 'HRA Calculator', '03/12/2020', '10:47 AM'),
(14, 15, 'HRA Calculator', '03/12/2020', '04:24 PM'),
(15, 15, 'HRA Calculator', '03/12/2020', '06:51 PM'),
(16, 15, 'HRA Calculator', '04/12/2020', '10:50 AM'),
(17, 15, 'HRA Calculator', '04/12/2020', '10:50 AM'),
(18, 15, 'HRA Calculator', '10/12/2020', '06:20 PM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advancepayments`
--
ALTER TABLE `advancepayments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `advancepayments_employee_id_foreign` (`employee_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calendars`
--
ALTER TABLE `calendars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `designations_employee_id_foreign` (`employee_id`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hras`
--
ALTER TABLE `hras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `incometaxes`
--
ALTER TABLE `incometaxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`id`),
  ADD KEY `leaves_employee_id_foreign` (`employee_id`);

--
-- Indexes for table `managesalaries`
--
ALTER TABLE `managesalaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricingplan`
--
ALTER TABLE `pricingplan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rents`
--
ALTER TABLE `rents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salaries`
--
ALTER TABLE `salaries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `salaries_employee_id_foreign` (`employee_id`);

--
-- Indexes for table `shifts`
--
ALTER TABLE `shifts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taxes`
--
ALTER TABLE `taxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taxplanners`
--
ALTER TABLE `taxplanners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `totalleaves`
--
ALTER TABLE `totalleaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_timeline`
--
ALTER TABLE `user_timeline`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `advancepayments`
--
ALTER TABLE `advancepayments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `calendars`
--
ALTER TABLE `calendars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `hras`
--
ALTER TABLE `hras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `incometaxes`
--
ALTER TABLE `incometaxes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `managesalaries`
--
ALTER TABLE `managesalaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pricingplan`
--
ALTER TABLE `pricingplan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rents`
--
ALTER TABLE `rents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `salaries`
--
ALTER TABLE `salaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shifts`
--
ALTER TABLE `shifts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `taxes`
--
ALTER TABLE `taxes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `taxplanners`
--
ALTER TABLE `taxplanners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `totalleaves`
--
ALTER TABLE `totalleaves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user_timeline`
--
ALTER TABLE `user_timeline`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `advancepayments`
--
ALTER TABLE `advancepayments`
  ADD CONSTRAINT `advancepayments_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `designations`
--
ALTER TABLE `designations`
  ADD CONSTRAINT `designations_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `leaves`
--
ALTER TABLE `leaves`
  ADD CONSTRAINT `leaves_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `salaries`
--
ALTER TABLE `salaries`
  ADD CONSTRAINT `salaries_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
