-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 12, 2021 at 03:53 PM
-- Server version: 5.7.33-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pln_1_4`
--

-- --------------------------------------------------------

--
-- Table structure for table `checklist_air`
--

CREATE TABLE `checklist_air` (
  `pk_plts` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` tinyint(4) DEFAULT '0',
  `is_update` tinyint(4) DEFAULT '0',
  `delete_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `update_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `insert_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `tanggal_input` date NOT NULL,
  `waktu` time NOT NULL,
  `pv_modul_volt` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pv_modul_curr` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pv_modul_power` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pv_modul_today` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pv_modul_acc` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `irradians` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `irradiations` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_volt_r` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_volt_s` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_volt_t` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_current_r` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_current_s` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_current_t` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_power_r` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_power_s` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_power_t` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_freq` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gen_power` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `energy_today` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `energy_acc` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `energy_eb` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temp_pv` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temp_ambien` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kwh_ps` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kwh_eks_tot` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `checklist_air`
--

INSERT INTO `checklist_air` (`pk_plts`, `is_delete`, `is_update`, `delete_by`, `update_by`, `insert_by`, `tanggal_input`, `waktu`, `pv_modul_volt`, `pv_modul_curr`, `pv_modul_power`, `pv_modul_today`, `pv_modul_acc`, `irradians`, `irradiations`, `grid_volt_r`, `grid_volt_s`, `grid_volt_t`, `grid_current_r`, `grid_current_s`, `grid_current_t`, `grid_power_r`, `grid_power_s`, `grid_power_t`, `grid_freq`, `gen_power`, `energy_today`, `energy_acc`, `energy_eb`, `temp_pv`, `temp_ambien`, `kwh_ps`, `kwh_eks_tot`) VALUES
('CL180106', 0, 0, '0', '0', '5', '2021-02-18', '20:00:00', '2', '3', '4', '5', '6', '5', '4', '4', '4', '4', '5', '5', '6', '6', '7', '6', '5', '5', '4', '4', '3', '3', '2', '3', '3');

-- --------------------------------------------------------

--
-- Table structure for table `checklist_meno`
--

