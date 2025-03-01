-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2025 at 02:05 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yoga`
--

-- --------------------------------------------------------

--
-- Table structure for table `atten`
--

CREATE TABLE `atten` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `event_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_date` date NOT NULL,
  `end_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `atten`
--

INSERT INTO `atten` (`id`, `title`, `event_date`, `start_time`, `end_date`, `end_time`) VALUES
(9, 'enjay day', '2025-03-02', '10:00:00', '2025-03-02', '05:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@yoga.com', 'yoga@2025');

-- --------------------------------------------------------

--
-- Table structure for table `avm`
--

CREATE TABLE `avm` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `at` longtext NOT NULL,
  `ad` longtext NOT NULL,
  `vt` longtext NOT NULL,
  `vd` longtext NOT NULL,
  `mt` longtext NOT NULL,
  `md` longtext NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `avm`
--

INSERT INTO `avm` (`id`, `category`, `at`, `ad`, `vt`, `vd`, `mt`, `md`, `created_at`) VALUES
(1, 'home', 'Vedavistara', 'Veda Vistara—meaning the \"endless expanse of Gnana, knowledge, and wisdom\"—is a pioneering organization dedicated to reviving and integrating the scientific essence of ancient Vedic knowledge into modern life. Rooted in the belief that the wisdom of the Vedas holds the key to sustainable health, balanced living, and holistic well-being, we bridge the past and the future by decoding timeless truths for contemporary needs.<br><br>At Veda Vistara, we are not just believers in tradition; we are seekers, researchers, and innovators committed to uncovering the scientific foundation of our ancestral wisdom. Through our extensive research and application of Vedic principles, we strive to help the modern world recognize, embrace, and benefit from the profound insights of our ancient traditions.<br><br>Functioning as an umbrella organization, Veda Vistara oversees multiple enterprises that work toward the singular goal of applying age-old principles to modern living. Whether in healthcare, wellness, sustainable living, or holistic lifestyle practices, our initiatives are deeply rooted in the Vedas, aiming to foster a healthier, more balanced, and enlightened society.', 'Our Vision', 'To illuminate the path of modern living with the scientific wisdom of the Vedas, fostering a world where ancient knowledge and contemporary advancements harmoniously coexist for sustainable health, well-being, and enlightenment.', 'Our Mission', '<b>Reviving Ancient Wisdom :</b> Decode, research, and apply Vedic knowledge to enhance modern health, lifestyle, and wellness practices.<br><b>Bridging Tradition with Science :</b> Establish the scientific validity of Vedic principles and make them accessible to the modern world.<br><b>Holistic Health & Sustainability :</b> Promote sustainable, long, and healthy living through natural, time-tested methodologies rooted in Siddha, Ayurveda, Yoga, and other traditional sciences.<br><b>Knowledge Expansion & Application :</b> Build a global community of scholars, practitioners, and seekers who explore and integrate Vedic insights into contemporary life.<br><b>Innovation through Tradition :</b> Develop solutions and frameworks that bring ancient wisdom into modern healthcare, education, and everyday living.', '2025-02-27 17:29:11'),
(2, 'about', 'Thirumandhiram - Maruthuva Maiyam', 'Rooted in the profound heritage of Indian healing traditions, Thirumandhiram stands as a sanctuary for those seeking holistic solutions for chronic health issues. Our approach integrates the timeless wisdom of Ayurveda, Siddha, and yoga therapy with modern therapeutic practices. Specializing in posture correction and pain management, Thirumandhiram is committed to guiding individuals on their path to recovery and well-being.<br><br>Positioned as an innovative and trusted integrated polyclinic, Thirumandhiram distinguishes itself through its unique blend of ancient and modern therapeutic practices. Our comprehensive treatment plans cater specifically to those seeking a holistic approach to chronic ailments.', 'Our Vision', 'To heal the world by integrating ancient Indian wisdom with modern therapeutic practices, fostering holistic health and well-being for individuals suffering from chronic diseases and medical conditions.', 'Our Mission', 'Thirumandhiram is dedicated to being a premier integrated polyclinic that specializes in holistic treatment solutions. By combining yoga therapy, Ayurveda, naturopathy, Varma therapy, and Siddha lifestyle practices, we aim to offer comprehensive, personalized care that addresses physical ailments, promotes pain management, and supports recovery for a healthier life.', '2025-02-27 17:31:00'),
(3, 'thiru', 'Thirumandhiram Sigitchai', 'Thirumandhiram - Sigichalaya is Veda Vistara’s curative healthcare division, an integrated health clinic registered under the Clinical Establishments Act. It is a hospital-like establishment that brings together the time-honored medical sciences of Yoga Therapy, Ayurveda, Siddha, Varma, and Nature Cure to offer a truly holistic healing approach.\r\n\r\nAt Thirumandhiram - Sigichalaya, we believe that no one deserves to live in pain. Chronic diseases, lifestyle disorders, and musculoskeletal ailments should not define one\'s life. Our mission is to go beyond symptom management—to identify, address, and eliminate the root cause of diseases, ensuring permanent healing rather than temporary relief.\r\n\r\nUnlike conventional medicine, which often treats symptoms in isolation, our integrative approach restores the body\'s natural balance and self-healing ability. Every treatment is customized to the individual\'s unique constitution, aligning with the profound wisdom of ancient healing traditions.', 'Our Vision', 'To establish Thirumandhiram - Sigichalaya as a global center of excellence in traditional healing, where ancient Vedic wisdom and modern scientific care unite to create a disease-free world through holistic, root-cause-based treatments.', 'Our Mission', '1. Restoring the Science of Holistic Healing – Implement Yoga, Ayurveda, Siddha, Varma, and Nature Cure in an integrated manner to provide long-lasting, root-cause-based healing.\r\n2. Revolutionizing Healthcare – Move beyond temporary relief by customizing treatments based on individual body constitutions and using traditional diagnostic methods.\r\n3. Healing Beyond the Physical – Address not just physical ailments, but also mental, emotional, and spiritual well-being through integrated, holistic treatments.\r\n4. Empowering Self-Healing – Educate individuals on ancient health principles, helping them reclaim control over their well-being through diet, lifestyle, and self-awareness.\r\n5. Research & Advancement – Conduct scientific studies on the effectiveness of Vedic healing methods, preserving and evolving these sciences for future generations.\r\n6. No One Deserves to Live in Pain – Advocate for accessible, sustainable, and natural healing solutions that provide freedom from chronic ailments without dependence on pharmaceuticals.\r\n\r\nBy bringing back the lost sciences of self-healing and energy medicine, Thirumandhiram - Sigichalaya is committed to curing diseases—not just managing them.', '2025-02-27 17:36:53'),
(4, 'shimaya', 'Shimaya - Yoga Exclusive', 'Shimaya - Yoga Exclusive is the preventive wellness wing of Veda Vistara, dedicated to making yoga a way of life. While Thirumandhiram - Sigichalaya focuses on curative treatments, Shimaya empowers individuals with the knowledge and practice of yoga to prevent diseases, maintain holistic well-being, and elevate spiritual consciousness.<br><br>With two thriving yoga studios in Vadavalli and Ramanathapuram (Coimbatore) and an expansive online platform, Shimaya offers general wellness yoga classes, structured online courses for all levels (beginner, intermediate, advanced), yoga teacher training certifications (TTC), specialized workshops, and corporate yoga programs. Our community-based approach fosters an environment where practitioners support each other in their spiritual and wellness journeys.<br><br>Shimaya is also at the forefront of specialized therapeutic yoga programs such as posture correction therapy and sports performance enhancement for athletes. By integrating traditional yogic techniques with modern athletic science, we help sports professionals optimize their performance, endurance, and recovery.', 'Our Vision', 'To establish yoga as the foundation of a healthy, balanced, and spiritually fulfilling life, ensuring that individuals across the globe can access its transformative power for preventive health, longevity, and self-realization.', 'Our Mission', '1. Promote Yoga as a Preventive Science – Encourage individuals to use yoga for overall wellness, reducing lifestyle diseases through dedicated practice.<br>2. Expand Access to Yoga Education – Offer in-depth online and offline yoga programs, TTC certifications, and immersive workshops to cultivate skilled practitioners and teachers.<br>3. Create a Supportive Yoga Community – Build a strong network of practitioners who uplift each other in their spiritual and wellness journeys.<br>4. Bring Yoga into Specialized Domains – Offer targeted training for posture correction, therapeutic yoga, and athlete performance enhancement.<br>5. Collaborate for Wider Impact – Partner with corporates, hospitals, apartment societies, and community groups to bring yoga into diverse environments.', '2025-02-27 17:39:39'),
(5, 'piraiyazh', 'Piraiyazh - Earth Conscious Store', 'Piraiyazh - Earth Conscious Store is a sustainability-driven manufacturing and lifestyle brand that advocates for natural, toxin-free living. In an era where harmful chemicals, synthetic materials, and pollutants are everywhere—from our clothing and home decor to the very yoga mats we use—Piraiyazh strives to offer an alternative: earth-conscious, handcrafted, and health-friendly products.<br><br>Piraiyazh also plays a vital role in reviving dying handloom industries by supporting small weavers, artisans, and rural businesses, ensuring that traditional craftsmanship thrives in the modern world.', 'Our Vision', 'To create a world where sustainability is not just a choice but a way of life, ensuring that every product we use supports both human health and the well-being of the planet.', 'Our Mission', '1. Eliminate Toxicity from Daily Life – Educate and provide alternatives to harmful, chemical-laden products.<br>2. Promote Sustainable Consumption – Encourage the shift towards handcrafted, eco-friendly, and biodegradable products.<br>3. Revive Handloom & Artisanal Industries – Support small businesses and traditional craftsmen by promoting their authentic, handmade products.<br>4. Raise Awareness About Fabric & Energy Frequencies – Inform consumers about how cotton and linen naturally harmonize with the body’s energy field, while polyester and synthetic fabrics lower vibrational frequency and can disrupt well-being.<br>5. Encourage Ethical, Conscious Buying – Inspire mindful consumption that respects nature, people, and future generations.<br><b>At Piraiyazh, we don’t just sell products—we offer a healthier, more conscious way of living.</b>', '2025-02-27 17:41:27'),
(6, 'gramiya', 'Gramiya Dhaniyam - Arunachala Organics', 'Gramiya Dhaniyam - Arunachala Organics is Veda Vistara’s farm-to-home organic food initiative, committed to restoring purity in the food we consume. In today’s world, pesticide-laden, chemically processed, and genetically modified foods have become the norm, silently harming human health. Gramiya Dhaniyam seeks to bring real, natural nutrition back to every household.<br><br>We work directly with local farmers to source organically grown grains, pulses, spices, and food essentials, ensuring that these reach consumers at affordable prices while maintaining sustainable packaging practices.<br><br><b>At Gramiya Dhaniyam, we firmly believe in the ancient saying:</b><br>\"You are what you eat.\" Our approach to food is based on the Vedic understanding that nutrition is not just about sustenance—it is about healing, vitality, and spiritual upliftment.<br><br>The Power of Organic Foods.', 'Our Vision', 'To revolutionize the way people eat by ensuring that every home has access to clean, organic, and spiritually nourishing food while supporting sustainable agriculture and local farming communities.', 'Our Mission', '1. Promote Organic, Pesticide-Free Food – Provide access to naturally grown, toxin-free grains, pulses, and food staples.<br>2. Support Farmers & Fair Trade – Build direct partnerships with farmers to ensure fair pricing and sustainable agricultural practices.<br>3. Educate on Food Consciousness – Raise awareness on the impact of food quality on physical, mental, and spiritual well-being.<br>4. Make Sustainability Affordable – Offer organic food at reasonable prices, making clean eating accessible to all.<br>5. Eliminate Plastic Packaging – Commit to eco-friendly, biodegradable packaging to reduce environmental waste.<br><b>Gramiya Dhaniyam is more than an organic store—it is a movement to restore the purity of what we consume and transform health from the inside out.</b>', '2025-02-27 17:44:09');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `id` int(11) NOT NULL,
  `img` varchar(1024) NOT NULL,
  `category` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `dec` longtext NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `role` varchar(255) NOT NULL,
  `img` varchar(1024) NOT NULL,
  `uploaded_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `role`, `img`, `uploaded_time`) VALUES
(1, 'Saran', 'Full Stack PHP Developer', '../uploads/team/PRINT-Photoroom.png', '2025-03-01 10:29:44');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `permissions` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `phone`, `password`, `permissions`, `created_at`) VALUES
(1, 'saran', 'saranmass685@gmail.com', '9042101353', 'saran@098', 'team', '2025-02-27 16:00:41');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `vid` varchar(2048) NOT NULL,
  `uvid` varchar(1024) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atten`
--
ALTER TABLE `atten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `avm`
--
ALTER TABLE `avm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atten`
--
ALTER TABLE `atten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `avm`
--
ALTER TABLE `avm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