CREATE TABLE `checklist_meno` (
  `pk_plts` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` tinyint(4) DEFAULT '0',
  `is_update` tinyint(4) DEFAULT '0',
  `delete_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `update_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `insert_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `tanggal_input` date NOT NULL,
  `waktu` time NOT NULL,
  `pv_modul_volt` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pv_modul_curr` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pv_modul_power` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pv_modul_today` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pv_modul_acc` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `irradians` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `irradiations` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_volt_r` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_volt_s` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_volt_t` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_current_r` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_current_s` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_current_t` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_power_r` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_power_s` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_power_t` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_freq` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gen_power` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `energy_today` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `energy_acc` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `energy_eb` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temp_pv` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temp_ambien` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kwh_ps` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kwh_eks_tot` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `checklist_meno`
--

INSERT INTO `checklist_meno` (`pk_plts`, `is_delete`, `is_update`, `delete_by`, `update_by`, `insert_by`, `tanggal_input`, `waktu`, `pv_modul_volt`, `pv_modul_curr`, `pv_modul_power`, `pv_modul_today`, `pv_modul_acc`, `irradians`, `irradiations`, `grid_volt_r`, `grid_volt_s`, `grid_volt_t`, `grid_current_r`, `grid_current_s`, `grid_current_t`, `grid_power_r`, `grid_power_s`, `grid_power_t`, `grid_freq`, `gen_power`, `energy_today`, `energy_acc`, `energy_eb`, `temp_pv`, `temp_ambien`, `kwh_ps`, `kwh_eks_tot`) VALUES
('CL180142', 0, 0, '0', '0', '5', '2021-02-18', '20:00:00', '5', '5', '4', '4', '3', '4', '5', '5', '67', '6', '5', '54', '4', '4', '5', '6', '6', '7', '6', '5', '5', '4', '4', '4', '5');

-- --------------------------------------------------------

--
-- Table structure for table `checklist_narmada`
--

CREATE TABLE `checklist_narmada` (
  `pk_plts` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` tinyint(4) DEFAULT '0',
  `is_update` tinyint(4) DEFAULT '0',
  `delete_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `update_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `insert_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `tanggal_input` date NOT NULL,
  `waktu` time NOT NULL,
  `pv_modul_volt` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pv_modul_curr` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pv_modul_power` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pv_modul_today` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pv_modul_acc` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `irradians` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `irradiations` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_volt_r` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_volt_s` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_volt_t` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_current_r` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_current_s` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_current_t` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_power_r` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_power_s` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_power_t` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_freq` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gen_power` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `energy_today` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `energy_acc` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `energy_eb` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temp_pv` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temp_ambien` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kwh_ps` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kwh_eks_tot` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `checklist_pengga`
--

CREATE TABLE `checklist_pengga` (
  `pk_plts` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` tinyint(4) DEFAULT '0',
  `is_update` tinyint(4) DEFAULT '0',
  `delete_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `update_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `insert_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `tanggal_input` date NOT NULL,
  `waktu` time NOT NULL,
  `pv_modul_volt` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pv_modul_curr` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pv_modul_power` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pv_modul_today` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pv_modul_acc` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `irradians` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `irradiations` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_volt_r` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_volt_s` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_volt_t` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_current_r` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_current_s` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_current_t` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_power_r` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_power_s` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_power_t` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_freq` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gen_power` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `energy_today` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `energy_acc` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `energy_eb` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temp_pv` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temp_ambien` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kwh_ps` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kwh_eks_tot` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `checklist_pengga`
--

INSERT INTO `checklist_pengga` (`pk_plts`, `is_delete`, `is_update`, `delete_by`, `update_by`, `insert_by`, `tanggal_input`, `waktu`, `pv_modul_volt`, `pv_modul_curr`, `pv_modul_power`, `pv_modul_today`, `pv_modul_acc`, `irradians`, `irradiations`, `grid_volt_r`, `grid_volt_s`, `grid_volt_t`, `grid_current_r`, `grid_current_s`, `grid_current_t`, `grid_power_r`, `grid_power_s`, `grid_power_t`, `grid_freq`, `gen_power`, `energy_today`, `energy_acc`, `energy_eb`, `temp_pv`, `temp_ambien`, `kwh_ps`, `kwh_eks_tot`) VALUES
('', 0, 0, '0', '7', '0', '2020-12-23', '15:30:00', 'Ad dolor qui rem nos', 'Quam eveniet sint ', 'Ea reiciendis omnis ', '22', 'Libero qui nostrud i', 'Fugiat odio reprehe', 'Perferendis nulla cu', 'Laborum Fugiat qui', 'Consequatur Sint li', 'Voluptatem nobis ip', 'Voluptatem officia i', 'Proident ad ea nihi', 'Voluptate incididunt', 'Architecto incidunt', 'Est lorem ullam et e', 'Deserunt atque Nam i', 'Irure dolor consequa', 'Dolor qui dolore dol', '4', 'Laborum consequatur', 'Optio non quod a la', 'Magni aliquid est al', 'Esse quis aut autem', 'Ea accusantium exerc', 'Quasi inventore prov'),
('CL180102', 0, 0, '0', '0', '5', '2021-02-18', '19:55:00', '1', '2', '3', '', '2', '2', '23', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3'),
('CL180126', 0, 0, '0', '0', '5', '2021-02-18', '19:55:00', '1', '2', '3', '3', '2', '2', '23', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3'),
('CL230807', 0, 0, '0', '0', '7', '2020-12-23', '14:50:00', 'Ad ut lorem a sed ad', 'Architecto consectet', 'Voluptate ad necessi', '26', 'Dolore quo autem dol', 'Aut ea dolor perfere', 'Voluptatem mollit q', 'Id voluptate repell', 'Consequuntur ipsam u', 'Voluptatem placeat ', 'Vitae repudiandae is', 'Cum eum occaecat ex ', 'Dolore quisquam quis', 'Numquam doloribus ve', 'Nemo voluptatem Ven', 'Obcaecati quis Nam a', 'Voluptatem provident', 'Quaerat recusandae ', '25', 'Dolor repellendus I', 'Unde ab non cum fugi', 'Accusantium ducimus', 'Natus officia volupt', 'Eos sunt ex recusan', 'Voluptatibus ad laud'),
('CL230808', 0, 0, '0', '0', '7', '2020-12-23', '14:50:00', 'Perspiciatis a volu', 'Laudantium excepteu', 'Nulla omnis rerum li', '27', 'Nostrum dolor labori', 'Mollitia ipsam volup', 'Laboris eveniet inc', 'Libero adipisicing v', 'Laborum numquam cill', 'Enim tempora quos qu', 'Omnis explicabo Est', 'Optio enim odit ali', 'Sed proident repreh', 'Et corporis ex ea di', 'Perspiciatis cupida', 'Cumque debitis iure ', 'Consequatur iure et', 'Aute ipsum iste eaq', '22', 'Sit sequi autem cum', 'Placeat accusantium', 'Aut laboriosam cumq', 'Non tempor eum sed t', 'Ipsam minim inventor', 'Aliquid incididunt q'),
('CL230923', 1, 0, '7', '7', '7', '0000-00-00', '15:20:00', 'Nihil temporibus ad ', 'Cillum in non nostru', 'Minus quibusdam solu', '8', 'Amet assumenda culp', 'coba coba', 'coba iya coba', 'Earum sit nisi vel ', 'Modi rerum aliquid d', 'Et quia error aperia', 'Amet voluptate dolo', 'Dolore repudiandae q', 'Quae est amet dolor', 'Iusto eveniet tempo', 'Rerum omnis ab nisi ', 'Harum occaecat moles', 'Sapiente fugiat lab', 'Maiores magna lorem ', '3', 'A quia non aute reic', 'Accusantium et quam ', 'Tempor voluptates ve', 'Sint quas quis id re', 'Nihil culpa molesti', 'Aut in recusandae N');

-- --------------------------------------------------------

--
-- Table structure for table `checklist_persiapan_operasi`
--

CREATE TABLE `checklist_persiapan_operasi` (
  `pk_checklist_persiapan_operasi` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_input` date DEFAULT NULL,
  `is_delete` tinyint(4) DEFAULT '0',
  `is_update` tinyint(4) DEFAULT '0',
  `insert_by` tinyint(4) DEFAULT '0',
  `delete_by` tinyint(4) DEFAULT '0',
  `update_by` tinyint(4) DEFAULT '0',
  `stdc_a` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `stdc_b` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `stdc_c` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `stdc_d` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sus_a` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sus_b` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sus_c` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sus_d` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sus_e` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sbb_a` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sbb_b` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sbb_c` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sbb_d` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sbb_e` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `smp_a` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `smp_b` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `smp_c` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `smp_d` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `smp_e` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `smp_f` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `smp_g` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `smp_h` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `scj_a` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `scj_b` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `scj_c` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `scj_d` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sic_a` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sic_b` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sic_c` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sic_d` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mr` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_a` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_b` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `g_a` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `g_b` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `g_c` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `g_d` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `k_a` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `k_b` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `k_c` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bg_a` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bg_b` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tg_a` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tg_b` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tg_c` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tg_d` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `omd` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `checklist_santong`
--

CREATE TABLE `checklist_santong` (
  `pk_plts` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` tinyint(4) DEFAULT '0',
  `is_update` tinyint(4) DEFAULT '0',
  `delete_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `update_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `insert_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `tanggal_input` date NOT NULL,
  `waktu` time NOT NULL,
  `pv_modul_volt` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pv_modul_curr` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pv_modul_power` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pv_modul_today` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pv_modul_acc` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `irradians` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `irradiations` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_volt_r` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_volt_s` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_volt_t` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_current_r` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_current_s` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_current_t` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_power_r` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_power_s` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_power_t` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_freq` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gen_power` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `energy_today` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `energy_acc` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `energy_eb` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temp_pv` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temp_ambien` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kwh_ps` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kwh_eks_tot` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `checklist_santong`
--

INSERT INTO `checklist_santong` (`pk_plts`, `is_delete`, `is_update`, `delete_by`, `update_by`, `insert_by`, `tanggal_input`, `waktu`, `pv_modul_volt`, `pv_modul_curr`, `pv_modul_power`, `pv_modul_today`, `pv_modul_acc`, `irradians`, `irradiations`, `grid_volt_r`, `grid_volt_s`, `grid_volt_t`, `grid_current_r`, `grid_current_s`, `grid_current_t`, `grid_power_r`, `grid_power_s`, `grid_power_t`, `grid_freq`, `gen_power`, `energy_today`, `energy_acc`, `energy_eb`, `temp_pv`, `temp_ambien`, `kwh_ps`, `kwh_eks_tot`) VALUES
('CL180142', 0, 0, '0', '0', '5', '2021-02-18', '19:55:00', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '4', '4', '5', '6', '7', '7', '6', '5', '54', '4', '4');

-- --------------------------------------------------------

--
-- Table structure for table `checklist_start_mesin`
--

CREATE TABLE `checklist_start_mesin` (
  `pk_checklist_start_mesin` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_input` date DEFAULT NULL,
  `is_delete` tinyint(4) DEFAULT '0',
  `is_update` tinyint(4) DEFAULT '0',
  `insert_by` tinyint(4) DEFAULT '0',
  `delete_by` tinyint(4) DEFAULT '0',
  `update_by` tinyint(4) DEFAULT '0',
  `waktu` time DEFAULT NULL,
  `mesin_layak_operasi` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ppm_a` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ppm_b` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ppm_c` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ppm_d` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `papm_a` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `papm_b` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `papm_c` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `papm_d` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pk_a` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pk_b` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pk_c` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pk_d` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `buka_ki` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fw_a` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fw_b` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fw_c` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `turning_gear` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_mesin_pompa_a` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_mesin_pompa_b` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_mesin_pompa_c` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_mesin_pompa_d` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tutup_ki` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cek_tekanan_udara` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cek_sumber_tegangan` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pbb_a` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pbb_b` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pbb_c` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pbb_d` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pbb_e` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pastikan_mesin_aman` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_mesin_pertahankan_a` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_mesin_pertahankan_b` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_mesin_pertahankan_c` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_mesin_pertahankan_d` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_mesin_pertahankan_e` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `buka_ki_cek_semburan` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `putaran_idle_a` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `putaran_idle_b` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `putaran_idle_c` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `putaran_idle_d` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `putaran_idle_e` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `putaran_idle_f` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `putaran_idle_g` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `putaran_idle_h` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `putaran_idle_i` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mesin_siap_dibebani` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `selama_mulai_pembebanan` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `checklist_stop_mesin`
--

CREATE TABLE `checklist_stop_mesin` (
  `pk_checklist_stop_mesin` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_input` date DEFAULT NULL,
  `is_delete` tinyint(4) DEFAULT '0',
  `is_update` tinyint(4) DEFAULT '0',
  `insert_by` tinyint(4) DEFAULT '0',
  `delete_by` tinyint(4) DEFAULT '0',
  `update_by` tinyint(4) DEFAULT '0',
  `waktu` time DEFAULT NULL,
  `beban_operasi_mesin` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `change_over_1` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `change_over_2` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `change_over_3` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pelepasan_beban_1` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pelepasan_beban_2` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pelepasan_beban_3` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pelepasan_beban_4` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pelepasan_beban_5` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pelepasan_beban_6` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pelepasan_beban_7` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pelepasan_beban_8` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pelepasan_beban_9` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pelepasan_beban_10` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `checklist_trawangan`
--

CREATE TABLE `checklist_trawangan` (
  `pk_plts` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` tinyint(4) DEFAULT '0',
  `is_update` tinyint(4) DEFAULT '0',
  `delete_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `update_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `insert_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `tanggal_input` date NOT NULL,
  `waktu` time NOT NULL,
  `pv_modul_volt` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pv_modul_curr` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pv_modul_power` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pv_modul_today` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pv_modul_acc` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `irradians` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `irradiations` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_volt_r` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_volt_s` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_volt_t` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_current_r` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_current_s` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_current_t` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_power_r` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_power_s` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_power_t` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grid_freq` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gen_power` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `energy_today` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `energy_acc` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `energy_eb` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temp_pv` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temp_ambien` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kwh_ps` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kwh_eks_tot` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `checklist_trawangan`
--

INSERT INTO `checklist_trawangan` (`pk_plts`, `is_delete`, `is_update`, `delete_by`, `update_by`, `insert_by`, `tanggal_input`, `waktu`, `pv_modul_volt`, `pv_modul_curr`, `pv_modul_power`, `pv_modul_today`, `pv_modul_acc`, `irradians`, `irradiations`, `grid_volt_r`, `grid_volt_s`, `grid_volt_t`, `grid_current_r`, `grid_current_s`, `grid_current_t`, `grid_power_r`, `grid_power_s`, `grid_power_t`, `grid_freq`, `gen_power`, `energy_today`, `energy_acc`, `energy_eb`, `temp_pv`, `temp_ambien`, `kwh_ps`, `kwh_eks_tot`) VALUES
('CL180126', 0, 0, '0', '0', '5', '2021-02-18', '19:55:00', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '4', '4', '5', '6', '6', '5', '4', '4', '4', '3');

-- --------------------------------------------------------

--
-- Table structure for table `form_tukar_piket`
--

CREATE TABLE `form_tukar_piket` (
  `pk_form_tukar_piket` varchar(150) DEFAULT NULL,
  `nama_pemohon` varchar(150) DEFAULT NULL,
  `shift_pemohon` varchar(150) DEFAULT NULL,
  `jabatan_pemohon` varchar(150) DEFAULT NULL,
  `tanggal_pemohon` date DEFAULT NULL,
  `nama_pengganti` varchar(150) DEFAULT NULL,
  `shift_pengganti` varchar(150) DEFAULT NULL,
  `jabatan_pengganti` varchar(150) DEFAULT NULL,
  `alasan_pemohon` varchar(150) DEFAULT NULL,
  `is_delete` int(11) DEFAULT '0',
  `is_update` int(11) DEFAULT '0',
  `insert_by` int(11) DEFAULT '0',
  `delete_by` int(11) DEFAULT '0',
  `update_by` int(11) DEFAULT '0',
  `created_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form_tukar_piket`
--

INSERT INTO `form_tukar_piket` (`pk_form_tukar_piket`, `nama_pemohon`, `shift_pemohon`, `jabatan_pemohon`, `tanggal_pemohon`, `nama_pengganti`, `shift_pengganti`, `jabatan_pengganti`, `alasan_pemohon`, `is_delete`, `is_update`, `insert_by`, `delete_by`, `update_by`, `created_date`) VALUES
('FTP050345', 'sena', '1', 'Operator', '2021-03-05', 'yudha', '2', 'Operator', 'Coba ', 0, 0, 5, 0, 0, '2021-03-05');

-- --------------------------------------------------------

--
-- Table structure for table `housekeeping_flm`
--

CREATE TABLE `housekeeping_flm` (
  `pk_housekeeping_flm` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` tinyint(4) DEFAULT '0',
  `is_update` tinyint(4) DEFAULT '0',
  `delete_by` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `update_by` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `insert_by` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `tanggal_input` date NOT NULL,
  `waktu` time NOT NULL,
  `location` varchar(30) NOT NULL,
  `description` varchar(30) NOT NULL,
  `eviden` varchar(30) NOT NULL,
  `checked_by` varchar(30) NOT NULL,
  `created_date` date DEFAULT NULL,
  `jenis_kegiatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `housekeeping_flm`
--

INSERT INTO `housekeeping_flm` (`pk_housekeeping_flm`, `is_delete`, `is_update`, `delete_by`, `update_by`, `insert_by`, `tanggal_input`, `waktu`, `location`, `description`, `eviden`, `checked_by`, `created_date`, `jenis_kegiatan`) VALUES
('SM2021010806', 0, 0, '0', '0', '5', '2021-03-30', '09:30:00', 'separator mfo', 'Cleaning area separator MFO', 'hk.jpg', 'Rifai & Hayat', '0000-00-00', 'Housekeeping');

-- --------------------------------------------------------

--
-- Table structure for table `log_beban_penyulang`
--

CREATE TABLE `log_beban_penyulang` (
  `pk_beban_penyulang` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` tinyint(4) DEFAULT '0',
  `is_update` tinyint(4) DEFAULT '0',
  `delete_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `update_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `insert_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `tanggal_input` date NOT NULL,
  `waktu` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sikur` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `masbagik` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sakra` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keruak` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pancor` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rempung` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kopel_pmt_ekspor` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kopel_pmt_impor` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kopel_pry_ekspor` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kopel_pry_impor` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generator` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mesin` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='jika is delete = 1, data di asumsikan di hapus';

--
-- Dumping data for table `log_beban_penyulang`
--

INSERT INTO `log_beban_penyulang` (`pk_beban_penyulang`, `is_delete`, `is_update`, `delete_by`, `update_by`, `insert_by`, `tanggal_input`, `waktu`, `sikur`, `masbagik`, `sakra`, `keruak`, `pancor`, `rempung`, `kopel_pmt_ekspor`, `kopel_pmt_impor`, `kopel_pry_ekspor`, `kopel_pry_impor`, `keterangan`, `generator`, `mesin`, `created_date`) VALUES
('1', 1, 0, '5', '0', '5', '2021-02-15', '00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL),
('10', 0, 0, '0', '0', '5', '2021-02-15', '9:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('11', 0, 0, '0', '0', '5', '2021-02-15', '10:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('12', 0, 0, '0', '0', '5', '2021-02-15', '11:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('13', 0, 0, '0', '0', '5', '2021-02-15', '12:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('14', 0, 0, '0', '0', '5', '2021-02-15', '13:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('15', 0, 0, '0', '0', '5', '2021-02-15', '14:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('16', 0, 0, '0', '0', '5', '2021-02-15', '15:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('17', 0, 0, '0', '0', '5', '2021-02-15', '16:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('18', 0, 0, '0', '0', '5', '2021-02-15', '17:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('19', 0, 0, '0', '0', '5', '2021-02-15', '18:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('2', 0, 0, '0', '0', '5', '2021-02-15', '1:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('20', 0, 0, '0', '0', '5', '2021-02-15', '19:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('21', 0, 0, '0', '0', '5', '2021-02-15', '20:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('22', 0, 0, '0', '0', '5', '2021-02-15', '21:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('23', 0, 0, '0', '0', '5', '2021-02-15', '22:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('24', 0, 0, '0', '0', '5', '2021-02-15', '23:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('25', 0, 0, '0', '0', '5', '2021-02-16', '0:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('26', 0, 0, '0', '0', '5', '2021-02-16', '1:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('27', 0, 0, '0', '0', '5', '2021-02-16', '2:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('28', 0, 0, '0', '0', '5', '2021-02-16', '3:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('29', 0, 0, '0', '0', '5', '2021-02-16', '4:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('3', 0, 0, '0', '0', '5', '2021-02-15', '2:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('30', 0, 0, '0', '0', '5', '2021-02-16', '5:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('31', 0, 0, '0', '0', '5', '2021-02-16', '6:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('32', 0, 0, '0', '0', '5', '2021-02-16', '7:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('33', 0, 0, '0', '0', '5', '2021-02-16', '8:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('34', 0, 0, '0', '0', '5', '2021-02-16', '9:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('35', 0, 0, '0', '0', '5', '2021-02-16', '10:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('36', 0, 0, '0', '0', '5', '2021-02-16', '11:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('37', 0, 0, '0', '0', '5', '2021-02-16', '12:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('38', 0, 0, '0', '0', '5', '2021-02-16', '13:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('39', 0, 0, '0', '0', '5', '2021-02-16', '14:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('4', 0, 0, '0', '0', '5', '2021-02-15', '3:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('40', 0, 0, '0', '0', '5', '2021-02-16', '15:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('41', 0, 0, '0', '0', '5', '2021-02-16', '16:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('42', 0, 0, '0', '0', '5', '2021-02-16', '17:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('43', 0, 0, '0', '0', '5', '2021-02-16', '18:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('44', 0, 0, '0', '0', '5', '2021-02-16', '19:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('45', 0, 0, '0', '0', '5', '2021-02-16', '20:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('46', 0, 0, '0', '0', '5', '2021-02-16', '21:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('47', 0, 0, '0', '0', '5', '2021-02-16', '22:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('48', 0, 0, '0', '0', '5', '2021-02-16', '23:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('5', 0, 0, '0', '0', '5', '2021-02-15', '4:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('6', 0, 0, '0', '0', '5', '2021-02-15', '5:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('7', 0, 0, '0', '0', '5', '2021-02-15', '6:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('8', 0, 0, '0', '0', '5', '2021-02-15', '7:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('9', 0, 0, '0', '0', '5', '2021-02-15', '8:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('PBP120315', 0, 0, '0', '0', '0', '2021-05-12', '3:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, '2021-05-12'),
('PBP281121', 0, 0, '0', '0', '0', '2021-03-31', '6:00:00', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '2021-04-28'),
('PBP281143', 0, 0, '0', '0', '0', '2021-04-28', '2:00:00', '123', '123', '123', '', '123', '3', '3', '3', '3', '', '3', NULL, NULL, '2021-04-28');

-- --------------------------------------------------------

--
-- Table structure for table `log_booster_module`
--

CREATE TABLE `log_booster_module` (
  `pk_booster_module` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` tinyint(4) DEFAULT '0',
  `is_update` tinyint(4) DEFAULT '0',
  `delete_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `update_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `insert_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `tanggal_input` date NOT NULL,
  `waktu` time NOT NULL,
  `beban` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flow_meter_hsd` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flow_meter_mfo` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kwh_produksi_hsd` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kwh_produksi_mfo` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inlet_module` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discharge_bp` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `suction_bp` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mixing_tank12` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fo_outlet` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `in_to_engine` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `air_control` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inlet_flow1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inlet_flow2` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mixing_tank9` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inlet_heater` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `outlet_heater` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `viscosensor` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `return_line` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuel_oil` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `viscositas` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `generator` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mesin` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `log_booster_module`
--

INSERT INTO `log_booster_module` (`pk_booster_module`, `is_delete`, `is_update`, `delete_by`, `update_by`, `insert_by`, `tanggal_input`, `waktu`, `beban`, `flow_meter_hsd`, `flow_meter_mfo`, `kwh_produksi_hsd`, `kwh_produksi_mfo`, `inlet_module`, `discharge_bp`, `suction_bp`, `mixing_tank12`, `fo_outlet`, `in_to_engine`, `air_control`, `inlet_flow1`, `inlet_flow2`, `mixing_tank9`, `inlet_heater`, `outlet_heater`, `viscosensor`, `return_line`, `fuel_oil`, `viscositas`, `generator`, `mesin`, `created_date`) VALUES
('1', 0, 0, '0', '0', '5', '2021-02-15', '00:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL),
('10', 0, 0, '0', '0', '5', '2021-02-15', '09:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('11', 0, 0, '0', '0', '5', '2021-02-15', '10:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('12', 0, 0, '0', '0', '5', '2021-02-15', '11:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('13', 0, 0, '0', '0', '5', '2021-02-15', '12:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('14', 0, 0, '0', '0', '5', '2021-02-15', '13:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('15', 0, 0, '0', '0', '5', '2021-02-15', '14:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('16', 0, 0, '0', '0', '5', '2021-02-15', '15:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('17', 0, 0, '0', '0', '5', '2021-02-15', '16:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('18', 0, 0, '0', '0', '5', '2021-02-15', '17:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('19', 0, 0, '0', '0', '5', '2021-02-15', '18:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('2', 0, 0, '0', '0', '5', '2021-02-15', '01:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('20', 0, 0, '0', '0', '5', '2021-02-15', '19:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('21', 0, 0, '0', '0', '5', '2021-02-15', '20:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('22', 0, 0, '0', '0', '5', '2021-02-15', '21:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('23', 0, 0, '0', '0', '5', '2021-02-15', '22:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('24', 0, 0, '0', '0', '5', '2021-02-15', '23:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('25', 0, 0, '0', '0', '5', '2021-02-16', '00:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('26', 0, 0, '0', '0', '5', '2021-02-16', '01:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('27', 0, 0, '0', '0', '5', '2021-02-16', '02:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('28', 0, 0, '0', '0', '5', '2021-02-16', '03:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('29', 0, 0, '0', '0', '5', '2021-02-16', '04:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('3', 0, 0, '0', '0', '5', '2021-02-15', '02:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('30', 0, 0, '0', '0', '5', '2021-02-16', '05:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('31', 0, 0, '0', '0', '5', '2021-02-16', '06:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('32', 0, 0, '0', '0', '5', '2021-02-16', '07:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('33', 0, 0, '0', '0', '5', '2021-02-16', '08:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('34', 0, 0, '0', '0', '5', '2021-02-16', '09:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('35', 0, 0, '0', '0', '5', '2021-02-16', '10:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('36', 0, 0, '0', '0', '5', '2021-02-16', '11:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('37', 0, 0, '0', '0', '5', '2021-02-16', '12:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('38', 0, 0, '0', '0', '5', '2021-02-16', '13:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('39', 0, 0, '0', '0', '5', '2021-02-16', '14:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('4', 0, 0, '0', '0', '5', '2021-02-15', '03:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('40', 0, 0, '0', '0', '5', '2021-02-16', '15:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('41', 0, 0, '0', '0', '5', '2021-02-16', '16:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('42', 0, 0, '0', '0', '5', '2021-02-16', '17:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('43', 0, 0, '0', '0', '5', '2021-02-16', '18:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('44', 0, 0, '0', '0', '5', '2021-02-16', '19:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('45', 0, 0, '0', '0', '5', '2021-02-16', '20:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('46', 0, 0, '0', '0', '5', '2021-02-16', '21:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('47', 0, 0, '0', '0', '5', '2021-02-16', '22:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('48', 0, 0, '0', '0', '5', '2021-02-16', '23:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('5', 0, 0, '0', '0', '5', '2021-02-15', '04:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('6', 0, 0, '0', '0', '5', '2021-02-15', '05:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('7', 0, 0, '0', '0', '5', '2021-02-15', '06:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('8', 0, 0, '0', '0', '5', '2021-02-15', '07:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('9', 0, 0, '0', '0', '5', '2021-02-15', '08:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]', NULL),
('BM280606', 0, 0, '0', '0', '22', '2021-03-01', '00:00:00', '1', '1', '1', '1', '1', '1', '1', '11', '1', '1', '1', '1', '1', '1', '1', '1', '1', '65', '65', '65', '41', NULL, NULL, '2021-02-28');

-- --------------------------------------------------------

--
-- Table structure for table `log_ebt_air`
--

CREATE TABLE `log_ebt_air` (
  `pk_log_tengah_jaman` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` tinyint(4) DEFAULT '0',
  `is_update` tinyint(4) DEFAULT '0',
  `delete_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `update_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `insert_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `tanggal_input` date NOT NULL,
  `waktu` time NOT NULL,
  `tekanan_penstok` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gen_speed` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `voltage_generator_rs` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `voltage_generator_st` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `voltage_generator_rt` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arus_generator_r` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arus_generator_s` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arus_generator_t` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beban` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cos_phi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `freq` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excitation_volt` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excitation_arus` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exp_analog` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exp_edmi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `export` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `import` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temperature_bearing_1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temperature_bearing_2` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temperature_bearing_3` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temperature_bearing_4` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_air` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `generator` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mesin` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `log_ebt_air`
--

INSERT INTO `log_ebt_air` (`pk_log_tengah_jaman`, `is_delete`, `is_update`, `delete_by`, `update_by`, `insert_by`, `tanggal_input`, `waktu`, `tekanan_penstok`, `gen_speed`, `voltage_generator_rs`, `voltage_generator_st`, `voltage_generator_rt`, `arus_generator_r`, `arus_generator_s`, `arus_generator_t`, `beban`, `cos_phi`, `freq`, `excitation_volt`, `excitation_arus`, `exp_analog`, `exp_edmi`, `export`, `import`, `temperature_bearing_1`, `temperature_bearing_2`, `temperature_bearing_3`, `temperature_bearing_4`, `level_air`, `generator`, `mesin`) VALUES
('PTJ120808', 0, 0, '0', '5', '5', '2021-02-13', '02:15:00', '123', 'Aspernatur eligendi ', 'In magni facilis ten', 'Sint dolorem incidi', 'Omnis explicabo Lab', 'Natus anim eiusmod c', 'Laudantium sint dol', 'Deserunt nemo quia a', 'Rem voluptate non re', 'Voluptas ipsum in q', 'Dolores rerum deseru', 'Rem ipsum quod in vo', 'Nulla deserunt at cu', 'Modi soluta modi ani', 'Sint incidunt quis', 'Ut qui alias aperiam', 'Nostrum ducimus num', 'Sed in ut aspernatur', 'Id sunt tempore qui', 'Nulla dolor asperior', 'Doloribus repellendu', 'Deserunt et tempore', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `log_ebt_meno`
--

CREATE TABLE `log_ebt_meno` (
  `pk_log_tengah_jaman` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` tinyint(4) DEFAULT '0',
  `is_update` tinyint(4) DEFAULT '0',
  `delete_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `update_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `insert_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `tanggal_input` date NOT NULL,
  `waktu` time NOT NULL,
  `tekanan_penstok` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gen_speed` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `voltage_generator_rs` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `voltage_generator_st` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `voltage_generator_rt` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arus_generator_r` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arus_generator_s` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arus_generator_t` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beban` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cos_phi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `freq` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excitation_volt` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excitation_arus` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exp_analog` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exp_edmi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `export` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `import` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temperature_bearing_1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temperature_bearing_2` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temperature_bearing_3` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temperature_bearing_4` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_air` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `generator` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mesin` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `log_ebt_meno`
--

INSERT INTO `log_ebt_meno` (`pk_log_tengah_jaman`, `is_delete`, `is_update`, `delete_by`, `update_by`, `insert_by`, `tanggal_input`, `waktu`, `tekanan_penstok`, `gen_speed`, `voltage_generator_rs`, `voltage_generator_st`, `voltage_generator_rt`, `arus_generator_r`, `arus_generator_s`, `arus_generator_t`, `beban`, `cos_phi`, `freq`, `excitation_volt`, `excitation_arus`, `exp_analog`, `exp_edmi`, `export`, `import`, `temperature_bearing_1`, `temperature_bearing_2`, `temperature_bearing_3`, `temperature_bearing_4`, `level_air`, `generator`, `mesin`) VALUES
('PTJ120817', 0, 0, '0', '5', '5', '2021-02-13', '02:15:00', '123', 'Ullamco exercitation', 'Ullamco fugiat tempo', 'Doloremque enim dolo', 'Similique molestiae ', 'Illo veniam totam p', 'Corrupti odit aliqu', 'Molestiae dolores la', 'Deserunt ex minus is', 'Omnis sed maiores re', 'Exercitation commodo', 'In reprehenderit il', 'Necessitatibus elige', 'Dicta voluptates ass', 'Quaerat culpa sed o', 'Ex ipsa illo duis i', 'Voluptatem aut possi', 'Nesciunt magni quam', 'Repudiandae quas off', 'Omnis saepe ipsum sa', 'In ullam magna in ve', '123', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `log_ebt_narmada`
--

CREATE TABLE `log_ebt_narmada` (
  `pk_log_tengah_jaman` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` tinyint(4) DEFAULT '0',
  `is_update` tinyint(4) DEFAULT '0',
  `delete_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `update_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `insert_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `tanggal_input` date NOT NULL,
  `waktu` time NOT NULL,
  `tekanan_penstok` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gen_speed` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `voltage_generator_rs` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `voltage_generator_st` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `voltage_generator_rt` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arus_generator_r` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arus_generator_s` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arus_generator_t` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beban` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cos_phi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `freq` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excitation_volt` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excitation_arus` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exp_analog` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exp_edmi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `export` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `import` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temperature_bearing_1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temperature_bearing_2` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temperature_bearing_3` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temperature_bearing_4` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_air` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `generator` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mesin` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `log_ebt_narmada`
--

INSERT INTO `log_ebt_narmada` (`pk_log_tengah_jaman`, `is_delete`, `is_update`, `delete_by`, `update_by`, `insert_by`, `tanggal_input`, `waktu`, `tekanan_penstok`, `gen_speed`, `voltage_generator_rs`, `voltage_generator_st`, `voltage_generator_rt`, `arus_generator_r`, `arus_generator_s`, `arus_generator_t`, `beban`, `cos_phi`, `freq`, `excitation_volt`, `excitation_arus`, `exp_analog`, `exp_edmi`, `export`, `import`, `temperature_bearing_1`, `temperature_bearing_2`, `temperature_bearing_3`, `temperature_bearing_4`, `level_air`, `generator`, `mesin`) VALUES
('PTJ120840', 0, 0, '0', '5', '5', '2021-02-13', '02:15:00', '123', 'Eu fugit exercitati', 'Quis sint laboris v', 'Vel error laborum A', 'Quod et quo qui nisi', 'Doloribus consequatu', 'Commodi excepturi ma', 'Eiusmod sit aut dolo', 'Assumenda dolore cil', 'Non voluptas illo su', 'Quia amet ab mollit', 'Eum blanditiis et pe', 'Atque esse est fuga', 'Laborum aliqua Repu', 'Voluptatibus aut vit', 'Quod illo reprehende', 'Dolores omnis nihil ', 'Voluptatum beatae te', 'Fugiat modi culpa ', 'Laboris vel est iste', 'Quasi vitae dolor so', '123', NULL, NULL),
('PTJ180106', 0, 0, '0', '5', '5', '2021-02-17', '19:55:00', '123', '123', '123', '13', '1', '321', '321', '321', '32', '321', '32', '321', '23', '321', '3', '4', '4', '4', '4', '4', '4', '4', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `log_ebt_pengga`
--

CREATE TABLE `log_ebt_pengga` (
  `pk_log_tengah_jaman` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` tinyint(4) DEFAULT '0',
  `is_update` tinyint(4) DEFAULT '0',
  `delete_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `update_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `insert_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `tanggal_input` date NOT NULL,
  `waktu` time NOT NULL,
  `tekanan_penstok` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gen_speed` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `voltage_generator_rs` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `voltage_generator_st` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `voltage_generator_rt` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arus_generator_r` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arus_generator_s` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arus_generator_t` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beban` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cos_phi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `freq` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excitation_volt` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excitation_arus` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exp_analog` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exp_edmi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `export` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `import` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temperature_bearing_1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temperature_bearing_2` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temperature_bearing_3` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temperature_bearing_4` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_air` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `generator` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mesin` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `log_ebt_pengga`
--

INSERT INTO `log_ebt_pengga` (`pk_log_tengah_jaman`, `is_delete`, `is_update`, `delete_by`, `update_by`, `insert_by`, `tanggal_input`, `waktu`, `tekanan_penstok`, `gen_speed`, `voltage_generator_rs`, `voltage_generator_st`, `voltage_generator_rt`, `arus_generator_r`, `arus_generator_s`, `arus_generator_t`, `beban`, `cos_phi`, `freq`, `excitation_volt`, `excitation_arus`, `exp_analog`, `exp_edmi`, `export`, `import`, `temperature_bearing_1`, `temperature_bearing_2`, `temperature_bearing_3`, `temperature_bearing_4`, `level_air`, `generator`, `mesin`) VALUES
('PTJ120825', 1, 0, '24', '0', '5', '2021-02-13', '02:10:00', 'Cum et exercitation ', 'Dolorem Nam suscipit', 'Et mollit neque aut ', 'Aliquam reprehenderi', 'Sit doloremque praes', 'Vel dolorem voluptat', 'Rerum explicabo Et ', 'Dolore nobis corrupt', 'Inventore id sed do', 'Vitae vel hic eiusmo', 'Vero dignissimos rer', 'Incididunt laboris u', 'Molestias et quo quo', 'In numquam temporibu', 'Saepe et culpa inve', 'Sed duis exercitatio', 'Voluptatem amet ver', 'Repellendus Eum vol', 'Non voluptates archi', 'Est dolores omnis o', 'Aut non enim cumque ', 'Veniam est rerum id', NULL, NULL),
('PTJ180109', 0, 0, '0', '0', '24', '2021-03-18', '23:30:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL),
('PTJ180159', 0, 0, '0', '0', '5', '2021-02-18', '19:50:00', '1', '1', '1', '1', '1', '3', '4', '4', '3', '3', '3', '3', '', '4', '4', '4', '4', '4', '4', '4', '4', '4', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `log_ebt_santong`
--

CREATE TABLE `log_ebt_santong` (
  `pk_log_tengah_jaman` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` tinyint(4) DEFAULT '0',
  `is_update` tinyint(4) DEFAULT '0',
  `delete_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `update_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `insert_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `tanggal_input` date NOT NULL,
  `waktu` time NOT NULL,
  `tekanan_penstok` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gen_speed` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `voltage_generator_rs` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `voltage_generator_st` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `voltage_generator_rt` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arus_generator_r` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arus_generator_s` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arus_generator_t` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beban` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cos_phi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `freq` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excitation_volt` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excitation_arus` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exp_analog` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exp_edmi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `export` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `import` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temperature_bearing_1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temperature_bearing_2` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temperature_bearing_3` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temperature_bearing_4` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_air` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `generator` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mesin` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `log_ebt_santong`
--

INSERT INTO `log_ebt_santong` (`pk_log_tengah_jaman`, `is_delete`, `is_update`, `delete_by`, `update_by`, `insert_by`, `tanggal_input`, `waktu`, `tekanan_penstok`, `gen_speed`, `voltage_generator_rs`, `voltage_generator_st`, `voltage_generator_rt`, `arus_generator_r`, `arus_generator_s`, `arus_generator_t`, `beban`, `cos_phi`, `freq`, `excitation_volt`, `excitation_arus`, `exp_analog`, `exp_edmi`, `export`, `import`, `temperature_bearing_1`, `temperature_bearing_2`, `temperature_bearing_3`, `temperature_bearing_4`, `level_air`, `generator`, `mesin`) VALUES
('PTJ120856', 0, 0, '0', '5', '5', '2021-02-13', '02:10:00', '123', 'Elit inventore reru', 'Irure quis sit esse ', 'Rerum quia deleniti ', 'Eligendi non delectu', 'Officiis ut qui prov', 'Quam ipsam in veniam', 'Debitis eaque quae e', 'Enim et a omnis ad r', 'Omnis quo velit ab n', 'Voluptas porro aliqu', 'Voluptate quia ducim', 'A unde irure rerum r', 'Quas reprehenderit i', 'Non sint mollit prae', 'Et rerum eaque dolor', 'Rem et ullamco neque', 'Laboriosam facere a', 'Dolore do corporis o', 'Eveniet mollitia be', 'Quia dolorem quaerat', 'Duis earum omnis vol', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `log_ebt_trawangan`
--

CREATE TABLE `log_ebt_trawangan` (
  `pk_log_tengah_jaman` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` tinyint(4) DEFAULT '0',
  `is_update` tinyint(4) DEFAULT '0',
  `delete_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `update_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `insert_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `tanggal_input` date NOT NULL,
  `waktu` time NOT NULL,
  `tekanan_penstok` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gen_speed` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `voltage_generator_rs` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `voltage_generator_st` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `voltage_generator_rt` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arus_generator_r` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arus_generator_s` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arus_generator_t` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beban` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cos_phi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `freq` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excitation_volt` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excitation_arus` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exp_analog` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exp_edmi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `export` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `import` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temperature_bearing_1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temperature_bearing_2` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temperature_bearing_3` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temperature_bearing_4` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_air` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `generator` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mesin` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `log_ebt_trawangan`
--

INSERT INTO `log_ebt_trawangan` (`pk_log_tengah_jaman`, `is_delete`, `is_update`, `delete_by`, `update_by`, `insert_by`, `tanggal_input`, `waktu`, `tekanan_penstok`, `gen_speed`, `voltage_generator_rs`, `voltage_generator_st`, `voltage_generator_rt`, `arus_generator_r`, `arus_generator_s`, `arus_generator_t`, `beban`, `cos_phi`, `freq`, `excitation_volt`, `excitation_arus`, `exp_analog`, `exp_edmi`, `export`, `import`, `temperature_bearing_1`, `temperature_bearing_2`, `temperature_bearing_3`, `temperature_bearing_4`, `level_air`, `generator`, `mesin`) VALUES
('PTJ120859', 0, 0, '0', '5', '5', '2021-02-13', '02:15:00', '123', 'Magni anim optio od', 'Quis ad voluptas bea', 'Rerum qui eum sunt ', 'Deserunt aut dolor i', 'Sapiente autem natus', 'Quasi aliquid quos v', 'Autem aut inventore ', 'Consequatur qui dele', 'Laboriosam sint non', 'Et eius labore qui e', 'Eveniet quos laboru', 'Doloremque voluptas ', 'Aliqua Iure laborum', 'Provident provident', 'Velit non obcaecati ', 'Natus est eu similiq', 'Doloremque voluptas ', 'Ratione odit pariatu', 'Laudantium numquam ', 'Velit numquam recusa', 'Omnis voluptate moll', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `log_formulir_tukar_piket`
--

CREATE TABLE `log_formulir_tukar_piket` (
  `pk_formulir_tukar_piket` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` tinyint(4) DEFAULT NULL,
  `is_update` tinyint(4) DEFAULT NULL,
  `delete_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `update_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insert_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_pemohon` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shift_pemohon` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan_pemohon` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_pemohon` date NOT NULL,
  `nama_pengganti` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shift_pengganti` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan_pengganti` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alasan_pemohon` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `generator` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mesin` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log_hrto`
--

CREATE TABLE `log_hrto` (
  `pk_hrto` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` tinyint(4) DEFAULT '0',
  `is_update` tinyint(4) DEFAULT '0',
  `delete_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `update_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `insert_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `tanggal_input` date NOT NULL,
  `waktu` time NOT NULL,
  `thermal_hrto1_in` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thermal_hrto1_out` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thermal_hrto2_in` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thermal_hrto2_out` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gas_inlet_hrto2` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gas_inlet_hrto3` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gas_inlet_hrto4` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gas_inlet_hrto5` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `circulation_thermal_hrto1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `circulation_thermal_hrto2` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temperature_outlet_he` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pressure_outlet_he` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `outlet_circulation_hrto1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `outlet_circulation_hrto2` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pompa_sirkulasi_nomor` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `damper2` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `damper3` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `damper4` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `damper5` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `generator` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mesin` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `log_hrto`
--

INSERT INTO `log_hrto` (`pk_hrto`, `is_delete`, `is_update`, `delete_by`, `update_by`, `insert_by`, `tanggal_input`, `waktu`, `thermal_hrto1_in`, `thermal_hrto1_out`, `thermal_hrto2_in`, `thermal_hrto2_out`, `gas_inlet_hrto2`, `gas_inlet_hrto3`, `gas_inlet_hrto4`, `gas_inlet_hrto5`, `circulation_thermal_hrto1`, `circulation_thermal_hrto2`, `temperature_outlet_he`, `pressure_outlet_he`, `outlet_circulation_hrto1`, `outlet_circulation_hrto2`, `pompa_sirkulasi_nomor`, `damper2`, `damper3`, `damper4`, `damper5`, `generator`, `mesin`, `created_date`) VALUES
('1', 0, 0, '0', '0', '5', '2021-02-15', '00:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL),
('10', 0, 0, '0', '0', '5', '2021-02-15', '09:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL),
('11', 0, 0, '0', '0', '5', '2021-02-15', '10:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL),
('12', 0, 0, '0', '0', '5', '2021-02-15', '11:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL),
('13', 0, 0, '0', '0', '5', '2021-02-15', '12:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL),
('14', 0, 0, '0', '0', '5', '2021-02-15', '13:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL),
('15', 0, 0, '0', '0', '5', '2021-02-15', '14:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL),
('16', 0, 0, '0', '0', '5', '2021-02-15', '15:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL),
('17', 0, 0, '0', '0', '5', '2021-02-15', '16:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL),
('18', 0, 0, '0', '0', '5', '2021-02-15', '17:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL),
('19', 0, 0, '0', '0', '5', '2021-02-15', '18:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL),
('2', 0, 0, '0', '0', '5', '2021-02-15', '01:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL),
('20', 0, 0, '0', '0', '5', '2021-02-15', '19:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL),
('21', 0, 0, '0', '0', '5', '2021-02-15', '20:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL),
('22', 0, 0, '0', '0', '5', '2021-02-15', '21:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL),
('23', 0, 0, '0', '0', '5', '2021-02-15', '22:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL),
('24', 0, 0, '0', '0', '5', '2021-02-15', '23:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL),
('25', 0, 0, '0', '0', '5', '2021-02-16', '00:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL),
('26', 0, 0, '0', '0', '5', '2021-02-16', '01:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL),
('27', 0, 0, '0', '0', '5', '2021-02-16', '02:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL),
('28', 0, 0, '0', '0', '5', '2021-02-16', '03:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL),
('29', 0, 0, '0', '0', '5', '2021-02-16', '04:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL),
('3', 0, 0, '0', '0', '5', '2021-02-15', '02:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL),
('30', 0, 0, '0', '0', '5', '2021-02-16', '05:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL),
('31', 0, 0, '0', '0', '5', '2021-02-16', '06:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL),
('32', 0, 0, '0', '0', '5', '2021-02-16', '07:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL),
('33', 0, 0, '0', '0', '5', '2021-02-16', '08:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL),
('34', 0, 0, '0', '0', '5', '2021-02-16', '09:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL),
('35', 0, 0, '0', '0', '5', '2021-02-16', '10:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL),
('36', 0, 0, '0', '0', '5', '2021-02-16', '11:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL),
('37', 0, 0, '0', '0', '5', '2021-02-16', '12:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL),
('38', 0, 0, '0', '0', '5', '2021-02-16', '13:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL),
('39', 0, 0, '0', '0', '5', '2021-02-16', '14:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL),
('4', 0, 0, '0', '0', '5', '2021-02-15', '03:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL),
('40', 0, 0, '0', '0', '5', '2021-02-16', '15:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL),
('41', 0, 0, '0', '0', '5', '2021-02-16', '16:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL),
('42', 0, 0, '0', '0', '5', '2021-02-16', '17:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL),
('43', 0, 0, '0', '0', '5', '2021-02-16', '18:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL),
('44', 0, 0, '0', '0', '5', '2021-02-16', '19:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL),
('45', 0, 0, '0', '0', '5', '2021-02-16', '20:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL),
('46', 0, 0, '0', '0', '5', '2021-02-16', '21:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL),
('47', 0, 0, '0', '0', '5', '2021-02-16', '22:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL),
('48', 0, 0, '0', '0', '5', '2021-02-16', '23:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL),
('5', 0, 0, '0', '0', '5', '2021-02-15', '04:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL),
('6', 0, 0, '0', '0', '5', '2021-02-15', '05:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL),
('7', 0, 0, '0', '0', '5', '2021-02-15', '06:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL),
('8', 0, 0, '0', '0', '5', '2021-02-15', '07:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL),
('9', 0, 0, '0', '0', '5', '2021-02-15', '08:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL),
('HRTO280734', 0, 0, '0', '0', '22', '2021-03-01', '00:00:00', '12', '65', '12', '90', '74', '78', '72', '15', '1', '1', '1', '11', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, '2021-02-28');

-- --------------------------------------------------------

--
-- Table structure for table `log_niigata_engine`
--

CREATE TABLE `log_niigata_engine` (
  `pk_niigata_engine` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` tinyint(4) DEFAULT '0',
  `is_update` tinyint(4) DEFAULT '0',
  `delete_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `update_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `insert_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `air_pendingin_mesin` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `air_pendingin_intercooler` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minyak_pelumas_masuk_mesin` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `udara_bilas_a` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `udara_bilas_b` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bahan_bakar_masuk_mesin` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minyak_pelumas_tuas_katup` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minyak_pendingin_injektor` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gas_buang` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `load_limit_governor` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `silinder_sisi_a_1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `silinder_sisi_a_2` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `silinder_sisi_a_3` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `silinder_sisi_a_4` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `silinder_sisi_a_5` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `silinder_sisi_a_6` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `silinder_sisi_b_1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `silinder_sisi_b_2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `silinder_sisi_b_3` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `silinder_sisi_b_4` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `silinder_sisi_b_5` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `silinder_sisi_b_6` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bahan_bakar_mesin_masuk` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minyak_pendingin_injektor_masuk` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minyak_pendingin_injektor_keluar` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `air_pendingin_silinder_a_1` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `air_pendingin_silinder_a_2` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `air_pendingin_silinder_a_3` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `air_pendingin_silinder_a_4` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `air_pendingin_silinder_a_5` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `air_pendingin_silinder_a_6` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `air_pendingin_silinder_b_1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `air_pendingin_silinder_b_2` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `air_pendingin_silinder_b_3` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `air_pendingin_silinder_b_4` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `air_pendingin_silinder_b_5` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `air_pendingin_silinder_b_6` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `udara_masuk_intercooler_a` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `udara_masuk_intercooler_b` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `udara_keluar_intercooler_a` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `udara_keluar_intercooler_b` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masuk_filter` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `radiator_minyak_pelumas_masuk` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `radiator_minyak_pelumas_keluar` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `radiator_air_pendingin_mesin_masuk` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `radiator_air_pendingin_mesin_keluar` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `radiator_air_pendingin_intercooler_masuk` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `radiator_air_pendingin_intercooler_keluar` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kwh_ps` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hsd` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mfo_in` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mfo_return` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_input` date NOT NULL,
  `jam` time NOT NULL,
  `waktu_input` time NOT NULL,
  `operator` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_mesin` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generator` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mesin` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log_niigata_generator`
--

CREATE TABLE `log_niigata_generator` (
  `pk_niigata_generator` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` tinyint(4) DEFAULT '0',
  `is_update` tinyint(4) DEFAULT '0',
  `delete_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `update_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `insert_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `tegangan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frekuensi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faktor_daya` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daya_semu` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beban` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arus_r` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arus_s` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arus_t` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penguat_medan_arus` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penguat_medan_tegangan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `suhu_1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `suhu_2` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `suhu_3` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bearing` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendingin_udara_generator_masuk` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendingin_udara_generator_keluar` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `putaran_turbo_a` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `putaran_turbo_b` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sikap_kwh_meter_hsd` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_become` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daya_r` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daya_s` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daya_t` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daya_mw` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `air_pendingin_mesin_masuk` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `air_pendingin_mesin_keluar` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minyak_pelumas_masuk` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minyak_pelumas_keluar` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `udara_bilas_A` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `udara_bilas_B` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `air_pendingin_udara_masuk` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `silinder_sisi_A_1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `silinder_sisi_A_2` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `silinder_sisi_A_3` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `silinder_sisi_A_4` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `silinder_sisi_A_5` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `silinder_sisi_A_6` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `silinder_sisi_B_1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `silinder_sisi_B_2` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `silinder_sisi_B_3` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `silinder_sisi_B_4` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `silinder_sisi_B_5` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `silinder_sisi_B_6` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `turbo_a_1_a` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `turbo_a_2_a` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `turbo_b_1_a` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `turbo_b_2_a` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `turbo_a_1_b` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `turbo_a_2_b` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `turbo_b_1_b` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `turbo_b_2_b` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_input` date NOT NULL,
  `waktu` time NOT NULL,
  `waktu_input` time NOT NULL,
  `operator` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `generator` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mesin` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `sikap_kwh_meter_mfo` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log_paok_motong_checklist`
--

CREATE TABLE `log_paok_motong_checklist` (
  `pk_checklist` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ch_a` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_input` date DEFAULT NULL,
  `is_delete` tinyint(4) DEFAULT '0',
  `is_update` tinyint(4) DEFAULT '0',
  `insert_by` tinyint(4) DEFAULT '0',
  `delete_by` tinyint(4) DEFAULT '0',
  `update_by` tinyint(4) DEFAULT '0',
  `ch_b` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ch_c` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ch_d` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ch_e` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ch_f` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ch_g` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ch_h` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ch_i` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_a` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_b` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_c` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_d` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_e` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_f` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_g` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_h` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gov_a` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gov_b` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gov_c` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gov_d` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gov_e` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sgb_a` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sgb_b` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sgb_c` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sgb_d` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sgb_e` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sgb_f` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sgb_g` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bm_a` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bm_b` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bm_c` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bm_d` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bm_e` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bm_f` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bm_g` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bm_h` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gen_a` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gen_b` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gen_c` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gen_g` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gen_h` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gen_i` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waktu_input` time DEFAULT NULL,
  `generator` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mesin` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `log_paok_motong_checklist`
--

INSERT INTO `log_paok_motong_checklist` (`pk_checklist`, `ch_a`, `tanggal_input`, `is_delete`, `is_update`, `insert_by`, `delete_by`, `update_by`, `ch_b`, `ch_c`, `ch_d`, `ch_e`, `ch_f`, `ch_g`, `ch_h`, `ch_i`, `ip_a`, `ip_b`, `ip_c`, `ip_d`, `ip_e`, `ip_f`, `ip_g`, `ip_h`, `gov_a`, `gov_b`, `gov_c`, `gov_d`, `gov_e`, `sgb_a`, `sgb_b`, `sgb_c`, `sgb_d`, `sgb_e`, `sgb_f`, `sgb_g`, `bm_a`, `bm_b`, `bm_c`, `bm_d`, `bm_e`, `bm_f`, `bm_g`, `bm_h`, `gen_a`, `gen_b`, `gen_c`, `gen_g`, `gen_h`, `gen_i`, `waktu_input`, `generator`, `mesin`) VALUES
('PBP240553', 'Ya', '0000-00-00', 1, 0, 5, 5, 5, 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', '23:30:00', NULL, NULL),
('PBP250525', 'Ya', '2021-01-25', 0, 0, 5, 0, 0, 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', '23:50:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `log_penyulang_ampenan`
--

CREATE TABLE `log_penyulang_ampenan` (
  `pk_penyulang_ampenan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` tinyint(4) DEFAULT '0',
  `is_update` tinyint(4) DEFAULT '0',
  `delete_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `update_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `insert_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `tanggal_input` date NOT NULL,
  `waktu` time NOT NULL,
  `lcc_analog` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lcc_digital` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ps9_analog` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ps9_digital` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `praya_analog` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `praya_digital` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senggigi_analog` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senggigi_digital` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kopang_analog` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kopang_digital` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gomong_analog` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gomong_digital` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kediri_analog` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kediri_digital` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kopel_taman_a_analog_import` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kopel_taman_a_analog_export` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kopel_taman_a_digital_import` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kopel_taman_a_digital_export` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kopel_ampenan_biau_analog_import` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kopel_ampenan_biau_analog_export` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kopel_ampenan_biau_digital_import` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kopel_ampenan_biau_digital_export` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sewatama1_import` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sewatama1_export` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sewatama2_import` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sewatama2_export` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kopel_gi1_import` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kopel_gi1_export` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kopel_gi2_import` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kopel_gi2_export` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `generator` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mesin` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `log_penyulang_ampenan`
--

INSERT INTO `log_penyulang_ampenan` (`pk_penyulang_ampenan`, `is_delete`, `is_update`, `delete_by`, `update_by`, `insert_by`, `tanggal_input`, `waktu`, `lcc_analog`, `lcc_digital`, `ps9_analog`, `ps9_digital`, `praya_analog`, `praya_digital`, `senggigi_analog`, `senggigi_digital`, `kopang_analog`, `kopang_digital`, `gomong_analog`, `gomong_digital`, `kediri_analog`, `kediri_digital`, `kopel_taman_a_analog_import`, `kopel_taman_a_analog_export`, `kopel_taman_a_digital_import`, `kopel_taman_a_digital_export`, `kopel_ampenan_biau_analog_import`, `kopel_ampenan_biau_analog_export`, `kopel_ampenan_biau_digital_import`, `kopel_ampenan_biau_digital_export`, `sewatama1_import`, `sewatama1_export`, `sewatama2_import`, `sewatama2_export`, `kopel_gi1_import`, `kopel_gi1_export`, `kopel_gi2_import`, `kopel_gi2_export`, `generator`, `mesin`, `created_date`) VALUES
('PA010938', 0, 0, '0', '5', '5', '2021-02-02', '03:15:00', 'Ad ea quasi ipsum co', 'Maxime nesciunt sus', 'Magni accusamus esse', 'Reiciendis et aut cu', 'Distinctio Culpa ut', 'Et voluptate volupta', 'Quo placeat dicta a', 'Ut fugit consequunt', 'Nobis incididunt per', 'Sunt cupiditate accu', 'Odit duis est evenie', 'Unde id in quis veri', 'Assumenda deserunt f', 'Nihil sit nemo elige', 'Sint iusto molestia', 'Reprehenderit dolor', 'Sit consequat Neces', 'Iusto qui corporis d', 'Iusto beatae aliquip', 'Quam libero veritati', 'Repellendus Culpa ', 'Aut animi cupiditat', 'Pariatur Est quia d', 'Voluptatem ullamco i', 'Recusandae Laborum ', 'Ducimus perferendis', 'Dolorem veritatis li', '', 'Laboriosam ipsam co', 'Deleniti aliquid eli', 'Natus sunt pariatur', 'coba edit data', NULL),
('PA020954', 1, 0, '5', '0', '5', '2021-02-02', '15:35:00', 'Lorem sit quidem pro', 'Enim porro vitae mol', 'Aut minim excepteur ', 'Iste at vel vel aspe', 'Soluta dolor aliquam', 'Consequatur nobis as', 'Dolores duis quas al', 'Reprehenderit quia n', 'Nemo deleniti simili', 'Et delectus reprehe', 'Et deleniti omnis Na', 'Voluptatem in sequi', 'Assumenda expedita n', 'Esse aut ut dolorem', 'Vel laboriosam obca', 'Perferendis impedit', 'Dolor elit natus mo', 'In pariatur Modi in', 'Aut recusandae Eu c', 'Culpa ut nostrud quo', 'Officia dolorem quis', 'Incididunt ducimus ', 'Non iusto provident', 'Officiis maxime est', 'Optio eu ad qui ut ', 'Minima veniam accus', 'Non dolore hic earum', '', 'Porro architecto exe', 'Corrupti voluptates', 'Obcaecati et illo do', 'Et omnis irure nemo ', NULL),
('PA021004', 1, 0, '5', '0', '5', '2021-02-02', '16:10:00', 'Consequuntur porro e', 'Ex non molestiae quo', 'Laudantium quasi at', 'Numquam deserunt sap', 'Repudiandae illo vol', 'Vel minim excepteur ', 'Modi voluptas maxime', 'Nulla est magni aute', 'Ad earum excepturi v', 'Tempore quia eos fu', 'Labore inventore id ', 'Labore dolor tempore', 'Natus rerum aliquam ', 'Ullamco lorem aliqui', 'Ullamco eos sequi ex', 'Quo sint doloribus ', 'Vero tempora nulla v', 'Atque est qui sequi ', 'Ut ratione aliquip e', 'Et doloribus ab id s', 'Est doloribus quia ', 'Aliquip aliquid ipsu', 'Aut expedita eos in ', 'Dolore dolor animi ', 'Vel sed et ratione f', 'Ab incidunt vitae e', 'Id veniam incidunt', '', 'Voluptatem cupidata', 'Magni maxime nisi en', 'Voluptatem cupidita', 'Neque consectetur mi', NULL),
('PA021018', 0, 0, '0', '0', '5', '2021-02-02', '16:15:00', 'Recusandae Ab id s', 'Consequatur Nesciun', 'Molestias ea delenit', 'Minima facere vitae ', 'Fugiat et error aut', 'Cupiditate quis dolo', 'Minim sed commodo ip', 'Delectus quasi nost', 'Reprehenderit modi ', 'Est cupiditate quo ', 'Ut saepe at magni ex', 'Ex est nesciunt om', 'Expedita ex est eius', 'Veritatis doloremque', 'Elit occaecat sequi', 'Deleniti voluptas si', 'Officiis quod maxime', 'Impedit veniam fug', 'Quidem reiciendis iu', 'Accusamus eiusmod co', 'Nisi quibusdam dolor', 'Eum laborum Eu saep', 'Occaecat pariatur R', 'Aspernatur assumenda', 'Nulla lorem natus ma', 'Nemo non sint porro ', 'Nisi qui est ducimus', 'Placeat id totam ve', 'Anim esse laudantium', 'Iste iure consequatu', 'Sed sit ex eius mol', 'Enim cumque recusand', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `log_penyulang_analog_bateray`
--

CREATE TABLE `log_penyulang_analog_bateray` (
  `pk_penyulang_analog_bateray` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` tinyint(4) DEFAULT '0',
  `is_update` tinyint(4) DEFAULT '0',
  `delete_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `update_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `insert_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `tanggal_input` date NOT NULL,
  `waktu` time NOT NULL,
  `rempung` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pancor` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keruak` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sakra` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masbagik` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sikur` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit23_110vdc_v` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit23_110vdc_i` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit23_24vdc_v` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit23_24vdc_i` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit45_110vdc_v` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit45_110vdc_i` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit45_24vdc_v` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit45_24vdc_i` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penyulang_110vdc_v` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penyulang_110vdc_i` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penyulang_24vdc_v` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penyulang_24vdc_i` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `generator` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mesin` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `log_penyulang_analog_bateray`
--

INSERT INTO `log_penyulang_analog_bateray` (`pk_penyulang_analog_bateray`, `is_delete`, `is_update`, `delete_by`, `update_by`, `insert_by`, `tanggal_input`, `waktu`, `rempung`, `pancor`, `keruak`, `sakra`, `masbagik`, `sikur`, `unit23_110vdc_v`, `unit23_110vdc_i`, `unit23_24vdc_v`, `unit23_24vdc_i`, `unit45_110vdc_v`, `unit45_110vdc_i`, `unit45_24vdc_v`, `unit45_24vdc_i`, `penyulang_110vdc_v`, `penyulang_110vdc_i`, `penyulang_24vdc_v`, `penyulang_24vdc_i`, `generator`, `mesin`) VALUES
('1', 0, 0, '0', '0', '5', '2021-02-15', '00:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL),
('10', 0, 0, '0', '0', '5', '2021-02-15', '09:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]'),
('11', 0, 0, '0', '0', '5', '2021-02-15', '10:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]'),
('12', 0, 0, '0', '0', '5', '2021-02-15', '11:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]'),
('13', 0, 0, '0', '0', '5', '2021-02-15', '12:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]'),
('14', 0, 0, '0', '0', '5', '2021-02-15', '13:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]'),
('15', 0, 0, '0', '0', '5', '2021-02-15', '14:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]'),
('16', 0, 0, '0', '0', '5', '2021-02-15', '15:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]'),
('17', 0, 0, '0', '0', '5', '2021-02-15', '16:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]'),
('18', 0, 0, '0', '0', '5', '2021-02-15', '17:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]'),
('19', 0, 0, '0', '0', '5', '2021-02-15', '18:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]'),
('2', 0, 0, '0', '0', '5', '2021-02-15', '01:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]'),
('20', 0, 0, '0', '0', '5', '2021-02-15', '19:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]'),
('21', 0, 0, '0', '0', '5', '2021-02-15', '20:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]'),
('22', 0, 0, '0', '0', '5', '2021-02-15', '21:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]'),
('23', 0, 0, '0', '0', '5', '2021-02-15', '22:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]'),
('24', 0, 0, '0', '0', '5', '2021-02-15', '23:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]'),
('25', 0, 0, '0', '0', '5', '2021-02-16', '00:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]'),
('26', 0, 0, '0', '0', '5', '2021-02-16', '01:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]'),
('27', 0, 0, '0', '0', '5', '2021-02-16', '02:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]'),
('28', 0, 0, '0', '0', '5', '2021-02-16', '03:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]'),
('29', 0, 0, '0', '0', '5', '2021-02-16', '04:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]'),
('3', 0, 0, '0', '0', '5', '2021-02-15', '02:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]'),
('30', 0, 0, '0', '0', '5', '2021-02-16', '05:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]'),
('31', 0, 0, '0', '0', '5', '2021-02-16', '06:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]'),
('32', 0, 0, '0', '0', '5', '2021-02-16', '07:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]'),
('33', 0, 0, '0', '0', '5', '2021-02-16', '08:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]'),
('34', 0, 0, '0', '0', '5', '2021-02-16', '09:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]'),
('35', 0, 0, '0', '0', '5', '2021-02-16', '10:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]'),
('36', 0, 0, '0', '0', '5', '2021-02-16', '11:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]'),
('37', 0, 0, '0', '0', '5', '2021-02-16', '12:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]'),
('38', 0, 0, '0', '0', '5', '2021-02-16', '13:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]'),
('39', 0, 0, '0', '0', '5', '2021-02-16', '14:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]'),
('4', 0, 0, '0', '0', '5', '2021-02-15', '03:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]'),
('40', 0, 0, '0', '0', '5', '2021-02-16', '15:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]'),
('41', 0, 0, '0', '0', '5', '2021-02-16', '16:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]'),
('42', 0, 0, '0', '0', '5', '2021-02-16', '17:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]'),
('43', 0, 0, '0', '0', '5', '2021-02-16', '18:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]'),
('44', 0, 0, '0', '0', '5', '2021-02-16', '19:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]'),
('45', 0, 0, '0', '0', '5', '2021-02-16', '20:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]'),
('46', 0, 0, '0', '0', '5', '2021-02-16', '21:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]'),
('47', 0, 0, '0', '0', '5', '2021-02-16', '22:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]'),
('48', 0, 0, '0', '0', '5', '2021-02-16', '23:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]'),
('5', 0, 0, '0', '0', '5', '2021-02-15', '04:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]'),
('6', 0, 0, '0', '0', '5', '2021-02-15', '05:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]'),
('7', 0, 0, '0', '0', '5', '2021-02-15', '06:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]'),
('8', 0, 0, '0', '0', '5', '2021-02-15', '07:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]'),
('9', 0, 0, '0', '0', '5', '2021-02-15', '08:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '[NULL]', '[NULL]');

-- --------------------------------------------------------

--
-- Table structure for table `log_penyulang_taman`
--

CREATE TABLE `log_penyulang_taman` (
  `pk_penyulang_taman` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` tinyint(4) DEFAULT '0',
  `is_update` tinyint(4) DEFAULT '0',
  `delete_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `update_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `insert_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `tanggal_input` date NOT NULL,
  `waktu` time NOT NULL,
  `trafo_pielstick_r` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trafo_pielstick_s` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trafo_pielstick_t` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trafo_pielstick_kw` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feeder_cilinaya_r` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feeder_cilinaya_s` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feeder_cilinaya_t` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feeder_cilinaya_kw` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `couple_a_r` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `couple_a_s` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `couple_a_t` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `couple_a_kw` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feeder_bertais_r` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feeder_bertais_s` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feeder_bertais_t` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feeder_bertais_kw` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `couple_c1_r` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `couple_c1_s` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `couple_c1_t` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `couple_c1_kw` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tegangan_ruston_r` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tegangan_ruston_s` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tegangan_ruston_t` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tegangan_ruston_kw` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `couple_c2_r` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `couple_c2_s` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `couple_c2_t` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `couple_c2_kw` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sewa_batam1_r` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sewa_batam1_s` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sewa_batam1_t` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sewa_batam1_kw` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feeder_bandara_r` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feeder_bandara_s` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feeder_bandara_t` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feeder_bandara_kw` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `incoming1_import` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `incoming1_export` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `incoming1_kw` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `outgoing_import` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `outgoing_export` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `outgoing_kw` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `incoming2_import` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `incoming2_export` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `incoming2_kw` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feeder_cakra_kota_r` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feeder_cakra_kota_s` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feeder_cakra_kota_t` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feeder_cakra_kota_kw` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feeder_mataram_r` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feeder_mataram_s` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feeder_mataram_t` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feeder_mataram_kw` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `couple_b_r` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `couple_b_s` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `couple_b_t` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `couple_b_kw` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sewa_batam2_r` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sewa_batam2_s` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sewa_batam2_t` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sewa_batam2_kw` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log_perjaman_mesin`
--

CREATE TABLE `log_perjaman_mesin` (
  `pk_perjaman_mesin` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` tinyint(4) DEFAULT '0',
  `is_update` tinyint(4) DEFAULT '0',
  `delete_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `update_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `insert_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `tanggal_input` date DEFAULT NULL,
  `waktu` time DEFAULT NULL,
  `gas1` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gas2` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gas3` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gas4` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gas5` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gas6` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `turbo_masuk_kiri_atas` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `turbo_masuk_kiri_bawah` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `turbo_masuk_kanan_atas` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `turbo_masuk_kanan_bawah` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `turbo_keluar_kiri` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `turbo_keluar_kanan` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rak_bbm` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `governor_load_limit` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `air_ped_injektor` float DEFAULT NULL,
  `pelumasan_mesin` float DEFAULT NULL,
  `udara_masuk_kiri` float DEFAULT NULL,
  `udara_masuk_kanan` float DEFAULT NULL,
  `bahan_bakar_mesin` float DEFAULT NULL,
  `udara_masuk` float DEFAULT NULL,
  `udara_start` float DEFAULT NULL,
  `air_pend_masuk_mesin` float DEFAULT NULL,
  `putaran_turbo_kiri` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `putaran_turbo_kanan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bearing1` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bearing2` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bearing3` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bearing4` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bearing5` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bearing6` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bearing7` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bearing8` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_mesin` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generator` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mesin` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `udara_masuk_l` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `udara_masuk_r` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minyak_pelumas_masuk_mesin_l` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minyak_pelumas_radiator_masuk` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `air_pendingin_mesin_masuk_l` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `air_pendingin_radiator_masuk` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `air_pendingin_injektor_masuk` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keluar_cylinder_l_1` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keluar_cylinder_l_2` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keluar_cylinder_l_3` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keluar_cylinder_l_4` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keluar_cylinder_l_5` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keluar_cylinder_l_6` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keluar_cylinder_r_1` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keluar_cylinder_r_2` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keluar_cylinder_r_3` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keluar_cylinder_r_4` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keluar_cylinder_r_5` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keluar_cylinder_r_6` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gas_buang_cylinder_l_1` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gas_buang_cylinder_l_2` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gas_buang_cylinder_l_3` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gas_buang_cylinder_l_4` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gas_buang_cylinder_l_5` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gas_buang_cylinder_l_6` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flow_meter_bahan_bakar` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minyak_pelumas_masuk_mesin_r` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minyak_pelumas_radiator_keluar` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `air_pendingin_mesin_masuk_r` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `air_pendingin_radiator_keluar` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `air_pendingin_injektor_keluar` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `log_perjaman_mesin`
--

INSERT INTO `log_perjaman_mesin` (`pk_perjaman_mesin`, `is_delete`, `is_update`, `delete_by`, `update_by`, `insert_by`, `tanggal_input`, `waktu`, `gas1`, `gas2`, `gas3`, `gas4`, `gas5`, `gas6`, `turbo_masuk_kiri_atas`, `turbo_masuk_kiri_bawah`, `turbo_masuk_kanan_atas`, `turbo_masuk_kanan_bawah`, `turbo_keluar_kiri`, `turbo_keluar_kanan`, `rak_bbm`, `governor_load_limit`, `air_ped_injektor`, `pelumasan_mesin`, `udara_masuk_kiri`, `udara_masuk_kanan`, `bahan_bakar_mesin`, `udara_masuk`, `udara_start`, `air_pend_masuk_mesin`, `putaran_turbo_kiri`, `putaran_turbo_kanan`, `bearing1`, `bearing2`, `bearing3`, `bearing4`, `bearing5`, `bearing6`, `bearing7`, `bearing8`, `fk_mesin`, `generator`, `mesin`, `created_date`, `udara_masuk_l`, `udara_masuk_r`, `minyak_pelumas_masuk_mesin_l`, `minyak_pelumas_radiator_masuk`, `air_pendingin_mesin_masuk_l`, `air_pendingin_radiator_masuk`, `air_pendingin_injektor_masuk`, `keluar_cylinder_l_1`, `keluar_cylinder_l_2`, `keluar_cylinder_l_3`, `keluar_cylinder_l_4`, `keluar_cylinder_l_5`, `keluar_cylinder_l_6`, `keluar_cylinder_r_1`, `keluar_cylinder_r_2`, `keluar_cylinder_r_3`, `keluar_cylinder_r_4`, `keluar_cylinder_r_5`, `keluar_cylinder_r_6`, `gas_buang_cylinder_l_1`, `gas_buang_cylinder_l_2`, `gas_buang_cylinder_l_3`, `gas_buang_cylinder_l_4`, `gas_buang_cylinder_l_5`, `gas_buang_cylinder_l_6`, `flow_meter_bahan_bakar`, `minyak_pelumas_masuk_mesin_r`, `minyak_pelumas_radiator_keluar`, `air_pendingin_mesin_masuk_r`, `air_pendingin_radiator_keluar`, `air_pendingin_injektor_keluar`) VALUES
('PM160322', 0, 0, '0', '0', '5', '2021-02-16', '00:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 1, 1, 1, 1, 1, 1, 1, 1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, '1', NULL, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
('PM160335', 0, 0, '0', '0', '30', '2021-02-16', '10:00:00', '', '', '', '', '', '', '532', '', '', '', '512', '451', '4.7', '5.1', 1.9, 5.2, 0, 0, 0, 1.1, 20, 0, '', '', '78', '81', '83', '88', '79', '86', '79', '', NULL, NULL, '4', NULL, '', '', '55', '70', '82', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '472', '', '', '', '', '', '', '55', '54', '82', '', ''),
('PM210420', 0, 0, '0', '0', '51', '2021-02-21', '09:00:00', '375', '', '456', '426', '443', '569', '544', '', '', '', '513', '400', '5', '5,4', 1, 5, 0, 0, 0, 1, 19, 4, '', '', '78', '81', '84', '87', '80', '86', '79', '', NULL, NULL, '3', '2021-02-21', '', '', '55', '66', '82', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '467', '457', '', '461', '513', '376', NULL, '55', '53', '82', '77', ''),
('PM210428', 0, 0, '0', '0', '51', '2021-02-21', '10:00:00', '377', '', '449', '428', '445', '568', '544', '', '', '', '517', '402', '4,5', '4,9', 1, 4, 0, 0, 0, 1, 19, 4, '', '', '79', '82', '84', '88', '80', '86', '89', '', NULL, NULL, '3', '2021-02-21', '', '', '57', '68', '82', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '468', '458', '', '446', '515', '378', NULL, '57', '56', '82', '77', ''),
('PM210434', 0, 0, '0', '0', '51', '2021-02-21', '11:00:00', '368', '', '439', '420', '436', '556', '532', '', '', '', '501', '396', '4,5', '4,9', 1, 4, 0, 0, 0, 1, 19, 4, '', '', '80', '82', '84', '89', '80', '87', '81', '', NULL, NULL, '3', '2021-02-21', '', '', '58', '68', '82', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '457', '447', '', '446', '512', '372', NULL, '58', '58', '82', '77', ''),
('PM210849', 0, 0, '0', '0', '5', '2021-02-22', '00:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 1, 1, 1, 1, 1, 1, 1, 1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, '1', '2021-02-21', '1', '1', '11', '1', '11', '11', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, '1', '1', '2', '1', '1'),
('PM211005', 0, 0, '0', '0', '22', '2021-02-22', '00:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 1, 1, 1, 1, 1, 1, 1, 1, '1', '1', '65', '65', '65', '65', '65', '65', '65', '65', NULL, NULL, '1', '2021-02-21', '1', '1', '1', '11', '1', '1', '1', '11', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '11', '1', '1', '1', '1', '1', '1', NULL, '1', '1', '1', '1', '1'),
('PM211056', 0, 0, '0', '0', '22', '2021-02-22', '00:00:00', '1', '11', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '11', '1', 1, 1, 1, 1, 1, 1, 1, 1, '1', '1', '65', '65', '65', '65', '65', '65', '65', '65', NULL, NULL, '1', '2021-02-21', '1', '1', '1', '1', '', '1', '1', '1', '1', '11', '1', '1', '1', '1', '1', '1', '11', '1', '1', '1', '1', '1', '1', '1', '1', NULL, '1', '11', '1', '1', '1'),
('PM211116', 0, 0, '0', '0', '22', '2021-02-22', '06:00:00', '600', '46', '200', '24', '2', '4', '4', '4', '1', '', '1', '1', '1', '1', 1, 1, 1, 1, 1, 1, 1, 1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, '4', '2021-02-21', '23', '31', '3', '35', '34', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '4', '3', '1', NULL, '56', '111', '1', '1', '1'),
('PM211122', 0, 0, '0', '0', '25', '2021-02-22', '23:00:00', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', 2, 2, 2, 2, 2, 2, 2, 2, '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', NULL, NULL, '8', '2021-02-21', '2', '2', '2', '2', '2', '100', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', NULL, '2', '2', '2', '2', '2'),
('PM211126', 0, 0, '0', '0', '22', '2021-02-22', '15:00:00', '600', '46', '200', '24', '2', '4', '4', '4', '1', '', '1', '1', '1', '1', 1, 1, 1, 1, 1, 1, 1, 1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '111', NULL, NULL, '4', '2021-02-21', '23', '31', '3', '35', '34', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '4', '3', '1', NULL, '56', '111', '1', '1', '1'),
('PM311000', 0, 0, '0', '0', '5', '2021-03-31', '10:00:00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', NULL, NULL, '3', '2021-03-31', '24', '100', '45', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `log_perjaman_mesin_generator`
--

CREATE TABLE `log_perjaman_mesin_generator` (
  `pk_perjaman_mesin_generator` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` tinyint(4) DEFAULT '0',
  `is_update` tinyint(4) DEFAULT '0',
  `delete_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `update_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `insert_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `tanggal_input` date NOT NULL,
  `waktu` time NOT NULL,
  `input_volt` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `input_hz` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `input_cos` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `input_mvar` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `input_bebanmw` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `input_arus_r` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `input_arus_s` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `input_arus_t` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `input_exiter_a` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `input_exiter_v` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `input_winding1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `input_winding2` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `input_winding3` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `input_winding4` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `input_winding5` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `input_winding6` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `input_bearing` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `input_kwh_produksi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `input_kwh_alat_bantu` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `generator` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mesin` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `log_perjaman_mesin_generator`
--

INSERT INTO `log_perjaman_mesin_generator` (`pk_perjaman_mesin_generator`, `is_delete`, `is_update`, `delete_by`, `update_by`, `insert_by`, `tanggal_input`, `waktu`, `input_volt`, `input_hz`, `input_cos`, `input_mvar`, `input_bebanmw`, `input_arus_r`, `input_arus_s`, `input_arus_t`, `input_exiter_a`, `input_exiter_v`, `input_winding1`, `input_winding2`, `input_winding3`, `input_winding4`, `input_winding5`, `input_winding6`, `input_bearing`, `input_kwh_produksi`, `input_kwh_alat_bantu`, `generator`, `mesin`, `created_date`) VALUES
('PMG280646', 0, 0, '0', '0', '22', '2021-03-01', '00:00:00', '1', '1', '1', '11', '1', '1', '1', '1', '1', '1', '1', '1', '1', '62', '62', '1', '123', '123', '123', NULL, '1', '2021-02-28'),
('PMG281159', 0, 0, '0', '0', '66', '2021-04-28', '11:00:00', '20.4', '50', '0.99', '0.5', '3589', '103', '101', '101', '5.2', '', '69.6', '70.9', '73.2', '', '', '', '', '', '', NULL, '2', '2021-04-28');

-- --------------------------------------------------------

--
-- Table structure for table `log_pielstick_engine`
--

CREATE TABLE `log_pielstick_engine` (
  `pk_pielstick_engine` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` tinyint(4) DEFAULT '0',
  `is_update` tinyint(4) DEFAULT '0',
  `delete_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `update_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `insert_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `tanggal_input` date DEFAULT NULL,
  `waktu` time DEFAULT NULL,
  `udara_masuk_sisi_a` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `udara_masuk_sisi_b` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minyak_pelumas_masuk` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minyak_pelumas_keluar` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `air_pendingin_masuk_mesin` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `air_pendingin_keluar_mesin` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `masuk_cooler_sisi_a` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `masuk_cooler_sisi_b` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keluar_cooler_sisi_a` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keluar_cooler_sisi_b` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `injector_masuk` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `injector_keluar` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `air_pendingin_keluar_silinder_sisi_a1` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `air_pendingin_keluar_silinder_sisi_a2` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `air_pendingin_keluar_silinder_sisi_a3` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `air_pendingin_keluar_silinder_sisi_a4` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `air_pendingin_keluar_silinder_sisi_a5` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `air_pendingin_keluar_silinder_sisi_a6` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `air_pendingin_keluar_silinder_sisi_b1` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `air_pendingin_keluar_silinder_sisi_b2` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `air_pendingin_keluar_silinder_sisi_b3` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `air_pendingin_keluar_silinder_sisi_b4` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `air_pendingin_keluar_silinder_sisi_b5` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `air_pendingin_keluar_silinder_sisi_b6` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gas_buang_keluar_silinder_sisi_a_1` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gas_buang_keluar_silinder_sisi_a_2` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gas_buang_keluar_silinder_sisi_a_3` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gas_buang_keluar_silinder_sisi_a_4` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gas_buang_keluar_silinder_sisi_a_5` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gas_buang_keluar_silinder_sisi_a_6` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gas_buang_keluar_silinder_sisi_b_1` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gas_buang_keluar_silinder_sisi_b_2` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gas_buang_keluar_silinder_sisi_b_3` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gas_buang_keluar_silinder_sisi_b_4` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gas_buang_keluar_silinder_sisi_b_5` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gas_buang_keluar_silinder_sisi_b_6` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_bearing1` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_bearing2` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_bearing3` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_bearing4` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_bearing5` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_bearing6` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_bearing7` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `suhu_ruangan` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rack_bahan_bakar` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `governor_load_limit` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tekanan_minyak_pelumas_masuk` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tekanan_minyak_pelumas_keluar` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `udara_masuk_disalurkan_sisi_a` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `udara_masuk_disalurkan_sisi_b` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pelumas_rocker_arm` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bahan_bakar1` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bahan_bakar2` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `air_pendingin_cw` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `air_pendingin_jw` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `air_pendingin_rw` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `putaran_turbo_sisi_a` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `putaran_turbo_sisi_b` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generator` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mesin` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `log_pielstick_engine`
--

INSERT INTO `log_pielstick_engine` (`pk_pielstick_engine`, `is_delete`, `is_update`, `delete_by`, `update_by`, `insert_by`, `tanggal_input`, `waktu`, `udara_masuk_sisi_a`, `udara_masuk_sisi_b`, `minyak_pelumas_masuk`, `minyak_pelumas_keluar`, `air_pendingin_masuk_mesin`, `air_pendingin_keluar_mesin`, `masuk_cooler_sisi_a`, `masuk_cooler_sisi_b`, `keluar_cooler_sisi_a`, `keluar_cooler_sisi_b`, `injector_masuk`, `injector_keluar`, `air_pendingin_keluar_silinder_sisi_a1`, `air_pendingin_keluar_silinder_sisi_a2`, `air_pendingin_keluar_silinder_sisi_a3`, `air_pendingin_keluar_silinder_sisi_a4`, `air_pendingin_keluar_silinder_sisi_a5`, `air_pendingin_keluar_silinder_sisi_a6`, `air_pendingin_keluar_silinder_sisi_b1`, `air_pendingin_keluar_silinder_sisi_b2`, `air_pendingin_keluar_silinder_sisi_b3`, `air_pendingin_keluar_silinder_sisi_b4`, `air_pendingin_keluar_silinder_sisi_b5`, `air_pendingin_keluar_silinder_sisi_b6`, `gas_buang_keluar_silinder_sisi_a_1`, `gas_buang_keluar_silinder_sisi_a_2`, `gas_buang_keluar_silinder_sisi_a_3`, `gas_buang_keluar_silinder_sisi_a_4`, `gas_buang_keluar_silinder_sisi_a_5`, `gas_buang_keluar_silinder_sisi_a_6`, `gas_buang_keluar_silinder_sisi_b_1`, `gas_buang_keluar_silinder_sisi_b_2`, `gas_buang_keluar_silinder_sisi_b_3`, `gas_buang_keluar_silinder_sisi_b_4`, `gas_buang_keluar_silinder_sisi_b_5`, `gas_buang_keluar_silinder_sisi_b_6`, `main_bearing1`, `main_bearing2`, `main_bearing3`, `main_bearing4`, `main_bearing5`, `main_bearing6`, `main_bearing7`, `suhu_ruangan`, `rack_bahan_bakar`, `governor_load_limit`, `tekanan_minyak_pelumas_masuk`, `tekanan_minyak_pelumas_keluar`, `udara_masuk_disalurkan_sisi_a`, `udara_masuk_disalurkan_sisi_b`, `pelumas_rocker_arm`, `bahan_bakar1`, `bahan_bakar2`, `air_pendingin_cw`, `air_pendingin_jw`, `air_pendingin_rw`, `putaran_turbo_sisi_a`, `putaran_turbo_sisi_b`, `generator`, `mesin`, `created_date`) VALUES
('PE060402', 1, 0, '5', '0', '5', '2021-03-06', '01:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '5', '5', '2021-03-06'),
('PE060437', 0, 0, '0', '0', '5', '2021-03-06', '01:00:00', '1', '1', '1', '1', '19', '09', '09', '0', '90', '90', '90', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '5', '5', '2021-03-06');

-- --------------------------------------------------------

--
-- Table structure for table `log_pielstick_generator`
--

CREATE TABLE `log_pielstick_generator` (
  `pk_pielstick_generator` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` tinyint(4) DEFAULT '0',
  `is_update` tinyint(4) DEFAULT '0',
  `delete_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `update_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `insert_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `tanggal_input` date NOT NULL,
  `waktu` time NOT NULL,
  `tegangan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frekwensi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faktor_daya` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daya_semu` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beban` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arus_r` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arus_s` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arus_t` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penguat_medan_teg` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penguat_medan_arus` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kumparan_generator1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kumparan_generator2` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kumparan_generator3` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kumparan_generator4` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kumparan_generator5` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kumparan_generator6` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bantalan_generator` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `udara_pendingin` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kwh_produksi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flow_meter_bahan_bakar` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `generator` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mesin` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `log_pielstick_generator`
--

INSERT INTO `log_pielstick_generator` (`pk_pielstick_generator`, `is_delete`, `is_update`, `delete_by`, `update_by`, `insert_by`, `tanggal_input`, `waktu`, `tegangan`, `frekwensi`, `faktor_daya`, `daya_semu`, `beban`, `arus_r`, `arus_s`, `arus_t`, `penguat_medan_teg`, `penguat_medan_arus`, `kumparan_generator1`, `kumparan_generator2`, `kumparan_generator3`, `kumparan_generator4`, `kumparan_generator5`, `kumparan_generator6`, `bantalan_generator`, `udara_pendingin`, `kwh_produksi`, `flow_meter_bahan_bakar`, `generator`, `mesin`, `created_date`) VALUES
('PG020304', 0, 0, '0', '5', '5', '2021-02-02', '21:40:00', 'Natus', 'Cupidatat', '5', '18', 'Adipisci', 'Ea', 'Sit', 'Ullamco', 'Necessitatibus', 'Officia', 'Modi', 'Provident', 'Dolores', 'Nobis', 'Quos', 'Molestias', 'At', 'Culpa', 'coba edit data', 'Dolore', 'Dolore', 'Aut', NULL),
('PG020341', 0, 0, '0', '0', '5', '2021-02-02', '21:40:00', 'Dolorum molestias vo', 'Dolor incidunt adip', '9', '3', 'Et magna quo qui ut', 'Sunt error id rerum', 'Quo accusantium ea l', 'Ipsam dolore distinc', 'Corrupti voluptatem', 'Est eaque omnis labo', 'Dolorem nulla ut ips', 'Facere libero autem ', 'Soluta quis aut in q', 'Quis qui deserunt po', 'Dolor culpa exercit', 'Blanditiis facere es', 'Veritatis pariatur ', 'Accusamus voluptatem', 'Eum odit magna sint', 'Debitis repellendus', 'Lorem commodi nostru', 'Aperiam nemo fugit ', NULL),
('PG040852', 1, 0, '5', '0', '5', '2021-02-04', '14:40:00', 'Inventore consequatu', 'Ut cum laudantium e', '10', '16', 'Aperiam nisi alias n', 'Qui officiis non vol', 'Saepe voluptatem dol', 'Et illum sit quas q', 'Aut consectetur cupi', 'Deserunt quisquam se', 'Voluptas minima quid', 'Dolore minim digniss', 'In obcaecati velit q', 'Odit corrupti modi ', 'Enim non rerum persp', 'Nostrud temporibus v', 'Quidem fuga Ut debi', 'Officia nisi sit do', 'Consequat Explicabo', 'Ipsam quidem adipisi', 'Anim qui nostrum sin', 'Omnis alias consequu', NULL),
('PG180222', 0, 0, '0', '0', '5', '2021-02-18', '20:40:00', 'Tempor at ut ipsam d', 'Asperiores atque sin', '4', '18', 'Occaecat voluptatem', 'Dolorem impedit dol', 'Sit quidem culpa cu', 'Quia impedit quis q', 'Sunt veniam et assu', 'Esse ut magnam eum ', 'Similique officia ul', 'Et omnis culpa ducim', 'Commodi nulla proide', 'Amet cum reprehende', 'Enim et ut vel eius ', 'Eveniet consequat ', 'Est eligendi eaque v', 'Quaerat voluptas con', 'Sed minima molestias', 'Eiusmod aliquam repr', 'Earum enim voluptate', 'Facere in vel non ex', '2021-02-18');

-- --------------------------------------------------------

--
-- Table structure for table `log_ruston`
--

CREATE TABLE `log_ruston` (
  `pk_ruston` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` tinyint(4) DEFAULT '0',
  `is_update` tinyint(4) DEFAULT '0',
  `delete_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `update_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `insert_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `tanggal_input` date NOT NULL,
  `waktu` time NOT NULL,
  `air_pendingin_jacket_water_masuk` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `air_pendingin_jacket_water_keluar` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `air_pendingin_raw_water_masuk` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `air_pendingin_raw_water_keluar` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minyak_pelumas_masuk` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minyak_pelumas_keluar` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `suhu_udara_masuk` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gas_buang_silinder_sisi_a_1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gas_buang_silinder_sisi_a_2` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gas_buang_silinder_sisi_a_3` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gas_buang_silinder_sisi_a_4` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gas_buang_silinder_sisi_b_1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gas_buang_silinder_sisi_b_2` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gas_buang_silinder_sisi_b_3` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gas_buang_silinder_sisi_b_4` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sebelum_turbo_a1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sebelum_turbo_a2` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sebelum_turbo_a3` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sebelum_turbo_a4` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sebelum_turbo_b1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sebelum_turbo_b2` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sebelum_turbo_b3` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sebelum_turbo_b4` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minyak_disaringan_masuk` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minyak_disaringan_keluar` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pelumas_dipanel` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pelumas_dimesin` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bahan_bakar_disaringan_masuk` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bahan_bakar_disaringan_keluar` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendinginan_jacket_water_masuk` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendinginan_raw_water_masuk` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tekanan_udara_masuk` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `load_limit_governor` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frekwensi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faktor_daya` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tegangan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arus_r` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arus_s` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arus_t` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penguat_medan_tegangan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penguat_medan_arus` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beban` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kwh_produksi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flow_meter_bahan_bakar` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `generator` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mesin` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `log_ruston`
--

INSERT INTO `log_ruston` (`pk_ruston`, `is_delete`, `is_update`, `delete_by`, `update_by`, `insert_by`, `tanggal_input`, `waktu`, `air_pendingin_jacket_water_masuk`, `air_pendingin_jacket_water_keluar`, `air_pendingin_raw_water_masuk`, `air_pendingin_raw_water_keluar`, `minyak_pelumas_masuk`, `minyak_pelumas_keluar`, `suhu_udara_masuk`, `gas_buang_silinder_sisi_a_1`, `gas_buang_silinder_sisi_a_2`, `gas_buang_silinder_sisi_a_3`, `gas_buang_silinder_sisi_a_4`, `gas_buang_silinder_sisi_b_1`, `gas_buang_silinder_sisi_b_2`, `gas_buang_silinder_sisi_b_3`, `gas_buang_silinder_sisi_b_4`, `sebelum_turbo_a1`, `sebelum_turbo_a2`, `sebelum_turbo_a3`, `sebelum_turbo_a4`, `sebelum_turbo_b1`, `sebelum_turbo_b2`, `sebelum_turbo_b3`, `sebelum_turbo_b4`, `minyak_disaringan_masuk`, `minyak_disaringan_keluar`, `pelumas_dipanel`, `pelumas_dimesin`, `bahan_bakar_disaringan_masuk`, `bahan_bakar_disaringan_keluar`, `pendinginan_jacket_water_masuk`, `pendinginan_raw_water_masuk`, `tekanan_udara_masuk`, `load_limit_governor`, `frekwensi`, `faktor_daya`, `tegangan`, `arus_r`, `arus_s`, `arus_t`, `penguat_medan_tegangan`, `penguat_medan_arus`, `beban`, `kwh_produksi`, `flow_meter_bahan_bakar`, `generator`, `mesin`) VALUES
('R060519', 0, 0, '0', '0', '5', '2021-03-06', '01:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '90', '90', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `log_separator_mfo`
--

CREATE TABLE `log_separator_mfo` (
  `pk_separator_mfo` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` tinyint(4) DEFAULT '0',
  `is_update` tinyint(4) DEFAULT '0',
  `delete_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `update_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `insert_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `tanggal_input` date NOT NULL,
  `waktu` time NOT NULL,
  `separator1_pressure_produksi_mfo` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `separator1_flow_rate_produksi_mfo` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `separator1_temperature_produksi_mfo` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `separator1_temperature_inlet_thermal_oil` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `separator2_pressure_produksi_mfo` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `separator2_flow_rate_produksi_mfo` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `separator2_temperature_produksi_mfo` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `separator2_temperature_inlet_thermal_oil` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tangki250_level` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tangki250_temp` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tangki60_level` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tangki60_temp` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pressure_water_supply` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `generator` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mesin` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `log_separator_mfo`
--

INSERT INTO `log_separator_mfo` (`pk_separator_mfo`, `is_delete`, `is_update`, `delete_by`, `update_by`, `insert_by`, `tanggal_input`, `waktu`, `separator1_pressure_produksi_mfo`, `separator1_flow_rate_produksi_mfo`, `separator1_temperature_produksi_mfo`, `separator1_temperature_inlet_thermal_oil`, `separator2_pressure_produksi_mfo`, `separator2_flow_rate_produksi_mfo`, `separator2_temperature_produksi_mfo`, `separator2_temperature_inlet_thermal_oil`, `tangki250_level`, `tangki250_temp`, `tangki60_level`, `tangki60_temp`, `pressure_water_supply`, `generator`, `mesin`, `created_date`) VALUES
('SMFO280600', 0, 0, '0', '0', '22', '2021-03-01', '00:00:00', '1', '1', '12', '12', '1', '1', '65', '65', '1', '1', '1', '1', '1', NULL, NULL, '2021-02-28'),
('SMFO280624', 0, 0, '0', '0', '22', '2021-03-01', '00:00:00', '1', '1', '65', '65', '1', '1', '54', '54', '1', '1', '1', '11', '1', NULL, NULL, '2021-02-28');

-- --------------------------------------------------------

--
-- Table structure for table `log_zav_engine`
--

CREATE TABLE `log_zav_engine` (
  `pk_zav_engine` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` tinyint(4) DEFAULT '0',
  `is_update` tinyint(4) DEFAULT '0',
  `delete_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `update_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `insert_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `tanggal_input` date NOT NULL,
  `waktu` time NOT NULL,
  `operator` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `generator` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mesin` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tegangan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frekuensi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faktor_daya` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daya_semu` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beban` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arus_a_r` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arus_a_s` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arus_a_t` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penguat_medan_arus` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penguat_medan_tegangan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bearing` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kwh_produksi_hsd` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kwh_produksi_mfo` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kwh_alat_bantu` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arus_b_r` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arus_b_s` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arus_b_t` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_becomes` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu_input` time NOT NULL,
  `rack_bahan_bakar` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `log_zav_engine`
--

INSERT INTO `log_zav_engine` (`pk_zav_engine`, `is_delete`, `is_update`, `delete_by`, `update_by`, `insert_by`, `tanggal_input`, `waktu`, `operator`, `generator`, `mesin`, `tegangan`, `frekuensi`, `faktor_daya`, `daya_semu`, `beban`, `arus_a_r`, `arus_a_s`, `arus_a_t`, `penguat_medan_arus`, `penguat_medan_tegangan`, `bearing`, `kwh_produksi_hsd`, `kwh_produksi_mfo`, `kwh_alat_bantu`, `arus_b_r`, `arus_b_s`, `arus_b_t`, `level_becomes`, `waktu_input`, `rack_bahan_bakar`) VALUES
('ZAE180259', 0, 0, '0', '0', '23', '2021-02-18', '20:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '00:00:00', NULL),
('ZAE270450', 0, NULL, NULL, '5', '5', '2021-01-27', '22:45:00', 'Rem error ea eos eo', 'In aut ut quaerat es', 'Iure qui et exercita', 'Nisi similique et op', 'Pariatur Consequatu', '13', '12', 'Unde nisi qui est qu', 'Unde aspernatur ipsu', 'Asperiores hic nulla', 'Delectus est harum ', 'Numquam sit rerum qu', 'Nesciunt illo disti', 'coba ubah data zav engine', 'Nulla animi magna i', 'Saepe ut lorem beata', 'Earum laboris aut er', 'Aliqua Minima ab su', 'Quasi ad voluptas ex', 'Qui fugit harum est', 'Impedit dolore in o', '22:45:00', NULL),
('ZAE280101', 0, NULL, NULL, NULL, '5', '2021-01-28', '07:35:00', 'Mollit ratione optio', 'In ipsa quis quia v', 'Aut dolor in rerum s', 'Corrupti a nulla qu', 'Sint eum esse nostr', '19', '6', 'Alias temporibus et ', 'Alias ut commodo min', 'Id aspernatur facere', 'Sed et facere nulla ', 'Dolor aut deleniti q', 'Laudantium maxime s', 'Consequatur enim cum', 'Earum corporis dolor', 'Quisquam quis iusto ', 'Et doloremque sit ei', 'Esse nostrum ipsum ', 'Quia laboriosam cum', 'Qui id nostrum volup', 'Tempore odio repudi', '07:35:00', NULL),
('ZAE280148', 1, 0, '5', '0', '5', '2021-01-28', '07:45:00', 'Sit placeat amet ', 'Cum facilis ut magni', 'Magni aut saepe obca', 'Neque incididunt vol', 'Tenetur modi eos ad', '19', '24', 'Obcaecati inventore ', 'Quis occaecat minim ', 'Earum eveniet dolor', 'Facere ut et et veni', 'Laudantium amet re', 'Doloremque enim culp', 'Ut voluptatem cum se', 'Et nisi ea rerum per', 'Rerum sit non aliqu', 'Voluptatem commodo a', 'Ea esse minim dolor', 'Autem soluta consequ', 'Dolore dolor volupta', 'Dicta nobis nihil la', '07:45:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `log_zav_generator`
--

CREATE TABLE `log_zav_generator` (
  `pk_zav_generator` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` tinyint(4) DEFAULT '0',
  `is_update` tinyint(4) DEFAULT '0',
  `delete_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `update_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `insert_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `tegangan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frekuensi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faktor_daya` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daya_semu` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beban` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arus_a_r` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arus_a_s` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arus_a_t` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penguat_medan_arus` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penguat_medan_tegangan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bearing` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kwh_produksi_hsd` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kwh_produksi_mfo` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kwh_alat_bantu` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arus_b_r` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arus_b_s` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arus_b_t` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_becomes` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_input` date NOT NULL,
  `waktu` time NOT NULL,
  `waktu_input` time NOT NULL,
  `operator` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `generator` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mesin` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `log_zav_generator`
--

INSERT INTO `log_zav_generator` (`pk_zav_generator`, `is_delete`, `is_update`, `delete_by`, `update_by`, `insert_by`, `tegangan`, `frekuensi`, `faktor_daya`, `daya_semu`, `beban`, `arus_a_r`, `arus_a_s`, `arus_a_t`, `penguat_medan_arus`, `penguat_medan_tegangan`, `bearing`, `kwh_produksi_hsd`, `kwh_produksi_mfo`, `kwh_alat_bantu`, `arus_b_r`, `arus_b_s`, `arus_b_t`, `level_becomes`, `tanggal_input`, `waktu`, `waktu_input`, `operator`, `generator`, `mesin`) VALUES
('', 0, 0, '0', '5', '0', 'Quibusdam velit dele', 'Veniam vel nihil se', '4', '17', 'Consectetur mollit ', 'Eos natus ea fugit ', 'Porro porro tempor b', 'Accusantium beatae v', 'Quisquam rerum aliqu', 'Ex voluptate natus q', 'coba edit', 'Vero non accusamus q', 'Dolore sequi rerum d', 'Dolor ratione totam ', 'Et consequat Dolori', 'Aut maxime iure temp', 'Expedita fugiat bea', 'Et et ea nulla sapie', '2021-01-29', '23:35:00', '00:00:00', 'Ipsa in quis ut max', '', ''),
('ZAG241207', 0, NULL, NULL, '5', '7', 'Irure voluptatem ven', 'Aut asperiores saepe', '18', '12', 'Deserunt illum porr', 'Ea voluptas deleniti', 'Quos reprehenderit ', 'Ipsum suscipit adip', 'Molestiae tempor eni', 'Ut ipsum facilis qui', 'coba edit', 'Nam amet non et ill', 'Quod nobis dolore es', 'Id ut aut eveniet ', 'Nemo magni rem et ra', 'Pariatur Dolorem er', 'Sit cupidatat id te', 'Ducimus enim reicie', '2020-11-24', '06:45:00', '06:45:00', 'At animi minim opti', NULL, NULL),
('ZAG241209', 0, 0, '0', '5', '0', 'Quibusdam velit dele', 'Veniam vel nihil se', '4', '17', 'Consectetur mollit ', 'Eos natus ea fugit ', 'Porro porro tempor b', 'Accusantium beatae v', 'Quisquam rerum aliqu', 'Ex voluptate natus q', 'coba edit', 'Vero non accusamus q', 'Dolore sequi rerum d', 'Dolor ratione totam ', 'Et consequat Dolori', 'Aut maxime iure temp', 'Expedita fugiat bea', 'Et et ea nulla sapie', '2020-11-01', '23:35:00', '00:00:00', 'Ipsa in quis ut max', NULL, NULL),
('ZAG241217', 1, NULL, '5', NULL, '7', 'Exercitation error i', 'Nemo cupidatat quos ', '3', '1', 'Est accusamus ut har', 'Ducimus provident ', 'Sed reprehenderit m', 'Lorem officia rerum ', 'Reprehenderit corpo', 'Ex explicabo Sequi ', 'Praesentium nostrud ', 'Voluptas laborum Do', 'Soluta voluptas unde', 'At quisquam minus se', 'Temporibus voluptas ', 'Quod ut expedita off', 'Officiis voluptatem ', 'Aut ullam praesentiu', '2020-11-24', '06:45:00', '06:45:00', 'Velit ab optio fugi', NULL, NULL),
('ZAG250508', 0, 0, '0', '0', '5', 'Quibusdam velit dele', 'Veniam vel nihil se', '4', '17', 'Consectetur mollit ', 'Eos natus ea fugit ', 'Porro porro tempor b', 'Accusantium beatae v', 'Quisquam rerum aliqu', 'Ex voluptate natus q', 'Cillum et odit solut', 'Vero non accusamus q', 'Dolore sequi rerum d', 'Dolor ratione totam ', 'Et consequat Dolori', 'Aut maxime iure temp', 'Expedita fugiat bea', 'Et et ea nulla sapie', '2020-11-01', '23:35:00', '00:00:00', 'Ipsa in quis ut max', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `log_zav_generator_detail`
--

CREATE TABLE `log_zav_generator_detail` (
  `fk_zav_generator` varchar(50) DEFAULT NULL,
  `nama_out_going_feeder` varchar(250) DEFAULT NULL,
  `out_going_feeder_r` varchar(30) DEFAULT NULL,
  `out_going_feeder_s` varchar(30) DEFAULT NULL,
  `out_going_feeder_t` varchar(30) DEFAULT NULL,
  `out_going_feeder_mw` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log_za_cmr`
--

CREATE TABLE `log_za_cmr` (
  `pk_za_cmr` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` tinyint(4) DEFAULT '0',
  `is_update` tinyint(4) DEFAULT '0',
  `delete_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `update_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `insert_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `tanggal_input` date NOT NULL,
  `waktu` time NOT NULL,
  `udara_start` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `air_pendingin_mesin` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `air_pendingin_injector` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `raw_water` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minyak_pelumas` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bahan_bakar` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `udara_masuk` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gas_buang_keluar_silinder_sisi_a_1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gas_buang_keluar_silinder_sisi_a_2` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gas_buang_keluar_silinder_sisi_a_3` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gas_buang_keluar_silinder_sisi_a_4` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gas_buang_keluar_silinder_sisi_a_5` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gas_buang_keluar_silinder_sisi_a_6` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gas_buang_keluar_silinder_sisi_b_1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gas_buang_keluar_silinder_sisi_b_2` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gas_buang_keluar_silinder_sisi_b_3` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gas_buang_keluar_silinder_sisi_b_4` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gas_buang_keluar_silinder_sisi_b_5` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gas_buang_keluar_silinder_sisi_b_6` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `turbo_a_masuk` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `turbo_a_keluar` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `turbo_b_masuk` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `turbo_b_keluar` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temperatur_air_pendingin_mesin` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temperatur_air_pendingin_injector` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temperatur_minyak_pelumas` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temperatur_bahan_bakar` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temperatur_raw_water` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temperatur_udara_masuk` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bearing_generator1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bearing_generator2` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thrust_bearing` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_bearing1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_bearing2` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_bearing3` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_bearing4` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_bearing5` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_bearing6` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_bearing7` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stator1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stator2` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stator3` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stator4` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stator5` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stator6` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `putaran_turbo_a` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `putaran_turbo_b` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `generator` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mesin` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `log_za_cmr`
--

INSERT INTO `log_za_cmr` (`pk_za_cmr`, `is_delete`, `is_update`, `delete_by`, `update_by`, `insert_by`, `tanggal_input`, `waktu`, `udara_start`, `air_pendingin_mesin`, `air_pendingin_injector`, `raw_water`, `minyak_pelumas`, `bahan_bakar`, `udara_masuk`, `gas_buang_keluar_silinder_sisi_a_1`, `gas_buang_keluar_silinder_sisi_a_2`, `gas_buang_keluar_silinder_sisi_a_3`, `gas_buang_keluar_silinder_sisi_a_4`, `gas_buang_keluar_silinder_sisi_a_5`, `gas_buang_keluar_silinder_sisi_a_6`, `gas_buang_keluar_silinder_sisi_b_1`, `gas_buang_keluar_silinder_sisi_b_2`, `gas_buang_keluar_silinder_sisi_b_3`, `gas_buang_keluar_silinder_sisi_b_4`, `gas_buang_keluar_silinder_sisi_b_5`, `gas_buang_keluar_silinder_sisi_b_6`, `turbo_a_masuk`, `turbo_a_keluar`, `turbo_b_masuk`, `turbo_b_keluar`, `temperatur_air_pendingin_mesin`, `temperatur_air_pendingin_injector`, `temperatur_minyak_pelumas`, `temperatur_bahan_bakar`, `temperatur_raw_water`, `temperatur_udara_masuk`, `bearing_generator1`, `bearing_generator2`, `thrust_bearing`, `main_bearing1`, `main_bearing2`, `main_bearing3`, `main_bearing4`, `main_bearing5`, `main_bearing6`, `main_bearing7`, `stator1`, `stator2`, `stator3`, `stator4`, `stator5`, `stator6`, `putaran_turbo_a`, `putaran_turbo_b`, `generator`, `mesin`) VALUES
('CMR010436', 1, 0, '5', '0', '5', '2021-02-01', '22:35:00', 'Ut incidunt molesti', 'Vel eveniet velit s', 'Occaecat ab ipsa am', 'Veritatis modi persp', 'Sit quo sint odio mo', 'Laborum quos dolor u', 'Qui incididunt sunt', 'Eiusmod magnam exerc', 'Et deserunt officia ', 'In sit veritatis di', 'Assumenda duis enim ', 'Libero non rerum qui', 'Et voluptates iste a', 'Reprehenderit fugia', 'Voluptatibus perfere', 'Quae ad obcaecati co', 'Rerum et molestias d', 'Consequuntur adipisi', 'Alias explicabo Sed', 'Maiores porro nihil ', 'Ratione velit volupt', 'Aspernatur quis nihi', 'Cupiditate inventore', 'Delectus aut velit ', 'Ab similique in opti', 'Saepe voluptate labo', 'Tempora deserunt qui', 'Rerum esse occaecat', 'Dolorem doloremque o', 'Architecto do saepe ', 'Assumenda laboris se', 'Consequat Aliquid d', 'Sit eum voluptate au', 'Do dolores cupidatat', 'Amet labore non eum', 'Aute qui ex ullam do', 'Velit nostrud quia t', 'Officiis omnis volup', 'Dolor id omnis nihil', 'Fuga Voluptatem exp', 'Sint ut eos adipisi', 'Rem amet distinctio', 'Et dolores sint sed', 'Non alias occaecat p', 'Sit officiis praesen', 'Perferendis impedit', 'Qui dolor saepe omni', 'Ratione officia quis', 'Mollitia nobis velit'),
('CMR010440', 0, 0, '0', '0', '5', '2021-02-01', '22:50:00', 'Placeat quis nisi v', 'Sunt laboris animi ', 'Dolorem voluptas ver', 'Consectetur quia aut', 'Excepteur dolor cill', 'Dolor ipsam non vita', 'Et sed sequi volupta', 'Ullamco voluptatem p', 'Error non voluptas e', 'Tempore veniam eni', 'Nulla quas qui exerc', 'Quis accusantium ali', 'Enim recusandae Ea ', 'Molestiae laudantium', 'Nostrum et repudiand', 'Aspernatur at nisi i', 'Sit nemo rem iste i', 'Dolores officia saep', 'Ex quia ea commodi e', 'Aspernatur alias sun', 'Perspiciatis libero', 'Nisi commodo quo qui', 'Impedit cupidatat q', 'Sunt necessitatibus ', 'Non suscipit facere ', 'Quo reprehenderit fa', 'Dolore adipisci omni', 'Incididunt veniam e', 'Fuga Et accusantium', 'Consequuntur eos exp', 'Laborum Asperiores ', 'Eveniet omnis esse ', 'Quas ratione nostrud', 'Enim molestias verit', 'Voluptates vitae aut', 'Autem ea numquam cul', 'Omnis officiis et vo', 'Dolore quod harum la', 'Id atque eligendi l', 'Eaque eaque pariatur', 'Sed id corrupti dic', 'Nam delectus et atq', 'Quidem ipsam qui ips', 'Nulla nihil officia ', 'Qui dolor quibusdam ', 'Quibusdam enim dicta', 'Ea aut in reiciendis', 'Maxime facilis neque', 'Nesciunt inventore '),
('CMR010838', 0, 0, '0', '0', '5', '2021-02-02', '02:30:00', 'Sit nihil amet quo', 'Iste accusantium qui', 'Dicta cillum labore ', 'Commodo et neque tot', 'Molestiae dolore ali', 'Vel dicta voluptatib', 'Sint autem sunt labo', 'Culpa repudiandae q', 'Non reprehenderit la', 'Voluptates et beatae', 'Autem dolores dolore', 'Esse vel qui omnis i', 'Voluptate fugiat vit', 'Ipsum dolores neque', 'Voluptate ullamco ea', 'Fugiat sed nisi in a', 'Rerum aut quia beata', 'Nostrud sunt asperi', 'Praesentium aut numq', 'Lorem fugiat aut fug', 'Est porro quas eu nu', 'Adipisicing dolorem ', 'Illum voluptas do s', 'Velit quas consectet', 'Rerum corrupti quis', 'Mollit aliquam harum', 'Sunt totam quia et e', 'Officiis soluta aute', 'Nulla quis ipsum ut ', 'Voluptas sit dolore', 'Officia praesentium ', 'Et excepturi id saep', 'Delectus non ab cup', 'Quia et necessitatib', 'Voluptate nulla sit', 'Non impedit aut vol', 'Qui magnam distincti', 'Laboriosam id ut l', 'Nisi recusandae Et ', 'Cupiditate non ad re', 'Neque voluptatum ven', 'Soluta explicabo Ve', 'Qui laboris officiis', 'Ut saepe aut modi au', 'Doloremque quisquam ', 'Dolorem occaecat non', 'Vel sequi voluptatem', 'Do reiciendis elit ', 'Incidunt vel alias '),
('CMR060321', 0, 0, '0', '0', '5', '2021-03-06', '21:50:00', '3', '3', '3', '3', '3', '3', '3', '3', '23', '23', '23', '2323', '', '3223', '23', '23', '23', '32', '23', '23', '23', '23', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '23', '23', '23', '23', '23', '2', '2', '2', '5', '5'),
('CMR061057', 0, 0, '0', '0', '59', '2021-04-06', '11:00:00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '5', '5'),
('CMR180115', 0, 0, '0', '0', '23', '2021-02-18', '20:00:00', '5', '2', '5', '7', '3', '7', '8', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `log_zv_generator`
--

CREATE TABLE `log_zv_generator` (
  `pk_zv_generator` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` tinyint(4) DEFAULT '0',
  `is_update` tinyint(4) DEFAULT '0',
  `delete_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `update_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `insert_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `tegangan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frekuensi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faktor_daya` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daya_semu` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beban` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arus_a_r` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arus_a_s` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arus_a_t` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penguat_medan_arus` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `suhu_winding_1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `suhu_winding_2` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `suhu_winding_3` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bearing` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kwh_produksi_hsd` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kwh_produksi_mfo` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kwh_alat_bantu` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_becomes` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_input` date NOT NULL,
  `waktu` time NOT NULL,
  `waktu_input` time NOT NULL,
  `operator` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `generator` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mesin` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `log_zv_generator`
--

INSERT INTO `log_zv_generator` (`pk_zv_generator`, `is_delete`, `is_update`, `delete_by`, `update_by`, `insert_by`, `tegangan`, `frekuensi`, `faktor_daya`, `daya_semu`, `beban`, `arus_a_r`, `arus_a_s`, `arus_a_t`, `penguat_medan_arus`, `suhu_winding_1`, `suhu_winding_2`, `suhu_winding_3`, `bearing`, `kwh_produksi_hsd`, `kwh_produksi_mfo`, `kwh_alat_bantu`, `level_becomes`, `tanggal_input`, `waktu`, `waktu_input`, `operator`, `generator`, `mesin`, `created_date`) VALUES
('ZG240235', 0, NULL, NULL, NULL, '7', 'Cupiditate Nam sunt', 'Et deserunt facere f', '23', '16', 'Ut vel nesciunt dol', 'Ipsam laborum Do ve', 'Doloribus laboriosam', 'Consequatur ex iste', 'Est pariatur Id si', 'Quia labore blanditi', 'Suscipit quia minima', 'Odio corrupti hic r', 'Dolorum molestias ut', 'Quia nulla qui volup', 'Amet et rerum anim ', 'Exercitationem ut la', 'Doloribus omnis enim', '2020-11-24', '08:15:00', '08:15:00', 'Quia vitae ut sint ', NULL, NULL, NULL),
('ZG240249', 1, NULL, '5', NULL, '7', 'Est voluptatem ver', 'Qui quos iste fugit', '11', '24', 'Beatae Nam nostrud q', 'Aut qui dolor ad do ', 'Et adipisci deserunt', 'Adipisci nisi repudi', 'Dicta autem tenetur ', 'Et nihil saepe non f', 'In in qui enim dolor', 'Neque omnis et tempo', 'Ullam ducimus quaer', 'Enim dolores consequ', 'Error quisquam lorem', 'Animi necessitatibu', 'Perferendis excepteu', '2020-11-24', '00:00:00', '00:00:00', 'Quam dolor quam eos ', NULL, NULL, NULL),
('ZG250501', 0, NULL, NULL, '5', '5', 'Nisi quas dicta fugi', 'Aut at natus volupta', '10', '17', 'Modi assumenda dolor', 'Molestiae animi tem', 'Corporis nostrud omn', 'Est obcaecati in cil', 'Nostrum autem sapien', 'Dignissimos id aut d', 'Quos modi velit vol', 'Voluptatibus est ad', 'coba edit', 'Aut esse sapiente mi', 'Aliquip vero placeat', 'Vero anim velit do ', 'Ullamco temporibus c', '2021-01-29', '23:40:00', '23:30:00', 'Qui assumenda quod s', '1', 'Unit 1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `log_zv_generator_detail`
--

CREATE TABLE `log_zv_generator_detail` (
  `fk_zv_generator` varchar(50) DEFAULT NULL,
  `nama_out_going_feeder` varchar(250) DEFAULT NULL,
  `out_going_feeder_r` varchar(30) DEFAULT NULL,
  `out_going_feeder_s` varchar(30) DEFAULT NULL,
  `out_going_feeder_t` varchar(30) DEFAULT NULL,
  `out_going_feeder_mw` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log_zv_pltd`
--

CREATE TABLE `log_zv_pltd` (
  `pk_zv_pltd` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` tinyint(4) DEFAULT '0',
  `is_update` tinyint(4) DEFAULT '0',
  `delete_by` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `update_by` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `insert_by` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `udara_masuk_sisi_a` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `udara_masuk_sisi_b` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oli_masuk_mesin_a` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oli_masuk_mesin_b` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oli_radiator_masuk` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oli_radiator_keluar` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `air_pendingin_masuk_mesin_a` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `air_pendingin_masuk_mesin_b` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `air_pendingin_radiator_masuk` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `air_pendingin_radiator_keluar` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `air_pendingin_injektor_masuk` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `air_pendingin_injektor_keluar` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `air_pendingin_keluar_silinder_sisi_a_1` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `air_pendingin_keluar_silinder_sisi_a_2` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `air_pendingin_keluar_silinder_sisi_a_3` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `air_pendingin_keluar_silinder_sisi_a_4` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `air_pendingin_keluar_silinder_sisi_a_5` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `air_pendingin_keluar_silinder_sisi_a_6` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `air_pendingin_keluar_silinder_sisi_b_1` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `air_pendingin_keluar_silinder_sisi_b_2` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `air_pendingin_keluar_silinder_sisi_b_3` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `air_pendingin_keluar_silinder_sisi_b_4` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `air_pendingin_keluar_silinder_sisi_b_5` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `air_pendingin_keluar_silinder_sisi_b_6` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gas_buang_keluar_silinder_sisi_a_1` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gas_buang_keluar_silinder_sisi_a_2` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gas_buang_keluar_silinder_sisi_a_3` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gas_buang_keluar_silinder_sisi_a_4` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gas_buang_keluar_silinder_sisi_a_5` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gas_buang_keluar_silinder_sisi_a_6` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gas_buang_keluar_silinder_sisi_b_1` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gas_buang_keluar_silinder_sisi_b_2` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gas_buang_keluar_silinder_sisi_b_3` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gas_buang_keluar_silinder_sisi_b_4` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gas_buang_keluar_silinder_sisi_b_5` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gas_buang_keluar_silinder_sisi_b_6` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_bearing_1` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_bearing_2` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_bearing_3` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_bearing_4` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_bearing_5` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_bearing_6` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_bearing_7` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_bearing_8` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_bearing_9` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `turbo_a_masuk` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `turbo_a_keluar` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `turbo_b_masuk` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `turbo_b_keluar` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `turbo_keluar_a` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `turbo_keluar_b` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `air_pendingin_keluar_mesin` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bahan_bakar_masuk_mesin` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rack_bahan_bakar` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `governor_load_limit` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `udara_start` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `presure_udara_masuk_sisi_a` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_input` date DEFAULT NULL,
  `waktu` time DEFAULT NULL,
  `waktu_input` time DEFAULT NULL,
  `operator` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `presure_udara_masuk_sisi_b` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `udara_masuk_ab` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minyak_pelumas` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `air_pendingin_mesin` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `air_pendingin_injektor` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `udara_masuk_disalurkan_sisi_a` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `udara_masuk_disalurkan_sisi_b` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `putaran_turbo_sisi_a` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `putaran_turbo_sisi_b` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tekanan_oli_pada_separator` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ampere_pompa_ali` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ampere_pompa_jw` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mfo_in` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mfo_return` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hsd` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bahan_bakar_masuk_mesin1` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `generator` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mesin` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_zv_pltd`
--

INSERT INTO `log_zv_pltd` (`pk_zv_pltd`, `is_delete`, `is_update`, `delete_by`, `update_by`, `insert_by`, `udara_masuk_sisi_a`, `udara_masuk_sisi_b`, `oli_masuk_mesin_a`, `oli_masuk_mesin_b`, `oli_radiator_masuk`, `oli_radiator_keluar`, `air_pendingin_masuk_mesin_a`, `air_pendingin_masuk_mesin_b`, `air_pendingin_radiator_masuk`, `air_pendingin_radiator_keluar`, `air_pendingin_injektor_masuk`, `air_pendingin_injektor_keluar`, `air_pendingin_keluar_silinder_sisi_a_1`, `air_pendingin_keluar_silinder_sisi_a_2`, `air_pendingin_keluar_silinder_sisi_a_3`, `air_pendingin_keluar_silinder_sisi_a_4`, `air_pendingin_keluar_silinder_sisi_a_5`, `air_pendingin_keluar_silinder_sisi_a_6`, `air_pendingin_keluar_silinder_sisi_b_1`, `air_pendingin_keluar_silinder_sisi_b_2`, `air_pendingin_keluar_silinder_sisi_b_3`, `air_pendingin_keluar_silinder_sisi_b_4`, `air_pendingin_keluar_silinder_sisi_b_5`, `air_pendingin_keluar_silinder_sisi_b_6`, `gas_buang_keluar_silinder_sisi_a_1`, `gas_buang_keluar_silinder_sisi_a_2`, `gas_buang_keluar_silinder_sisi_a_3`, `gas_buang_keluar_silinder_sisi_a_4`, `gas_buang_keluar_silinder_sisi_a_5`, `gas_buang_keluar_silinder_sisi_a_6`, `gas_buang_keluar_silinder_sisi_b_1`, `gas_buang_keluar_silinder_sisi_b_2`, `gas_buang_keluar_silinder_sisi_b_3`, `gas_buang_keluar_silinder_sisi_b_4`, `gas_buang_keluar_silinder_sisi_b_5`, `gas_buang_keluar_silinder_sisi_b_6`, `main_bearing_1`, `main_bearing_2`, `main_bearing_3`, `main_bearing_4`, `main_bearing_5`, `main_bearing_6`, `main_bearing_7`, `main_bearing_8`, `main_bearing_9`, `turbo_a_masuk`, `turbo_a_keluar`, `turbo_b_masuk`, `turbo_b_keluar`, `turbo_keluar_a`, `turbo_keluar_b`, `air_pendingin_keluar_mesin`, `bahan_bakar_masuk_mesin`, `rack_bahan_bakar`, `governor_load_limit`, `udara_start`, `presure_udara_masuk_sisi_a`, `tanggal_input`, `waktu`, `waktu_input`, `operator`, `presure_udara_masuk_sisi_b`, `udara_masuk_ab`, `minyak_pelumas`, `air_pendingin_mesin`, `air_pendingin_injektor`, `udara_masuk_disalurkan_sisi_a`, `udara_masuk_disalurkan_sisi_b`, `putaran_turbo_sisi_a`, `putaran_turbo_sisi_b`, `tekanan_oli_pada_separator`, `ampere_pompa_ali`, `ampere_pompa_jw`, `mfo_in`, `mfo_return`, `hsd`, `bahan_bakar_masuk_mesin1`, `generator`, `mesin`, `created_date`) VALUES
('ZP180234', 1, 0, '5', '0', '23', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2021-02-18', '20:00:00', '00:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notifikasi`
--

CREATE TABLE `notifikasi` (
  `id` varchar(50) NOT NULL,
  `pesan` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifikasi`
--

INSERT INTO `notifikasi` (`id`, `pesan`, `status`, `date`) VALUES
('50621150', 'Input Niigata Engine:BAHAN BAKAR MASUK MESIN(123&#8451) ', NULL, 'Saturday, 6 March 2021'),
('506211521', 'Input Niigata Engine:UDARA MASUK FILTER (BLOWER)(90&#8451) ', NULL, 'Saturday, 6 March 2021'),
('50621154', 'Input Niigata Engine:MINYAK PENDINGIN INJEKTOR - KELUAR(323&#8451) ', NULL, 'Saturday, 6 March 2021'),
('506212220', 'Input Niigata Engine:UDARA KELUAR INTERCOOLER - B(90&#8451) ', NULL, 'Saturday, 6 March 2021'),
('506212221', 'Input Niigata Engine:UDARA MASUK FILTER (BLOWER)(90&#8451) ', NULL, 'Saturday, 6 March 2021'),
('506212222', 'Input Niigata Engine:RADIATOR MINYAK PELUMAS - MASUK(90&#8451) ', NULL, 'Saturday, 6 March 2021'),
('506212223', 'Input Niigata Engine:RADIATOR MINYAK PELUMAS - KELUAR(90&#8451) ', NULL, 'Saturday, 6 March 2021'),
('506212510', 'Input Pielstick Engine:AIR PENDINGIN INJECTOR - MASUK(90&#8451) 01:00', NULL, 'Saturday, 6 March 2021'),
('50621258', 'Input Pielstick Engine:AIR PENDINGIN KELUAR COOLER SISI - A(90&#8451) 01:00', NULL, 'Saturday, 6 March 2021'),
('50621259', 'Input Pielstick Engine:AIR PENDINGIN KELUAR COOLER SISI - B(90&#8451) 01:00', NULL, 'Saturday, 6 March 2021'),
('506213323', 'Input Ruston:SUHU MINYAK DISARINGAN - MASUK(90&#8451) 01:00', NULL, 'Saturday, 6 March 2021'),
('506213324', 'Input Ruston:SUHU MINYAK DISARINGAN - KELUAR(90&#8451) 01:00', NULL, 'Saturday, 6 March 2021'),
('506214420', 'Input Niigata Engine:UDARA KELUAR INTERCOOLER - B(90&#8451) 01:05', NULL, 'Saturday, 6 March 2021'),
('506214421', 'Input Niigata Engine:UDARA MASUK FILTER (BLOWER)(90&#8451) 01:05', NULL, 'Saturday, 6 March 2021'),
('53121371', 'Input Perjaman Mesin2:Air Pendingin MesinGas Buang Cylinder L 2(100&#8451) 10:00:00', NULL, 'Wednesday, 31 March 2021'),
('53121372', 'Input Perjaman Mesin2:Air Pendingin MesinGas Buang Cylinder L 3(45&#8451) 10:00:00', NULL, 'Wednesday, 31 March 2021'),
('662821530', 'Input Perjaman Mesin Generator:Winding 1(69.6&#8451) 11:00:00', NULL, 'Wednesday, 28 April 2021'),
('662821531', 'Input Perjaman Mesin Generator:Winding 2(70.9&#8451) 11:00:00', NULL, 'Wednesday, 28 April 2021'),
('662821532', 'Input Perjaman Mesin Generator:Winding 3(73.2&#8451) 11:00:00', NULL, 'Wednesday, 28 April 2021');

-- --------------------------------------------------------

--
-- Table structure for table `patrol_check_auxiliaries`
--

CREATE TABLE `patrol_check_auxiliaries` (
  `pk_patrol_check_auxiliaries` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_input` date DEFAULT NULL,
  `is_delete` tinyint(4) DEFAULT '0',
  `is_update` tinyint(4) DEFAULT '0',
  `insert_by` tinyint(4) DEFAULT '0',
  `delete_by` tinyint(4) DEFAULT '0',
  `update_by` tinyint(4) DEFAULT '0',
  `lo_a` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lo_b` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lo_c` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lo_d` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lo_e` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lo_f` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lo_g` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fo_a` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fo_b` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fo_c` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fo_d` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fo_e` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fo_f` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fo_g` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ir_a` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ir_b` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ir_c` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ir_d` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ir_e` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `k_a` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `k_b` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `k_c` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `k_d` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `k_e` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pp_a` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pp_b` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pp_c` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pbb_a` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pbb_b` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pbb_c` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pap_a` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pap_b` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pap_c` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patrol_check_mesin`
--

CREATE TABLE `patrol_check_mesin` (
  `pk_patrol_check_mesin` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_input` date DEFAULT NULL,
  `is_delete` tinyint(4) DEFAULT '0',
  `is_update` tinyint(4) DEFAULT '0',
  `insert_by` tinyint(4) DEFAULT '0',
  `delete_by` tinyint(4) DEFAULT '0',
  `update_by` tinyint(4) DEFAULT '0',
  `ch_b` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ch_c` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ch_d` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ch_e` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ch_f` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ch_g` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ch_h` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ch_i` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_a` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_b` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_c` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_d` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_e` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_f` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_g` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_h` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gov_a` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gov_b` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gov_c` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gov_d` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gov_e` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sgb_a` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sgb_b` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sgb_c` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sgb_d` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sgb_e` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sgb_f` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sgb_g` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bm_a` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bm_b` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bm_c` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bm_d` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bm_e` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bm_f` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bm_g` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bm_h` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gen_a` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gen_b` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gen_c` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gen_g` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gen_h` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gen_i` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waktu_input` time DEFAULT NULL,
  `generator` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mesin` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `setup_beban_penyulang`
--

CREATE TABLE `setup_beban_penyulang` (
  `pk_setup_beban_penyulang` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `setup_tanggal_input` date DEFAULT NULL,
  `no_dokumen` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edit_revisi` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `halaman` tinyint(4) DEFAULT NULL,
  `is_delete` int(11) DEFAULT '0',
  `update_by` int(11) DEFAULT '0',
  `insert_by` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setup_beban_penyulang`
--

INSERT INTO `setup_beban_penyulang` (`pk_setup_beban_penyulang`, `setup_tanggal_input`, `no_dokumen`, `edit_revisi`, `halaman`, `is_delete`, `update_by`, `insert_by`) VALUES
('SBP040913', '2020-11-03', 'coba', 'coba', 5, 0, 5, 5),
('SBP041037', '2020-12-04', '123', '1223', 123, 0, 0, 5),
('SBP091002', '2020-12-10', '321', '25', 4, 0, 7, 7);

-- --------------------------------------------------------

--
-- Table structure for table `setup_ebt`
--

CREATE TABLE `setup_ebt` (
  `pk_setup_ebt` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` int(11) DEFAULT '0',
  `insert_by` int(11) DEFAULT '0',
  `update_by` int(11) DEFAULT '0',
  `delete_by` int(11) DEFAULT '0',
  `tanggal_input` date NOT NULL,
  `generator` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `power` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `voltage` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cos_phi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `freq` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rpm` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excitacion` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setup_ebt`
--

INSERT INTO `setup_ebt` (`pk_setup_ebt`, `is_delete`, `insert_by`, `update_by`, `delete_by`, `tanggal_input`, `generator`, `type`, `power`, `voltage`, `current`, `cos_phi`, `freq`, `rpm`, `excitacion`) VALUES
('SEB230115', 0, 7, 0, 0, '2020-12-23', 'Sit quasi vel dolor', 'Ut asperiores ab fac', 'Vero corporis quos m', 'Ea adipisci laborios', 'Excepteur corporis e', 'Minus esse eveniet', 'At pariatur Sunt si', 'Sint quo ea nisi ist', 'Doloremque minima co'),
('SEB230138', 0, 7, 7, 0, '2020-12-23', 'ora et labora', 'Labore error eligend', 'Ex dolores magna omn', 'Et quis in rerum in ', 'Nulla nostrud obcaec', 'Hic beatae est labor', 'Sit ex obcaecati min', 'Dolore quis quae dic', 'Blanditiis tenetur i'),
('SEB230139', 1, 7, 0, 7, '2020-12-23', 'Numquam dicta ab qui', 'Est nihil debitis qu', 'Aut voluptatum volup', 'Vel itaque doloremqu', 'Quis dolore enim nes', 'Laborum quasi soluta', 'Maiores est maiores', 'Optio ut fuga Aliq', 'Corporis omnis ut id');

-- --------------------------------------------------------

--
-- Table structure for table `setup_niigata_engine`
--

CREATE TABLE `setup_niigata_engine` (
  `pk_setup_niigata_engine` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` tinyint(4) DEFAULT '0',
  `is_update` tinyint(4) DEFAULT NULL,
  `delete_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `update_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insert_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_mesin` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merek_mesin` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_mesin` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serie_mesin` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daya_mesin` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `putaran_mesin` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merek_generator` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_generator` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tegangan_generator` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daya_generator` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pltd` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setup_niigata_engine`
--

INSERT INTO `setup_niigata_engine` (`pk_setup_niigata_engine`, `is_delete`, `is_update`, `delete_by`, `update_by`, `insert_by`, `no_mesin`, `merek_mesin`, `type_mesin`, `serie_mesin`, `daya_mesin`, `putaran_mesin`, `merek_generator`, `type_generator`, `tegangan_generator`, `daya_generator`, `pltd`, `tanggal_input`) VALUES
('SNE210813', 0, NULL, NULL, NULL, '5', 'Unit 4', 'NIIGATA', '12 PC 2-5V', '54956', '7300 PS', '500 RPM', 'MEIDENSHA', 'E - AF', '6300 V', '6500 KV', 'Ampenan', '2021-01-21');

-- --------------------------------------------------------

--
-- Table structure for table `setup_niigata_generator`
--

CREATE TABLE `setup_niigata_generator` (
  `pk_setup_niigata_generator` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` tinyint(4) DEFAULT NULL,
  `is_update` tinyint(4) DEFAULT NULL,
  `delete_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `update_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insert_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_mesin` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merek_mesin` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_mesin` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serie_mesin` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `putaran_mesin` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merek_generator` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_generator` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serie_generator` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tegangan_generator` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daya_generator` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pltd` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_input` date NOT NULL,
  `jam_kerja_mesin_awal` time NOT NULL,
  `jam_kerja_mesin_akhir` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setup_niigata_generator`
--

INSERT INTO `setup_niigata_generator` (`pk_setup_niigata_generator`, `is_delete`, `is_update`, `delete_by`, `update_by`, `insert_by`, `no_mesin`, `merek_mesin`, `type_mesin`, `serie_mesin`, `putaran_mesin`, `merek_generator`, `type_generator`, `serie_generator`, `tegangan_generator`, `daya_generator`, `pltd`, `tanggal_input`, `jam_kerja_mesin_awal`, `jam_kerja_mesin_akhir`) VALUES
('SNE100322', NULL, NULL, NULL, '5', '7', 'Molestias dolorem nu', 'Officia enim beatae ', 'Corrupti excepteur ', 'Sunt laborum quas an', 'Cum corporis eos sus', 'Optio nisi officia ', 'Vel ut itaque reicie', 'Mollitia accusamus s', 'Expedita perspiciati', '22', 'rubah setup generator', '2020-11-01', '09:10:00', '09:10:00'),
('SNE100355', NULL, NULL, NULL, NULL, '7', 'Accusamus eiusmod do', 'Vel praesentium quib', 'Quae consequuntur qu', 'Aut consectetur sit', 'Suscipit tempore qu', 'Magnam laborum Sed ', 'Id dicta deserunt su', 'Mollit a debitis est', 'Voluptas adipisci au', '16', 'Numquam aspernatur u', '2020-12-10', '09:15:00', '09:15:00'),
('SNG100424', NULL, NULL, NULL, NULL, '7', 'Quasi aut ut tempor ', 'Recusandae Natus et', 'Qui velit eaque eni', 'Pariatur Minima est', 'Blanditiis ut est et', 'Cupiditate velit nem', 'Qui proident amet ', 'Sunt sint nesciunt', 'Sed libero quas even', '1', 'Dolor corporis volup', '2020-12-10', '10:40:00', '10:40:00'),
('SNG100430', NULL, NULL, NULL, NULL, '7', 'Ullamco dolor laudan', 'Aut consectetur nisi', 'Ut consequuntur quae', 'Proident ea vero hi', 'Ipsum sed eius et vo', 'Et quisquam dolorem ', 'In iusto ut adipisic', 'Molestiae in amet d', 'Ut molestiae volupta', '17', 'Dolor et hic labore ', '2020-12-10', '10:40:00', '10:40:00'),
('SNG100456', NULL, NULL, NULL, NULL, '7', 'Esse consequatur e', 'Consequat Nostrum i', 'Minim totam aliquam ', 'Et consequatur Dist', 'Quas nostrud est qu', 'Anim officia quae et', 'Illo nulla temporibu', 'Ipsam nesciunt tene', 'Nisi eiusmod natus v', '4', 'Quae aut eum dolor a', '2020-12-10', '10:50:00', '10:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `setup_perjaman_mesin`
--

CREATE TABLE `setup_perjaman_mesin` (
  `pk_setup_perjaman_mesin` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mesin_sulzer` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_input` date NOT NULL,
  `is_delete` tinyint(4) DEFAULT '0',
  `is_update` tinyint(4) DEFAULT NULL,
  `delete_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `update_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insert_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setup_perjaman_mesin`
--

INSERT INTO `setup_perjaman_mesin` (`pk_setup_perjaman_mesin`, `mesin_sulzer`, `tanggal_input`, `is_delete`, `is_update`, `delete_by`, `update_by`, `insert_by`) VALUES
('SPM210402', '3', '2021-01-21', 0, NULL, NULL, NULL, '5'),
('SPM210411', '1', '2021-01-20', 0, NULL, NULL, NULL, '5'),
('SPM210447', '2', '2021-01-21', 0, NULL, NULL, NULL, '5');

-- --------------------------------------------------------

--
-- Table structure for table `setup_perjaman_mesin_generator`
--

CREATE TABLE `setup_perjaman_mesin_generator` (
  `pk_setup_perjaman_mesin_generator` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mesin_sulzer` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_input` date NOT NULL,
  `is_delete` tinyint(4) DEFAULT NULL,
  `is_update` tinyint(4) DEFAULT NULL,
  `delete_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `update_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insert_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setup_perjaman_mesin_generator`
--

INSERT INTO `setup_perjaman_mesin_generator` (`pk_setup_perjaman_mesin_generator`, `mesin_sulzer`, `tanggal_input`, `is_delete`, `is_update`, `delete_by`, `update_by`, `insert_by`) VALUES
('SPM091107', 'coba coba', '2020-12-10', NULL, NULL, NULL, NULL, '7'),
('SPM091114', 'coba generator', '2020-12-10', NULL, NULL, NULL, NULL, '7');

-- --------------------------------------------------------

--
-- Table structure for table `setup_plts`
--

CREATE TABLE `setup_plts` (
  `pk_setup_plts` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_input` date NOT NULL,
  `nama_inverter` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` int(11) DEFAULT '0',
  `update_by` int(11) DEFAULT '0',
  `insert_by` int(11) DEFAULT '0',
  `delete_by` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setup_plts`
--

INSERT INTO `setup_plts` (`pk_setup_plts`, `tanggal_input`, `nama_inverter`, `is_delete`, `update_by`, `insert_by`, `delete_by`) VALUES
('SPL231203', '2020-12-23', 'Non sit cupidatat v', 0, 0, 7, 0),
('SPL231210', '2020-12-23', 'uab=ah ', 0, 7, 7, 0),
('SPL231232', '2020-12-23', 'untuk dihapus', 1, 0, 7, 7);

-- --------------------------------------------------------

--
-- Table structure for table `setup_zav_generator`
--

CREATE TABLE `setup_zav_generator` (
  `pk_setup_zav_generator` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` tinyint(4) DEFAULT NULL,
  `is_update` tinyint(4) DEFAULT NULL,
  `delete_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `update_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insert_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_mesin` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merek_mesin` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_mesin` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serie_mesin` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `putaran_mesin` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merek_generator` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_generator` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serie_generator` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tegangan_generator` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daya_generator` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pltd` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_input` date NOT NULL,
  `jam_kerja_mesin_awal` time NOT NULL,
  `jam_kerja_mesin_akhir` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setup_zav_generator`
--

INSERT INTO `setup_zav_generator` (`pk_setup_zav_generator`, `is_delete`, `is_update`, `delete_by`, `update_by`, `insert_by`, `no_mesin`, `merek_mesin`, `type_mesin`, `serie_mesin`, `putaran_mesin`, `merek_generator`, `type_generator`, `serie_generator`, `tegangan_generator`, `daya_generator`, `pltd`, `tanggal_input`, `jam_kerja_mesin_awal`, `jam_kerja_mesin_akhir`) VALUES
('SZG100436', NULL, NULL, NULL, '7', '7', 'Praesentium nulla il', 'Adipisci consequatur', 'In eu error sit erro', 'Est sequi sit quia c', 'Soluta qui accusanti', 'Placeat rerum nesci', 'Reprehenderit sint', 'Obcaecati eveniet l', 'Dolor asperiores et ', '22', 'coba edit', '0000-00-00', '10:50:00', '10:50:00'),
('SZG100454', NULL, NULL, NULL, NULL, '7', 'Nulla atque eveniet', 'Aut aut minima porro', 'Ipsum a ullamco nob', 'Veniam non dicta ea', 'Distinctio Iure ips', 'Veniam qui ea quo c', 'Modi iste cupiditate', 'Dolores maxime beata', 'Consequat Odio veni', '19', 'Aut consequuntur dol', '2020-12-10', '10:50:00', '10:50:00'),
('SZG100810', NULL, NULL, NULL, NULL, '7', 'Aspernatur reprehend', 'Lorem exercitation q', 'Aut commodi et magni', 'Fugiat harum eu aut', 'Aliquid totam veniam', 'Aut sed laboris labo', 'Sit impedit amet ', 'Fugiat quo sunt ess', 'Aperiam numquam in e', '19', 'prikitiw', '2020-12-10', '14:50:00', '14:50:00'),
('SZG100829', NULL, NULL, NULL, NULL, '7', 'Vitae dolore nisi vo', 'Ipsum rerum quis qu', 'Deleniti et ipsum e', 'Sunt dicta fugiat c', 'Unde accusamus ex hi', 'Mollitia reprehender', 'Nihil id dolore blan', 'Error ipsum atque qu', 'Cillum culpa dolor v', '26', 'wew', '2020-12-10', '14:50:00', '14:50:00');

-- --------------------------------------------------------

--
-- Table structure for table `setup_zv_generator`
--

CREATE TABLE `setup_zv_generator` (
  `pk_setup_zv_generator` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` tinyint(4) DEFAULT NULL,
  `is_update` tinyint(4) DEFAULT NULL,
  `delete_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `update_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insert_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_mesin` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merek_mesin` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_mesin` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serie_mesin` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `putaran_mesin` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merek_generator` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_generator` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serie_generator` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tegangan_generator` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daya_generator` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pltd` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_input` date NOT NULL,
  `jam_kerja_mesin_awal` time NOT NULL,
  `jam_kerja_mesin_akhir` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setup_zv_generator`
--

INSERT INTO `setup_zv_generator` (`pk_setup_zv_generator`, `is_delete`, `is_update`, `delete_by`, `update_by`, `insert_by`, `no_mesin`, `merek_mesin`, `type_mesin`, `serie_mesin`, `putaran_mesin`, `merek_generator`, `type_generator`, `serie_generator`, `tegangan_generator`, `daya_generator`, `pltd`, `tanggal_input`, `jam_kerja_mesin_awal`, `jam_kerja_mesin_akhir`) VALUES
('SZG100911', NULL, NULL, NULL, '5', '7', 'Perspiciatis qui su', 'Sed Nam sunt incidi', 'Ut impedit ut do de', 'Temporibus quos et h', 'Duis debitis ex porr', 'In ipsa reprehender', 'Nulla tenetur dolore', 'Dolore laboris place', 'Aut molestias impedi', '11', '123', '2020-11-30', '15:05:00', '15:05:00'),
('SZG100933', NULL, NULL, NULL, NULL, '7', 'Consequat Excepturi', 'Iusto voluptas dolor', 'Similique ut eos cul', 'Quis nemo fugiat nu', 'Nihil ut et et irure', 'Esse voluptatibus vo', 'Dolor odit qui quo v', 'Laborum Excepteur a', 'Rerum magni quia pro', '14', 'setup zv generator', '2020-12-10', '15:05:00', '15:05:00'),
('SZG100954', NULL, NULL, NULL, '7', '7', 'Nihil ex iste et quo', 'Ut quasi non aliqua', 'Ullam maxime sed min', 'Laboris in sit dict', 'Aliquip cillum labor', 'Libero debitis offic', 'Atque esse aut iste ', 'Odit sunt ad ut est', 'Hic deserunt dolores', '3', 'coba edit', '0000-00-00', '15:05:00', '15:05:00');

-- --------------------------------------------------------

--
-- Table structure for table `setup_zv_pltd_ampenan`
--

CREATE TABLE `setup_zv_pltd_ampenan` (
  `pk_setup_zv_pltd_ampenan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` tinyint(4) DEFAULT NULL,
  `is_update` tinyint(4) DEFAULT NULL,
  `delete_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `update_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insert_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_mesin` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merek_mesin` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_mesin` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merek_generator` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_generator` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pltd` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_input` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setup_zv_pltd_ampenan`
--

INSERT INTO `setup_zv_pltd_ampenan` (`pk_setup_zv_pltd_ampenan`, `is_delete`, `is_update`, `delete_by`, `update_by`, `insert_by`, `no_mesin`, `merek_mesin`, `type_mesin`, `merek_generator`, `type_generator`, `pltd`, `tanggal_input`) VALUES
('SZPA100903', NULL, NULL, NULL, NULL, '7', 'Laborum Consequuntu', 'Illo exercitationem ', 'Et est quia tempora ', 'Irure aliqua Conseq', 'Odit et sint exercit', 'input pltd', '2020-12-10'),
('SZPA100920', NULL, NULL, NULL, NULL, '7', 'Est et quaerat est', 'Velit do ducimus pr', 'Harum deserunt archi', 'Nostrum ab ad ut non', 'Voluptatum nobis rem', 'lagi', '2020-12-10'),
('SZPA100931', NULL, NULL, NULL, '7', '7', 'Dolores dolore quia ', 'In et animi est es', 'Ex commodo neque exe', 'Laudantium minus in', 'Fugit anim aut accu', 'good job ini', '2020-12-10');

-- --------------------------------------------------------

--
-- Table structure for table `shift_meeting`
--

CREATE TABLE `shift_meeting` (
  `pk_shift_meeting` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` tinyint(4) DEFAULT '0',
  `is_update` tinyint(4) DEFAULT '0',
  `delete_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `update_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `insert_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `tanggal_input` date NOT NULL,
  `waktu` time NOT NULL,
  `anggota_serah1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anggota_serah2` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anggota_serah3` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anggota_serah4` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anggota_serah5` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anggota_terima1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anggota_terima2` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anggota_terima3` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anggota_terima4` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anggota_terima5` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sulzer1_keadaan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sulzer1_keterangan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sulzer1_jumlah_kwh` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sulzer1_pemakaian_sendiri` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sulzer2_keadaan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sulzer2_keterangan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sulzer2_jumlah_kwh` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sulzer2_pemakaian_sendiri` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sulzer3_keadaan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sulzer3_keterangan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sulzer3_jumlah_kwh` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sulzer3_pemakaian_sendiri` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sulzer4_keadaan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sulzer4_keterangan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sulzer4_jumlah_kwh` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sulzer4_pemakaian_sendiri` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `separator_mfo1_keadaan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `separator_mfo1_keterangan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `separator_mfo1_produksi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `separator_mfo1_transfer` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `separator_mfo2_keadaan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `separator_mfo2_keterangan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `separator_mfo2_produksi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `separator_mfo2_transfer` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kompresor1_keadaan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kompresor1_keterangan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kompresor2_keadaan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kompresor2_keterangan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kompresor3_keadaan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kompresor3_keterangan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kompresor4_keadaan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kompresor4_keterangan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kompresor5_keadaan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kompresor5_keterangan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kompresor6_keadaan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kompresor6_keterangan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_peralatan_tambahan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keadaan_tambahan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan_tambahan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shift_meeting`
--

INSERT INTO `shift_meeting` (`pk_shift_meeting`, `is_delete`, `is_update`, `delete_by`, `update_by`, `insert_by`, `tanggal_input`, `waktu`, `anggota_serah1`, `anggota_serah2`, `anggota_serah3`, `anggota_serah4`, `anggota_serah5`, `anggota_terima1`, `anggota_terima2`, `anggota_terima3`, `anggota_terima4`, `anggota_terima5`, `sulzer1_keadaan`, `sulzer1_keterangan`, `sulzer1_jumlah_kwh`, `sulzer1_pemakaian_sendiri`, `sulzer2_keadaan`, `sulzer2_keterangan`, `sulzer2_jumlah_kwh`, `sulzer2_pemakaian_sendiri`, `sulzer3_keadaan`, `sulzer3_keterangan`, `sulzer3_jumlah_kwh`, `sulzer3_pemakaian_sendiri`, `sulzer4_keadaan`, `sulzer4_keterangan`, `sulzer4_jumlah_kwh`, `sulzer4_pemakaian_sendiri`, `separator_mfo1_keadaan`, `separator_mfo1_keterangan`, `separator_mfo1_produksi`, `separator_mfo1_transfer`, `separator_mfo2_keadaan`, `separator_mfo2_keterangan`, `separator_mfo2_produksi`, `separator_mfo2_transfer`, `kompresor1_keadaan`, `kompresor1_keterangan`, `kompresor2_keadaan`, `kompresor2_keterangan`, `kompresor3_keadaan`, `kompresor3_keterangan`, `kompresor4_keadaan`, `kompresor4_keterangan`, `kompresor5_keadaan`, `kompresor5_keterangan`, `kompresor6_keadaan`, `kompresor6_keterangan`, `nama_peralatan_tambahan`, `keadaan_tambahan`, `keterangan_tambahan`, `created_date`) VALUES
('SM2021120231', 0, 0, '0', '0', '5', '2021-05-12', '08:00:00', '111', '', '11', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `shift_meeting_detail`
--

CREATE TABLE `shift_meeting_detail` (
  `fk_shift_meeting` varchar(50) DEFAULT NULL,
  `nama_peralatan_tambahan` varchar(250) DEFAULT NULL,
  `keadaan_tambahan` varchar(250) DEFAULT NULL,
  `keterangan_tambahan` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shift_meeting_detail`
--

INSERT INTO `shift_meeting_detail` (`fk_shift_meeting`, `nama_peralatan_tambahan`, `keadaan_tambahan`, `keterangan_tambahan`) VALUES
('SM2021311028', '', NULL, NULL),
('', '', NULL, NULL),
('SM2021110218', 'Komputer', NULL, NULL),
('Aman', 'Lengkap', NULL, NULL),
('SM2021120231', '1', '1', '1'),
('SM2021120231', '1', '1', '1'),
('SM2021120231', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `shift_meeting_maturiti`
--

CREATE TABLE `shift_meeting_maturiti` (
  `pk_shift_maturiti` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` tinyint(4) DEFAULT '0',
  `is_update` tinyint(4) DEFAULT '0',
  `delete_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `update_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `insert_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `tanggal_input` date NOT NULL,
  `waktu` time NOT NULL,
  `priming_pump_a_1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priming_pump_a_2` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priming_pump_a_3` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priming_pump_a_4` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priming_pump_a_5` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priming_pump_a_6` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priming_pump_a_7` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priming_pump_a_8` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priming_pump_b_1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priming_pump_b_2` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priming_pump_b_3` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priming_pump_b_4` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priming_pump_b_5` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priming_pump_b_6` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priming_pump_b_7` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priming_pump_b_8` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jacket_water_a_1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jacket_water_a_2` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jacket_water_a_3` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jacket_water_a_4` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jacket_water_a_5` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jacket_water_a_6` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jacket_water_a_7` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jacket_water_a_8` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jacket_water_b_1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jacket_water_b_2` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jacket_water_b_3` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jacket_water_b_4` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jacket_water_b_5` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jacket_water_b_6` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jacket_water_b_7` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jacket_water_b_8` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `raw_water_a_1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `raw_water_a_2` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `raw_water_a_3` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `raw_water_a_4` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `raw_water_a_5` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `raw_water_a_6` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `raw_water_b_1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `raw_water_b_2` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `raw_water_b_3` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `raw_water_b_4` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `raw_water_b_5` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `raw_water_b_6` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `raw_water_a_7` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `raw_water_a_8` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `raw_water_b_7` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `raw_water_b_8` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `injector_cooling_a_1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `injector_cooling_a_2` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `injector_cooling_a_3` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `injector_cooling_a_4` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `injector_cooling_a_5` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `injector_cooling_a_6` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `injector_cooling_a_7` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `injector_cooling_a_8` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `injector_cooling_b_1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `injector_cooling_b_2` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `injector_cooling_b_3` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `injector_cooling_b_4` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `injector_cooling_b_5` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `injector_cooling_b_6` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `injector_cooling_b_7` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `injector_cooling_b_8` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booster_pump_a_1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booster_pump_a_2` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booster_pump_a_3` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booster_pump_a_4` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booster_pump_a_5` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booster_pump_a_6` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booster_pump_a_7` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booster_pump_a_8` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booster_pump_b_1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booster_pump_b_2` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booster_pump_b_3` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booster_pump_b_4` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booster_pump_b_5` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booster_pump_b_6` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booster_pump_b_7` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booster_pump_b_8` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transfer_pump_a_1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transfer_pump_a_2` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transfer_pump_a_3` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transfer_pump_a_4` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transfer_pump_a_5` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transfer_pump_a_6` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transfer_pump_a_7` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transfer_pump_a_8` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priming_pump_a_keterangan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priming_pump_b_keterangan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jacket_water_a_keterangan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jacket_water_b_keterangan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `raw_water_a_keterangan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `raw_water_b_keterangan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `injector_cooling_a_keterangan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `injector_cooling_b_keterangan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booster_pump_a_keterangan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booster_pump_b_keterangan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transfer_pump_b_1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transfer_pump_b_2` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transfer_pump_b_3` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transfer_pump_b_4` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transfer_pump_b_5` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transfer_pump_b_6` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transfer_pump_b_7` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transfer_pump_b_8` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transfer_pump_a_keterangan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transfer_pump_b_keterangan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suhu`
--

CREATE TABLE `suhu` (
  `pk` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hijau1` int(11) DEFAULT NULL,
  `hijau2` int(11) DEFAULT NULL,
  `kuning1` int(11) DEFAULT NULL,
  `kuning2` int(11) DEFAULT NULL,
  `merah1` int(11) DEFAULT NULL,
  `merah2` int(11) DEFAULT NULL,
  `suhu` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `distrik` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suhu`
--

INSERT INTO `suhu` (`pk`, `hijau1`, `hijau2`, `kuning1`, `kuning2`, `merah1`, `merah2`, `suhu`, `group`, `distrik`) VALUES
('lpmgwd1', 0, 68, 80, 86, 0, 0, 'Winding 1', 'Log Perjaman Mesin Generator', 'Log Paok Motong'),
('lmfopm', 0, 30, 31, 60, 0, 0, 'Separator 1 Produksi MFO', 'Log MFO', 'Log Paok Motong'),
('lmfoito', 0, 30, 31, 60, 0, 0, 'Separator 1 Inlet Thermal Oil', 'Log MFO', 'Log Paok Motong'),
('lmfotmp250', 0, 30, 31, 60, 0, 0, 'Temp. (°C) 250 kl', 'Log MFO', 'Log Paok Motong'),
('lmfotmp60', 0, 30, 31, 60, 0, 0, 'Temp. (°C) 60 kl', 'Log MFO', 'Log Paok Motong'),
('lbmif1', 0, 30, 31, 60, 0, 0, 'Inlet Flow 1', 'Log Booster Module', 'Log Paok Motong'),
('lbmif2', 0, 30, 31, 60, 0, 0, 'Inlet Flow 2', 'Log Booster Module', 'Log Paok Motong'),
('lbmimt', 0, 30, 31, 60, 0, 0, 'Mixing Tank', 'Log Booster Module', 'Log Paok Motong'),
('lbmih', 0, 30, 31, 60, 0, 0, 'Inlet Heater', 'Log Booster Module', 'Log Paok Motong'),
('lbmoh', 0, 30, 31, 60, 0, 0, 'Outlet Heater', 'Log Booster Module', 'Log Paok Motong'),
('lbmv', 0, 30, 31, 60, 0, 0, 'Viscosensor', 'Log Booster Module', 'Log Paok Motong'),
('lbrl', 0, 30, 31, 60, 0, 0, 'Return Line', 'Log Booster Module', 'Log Paok Motong'),
('lbfo', 0, 30, 31, 60, 0, 0, 'Fuel Oil', 'Log Booster Module', 'Log Paok Motong'),
('lhrtotoi1', 0, 30, 31, 60, 0, 0, 'Thermal Oil HRTO In 1', 'Log HRTO', 'Log Paok Motong'),
('lhrtocto1', 0, 30, 31, 60, 0, 0, 'CIRCULATION THERMAL OIL 1', 'Log HRTO', 'Log Paok Motong'),
('lhrtooh', 0, 30, 31, 60, 0, 0, 'OUTLET HE', 'Log HRTO', 'Log Paok Motong'),
('lngsw1', 0, 30, 31, 60, 0, 0, 'SUHU WINDING 1', 'Log NIIGATA GENERATOR', 'Log Ampenan'),
('lngsw2', 0, 30, 31, 60, 0, 0, 'SUHU WINDING 2', 'Log NIIGATA GENERATOR', 'Log Ampenan'),
('lngsw3', 0, 30, 31, 60, 0, 0, 'SUHU WINDING 3', 'Log NIIGATA GENERATOR', 'Log Ampenan'),
('lngapm', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN MASUK', 'Log NIIGATA GENERATOR', 'Log Ampenan'),
('lngapk', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN KELUAR', 'Log NIIGATA GENERATOR', 'Log Ampenan'),
('lngmpm', 0, 30, 31, 60, 0, 0, 'MINYAK PELUMAS MASUK', 'Log NIIGATA GENERATOR', 'Log Ampenan'),
('lngmpk', 0, 30, 31, 60, 0, 0, 'MINYAK PELUMAS KELUAR', 'Log NIIGATA GENERATOR', 'Log Ampenan'),
('lnguba', 0, 30, 31, 60, 0, 0, 'UDARA BILAS A', 'Log NIIGATA GENERATOR', 'Log Ampenan'),
('lngubb', 0, 30, 31, 60, 0, 0, 'UDARA BILAS B', 'Log NIIGATA GENERATOR', 'Log Ampenan'),
('lnggssa1', 0, 30, 31, 60, 0, 0, 'GAS BUANG SISI SILINDER A 1', 'Log NIIGATA GENERATOR', 'Log Ampenan'),
('lnggssa2', 0, 30, 31, 60, 0, 0, 'GAS BUANG SISI SILINDER A 2', 'Log NIIGATA GENERATOR', 'Log Ampenan'),
('lnggssa3', 0, 30, 31, 60, 0, 0, 'GAS BUANG SISI SILINDER A 3', 'Log NIIGATA GENERATOR', 'Log Ampenan'),
('lnggssa4', 0, 30, 31, 60, 0, 0, 'GAS BUANG SISI SILINDER A 4', 'Log NIIGATA GENERATOR', 'Log Ampenan'),
('lnggssa5', 0, 30, 31, 60, 0, 0, 'GAS BUANG SISI SILINDER A 5', 'Log NIIGATA GENERATOR', 'Log Ampenan'),
('lnggssa6', 0, 30, 31, 60, 0, 0, 'GAS BUANG SISI SILINDER A 6', 'Log NIIGATA GENERATOR', 'Log Ampenan'),
('lnggssb1', 0, 30, 31, 60, 0, 0, 'GAS BUANG SISI SILINDER B 1', 'Log NIIGATA GENERATOR', 'Log Ampenan'),
('lnggssb2', 0, 30, 31, 60, 0, 0, 'GAS BUANG SISI SILINDER B 2', 'Log NIIGATA GENERATOR', 'Log Ampenan'),
('lnggssb3', 0, 30, 31, 60, 0, 0, 'GAS BUANG SISI SILINDER B 3', 'Log NIIGATA GENERATOR', 'Log Ampenan'),
('lnggssb4', 0, 30, 31, 60, 0, 0, 'GAS BUANG SISI SILINDER B 4', 'Log NIIGATA GENERATOR', 'Log Ampenan'),
('lnggssb5', 0, 30, 31, 60, 0, 0, 'GAS BUANG SISI SILINDER B 5', 'Log NIIGATA GENERATOR', 'Log Ampenan'),
('lnggssb6', 0, 30, 31, 60, 0, 0, 'GAS BUANG SISI SILINDER B 6', 'Log NIIGATA GENERATOR', 'Log Ampenan'),
('lngta1', 0, 30, 31, 60, 0, 0, 'TURBO A 1', 'Log NIIGATA GENERATOR', 'Log Ampenan'),
('lngtb1', 0, 30, 31, 60, 0, 0, 'TURBO B 1', 'Log NIIGATA GENERATOR', 'Log Ampenan'),
('lpmapmgbcl1', 0, 30, 31, 60, 0, 0, 'Air Pendingin MesinGas Buang Cylinder L 1', 'Log Perjaman Mesin', 'Log Paok Motong'),
('lpmapmgbcl2', 0, 30, 31, 60, 0, 0, 'Air Pendingin MesinGas Buang Cylinder L 2', 'Log Perjaman Mesin', 'Log Paok Motong'),
('lpmapmgbcl3', 0, 30, 31, 60, 0, 0, 'Air Pendingin MesinGas Buang Cylinder L 3', 'Log Perjaman Mesin', 'Log Paok Motong'),
('lpmapmgbcl4', 0, 30, 31, 60, 0, 0, 'Air Pendingin MesinGas Buang Cylinder L 4', 'Log Perjaman Mesin', 'Log Paok Motong'),
('lpmapmgbcl5', 0, 30, 31, 60, 0, 0, 'Air Pendingin MesinGas Buang Cylinder L 5', 'Log Perjaman Mesin', 'Log Paok Motong'),
('lpmapmgbcl6', 0, 30, 31, 60, 0, 0, 'Air Pendingin MesinGas Buang Cylinder L 6', 'Log Perjaman Mesin', 'Log Paok Motong'),
('lpmum1', 0, 30, 31, 60, 0, 0, 'Udara Masuk 1', 'Log Perjaman Mesin', 'Log Paok Motong'),
('lpmum2', 0, 30, 31, 60, 0, 0, 'Udara Masuk 2', 'Log Perjaman Mesin', 'Log Paok Motong'),
('lpmmpmml', 0, 30, 31, 60, 0, 0, 'Minyak Pelumas Masuk Mesin L', 'Log Perjaman Mesin', 'Log Paok Motong'),
('lpmmpmmr', 0, 30, 31, 60, 0, 0, 'Minyak Pelumas Masuk Mesin R', 'Log Perjaman Mesin', 'Log Paok Motong'),
('lpmmmrm', 0, 30, 31, 60, 0, 0, 'Minyak Pelumas Radiator Masuk', 'Log Perjaman Mesin', 'Log Paok Motong'),
('lpmmmrr', 0, 30, 31, 60, 0, 0, 'Minyak Pelumas Radiator Keluar', 'Log Perjaman Mesin', 'Log Paok Motong'),
('lpmapmmm', 0, 30, 31, 60, 0, 0, 'Air Pendingin Mesin Mesin Masuk ', 'Log Perjaman Mesin', 'Log Paok Motong'),
('lpmapmmk', 0, 30, 31, 60, 0, 0, 'Air Pendingin Mesin Mesin Keluar ', 'Log Perjaman Mesin', 'Log Paok Motong'),
('lpmapmrm', 0, 30, 31, 60, 0, 0, 'Air Pendingin Radiator Masuk', 'Log Perjaman Mesin', 'Log Paok Motong'),
('lpmapmrk', 0, 30, 31, 60, 0, 0, 'Air Pendingin Radiator Keluar', 'Log Perjaman Mesin', 'Log Paok Motong'),
('lpmapmim', 0, 30, 31, 60, 0, 0, 'Air Pendingin Mesin Injector Masuk', 'Log Perjaman Mesin', 'Log Paok Motong'),
('lpmapmik', 0, 30, 31, 60, 0, 0, 'Air Pendingin Mesin Injector Keluar', 'Log Perjaman Mesin', 'Log Paok Motong'),
('lpmapmkcl1', 0, 30, 31, 60, 0, 0, 'Air Pendingin Mesin Keluar Cylinder L 1', 'Log Perjaman Mesin', 'Log Paok Motong'),
('lpmapmkcl2', 0, 30, 31, 60, 0, 0, 'Air Pendingin Mesin Keluar Cylinder L 2', 'Log Perjaman Mesin', 'Log Paok Motong'),
('lpmapmkcl3', 0, 30, 31, 60, 0, 0, 'Air Pendingin Mesin Keluar Cylinder L 3', 'Log Perjaman Mesin', 'Log Paok Motong'),
('lpmapmkcl4', 0, 30, 31, 60, 0, 0, 'Air Pendingin Mesin Keluar Cylinder L 4', 'Log Perjaman Mesin', 'Log Paok Motong'),
('lpmapmkcl5', 0, 30, 31, 60, 0, 0, 'Air Pendingin Mesin Keluar Cylinder L 5', 'Log Perjaman Mesin', 'Log Paok Motong'),
('lpmapmkcl6', 0, 30, 31, 60, 0, 0, 'Air Pendingin Mesin Keluar Cylinder L 6', 'Log Perjaman Mesin', 'Log Paok Motong'),
('lpmapmkcr1', 0, 30, 31, 60, 0, 0, 'Air Pendingin Mesin Keluar Cylinder R 1', 'Log Perjaman Mesin', 'Log Paok Motong'),
('lpmapmkcr2', 0, 30, 31, 60, 0, 0, 'Air Pendingin Mesin Keluar Cylinder R 2', 'Log Perjaman Mesin', 'Log Paok Motong'),
('lpmapmkcr3', 0, 30, 31, 60, 0, 0, 'Air Pendingin Mesin Keluar Cylinder R 3', 'Log Perjaman Mesin', 'Log Paok Motong'),
('lpmapmkcr4', 0, 30, 31, 60, 0, 0, 'Air Pendingin Mesin Keluar Cylinder R 4', 'Log Perjaman Mesin', 'Log Paok Motong'),
('lpmapmkcr5', 0, 30, 31, 60, 0, 0, 'Air Pendingin Mesin Keluar Cylinder R 5', 'Log Perjaman Mesin', 'Log Paok Motong'),
('lpmapmkcr6', 0, 30, 31, 60, 0, 0, 'Air Pendingin Mesin Keluar Cylinder R 6', 'Log Perjaman Mesin', 'Log Paok Motong'),
('lpmapmgbcr1', 0, 30, 31, 60, 0, 0, 'Air Pendingin MesinGas Buang Cylinder R 1', 'Log Perjaman Mesin', 'Log Paok Motong'),
('lpmapmgbcr2', 0, 30, 31, 60, 0, 0, 'Air Pendingin MesinGas Buang Cylinder R 2', 'Log Perjaman Mesin', 'Log Paok Motong'),
('lpmapmgbcr3', 0, 30, 31, 60, 0, 0, 'Air Pendingin MesinGas Buang Cylinder R 3', 'Log Perjaman Mesin', 'Log Paok Motong'),
('lpmapmgbcr4', 0, 30, 31, 60, 0, 0, 'Air Pendingin MesinGas Buang Cylinder R 4', 'Log Perjaman Mesin', 'Log Paok Motong'),
('lpmapmgbcr5', 0, 30, 31, 60, 0, 0, 'Air Pendingin MesinGas Buang Cylinder R 5', 'Log Perjaman Mesin', 'Log Paok Motong'),
('lpmapmgbcr6', 0, 30, 31, 60, 0, 0, 'Air Pendingin MesinGas Buang Cylinder R 6', 'Log Perjaman Mesin', 'Log Paok Motong'),
('lpmapmtmkra', 0, 30, 31, 60, 0, 0, 'Air Pendingin Mesin Turbo Masuk Kiri Atas', 'Log Perjaman Mesin', 'Log Paok Motong'),
('lpmapmtmkrb', 0, 30, 31, 60, 0, 0, 'Air Pendingin Mesin Turbo Masuk Kiri Bawah', 'Log Perjaman Mesin', 'Log Paok Motong'),
('lpmapmtmkna', 0, 30, 31, 60, 0, 0, 'Air Pendingin Mesin Turbo Masuk Kanan Atas', 'Log Perjaman Mesin', 'Log Paok Motong'),
('lpmapmtmknb', 0, 30, 31, 60, 0, 0, 'Air Pendingin Mesin Turbo Masuk Kanan Bawah', 'Log Perjaman Mesin', 'Log Paok Motong'),
('lpmapmtkkr', 0, 30, 31, 60, 0, 0, 'Turbo Keluar Kiri', 'Log Perjaman Mesin', 'Log Paok Motong'),
('lpmapmtkkn', 0, 30, 31, 60, 0, 0, 'Turbo Keluar Kanan', 'Log Perjaman Mesin', 'Log Paok Motong'),
('lpmtb1', 0, 30, 31, 60, 0, 0, 'Temperature Bearing 1', 'Log Perjaman Mesin', 'Log Paok Motong'),
('lpmtb2', 0, 30, 31, 60, 0, 0, 'Temperature Bearing 2', 'Log Perjaman Mesin', 'Log Paok Motong'),
('lpmtb3', 0, 30, 31, 60, 0, 0, 'Temperature Bearing 3', 'Log Perjaman Mesin', 'Log Paok Motong'),
('lpmtb4', 0, 30, 31, 60, 0, 0, 'Temperature Bearing 4', 'Log Perjaman Mesin', 'Log Paok Motong'),
('lpmtb5', 0, 30, 31, 60, 0, 0, 'Temperature Bearing 5', 'Log Perjaman Mesin', 'Log Paok Motong'),
('lpmtb6', 0, 30, 31, 60, 0, 0, 'Temperature Bearing 6', 'Log Perjaman Mesin', 'Log Paok Motong'),
('lpmtb7', 0, 30, 31, 60, 0, 0, 'Temperature Bearing 7', 'Log Perjaman Mesin', 'Log Paok Motong'),
('lpmtb8', 0, 30, 31, 60, 0, 0, 'Temperature Bearing 8', 'Log Perjaman Mesin', 'Log Paok Motong'),
('lzcmrgbkssa1', 0, 30, 31, 60, 0, 0, 'Gas Buang Silinder Sisi A - 1', 'Log ZA CMR', 'Log Ampenan'),
('lzcmrgbkssa2', 0, 30, 31, 60, 0, 0, 'Gas Buang Silinder Sisi A - 2', 'Log ZA CMR', 'Log Ampenan'),
('lzcmrgbkssa3', 0, 30, 31, 60, 0, 0, 'Gas Buang Silinder Sisi A - 3', 'Log ZA CMR', 'Log Ampenan'),
('lzcmrgbkssa4', 0, 30, 31, 60, 0, 0, 'Gas Buang Silinder Sisi A - 4', 'Log ZA CMR', 'Log Ampenan'),
('lzcmrgbkssa5', 0, 30, 31, 60, 0, 0, 'Gas Buang Silinder Sisi A - 5', 'Log ZA CMR', 'Log Ampenan'),
('lzcmrgbkssa6', 0, 30, 31, 60, 0, 0, 'Gas Buang Silinder Sisi A - 6', 'Log ZA CMR', 'Log Ampenan'),
('lzcmrgbkssb1', 0, 30, 31, 60, 0, 0, 'Gas Buang Silinder Sisi B - 1', 'Log ZA CMR', 'Log Ampenan'),
('lzcmrgbkssb2', 0, 30, 31, 60, 0, 0, 'Gas Buang Silinder Sisi B - 2', 'Log ZA CMR', 'Log Ampenan'),
('lzcmrgbkssb3', 0, 30, 31, 60, 0, 0, 'Gas Buang Silinder Sisi B - 3', 'Log ZA CMR', 'Log Ampenan'),
('lzcmrgbkssb4', 0, 30, 31, 60, 0, 0, 'Gas Buang Silinder Sisi B - 4', 'Log ZA CMR', 'Log Ampenan'),
('lzcmrgbkssb5', 0, 30, 31, 60, 0, 0, 'Gas Buang Silinder Sisi B - 5', 'Log ZA CMR', 'Log Ampenan'),
('lzcmrgbkssb6', 0, 30, 31, 60, 0, 0, 'Gas Buang Silinder Sisi B - 6', 'Log ZA CMR', 'Log Ampenan'),
('lzcmrgbtam', 0, 30, 31, 60, 0, 0, 'Gas Buang Turbo A - Masuk', 'Log ZA CMR', 'Log Ampenan'),
('lzcmrgbtak', 0, 30, 31, 60, 0, 0, 'Gas Buang Turbo A - Keluar', 'Log ZA CMR', 'Log Ampenan'),
('lzcmrgbtbm', 0, 30, 31, 60, 0, 0, 'Gas Buang Turbo B - Masuk', 'Log ZA CMR', 'Log Ampenan'),
('lzcmrgbtbk', 0, 30, 31, 60, 0, 0, 'Gas Buang Turbo B - Keluar', 'Log ZA CMR', 'Log Ampenan'),
('lzcmrapm', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN MESIN', 'Log ZA CMR', 'Log Ampenan'),
('lzcmrapi', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN INJECTOR', 'Log ZA CMR', 'Log Ampenan'),
('lzcmrmp', 0, 50, 60, 65, 0, 0, 'MINYAK PELUMAS', 'Log ZA CMR', 'Log Ampenan'),
('lzcmrbb', 0, 30, 31, 60, 0, 0, 'BAHAN BAKAR', 'Log ZA CMR', 'Log Ampenan'),
('lzcmrrw', 0, 30, 31, 60, 0, 0, 'RAW WATER', 'Log ZA CMR', 'Log Ampenan'),
('lzcmrum', 0, 30, 31, 60, 0, 0, 'UDARA MASUK', 'Log ZA CMR', 'Log Ampenan'),
('lzcmrgb1', 0, 30, 31, 60, 0, 0, 'BEARING GENERATOR - 1', 'Log ZA CMR', 'Log Ampenan'),
('lzcmrgb2', 0, 30, 31, 60, 0, 0, 'BEARING GENERATOR - 2', 'Log ZA CMR', 'Log Ampenan'),
('lzcmrtb', 0, 30, 31, 60, 0, 0, 'THRUST BEARING', 'Log ZA CMR', 'Log Ampenan'),
('lzcmrmb1', 0, 30, 31, 60, 0, 0, 'MAIN BEARING - 1', 'Log ZA CMR', 'Log Ampenan'),
('lzcmrmb2', 0, 30, 31, 60, 0, 0, 'MAIN BEARING - 2', 'Log ZA CMR', 'Log Ampenan'),
('lzcmrmb3', 0, 30, 31, 60, 0, 0, 'MAIN BEARING - 3', 'Log ZA CMR', 'Log Ampenan'),
('lzcmrmb4', 0, 30, 31, 60, 0, 0, 'MAIN BEARING - 4', 'Log ZA CMR', 'Log Ampenan'),
('lzcmrmb5', 0, 30, 31, 60, 0, 0, 'MAIN BEARING - 5', 'Log ZA CMR', 'Log Ampenan'),
('lzcmrmb6', 0, 30, 31, 60, 0, 0, 'MAIN BEARING - 6', 'Log ZA CMR', 'Log Ampenan'),
('lzcmrmb7', 0, 30, 31, 60, 0, 0, 'MAIN BEARING - 7', 'Log ZA CMR', 'Log Ampenan'),
('lzcmrstr1', 0, 30, 31, 60, 0, 0, 'STATOR - 1', 'Log ZA CMR', 'Log Ampenan'),
('lzcmrstr2', 0, 30, 31, 60, 0, 0, 'STATOR - 2', 'Log ZA CMR', 'Log Ampenan'),
('lzcmrstr3', 0, 30, 31, 60, 0, 0, 'STATOR - 3', 'Log ZA CMR', 'Log Ampenan'),
('lzcmrstr4', 0, 30, 31, 60, 0, 0, 'STATOR - 4', 'Log ZA CMR', 'Log Ampenan'),
('lzcmrstr5', 0, 30, 31, 60, 0, 0, 'STATOR - 5', 'Log ZA CMR', 'Log Ampenan'),
('lzcmrstr6', 0, 30, 31, 60, 0, 0, 'STATOR - 6', 'Log ZA CMR', 'Log Ampenan'),
('lzeumdsa', 0, 30, 31, 60, 0, 0, 'UDARA MASUK DISALURKAN SISI - A', 'Log ZA ENGINE', 'Log Ampenan'),
('lzeumdsb', 0, 30, 31, 60, 0, 0, 'UDARA MASUK DISALURKAN SISI - B', 'Log ZA ENGINE', 'Log Ampenan'),
('lzempmmsa', 0, 30, 31, 60, 0, 0, 'MINYAK PELUMAS MASUK MESIN SISI - A', 'Log ZA ENGINE', 'Log Ampenan'),
('lzempmmsb', 0, 30, 31, 60, 0, 0, 'MINYAK PELUMAS MASUK MESIN SISI - B', 'Log ZA ENGINE', 'Log Ampenan'),
('lzempocm', 0, 30, 31, 60, 0, 0, 'MINYAK PELUMAS OIL COOLER - MASUK', 'Log ZA ENGINE', 'Log Ampenan'),
('lzempock', 0, 30, 31, 60, 0, 0, 'MINYAK PELUMAS OIL COOLER - KELUAR', 'Log ZA ENGINE', 'Log Ampenan'),
('lzempmf', 0, 30, 31, 60, 0, 0, 'MINYAK PELUMAS MASUK FILTER', 'Log ZA ENGINE', 'Log Ampenan'),
('lzermicsam', 0, 30, 31, 60, 0, 0, 'RAW MATER INTER COOLER SISI A - MASUK', 'Log ZA ENGINE', 'Log Ampenan'),
('lzermicsak', 0, 30, 31, 60, 0, 0, 'RAW MATER INTER COOLER SISI A - KELUAR', 'Log ZA ENGINE', 'Log Ampenan'),
('lzermicsbm', 0, 30, 31, 60, 0, 0, 'RAW MATER INTER COOLER SISI B - MASUK', 'Log ZA ENGINE', 'Log Ampenan'),
('lzermicsbk', 0, 30, 31, 60, 0, 0, 'RAW MATER INTER COOLER SISI B - KELUAR', 'Log ZA ENGINE', 'Log Ampenan'),
('lzermocm', 0, 30, 31, 60, 0, 0, 'RAW MATER OIL COOLER - MASUK', 'Log ZA ENGINE', 'Log Ampenan'),
('lzermock', 0, 30, 31, 60, 0, 0, 'RAW MATER OIL COOLER - KELUAR', 'Log ZA ENGINE', 'Log Ampenan'),
('lzermrm', 0, 30, 31, 60, 0, 0, 'RAW MATER RADIATOR - MASUK', 'Log ZA ENGINE', 'Log Ampenan'),
('lzermrk', 0, 30, 31, 60, 0, 0, 'RAW MATER RADIATOR - KELUAR', 'Log ZA ENGINE', 'Log Ampenan'),
('lzeapim', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN INJECTOR - MASUK', 'Log ZA ENGINE', 'Log Ampenan'),
('lzeapik', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN INJECTOR - KELUAR', 'Log ZA ENGINE', 'Log Ampenan'),
('lzebbmm', 0, 30, 31, 60, 0, 0, 'BAHAN BAKAR MASUK MESIN', 'Log ZA ENGINE', 'Log Ampenan'),
('lzebbmfm', 0, 30, 31, 60, 0, 0, 'BAHAN BAKAR MASUK FLOW METER', 'Log ZA ENGINE', 'Log Ampenan'),
('lzebbmp', 0, 30, 31, 60, 0, 0, 'BAHAN BAKAR MASUK POMPA', 'Log ZA ENGINE', 'Log Ampenan'),
('lzeapmmmsa', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN MESIN MASUK MESIN SISI - A', 'Log ZA ENGINE', 'Log Ampenan'),
('lzeapmmmsb', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN MESIN MASUK MESIN SISI - B', 'Log ZA ENGINE', 'Log Ampenan'),
('lzeapmmisa', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN MESIN MASUK INTERCOOLER SISI - A', 'Log ZA ENGINE', 'Log Ampenan'),
('lzeapmmisb', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN MESIN MASUK INTERCOOLER SISI - B', 'Log ZA ENGINE', 'Log Ampenan'),
('lzeapmrm', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN MESIN RADIATOR - MASUK', 'Log ZA ENGINE', 'Log Ampenan'),
('lzeapmrk', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN MESIN RADIATOR - KELUAR', 'Log ZA ENGINE', 'Log Ampenan'),
('lzeapmksa1a', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN MESIN KELUAR SILINDER A - 1A', 'Log ZA ENGINE', 'Log Ampenan'),
('lzeapmksa2a', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN MESIN KELUAR SILINDER A - 2A', 'Log ZA ENGINE', 'Log Ampenan'),
('lzeapmksa3a', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN MESIN KELUAR SILINDER A - 3A', 'Log ZA ENGINE', 'Log Ampenan'),
('lzeapmksa4a', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN MESIN KELUAR SILINDER A - 4A', 'Log ZA ENGINE', 'Log Ampenan'),
('lzeapmksa5a', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN MESIN KELUAR SILINDER A - 5A', 'Log ZA ENGINE', 'Log Ampenan'),
('lzeapmksa6a', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN MESIN KELUAR SILINDER A - 6A', 'Log ZA ENGINE', 'Log Ampenan'),
('lzeapmksb1b', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN MESIN KELUAR SILINDER B - 1B', 'Log ZA ENGINE', 'Log Ampenan'),
('lzeapmksb2b', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN MESIN KELUAR SILINDER B - 2B', 'Log ZA ENGINE', 'Log Ampenan'),
('lzeapmksb3b', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN MESIN KELUAR SILINDER B - 3B', 'Log ZA ENGINE', 'Log Ampenan'),
('lzeapmksb4b', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN MESIN KELUAR SILINDER B - 4B', 'Log ZA ENGINE', 'Log Ampenan'),
('lzeapmksb5b', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN MESIN KELUAR SILINDER B - 5B', 'Log ZA ENGINE', 'Log Ampenan'),
('lzeapmksb6b', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN MESIN KELUAR SILINDER B - 6B', 'Log ZA ENGINE', 'Log Ampenan'),
('lzeapmkm', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN MESIN KELUAR MESIN', 'Log ZA ENGINE', 'Log Ampenan'),
('lzveumsa', 0, 30, 31, 60, 0, 0, 'UDARA MASUK SISI - A', 'Log Zv ENGINE', 'Log Ampenan'),
('lzveumsb', 0, 30, 31, 60, 0, 0, 'UDARA MASUK SISI - B', 'Log Zv ENGINE', 'Log Ampenan'),
('lzveomma', 0, 30, 31, 60, 0, 0, 'OLI MASUK MESIN - A', 'Log Zv ENGINE', 'Log Ampenan'),
('lzveommb', 0, 30, 31, 60, 0, 0, 'OLI MASUK MESIN - B', 'Log Zv ENGINE', 'Log Ampenan'),
('lzveorm', 0, 30, 31, 60, 0, 0, 'OLI RADIATOR - MASUK', 'Log Zv ENGINE', 'Log Ampenan'),
('lzveork', 0, 30, 31, 60, 0, 0, 'OLI RADIATOR - KELUAR', 'Log Zv ENGINE', 'Log Ampenan'),
('lzveapmma', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN MASUK MESIN - A', 'Log Zv ENGINE', 'Log Ampenan'),
('lzveapmmb', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN MASUK MESIN - B', 'Log Zv ENGINE', 'Log Ampenan'),
('lzveaprm', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN RADIATOR - MASUK', 'Log Zv ENGINE', 'Log Ampenan'),
('lzveaprk', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN RADIATOR - KELUAR', 'Log Zv ENGINE', 'Log Ampenan'),
('lzveapim', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN INJECTOR - MASUK', 'Log Zv ENGINE', 'Log Ampenan'),
('lzveapik', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN INJECTOR - KELUAR', 'Log Zv ENGINE', 'Log Ampenan'),
('lzveapkssa1a', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN KELUAR SILINDER SISI A - 1A', 'Log Zv ENGINE', 'Log Ampenan'),
('lzveapkssa2a', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN KELUAR SILINDER SISI A - 2A', 'Log Zv ENGINE', 'Log Ampenan'),
('lzveapkssa3a', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN KELUAR SILINDER SISI A - 3A', 'Log Zv ENGINE', 'Log Ampenan'),
('lzveapkssa4a', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN KELUAR SILINDER SISI A - 4A', 'Log Zv ENGINE', 'Log Ampenan'),
('lzveapkssa5a', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN KELUAR SILINDER SISI A - 5A', 'Log Zv ENGINE', 'Log Ampenan'),
('lzveapkssa6a', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN KELUAR SILINDER SISI A - 6A', 'Log Zv ENGINE', 'Log Ampenan'),
('lzveapkssa1b', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN KELUAR SILINDER SISI A - 1B', 'Log Zv ENGINE', 'Log Ampenan'),
('lzveapkssa2b', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN KELUAR SILINDER SISI A - 2B', 'Log Zv ENGINE', 'Log Ampenan'),
('lzveapkssa3b', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN KELUAR SILINDER SISI A - 3B', 'Log Zv ENGINE', 'Log Ampenan'),
('lzveapkssa4b', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN KELUAR SILINDER SISI A - 4B', 'Log Zv ENGINE', 'Log Ampenan'),
('lzveapkssa5b', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN KELUAR SILINDER SISI A - 5B', 'Log Zv ENGINE', 'Log Ampenan'),
('lzveapkssa6b', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN KELUAR SILINDER SISI A - 6B', 'Log Zv ENGINE', 'Log Ampenan'),
('lzvegbkssa1a', 0, 30, 31, 60, 0, 0, 'GAS BUANG KELUAR SILINDER SISI A - 1A', 'Log Zv ENGINE', 'Log Ampenan'),
('lzvegbkssa2a', 0, 30, 31, 60, 0, 0, 'GAS BUANG KELUAR SILINDER SISI A - 2A', 'Log Zv ENGINE', 'Log Ampenan'),
('lzvegbkssa3a', 0, 30, 31, 60, 0, 0, 'GAS BUANG KELUAR SILINDER SISI A - 3A', 'Log Zv ENGINE', 'Log Ampenan'),
('lzvegbkssa4a', 0, 30, 31, 60, 0, 0, 'GAS BUANG KELUAR SILINDER SISI A - 4A', 'Log Zv ENGINE', 'Log Ampenan'),
('lzvegbkssa5a', 0, 30, 31, 60, 0, 0, 'GAS BUANG KELUAR SILINDER SISI A - 5A', 'Log Zv ENGINE', 'Log Ampenan'),
('lzvegbkssa6a', 0, 30, 31, 60, 0, 0, 'GAS BUANG KELUAR SILINDER SISI A - 6A', 'Log Zv ENGINE', 'Log Ampenan'),
('lzvegbkssa1b', 0, 30, 31, 60, 0, 0, 'GAS BUANG KELUAR SILINDER SISI A - 1B', 'Log Zv ENGINE', 'Log Ampenan'),
('lzvegbkssa2b', 0, 30, 31, 60, 0, 0, 'GAS BUANG KELUAR SILINDER SISI A - 2B', 'Log Zv ENGINE', 'Log Ampenan'),
('lzvegbkssa3b', 0, 30, 31, 60, 0, 0, 'GAS BUANG KELUAR SILINDER SISI A - 3B', 'Log Zv ENGINE', 'Log Ampenan'),
('lzvegbkssa4b', 0, 30, 31, 60, 0, 0, 'GAS BUANG KELUAR SILINDER SISI A - 4B', 'Log Zv ENGINE', 'Log Ampenan'),
('lzvegbkssa5b', 0, 30, 31, 60, 0, 0, 'GAS BUANG KELUAR SILINDER SISI A - 5B', 'Log Zv ENGINE', 'Log Ampenan'),
('lzvegbkssa6b', 0, 30, 31, 60, 0, 0, 'GAS BUANG KELUAR SILINDER SISI A - 6B', 'Log Zv ENGINE', 'Log Ampenan'),
('lzvemb1', 0, 30, 31, 60, 0, 0, 'MAIN BEARING - 1', 'Log Zv ENGINE', 'Log Ampenan'),
('lzvemb2', 0, 30, 31, 60, 0, 0, 'MAIN BEARING - 2', 'Log Zv ENGINE', 'Log Ampenan'),
('lzvemb3', 0, 30, 31, 60, 0, 0, 'MAIN BEARING - 3', 'Log Zv ENGINE', 'Log Ampenan'),
('lzvemb4', 0, 30, 31, 60, 0, 0, 'MAIN BEARING - 4', 'Log Zv ENGINE', 'Log Ampenan'),
('lzvemb5', 0, 30, 31, 60, 0, 0, 'MAIN BEARING - 5', 'Log Zv ENGINE', 'Log Ampenan'),
('lzvemb6', 0, 30, 31, 60, 0, 0, 'MAIN BEARING - 6', 'Log Zv ENGINE', 'Log Ampenan'),
('lzvemb7', 0, 30, 31, 60, 0, 0, 'MAIN BEARING - 7', 'Log Zv ENGINE', 'Log Ampenan'),
('lzvemb8', 0, 30, 31, 60, 0, 0, 'MAIN BEARING - 8', 'Log Zv ENGINE', 'Log Ampenan'),
('lzvemb9', 0, 30, 31, 60, 0, 0, 'MAIN BEARING - 9', 'Log Zv ENGINE', 'Log Ampenan'),
('lzvetmam', 0, 30, 31, 60, 0, 0, 'TURBO MASUK A - MASUK', 'Log Zv ENGINE', 'Log Ampenan'),
('lzvetmak', 0, 30, 31, 60, 0, 0, 'TURBO MASUK A - KELUAR', 'Log Zv ENGINE', 'Log Ampenan'),
('lzvetmbm', 0, 30, 31, 60, 0, 0, 'TURBO MASUK B - MASUK', 'Log Zv ENGINE', 'Log Ampenan'),
('lzvetmbk', 0, 30, 31, 60, 0, 0, 'TURBO MASUK B - KELUAR', 'Log Zv ENGINE', 'Log Ampenan'),
('lzvetka', 0, 30, 31, 60, 0, 0, 'TURBO KELUAR - A', 'Log Zv ENGINE', 'Log Ampenan'),
('lzvetkb', 0, 30, 31, 60, 0, 0, 'TURBO KELUAR - B', 'Log Zv ENGINE', 'Log Ampenan'),
('lzveapkm', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN KELUAR MESIN', 'Log Zv ENGINE', 'Log Ampenan'),
('lzvebbmm', 0, 30, 31, 60, 0, 0, 'BAHAN BAKAR MASUK MESIN', 'Log Zv ENGINE', 'Log Ampenan'),
('lzgsw1', 0, 30, 31, 60, 0, 0, 'SUHU  WINDING - 1', 'Log ZV GENERATOR', 'Log Ampenan'),
('lzgsw2', 0, 30, 31, 60, 0, 0, 'SUHU  WINDING - 2', 'Log ZV GENERATOR', 'Log Ampenan'),
('lzgsw3', 0, 30, 31, 60, 0, 0, 'SUHU  WINDING - 3', 'Log ZV GENERATOR', 'Log Ampenan'),
('lpeumsa', 0, 30, 31, 60, 0, 0, 'UDARA MASUK SISI - A', 'Log PIELSTICK ENGINE', 'Log Ampenan'),
('lpeumsb', 0, 30, 31, 60, 0, 0, 'UDARA MASUK SISI - B', 'Log PIELSTICK ENGINE', 'Log Ampenan'),
('lpempm', 0, 30, 31, 60, 0, 0, 'MINYAK PELUMAS - MASUK', 'Log PIELSTICK ENGINE', 'Log Ampenan'),
('lpempk', 0, 30, 31, 60, 0, 0, 'MINYAK PELUMAS - KELUAR', 'Log PIELSTICK ENGINE', 'Log Ampenan'),
('lpeapmm', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN MASUK MESIN', 'Log PIELSTICK ENGINE', 'Log Ampenan'),
('lpeapkm', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN KELUAR MESIN', 'Log PIELSTICK ENGINE', 'Log Ampenan'),
('lpeapmcsa', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN MASUK COOLER SISI - A', 'Log PIELSTICK ENGINE', 'Log Ampenan'),
('lpeapmcsb', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN MASUK COOLER SISI - B', 'Log PIELSTICK ENGINE', 'Log Ampenan'),
('lpeapkcsa', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN KELUAR COOLER SISI - A', 'Log PIELSTICK ENGINE', 'Log Ampenan'),
('lpeapkcsb', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN KELUAR COOLER SISI - B', 'Log PIELSTICK ENGINE', 'Log Ampenan'),
('lpeapim', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN INJECTOR - MASUK', 'Log PIELSTICK ENGINE', 'Log Ampenan'),
('lpeapik', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN INJECTOR - KELUAR', 'Log PIELSTICK ENGINE', 'Log Ampenan'),
('lpeapksa1', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN KELUAR SILINDER A - 1', 'Log PIELSTICK ENGINE', 'Log Ampenan'),
('lpeapksa2', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN KELUAR SILINDER A - 2', 'Log PIELSTICK ENGINE', 'Log Ampenan'),
('lpeapksa3', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN KELUAR SILINDER A - 3', 'Log PIELSTICK ENGINE', 'Log Ampenan'),
('lpeapksa4', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN KELUAR SILINDER A - 4', 'Log PIELSTICK ENGINE', 'Log Ampenan'),
('lpeapksa5', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN KELUAR SILINDER A - 5', 'Log PIELSTICK ENGINE', 'Log Ampenan'),
('lpeapksa6', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN KELUAR SILINDER A - 6', 'Log PIELSTICK ENGINE', 'Log Ampenan'),
('lpeapksb1', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN KELUAR SILINDER B - 1', 'Log PIELSTICK ENGINE', 'Log Ampenan'),
('lpeapksb2', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN KELUAR SILINDER B - 2', 'Log PIELSTICK ENGINE', 'Log Ampenan'),
('lpeapksb3', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN KELUAR SILINDER B - 3', 'Log PIELSTICK ENGINE', 'Log Ampenan'),
('lpeapksb4', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN KELUAR SILINDER B - 4', 'Log PIELSTICK ENGINE', 'Log Ampenan'),
('lpeapksb5', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN KELUAR SILINDER B - 5', 'Log PIELSTICK ENGINE', 'Log Ampenan'),
('lpeapksb6', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN KELUAR SILINDER B - 6', 'Log PIELSTICK ENGINE', 'Log Ampenan'),
('lpegbksa1', 0, 30, 31, 60, 0, 0, 'GAS BUANG KELUAR SILINDER A - 1', 'Log PIELSTICK ENGINE', 'Log Ampenan'),
('lpegbksa2', 0, 30, 31, 60, 0, 0, 'GAS BUANG KELUAR SILINDER A - 2', 'Log PIELSTICK ENGINE', 'Log Ampenan'),
('lpegbksa3', 0, 30, 31, 60, 0, 0, 'GAS BUANG KELUAR SILINDER A - 3', 'Log PIELSTICK ENGINE', 'Log Ampenan'),
('lpegbksa4', 0, 30, 31, 60, 0, 0, 'GAS BUANG KELUAR SILINDER A - 4', 'Log PIELSTICK ENGINE', 'Log Ampenan'),
('lpegbksa5', 0, 30, 31, 60, 0, 0, 'GAS BUANG KELUAR SILINDER A - 5', 'Log PIELSTICK ENGINE', 'Log Ampenan'),
('lpegbksa6', 0, 30, 31, 60, 0, 0, 'GAS BUANG KELUAR SILINDER A - 6', 'Log PIELSTICK ENGINE', 'Log Ampenan'),
('lpesr', 0, 30, 31, 60, 0, 0, 'SUHU RUANGAN', 'Log PIELSTICK ENGINE', 'Log Ampenan'),
('lnebbmm', 0, 30, 31, 60, 0, 0, 'BAHAN BAKAR MASUK MESIN', 'Log NIIGATA ENGINE', 'Log Ampenan'),
('lnempmm', 0, 30, 31, 60, 0, 0, 'MINYAK PELUMAS MASUK MESIN', 'Log NIIGATA ENGINE', 'Log Ampenan'),
('lneapmm', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN MASUK MESIN', 'Log NIIGATA ENGINE', 'Log Ampenan'),
('lnempim', 0, 30, 31, 60, 0, 0, 'MINYAK PENDINGIN INJEKTOR - MASUK', 'Log NIIGATA ENGINE', 'Log Ampenan'),
('lnempik', 0, 30, 31, 60, 0, 0, 'MINYAK PENDINGIN INJEKTOR - KELUAR', 'Log NIIGATA ENGINE', 'Log Ampenan'),
('lneapksa1a', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN KELUAR SILINDER A - 1A', 'Log NIIGATA ENGINE', 'Log Ampenan'),
('lneapksa2a', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN KELUAR SILINDER A - 2A', 'Log NIIGATA ENGINE', 'Log Ampenan'),
('lneapksa3a', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN KELUAR SILINDER A - 3A', 'Log NIIGATA ENGINE', 'Log Ampenan'),
('lneapksa4a', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN KELUAR SILINDER A - 4A', 'Log NIIGATA ENGINE', 'Log Ampenan'),
('lneapksa5a', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN KELUAR SILINDER A - 5A', 'Log NIIGATA ENGINE', 'Log Ampenan'),
('lneapksa6a', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN KELUAR SILINDER A - 6A', 'Log NIIGATA ENGINE', 'Log Ampenan'),
('lneapksb1b', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN KELUAR SILINDER B - 1B', 'Log NIIGATA ENGINE', 'Log Ampenan'),
('lneapksb2b', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN KELUAR SILINDER B - 2B', 'Log NIIGATA ENGINE', 'Log Ampenan'),
('lneapksb3b', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN KELUAR SILINDER B - 3B', 'Log NIIGATA ENGINE', 'Log Ampenan'),
('lneapksb4b', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN KELUAR SILINDER B - 4B', 'Log NIIGATA ENGINE', 'Log Ampenan'),
('lneapksb5b', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN KELUAR SILINDER B - 5B', 'Log NIIGATA ENGINE', 'Log Ampenan'),
('lneapksb6b', 0, 30, 31, 60, 0, 0, 'AIR PENDINGIN KELUAR SILINDER B - 6B', 'Log NIIGATA ENGINE', 'Log Ampenan'),
('lneumia', 0, 30, 31, 60, 0, 0, 'UDARA MASUK INTERCOOLER - A', 'Log NIIGATA ENGINE', 'Log Ampenan'),
('lneumib', 0, 30, 31, 60, 0, 0, 'UDARA MASUK INTERCOOLER - B', 'Log NIIGATA ENGINE', 'Log Ampenan'),
('lneukia', 0, 30, 31, 60, 0, 0, 'UDARA KELUAR INTERCOOLER - A', 'Log NIIGATA ENGINE', 'Log Ampenan'),
('lneukib', 0, 30, 31, 60, 0, 0, 'UDARA KELUAR INTERCOOLER - B', 'Log NIIGATA ENGINE', 'Log Ampenan'),
('lneumf', 0, 30, 31, 60, 0, 0, 'UDARA MASUK FILTER (BLOWER)', 'Log NIIGATA ENGINE', 'Log Ampenan'),
('lnermpm', 0, 30, 31, 60, 0, 0, 'RADIATOR MINYAK PELUMAS - MASUK', 'Log NIIGATA ENGINE', 'Log Ampenan'),
('lnermpk', 0, 30, 31, 60, 0, 0, 'RADIATOR MINYAK PELUMAS - KELUAR', 'Log NIIGATA ENGINE', 'Log Ampenan'),
('lnerapmm', 0, 30, 31, 60, 0, 0, 'RADIATOR AIR PENDINGIN MESIN - MASUK', 'Log NIIGATA ENGINE', 'Log Ampenan'),
('lnerapmk', 0, 30, 31, 60, 0, 0, 'RADIATOR AIR PENDINGIN MESIN - KELUAR', 'Log NIIGATA ENGINE', 'Log Ampenan'),
('lnerapim', 0, 30, 31, 60, 0, 0, 'RADIATOR AIR PENDINGIN INTERCOOLER - MASUK', 'Log NIIGATA ENGINE', 'Log Ampenan'),
('lnerapik', 0, 30, 31, 60, 0, 0, 'RADIATOR AIR PENDINGIN INTERCOOLER - KELUAR', 'Log NIIGATA ENGINE', 'Log Ampenan'),
('lrssapjwm', 0, 30, 31, 60, 0, 0, 'SUHU AIR PENDINGIN JACKET WATER - MASUK', 'Log RUSTON', 'Log Ampenan'),
('lrssapjwk', 0, 30, 31, 60, 0, 0, 'SUHU AIR PENDINGIN JACKET WATER - KELUAR', 'Log RUSTON', 'Log Ampenan'),
('lrssaprwm', 0, 30, 31, 60, 0, 0, 'SUHU AIR PENDINGIN RAW WATER - MASUK', 'Log RUSTON', 'Log Ampenan'),
('lrssaprwk', 0, 30, 31, 60, 0, 0, 'SUHU AIR PENDINGIN RAW WATER - KELUAR', 'Log RUSTON', 'Log Ampenan'),
('lrssmpm', 0, 30, 31, 60, 0, 0, 'SUHU MINYAK PELUMAS - MASUK', 'Log RUSTON', 'Log Ampenan'),
('lrssmpk', 0, 30, 31, 60, 0, 0, 'SUHU MINYAK PELUMAS - KELUAR', 'Log RUSTON', 'Log Ampenan'),
('lrssum', 0, 30, 31, 60, 0, 0, 'SUHU UDARA MASUK', 'Log RUSTON', 'Log Ampenan'),
('lrssgbssa1', 0, 30, 31, 60, 0, 0, 'SUHU GAS BUANG SILINDER SISI A - 1', 'Log RUSTON', 'Log Ampenan'),
('lrssgbssa2', 0, 30, 31, 60, 0, 0, 'SUHU GAS BUANG SILINDER SISI A - 2', 'Log RUSTON', 'Log Ampenan'),
('lrssgbssa3', 0, 30, 31, 60, 0, 0, 'SUHU GAS BUANG SILINDER SISI A - 3', 'Log RUSTON', 'Log Ampenan'),
('lrssgbssa4', 0, 30, 31, 60, 0, 0, 'SUHU GAS BUANG SILINDER SISI A - 4', 'Log RUSTON', 'Log Ampenan'),
('lrssgbssb1', 0, 30, 31, 60, 0, 0, 'SUHU GAS BUANG SILINDER SISI B - 1', 'Log RUSTON', 'Log Ampenan'),
('lrssgbssb2', 0, 30, 31, 60, 0, 0, 'SUHU GAS BUANG SILINDER SISI B - 2', 'Log RUSTON', 'Log Ampenan'),
('lrssgbssb3', 0, 30, 31, 60, 0, 0, 'SUHU GAS BUANG SILINDER SISI B - 3', 'Log RUSTON', 'Log Ampenan'),
('lrssgbssb4', 0, 30, 31, 60, 0, 0, 'SUHU GAS BUANG SILINDER SISI B - 4', 'Log RUSTON', 'Log Ampenan'),
('lrssgbst1a', 0, 30, 31, 60, 0, 0, 'SUHU GAS BUANG SEBELUM TURBO - 1A', 'Log RUSTON', 'Log Ampenan'),
('lrssgbst2a', 0, 30, 31, 60, 0, 0, 'SUHU GAS BUANG SEBELUM TURBO - 2A', 'Log RUSTON', 'Log Ampenan'),
('lrssgbst3a', 0, 30, 31, 60, 0, 0, 'SUHU GAS BUANG SEBELUM TURBO - 3A', 'Log RUSTON', 'Log Ampenan'),
('lrssgbst4a', 0, 30, 31, 60, 0, 0, 'SUHU GAS BUANG SEBELUM TURBO - 4A', 'Log RUSTON', 'Log Ampenan'),
('lrssgbst1b', 0, 30, 31, 60, 0, 0, 'SUHU GAS BUANG SEBELUM TURBO - 1B', 'Log RUSTON', 'Log Ampenan'),
('lrssgbst2b', 0, 30, 31, 60, 0, 0, 'SUHU GAS BUANG SEBELUM TURBO - 2B', 'Log RUSTON', 'Log Ampenan'),
('lrssgbst3b', 0, 30, 31, 60, 0, 0, 'SUHU GAS BUANG SEBELUM TURBO - 3B', 'Log RUSTON', 'Log Ampenan'),
('lrssgbst4b', 0, 30, 31, 60, 0, 0, 'SUHU GAS BUANG SEBELUM TURBO - 4B', 'Log RUSTON', 'Log Ampenan'),
('lrssmdm', 0, 30, 31, 60, 0, 0, 'SUHU MINYAK DISARINGAN - MASUK', 'Log RUSTON', 'Log Ampenan'),
('lrssmdk', 0, 30, 31, 60, 0, 0, 'SUHU MINYAK DISARINGAN - KELUAR', 'Log RUSTON', 'Log Ampenan'),
('lpmgwd2', 0, 30, 31, 60, 0, 0, 'Winding 2', 'Log Perjaman Mesin Generator', 'Log Paok Motong'),
('lpmgwd3', 0, 30, 31, 60, 0, 0, 'Winding 3', 'Log Perjaman Mesin Generator', 'Log Paok Motong'),
('lpmgwd4', 0, 30, 31, 60, 0, 0, 'Winding 4', 'Log Perjaman Mesin Generator', 'Log Paok Motong'),
('lpmgwd5', 0, 30, 31, 60, 0, 0, 'Winding 5', 'Log Perjaman Mesin Generator', 'Log Paok Motong'),
('lpmgwd6', 0, 30, 31, 60, 0, 0, 'Winding 6', 'Log Perjaman Mesin Generator', 'Log Paok Motong'),
('lmfopm2', 0, 30, 31, 60, 0, 0, 'Separator 2 Produksi MFO', 'Log MFO', 'Log Paok Motong'),
('lmfoito2', 0, 30, 31, 60, 0, 0, 'Separator 2 Inlet Thermal Oil', 'Log MFO', 'Log Paok Motong'),
('lhrtotoo1', 0, 30, 31, 60, 0, 0, 'Thermal Oil HRTO Out 1', 'Log HRTO', 'Log Paok Motong'),
('lhrtotoi2', 0, 30, 31, 60, 0, 0, 'Thermal Oil HRTO In 2', 'Log HRTO', 'Log Paok Motong'),
('lhrtotoo2', 0, 30, 31, 60, 0, 0, 'Thermal Oil HRTO Out 2', 'Log HRTO', 'Log Paok Motong'),
('lhrtogi2', 0, 30, 31, 60, 0, 0, 'GAS INLET HRTO UNIT 2', 'Log HRTO', 'Log Paok Motong'),
('lhrtogi3', 1, 31, 32, 61, 1, 1, 'GAS INLET HRTO UNIT 3', 'Log HRTO', 'Log Paok Motong'),
('lhrtogi4', 2, 32, 33, 62, 2, 2, 'GAS INLET HRTO UNIT 4', 'Log HRTO', 'Log Paok Motong'),
('lhrtogi5', 3, 33, 34, 63, 3, 3, 'GAS INLET HRTO UNIT 5', 'Log HRTO', 'Log Paok Motong'),
('lhrtocto2', 0, 30, 31, 60, 0, 0, 'CIRCULATION THERMAL OIL 2', 'Log HRTO', 'Log Paok Motong'),
('lpegbksb1', 0, 30, 31, 60, 0, 0, 'GAS BUANG KELUAR SILINDER B - 1', 'Log PIELSTICK ENGINE', 'Log Ampenan'),
('lpegbksb2', 0, 30, 31, 60, 0, 0, 'GAS BUANG KELUAR SILINDER B - 2', 'Log PIELSTICK ENGINE', 'Log Ampenan'),
('lpegbksb3', 0, 30, 31, 60, 0, 0, 'GAS BUANG KELUAR SILINDER B - 3', 'Log PIELSTICK ENGINE', 'Log Ampenan'),
('lpegbksb4', 0, 30, 31, 60, 0, 0, 'GAS BUANG KELUAR SILINDER B - 4', 'Log PIELSTICK ENGINE', 'Log Ampenan'),
('lpegbksb5', 0, 30, 31, 60, 0, 0, 'GAS BUANG KELUAR SILINDER B - 5', 'Log PIELSTICK ENGINE', 'Log Ampenan'),
('lpegbksb6', 0, 30, 31, 60, 0, 0, 'GAS BUANG KELUAR SILINDER B - 6', 'Log PIELSTICK ENGINE', 'Log Ampenan'),
('lngta2', NULL, NULL, NULL, NULL, NULL, NULL, 'TURBO A 2', 'Log NIIGATA GENERATOR', 'Log Ampenan'),
('lngtb2', NULL, NULL, NULL, NULL, NULL, NULL, 'TURBO B 2', 'Log NIIGATA GENERATOR', 'Log Ampenan');

-- --------------------------------------------------------

--
-- Table structure for table `unit1`
--

CREATE TABLE `unit1` (
  `id` tinyint(4) NOT NULL,
  `unit` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `unit1`
--

INSERT INTO `unit1` (`id`, `unit`) VALUES
(1, 'UPK LOMBOK');

-- --------------------------------------------------------

--
-- Table structure for table `unit2`
--

CREATE TABLE `unit2` (
  `id` tinyint(4) NOT NULL,
  `unit` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_unit1` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `unit2`
--

INSERT INTO `unit2` (`id`, `unit`, `fk_unit1`) VALUES
(1, 'ULPLTD AMPENAN', 1),
(2, 'ULPLTD PAOKMOTONG', 1),
(3, 'EBT', 1);

-- --------------------------------------------------------

--
-- Table structure for table `unit3`
--

CREATE TABLE `unit3` (
  `id` tinyint(4) NOT NULL,
  `unit` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_unit2` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `unit3`
--

INSERT INTO `unit3` (`id`, `unit`, `fk_unit2`) VALUES
(1, 'PLTMH NARMANADA', '3'),
(2, 'PLTMH SANTONG', '3'),
(3, 'PLTMH PENGGE', '3'),
(4, 'PLTS GILI TERAWANGAN', '3'),
(5, 'PLTS GILI AIR', '3'),
(6, 'PLTS GILI MENO', '3');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `menu_style` int(11) DEFAULT '0',
  `unit1` tinyint(4) DEFAULT NULL,
  `unit2` tinyint(4) DEFAULT NULL,
  `unit3` tinyint(4) DEFAULT NULL,
  `wa` varchar(15) DEFAULT NULL,
  `fk_notifikasi` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`, `menu_style`, `unit1`, `unit2`, `unit3`, `wa`, `fk_notifikasi`) VALUES
(5, 'Super Admin', 'admin@gmail.com', 'index.png', '$2y$10$034ygILxXRCs5O6H/RRlleuoJEdm8dhZXi9YXxt9eGqP/V3pTzpu6', 5, 1, 1602145309, 1, NULL, NULL, NULL, NULL, '506214420,506214421,53121371,53121372,,662821530,662821531,662821532'),
(7, 'edgar', 'edgar@gmail.com', 'default.jpg', '$2y$10$GOCXCGHQxYhmO3LGymVM4uOb0iffZB0kcQyUksqcdnFWcELoKHSTe', 1, 1, 1603116245, 1, NULL, NULL, NULL, NULL, ''),
(22, 'Admin Paok Motong', 'admin@paokmotong.com', 'index1.png', '$2y$10$VXqPWGrSYK.UDEApslGsf.LzfIvrg0EBzyutR9rI53bMwRcCqvz0K', 15, 1, 1613353296, 1, NULL, NULL, NULL, NULL, '222821460,222821461,222821305,222821306,222821307,222821111,222821113,222821116,222821117,222821118,53121371,53121372,662821530,662821531,662821532'),
(23, 'Admin Ampenan', 'Admin@ampenan.com', 'default.jpg', '$2y$10$rC1AWg3EmYvl3qChrYCM5uQEqfDopMxZDtM1bdtIEoaHlLzsoq.Uy', 6, 1, 1613353337, 1, NULL, NULL, NULL, NULL, '50621534,50621536,506215310,50621258,50621259,506212510,506213323,506213324,506212220,506212221,506212222,506212223,50621150,50621154,506211521,506214420,506214421,'),
(24, 'Admin EBT', 'admin@ebt.com', 'default.jpg', '$2y$10$hvW27YTVXwERYwNjroBLK.D5W7GXHU7auY4D2liyLaFgn8yYy0JZW', 7, 1, 1613353358, 1, NULL, NULL, NULL, NULL, NULL),
(25, 'Richie AL', 'almaisir.23@gmail.com', 'default.jpg', 'b4327314e1', 16, 1, 1613356097, 1, 1, 1, 0, '083129559171', '222821460,222821461,222821305,222821306,222821307,222821111,222821113,222821116,222821117,222821118,53121371,53121372,662821530,662821531,662821532'),
(26, 'Muh Fitra Rizki', '1718053@scholar.itn.ac.id', 'default.jpg', '8cf5e9ae2b', 16, 1, 1613356499, 1, 1, 2, 0, '083129559171', '222821460,222821461,222821305,222821306,222821307,222821111,222821113,222821116,222821117,222821118,53121371,53121372,662821530,662821531,662821532'),
(27, 'Lingga 22', 'gaullingga@gmail.com', 'default.jpg', 'db9c1b302e', 16, 1, 1613357572, 1, 1, 2, 0, '', '222821460,222821461,222821305,222821306,222821307,222821111,222821113,222821116,222821117,222821118,53121371,53121372,662821530,662821531,662821532'),
(30, 'dimass dimas', 'dimassdimas88@gmail.com', 'default.jpg', 'd158d97dcf', 16, 1, 1613442958, 1, 1, 2, 0, '', '222821460,222821461,222821305,222821306,222821307,222821111,222821113,222821116,222821117,222821118,53121371,53121372,662821530,662821531,662821532'),
(31, 'Rendra isrohman', 'rendraisrohman@gmail.com', 'default.jpg', '619b5b11f8', 16, 1, 1613445156, 1, 1, 1, 0, '', '222821460,222821461,222821305,222821306,222821307,222821111,222821113,222821116,222821117,222821118,53121371,53121372,662821530,662821531,662821532'),
(51, 'Hari Eko Prasetiyo', 'hariekoprasetiyo1997@gmail.com', 'default.jpg', 'c511b28593', 16, 1, 1613875478, 1, 1, 2, 0, '087859077037', '222821460,222821461,222821305,222821306,222821307,222821111,222821113,222821116,222821117,222821118,53121371,53121372,662821530,662821531,662821532'),
(52, 'Test User', 'User@gmail.com', 'default.jpg', '$2y$10$sqJ4VQmH3nvj87YdT4c.luBiJutBK3vwHwj7.vzmPVEPcW9tg2ISi', 16, 1, 1616241160, 1, 1, 2, 0, '083129559171', '53121371,53121372,662821530,662821531,662821532'),
(54, 'Admin Paok Motong', 'adminpm', 'default.jpg', '$2y$10$RvYjoKqcdLT6hHuSA9iotemh1.n9.wnQtEZZbhwX8EXsE7CgoyJPO', 15, 1, 1617095208, 1, NULL, NULL, NULL, '089123123', '53121371,53121372,662821530,662821531,662821532'),
(55, 'Admin Paokmotong', 'adminpmt', 'default.jpg', '$2y$10$07SrAJJt./p6QcsX98DdAeV.6RrJd9IEGp1gH6ELWpvTOyOF/dX9K', 15, 1, 1617096637, 1, NULL, NULL, NULL, '', '53121371,53121372,662821530,662821531,662821532'),
(56, 'Admin Ampenan', 'adminamp', 'default.jpg', '$2y$10$ospAQtbD2N1El9CM8vIsIe8BBqZ7bwyv3Uk9raF9aCIrgmUvyAbFm', 6, 1, 1617096689, 1, NULL, NULL, NULL, '', ''),
(57, 'Admin Tanjung', 'adminebt', 'default.jpg', '$2y$10$oAaraJ3LvFgfpf9ZHez6tOkj9c.kXTTheXuq7LLf0zNaESp3fWhAu', 7, 1, 1617096789, 1, NULL, NULL, NULL, '', NULL),
(58, 'Wildan asy\'ari', 'Wildanasyari25@gmail.com', 'default.jpg', '$2y$10$f8PLa6.AMkRDUMyx3LstW.yeqcZ82RVOdh7jE.filLvH99tMSY5za', 17, 1, 1617677160, 1, 1, 1, 0, '087864710444', ''),
(59, 'Firman febriansah', 'Firmanfebriansah18@gmail.com', 'default.jpg', '$2y$10$ESdV69Ngj3h/4bH2AOrOluTqCTIO3hKvv5LbbC4kit0q1xNiUefLK', 17, 1, 1617677397, 1, 1, 1, 0, '081236307626', ''),
(60, 'Slamet Budi santoso', 'budij4143@gmail.com', 'default.jpg', '$2y$10$u4o4niIvQpe74dLMIvVBu.2JShh6F8QPb0bF48TRhyUGUjzL5OgmK', 17, 1, 1617677451, 1, 1, 1, 0, '081907399528', ''),
(61, 'M Septian AG', 'muhesage7@gmail.com', 'default.jpg', '$2y$10$E/1pObEq/NFp.R8jpKkNZe2YSTmQGmhlRLwu6abwCCoTkueNEJokG', 17, 1, 1617677469, 1, 1, 1, 0, '081236139264', ''),
(62, 'Ekoislam', 'Eko.islam@pln.co.id', 'default.jpg', '$2y$10$9VffDgTLlwwhpRysTyQq0OntaCaL4TfjxLDCjYa6BzWQzz775QGIS', 17, 1, 1617677473, 1, 1, 1, 0, '081907263404', ''),
(63, 'Agung Prakoso', 'prakosoagung511@gmail.com', 'default.jpg', '$2y$10$taYjtVIuAOno295Cz2qiyefRnbgI/4hJXM2hk7Tpq3xwKCl20awOG', 17, 1, 1617677754, 1, 1, 1, 0, '085708564805', ''),
(64, 'Agung Prakoso', 'agung.prakoso@pln.co.id', 'default.jpg', '$2y$10$uA8JIVnbJ0nbMdCl.qkWjub9eJZSnqG3c8d9izwigmUAUWqxy6o4y', 17, 1, 1617678073, 1, 1, 1, 0, '085708564805', NULL),
(65, 'Lalu yayan setiawan', 'Laluyayan95@gmail.com', 'default.jpg', '$2y$10$uvj5maI.skzTe/YM68Wmb.cCFQfBuXJGC67bgNDz.ibFUsMVf67NG', 17, 1, 1617678982, 1, 1, 1, 0, '082339866603', NULL),
(66, 'JANUAR', 'januarjr19@gmail.com', 'default.jpg', '$2y$10$oMAukk5n2U4CjjoMEtu4F.tYjQzmPa2.OFr4vmSpl2Ozk2/He87cm', 16, 1, 1617700015, 1, 1, 2, 0, '082247797575', '662821530,662821531,662821532'),
(67, 'Ahmad Rudianto', 'rudytabuty187@gmail.com', 'default.jpg', '$2y$10$iFfaDoQ6a5ix1K3lVH3jjuGKl1JLYKSlrI0rg5MRcTq73CGnWhr/6', 17, 0, 1617723515, 1, 1, 1, 0, '081239592992', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(3, 2, 2),
(31, 4, 6),
(32, 4, 8),
(35, 4, 2),
(45, 5, 2),
(46, 5, 6),
(47, 5, 8),
(48, 5, 16),
(49, 5, 17),
(50, 5, 18),
(51, 5, 19),
(52, 5, 20),
(53, 5, 22),
(54, 5, 1),
(55, 5, 23),
(56, 5, 24),
(57, 6, 2),
(58, 6, 8),
(59, 7, 2),
(60, 7, 16),
(61, 8, 2),
(62, 8, 25),
(63, 9, 2),
(64, 9, 26),
(65, 10, 2),
(66, 10, 27),
(67, 11, 2),
(68, 11, 28),
(69, 12, 2),
(70, 12, 29),
(71, 13, 2),
(72, 13, 30),
(73, 15, 2),
(74, 15, 6),
(77, 7, 1),
(79, 16, 6),
(80, 17, 8),
(81, 17, 2),
(82, 16, 2),
(88, 15, 31),
(90, 6, 32);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL,
  `menu_icon` varchar(100) DEFAULT 'fas fa-fw fa-folder',
  `menu_order` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`, `menu_icon`, `menu_order`) VALUES
(1, 'Admin', 'fas fa-fw fa-tachometer-alt', 2),
(2, 'User', 'fas fa-fw fa-user', 3),
(6, 'Log Paok Motong', 'fas fa-fw fa-folder', 4),
(8, 'Log Ampenan', 'fas fa-fw fa-folder', 5),
(16, 'EBT', 'fas fa-fw fa-folder', 6),
(18, 'Development', 'fas fa-fw fa-cog', 0),
(22, 'Super Admin', 'fas fa-fw fa-address-card', 1),
(25, 'EBT Pengga', 'fas fa-fw fa-folder', NULL),
(26, 'EBT Narmada', 'fas fa-fw fa-folder', NULL),
(27, 'EBT Santong', 'fas fa-fw fa-folder', NULL),
(28, 'EBT Trawangan', 'fas fa-fw fa-folder', NULL),
(29, 'EBT Meno', 'fas fa-fw fa-folder', NULL),
(30, 'EBT Air', 'fas fa-fw fa-folder', NULL),
(31, 'Admin PM', 'fas fa-fw fa-tachometer-alt', NULL),
(32, 'Admin Amp', 'fas fa-fw fa-tachometer-alt', NULL),
(33, 'Admin EBT', 'fas fa-fw fa-tachometer-alt', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(2, 'Member'),
(4, 'Programer'),
(5, 'Super Admin'),
(6, 'Admin Ampenan'),
(7, 'Admin EBT'),
(8, 'User Pengga'),
(9, 'User Narmada'),
(10, 'User Santong'),
(11, 'User Trawangan'),
(12, 'User Meno'),
(13, 'User Air'),
(15, 'Admin Paok Motong'),
(16, 'User Paok Motong'),
(17, 'User Ampenan');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL,
  `menu_order` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`, `menu_order`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1, NULL),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1, NULL),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1, NULL),
(4, 22, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1, NULL),
(5, 22, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1, NULL),
(7, 22, 'Hak Akses', 'admin/role', 'fas fa-fw fa-user-tie', 1, NULL),
(9, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1, NULL),
(14, 6, 'Log Beban Penyulang', 'log_paok_motong_beban_penyulang', 'fas fa-fw fa-folder', 1, NULL),
(15, 6, 'Log Perjaman Mesin', 'log_paok_motong_perjaman_mesin', 'fas fa-fw fa-folder', 1, NULL),
(16, 6, 'Formulir Tukar Piket', 'log_paok_motong_formulir_tukar_piket', 'fas fa-fw fa-folder', 1, NULL),
(17, 6, 'Log Perjaman Mesin Generator', 'log_paok_motong_laporan_perjaman_mesin_generator', 'fas fa-fw fa-folder', 1, NULL),
(18, 8, 'Log Niigata Engine', 'log_ampenan_niigata_engine', 'fas fa-fw fa-folder', 1, 1),
(19, 8, 'Log Niigata Generator', 'log_ampenan_niigata_generator', 'fas fa-fw fa-folder', 1, 2),
(20, 8, 'Log Zav Generator', 'log_ampenan_zav_generator', 'fas fa-fw fa-folder', 1, 4),
(21, 8, 'Log Zv Engine', 'log_ampenan_zv_pltd', 'fas fa-fw fa-folder', 1, 5),
(22, 8, 'Log Zv Generator', 'log_ampenan_zv_generator', 'fas fa-fw fa-folder', 1, 6),
(26, 18, 'Tools', 'coba', 'fas fa-fw fa-wrench', 1, NULL),
(27, 19, 'Setup Beban Penyulang', 'setup_beban_penyulang', 'fas fa-fw fa-cog', 0, NULL),
(28, 19, 'Setup Perjaman Mesin', 'setup_perjaman_mesin', 'fas fa-fw fa-cog', 0, NULL),
(29, 19, 'Setup Perjaman Mesin Generator', 'setup_perjaman_mesin_generator', 'fas fa-fw fa-cog', 0, NULL),
(30, 23, 'Setup Niigata Engine', 'setup_niigata_engine', 'fas fa-fw fa-cog', 0, NULL),
(31, 20, 'Setup Niigata Generator', 'setup_niigata_generator', 'fas fa-fw fa-cog', 0, NULL),
(32, 20, 'Setup Zav Generator', 'setup_zav_generator', 'fas fa-fw fa-cog', 0, NULL),
(33, 20, 'Setup Zv Pltd Ampenan', 'setup_zv_pltd_ampenan', 'fas fa-fw fa-cog', 0, NULL),
(34, 20, 'Setup Zv Generator', 'setup_zv_generator', 'fas fa-fw fa-cog', 0, NULL),
(35, 16, 'Log PLMTH Pengga', 'log_ebt_pengga', 'fas fa-fw fa-folder', 1, 1),
(36, 16, 'Check List Pengga', 'check_list_pengga', 'fas fa-fw fa-folder', 1, 7),
(37, 17, 'Setup PLTS', 'setup_plts', 'fas fa-fw fa-cog', 0, NULL),
(39, 1, 'User Management', 'user_adm', 'fas fa-fw fa-user', 1, NULL),
(41, 1, 'Setup Temperature', 'suhu', 'fas fa-fw fa-thermometer-empty', 1, NULL),
(42, 6, 'Log Separator MFO', 'log_paok_motong_separator_mfo', 'fas fa-fw fa-folder', 1, NULL),
(43, 6, 'Check List ', 'log_paok_motong_checklist', 'fas fa-fw fa-folder', 1, NULL),
(44, 18, 'Chart', 'coba/chart', 'fas fa-fw fa-wrench', 1, NULL),
(45, 6, 'Log Booster Module', 'log_paok_motong_booster_module', 'fas fa-fw fa-folder', 1, NULL),
(46, 6, 'Log Penyulang Analog & Bateray', 'log_paok_motong_penyulang_analog_bateray', 'fas fa-fw fa-folder', 1, NULL),
(47, 6, 'Log HRTO', 'log_paok_motong_hrto', 'fas fa-fw fa-folder', 1, NULL),
(48, 8, 'Log Zav Engine', 'log_ampenan_zav_engine', 'fas fa-fw fa-folder', 1, 3),
(49, 8, 'Log Zav CMR', 'log_ampenan_za_cmr', 'fas fa-fw fa-folder', 1, NULL),
(50, 8, 'Log Penyulang Ampenan', 'log_ampenan_penyulang_ampenan', 'fas fa-fw fa-folder', 1, NULL),
(51, 8, 'Log Pielstick Engine', 'log_ampenan_pielstick_engine', 'fas fa-fw fa-folder', 1, NULL),
(52, 8, 'Log Pielstick Generator', 'log_ampenan_pielstick_generator', 'fas fa-fw fa-folder', 1, NULL),
(53, 8, 'Log Ruston', 'log_ampenan_ruston', 'fas fa-fw fa-folder', 1, NULL),
(54, 16, 'Log PLMTH Narmada', 'log_ebt_narmada', 'fas fa-fw fa-folder', 1, 2),
(55, 16, 'Log PLMTH Santong', 'log_ebt_santong', 'fas fa-fw fa-folder', 1, 3),
(56, 16, 'Log PLTS Trawangan', 'log_ebt_trawangan', 'fas fa-fw fa-folder', 1, 4),
(57, 16, 'Log PLTS Air', 'log_ebt_air', 'fas fa-fw fa-folder', 1, 5),
(58, 16, 'Log PLTS Meno', 'log_ebt_meno', 'fas fa-fw fa-folder', 1, 6),
(60, 16, 'Check List Narmada', 'check_list_narmada', 'fas fa-fw fa-folder', 1, 8),
(61, 16, 'Check List Santong', 'check_list_santong', 'fas fa-fw fa-folder', 1, 9),
(62, 16, 'Check List Trawangan', 'check_list_trawangan', 'fas fa-fw fa-folder', 1, 10),
(63, 16, 'Check List Air', 'check_list_air', 'fas fa-fw fa-folder', 1, 11),
(64, 16, 'Check List Meno', 'check_list_meno', 'fas fa-fw fa-folder', 1, 12),
(65, 25, 'Log EBT Pengga', 'log_ebt_pengga', 'fas fa-fw fa-folder', 1, NULL),
(66, 25, 'Check List EBT Pengga', 'check_list_pengga', 'fas fa-fw fa-folder', 1, NULL),
(67, 26, 'Log EBT Narmada', 'log_ebt_narmada', 'fas fa-fw fa-folder', 1, NULL),
(68, 26, 'Check List Narmada', 'check_list_narmada', 'fas fa-fw fa-folder', 1, NULL),
(69, 27, 'Log EBT Santong', 'log_ebt_santong', 'fas fa-fw fa-folder', 1, NULL),
(70, 25, 'Check List EBT Narmada', 'check_list_narmada', 'fas fa-fw fa-folder', 1, NULL),
(71, 28, 'Log EBT Trawangan', 'log_ebt_trawangan', 'fas fa-fw fa-folder', 1, NULL),
(72, 28, 'Check List EBT Trawangan', 'check_list_trawangan', 'fas fa-fw fa-folder', 1, NULL),
(73, 29, 'Log EBT Meno', 'log_ebt_pengga', 'fas fa-fw fa-folder', 1, NULL),
(74, 29, 'Check List EBT Meno', 'check_list_meno', 'fas fa-fw fa-folder', 1, NULL),
(75, 30, 'Log EBT Air', 'log_ebt_air', 'fas fa-fw fa-folder', 1, NULL),
(76, 30, 'Check List EBT Air', 'check_list_air', 'fas fa-fw fa-folder', 1, NULL),
(77, 26, 'Check List EBT Narmada', 'check_list_narmada', 'fas fa-fw fa-folder', 1, NULL),
(78, 27, 'Check List EBT Santong', 'check_list_santong', 'fas fa-fw fa-folder', 1, NULL),
(79, 6, 'Shift Meeting', 'shift_meeting', 'fas fa-fw fa-folder', 1, NULL),
(80, 8, 'Shift Meeting Maturiti Level Operasi', 'shift_meeting_maturiti', 'fas fa-fw fa-folder', 1, NULL),
(81, 31, 'Dashboard', 'admin_pm', 'fas fa-fw fa-tachometer-alt', 1, NULL),
(82, 31, 'User Management', 'admin_pm/user_mng', 'fas fa-fw fa-user', 1, NULL),
(83, 31, 'Setup Temperature', 'suhu_pm', 'fas fa-fw fa-thermometer-empty', 1, NULL),
(84, 32, 'Dashboard', 'admin_amp', 'fas fa-fw fa-tachometer-alt', 1, NULL),
(85, 32, 'User Management', 'admin_amp/user_mng', 'fas fa-fw fa-user', 1, NULL),
(86, 32, 'Setup Temperature', 'suhu_amp', 'fas fa-fw fa-thermometer-empty', 1, NULL),
(87, 33, 'Dashboard', 'admin_ebt', 'fas fa-fw fa-tachometer-alt', 1, NULL),
(88, 33, 'User Management', 'admin_ebt/user_mng', 'fas fa-fw fa-user', 1, NULL),
(89, 33, 'Setup Temperature', 'suhu_ebt', 'fas fa-fw fa-thermometer-empty', 1, NULL),
(90, 6, 'Housekeeping dan FLM', 'Housekeeping_flm', 'fas fa-fw fa-folder', 1, NULL),
(91, 8, 'Patrol Check Mesin', 'Patrol_check_mesin', 'fas fa-fw fa-folder', 1, NULL),
(92, 8, 'Patrol Check Auxiliaries', 'Patrol_check_auxiliaries', 'fas fa-fw fa-folder', 1, NULL),
(93, 8, 'Checklist Persiapan Operasi', 'checklist_persiapan_operasi', 'fas fa-fw fa-folder', 1, NULL),
(94, 8, 'Checklist Start Mesin', 'checklist_start_mesin', 'fas fa-fw fa-folder', 1, NULL),
(95, 8, 'Checklist Stop Mesin', 'checklist_stop_mesin', 'fas fa-fw fa-folder', 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checklist_air`
--
ALTER TABLE `checklist_air`
  ADD PRIMARY KEY (`pk_plts`);

--
-- Indexes for table `checklist_meno`
--
ALTER TABLE `checklist_meno`
  ADD PRIMARY KEY (`pk_plts`);

--
-- Indexes for table `checklist_narmada`
--
ALTER TABLE `checklist_narmada`
  ADD PRIMARY KEY (`pk_plts`);

--
-- Indexes for table `checklist_pengga`
--
ALTER TABLE `checklist_pengga`
  ADD PRIMARY KEY (`pk_plts`);

--
-- Indexes for table `checklist_santong`
--
ALTER TABLE `checklist_santong`
  ADD PRIMARY KEY (`pk_plts`);

--
-- Indexes for table `checklist_trawangan`
--
ALTER TABLE `checklist_trawangan`
  ADD PRIMARY KEY (`pk_plts`);

--
-- Indexes for table `housekeeping_flm`
--
ALTER TABLE `housekeeping_flm`
  ADD PRIMARY KEY (`pk_housekeeping_flm`);

--
-- Indexes for table `log_beban_penyulang`
--
ALTER TABLE `log_beban_penyulang`
  ADD PRIMARY KEY (`pk_beban_penyulang`);

--
-- Indexes for table `log_booster_module`
--
ALTER TABLE `log_booster_module`
  ADD PRIMARY KEY (`pk_booster_module`);

--
-- Indexes for table `log_ebt_air`
--
ALTER TABLE `log_ebt_air`
  ADD PRIMARY KEY (`pk_log_tengah_jaman`);

--
-- Indexes for table `log_ebt_meno`
--
ALTER TABLE `log_ebt_meno`
  ADD PRIMARY KEY (`pk_log_tengah_jaman`);

--
-- Indexes for table `log_ebt_narmada`
--
ALTER TABLE `log_ebt_narmada`
  ADD PRIMARY KEY (`pk_log_tengah_jaman`);

--
-- Indexes for table `log_ebt_pengga`
--
ALTER TABLE `log_ebt_pengga`
  ADD PRIMARY KEY (`pk_log_tengah_jaman`);

--
-- Indexes for table `log_ebt_santong`
--
ALTER TABLE `log_ebt_santong`
  ADD PRIMARY KEY (`pk_log_tengah_jaman`);

--
-- Indexes for table `log_ebt_trawangan`
--
ALTER TABLE `log_ebt_trawangan`
  ADD PRIMARY KEY (`pk_log_tengah_jaman`);

--
-- Indexes for table `log_formulir_tukar_piket`
--
ALTER TABLE `log_formulir_tukar_piket`
  ADD PRIMARY KEY (`pk_formulir_tukar_piket`);

--
-- Indexes for table `log_hrto`
--
ALTER TABLE `log_hrto`
  ADD PRIMARY KEY (`pk_hrto`);

--
-- Indexes for table `log_niigata_engine`
--
ALTER TABLE `log_niigata_engine`
  ADD PRIMARY KEY (`pk_niigata_engine`);

--
-- Indexes for table `log_niigata_generator`
--
ALTER TABLE `log_niigata_generator`
  ADD PRIMARY KEY (`pk_niigata_generator`);

--
-- Indexes for table `log_penyulang_ampenan`
--
ALTER TABLE `log_penyulang_ampenan`
  ADD PRIMARY KEY (`pk_penyulang_ampenan`);

--
-- Indexes for table `log_penyulang_analog_bateray`
--
ALTER TABLE `log_penyulang_analog_bateray`
  ADD PRIMARY KEY (`pk_penyulang_analog_bateray`);

--
-- Indexes for table `log_penyulang_taman`
--
ALTER TABLE `log_penyulang_taman`
  ADD PRIMARY KEY (`pk_penyulang_taman`);

--
-- Indexes for table `log_perjaman_mesin`
--
ALTER TABLE `log_perjaman_mesin`
  ADD PRIMARY KEY (`pk_perjaman_mesin`);

--
-- Indexes for table `log_perjaman_mesin_generator`
--
ALTER TABLE `log_perjaman_mesin_generator`
  ADD PRIMARY KEY (`pk_perjaman_mesin_generator`);

--
-- Indexes for table `log_pielstick_engine`
--
ALTER TABLE `log_pielstick_engine`
  ADD PRIMARY KEY (`pk_pielstick_engine`);

--
-- Indexes for table `log_pielstick_generator`
--
ALTER TABLE `log_pielstick_generator`
  ADD PRIMARY KEY (`pk_pielstick_generator`);

--
-- Indexes for table `log_ruston`
--
ALTER TABLE `log_ruston`
  ADD PRIMARY KEY (`pk_ruston`);

--
-- Indexes for table `log_separator_mfo`
--
ALTER TABLE `log_separator_mfo`
  ADD PRIMARY KEY (`pk_separator_mfo`);

--
-- Indexes for table `log_zav_engine`
--
ALTER TABLE `log_zav_engine`
  ADD PRIMARY KEY (`pk_zav_engine`);

--
-- Indexes for table `log_zav_generator`
--
ALTER TABLE `log_zav_generator`
  ADD PRIMARY KEY (`pk_zav_generator`);

--
-- Indexes for table `log_za_cmr`
--
ALTER TABLE `log_za_cmr`
  ADD PRIMARY KEY (`pk_za_cmr`);

--
-- Indexes for table `log_zv_generator`
--
ALTER TABLE `log_zv_generator`
  ADD PRIMARY KEY (`pk_zv_generator`);

--
-- Indexes for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setup_beban_penyulang`
--
ALTER TABLE `setup_beban_penyulang`
  ADD PRIMARY KEY (`pk_setup_beban_penyulang`);

--
-- Indexes for table `setup_ebt`
--
ALTER TABLE `setup_ebt`
  ADD PRIMARY KEY (`pk_setup_ebt`);

--
-- Indexes for table `setup_niigata_engine`
--
ALTER TABLE `setup_niigata_engine`
  ADD PRIMARY KEY (`pk_setup_niigata_engine`);

--
-- Indexes for table `setup_niigata_generator`
--
ALTER TABLE `setup_niigata_generator`
  ADD PRIMARY KEY (`pk_setup_niigata_generator`);

--
-- Indexes for table `setup_perjaman_mesin`
--
ALTER TABLE `setup_perjaman_mesin`
  ADD PRIMARY KEY (`pk_setup_perjaman_mesin`);

--
-- Indexes for table `setup_perjaman_mesin_generator`
--
ALTER TABLE `setup_perjaman_mesin_generator`
  ADD PRIMARY KEY (`pk_setup_perjaman_mesin_generator`);

--
-- Indexes for table `setup_plts`
--
ALTER TABLE `setup_plts`
  ADD PRIMARY KEY (`pk_setup_plts`);

--
-- Indexes for table `setup_zav_generator`
--
ALTER TABLE `setup_zav_generator`
  ADD PRIMARY KEY (`pk_setup_zav_generator`);

--
-- Indexes for table `setup_zv_generator`
--
ALTER TABLE `setup_zv_generator`
  ADD PRIMARY KEY (`pk_setup_zv_generator`);

--
-- Indexes for table `setup_zv_pltd_ampenan`
--
ALTER TABLE `setup_zv_pltd_ampenan`
  ADD PRIMARY KEY (`pk_setup_zv_pltd_ampenan`);

--
-- Indexes for table `shift_meeting`
--
ALTER TABLE `shift_meeting`
  ADD PRIMARY KEY (`pk_shift_meeting`);

--
-- Indexes for table `shift_meeting_maturiti`
--
ALTER TABLE `shift_meeting_maturiti`
  ADD PRIMARY KEY (`pk_shift_maturiti`);

--
-- Indexes for table `unit1`
--
ALTER TABLE `unit1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit2`
--
ALTER TABLE `unit2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit3`
--
ALTER TABLE `unit3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `unit1`
--
ALTER TABLE `unit1`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `unit2`
--
ALTER TABLE `unit2`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `unit3`
--
ALTER TABLE `unit3`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
