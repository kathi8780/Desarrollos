/*
Navicat MySQL Data Transfer

Source Server         : navicat
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : academos

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2016-05-25 16:47:50
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for acad_area_estudio
-- ----------------------------
DROP TABLE IF EXISTS `acad_area_estudio`;
CREATE TABLE `acad_area_estudio` (
  `ID_AREA_ESTUDIO` int(11) NOT NULL AUTO_INCREMENT,
  `AREA_ESTUDIO` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_AREA_ESTUDIO`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of acad_area_estudio
-- ----------------------------
INSERT INTO `acad_area_estudio` VALUES ('3', 'ESTETICA');

-- ----------------------------
-- Table structure for acad_calificacion
-- ----------------------------
DROP TABLE IF EXISTS `acad_calificacion`;
CREATE TABLE `acad_calificacion` (
  `ID_CALIFICACION` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PERIODO_ACADEMICO` int(11) NOT NULL,
  `ID_ESTUDIANTE_CARRERA_MATERIA` int(11) NOT NULL,
  `ID_TIPO_CALIFICACION` int(11) NOT NULL,
  `FECHA_HORA` datetime NOT NULL,
  `CALIFICACION` decimal(2,0) NOT NULL,
  `ETAPA` int(11) NOT NULL,
  `ID_COMPONENTE` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_CALIFICACION`),
  KEY `ID_PERIODO_ACADEMICO` (`ID_PERIODO_ACADEMICO`),
  KEY `ID_ESTUDIANTE_CARRERA_MATERIA` (`ID_ESTUDIANTE_CARRERA_MATERIA`),
  KEY `ID_TIPO_CALIFICACION` (`ID_TIPO_CALIFICACION`),
  CONSTRAINT `acad_calificacion_ibfk_1` FOREIGN KEY (`ID_PERIODO_ACADEMICO`) REFERENCES `acad_periodo_academico` (`ID_PERIODO_ACADEMICO`) ON UPDATE NO ACTION,
  CONSTRAINT `acad_calificacion_ibfk_2` FOREIGN KEY (`ID_ESTUDIANTE_CARRERA_MATERIA`) REFERENCES `acad_estudiante_carrera_materia` (`ID_ESTUDIANTE_CARRERA_MATERIA`) ON UPDATE NO ACTION,
  CONSTRAINT `acad_calificacion_ibfk_3` FOREIGN KEY (`ID_TIPO_CALIFICACION`) REFERENCES `acad_tipo_calificacion` (`ID_TIPO_CALIFICACION`) ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of acad_calificacion
-- ----------------------------

-- ----------------------------
-- Table structure for acad_carrera
-- ----------------------------
DROP TABLE IF EXISTS `acad_carrera`;
CREATE TABLE `acad_carrera` (
  `ID_CARRERA` int(11) NOT NULL AUTO_INCREMENT,
  `ID_GRUPO_CARRERA` int(11) NOT NULL,
  `ID_TIPO_CARRERA` int(11) NOT NULL,
  `ID_AREA_ESTUDIO` int(11) NOT NULL,
  `ID_SEDE` int(11) NOT NULL,
  `PARAMETRO` int(11) NOT NULL DEFAULT '1',
  `ID_SISTEMA_ESTUDIO` int(11) NOT NULL,
  `ID_MODALIDAD` int(11) NOT NULL,
  `NOMBRE` varchar(100) NOT NULL,
  `CODIGO` varchar(100) NOT NULL,
  `CREDITOS_NECESARIOS` int(11) NOT NULL,
  `DURACION_EN_NIVELES` int(11) NOT NULL,
  PRIMARY KEY (`ID_CARRERA`),
  KEY `ID_GRUPO_CARRERA` (`ID_GRUPO_CARRERA`),
  KEY `ID_TIPO_CARRERA` (`ID_TIPO_CARRERA`),
  KEY `ID_AREA_ESTUDIO` (`ID_AREA_ESTUDIO`),
  KEY `ID_SEDE` (`ID_SEDE`),
  KEY `ID_PARAMETRO` (`PARAMETRO`),
  KEY `ID_SISTEMA_ESTUDIO` (`ID_SISTEMA_ESTUDIO`),
  KEY `ID_MODALIDAD` (`ID_MODALIDAD`),
  CONSTRAINT `acad_carrera_ibfk_1` FOREIGN KEY (`ID_GRUPO_CARRERA`) REFERENCES `acad_grupo_carrera` (`ID_GRUPO_CARRERA`) ON UPDATE NO ACTION,
  CONSTRAINT `acad_carrera_ibfk_2` FOREIGN KEY (`ID_TIPO_CARRERA`) REFERENCES `acad_tipo_carrera` (`ID_TIPO_CARRERA`) ON UPDATE NO ACTION,
  CONSTRAINT `acad_carrera_ibfk_3` FOREIGN KEY (`ID_AREA_ESTUDIO`) REFERENCES `acad_area_estudio` (`ID_AREA_ESTUDIO`) ON UPDATE NO ACTION,
  CONSTRAINT `acad_carrera_ibfk_4` FOREIGN KEY (`ID_SEDE`) REFERENCES `acad_sede` (`ID_SEDE`) ON UPDATE NO ACTION,
  CONSTRAINT `acad_carrera_ibfk_6` FOREIGN KEY (`ID_SISTEMA_ESTUDIO`) REFERENCES `acad_sistema_estudio` (`ID_SISTEMA_ESTUDIO`) ON UPDATE NO ACTION,
  CONSTRAINT `acad_carrera_ibfk_7` FOREIGN KEY (`ID_MODALIDAD`) REFERENCES `acad_modalidad` (`ID_MODALIDAD`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of acad_carrera
-- ----------------------------
INSERT INTO `acad_carrera` VALUES ('5', '10', '6', '3', '2', '1', '8', '4', 'TECNOLOGÍA EN ASESORÍA DE IMAGEN MENCIÓN ESTÉTICA INTEGRAL', 'TEAIEI', '200', '6');
INSERT INTO `acad_carrera` VALUES ('6', '10', '6', '3', '2', '1', '8', '4', 'TECNOLOGÍA EN ASESORÍA DE IMAGEN MENCIÓN ESTILISMO DEL CABELLO', 'TEAIEC', '200', '6');
INSERT INTO `acad_carrera` VALUES ('7', '10', '6', '3', '2', '1', '8', '4', 'TECNICO SUPERIOR EN ESTÉTICA INTEGRAL', 'TSEI', '200', '4');
INSERT INTO `acad_carrera` VALUES ('8', '10', '6', '3', '2', '1', '8', '4', 'TÉCNICO SUPERIOR EN PELUQUERÍA', 'TSP', '200', '4');

-- ----------------------------
-- Table structure for acad_carrera_materia
-- ----------------------------
DROP TABLE IF EXISTS `acad_carrera_materia`;
CREATE TABLE `acad_carrera_materia` (
  `ID_CARRERA_MATERIA` int(11) NOT NULL AUTO_INCREMENT,
  `ID_CARRERA` int(11) NOT NULL,
  `ID_MATERIA` int(11) NOT NULL,
  `CREDITOS_MATERIA` int(11) NOT NULL,
  `CODIGO_MATERIA` varchar(255) NOT NULL,
  `NIVEL_MATERIA` int(11) NOT NULL,
  `ESTADO` bit(1) NOT NULL DEFAULT b'1',
  `ES_SECUENCIAL` bit(1) NOT NULL DEFAULT b'0',
  `PRECIO` decimal(10,2) NOT NULL DEFAULT '10.00',
  PRIMARY KEY (`ID_CARRERA_MATERIA`),
  KEY `ID_CARRERA` (`ID_CARRERA`),
  KEY `ID_MATERIA` (`ID_MATERIA`),
  CONSTRAINT `acad_carrera_materia_ibfk_1` FOREIGN KEY (`ID_CARRERA`) REFERENCES `acad_carrera` (`ID_CARRERA`) ON UPDATE NO ACTION,
  CONSTRAINT `acad_carrera_materia_ibfk_2` FOREIGN KEY (`ID_MATERIA`) REFERENCES `acad_materia` (`ID_MATERIA`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=152 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of acad_carrera_materia
-- ----------------------------
INSERT INTO `acad_carrera_materia` VALUES ('2', '7', '2', '2', 'LC', '1', '', '\0', '11.48');
INSERT INTO `acad_carrera_materia` VALUES ('3', '7', '3', '1', 'INGL-I', '1', '', '\0', '5.75');
INSERT INTO `acad_carrera_materia` VALUES ('4', '7', '4', '1', 'ADM', '1', '', '\0', '5.75');
INSERT INTO `acad_carrera_materia` VALUES ('5', '7', '5', '5', 'APFH=I', '1', '', '\0', '28.70');
INSERT INTO `acad_carrera_materia` VALUES ('6', '7', '6', '5', 'CAE1', '1', '', '\0', '28.70');
INSERT INTO `acad_carrera_materia` VALUES ('7', '7', '7', '3', 'TEME I', '1', '', '\0', '17.22');
INSERT INTO `acad_carrera_materia` VALUES ('8', '7', '8', '3', 'DP', '1', '', '\0', '17.22');
INSERT INTO `acad_carrera_materia` VALUES ('9', '7', '9', '2', 'EX GRAF', '1', '', '\0', '11.48');
INSERT INTO `acad_carrera_materia` VALUES ('10', '7', '10', '2', 'DGNT I', '1', '', '\0', '11.48');
INSERT INTO `acad_carrera_materia` VALUES ('11', '7', '11', '3', 'MP', '1', '', '\0', '17.22');
INSERT INTO `acad_carrera_materia` VALUES ('12', '7', '12', '1', 'LEGL', '2', '', '\0', '5.54');
INSERT INTO `acad_carrera_materia` VALUES ('13', '7', '13', '1', 'INGL-II', '2', '', '\0', '5.54');
INSERT INTO `acad_carrera_materia` VALUES ('14', '7', '14', '5', 'APFH=II', '2', '', '\0', '27.68');
INSERT INTO `acad_carrera_materia` VALUES ('15', '7', '15', '5', 'CAE2', '2', '', '\0', '27.68');
INSERT INTO `acad_carrera_materia` VALUES ('16', '7', '16', '5', 'DGNT II', '2', '', '\0', '27.68');
INSERT INTO `acad_carrera_materia` VALUES ('17', '7', '17', '4', 'ELECTRO1', '2', '', '\0', '22.14');
INSERT INTO `acad_carrera_materia` VALUES ('18', '7', '18', '3', 'MSJTT2', '2', '', '\0', '16.60');
INSERT INTO `acad_carrera_materia` VALUES ('19', '7', '19', '4', 'TEME II', '2', '', '\0', '22.14');
INSERT INTO `acad_carrera_materia` VALUES ('20', '7', '20', '1', 'PVPS', '3', '', '\0', '5.75');
INSERT INTO `acad_carrera_materia` VALUES ('21', '7', '21', '1', 'INGL-III', '3', '', '\0', '5.75');
INSERT INTO `acad_carrera_materia` VALUES ('22', '7', '22', '5', 'DLMTT3', '3', '', '\0', '28.70');
INSERT INTO `acad_carrera_materia` VALUES ('23', '7', '23', '5', 'ELECTRO2', '3', '', '\0', '28.70');
INSERT INTO `acad_carrera_materia` VALUES ('24', '7', '24', '5', 'DGNT III', '3', '', '\0', '28.70');
INSERT INTO `acad_carrera_materia` VALUES ('25', '7', '25', '2', 'FCT', '3', '', '\0', '11.48');
INSERT INTO `acad_carrera_materia` VALUES ('26', '7', '26', '3', 'NUT', '3', '', '\0', '17.22');
INSERT INTO `acad_carrera_materia` VALUES ('27', '7', '27', '3', 'EH', '3', '', '\0', '17.22');
INSERT INTO `acad_carrera_materia` VALUES ('28', '7', '28', '2', 'ETQPETT3', '3', '', '\0', '11.48');
INSERT INTO `acad_carrera_materia` VALUES ('29', '7', '29', '2', 'INGL-IV', '4', '', '\0', '11.07');
INSERT INTO `acad_carrera_materia` VALUES ('30', '7', '30', '2', 'INFOR', '4', '', '\0', '11.07');
INSERT INTO `acad_carrera_materia` VALUES ('31', '7', '31', '14', 'PROYTT', '4', '', '\0', '77.50');
INSERT INTO `acad_carrera_materia` VALUES ('32', '7', '32', '0', 'P-PP', '4', '', '\0', '0.00');
INSERT INTO `acad_carrera_materia` VALUES ('33', '8', '33', '2', 'LC', '1', '', '\0', '9.26');
INSERT INTO `acad_carrera_materia` VALUES ('34', '8', '34', '1', 'INGL-I', '1', '', '\0', '4.63');
INSERT INTO `acad_carrera_materia` VALUES ('35', '8', '35', '1', 'ADM', '1', '', '\0', '4.63');
INSERT INTO `acad_carrera_materia` VALUES ('36', '8', '36', '5', 'APFH=I', '1', '', '\0', '23.15');
INSERT INTO `acad_carrera_materia` VALUES ('37', '8', '37', '5', 'CAP1', '1', '', '\0', '23.15');
INSERT INTO `acad_carrera_materia` VALUES ('38', '8', '38', '3', 'TEMP I', '1', '', '\0', '13.89');
INSERT INTO `acad_carrera_materia` VALUES ('39', '8', '39', '8', 'PLQR-I  ', '1', '', '\0', '37.04');
INSERT INTO `acad_carrera_materia` VALUES ('40', '8', '40', '2', 'EX GRAF', '1', '', '\0', '9.25');
INSERT INTO `acad_carrera_materia` VALUES ('41', '8', '41', '2', 'PVPS', '2', '', '\0', '9.25');
INSERT INTO `acad_carrera_materia` VALUES ('42', '8', '42', '1', 'INGL-II', '2', '', '\0', '4.63');
INSERT INTO `acad_carrera_materia` VALUES ('43', '8', '43', '1', 'LEGL', '2', '', '\0', '4.63');
INSERT INTO `acad_carrera_materia` VALUES ('44', '8', '44', '12', 'PCAP', '2', '', '\0', '55.56');
INSERT INTO `acad_carrera_materia` VALUES ('45', '8', '45', '4', 'TEMP II', '2', '', '\0', '18.52');
INSERT INTO `acad_carrera_materia` VALUES ('46', '8', '46', '4', 'DP', '2', '', '\0', '18.52');
INSERT INTO `acad_carrera_materia` VALUES ('47', '8', '47', '3', 'MP', '2', '', '\0', '13.89');
INSERT INTO `acad_carrera_materia` VALUES ('48', '8', '48', '2', 'ATC', '3', '', '\0', '9.62');
INSERT INTO `acad_carrera_materia` VALUES ('49', '8', '49', '1', 'INGL-III', '3', '', '\0', '4.80');
INSERT INTO `acad_carrera_materia` VALUES ('50', '8', '50', '12', 'PLQR-III', '3', '', '\0', '57.69');
INSERT INTO `acad_carrera_materia` VALUES ('51', '8', '51', '2', 'MRFL-I', '3', '', '\0', '9.62');
INSERT INTO `acad_carrera_materia` VALUES ('52', '8', '52', '2', 'FCT', '3', '', '\0', '9.62');
INSERT INTO `acad_carrera_materia` VALUES ('53', '8', '53', '3', 'TC1', '3', '', '\0', '14.42');
INSERT INTO `acad_carrera_materia` VALUES ('54', '8', '54', '3', 'DU', '3', '', '\0', '14.42');
INSERT INTO `acad_carrera_materia` VALUES ('55', '8', '55', '1', 'ETQPPTT3', '3', '', '\0', '4.81');
INSERT INTO `acad_carrera_materia` VALUES ('56', '8', '56', '2', 'INGL IV', '4', '', '\0', '8.93');
INSERT INTO `acad_carrera_materia` VALUES ('57', '8', '57', '2', 'INFOR', '4', '', '\0', '8.93');
INSERT INTO `acad_carrera_materia` VALUES ('58', '8', '58', '14', 'TPRAC', '4', '', '\0', '62.50');
INSERT INTO `acad_carrera_materia` VALUES ('59', '8', '59', '10', 'PROYTT', '4', '', '\0', '44.64');
INSERT INTO `acad_carrera_materia` VALUES ('60', '8', '60', '0', 'P-PP', '4', '', '\0', '0.00');
INSERT INTO `acad_carrera_materia` VALUES ('61', '6', '61', '2', 'LC', '1', '', '\0', '9.26');
INSERT INTO `acad_carrera_materia` VALUES ('62', '6', '62', '1', 'INGL-I', '1', '', '\0', '4.63');
INSERT INTO `acad_carrera_materia` VALUES ('63', '6', '63', '1', 'ADM', '1', '', '\0', '4.63');
INSERT INTO `acad_carrera_materia` VALUES ('64', '6', '64', '5', 'APFH=I', '1', '', '\0', '23.15');
INSERT INTO `acad_carrera_materia` VALUES ('65', '6', '65', '5', 'CAP1', '1', '', '\0', '23.15');
INSERT INTO `acad_carrera_materia` VALUES ('66', '6', '66', '3', 'TEMP I', '1', '', '\0', '13.89');
INSERT INTO `acad_carrera_materia` VALUES ('67', '6', '67', '8', 'PLQR-I  ', '1', '', '\0', '37.04');
INSERT INTO `acad_carrera_materia` VALUES ('68', '6', '68', '2', 'EX GRAF', '1', '', '\0', '9.25');
INSERT INTO `acad_carrera_materia` VALUES ('69', '6', '69', '2', 'PVPS', '2', '', '\0', '9.25');
INSERT INTO `acad_carrera_materia` VALUES ('70', '6', '70', '1', 'INGL-II', '2', '', '\0', '4.63');
INSERT INTO `acad_carrera_materia` VALUES ('71', '6', '71', '1', 'LEGL', '2', '', '\0', '4.63');
INSERT INTO `acad_carrera_materia` VALUES ('72', '6', '72', '12', 'PCAP', '2', '', '\0', '55.56');
INSERT INTO `acad_carrera_materia` VALUES ('73', '6', '73', '4', 'TEMP II', '2', '', '\0', '18.52');
INSERT INTO `acad_carrera_materia` VALUES ('74', '6', '74', '4', 'DP', '2', '', '\0', '18.52');
INSERT INTO `acad_carrera_materia` VALUES ('75', '6', '75', '3', 'MP', '2', '', '\0', '13.89');
INSERT INTO `acad_carrera_materia` VALUES ('76', '6', '76', '2', 'ATC', '3', '', '\0', '9.62');
INSERT INTO `acad_carrera_materia` VALUES ('77', '6', '77', '1', 'INGL-III', '3', '', '\0', '4.80');
INSERT INTO `acad_carrera_materia` VALUES ('78', '6', '78', '12', 'PLQR-III', '3', '', '\0', '57.69');
INSERT INTO `acad_carrera_materia` VALUES ('79', '6', '79', '2', 'MRFL-I', '3', '', '\0', '9.62');
INSERT INTO `acad_carrera_materia` VALUES ('80', '6', '80', '2', 'FCT', '3', '', '\0', '9.62');
INSERT INTO `acad_carrera_materia` VALUES ('81', '6', '81', '3', 'TC1', '3', '', '\0', '14.42');
INSERT INTO `acad_carrera_materia` VALUES ('82', '6', '82', '3', 'DU', '3', '', '\0', '14.42');
INSERT INTO `acad_carrera_materia` VALUES ('83', '6', '83', '1', 'ETQPPTT3', '3', '', '\0', '4.81');
INSERT INTO `acad_carrera_materia` VALUES ('84', '6', '84', '2', 'INGL IV', '4', '', '\0', '8.93');
INSERT INTO `acad_carrera_materia` VALUES ('85', '6', '85', '2', 'INFOR', '4', '', '\0', '8.93');
INSERT INTO `acad_carrera_materia` VALUES ('86', '6', '86', '14', 'TPRAC', '4', '', '\0', '62.50');
INSERT INTO `acad_carrera_materia` VALUES ('87', '6', '87', '10', 'PROYTT', '4', '', '\0', '44.64');
INSERT INTO `acad_carrera_materia` VALUES ('88', '6', '88', '0', 'P-PP', '4', '', '\0', '0.00');
INSERT INTO `acad_carrera_materia` VALUES ('89', '6', '89', '3', 'COCH', '5', '', '\0', '12.93');
INSERT INTO `acad_carrera_materia` VALUES ('90', '6', '90', '4', 'TEOCL', '5', '', '\0', '17.24');
INSERT INTO `acad_carrera_materia` VALUES ('91', '6', '91', '4', 'HDLM', '5', '', '\0', '17.24');
INSERT INTO `acad_carrera_materia` VALUES ('92', '6', '92', '3', 'ASIM I', '5', '', '\0', '12.93');
INSERT INTO `acad_carrera_materia` VALUES ('93', '6', '93', '5', 'EEV', '5', '', '\0', '21.55');
INSERT INTO `acad_carrera_materia` VALUES ('94', '6', '94', '5', 'VIJ', '5', '', '\0', '21.55');
INSERT INTO `acad_carrera_materia` VALUES ('95', '6', '95', '2', 'NUT', '5', '', '\0', '8.62');
INSERT INTO `acad_carrera_materia` VALUES ('96', '6', '96', '1', 'FGR', '5', '', '\0', '4.32');
INSERT INTO `acad_carrera_materia` VALUES ('97', '6', '97', '2', 'INFOR', '5', '', '\0', '8.62');
INSERT INTO `acad_carrera_materia` VALUES ('98', '6', '98', '3', 'ASIM II', '6', '', '\0', '13.89');
INSERT INTO `acad_carrera_materia` VALUES ('99', '6', '99', '4', 'ASCDC', '6', '', '\0', '18.52');
INSERT INTO `acad_carrera_materia` VALUES ('100', '6', '100', '4', 'ASDMQ', '6', '', '\0', '18.52');
INSERT INTO `acad_carrera_materia` VALUES ('101', '6', '101', '4', 'PROTUS', '6', '', '\0', '18.52');
INSERT INTO `acad_carrera_materia` VALUES ('102', '6', '102', '2', 'ENG', '6', '', '\0', '9.25');
INSERT INTO `acad_carrera_materia` VALUES ('103', '6', '103', '10', 'PROYTT', '6', '', '\0', '46.30');
INSERT INTO `acad_carrera_materia` VALUES ('104', '6', '104', '0', 'P-PP', '6', '', '\0', '0.00');
INSERT INTO `acad_carrera_materia` VALUES ('105', '5', '105', '2', 'LC', '1', '', '\0', '11.48');
INSERT INTO `acad_carrera_materia` VALUES ('106', '5', '106', '1', 'INGL-I', '1', '', '\0', '5.75');
INSERT INTO `acad_carrera_materia` VALUES ('107', '5', '107', '1', 'ADM', '1', '', '\0', '5.75');
INSERT INTO `acad_carrera_materia` VALUES ('108', '5', '108', '5', 'APFH=I', '1', '', '\0', '28.70');
INSERT INTO `acad_carrera_materia` VALUES ('109', '5', '109', '5', 'CAE1', '1', '', '\0', '28.70');
INSERT INTO `acad_carrera_materia` VALUES ('110', '5', '110', '3', 'TEME I', '1', '', '\0', '17.22');
INSERT INTO `acad_carrera_materia` VALUES ('111', '5', '111', '3', 'DP', '1', '', '\0', '17.22');
INSERT INTO `acad_carrera_materia` VALUES ('112', '5', '112', '2', 'EX GRAF', '1', '', '\0', '11.48');
INSERT INTO `acad_carrera_materia` VALUES ('113', '5', '113', '2', 'DGNT I', '1', '', '\0', '11.48');
INSERT INTO `acad_carrera_materia` VALUES ('114', '5', '114', '3', 'MP', '1', '', '\0', '17.22');
INSERT INTO `acad_carrera_materia` VALUES ('115', '5', '115', '1', 'LEGL', '2', '', '\0', '5.54');
INSERT INTO `acad_carrera_materia` VALUES ('116', '5', '116', '1', 'INGL-II', '2', '', '\0', '5.54');
INSERT INTO `acad_carrera_materia` VALUES ('117', '5', '117', '5', 'APFH=II', '2', '', '\0', '27.68');
INSERT INTO `acad_carrera_materia` VALUES ('118', '5', '118', '5', 'CAE2', '2', '', '\0', '27.68');
INSERT INTO `acad_carrera_materia` VALUES ('119', '5', '119', '5', 'DGNT II', '2', '', '\0', '27.68');
INSERT INTO `acad_carrera_materia` VALUES ('120', '5', '120', '4', 'ELECTRO1', '2', '', '\0', '22.14');
INSERT INTO `acad_carrera_materia` VALUES ('121', '5', '121', '3', 'MSJTT2', '2', '', '\0', '16.60');
INSERT INTO `acad_carrera_materia` VALUES ('122', '5', '122', '4', 'TEME II', '2', '', '\0', '2.14');
INSERT INTO `acad_carrera_materia` VALUES ('123', '5', '123', '1', 'PVPS', '3', '', '\0', '5.75');
INSERT INTO `acad_carrera_materia` VALUES ('124', '5', '124', '1', 'INGL-III', '3', '', '\0', '5.75');
INSERT INTO `acad_carrera_materia` VALUES ('125', '5', '125', '5', 'DLMTT3', '3', '', '\0', '28.70');
INSERT INTO `acad_carrera_materia` VALUES ('126', '5', '126', '5', 'ELECTRO2', '3', '', '\0', '28.70');
INSERT INTO `acad_carrera_materia` VALUES ('127', '5', '127', '5', 'DGNT III', '3', '', '\0', '28.70');
INSERT INTO `acad_carrera_materia` VALUES ('128', '5', '128', '2', 'FCT', '3', '', '\0', '11.48');
INSERT INTO `acad_carrera_materia` VALUES ('129', '5', '129', '3', 'NUT', '3', '', '\0', '17.22');
INSERT INTO `acad_carrera_materia` VALUES ('130', '5', '130', '3', 'EH', '3', '', '\0', '17.22');
INSERT INTO `acad_carrera_materia` VALUES ('131', '5', '131', '2', 'ETQPETT3', '3', '', '\0', '11.48');
INSERT INTO `acad_carrera_materia` VALUES ('132', '5', '132', '2', 'INGL-IV', '4', '', '\0', '11.07');
INSERT INTO `acad_carrera_materia` VALUES ('133', '5', '133', '2', 'INFOR', '4', '', '\0', '11.07');
INSERT INTO `acad_carrera_materia` VALUES ('134', '5', '134', '14', 'PROYTT', '4', '', '\0', '77.50');
INSERT INTO `acad_carrera_materia` VALUES ('135', '5', '135', '10', 'P-PP', '4', '', '\0', '0.00');
INSERT INTO `acad_carrera_materia` VALUES ('136', '5', '136', '3', 'COCH', '5', '', '\0', '16.03');
INSERT INTO `acad_carrera_materia` VALUES ('137', '5', '137', '4', 'TEOCL', '5', '', '\0', '21.38');
INSERT INTO `acad_carrera_materia` VALUES ('138', '5', '138', '4', 'HDLM', '5', '', '\0', '21.38');
INSERT INTO `acad_carrera_materia` VALUES ('139', '5', '139', '3', 'ASIM I', '5', '', '\0', '16.03');
INSERT INTO `acad_carrera_materia` VALUES ('140', '5', '140', '5', 'EEV', '5', '', '\0', '26.72');
INSERT INTO `acad_carrera_materia` VALUES ('141', '5', '141', '5', 'VIJ', '5', '', '\0', '26.72');
INSERT INTO `acad_carrera_materia` VALUES ('142', '5', '142', '2', 'NUT', '5', '', '\0', '10.69');
INSERT INTO `acad_carrera_materia` VALUES ('143', '5', '143', '1', 'FGR', '5', '', '\0', '5.33');
INSERT INTO `acad_carrera_materia` VALUES ('144', '5', '144', '2', 'INFOR', '5', '', '\0', '10.69');
INSERT INTO `acad_carrera_materia` VALUES ('145', '5', '145', '3', 'ASIM II', '6', '', '\0', '17.22');
INSERT INTO `acad_carrera_materia` VALUES ('146', '5', '146', '4', 'ASCDC', '6', '', '\0', '22.96');
INSERT INTO `acad_carrera_materia` VALUES ('147', '5', '147', '4', 'ASDMQ', '6', '', '\0', '22.69');
INSERT INTO `acad_carrera_materia` VALUES ('148', '5', '148', '4', 'PROTUS', '6', '', '\0', '22.96');
INSERT INTO `acad_carrera_materia` VALUES ('149', '5', '149', '2', 'ENG', '6', '', '\0', '11.48');
INSERT INTO `acad_carrera_materia` VALUES ('150', '5', '150', '10', 'PROYTT', '6', '', '\0', '57.42');
INSERT INTO `acad_carrera_materia` VALUES ('151', '5', '151', '0', 'P-PP', '6', '', '\0', '0.00');

-- ----------------------------
-- Table structure for acad_carrera_modalidad
-- ----------------------------
DROP TABLE IF EXISTS `acad_carrera_modalidad`;
CREATE TABLE `acad_carrera_modalidad` (
  `ID_CARRERA_MODALIDAD` int(11) NOT NULL AUTO_INCREMENT,
  `ID_CARRERA` int(11) NOT NULL,
  `ID_MODALIDAD` int(11) NOT NULL,
  `CANT_ETAPAS` int(11) NOT NULL,
  `CANT_COMPONENTES` int(11) NOT NULL,
  `ID_PERIODO_ACADEMICO` int(11) NOT NULL,
  `BASE` int(11) NOT NULL,
  PRIMARY KEY (`ID_CARRERA_MODALIDAD`),
  KEY `ID_CARRERA` (`ID_CARRERA`),
  KEY `ID_MODALIDAD` (`ID_MODALIDAD`),
  KEY `ID_PERIODO_ACADEMICO` (`ID_PERIODO_ACADEMICO`),
  CONSTRAINT `acad_carrera_modalidad_ibfk_1` FOREIGN KEY (`ID_CARRERA`) REFERENCES `acad_carrera` (`ID_CARRERA`) ON UPDATE NO ACTION,
  CONSTRAINT `acad_carrera_modalidad_ibfk_2` FOREIGN KEY (`ID_MODALIDAD`) REFERENCES `acad_modalidad` (`ID_MODALIDAD`) ON UPDATE NO ACTION,
  CONSTRAINT `acad_carrera_modalidad_ibfk_3` FOREIGN KEY (`ID_PERIODO_ACADEMICO`) REFERENCES `acad_periodo_academico` (`ID_PERIODO_ACADEMICO`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of acad_carrera_modalidad
-- ----------------------------
INSERT INTO `acad_carrera_modalidad` VALUES ('1', '5', '4', '2', '4', '1', '10');
INSERT INTO `acad_carrera_modalidad` VALUES ('2', '6', '4', '2', '4', '1', '10');
INSERT INTO `acad_carrera_modalidad` VALUES ('3', '7', '4', '2', '4', '1', '10');
INSERT INTO `acad_carrera_modalidad` VALUES ('4', '8', '4', '2', '4', '1', '10');

-- ----------------------------
-- Table structure for acad_carrera_modalidad_componente
-- ----------------------------
DROP TABLE IF EXISTS `acad_carrera_modalidad_componente`;
CREATE TABLE `acad_carrera_modalidad_componente` (
  `ID_CARRERA_MODALIDAD_COMPONENTE` int(11) NOT NULL AUTO_INCREMENT,
  `ID_CARRERA_MODALIDAD` int(11) NOT NULL,
  `ID_COMPONENTE` int(11) NOT NULL,
  `VALOR_COMPONENTE` decimal(2,0) NOT NULL,
  `ID_PERIODO_ACADEMICO` int(11) NOT NULL,
  PRIMARY KEY (`ID_CARRERA_MODALIDAD_COMPONENTE`),
  KEY `ID_CARRERA_MODALIDAD` (`ID_CARRERA_MODALIDAD`),
  KEY `ID_COMPONENTE` (`ID_COMPONENTE`),
  CONSTRAINT `acad_carrera_modalidad_componente_ibfk_1` FOREIGN KEY (`ID_CARRERA_MODALIDAD`) REFERENCES `acad_carrera_modalidad` (`ID_CARRERA_MODALIDAD`) ON UPDATE NO ACTION,
  CONSTRAINT `acad_carrera_modalidad_componente_ibfk_2` FOREIGN KEY (`ID_COMPONENTE`) REFERENCES `acad_componente` (`ID_COMPONENTE`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of acad_carrera_modalidad_componente
-- ----------------------------
INSERT INTO `acad_carrera_modalidad_componente` VALUES ('1', '1', '1', '2', '1');
INSERT INTO `acad_carrera_modalidad_componente` VALUES ('2', '1', '3', '2', '1');
INSERT INTO `acad_carrera_modalidad_componente` VALUES ('3', '1', '4', '2', '1');
INSERT INTO `acad_carrera_modalidad_componente` VALUES ('4', '1', '6', '4', '1');
INSERT INTO `acad_carrera_modalidad_componente` VALUES ('5', '2', '1', '2', '1');
INSERT INTO `acad_carrera_modalidad_componente` VALUES ('6', '2', '3', '2', '1');
INSERT INTO `acad_carrera_modalidad_componente` VALUES ('7', '2', '4', '2', '1');
INSERT INTO `acad_carrera_modalidad_componente` VALUES ('8', '2', '6', '4', '1');
INSERT INTO `acad_carrera_modalidad_componente` VALUES ('9', '3', '1', '2', '1');
INSERT INTO `acad_carrera_modalidad_componente` VALUES ('10', '3', '3', '2', '1');
INSERT INTO `acad_carrera_modalidad_componente` VALUES ('11', '3', '4', '2', '1');
INSERT INTO `acad_carrera_modalidad_componente` VALUES ('12', '3', '6', '4', '1');
INSERT INTO `acad_carrera_modalidad_componente` VALUES ('13', '4', '1', '2', '1');
INSERT INTO `acad_carrera_modalidad_componente` VALUES ('14', '4', '3', '2', '1');
INSERT INTO `acad_carrera_modalidad_componente` VALUES ('15', '4', '4', '2', '1');
INSERT INTO `acad_carrera_modalidad_componente` VALUES ('16', '4', '6', '4', '1');

-- ----------------------------
-- Table structure for acad_componente
-- ----------------------------
DROP TABLE IF EXISTS `acad_componente`;
CREATE TABLE `acad_componente` (
  `ID_COMPONENTE` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(100) NOT NULL,
  `VALOR` decimal(10,2) NOT NULL,
  PRIMARY KEY (`ID_COMPONENTE`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of acad_componente
-- ----------------------------
INSERT INTO `acad_componente` VALUES ('1', 'COMPONENTE 1', '2.00');
INSERT INTO `acad_componente` VALUES ('3', 'COMPONENTE 2', '2.00');
INSERT INTO `acad_componente` VALUES ('4', 'COMPONENTE 3', '2.00');
INSERT INTO `acad_componente` VALUES ('6', 'COMPONENTE 4', '4.00');

-- ----------------------------
-- Table structure for acad_docente_carrera_materia
-- ----------------------------
DROP TABLE IF EXISTS `acad_docente_carrera_materia`;
CREATE TABLE `acad_docente_carrera_materia` (
  `ID_DOCENTE_CARRERA_MATERIA` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PERSONA` int(11) NOT NULL,
  `ID_CARRERA_MATERIA` int(11) NOT NULL,
  `ID_PERIODO_ACADEMICO` int(11) NOT NULL,
  `NIVEL_MATERIA` int(11) NOT NULL,
  `ID_CARRERA` int(11) NOT NULL,
  PRIMARY KEY (`ID_DOCENTE_CARRERA_MATERIA`),
  KEY `ID_PERSONA` (`ID_PERSONA`),
  KEY `ID_CARRERA_MATERIA` (`ID_CARRERA_MATERIA`),
  KEY `ID_PERIODO_ACADEMICO` (`ID_PERIODO_ACADEMICO`),
  KEY `ID_CARRERA` (`ID_CARRERA`),
  CONSTRAINT `acad_docente_carrera_materia_ibfk_1` FOREIGN KEY (`ID_PERSONA`) REFERENCES `tab_personas` (`ID_PERSONA`) ON UPDATE NO ACTION,
  CONSTRAINT `acad_docente_carrera_materia_ibfk_2` FOREIGN KEY (`ID_CARRERA_MATERIA`) REFERENCES `acad_carrera_materia` (`ID_CARRERA_MATERIA`) ON UPDATE NO ACTION,
  CONSTRAINT `acad_docente_carrera_materia_ibfk_3` FOREIGN KEY (`ID_PERIODO_ACADEMICO`) REFERENCES `acad_periodo_academico` (`ID_PERIODO_ACADEMICO`) ON UPDATE NO ACTION,
  CONSTRAINT `acad_docente_carrera_materia_ibfk_4` FOREIGN KEY (`ID_CARRERA`) REFERENCES `acad_carrera` (`ID_CARRERA`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=224 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of acad_docente_carrera_materia
-- ----------------------------
INSERT INTO `acad_docente_carrera_materia` VALUES ('1', '51', '106', '1', '1', '5');
INSERT INTO `acad_docente_carrera_materia` VALUES ('2', '51', '105', '1', '1', '5');
INSERT INTO `acad_docente_carrera_materia` VALUES ('3', '51', '116', '1', '2', '5');
INSERT INTO `acad_docente_carrera_materia` VALUES ('4', '51', '124', '1', '3', '5');
INSERT INTO `acad_docente_carrera_materia` VALUES ('5', '51', '132', '1', '4', '5');
INSERT INTO `acad_docente_carrera_materia` VALUES ('6', '51', '62', '1', '1', '6');
INSERT INTO `acad_docente_carrera_materia` VALUES ('7', '51', '61', '1', '1', '6');
INSERT INTO `acad_docente_carrera_materia` VALUES ('8', '51', '70', '1', '2', '6');
INSERT INTO `acad_docente_carrera_materia` VALUES ('9', '51', '77', '1', '3', '6');
INSERT INTO `acad_docente_carrera_materia` VALUES ('10', '51', '84', '1', '4', '6');
INSERT INTO `acad_docente_carrera_materia` VALUES ('11', '51', '3', '1', '1', '7');
INSERT INTO `acad_docente_carrera_materia` VALUES ('12', '51', '2', '1', '1', '7');
INSERT INTO `acad_docente_carrera_materia` VALUES ('13', '51', '13', '1', '2', '7');
INSERT INTO `acad_docente_carrera_materia` VALUES ('14', '51', '21', '1', '3', '7');
INSERT INTO `acad_docente_carrera_materia` VALUES ('15', '51', '29', '1', '4', '7');
INSERT INTO `acad_docente_carrera_materia` VALUES ('16', '51', '34', '1', '1', '8');
INSERT INTO `acad_docente_carrera_materia` VALUES ('17', '51', '33', '1', '1', '8');
INSERT INTO `acad_docente_carrera_materia` VALUES ('18', '51', '42', '1', '2', '8');
INSERT INTO `acad_docente_carrera_materia` VALUES ('19', '51', '49', '1', '3', '8');
INSERT INTO `acad_docente_carrera_materia` VALUES ('20', '51', '56', '1', '4', '8');
INSERT INTO `acad_docente_carrera_materia` VALUES ('41', '54', '135', '1', '4', '5');
INSERT INTO `acad_docente_carrera_materia` VALUES ('42', '54', '32', '1', '4', '7');
INSERT INTO `acad_docente_carrera_materia` VALUES ('61', '53', '133', '1', '4', '5');
INSERT INTO `acad_docente_carrera_materia` VALUES ('62', '53', '134', '1', '4', '5');
INSERT INTO `acad_docente_carrera_materia` VALUES ('63', '53', '87', '1', '4', '6');
INSERT INTO `acad_docente_carrera_materia` VALUES ('64', '53', '85', '1', '4', '6');
INSERT INTO `acad_docente_carrera_materia` VALUES ('65', '53', '31', '1', '4', '7');
INSERT INTO `acad_docente_carrera_materia` VALUES ('66', '53', '30', '1', '4', '7');
INSERT INTO `acad_docente_carrera_materia` VALUES ('67', '53', '59', '1', '4', '8');
INSERT INTO `acad_docente_carrera_materia` VALUES ('68', '53', '57', '1', '4', '8');
INSERT INTO `acad_docente_carrera_materia` VALUES ('73', '56', '109', '1', '1', '5');
INSERT INTO `acad_docente_carrera_materia` VALUES ('74', '56', '118', '1', '2', '5');
INSERT INTO `acad_docente_carrera_materia` VALUES ('75', '56', '65', '1', '1', '6');
INSERT INTO `acad_docente_carrera_materia` VALUES ('76', '56', '6', '1', '1', '7');
INSERT INTO `acad_docente_carrera_materia` VALUES ('77', '56', '15', '1', '2', '7');
INSERT INTO `acad_docente_carrera_materia` VALUES ('78', '56', '37', '1', '1', '8');
INSERT INTO `acad_docente_carrera_materia` VALUES ('79', '55', '67', '1', '1', '6');
INSERT INTO `acad_docente_carrera_materia` VALUES ('80', '55', '72', '1', '2', '6');
INSERT INTO `acad_docente_carrera_materia` VALUES ('81', '55', '39', '1', '1', '8');
INSERT INTO `acad_docente_carrera_materia` VALUES ('82', '55', '44', '1', '2', '8');
INSERT INTO `acad_docente_carrera_materia` VALUES ('90', '60', '113', '1', '1', '5');
INSERT INTO `acad_docente_carrera_materia` VALUES ('91', '60', '119', '1', '2', '5');
INSERT INTO `acad_docente_carrera_materia` VALUES ('92', '60', '127', '1', '3', '5');
INSERT INTO `acad_docente_carrera_materia` VALUES ('93', '60', '10', '1', '1', '7');
INSERT INTO `acad_docente_carrera_materia` VALUES ('94', '60', '16', '1', '2', '7');
INSERT INTO `acad_docente_carrera_materia` VALUES ('95', '60', '24', '1', '3', '7');
INSERT INTO `acad_docente_carrera_materia` VALUES ('96', '61', '108', '1', '1', '5');
INSERT INTO `acad_docente_carrera_materia` VALUES ('97', '61', '117', '1', '2', '5');
INSERT INTO `acad_docente_carrera_materia` VALUES ('98', '61', '129', '1', '3', '5');
INSERT INTO `acad_docente_carrera_materia` VALUES ('99', '61', '64', '1', '1', '6');
INSERT INTO `acad_docente_carrera_materia` VALUES ('100', '61', '5', '1', '1', '7');
INSERT INTO `acad_docente_carrera_materia` VALUES ('101', '61', '14', '1', '2', '7');
INSERT INTO `acad_docente_carrera_materia` VALUES ('102', '61', '26', '1', '3', '7');
INSERT INTO `acad_docente_carrera_materia` VALUES ('103', '61', '36', '1', '1', '8');
INSERT INTO `acad_docente_carrera_materia` VALUES ('112', '63', '114', '1', '1', '5');
INSERT INTO `acad_docente_carrera_materia` VALUES ('113', '63', '111', '1', '1', '5');
INSERT INTO `acad_docente_carrera_materia` VALUES ('114', '63', '75', '1', '2', '6');
INSERT INTO `acad_docente_carrera_materia` VALUES ('115', '63', '74', '1', '2', '6');
INSERT INTO `acad_docente_carrera_materia` VALUES ('116', '63', '8', '1', '1', '7');
INSERT INTO `acad_docente_carrera_materia` VALUES ('117', '63', '11', '1', '1', '7');
INSERT INTO `acad_docente_carrera_materia` VALUES ('118', '63', '47', '1', '2', '8');
INSERT INTO `acad_docente_carrera_materia` VALUES ('119', '63', '46', '1', '2', '8');
INSERT INTO `acad_docente_carrera_materia` VALUES ('120', '64', '79', '1', '3', '6');
INSERT INTO `acad_docente_carrera_materia` VALUES ('121', '64', '78', '1', '3', '6');
INSERT INTO `acad_docente_carrera_materia` VALUES ('122', '64', '82', '1', '3', '6');
INSERT INTO `acad_docente_carrera_materia` VALUES ('123', '64', '54', '1', '3', '8');
INSERT INTO `acad_docente_carrera_materia` VALUES ('124', '64', '51', '1', '3', '8');
INSERT INTO `acad_docente_carrera_materia` VALUES ('125', '64', '50', '1', '3', '8');
INSERT INTO `acad_docente_carrera_materia` VALUES ('126', '65', '135', '1', '4', '5');
INSERT INTO `acad_docente_carrera_materia` VALUES ('127', '65', '32', '1', '4', '7');
INSERT INTO `acad_docente_carrera_materia` VALUES ('128', '66', '136', '1', '5', '5');
INSERT INTO `acad_docente_carrera_materia` VALUES ('129', '66', '89', '1', '5', '6');
INSERT INTO `acad_docente_carrera_materia` VALUES ('159', '59', '120', '1', '2', '5');
INSERT INTO `acad_docente_carrera_materia` VALUES ('160', '59', '126', '1', '3', '5');
INSERT INTO `acad_docente_carrera_materia` VALUES ('161', '59', '81', '1', '3', '6');
INSERT INTO `acad_docente_carrera_materia` VALUES ('162', '59', '76', '1', '3', '6');
INSERT INTO `acad_docente_carrera_materia` VALUES ('163', '59', '17', '1', '2', '7');
INSERT INTO `acad_docente_carrera_materia` VALUES ('164', '59', '23', '1', '3', '7');
INSERT INTO `acad_docente_carrera_materia` VALUES ('165', '59', '48', '1', '3', '8');
INSERT INTO `acad_docente_carrera_materia` VALUES ('166', '59', '53', '1', '3', '8');
INSERT INTO `acad_docente_carrera_materia` VALUES ('167', '125', '115', '1', '2', '5');
INSERT INTO `acad_docente_carrera_materia` VALUES ('168', '125', '71', '1', '2', '6');
INSERT INTO `acad_docente_carrera_materia` VALUES ('169', '125', '12', '1', '2', '7');
INSERT INTO `acad_docente_carrera_materia` VALUES ('170', '125', '43', '1', '2', '8');
INSERT INTO `acad_docente_carrera_materia` VALUES ('171', '62', '110', '1', '1', '5');
INSERT INTO `acad_docente_carrera_materia` VALUES ('172', '62', '122', '1', '2', '5');
INSERT INTO `acad_docente_carrera_materia` VALUES ('173', '62', '123', '1', '3', '5');
INSERT INTO `acad_docente_carrera_materia` VALUES ('174', '62', '69', '1', '2', '6');
INSERT INTO `acad_docente_carrera_materia` VALUES ('175', '62', '73', '1', '2', '6');
INSERT INTO `acad_docente_carrera_materia` VALUES ('176', '62', '7', '1', '1', '7');
INSERT INTO `acad_docente_carrera_materia` VALUES ('177', '62', '19', '1', '2', '7');
INSERT INTO `acad_docente_carrera_materia` VALUES ('178', '62', '20', '1', '3', '7');
INSERT INTO `acad_docente_carrera_materia` VALUES ('179', '62', '45', '1', '2', '8');
INSERT INTO `acad_docente_carrera_materia` VALUES ('180', '62', '41', '1', '2', '8');
INSERT INTO `acad_docente_carrera_materia` VALUES ('181', '52', '107', '1', '1', '5');
INSERT INTO `acad_docente_carrera_materia` VALUES ('182', '52', '112', '1', '1', '5');
INSERT INTO `acad_docente_carrera_materia` VALUES ('183', '52', '130', '1', '3', '5');
INSERT INTO `acad_docente_carrera_materia` VALUES ('184', '52', '66', '1', '1', '6');
INSERT INTO `acad_docente_carrera_materia` VALUES ('185', '52', '63', '1', '1', '6');
INSERT INTO `acad_docente_carrera_materia` VALUES ('186', '52', '68', '1', '1', '6');
INSERT INTO `acad_docente_carrera_materia` VALUES ('187', '52', '4', '1', '1', '7');
INSERT INTO `acad_docente_carrera_materia` VALUES ('188', '52', '9', '1', '1', '7');
INSERT INTO `acad_docente_carrera_materia` VALUES ('189', '52', '27', '1', '3', '7');
INSERT INTO `acad_docente_carrera_materia` VALUES ('190', '52', '35', '1', '1', '8');
INSERT INTO `acad_docente_carrera_materia` VALUES ('191', '52', '40', '1', '1', '8');
INSERT INTO `acad_docente_carrera_materia` VALUES ('192', '52', '38', '1', '1', '8');
INSERT INTO `acad_docente_carrera_materia` VALUES ('203', '57', '121', '1', '2', '5');
INSERT INTO `acad_docente_carrera_materia` VALUES ('204', '57', '125', '1', '3', '5');
INSERT INTO `acad_docente_carrera_materia` VALUES ('205', '57', '131', '1', '3', '5');
INSERT INTO `acad_docente_carrera_materia` VALUES ('206', '57', '128', '1', '3', '5');
INSERT INTO `acad_docente_carrera_materia` VALUES ('207', '57', '83', '1', '3', '6');
INSERT INTO `acad_docente_carrera_materia` VALUES ('208', '57', '80', '1', '3', '6');
INSERT INTO `acad_docente_carrera_materia` VALUES ('209', '57', '18', '1', '2', '7');
INSERT INTO `acad_docente_carrera_materia` VALUES ('210', '57', '28', '1', '3', '7');
INSERT INTO `acad_docente_carrera_materia` VALUES ('211', '57', '25', '1', '3', '7');
INSERT INTO `acad_docente_carrera_materia` VALUES ('212', '57', '22', '1', '3', '7');
INSERT INTO `acad_docente_carrera_materia` VALUES ('213', '57', '52', '1', '3', '8');
INSERT INTO `acad_docente_carrera_materia` VALUES ('214', '57', '55', '1', '3', '8');
INSERT INTO `acad_docente_carrera_materia` VALUES ('220', '58', '88', '1', '4', '6');
INSERT INTO `acad_docente_carrera_materia` VALUES ('221', '58', '86', '1', '4', '6');
INSERT INTO `acad_docente_carrera_materia` VALUES ('222', '58', '60', '1', '4', '8');
INSERT INTO `acad_docente_carrera_materia` VALUES ('223', '58', '58', '1', '4', '8');

-- ----------------------------
-- Table structure for acad_estudiante_carrera_materia
-- ----------------------------
DROP TABLE IF EXISTS `acad_estudiante_carrera_materia`;
CREATE TABLE `acad_estudiante_carrera_materia` (
  `ID_ESTUDIANTE_CARRERA_MATERIA` int(11) NOT NULL AUTO_INCREMENT,
  `ID_CARRERA_MATERIA` int(11) NOT NULL,
  `ID_PERSONA` int(11) NOT NULL,
  `ID_PERIODO_ACADEMICO` int(11) NOT NULL,
  `NIVEL_MATERIA` int(11) NOT NULL,
  `CREDITOS_MATERIA` int(11) NOT NULL,
  `ID_PERSONA_DOCENTE` int(11) DEFAULT NULL,
  `ID_CARRERA` int(11) NOT NULL,
  `ID_GRUPO` int(11) DEFAULT NULL,
  `PRECIO` decimal(10,2) NOT NULL,
  `ES_ARRASTRE` bit(1) NOT NULL DEFAULT b'0',
  `FUE_CONVALIDADA` bit(1) NOT NULL DEFAULT b'0' COMMENT 'F',
  `NOTA_CONVALIDACION` decimal(10,2) NOT NULL DEFAULT '0.00',
  `FUE_HOMOLOGADA` bit(1) NOT NULL DEFAULT b'0',
  `NOTA_HOMOLOGACION` decimal(10,2) NOT NULL DEFAULT '0.00',
  `REGISTRO_HOMOLOGACION` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`ID_ESTUDIANTE_CARRERA_MATERIA`),
  KEY `ID_CARRERA_MATERIA` (`ID_CARRERA_MATERIA`),
  KEY `ID_PERSONA` (`ID_PERSONA`),
  KEY `ID_PERIODO_ACADEMICO` (`ID_PERIODO_ACADEMICO`),
  KEY `ID_PERSONA_DOCENTE` (`ID_PERSONA_DOCENTE`),
  KEY `ID_CARRERA` (`ID_CARRERA`),
  KEY `ID_GRUPO` (`ID_GRUPO`),
  CONSTRAINT `acad_estudiante_carrera_materia_ibfk_1` FOREIGN KEY (`ID_CARRERA_MATERIA`) REFERENCES `acad_carrera_materia` (`ID_CARRERA_MATERIA`) ON UPDATE NO ACTION,
  CONSTRAINT `acad_estudiante_carrera_materia_ibfk_2` FOREIGN KEY (`ID_PERSONA`) REFERENCES `tab_personas` (`ID_PERSONA`) ON UPDATE NO ACTION,
  CONSTRAINT `acad_estudiante_carrera_materia_ibfk_3` FOREIGN KEY (`ID_PERIODO_ACADEMICO`) REFERENCES `acad_periodo_academico` (`ID_PERIODO_ACADEMICO`) ON UPDATE NO ACTION,
  CONSTRAINT `acad_estudiante_carrera_materia_ibfk_5` FOREIGN KEY (`ID_CARRERA`) REFERENCES `acad_carrera` (`ID_CARRERA`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2269 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of acad_estudiante_carrera_materia
-- ----------------------------
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1307', '68', '5', '1', '1', '2', '52', '6', '61', '9.25', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1308', '67', '5', '1', '1', '8', '55', '6', '61', '37.04', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1309', '66', '5', '1', '1', '3', '52', '6', '61', '13.89', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1310', '65', '5', '1', '1', '5', '56', '6', '61', '23.15', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1311', '64', '5', '1', '1', '5', '61', '6', '61', '23.15', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1312', '63', '5', '1', '1', '1', '52', '6', '61', '4.63', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1313', '62', '5', '1', '1', '1', '51', '6', '61', '4.63', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1314', '61', '5', '1', '1', '2', '51', '6', '61', '9.26', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1315', '67', '6', '1', '1', '8', '55', '6', '61', '37.04', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1316', '66', '6', '1', '1', '3', '52', '6', '61', '13.89', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1317', '65', '6', '1', '1', '5', '56', '6', '61', '23.15', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1318', '64', '6', '1', '1', '5', '61', '6', '61', '23.15', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1319', '63', '6', '1', '1', '1', '52', '6', '61', '4.63', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1320', '62', '6', '1', '1', '1', '51', '6', '61', '4.63', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1321', '61', '6', '1', '1', '2', '51', '6', '61', '9.26', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1322', '68', '6', '1', '1', '2', '52', '6', '61', '9.25', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1323', '65', '7', '1', '1', '5', '56', '6', '61', '23.15', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1324', '64', '7', '1', '1', '5', '61', '6', '61', '23.15', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1325', '63', '7', '1', '1', '1', '52', '6', '61', '4.63', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1326', '62', '7', '1', '1', '1', '51', '6', '61', '4.63', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1327', '61', '7', '1', '1', '2', '51', '6', '61', '9.26', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1328', '68', '7', '1', '1', '2', '52', '6', '61', '9.25', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1329', '67', '7', '1', '1', '8', '55', '6', '61', '37.04', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1330', '66', '7', '1', '1', '3', '52', '6', '61', '13.89', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1331', '61', '8', '1', '1', '2', '51', '6', '61', '9.26', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1332', '68', '8', '1', '1', '2', '52', '6', '61', '9.25', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1333', '67', '8', '1', '1', '8', '55', '6', '61', '37.04', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1334', '66', '8', '1', '1', '3', '52', '6', '61', '13.89', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1335', '65', '8', '1', '1', '5', '56', '6', '61', '23.15', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1336', '64', '8', '1', '1', '5', '61', '6', '61', '23.15', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1337', '63', '8', '1', '1', '1', '52', '6', '61', '4.63', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1338', '62', '8', '1', '1', '1', '51', '6', '61', '4.63', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1339', '38', '9', '1', '1', '3', '52', '8', '73', '13.89', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1340', '37', '9', '1', '1', '5', '56', '8', '73', '23.15', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1341', '36', '9', '1', '1', '5', '61', '8', '73', '23.15', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1342', '35', '9', '1', '1', '1', '52', '8', '73', '4.63', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1343', '34', '9', '1', '1', '1', '51', '8', '73', '4.63', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1344', '33', '9', '1', '1', '2', '51', '8', '73', '9.26', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1345', '40', '9', '1', '1', '2', '52', '8', '73', '9.25', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1346', '39', '9', '1', '1', '8', '55', '8', '73', '37.04', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1347', '38', '10', '1', '1', '3', '52', '8', '73', '13.89', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1348', '37', '10', '1', '1', '5', '56', '8', '73', '23.15', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1349', '36', '10', '1', '1', '5', '61', '8', '73', '23.15', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1350', '35', '10', '1', '1', '1', '52', '8', '73', '4.63', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1351', '34', '10', '1', '1', '1', '51', '8', '73', '4.63', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1352', '33', '10', '1', '1', '2', '51', '8', '73', '9.26', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1353', '40', '10', '1', '1', '2', '52', '8', '73', '9.25', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1354', '39', '10', '1', '1', '8', '55', '8', '73', '37.04', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1355', '66', '11', '1', '1', '3', '52', '6', '61', '13.89', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1356', '65', '11', '1', '1', '5', '56', '6', '61', '23.15', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1357', '64', '11', '1', '1', '5', '61', '6', '61', '23.15', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1358', '63', '11', '1', '1', '1', '52', '6', '61', '4.63', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1359', '62', '11', '1', '1', '1', '51', '6', '61', '4.63', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1360', '61', '11', '1', '1', '2', '51', '6', '61', '9.26', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1361', '68', '11', '1', '1', '2', '52', '6', '61', '9.25', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1362', '67', '11', '1', '1', '8', '55', '6', '61', '37.04', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1363', '68', '12', '1', '1', '2', '52', '6', '13', '9.25', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1364', '67', '12', '1', '1', '8', '55', '6', '13', '37.04', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1365', '66', '12', '1', '1', '3', '52', '6', '13', '13.89', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1366', '65', '12', '1', '1', '5', '56', '6', '13', '23.15', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1367', '64', '12', '1', '1', '5', '61', '6', '13', '23.15', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1368', '63', '12', '1', '1', '1', '52', '6', '13', '4.63', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1369', '62', '12', '1', '1', '1', '51', '6', '13', '4.63', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1370', '61', '12', '1', '1', '2', '51', '6', '13', '9.26', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1371', '66', '13', '1', '1', '3', '52', '6', '61', '13.89', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1372', '65', '13', '1', '1', '5', '56', '6', '61', '23.15', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1373', '64', '13', '1', '1', '5', '61', '6', '61', '23.15', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1374', '63', '13', '1', '1', '1', '52', '6', '61', '4.63', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1375', '62', '13', '1', '1', '1', '51', '6', '61', '4.63', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1376', '61', '13', '1', '1', '2', '51', '6', '61', '9.26', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1377', '68', '13', '1', '1', '2', '52', '6', '61', '9.25', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1378', '67', '13', '1', '1', '8', '55', '6', '61', '37.04', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1379', '61', '14', '1', '1', '2', '51', '6', '61', '9.26', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1380', '68', '14', '1', '1', '2', '52', '6', '61', '9.25', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1381', '67', '14', '1', '1', '8', '55', '6', '61', '37.04', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1382', '66', '14', '1', '1', '3', '52', '6', '61', '13.89', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1383', '65', '14', '1', '1', '5', '56', '6', '61', '23.15', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1384', '64', '14', '1', '1', '5', '61', '6', '61', '23.15', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1385', '63', '14', '1', '1', '1', '52', '6', '61', '4.63', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1386', '62', '14', '1', '1', '1', '51', '6', '61', '4.63', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1387', '3', '15', '1', '1', '1', '51', '7', '43', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1388', '11', '15', '1', '1', '3', '63', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1389', '2', '15', '1', '1', '2', '51', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1390', '10', '15', '1', '1', '2', '60', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1391', '9', '15', '1', '1', '2', '52', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1392', '8', '15', '1', '1', '3', '63', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1393', '7', '15', '1', '1', '3', '62', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1394', '6', '15', '1', '1', '5', '56', '7', '43', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1395', '5', '15', '1', '1', '5', '61', '7', '43', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1396', '4', '15', '1', '1', '1', '52', '7', '43', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1397', '3', '23', '1', '1', '1', '51', '7', '43', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1398', '11', '23', '1', '1', '3', '63', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1399', '2', '23', '1', '1', '2', '51', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1400', '10', '23', '1', '1', '2', '60', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1401', '9', '23', '1', '1', '2', '52', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1402', '8', '23', '1', '1', '3', '63', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1403', '7', '23', '1', '1', '3', '62', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1404', '6', '23', '1', '1', '5', '56', '7', '43', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1405', '5', '23', '1', '1', '5', '61', '7', '43', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1406', '4', '23', '1', '1', '1', '52', '7', '43', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1407', '108', '22', '1', '1', '5', '61', '5', '7', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1408', '107', '22', '1', '1', '1', '52', '5', '7', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1409', '106', '22', '1', '1', '1', '51', '5', '7', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1410', '114', '22', '1', '1', '3', '63', '5', '7', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1411', '105', '22', '1', '1', '2', '51', '5', '7', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1412', '113', '22', '1', '1', '2', '60', '5', '7', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1413', '112', '22', '1', '1', '2', '52', '5', '7', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1414', '111', '22', '1', '1', '3', '63', '5', '7', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1415', '110', '22', '1', '1', '3', '62', '5', '7', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1416', '109', '22', '1', '1', '5', '56', '5', '7', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1417', '4', '21', '1', '1', '1', '52', '7', '43', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1418', '3', '21', '1', '1', '1', '51', '7', '43', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1419', '11', '21', '1', '1', '3', '63', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1420', '2', '21', '1', '1', '2', '51', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1421', '10', '21', '1', '1', '2', '60', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1422', '9', '21', '1', '1', '2', '52', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1423', '8', '21', '1', '1', '3', '63', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1424', '7', '21', '1', '1', '3', '62', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1425', '6', '21', '1', '1', '5', '56', '7', '43', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1426', '5', '21', '1', '1', '5', '61', '7', '43', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1427', '5', '20', '1', '1', '5', '61', '7', '43', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1428', '4', '20', '1', '1', '1', '52', '7', '43', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1429', '3', '20', '1', '1', '1', '51', '7', '43', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1430', '11', '20', '1', '1', '3', '63', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1431', '2', '20', '1', '1', '2', '51', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1432', '10', '20', '1', '1', '2', '60', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1433', '9', '20', '1', '1', '2', '52', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1434', '8', '20', '1', '1', '3', '63', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1435', '7', '20', '1', '1', '3', '62', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1436', '6', '20', '1', '1', '5', '56', '7', '43', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1437', '9', '19', '1', '1', '2', '52', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1438', '8', '19', '1', '1', '3', '63', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1439', '7', '19', '1', '1', '3', '62', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1440', '6', '19', '1', '1', '5', '56', '7', '43', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1441', '5', '19', '1', '1', '5', '61', '7', '43', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1442', '4', '19', '1', '1', '1', '52', '7', '43', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1443', '3', '19', '1', '1', '1', '51', '7', '43', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1444', '11', '19', '1', '1', '3', '63', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1445', '2', '19', '1', '1', '2', '51', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1446', '10', '19', '1', '1', '2', '60', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1457', '109', '17', '1', '1', '5', '56', '5', '7', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1458', '108', '17', '1', '1', '5', '61', '5', '7', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1459', '107', '17', '1', '1', '1', '52', '5', '7', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1460', '106', '17', '1', '1', '1', '51', '5', '7', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1461', '114', '17', '1', '1', '3', '63', '5', '7', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1462', '105', '17', '1', '1', '2', '51', '5', '7', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1463', '113', '17', '1', '1', '2', '60', '5', '7', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1464', '112', '17', '1', '1', '2', '52', '5', '7', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1465', '111', '17', '1', '1', '3', '63', '5', '7', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1466', '110', '17', '1', '1', '3', '62', '5', '7', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1467', '4', '16', '1', '1', '1', '52', '7', '43', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1468', '3', '16', '1', '1', '1', '51', '7', '43', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1469', '11', '16', '1', '1', '3', '63', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1470', '2', '16', '1', '1', '2', '51', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1471', '10', '16', '1', '1', '2', '60', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1472', '9', '16', '1', '1', '2', '52', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1473', '8', '16', '1', '1', '3', '63', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1474', '7', '16', '1', '1', '3', '62', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1475', '6', '16', '1', '1', '5', '56', '7', '43', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1476', '5', '16', '1', '1', '5', '61', '7', '43', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1477', '9', '24', '1', '1', '2', '52', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1478', '8', '24', '1', '1', '3', '63', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1479', '7', '24', '1', '1', '3', '62', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1480', '6', '24', '1', '1', '5', '56', '7', '43', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1481', '5', '24', '1', '1', '5', '61', '7', '43', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1482', '4', '24', '1', '1', '1', '52', '7', '43', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1483', '3', '24', '1', '1', '1', '51', '7', '43', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1484', '11', '24', '1', '1', '3', '63', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1485', '2', '24', '1', '1', '2', '51', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1486', '10', '24', '1', '1', '2', '60', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1487', '3', '25', '1', '1', '1', '51', '7', '43', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1488', '11', '25', '1', '1', '3', '63', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1489', '2', '25', '1', '1', '2', '51', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1490', '10', '25', '1', '1', '2', '60', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1491', '9', '25', '1', '1', '2', '52', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1492', '8', '25', '1', '1', '3', '63', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1493', '7', '25', '1', '1', '3', '62', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1494', '6', '25', '1', '1', '5', '56', '7', '43', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1495', '5', '25', '1', '1', '5', '61', '7', '43', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1496', '4', '25', '1', '1', '1', '52', '7', '43', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1497', '9', '26', '1', '1', '2', '52', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1498', '8', '26', '1', '1', '3', '63', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1499', '7', '26', '1', '1', '3', '62', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1500', '6', '26', '1', '1', '5', '56', '7', '43', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1501', '5', '26', '1', '1', '5', '61', '7', '43', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1502', '4', '26', '1', '1', '1', '52', '7', '43', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1503', '3', '26', '1', '1', '1', '51', '7', '43', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1504', '11', '26', '1', '1', '3', '63', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1505', '2', '26', '1', '1', '2', '51', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1506', '10', '26', '1', '1', '2', '60', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1507', '5', '27', '1', '1', '5', '61', '7', '43', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1508', '4', '27', '1', '1', '1', '52', '7', '43', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1509', '3', '27', '1', '1', '1', '51', '7', '43', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1510', '11', '27', '1', '1', '3', '63', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1511', '2', '27', '1', '1', '2', '51', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1512', '10', '27', '1', '1', '2', '60', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1513', '9', '27', '1', '1', '2', '52', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1514', '8', '27', '1', '1', '3', '63', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1515', '7', '27', '1', '1', '3', '62', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1516', '6', '27', '1', '1', '5', '56', '7', '43', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1517', '109', '29', '1', '1', '5', '56', '5', '7', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1518', '108', '29', '1', '1', '5', '61', '5', '7', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1519', '107', '29', '1', '1', '1', '52', '5', '7', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1520', '106', '29', '1', '1', '1', '51', '5', '7', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1521', '114', '29', '1', '1', '3', '63', '5', '7', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1522', '105', '29', '1', '1', '2', '51', '5', '7', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1523', '113', '29', '1', '1', '2', '60', '5', '7', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1524', '112', '29', '1', '1', '2', '52', '5', '7', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1525', '111', '29', '1', '1', '3', '63', '5', '7', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1526', '110', '29', '1', '1', '3', '62', '5', '7', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1527', '111', '30', '1', '1', '3', '63', '5', '7', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1528', '110', '30', '1', '1', '3', '62', '5', '7', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1529', '109', '30', '1', '1', '5', '56', '5', '7', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1530', '108', '30', '1', '1', '5', '61', '5', '7', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1531', '107', '30', '1', '1', '1', '52', '5', '7', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1532', '106', '30', '1', '1', '1', '51', '5', '7', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1533', '114', '30', '1', '1', '3', '63', '5', '7', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1534', '105', '30', '1', '1', '2', '51', '5', '7', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1535', '113', '30', '1', '1', '2', '60', '5', '7', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1536', '112', '30', '1', '1', '2', '52', '5', '7', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1537', '9', '31', '1', '1', '2', '52', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1538', '8', '31', '1', '1', '3', '63', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1539', '7', '31', '1', '1', '3', '62', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1540', '6', '31', '1', '1', '5', '56', '7', '43', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1541', '5', '31', '1', '1', '5', '61', '7', '43', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1542', '4', '31', '1', '1', '1', '52', '7', '43', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1543', '3', '31', '1', '1', '1', '51', '7', '43', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1544', '11', '31', '1', '1', '3', '63', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1545', '2', '31', '1', '1', '2', '51', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1546', '10', '31', '1', '1', '2', '60', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1547', '6', '32', '1', '1', '5', '56', '7', '43', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1548', '5', '32', '1', '1', '5', '61', '7', '43', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1549', '4', '32', '1', '1', '1', '52', '7', '43', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1550', '3', '32', '1', '1', '1', '51', '7', '43', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1551', '11', '32', '1', '1', '3', '63', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1552', '2', '32', '1', '1', '2', '51', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1553', '10', '32', '1', '1', '2', '60', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1554', '9', '32', '1', '1', '2', '52', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1555', '8', '32', '1', '1', '3', '63', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1556', '7', '32', '1', '1', '3', '62', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1557', '2', '33', '1', '1', '2', '51', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1558', '10', '33', '1', '1', '2', '60', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1559', '9', '33', '1', '1', '2', '52', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1560', '8', '33', '1', '1', '3', '63', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1561', '7', '33', '1', '1', '3', '62', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1562', '6', '33', '1', '1', '5', '56', '7', '43', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1563', '5', '33', '1', '1', '5', '61', '7', '43', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1564', '4', '33', '1', '1', '1', '52', '7', '43', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1565', '3', '33', '1', '1', '1', '51', '7', '43', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1566', '11', '33', '1', '1', '3', '63', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1575', '61', '36', '1', '1', '2', '51', '6', '61', '9.26', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1576', '68', '36', '1', '1', '2', '52', '6', '61', '9.25', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1577', '67', '36', '1', '1', '8', '55', '6', '61', '37.04', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1578', '66', '36', '1', '1', '3', '52', '6', '61', '13.89', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1579', '65', '36', '1', '1', '5', '56', '6', '61', '23.15', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1580', '64', '36', '1', '1', '5', '61', '6', '61', '23.15', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1581', '63', '36', '1', '1', '1', '52', '6', '61', '4.63', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1582', '62', '36', '1', '1', '1', '51', '6', '61', '4.63', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1583', '3', '37', '1', '1', '1', '51', '7', '43', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1584', '11', '37', '1', '1', '3', '63', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1585', '2', '37', '1', '1', '2', '51', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1586', '10', '37', '1', '1', '2', '60', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1587', '9', '37', '1', '1', '2', '52', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1588', '8', '37', '1', '1', '3', '63', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1589', '7', '37', '1', '1', '3', '62', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1590', '6', '37', '1', '1', '5', '56', '7', '43', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1591', '5', '37', '1', '1', '5', '61', '7', '43', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1592', '4', '37', '1', '1', '1', '52', '7', '43', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1593', '3', '38', '1', '1', '1', '51', '7', '43', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1594', '11', '38', '1', '1', '3', '63', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1595', '2', '38', '1', '1', '2', '51', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1596', '10', '38', '1', '1', '2', '60', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1597', '9', '38', '1', '1', '2', '52', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1598', '8', '38', '1', '1', '3', '63', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1599', '7', '38', '1', '1', '3', '62', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1600', '6', '38', '1', '1', '5', '56', '7', '43', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1601', '5', '38', '1', '1', '5', '61', '7', '43', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1602', '4', '38', '1', '1', '1', '52', '7', '43', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1603', '107', '39', '1', '1', '1', '52', '5', '7', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1604', '106', '39', '1', '1', '1', '51', '5', '7', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1605', '114', '39', '1', '1', '3', '63', '5', '7', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1606', '105', '39', '1', '1', '2', '51', '5', '7', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1607', '113', '39', '1', '1', '2', '60', '5', '7', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1608', '112', '39', '1', '1', '2', '52', '5', '7', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1609', '111', '39', '1', '1', '3', '63', '5', '7', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1610', '110', '39', '1', '1', '3', '62', '5', '7', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1611', '109', '39', '1', '1', '5', '56', '5', '7', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1612', '108', '39', '1', '1', '5', '61', '5', '7', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1613', '107', '40', '1', '1', '1', '52', '5', '7', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1614', '106', '40', '1', '1', '1', '51', '5', '7', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1615', '114', '40', '1', '1', '3', '63', '5', '7', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1616', '105', '40', '1', '1', '2', '51', '5', '7', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1617', '113', '40', '1', '1', '2', '60', '5', '7', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1618', '112', '40', '1', '1', '2', '52', '5', '7', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1619', '111', '40', '1', '1', '3', '63', '5', '7', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1620', '110', '40', '1', '1', '3', '62', '5', '7', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1621', '109', '40', '1', '1', '5', '56', '5', '7', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1622', '108', '40', '1', '1', '5', '61', '5', '7', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1623', '6', '41', '1', '1', '5', '56', '7', '19', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1624', '5', '41', '1', '1', '5', '61', '7', '19', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1625', '4', '41', '1', '1', '1', '52', '7', '19', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1626', '3', '41', '1', '1', '1', '51', '7', '19', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1627', '11', '41', '1', '1', '3', '63', '7', '19', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1628', '2', '41', '1', '1', '2', '51', '7', '19', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1629', '10', '41', '1', '1', '2', '60', '7', '19', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1630', '9', '41', '1', '1', '2', '52', '7', '19', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1631', '8', '41', '1', '1', '3', '63', '7', '19', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1632', '7', '41', '1', '1', '3', '62', '7', '19', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1633', '109', '42', '1', '1', '5', '56', '5', '7', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1634', '108', '42', '1', '1', '5', '61', '5', '7', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1635', '107', '42', '1', '1', '1', '52', '5', '7', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1636', '106', '42', '1', '1', '1', '51', '5', '7', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1637', '114', '42', '1', '1', '3', '63', '5', '7', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1638', '105', '42', '1', '1', '2', '51', '5', '7', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1639', '113', '42', '1', '1', '2', '60', '5', '7', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1640', '112', '42', '1', '1', '2', '52', '5', '7', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1641', '111', '42', '1', '1', '3', '63', '5', '7', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1642', '110', '42', '1', '1', '3', '62', '5', '7', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1643', '111', '43', '1', '1', '3', '63', '5', '7', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1644', '110', '43', '1', '1', '3', '62', '5', '7', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1645', '109', '43', '1', '1', '5', '56', '5', '7', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1646', '108', '43', '1', '1', '5', '61', '5', '7', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1647', '107', '43', '1', '1', '1', '52', '5', '7', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1648', '106', '43', '1', '1', '1', '51', '5', '7', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1649', '114', '43', '1', '1', '3', '63', '5', '7', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1650', '105', '43', '1', '1', '2', '51', '5', '7', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1651', '113', '43', '1', '1', '2', '60', '5', '7', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1652', '112', '43', '1', '1', '2', '52', '5', '7', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1653', '6', '103', '1', '1', '5', '56', '7', '43', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1654', '5', '103', '1', '1', '5', '61', '7', '43', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1655', '4', '103', '1', '1', '1', '52', '7', '43', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1656', '3', '103', '1', '1', '1', '51', '7', '43', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1657', '11', '103', '1', '1', '3', '63', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1658', '2', '103', '1', '1', '2', '51', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1659', '10', '103', '1', '1', '2', '60', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1660', '9', '103', '1', '1', '2', '52', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1661', '8', '103', '1', '1', '3', '63', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1662', '7', '103', '1', '1', '3', '62', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1663', '2', '102', '1', '1', '2', '51', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1664', '10', '102', '1', '1', '2', '60', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1665', '9', '102', '1', '1', '2', '52', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1666', '8', '102', '1', '1', '3', '63', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1667', '7', '102', '1', '1', '3', '62', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1668', '6', '102', '1', '1', '5', '56', '7', '43', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1669', '5', '102', '1', '1', '5', '61', '7', '43', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1670', '4', '102', '1', '1', '1', '52', '7', '43', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1671', '3', '102', '1', '1', '1', '51', '7', '43', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1672', '11', '102', '1', '1', '3', '63', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1673', '111', '88', '1', '1', '3', '63', '5', '7', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1674', '110', '88', '1', '1', '3', '62', '5', '7', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1675', '109', '88', '1', '1', '5', '56', '5', '7', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1676', '108', '88', '1', '1', '5', '61', '5', '7', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1677', '107', '88', '1', '1', '1', '52', '5', '7', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1678', '106', '88', '1', '1', '1', '51', '5', '7', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1679', '114', '88', '1', '1', '3', '63', '5', '7', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1680', '105', '88', '1', '1', '2', '51', '5', '7', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1681', '113', '88', '1', '1', '2', '60', '5', '7', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1682', '112', '88', '1', '1', '2', '52', '5', '7', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1683', '110', '85', '1', '1', '3', '62', '5', '7', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1684', '109', '85', '1', '1', '5', '56', '5', '7', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1685', '108', '85', '1', '1', '5', '61', '5', '7', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1686', '107', '85', '1', '1', '1', '52', '5', '7', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1687', '106', '85', '1', '1', '1', '51', '5', '7', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1688', '114', '85', '1', '1', '3', '63', '5', '7', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1689', '105', '85', '1', '1', '2', '51', '5', '7', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1690', '113', '85', '1', '1', '2', '60', '5', '7', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1691', '112', '85', '1', '1', '2', '52', '5', '7', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1692', '111', '85', '1', '1', '3', '63', '5', '7', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1693', '37', '49', '1', '1', '5', '56', '8', '73', '23.15', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1694', '36', '49', '1', '1', '5', '61', '8', '73', '23.15', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1695', '35', '49', '1', '1', '1', '52', '8', '73', '4.63', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1696', '34', '49', '1', '1', '1', '51', '8', '73', '4.63', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1697', '33', '49', '1', '1', '2', '51', '8', '73', '9.26', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1698', '40', '49', '1', '1', '2', '52', '8', '73', '9.25', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1699', '39', '49', '1', '1', '8', '55', '8', '73', '37.04', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1700', '38', '49', '1', '1', '3', '52', '8', '73', '13.89', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1701', '66', '48', '1', '1', '3', '52', '6', '61', '13.89', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1702', '65', '48', '1', '1', '5', '56', '6', '61', '23.15', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1703', '64', '48', '1', '1', '5', '61', '6', '61', '23.15', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1704', '63', '48', '1', '1', '1', '52', '6', '61', '4.63', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1705', '62', '48', '1', '1', '1', '51', '6', '61', '4.63', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1706', '61', '48', '1', '1', '2', '51', '6', '61', '9.26', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1707', '68', '48', '1', '1', '2', '52', '6', '61', '9.25', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1708', '67', '48', '1', '1', '8', '55', '6', '61', '37.04', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1709', '6', '46', '1', '1', '5', '56', '7', '19', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1710', '5', '46', '1', '1', '5', '61', '7', '19', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1711', '4', '46', '1', '1', '1', '52', '7', '19', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1712', '3', '46', '1', '1', '1', '51', '7', '19', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1713', '11', '46', '1', '1', '3', '63', '7', '19', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1714', '2', '46', '1', '1', '2', '51', '7', '19', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1715', '10', '46', '1', '1', '2', '60', '7', '19', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1716', '9', '46', '1', '1', '2', '52', '7', '19', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1717', '8', '46', '1', '1', '3', '63', '7', '19', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1718', '7', '46', '1', '1', '3', '62', '7', '19', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1719', '33', '45', '1', '1', '2', '51', '8', '73', '9.26', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1720', '40', '45', '1', '1', '2', '52', '8', '73', '9.25', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1721', '39', '45', '1', '1', '8', '55', '8', '73', '37.04', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1722', '38', '45', '1', '1', '3', '52', '8', '73', '13.89', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1723', '37', '45', '1', '1', '5', '56', '8', '73', '23.15', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1724', '36', '45', '1', '1', '5', '61', '8', '73', '23.15', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1725', '35', '45', '1', '1', '1', '52', '8', '73', '4.63', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1726', '34', '45', '1', '1', '1', '51', '8', '73', '4.63', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1727', '3', '34', '1', '1', '1', '51', '7', '43', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1728', '11', '34', '1', '1', '3', '63', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1729', '2', '34', '1', '1', '2', '51', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1730', '10', '34', '1', '1', '2', '60', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1731', '9', '34', '1', '1', '2', '52', '7', '43', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1732', '8', '34', '1', '1', '3', '63', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1733', '7', '34', '1', '1', '3', '62', '7', '43', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1734', '6', '34', '1', '1', '5', '56', '7', '43', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1735', '5', '34', '1', '1', '5', '61', '7', '43', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1736', '4', '34', '1', '1', '1', '52', '7', '43', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1737', '37', '116', '1', '1', '5', '56', '8', '73', '23.15', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1738', '36', '116', '1', '1', '5', '61', '8', '73', '23.15', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1739', '35', '116', '1', '1', '1', '52', '8', '73', '4.63', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1740', '34', '116', '1', '1', '1', '51', '8', '73', '4.63', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1741', '33', '116', '1', '1', '2', '51', '8', '73', '9.26', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1742', '40', '116', '1', '1', '2', '52', '8', '73', '9.25', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1743', '39', '116', '1', '1', '8', '55', '8', '73', '37.04', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1744', '38', '116', '1', '1', '3', '52', '8', '73', '13.89', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1745', '68', '117', '1', '1', '2', '52', '6', '61', '9.25', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1746', '67', '117', '1', '1', '8', '55', '6', '61', '37.04', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1747', '66', '117', '1', '1', '3', '52', '6', '61', '13.89', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1748', '65', '117', '1', '1', '5', '56', '6', '61', '23.15', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1749', '64', '117', '1', '1', '5', '61', '6', '61', '23.15', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1750', '63', '117', '1', '1', '1', '52', '6', '61', '4.63', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1751', '62', '117', '1', '1', '1', '51', '6', '61', '4.63', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1752', '61', '117', '1', '1', '2', '51', '6', '61', '9.26', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1753', '119', '89', '1', '2', '5', '60', '5', '56', '27.68', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1754', '118', '89', '1', '2', '5', '56', '5', '56', '27.68', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1755', '117', '89', '1', '2', '5', '61', '5', '56', '27.68', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1756', '116', '89', '1', '2', '1', '51', '5', '56', '5.54', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1757', '115', '89', '1', '2', '1', '125', '5', '56', '5.54', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1758', '122', '89', '1', '2', '4', '62', '5', '56', '2.14', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1759', '121', '89', '1', '2', '3', '57', '5', '56', '16.60', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1760', '120', '89', '1', '2', '4', '59', '5', '56', '22.14', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1761', '115', '69', '1', '2', '1', '125', '5', '56', '5.54', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1762', '122', '69', '1', '2', '4', '62', '5', '56', '2.14', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1763', '121', '69', '1', '2', '3', '57', '5', '56', '16.60', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1764', '120', '69', '1', '2', '4', '59', '5', '56', '22.14', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1765', '119', '69', '1', '2', '5', '60', '5', '56', '27.68', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1766', '118', '69', '1', '2', '5', '56', '5', '56', '27.68', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1767', '117', '69', '1', '2', '5', '61', '5', '56', '27.68', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1768', '116', '69', '1', '2', '1', '51', '5', '56', '5.54', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1769', '120', '91', '1', '2', '4', '59', '5', '56', '22.14', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1770', '119', '91', '1', '2', '5', '60', '5', '56', '27.68', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1771', '118', '91', '1', '2', '5', '56', '5', '56', '27.68', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1772', '117', '91', '1', '2', '5', '61', '5', '56', '27.68', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1773', '116', '91', '1', '2', '1', '51', '5', '56', '5.54', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1774', '115', '91', '1', '2', '1', '125', '5', '56', '5.54', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1775', '122', '91', '1', '2', '4', '62', '5', '56', '2.14', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1776', '121', '91', '1', '2', '3', '57', '5', '56', '16.60', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1777', '120', '94', '1', '2', '4', '59', '5', '56', '22.14', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1778', '119', '94', '1', '2', '5', '60', '5', '56', '27.68', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1779', '118', '94', '1', '2', '5', '56', '5', '56', '27.68', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1780', '117', '94', '1', '2', '5', '61', '5', '56', '27.68', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1781', '116', '94', '1', '2', '1', '51', '5', '56', '5.54', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1782', '115', '94', '1', '2', '1', '125', '5', '56', '5.54', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1783', '122', '94', '1', '2', '4', '62', '5', '56', '2.14', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1784', '121', '94', '1', '2', '3', '57', '5', '56', '16.60', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1785', '115', '93', '1', '2', '1', '125', '5', '56', '5.54', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1786', '122', '93', '1', '2', '4', '62', '5', '56', '2.14', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1787', '121', '93', '1', '2', '3', '57', '5', '56', '16.60', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1788', '120', '93', '1', '2', '4', '59', '5', '56', '22.14', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1789', '119', '93', '1', '2', '5', '60', '5', '56', '27.68', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1790', '118', '93', '1', '2', '5', '56', '5', '56', '27.68', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1791', '117', '93', '1', '2', '5', '61', '5', '56', '27.68', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1792', '116', '93', '1', '2', '1', '51', '5', '56', '5.54', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1793', '115', '115', '1', '2', '1', '125', '5', '56', '5.54', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1794', '122', '115', '1', '2', '4', '62', '5', '56', '2.14', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1795', '121', '115', '1', '2', '3', '57', '5', '56', '16.60', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1796', '120', '115', '1', '2', '4', '59', '5', '56', '22.14', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1797', '119', '115', '1', '2', '5', '60', '5', '56', '27.68', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1798', '118', '115', '1', '2', '5', '56', '5', '56', '27.68', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1799', '117', '115', '1', '2', '5', '61', '5', '56', '27.68', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1800', '116', '115', '1', '2', '1', '51', '5', '56', '5.54', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1801', '119', '99', '1', '2', '5', '60', '5', '56', '27.68', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1802', '118', '99', '1', '2', '5', '56', '5', '56', '27.68', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1803', '117', '99', '1', '2', '5', '61', '5', '56', '27.68', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1804', '116', '99', '1', '2', '1', '51', '5', '56', '5.54', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1805', '115', '99', '1', '2', '1', '125', '5', '56', '5.54', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1806', '122', '99', '1', '2', '4', '62', '5', '56', '2.14', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1807', '121', '99', '1', '2', '3', '57', '5', '56', '16.60', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1808', '120', '99', '1', '2', '4', '59', '5', '56', '22.14', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1809', '17', '90', '1', '2', '4', '59', '7', '68', '22.14', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1810', '16', '90', '1', '2', '5', '60', '7', '68', '27.68', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1811', '15', '90', '1', '2', '5', '56', '7', '68', '27.68', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1812', '14', '90', '1', '2', '5', '61', '7', '68', '27.68', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1813', '13', '90', '1', '2', '1', '51', '7', '68', '5.54', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1814', '12', '90', '1', '2', '1', '125', '7', '68', '5.54', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1815', '19', '90', '1', '2', '4', '62', '7', '68', '22.14', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1816', '18', '90', '1', '2', '3', '57', '7', '68', '16.60', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1817', '13', '92', '1', '2', '1', '51', '7', '68', '5.54', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1818', '12', '92', '1', '2', '1', '125', '7', '68', '5.54', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1819', '19', '92', '1', '2', '4', '62', '7', '68', '22.14', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1820', '18', '92', '1', '2', '3', '57', '7', '68', '16.60', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1821', '17', '92', '1', '2', '4', '59', '7', '68', '22.14', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1822', '16', '92', '1', '2', '5', '60', '7', '68', '27.68', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1823', '15', '92', '1', '2', '5', '56', '7', '68', '27.68', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1824', '14', '92', '1', '2', '5', '61', '7', '68', '27.68', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1833', '110', '18', '1', '1', '3', '62', '5', '7', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1834', '109', '18', '1', '1', '5', '56', '5', '7', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1835', '108', '18', '1', '1', '5', '61', '5', '7', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1836', '107', '18', '1', '1', '1', '52', '5', '7', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1837', '106', '18', '1', '1', '1', '51', '5', '7', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1838', '114', '18', '1', '1', '3', '63', '5', '7', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1839', '105', '18', '1', '1', '2', '51', '5', '7', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1840', '113', '18', '1', '1', '2', '60', '5', '7', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1841', '112', '18', '1', '1', '2', '52', '5', '7', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1842', '111', '18', '1', '1', '3', '63', '5', '7', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1843', '119', '128', '1', '2', '5', '60', '5', '56', '27.68', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1844', '118', '128', '1', '2', '5', '56', '5', '56', '27.68', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1845', '117', '128', '1', '2', '5', '61', '5', '56', '27.68', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1846', '116', '128', '1', '2', '1', '51', '5', '56', '5.54', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1847', '115', '128', '1', '2', '1', '125', '5', '56', '5.54', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1848', '122', '128', '1', '2', '4', '62', '5', '56', '2.14', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1849', '121', '128', '1', '2', '3', '57', '5', '56', '16.60', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1850', '120', '128', '1', '2', '4', '59', '5', '56', '22.14', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1851', '61', '35', '1', '1', '2', '51', '6', '61', '9.26', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1852', '68', '35', '1', '1', '2', '52', '6', '61', '9.25', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1853', '67', '35', '1', '1', '8', '55', '6', '61', '37.04', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1854', '66', '35', '1', '1', '3', '52', '6', '61', '13.89', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1855', '65', '35', '1', '1', '5', '56', '6', '61', '23.15', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1856', '64', '35', '1', '1', '5', '61', '6', '61', '23.15', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1857', '63', '35', '1', '1', '1', '52', '6', '61', '4.63', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1858', '62', '35', '1', '1', '1', '51', '6', '61', '4.63', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1859', '17', '129', '1', '2', '4', '59', '7', '68', '22.14', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1860', '16', '129', '1', '2', '5', '60', '7', '68', '27.68', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1861', '15', '129', '1', '2', '5', '56', '7', '68', '27.68', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1862', '14', '129', '1', '2', '5', '61', '7', '68', '27.68', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1863', '13', '129', '1', '2', '1', '51', '7', '68', '5.54', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1864', '12', '129', '1', '2', '1', '125', '7', '68', '5.54', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1865', '19', '129', '1', '2', '4', '62', '7', '68', '22.14', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1866', '18', '129', '1', '2', '3', '57', '7', '68', '16.60', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1867', '116', '130', '1', '2', '1', '51', '5', '56', '5.54', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1868', '115', '130', '1', '2', '1', '125', '5', '56', '5.54', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1869', '122', '130', '1', '2', '4', '62', '5', '56', '2.14', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1870', '121', '130', '1', '2', '3', '57', '5', '56', '16.60', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1871', '120', '130', '1', '2', '4', '59', '5', '56', '22.14', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1872', '119', '130', '1', '2', '5', '60', '5', '56', '27.68', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1873', '118', '130', '1', '2', '5', '56', '5', '56', '27.68', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1874', '117', '130', '1', '2', '5', '61', '5', '56', '27.68', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1875', '64', '4', '1', '1', '5', '61', '6', '61', '23.15', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1876', '63', '4', '1', '1', '1', '52', '6', '61', '4.63', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1877', '62', '4', '1', '1', '1', '51', '6', '61', '4.63', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1878', '61', '4', '1', '1', '2', '51', '6', '61', '9.26', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1879', '68', '4', '1', '1', '2', '52', '6', '61', '9.25', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1880', '67', '4', '1', '1', '8', '55', '6', '61', '37.04', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1881', '66', '4', '1', '1', '3', '52', '6', '61', '13.89', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('1882', '65', '4', '1', '1', '5', '56', '6', '61', '23.15', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('2201', '36', '4', '1', '1', '5', '61', '8', '25', '23.15', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('2202', '35', '4', '1', '1', '1', '52', '8', '25', '4.63', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('2203', '34', '4', '1', '1', '1', '51', '8', '25', '4.63', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('2204', '33', '4', '1', '1', '2', '51', '8', '25', '9.26', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('2205', '40', '4', '1', '1', '2', '52', '8', '25', '9.25', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('2206', '39', '4', '1', '1', '8', '55', '8', '25', '37.04', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('2207', '38', '4', '1', '1', '3', '52', '8', '25', '13.89', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('2208', '37', '4', '1', '1', '5', '56', '8', '25', '23.15', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('2259', '105', '44', '1', '1', '2', '51', '5', '7', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('2260', '113', '44', '1', '1', '2', '60', '5', '7', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('2261', '112', '44', '1', '1', '2', '52', '5', '7', '11.48', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('2262', '111', '44', '1', '1', '3', '63', '5', '7', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('2263', '110', '44', '1', '1', '3', '62', '5', '7', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('2264', '109', '44', '1', '1', '5', '56', '5', '7', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('2265', '108', '44', '1', '1', '5', '61', '5', '7', '28.70', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('2266', '107', '44', '1', '1', '1', '52', '5', '7', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('2267', '106', '44', '1', '1', '1', '51', '5', '7', '5.75', '\0', '\0', '0.00', '\0', '0.00', '');
INSERT INTO `acad_estudiante_carrera_materia` VALUES ('2268', '114', '44', '1', '1', '3', '63', '5', '7', '17.22', '\0', '\0', '0.00', '\0', '0.00', '');

-- ----------------------------
-- Table structure for acad_grupo
-- ----------------------------
DROP TABLE IF EXISTS `acad_grupo`;
CREATE TABLE `acad_grupo` (
  `ID_GRUPO` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(100) NOT NULL,
  `ID_CARRERA` int(11) NOT NULL,
  `ID_NIVEL` int(11) NOT NULL,
  `ESTADO` bit(1) NOT NULL DEFAULT b'1',
  PRIMARY KEY (`ID_GRUPO`),
  KEY `ID_CARRERA` (`ID_CARRERA`),
  KEY `ID_NIVEL` (`ID_NIVEL`),
  CONSTRAINT `acad_grupo_ibfk_1` FOREIGN KEY (`ID_CARRERA`) REFERENCES `acad_carrera` (`ID_CARRERA`) ON UPDATE NO ACTION,
  CONSTRAINT `acad_grupo_ibfk_2` FOREIGN KEY (`ID_NIVEL`) REFERENCES `acad_nivel` (`ID_NIVEL`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of acad_grupo
-- ----------------------------
INSERT INTO `acad_grupo` VALUES ('7', 'A', '5', '1', '');
INSERT INTO `acad_grupo` VALUES ('8', 'A', '5', '2', '');
INSERT INTO `acad_grupo` VALUES ('9', 'A', '5', '3', '');
INSERT INTO `acad_grupo` VALUES ('10', 'A', '5', '4', '');
INSERT INTO `acad_grupo` VALUES ('11', 'A', '5', '5', '');
INSERT INTO `acad_grupo` VALUES ('12', 'A', '5', '6', '');
INSERT INTO `acad_grupo` VALUES ('13', 'A', '6', '1', '');
INSERT INTO `acad_grupo` VALUES ('14', 'A', '6', '2', '');
INSERT INTO `acad_grupo` VALUES ('15', 'A', '6', '3', '');
INSERT INTO `acad_grupo` VALUES ('16', 'A', '6', '4', '');
INSERT INTO `acad_grupo` VALUES ('17', 'A', '6', '5', '');
INSERT INTO `acad_grupo` VALUES ('18', 'A', '6', '6', '');
INSERT INTO `acad_grupo` VALUES ('19', 'A', '7', '1', '');
INSERT INTO `acad_grupo` VALUES ('20', 'A', '7', '2', '');
INSERT INTO `acad_grupo` VALUES ('21', 'A', '7', '3', '');
INSERT INTO `acad_grupo` VALUES ('22', 'A', '7', '4', '');
INSERT INTO `acad_grupo` VALUES ('23', 'A', '7', '5', '');
INSERT INTO `acad_grupo` VALUES ('24', 'A', '7', '6', '');
INSERT INTO `acad_grupo` VALUES ('25', 'A', '8', '1', '');
INSERT INTO `acad_grupo` VALUES ('26', 'A', '8', '2', '');
INSERT INTO `acad_grupo` VALUES ('27', 'A', '8', '3', '');
INSERT INTO `acad_grupo` VALUES ('28', 'A', '8', '4', '');
INSERT INTO `acad_grupo` VALUES ('29', 'A', '8', '5', '');
INSERT INTO `acad_grupo` VALUES ('30', 'A', '8', '6', '');
INSERT INTO `acad_grupo` VALUES ('31', 'B', '5', '1', '');
INSERT INTO `acad_grupo` VALUES ('32', 'B', '5', '2', '');
INSERT INTO `acad_grupo` VALUES ('33', 'B', '5', '3', '');
INSERT INTO `acad_grupo` VALUES ('34', 'B', '5', '4', '');
INSERT INTO `acad_grupo` VALUES ('35', 'B', '5', '5', '');
INSERT INTO `acad_grupo` VALUES ('36', 'B', '5', '6', '');
INSERT INTO `acad_grupo` VALUES ('37', 'B', '6', '1', '');
INSERT INTO `acad_grupo` VALUES ('38', 'B', '6', '2', '');
INSERT INTO `acad_grupo` VALUES ('39', 'B', '6', '3', '');
INSERT INTO `acad_grupo` VALUES ('40', 'B', '6', '4', '');
INSERT INTO `acad_grupo` VALUES ('41', 'B', '6', '5', '');
INSERT INTO `acad_grupo` VALUES ('42', 'B', '6', '6', '');
INSERT INTO `acad_grupo` VALUES ('43', 'B', '7', '1', '');
INSERT INTO `acad_grupo` VALUES ('44', 'B', '7', '2', '');
INSERT INTO `acad_grupo` VALUES ('45', 'B', '7', '3', '');
INSERT INTO `acad_grupo` VALUES ('46', 'B', '7', '4', '');
INSERT INTO `acad_grupo` VALUES ('47', 'B', '7', '5', '');
INSERT INTO `acad_grupo` VALUES ('48', 'B', '7', '6', '');
INSERT INTO `acad_grupo` VALUES ('49', 'B', '8', '1', '');
INSERT INTO `acad_grupo` VALUES ('50', 'B', '8', '2', '');
INSERT INTO `acad_grupo` VALUES ('51', 'B', '8', '3', '');
INSERT INTO `acad_grupo` VALUES ('52', 'B', '8', '4', '');
INSERT INTO `acad_grupo` VALUES ('53', 'B', '8', '5', '');
INSERT INTO `acad_grupo` VALUES ('54', 'B', '8', '6', '');
INSERT INTO `acad_grupo` VALUES ('55', 'Único', '5', '1', '');
INSERT INTO `acad_grupo` VALUES ('56', 'Único', '5', '2', '');
INSERT INTO `acad_grupo` VALUES ('57', 'Único', '5', '3', '');
INSERT INTO `acad_grupo` VALUES ('58', 'Único', '5', '4', '');
INSERT INTO `acad_grupo` VALUES ('59', 'Único', '5', '5', '');
INSERT INTO `acad_grupo` VALUES ('60', 'Único', '5', '6', '');
INSERT INTO `acad_grupo` VALUES ('61', 'Único', '6', '1', '');
INSERT INTO `acad_grupo` VALUES ('62', 'Único', '6', '2', '');
INSERT INTO `acad_grupo` VALUES ('63', 'Único', '6', '3', '');
INSERT INTO `acad_grupo` VALUES ('64', 'Único', '6', '4', '');
INSERT INTO `acad_grupo` VALUES ('65', 'Único', '6', '5', '');
INSERT INTO `acad_grupo` VALUES ('66', 'Único', '6', '6', '');
INSERT INTO `acad_grupo` VALUES ('67', 'Único', '7', '1', '');
INSERT INTO `acad_grupo` VALUES ('68', 'Único', '7', '2', '');
INSERT INTO `acad_grupo` VALUES ('69', 'Único', '7', '3', '');
INSERT INTO `acad_grupo` VALUES ('70', 'Único', '7', '4', '');
INSERT INTO `acad_grupo` VALUES ('71', 'Único', '7', '5', '');
INSERT INTO `acad_grupo` VALUES ('72', 'Único', '7', '6', '');
INSERT INTO `acad_grupo` VALUES ('73', 'Único', '8', '1', '');
INSERT INTO `acad_grupo` VALUES ('74', 'Único', '8', '2', '');
INSERT INTO `acad_grupo` VALUES ('75', 'Único', '8', '3', '');
INSERT INTO `acad_grupo` VALUES ('76', 'Único', '8', '4', '');
INSERT INTO `acad_grupo` VALUES ('77', 'Único', '8', '5', '');
INSERT INTO `acad_grupo` VALUES ('78', 'Único', '8', '6', '');

-- ----------------------------
-- Table structure for acad_grupo_carrera
-- ----------------------------
DROP TABLE IF EXISTS `acad_grupo_carrera`;
CREATE TABLE `acad_grupo_carrera` (
  `ID_GRUPO_CARRERA` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE_GRUPO_CARRERA` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_GRUPO_CARRERA`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of acad_grupo_carrera
-- ----------------------------
INSERT INTO `acad_grupo_carrera` VALUES ('10', 'LENDAN');

-- ----------------------------
-- Table structure for acad_inscripcion
-- ----------------------------
DROP TABLE IF EXISTS `acad_inscripcion`;
CREATE TABLE `acad_inscripcion` (
  `ID_INSCRIPCION` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PERSONA` int(11) NOT NULL,
  `ID_CARRERA` int(11) NOT NULL,
  `ID_NIVEL` int(11) NOT NULL,
  `ID_PERIODO_ACADEMICO` int(11) NOT NULL,
  `ID_MODALIDAD` int(11) NOT NULL,
  `FECHA` date NOT NULL,
  `FUE_MATRICULADO` bit(1) DEFAULT NULL,
  `OBSERVACIONES` varchar(100) DEFAULT NULL,
  `PAGADA` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`ID_INSCRIPCION`),
  KEY `ID_PERSONA` (`ID_PERSONA`),
  KEY `ID_CARRERA` (`ID_CARRERA`),
  KEY `ID_NIVEL` (`ID_NIVEL`),
  KEY `ID_PERIODO_ACADEMICO` (`ID_PERIODO_ACADEMICO`),
  KEY `ID_MODALIDAD` (`ID_MODALIDAD`),
  CONSTRAINT `acad_inscripcion_ibfk_1` FOREIGN KEY (`ID_PERSONA`) REFERENCES `tab_personas` (`ID_PERSONA`) ON UPDATE NO ACTION,
  CONSTRAINT `acad_inscripcion_ibfk_2` FOREIGN KEY (`ID_CARRERA`) REFERENCES `acad_carrera` (`ID_CARRERA`) ON UPDATE NO ACTION,
  CONSTRAINT `acad_inscripcion_ibfk_3` FOREIGN KEY (`ID_NIVEL`) REFERENCES `acad_nivel` (`ID_NIVEL`) ON UPDATE NO ACTION,
  CONSTRAINT `acad_inscripcion_ibfk_4` FOREIGN KEY (`ID_PERIODO_ACADEMICO`) REFERENCES `acad_periodo_academico` (`ID_PERIODO_ACADEMICO`) ON UPDATE NO ACTION,
  CONSTRAINT `acad_inscripcion_ibfk_5` FOREIGN KEY (`ID_MODALIDAD`) REFERENCES `acad_modalidad` (`ID_MODALIDAD`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of acad_inscripcion
-- ----------------------------
INSERT INTO `acad_inscripcion` VALUES ('6', '45', '8', '1', '1', '4', '2016-04-20', null, null, '\0');
INSERT INTO `acad_inscripcion` VALUES ('7', '46', '7', '1', '1', '4', '2016-04-20', null, null, '\0');
INSERT INTO `acad_inscripcion` VALUES ('8', '17', '5', '1', '1', '4', '2016-04-22', null, null, '\0');
INSERT INTO `acad_inscripcion` VALUES ('9', '43', '5', '1', '1', '4', '2016-04-20', null, null, '\0');
INSERT INTO `acad_inscripcion` VALUES ('10', '29', '5', '1', '1', '4', '2016-04-20', null, null, '\0');
INSERT INTO `acad_inscripcion` VALUES ('11', '22', '5', '1', '1', '4', '2016-04-20', null, null, '\0');
INSERT INTO `acad_inscripcion` VALUES ('12', '40', '5', '1', '1', '4', '2016-04-20', null, null, '\0');
INSERT INTO `acad_inscripcion` VALUES ('13', '39', '5', '1', '1', '4', '2016-04-20', null, null, '\0');
INSERT INTO `acad_inscripcion` VALUES ('14', '18', '5', '1', '1', '4', '2016-04-20', null, null, '\0');
INSERT INTO `acad_inscripcion` VALUES ('15', '44', '5', '1', '1', '4', '2016-05-25', null, null, '');
INSERT INTO `acad_inscripcion` VALUES ('16', '42', '5', '1', '1', '4', '2016-04-20', null, null, '\0');
INSERT INTO `acad_inscripcion` VALUES ('17', '23', '7', '1', '1', '4', '2016-04-20', null, null, '\0');
INSERT INTO `acad_inscripcion` VALUES ('18', '19', '7', '1', '1', '4', '2016-04-20', null, null, '\0');
INSERT INTO `acad_inscripcion` VALUES ('19', '37', '7', '1', '1', '4', '2016-04-20', null, null, '\0');
INSERT INTO `acad_inscripcion` VALUES ('20', '32', '7', '1', '1', '4', '2016-04-20', null, null, '\0');
INSERT INTO `acad_inscripcion` VALUES ('21', '16', '7', '1', '1', '4', '2016-04-20', null, null, '\0');
INSERT INTO `acad_inscripcion` VALUES ('22', '27', '7', '1', '1', '4', '2016-04-20', null, null, '\0');
INSERT INTO `acad_inscripcion` VALUES ('23', '31', '7', '1', '1', '4', '2016-04-20', null, null, '\0');
INSERT INTO `acad_inscripcion` VALUES ('24', '41', '7', '1', '1', '4', '2016-04-20', null, null, '\0');
INSERT INTO `acad_inscripcion` VALUES ('25', '15', '7', '1', '1', '4', '2016-04-20', null, null, '\0');
INSERT INTO `acad_inscripcion` VALUES ('26', '21', '7', '1', '1', '4', '2016-04-20', null, null, '\0');
INSERT INTO `acad_inscripcion` VALUES ('28', '5', '6', '1', '1', '4', '2016-04-20', null, null, '');
INSERT INTO `acad_inscripcion` VALUES ('29', '6', '6', '1', '1', '4', '2016-04-20', null, null, '\0');
INSERT INTO `acad_inscripcion` VALUES ('30', '7', '6', '1', '1', '4', '2016-04-20', null, null, '\0');
INSERT INTO `acad_inscripcion` VALUES ('31', '8', '6', '1', '1', '4', '2016-04-20', null, null, '\0');
INSERT INTO `acad_inscripcion` VALUES ('32', '9', '8', '1', '1', '4', '2016-04-20', null, null, '\0');
INSERT INTO `acad_inscripcion` VALUES ('33', '10', '8', '1', '1', '4', '2016-04-20', null, null, '\0');
INSERT INTO `acad_inscripcion` VALUES ('34', '11', '6', '1', '1', '4', '2016-04-20', null, null, '\0');
INSERT INTO `acad_inscripcion` VALUES ('35', '12', '6', '1', '1', '4', '2016-04-20', null, null, '\0');
INSERT INTO `acad_inscripcion` VALUES ('36', '13', '6', '1', '1', '4', '2016-04-20', null, null, '\0');
INSERT INTO `acad_inscripcion` VALUES ('37', '14', '6', '1', '1', '4', '2016-04-20', null, null, '\0');
INSERT INTO `acad_inscripcion` VALUES ('38', '25', '7', '1', '1', '4', '2016-04-20', null, null, '\0');
INSERT INTO `acad_inscripcion` VALUES ('39', '26', '7', '1', '1', '4', '2016-04-20', null, null, '');
INSERT INTO `acad_inscripcion` VALUES ('40', '20', '7', '1', '1', '4', '2016-04-20', null, null, '\0');
INSERT INTO `acad_inscripcion` VALUES ('41', '30', '5', '1', '1', '4', '2016-04-20', null, null, '\0');
INSERT INTO `acad_inscripcion` VALUES ('42', '33', '7', '1', '1', '4', '2016-04-20', null, null, '\0');
INSERT INTO `acad_inscripcion` VALUES ('43', '34', '7', '1', '1', '4', '2016-05-02', null, null, '\0');
INSERT INTO `acad_inscripcion` VALUES ('44', '35', '6', '1', '1', '4', '2016-04-20', null, null, '\0');
INSERT INTO `acad_inscripcion` VALUES ('45', '36', '6', '1', '1', '4', '2016-04-20', null, null, '\0');
INSERT INTO `acad_inscripcion` VALUES ('46', '38', '7', '1', '1', '4', '2016-04-20', null, null, '\0');
INSERT INTO `acad_inscripcion` VALUES ('47', '48', '6', '1', '1', '4', '2016-04-20', null, null, '\0');
INSERT INTO `acad_inscripcion` VALUES ('48', '49', '8', '1', '1', '4', '2016-04-20', null, null, '\0');
INSERT INTO `acad_inscripcion` VALUES ('49', '50', '6', '1', '1', '4', '2016-04-20', null, null, '\0');
INSERT INTO `acad_inscripcion` VALUES ('50', '4', '6', '1', '1', '4', '2016-04-20', null, null, '\0');
INSERT INTO `acad_inscripcion` VALUES ('51', '85', '5', '1', '1', '4', '2016-04-21', null, null, '\0');
INSERT INTO `acad_inscripcion` VALUES ('52', '88', '5', '1', '1', '4', '2016-04-27', null, null, '\0');
INSERT INTO `acad_inscripcion` VALUES ('53', '24', '7', '1', '1', '4', '2016-04-22', null, null, '\0');
INSERT INTO `acad_inscripcion` VALUES ('54', '102', '7', '1', '1', '4', '2016-04-22', null, null, '\0');
INSERT INTO `acad_inscripcion` VALUES ('55', '103', '7', '1', '1', '4', '2016-04-22', null, null, '\0');
INSERT INTO `acad_inscripcion` VALUES ('56', '116', '8', '1', '1', '4', '2016-04-27', null, null, '\0');
INSERT INTO `acad_inscripcion` VALUES ('57', '117', '6', '1', '1', '4', '2016-04-27', null, null, '\0');
INSERT INTO `acad_inscripcion` VALUES ('58', '124', '6', '1', '1', '4', '2016-04-29', null, null, '\0');

-- ----------------------------
-- Table structure for acad_materia
-- ----------------------------
DROP TABLE IF EXISTS `acad_materia`;
CREATE TABLE `acad_materia` (
  `ID_MATERIA` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_MATERIA`)
) ENGINE=InnoDB AUTO_INCREMENT=152 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of acad_materia
-- ----------------------------
INSERT INTO `acad_materia` VALUES ('2', 'LENGUAJE Y COMUNICACIÓN');
INSERT INTO `acad_materia` VALUES ('3', 'INGLÉS I');
INSERT INTO `acad_materia` VALUES ('4', 'ADMINISTRACIÓN Y GESTIÓN');
INSERT INTO `acad_materia` VALUES ('5', 'ANATOMÍA,FILOSOFÍA Y PATOLOGÍA HUMANAS');
INSERT INTO `acad_materia` VALUES ('6', 'COSMETOLOGÍA APLICADA A LA ESTÉTICA INTEGRAL');
INSERT INTO `acad_materia` VALUES ('7', 'TECNICAS DE MAQUILLAJE ');
INSERT INTO `acad_materia` VALUES ('8', 'DEPILACIÓN MECÁNICA Y DEFINITIVA');
INSERT INTO `acad_materia` VALUES ('9', 'EXPRESIÓN GRÁFICA Y VISAJISMO');
INSERT INTO `acad_materia` VALUES ('10', 'DIAGNÓSTICO Y PROTOCOLO');
INSERT INTO `acad_materia` VALUES ('11', 'MANICURA Y PEDICURA');
INSERT INTO `acad_materia` VALUES ('12', 'LEGISLACIÓN LABORAL');
INSERT INTO `acad_materia` VALUES ('13', 'INGLÉS II');
INSERT INTO `acad_materia` VALUES ('14', 'ANATOMÍA,FILOSOFÍA Y PATOLOGÍA HUMANAS');
INSERT INTO `acad_materia` VALUES ('15', 'COSMETOLOGÍA APLICADA A LA ESTÉTICA INTEGRAL');
INSERT INTO `acad_materia` VALUES ('16', 'DIAGNÓSTICO Y PROTOCOLO');
INSERT INTO `acad_materia` VALUES ('17', 'ELECTROESTÉTICA');
INSERT INTO `acad_materia` VALUES ('18', 'MASAJE');
INSERT INTO `acad_materia` VALUES ('19', 'TÉCNICAS DE MAQUILLAJE');
INSERT INTO `acad_materia` VALUES ('20', 'PROMOCIÓN Y VENTAS DE PRODUCTOS Y SERVICIOS');
INSERT INTO `acad_materia` VALUES ('21', 'INGLÉS III');
INSERT INTO `acad_materia` VALUES ('22', 'DRENAJE LINFÁTICO MANUAL');
INSERT INTO `acad_materia` VALUES ('23', 'ELECTROESTÉTICA');
INSERT INTO `acad_materia` VALUES ('24', 'DIAGNÓSTICO Y PROTOCOLO');
INSERT INTO `acad_materia` VALUES ('25', 'FORMACIÓN EN EL CENTRO DE TRABAJO');
INSERT INTO `acad_materia` VALUES ('26', 'NUTRICIÓN');
INSERT INTO `acad_materia` VALUES ('27', 'ESTÉTICA HIDROTERMAL');
INSERT INTO `acad_materia` VALUES ('28', 'ETIQUETA Y PROTOCOLO');
INSERT INTO `acad_materia` VALUES ('29', 'INGLÉS IV');
INSERT INTO `acad_materia` VALUES ('30', 'INFORMÁTICA');
INSERT INTO `acad_materia` VALUES ('31', 'TUTORÍA PRÁCTICAS PROYECTO DE TITULACIÓN');
INSERT INTO `acad_materia` VALUES ('32', 'PRÁCTICAS PRE-PROFESIONALES');
INSERT INTO `acad_materia` VALUES ('33', 'LENGUAJE Y COMUNICACIÓN');
INSERT INTO `acad_materia` VALUES ('34', 'INGLÉS I');
INSERT INTO `acad_materia` VALUES ('35', 'ADMINISTRACIÓN Y GESTIÓN');
INSERT INTO `acad_materia` VALUES ('36', 'ANATOMÍA,FILOSOFÍA Y PATOLOGÍA HUMANAS');
INSERT INTO `acad_materia` VALUES ('37', 'COSMETOLOGÍA APLICADA A LA PELUQUERÍA');
INSERT INTO `acad_materia` VALUES ('38', 'TECNICAS DE MAQUILLAJE ');
INSERT INTO `acad_materia` VALUES ('39', 'PELUQUERIA');
INSERT INTO `acad_materia` VALUES ('40', 'EXPRESIÓN GRÁFICA Y VISAJISMO');
INSERT INTO `acad_materia` VALUES ('41', 'PROMOCIÓN Y VENTA DE PRODUCTOS Y SERVICIOS ');
INSERT INTO `acad_materia` VALUES ('42', 'INGLÉS II');
INSERT INTO `acad_materia` VALUES ('43', 'LEGISLACIÓN LABORAL');
INSERT INTO `acad_materia` VALUES ('44', 'PELUQUERÍA, CORTES Y AMOLDADOS, PERMANENTES');
INSERT INTO `acad_materia` VALUES ('45', 'TÉCNICAS DE MAQUILLAJE');
INSERT INTO `acad_materia` VALUES ('46', 'DEPILACIÓN MECÁNICA');
INSERT INTO `acad_materia` VALUES ('47', 'MANICURA Y PEDICURA');
INSERT INTO `acad_materia` VALUES ('48', 'ATENCIÓN AL CLIENTE');
INSERT INTO `acad_materia` VALUES ('49', 'INGLÉS III');
INSERT INTO `acad_materia` VALUES ('50', 'PELUQUERÍA Y COLORIMETRÍA');
INSERT INTO `acad_materia` VALUES ('51', 'MORFOLOGÍA');
INSERT INTO `acad_materia` VALUES ('52', 'FORMACIÓN EN EL CENTRO DE TRABAJO');
INSERT INTO `acad_materia` VALUES ('53', 'TRATAMIENTOS CAPILARES');
INSERT INTO `acad_materia` VALUES ('54', 'DISEÑO DE UÑAS');
INSERT INTO `acad_materia` VALUES ('55', 'ETIQUETA Y PROTOCOLO');
INSERT INTO `acad_materia` VALUES ('56', 'INGLÉS IV');
INSERT INTO `acad_materia` VALUES ('57', 'INFORMÁTICA');
INSERT INTO `acad_materia` VALUES ('58', 'TUTORIÍA PRACTICAS ');
INSERT INTO `acad_materia` VALUES ('59', 'PROYECTO DE TITULACIÓN');
INSERT INTO `acad_materia` VALUES ('60', 'PRÁCTICAS PREPROFESIONALES');
INSERT INTO `acad_materia` VALUES ('61', 'LENGUAJE Y COMUNICACIÓN');
INSERT INTO `acad_materia` VALUES ('62', 'INGLÉS I');
INSERT INTO `acad_materia` VALUES ('63', 'ADMINISTRACIÓN Y GESTIÓN');
INSERT INTO `acad_materia` VALUES ('64', 'ANATOMÍA,FILOSOFÍA Y PATOLOGÍA HUMANAS');
INSERT INTO `acad_materia` VALUES ('65', 'COSMETOLOGÍA APLICADA A LA PELUQUERÍA');
INSERT INTO `acad_materia` VALUES ('66', 'TECNICAS DE MAQUILLAJE ');
INSERT INTO `acad_materia` VALUES ('67', 'PELUQUERIA');
INSERT INTO `acad_materia` VALUES ('68', 'EXPRESIÓN GRÁFICA Y VISAJISMO');
INSERT INTO `acad_materia` VALUES ('69', 'PROMOCIÓN Y VENTA DE PRODUCTOS Y SERVICIOS ');
INSERT INTO `acad_materia` VALUES ('70', 'INGLÉS II');
INSERT INTO `acad_materia` VALUES ('71', 'LEGISLACIÓN LABORAL');
INSERT INTO `acad_materia` VALUES ('72', 'PELUQUERÍA, CORTES Y AMOLDADOS, PERMANENTES');
INSERT INTO `acad_materia` VALUES ('73', 'TÉCNICAS DE MAQUILLAJE');
INSERT INTO `acad_materia` VALUES ('74', 'DEPILACIÓN MECÁNICA');
INSERT INTO `acad_materia` VALUES ('75', 'MANICURA Y PEDICURA');
INSERT INTO `acad_materia` VALUES ('76', 'ATENCIÓN AL CLIENTE');
INSERT INTO `acad_materia` VALUES ('77', 'INGLÉS III');
INSERT INTO `acad_materia` VALUES ('78', 'PELUQUERÍA Y COLORIMETRÍA');
INSERT INTO `acad_materia` VALUES ('79', 'MORFOLOGÍA');
INSERT INTO `acad_materia` VALUES ('80', 'FORMACIÓN EN EL CENTRO DE TRABAJO');
INSERT INTO `acad_materia` VALUES ('81', 'TRATAMIENTOS CAPILARES');
INSERT INTO `acad_materia` VALUES ('82', 'DISEÑO DE UÑAS');
INSERT INTO `acad_materia` VALUES ('83', 'ETIQUETA Y PROTOCOLO');
INSERT INTO `acad_materia` VALUES ('84', 'INGLÉS IV');
INSERT INTO `acad_materia` VALUES ('85', 'INFORMÁTICA');
INSERT INTO `acad_materia` VALUES ('86', 'TUTORIÍA PRACTICAS ');
INSERT INTO `acad_materia` VALUES ('87', 'PROYECTO DE TITULACIÓN');
INSERT INTO `acad_materia` VALUES ('88', 'PRÁCTICAS PREPROFESIONALES');
INSERT INTO `acad_materia` VALUES ('89', 'COACHING');
INSERT INTO `acad_materia` VALUES ('90', 'TEORÍA DEL COLOR');
INSERT INTO `acad_materia` VALUES ('91', 'HISTORIA DE LA MODA');
INSERT INTO `acad_materia` VALUES ('92', 'ASESORÍA DE IMAGEN I');
INSERT INTO `acad_materia` VALUES ('93', 'ESTILISMO EN EL VESTIR');
INSERT INTO `acad_materia` VALUES ('94', 'VISAJISMO');
INSERT INTO `acad_materia` VALUES ('95', 'NUTRICIÓN');
INSERT INTO `acad_materia` VALUES ('96', 'FOTOGRAFÍA');
INSERT INTO `acad_materia` VALUES ('97', 'INFORMÁTICA');
INSERT INTO `acad_materia` VALUES ('98', 'ASESORÍA DE IMAGEN II');
INSERT INTO `acad_materia` VALUES ('99', 'ASESORÍA CAMBIOS DE CABELLO');
INSERT INTO `acad_materia` VALUES ('100', 'ASESORÍA DE MAQUILLAJE');
INSERT INTO `acad_materia` VALUES ('101', 'PROTOCOLO Y USOS SOCIALES ');
INSERT INTO `acad_materia` VALUES ('102', 'ENOLOGÍA');
INSERT INTO `acad_materia` VALUES ('103', 'PROYECTO DE TITULACIÓN');
INSERT INTO `acad_materia` VALUES ('104', 'PRÁCTICAS PRE-PROFESIONALES');
INSERT INTO `acad_materia` VALUES ('105', 'LENGUAJE Y COMUNICACIÓN');
INSERT INTO `acad_materia` VALUES ('106', 'INGLÉS I');
INSERT INTO `acad_materia` VALUES ('107', 'ADMINISTRACIÓN Y GESTIÓN');
INSERT INTO `acad_materia` VALUES ('108', 'ANATOMÍA,FILOSOFÍA Y PATOLOGÍA HUMANAS');
INSERT INTO `acad_materia` VALUES ('109', 'COSMETOLOGÍA APLICADA A LA ESTÉTICA INTEGRAL');
INSERT INTO `acad_materia` VALUES ('110', 'TECNICAS DE MAQUILLAJE ');
INSERT INTO `acad_materia` VALUES ('111', 'DEPILACIÓN MECÁNICA Y DEFINITIVA');
INSERT INTO `acad_materia` VALUES ('112', 'EXPRESIÓN GRÁFICA Y VISAJISMO');
INSERT INTO `acad_materia` VALUES ('113', 'DIAGNÓSTICO Y PROTOCOLO');
INSERT INTO `acad_materia` VALUES ('114', 'MANICURA Y PEDICURA');
INSERT INTO `acad_materia` VALUES ('115', 'LEGISLACIÓN LABORAL');
INSERT INTO `acad_materia` VALUES ('116', 'INGLÉS II');
INSERT INTO `acad_materia` VALUES ('117', 'ANATOMÍA,FILOSOFÍA Y PATOLOGÍA HUMANAS');
INSERT INTO `acad_materia` VALUES ('118', 'COSMETOLOGÍA APLICADA A LA ESTÉTICA INTEGRAL');
INSERT INTO `acad_materia` VALUES ('119', 'DIAGNÓSTICO Y PROTOCOLO');
INSERT INTO `acad_materia` VALUES ('120', 'ELECTROESTÉTICA');
INSERT INTO `acad_materia` VALUES ('121', 'MASAJE');
INSERT INTO `acad_materia` VALUES ('122', 'TÉCNICAS DE MAQUILLAJE');
INSERT INTO `acad_materia` VALUES ('123', 'PROMOCIÓN Y VENTAS DE PRODUCTOS Y SERVICIOS');
INSERT INTO `acad_materia` VALUES ('124', 'INGLÉS III');
INSERT INTO `acad_materia` VALUES ('125', 'DRENAJE LINFÁTICO MANUAL');
INSERT INTO `acad_materia` VALUES ('126', 'ELECTROESTÉTICA');
INSERT INTO `acad_materia` VALUES ('127', 'DIAGNÓSTICO Y PROTOCOLO');
INSERT INTO `acad_materia` VALUES ('128', 'FORMACIÓN EN EL CENTRO DE TRABAJO');
INSERT INTO `acad_materia` VALUES ('129', 'NUTRICIÓN');
INSERT INTO `acad_materia` VALUES ('130', 'ESTÉTICA HIDROTERMAL');
INSERT INTO `acad_materia` VALUES ('131', 'ETIQUETA Y PROTOCOLO');
INSERT INTO `acad_materia` VALUES ('132', 'INGLÉS IV');
INSERT INTO `acad_materia` VALUES ('133', 'INFORMÁTICA');
INSERT INTO `acad_materia` VALUES ('134', 'TUTORÍA PRÁCTICAS PROYECTO DE TITULACIÓN');
INSERT INTO `acad_materia` VALUES ('135', 'PRÁCTICAS PRE-PROFESIONALES');
INSERT INTO `acad_materia` VALUES ('136', 'COACHING');
INSERT INTO `acad_materia` VALUES ('137', 'TEORÍA DEL COLOR');
INSERT INTO `acad_materia` VALUES ('138', 'HISTORIA DE LA MODA');
INSERT INTO `acad_materia` VALUES ('139', 'ASESORÍA DE IMAGEN I');
INSERT INTO `acad_materia` VALUES ('140', 'ESTILISMO EN EL VESTIR');
INSERT INTO `acad_materia` VALUES ('141', 'VISAJISMO');
INSERT INTO `acad_materia` VALUES ('142', 'NUTRICIÓN');
INSERT INTO `acad_materia` VALUES ('143', 'FOTOGRAFÍA');
INSERT INTO `acad_materia` VALUES ('144', 'INFORMÁTICA');
INSERT INTO `acad_materia` VALUES ('145', 'ASESORÍA DE IMAGEN II');
INSERT INTO `acad_materia` VALUES ('146', 'ASESORÍA CAMBIOS DE CABELLO');
INSERT INTO `acad_materia` VALUES ('147', 'ASESORÍA DE MAQUILLAJE');
INSERT INTO `acad_materia` VALUES ('148', 'PROTOCOLO Y USOS SOCIALES ');
INSERT INTO `acad_materia` VALUES ('149', 'ENOLOGÍA');
INSERT INTO `acad_materia` VALUES ('150', 'PROYECTO DE TITULACIÓN');
INSERT INTO `acad_materia` VALUES ('151', 'PRÁCTICAS PRE-PROFESIONALES');

-- ----------------------------
-- Table structure for acad_matricula
-- ----------------------------
DROP TABLE IF EXISTS `acad_matricula`;
CREATE TABLE `acad_matricula` (
  `ID_MATRICULA` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PERSONA` int(11) NOT NULL,
  `ID_CARRERA` int(11) NOT NULL,
  `ID_NIVEL` int(11) NOT NULL,
  `ID_PERIODO_ACADEMICO` int(11) NOT NULL,
  `ID_MODALIDAD` int(11) NOT NULL,
  `FECHA` date NOT NULL,
  `NUMERO` varchar(100) NOT NULL,
  `OBSERVACIONES` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`ID_MATRICULA`),
  KEY `ID_PERSONA` (`ID_PERSONA`),
  KEY `ID_CARRERA` (`ID_CARRERA`),
  KEY `ID_NIVEL` (`ID_NIVEL`),
  KEY `ID_PERIODO_ACADEMICO` (`ID_PERIODO_ACADEMICO`),
  KEY `ID_MODALIDAD` (`ID_MODALIDAD`),
  CONSTRAINT `acad_matricula_ibfk_1` FOREIGN KEY (`ID_PERSONA`) REFERENCES `tab_personas` (`ID_PERSONA`) ON UPDATE NO ACTION,
  CONSTRAINT `acad_matricula_ibfk_2` FOREIGN KEY (`ID_CARRERA`) REFERENCES `acad_carrera` (`ID_CARRERA`) ON UPDATE NO ACTION,
  CONSTRAINT `acad_matricula_ibfk_3` FOREIGN KEY (`ID_NIVEL`) REFERENCES `acad_nivel` (`ID_NIVEL`) ON UPDATE NO ACTION,
  CONSTRAINT `acad_matricula_ibfk_4` FOREIGN KEY (`ID_PERIODO_ACADEMICO`) REFERENCES `acad_periodo_academico` (`ID_PERIODO_ACADEMICO`) ON UPDATE NO ACTION,
  CONSTRAINT `acad_matricula_ibfk_5` FOREIGN KEY (`ID_MODALIDAD`) REFERENCES `acad_modalidad` (`ID_MODALIDAD`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of acad_matricula
-- ----------------------------
INSERT INTO `acad_matricula` VALUES ('38', '29', '5', '1', '1', '4', '2016-05-01', '5160', null);
INSERT INTO `acad_matricula` VALUES ('39', '17', '5', '1', '1', '4', '2016-05-01', '5161', null);
INSERT INTO `acad_matricula` VALUES ('40', '18', '5', '1', '1', '4', '2016-05-03', '5162', null);
INSERT INTO `acad_matricula` VALUES ('41', '85', '5', '1', '1', '4', '2016-05-01', '5163', null);
INSERT INTO `acad_matricula` VALUES ('42', '42', '5', '1', '1', '4', '2016-05-01', '5164', null);
INSERT INTO `acad_matricula` VALUES ('43', '46', '7', '1', '1', '4', '2016-05-01', '5165', null);
INSERT INTO `acad_matricula` VALUES ('44', '22', '5', '1', '1', '4', '2016-05-01', '5166', null);
INSERT INTO `acad_matricula` VALUES ('45', '41', '7', '1', '1', '4', '2016-05-01', '5167', null);
INSERT INTO `acad_matricula` VALUES ('46', '40', '5', '1', '1', '4', '2016-05-01', '5168', null);
INSERT INTO `acad_matricula` VALUES ('47', '30', '5', '1', '1', '4', '2016-05-01', '5169', null);
INSERT INTO `acad_matricula` VALUES ('48', '88', '5', '1', '1', '4', '2016-05-01', '5170', null);
INSERT INTO `acad_matricula` VALUES ('49', '39', '5', '1', '1', '4', '2016-05-01', '5171', null);
INSERT INTO `acad_matricula` VALUES ('50', '43', '5', '1', '1', '4', '2016-05-01', '5172', null);
INSERT INTO `acad_matricula` VALUES ('51', '15', '7', '1', '1', '4', '2016-05-01', '5173', null);
INSERT INTO `acad_matricula` VALUES ('52', '38', '7', '1', '1', '4', '2016-05-01', '5174', null);
INSERT INTO `acad_matricula` VALUES ('53', '37', '7', '1', '1', '4', '2016-05-01', '5175', null);
INSERT INTO `acad_matricula` VALUES ('54', '27', '7', '1', '1', '4', '2016-05-01', '5176', null);
INSERT INTO `acad_matricula` VALUES ('55', '24', '7', '1', '1', '4', '2016-05-01', '5177', null);
INSERT INTO `acad_matricula` VALUES ('56', '25', '7', '1', '1', '4', '2016-05-01', '5178', null);
INSERT INTO `acad_matricula` VALUES ('57', '33', '7', '1', '1', '4', '2016-05-01', '5179', null);
INSERT INTO `acad_matricula` VALUES ('58', '23', '7', '1', '1', '4', '2016-05-01', '5180', null);
INSERT INTO `acad_matricula` VALUES ('59', '19', '7', '1', '1', '4', '2016-05-01', '5181', null);
INSERT INTO `acad_matricula` VALUES ('60', '102', '7', '1', '1', '4', '2016-05-01', '5182', null);
INSERT INTO `acad_matricula` VALUES ('61', '103', '7', '1', '1', '4', '2016-05-01', '5183', null);
INSERT INTO `acad_matricula` VALUES ('62', '32', '7', '1', '1', '4', '2016-05-01', '5184', null);
INSERT INTO `acad_matricula` VALUES ('63', '26', '7', '1', '1', '4', '2016-05-01', '5185', null);
INSERT INTO `acad_matricula` VALUES ('64', '21', '7', '1', '1', '4', '2016-05-01', '5186', null);
INSERT INTO `acad_matricula` VALUES ('65', '31', '7', '1', '1', '4', '2016-05-01', '5187', null);
INSERT INTO `acad_matricula` VALUES ('66', '6', '6', '1', '1', '4', '2016-05-01', '5188', null);
INSERT INTO `acad_matricula` VALUES ('67', '9', '8', '1', '1', '4', '2016-05-01', '5189', null);
INSERT INTO `acad_matricula` VALUES ('68', '11', '6', '1', '1', '4', '2016-05-01', '5190', null);
INSERT INTO `acad_matricula` VALUES ('69', '35', '6', '1', '1', '4', '2016-05-03', '5191', null);
INSERT INTO `acad_matricula` VALUES ('70', '8', '6', '1', '1', '4', '2016-05-01', '5192', null);
INSERT INTO `acad_matricula` VALUES ('71', '48', '6', '1', '1', '4', '2016-05-01', '5193', null);
INSERT INTO `acad_matricula` VALUES ('72', '7', '6', '1', '1', '4', '2016-05-01', '5194', null);
INSERT INTO `acad_matricula` VALUES ('73', '12', '6', '1', '1', '4', '2016-05-01', '5195', null);
INSERT INTO `acad_matricula` VALUES ('74', '4', '8', '1', '1', '4', '2016-05-24', '5196', '');
INSERT INTO `acad_matricula` VALUES ('75', '49', '8', '1', '1', '4', '2016-05-01', '5197', null);
INSERT INTO `acad_matricula` VALUES ('76', '14', '6', '1', '1', '4', '2016-05-01', '5198', null);
INSERT INTO `acad_matricula` VALUES ('77', '5', '6', '1', '1', '4', '2016-05-01', '5199', null);
INSERT INTO `acad_matricula` VALUES ('78', '10', '8', '1', '1', '4', '2016-05-01', '5200', null);
INSERT INTO `acad_matricula` VALUES ('79', '13', '6', '1', '1', '4', '2016-05-01', '5201', null);
INSERT INTO `acad_matricula` VALUES ('80', '36', '6', '1', '1', '4', '2016-05-01', '5202', null);
INSERT INTO `acad_matricula` VALUES ('81', '20', '7', '1', '1', '4', '2016-05-01', '5203', null);
INSERT INTO `acad_matricula` VALUES ('82', '16', '7', '1', '1', '4', '2016-05-01', '5204', null);
INSERT INTO `acad_matricula` VALUES ('83', '45', '8', '1', '1', '4', '2016-05-01', '5205', null);
INSERT INTO `acad_matricula` VALUES ('84', '34', '7', '1', '1', '4', '2016-05-02', '5206', null);
INSERT INTO `acad_matricula` VALUES ('85', '116', '8', '1', '1', '4', '2016-05-02', '5207', null);
INSERT INTO `acad_matricula` VALUES ('86', '117', '6', '1', '1', '4', '2016-05-02', '5208', null);
INSERT INTO `acad_matricula` VALUES ('87', '89', '5', '2', '1', '4', '2016-05-02', '5209', null);
INSERT INTO `acad_matricula` VALUES ('88', '69', '5', '2', '1', '4', '2016-05-02', '5210', null);
INSERT INTO `acad_matricula` VALUES ('89', '91', '5', '2', '1', '4', '2016-05-02', '5211', null);
INSERT INTO `acad_matricula` VALUES ('90', '94', '5', '2', '1', '4', '2016-05-02', '5212', null);
INSERT INTO `acad_matricula` VALUES ('91', '93', '5', '2', '1', '4', '2016-05-02', '5213', null);
INSERT INTO `acad_matricula` VALUES ('92', '95', '5', '2', '1', '4', '2016-05-02', '5214', null);
INSERT INTO `acad_matricula` VALUES ('93', '115', '5', '2', '1', '4', '2016-05-02', '5215', null);
INSERT INTO `acad_matricula` VALUES ('94', '99', '5', '2', '1', '4', '2016-05-02', '5216', null);
INSERT INTO `acad_matricula` VALUES ('95', '90', '7', '2', '1', '4', '2016-05-02', '5217', null);
INSERT INTO `acad_matricula` VALUES ('96', '92', '7', '2', '1', '4', '2016-05-02', '5218', null);
INSERT INTO `acad_matricula` VALUES ('97', '128', '5', '2', '1', '4', '2016-05-03', '5219', null);
INSERT INTO `acad_matricula` VALUES ('98', '129', '7', '2', '1', '4', '2016-05-03', '5220', null);
INSERT INTO `acad_matricula` VALUES ('99', '130', '5', '2', '1', '4', '2016-05-03', '5221', null);
INSERT INTO `acad_matricula` VALUES ('100', '124', '6', '1', '1', '4', '2016-05-10', '5222', null);
INSERT INTO `acad_matricula` VALUES ('101', '44', '5', '1', '1', '4', '2016-05-25', '5223', '');

-- ----------------------------
-- Table structure for acad_modalidad
-- ----------------------------
DROP TABLE IF EXISTS `acad_modalidad`;
CREATE TABLE `acad_modalidad` (
  `ID_MODALIDAD` int(11) NOT NULL AUTO_INCREMENT,
  `MODALIDAD` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_MODALIDAD`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of acad_modalidad
-- ----------------------------
INSERT INTO `acad_modalidad` VALUES ('4', 'PRESENCIAL');

-- ----------------------------
-- Table structure for acad_nivel
-- ----------------------------
DROP TABLE IF EXISTS `acad_nivel`;
CREATE TABLE `acad_nivel` (
  `ID_NIVEL` int(11) NOT NULL AUTO_INCREMENT,
  `NIVEL` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_NIVEL`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of acad_nivel
-- ----------------------------
INSERT INTO `acad_nivel` VALUES ('1', 'PRIMERO');
INSERT INTO `acad_nivel` VALUES ('2', 'SEGUNDO');
INSERT INTO `acad_nivel` VALUES ('3', 'TERCERO');
INSERT INTO `acad_nivel` VALUES ('4', 'CUARTO');
INSERT INTO `acad_nivel` VALUES ('5', 'QUINTO');
INSERT INTO `acad_nivel` VALUES ('6', 'SEXTO');

-- ----------------------------
-- Table structure for acad_parametro
-- ----------------------------
DROP TABLE IF EXISTS `acad_parametro`;
CREATE TABLE `acad_parametro` (
  `ID_PARAMETRO` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(100) NOT NULL,
  `VALOR` decimal(11,0) NOT NULL,
  `DESCRIPCION` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID_PARAMETRO`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of acad_parametro
-- ----------------------------
INSERT INTO `acad_parametro` VALUES ('1', 'Nota mínima', '7', 'Nivel normal');
INSERT INTO `acad_parametro` VALUES ('2', 'Nota máxima', '10', 'Nivel normal');
INSERT INTO `acad_parametro` VALUES ('3', 'Número de parciales', '3', 'Nivel normal');
INSERT INTO `acad_parametro` VALUES ('4', 'Nota mínima mayor o igual que', '4', 'Supletorio');
INSERT INTO `acad_parametro` VALUES ('5', 'Nota máxima menor que', '7', 'Supletorio');
INSERT INTO `acad_parametro` VALUES ('6', 'Asistencia mínima', '80', 'Asistencia');
INSERT INTO `acad_parametro` VALUES ('7', 'Promedio de parciales reprueba menor que', '4', 'Reprueba');
INSERT INTO `acad_parametro` VALUES ('8', 'Id periodo activo', '1', null);
INSERT INTO `acad_parametro` VALUES ('9', 'Ultimo número de matrícula', '5224', null);

-- ----------------------------
-- Table structure for acad_periodo_academico
-- ----------------------------
DROP TABLE IF EXISTS `acad_periodo_academico`;
CREATE TABLE `acad_periodo_academico` (
  `ID_PERIODO_ACADEMICO` int(11) NOT NULL AUTO_INCREMENT,
  `FECHA_INICIO` date NOT NULL,
  `FECHA_FIN` date NOT NULL,
  PRIMARY KEY (`ID_PERIODO_ACADEMICO`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of acad_periodo_academico
-- ----------------------------
INSERT INTO `acad_periodo_academico` VALUES ('1', '2016-04-01', '2016-09-01');
INSERT INTO `acad_periodo_academico` VALUES ('2', '2016-10-01', '2017-03-01');

-- ----------------------------
-- Table structure for acad_prerequisito
-- ----------------------------
DROP TABLE IF EXISTS `acad_prerequisito`;
CREATE TABLE `acad_prerequisito` (
  `ID_PREREQUISITO` int(11) NOT NULL AUTO_INCREMENT,
  `ID_CARRERA_MATERIA` int(11) NOT NULL,
  `ID_CARRERA_MATERIA_PREREQUISITO` int(11) NOT NULL,
  PRIMARY KEY (`ID_PREREQUISITO`),
  KEY `ID_CARRERA_MATERIA` (`ID_CARRERA_MATERIA`),
  KEY `ID_CARRERA_MATERIA_PREREQUISITO` (`ID_CARRERA_MATERIA_PREREQUISITO`),
  CONSTRAINT `acad_prerequisito_ibfk_1` FOREIGN KEY (`ID_CARRERA_MATERIA`) REFERENCES `acad_carrera_materia` (`ID_CARRERA_MATERIA`) ON UPDATE NO ACTION,
  CONSTRAINT `acad_prerequisito_ibfk_2` FOREIGN KEY (`ID_CARRERA_MATERIA_PREREQUISITO`) REFERENCES `acad_carrera_materia` (`ID_CARRERA_MATERIA`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=114 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of acad_prerequisito
-- ----------------------------
INSERT INTO `acad_prerequisito` VALUES ('69', '70', '62');
INSERT INTO `acad_prerequisito` VALUES ('70', '72', '65');
INSERT INTO `acad_prerequisito` VALUES ('71', '72', '67');
INSERT INTO `acad_prerequisito` VALUES ('73', '73', '66');
INSERT INTO `acad_prerequisito` VALUES ('74', '82', '75');
INSERT INTO `acad_prerequisito` VALUES ('75', '78', '72');
INSERT INTO `acad_prerequisito` VALUES ('77', '84', '77');
INSERT INTO `acad_prerequisito` VALUES ('78', '97', '85');
INSERT INTO `acad_prerequisito` VALUES ('79', '13', '3');
INSERT INTO `acad_prerequisito` VALUES ('80', '14', '5');
INSERT INTO `acad_prerequisito` VALUES ('81', '14', '6');
INSERT INTO `acad_prerequisito` VALUES ('82', '15', '6');
INSERT INTO `acad_prerequisito` VALUES ('83', '16', '5');
INSERT INTO `acad_prerequisito` VALUES ('84', '16', '6');
INSERT INTO `acad_prerequisito` VALUES ('85', '16', '10');
INSERT INTO `acad_prerequisito` VALUES ('86', '19', '7');
INSERT INTO `acad_prerequisito` VALUES ('88', '24', '16');
INSERT INTO `acad_prerequisito` VALUES ('89', '23', '17');
INSERT INTO `acad_prerequisito` VALUES ('90', '29', '21');
INSERT INTO `acad_prerequisito` VALUES ('91', '116', '106');
INSERT INTO `acad_prerequisito` VALUES ('92', '117', '108');
INSERT INTO `acad_prerequisito` VALUES ('93', '117', '109');
INSERT INTO `acad_prerequisito` VALUES ('94', '118', '109');
INSERT INTO `acad_prerequisito` VALUES ('95', '119', '108');
INSERT INTO `acad_prerequisito` VALUES ('96', '119', '109');
INSERT INTO `acad_prerequisito` VALUES ('97', '119', '113');
INSERT INTO `acad_prerequisito` VALUES ('100', '122', '110');
INSERT INTO `acad_prerequisito` VALUES ('101', '126', '120');
INSERT INTO `acad_prerequisito` VALUES ('102', '125', '116');
INSERT INTO `acad_prerequisito` VALUES ('103', '127', '119');
INSERT INTO `acad_prerequisito` VALUES ('104', '130', '117');
INSERT INTO `acad_prerequisito` VALUES ('105', '132', '124');
INSERT INTO `acad_prerequisito` VALUES ('106', '144', '133');
INSERT INTO `acad_prerequisito` VALUES ('107', '121', '108');
INSERT INTO `acad_prerequisito` VALUES ('108', '121', '113');
INSERT INTO `acad_prerequisito` VALUES ('109', '21', '13');
INSERT INTO `acad_prerequisito` VALUES ('110', '69', '63');
INSERT INTO `acad_prerequisito` VALUES ('111', '77', '70');
INSERT INTO `acad_prerequisito` VALUES ('112', '49', '42');
INSERT INTO `acad_prerequisito` VALUES ('113', '124', '116');

-- ----------------------------
-- Table structure for acad_sede
-- ----------------------------
DROP TABLE IF EXISTS `acad_sede`;
CREATE TABLE `acad_sede` (
  `ID_SEDE` int(11) NOT NULL AUTO_INCREMENT,
  `SEDE` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_SEDE`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of acad_sede
-- ----------------------------
INSERT INTO `acad_sede` VALUES ('2', 'QUITO');
INSERT INTO `acad_sede` VALUES ('3', 'IMBABURA');

-- ----------------------------
-- Table structure for acad_sistema_estudio
-- ----------------------------
DROP TABLE IF EXISTS `acad_sistema_estudio`;
CREATE TABLE `acad_sistema_estudio` (
  `ID_SISTEMA_ESTUDIO` int(11) NOT NULL AUTO_INCREMENT,
  `SISTEMA_ESTUDIO` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_SISTEMA_ESTUDIO`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of acad_sistema_estudio
-- ----------------------------
INSERT INTO `acad_sistema_estudio` VALUES ('8', 'SEMESTRAL');

-- ----------------------------
-- Table structure for acad_tipo_calificacion
-- ----------------------------
DROP TABLE IF EXISTS `acad_tipo_calificacion`;
CREATE TABLE `acad_tipo_calificacion` (
  `ID_TIPO_CALIFICACION` int(11) NOT NULL AUTO_INCREMENT,
  `TIPO` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_TIPO_CALIFICACION`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of acad_tipo_calificacion
-- ----------------------------
INSERT INTO `acad_tipo_calificacion` VALUES ('1', 'COMPONENTE');
INSERT INTO `acad_tipo_calificacion` VALUES ('2', 'FINAL ETAPA');
INSERT INTO `acad_tipo_calificacion` VALUES ('3', 'FINAL PERIODO');
INSERT INTO `acad_tipo_calificacion` VALUES ('4', 'ASISTENCIA');
INSERT INTO `acad_tipo_calificacion` VALUES ('5', 'SUPLETORIO');

-- ----------------------------
-- Table structure for acad_tipo_carrera
-- ----------------------------
DROP TABLE IF EXISTS `acad_tipo_carrera`;
CREATE TABLE `acad_tipo_carrera` (
  `ID_TIPO_CARRERA` int(11) NOT NULL AUTO_INCREMENT,
  `TIPO_CARRERA` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_TIPO_CARRERA`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of acad_tipo_carrera
-- ----------------------------
INSERT INTO `acad_tipo_carrera` VALUES ('6', 'TECNOLOGICO');
INSERT INTO `acad_tipo_carrera` VALUES ('7', 'TECNICO');

-- ----------------------------
-- Table structure for admin_funcionalidades
-- ----------------------------
DROP TABLE IF EXISTS `admin_funcionalidades`;
CREATE TABLE `admin_funcionalidades` (
  `ID_FUNCIONALIDAD` int(11) NOT NULL AUTO_INCREMENT,
  `FUNCIONALIDAD` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `RUTA` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID_FUNCIONALIDAD`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of admin_funcionalidades
-- ----------------------------
INSERT INTO `admin_funcionalidades` VALUES ('1', 'CREACIÓN CLIENTES JURÍDICOS', '');
INSERT INTO `admin_funcionalidades` VALUES ('2', 'CREACIÓN CLIENTES Y PROVEEDORES', null);
INSERT INTO `admin_funcionalidades` VALUES ('3', 'CREACIÓN ESTUDIANTES Y EMPLEADOS', null);
INSERT INTO `admin_funcionalidades` VALUES ('4', 'BUSCAR CLIENTE', null);
INSERT INTO `admin_funcionalidades` VALUES ('5', 'CONSULTAR CLIENTES JURÍDICOS', null);
INSERT INTO `admin_funcionalidades` VALUES ('6', 'CONSULTAR CLIENTES NATURALES', null);
INSERT INTO `admin_funcionalidades` VALUES ('7', 'EDITAR CLIENTES Y PROVEEDORES', null);
INSERT INTO `admin_funcionalidades` VALUES ('8', 'EDITAR ESTUDIANTES Y EMPLEADOS', null);
INSERT INTO `admin_funcionalidades` VALUES ('9', 'BUSCAR RUBROS', null);
INSERT INTO `admin_funcionalidades` VALUES ('10', 'CONFIGURAR RUBROS', null);
INSERT INTO `admin_funcionalidades` VALUES ('11', 'BUSCAR CURSOS CEMPRES', null);
INSERT INTO `admin_funcionalidades` VALUES ('12', 'CREAR CURSO CEMPRES', null);
INSERT INTO `admin_funcionalidades` VALUES ('13', 'EDITAR CURSO CEMPRES', null);
INSERT INTO `admin_funcionalidades` VALUES ('14', 'CREAR USUARIOS', null);
INSERT INTO `admin_funcionalidades` VALUES ('15', 'MODIFICAR USUARIOS', null);
INSERT INTO `admin_funcionalidades` VALUES ('16', 'CREAR ROLES', null);
INSERT INTO `admin_funcionalidades` VALUES ('17', 'EDITAR ROLES', null);
INSERT INTO `admin_funcionalidades` VALUES ('18', 'BUSCAR ROL', null);

-- ----------------------------
-- Table structure for admin_modulos
-- ----------------------------
DROP TABLE IF EXISTS `admin_modulos`;
CREATE TABLE `admin_modulos` (
  `ID_MODULO` int(11) NOT NULL AUTO_INCREMENT,
  `MODULO` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID_MODULO`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of admin_modulos
-- ----------------------------
INSERT INTO `admin_modulos` VALUES ('1', 'CLIENTES');
INSERT INTO `admin_modulos` VALUES ('2', 'FACTURACION');
INSERT INTO `admin_modulos` VALUES ('3', 'CONFIGURACIÓN');

-- ----------------------------
-- Table structure for admin_modulo_funcionalidad
-- ----------------------------
DROP TABLE IF EXISTS `admin_modulo_funcionalidad`;
CREATE TABLE `admin_modulo_funcionalidad` (
  `ID_MODULO_FUNCIONALIDAD` int(11) NOT NULL AUTO_INCREMENT,
  `ID_MODULO` int(11) DEFAULT NULL,
  `ID_FUNCIONALIDAD` int(11) DEFAULT NULL,
  `ES_DE_MENU` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`ID_MODULO_FUNCIONALIDAD`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of admin_modulo_funcionalidad
-- ----------------------------
INSERT INTO `admin_modulo_funcionalidad` VALUES ('17', '1', '1', null);
INSERT INTO `admin_modulo_funcionalidad` VALUES ('18', '1', '2', null);
INSERT INTO `admin_modulo_funcionalidad` VALUES ('19', '1', '3', null);
INSERT INTO `admin_modulo_funcionalidad` VALUES ('20', '1', '4', null);
INSERT INTO `admin_modulo_funcionalidad` VALUES ('21', '1', '5', null);
INSERT INTO `admin_modulo_funcionalidad` VALUES ('22', '1', '6', null);
INSERT INTO `admin_modulo_funcionalidad` VALUES ('23', '1', '7', null);
INSERT INTO `admin_modulo_funcionalidad` VALUES ('24', '1', '8', null);
INSERT INTO `admin_modulo_funcionalidad` VALUES ('25', '2', '9', null);
INSERT INTO `admin_modulo_funcionalidad` VALUES ('26', '2', '10', null);
INSERT INTO `admin_modulo_funcionalidad` VALUES ('27', '2', '11', null);
INSERT INTO `admin_modulo_funcionalidad` VALUES ('28', '2', '12', null);
INSERT INTO `admin_modulo_funcionalidad` VALUES ('29', '2', '13', null);
INSERT INTO `admin_modulo_funcionalidad` VALUES ('30', '3', '14', null);
INSERT INTO `admin_modulo_funcionalidad` VALUES ('31', '3', '15', null);
INSERT INTO `admin_modulo_funcionalidad` VALUES ('32', '3', '16', null);
INSERT INTO `admin_modulo_funcionalidad` VALUES ('33', '3', '17', null);

-- ----------------------------
-- Table structure for admin_roles
-- ----------------------------
DROP TABLE IF EXISTS `admin_roles`;
CREATE TABLE `admin_roles` (
  `ID_ROL` int(11) NOT NULL AUTO_INCREMENT,
  `ROL` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID_ROL`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of admin_roles
-- ----------------------------
INSERT INTO `admin_roles` VALUES ('1', 'ADMINISTRADOR');
INSERT INTO `admin_roles` VALUES ('2', 'CLIENTES');
INSERT INTO `admin_roles` VALUES ('3', 'CONTADOR');
INSERT INTO `admin_roles` VALUES ('4', 'PRUEBA');
INSERT INTO `admin_roles` VALUES ('5', 'FACTURADOR');

-- ----------------------------
-- Table structure for admin_rol_funcionalidad
-- ----------------------------
DROP TABLE IF EXISTS `admin_rol_funcionalidad`;
CREATE TABLE `admin_rol_funcionalidad` (
  `ID_ROL_FUNCIONALIDAD` int(11) NOT NULL AUTO_INCREMENT,
  `ID_ROL` int(11) DEFAULT NULL,
  `ID_FUNCIONALIDAD` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_ROL_FUNCIONALIDAD`),
  KEY `ID_ROL` (`ID_ROL`),
  KEY `ID_FUNCIONALIDAD` (`ID_FUNCIONALIDAD`),
  CONSTRAINT `admin_rol_funcionalidad_ibfk_1` FOREIGN KEY (`ID_ROL`) REFERENCES `admin_roles` (`ID_ROL`) ON UPDATE NO ACTION,
  CONSTRAINT `admin_rol_funcionalidad_ibfk_2` FOREIGN KEY (`ID_FUNCIONALIDAD`) REFERENCES `admin_funcionalidades` (`ID_FUNCIONALIDAD`)
) ENGINE=InnoDB AUTO_INCREMENT=119 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of admin_rol_funcionalidad
-- ----------------------------
INSERT INTO `admin_rol_funcionalidad` VALUES ('110', '4', '4');
INSERT INTO `admin_rol_funcionalidad` VALUES ('111', '4', '1');
INSERT INTO `admin_rol_funcionalidad` VALUES ('112', '4', '9');
INSERT INTO `admin_rol_funcionalidad` VALUES ('113', '4', '10');
INSERT INTO `admin_rol_funcionalidad` VALUES ('114', '4', '14');
INSERT INTO `admin_rol_funcionalidad` VALUES ('115', '4', '15');
INSERT INTO `admin_rol_funcionalidad` VALUES ('116', '5', '9');
INSERT INTO `admin_rol_funcionalidad` VALUES ('117', '5', '10');
INSERT INTO `admin_rol_funcionalidad` VALUES ('118', '5', '11');

-- ----------------------------
-- Table structure for admin_usuarios
-- ----------------------------
DROP TABLE IF EXISTS `admin_usuarios`;
CREATE TABLE `admin_usuarios` (
  `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT,
  `USUARIO` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CLAVE` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ESTADO` tinyint(1) NOT NULL,
  `NOMBRE_COMPLETO` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NRO_DOCUMENTO` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID_USUARIO`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of admin_usuarios
-- ----------------------------
INSERT INTO `admin_usuarios` VALUES ('1', 'binary', '9a1d6d5da3f3515a49d7dc90d26138e2', '1', 'binary', '');
INSERT INTO `admin_usuarios` VALUES ('2', 'mcalzadilla', 'e9141dc47b7524ddeb7cbe98129c7d26', '1', 'MAIKEL KALZADILLA AVILA', '');
INSERT INTO `admin_usuarios` VALUES ('3', 'jmogrovejo', 'b8e652bd37ec5fd2c4b6b260cb699187', '1', 'Elsa Janeth Mogrovejo Salcedo', '');
INSERT INTO `admin_usuarios` VALUES ('4', 'mcando', '1bf14f6662539d042cdb1d7d3cc32eeb', '1', 'cando', '');

-- ----------------------------
-- Table structure for admin_usuario_rol_funcionalidad
-- ----------------------------
DROP TABLE IF EXISTS `admin_usuario_rol_funcionalidad`;
CREATE TABLE `admin_usuario_rol_funcionalidad` (
  `ID_USUARIO_ROL_FUNCIONALIDAD` int(11) NOT NULL AUTO_INCREMENT,
  `ID_ROL_FUNCIONALIDAD` int(11) DEFAULT NULL,
  `ID_USUARIO` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_USUARIO_ROL_FUNCIONALIDAD`),
  KEY `ID_ROL_FUNCIONALIDAD` (`ID_ROL_FUNCIONALIDAD`),
  KEY `ID_USUARIO` (`ID_USUARIO`),
  CONSTRAINT `admin_usuario_rol_funcionalidad_ibfk_1` FOREIGN KEY (`ID_ROL_FUNCIONALIDAD`) REFERENCES `admin_rol_funcionalidad` (`ID_ROL_FUNCIONALIDAD`) ON UPDATE NO ACTION,
  CONSTRAINT `admin_usuario_rol_funcionalidad_ibfk_2` FOREIGN KEY (`ID_USUARIO`) REFERENCES `admin_usuarios` (`ID_USUARIO`) ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of admin_usuario_rol_funcionalidad
-- ----------------------------

-- ----------------------------
-- Table structure for fac_arqueo_efectivo1
-- ----------------------------
DROP TABLE IF EXISTS `fac_arqueo_efectivo1`;
CREATE TABLE `fac_arqueo_efectivo1` (
  `ID_ARQUEO_EFECTIVO` int(11) NOT NULL AUTO_INCREMENT,
  `ID_CAJA` int(11) NOT NULL,
  `CANTIDAD_BILLETES_1` int(11) DEFAULT NULL,
  `CANTIDAD_BILLETES_5` int(11) DEFAULT NULL,
  `CANTIDAD_BILLETES_10` int(11) DEFAULT NULL,
  `CANTIDAD_BILLETES_20` int(11) DEFAULT NULL,
  `CANTIDAD_BILLETES_50` int(11) DEFAULT NULL,
  `CANTIDAD_BILLETES_100` int(11) DEFAULT NULL,
  `CANTIDAD_MONEDAS_05CTVS` int(11) DEFAULT NULL,
  `CANTIDAD_MONEDAS_10CTVS` int(11) DEFAULT NULL,
  `CANTIDAD_MONEDAS_01CTVS` int(11) DEFAULT NULL,
  `CANTIDAD_MONEDAS_25CTVS` int(11) DEFAULT NULL,
  `CANTIDAD_MONEDAS_50CTVS` int(11) DEFAULT NULL,
  `CANTIDAD_MONEDAS_100CTVS` int(11) DEFAULT NULL,
  `NUMERO_CAJA` int(11) NOT NULL,
  PRIMARY KEY (`ID_ARQUEO_EFECTIVO`),
  KEY `ID_CAJA` (`ID_CAJA`),
  CONSTRAINT `fac_arqueo_efectivo1_ibfk_1` FOREIGN KEY (`ID_CAJA`) REFERENCES `fac_caja1` (`ID_CAJA`) ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of fac_arqueo_efectivo1
-- ----------------------------

-- ----------------------------
-- Table structure for fac_arqueo_efectivo2
-- ----------------------------
DROP TABLE IF EXISTS `fac_arqueo_efectivo2`;
CREATE TABLE `fac_arqueo_efectivo2` (
  `ID_ARQUEO_EFECTIVO` int(11) NOT NULL AUTO_INCREMENT,
  `ID_CAJA` int(11) NOT NULL,
  `CANTIDAD_BILLETES_1` int(11) DEFAULT NULL,
  `CANTIDAD_BILLETES_5` int(11) DEFAULT NULL,
  `CANTIDAD_BILLETES_10` int(11) DEFAULT NULL,
  `CANTIDAD_BILLETES_20` int(11) DEFAULT NULL,
  `CANTIDAD_BILLETES_50` int(11) DEFAULT NULL,
  `CANTIDAD_BILLETES_100` int(11) DEFAULT NULL,
  `CANTIDAD_MONEDAS_05CTVS` int(11) DEFAULT NULL,
  `CANTIDAD_MONEDAS_10CTVS` int(11) DEFAULT NULL,
  `CANTIDAD_MONEDAS_01CTVS` int(11) DEFAULT NULL,
  `CANTIDAD_MONEDAS_25CTVS` int(11) DEFAULT NULL,
  `CANTIDAD_MONEDAS_50CTVS` int(11) DEFAULT NULL,
  `CANTIDAD_MONEDAS_100CTVS` int(11) DEFAULT NULL,
  `NUMERO_CAJA` int(11) NOT NULL,
  PRIMARY KEY (`ID_ARQUEO_EFECTIVO`),
  KEY `ID_CAJA` (`ID_CAJA`),
  CONSTRAINT `fac_arqueo_efectivo2_ibfk_1` FOREIGN KEY (`ID_CAJA`) REFERENCES `fac_caja1` (`ID_CAJA`) ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of fac_arqueo_efectivo2
-- ----------------------------

-- ----------------------------
-- Table structure for fac_banco_institucion
-- ----------------------------
DROP TABLE IF EXISTS `fac_banco_institucion`;
CREATE TABLE `fac_banco_institucion` (
  `ID_BANCO_INSTITUCION` int(11) NOT NULL DEFAULT '0',
  `BANCO_INSTITUCION` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID_BANCO_INSTITUCION`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of fac_banco_institucion
-- ----------------------------
INSERT INTO `fac_banco_institucion` VALUES ('1', 'BANCO DEL PACIFICO');
INSERT INTO `fac_banco_institucion` VALUES ('2', 'BANCO INTERNACIONAL');
INSERT INTO `fac_banco_institucion` VALUES ('3', 'MUTUALISTA IMBABURA');
INSERT INTO `fac_banco_institucion` VALUES ('4', 'COOPERATIVA PABLO MUÑOZ VEGA');
INSERT INTO `fac_banco_institucion` VALUES ('5', 'COOPERATIVA SANTA ANITA');
INSERT INTO `fac_banco_institucion` VALUES ('6', 'BANCO SOLIDARIO');
INSERT INTO `fac_banco_institucion` VALUES ('7', 'BANCO PRODUBANCO');
INSERT INTO `fac_banco_institucion` VALUES ('8', 'BANCO PICHINCHA');
INSERT INTO `fac_banco_institucion` VALUES ('9', 'BANCO INTERNACIONAL');
INSERT INTO `fac_banco_institucion` VALUES ('10', 'BANCO AMAZONAS');
INSERT INTO `fac_banco_institucion` VALUES ('11', 'PROCREDIT');
INSERT INTO `fac_banco_institucion` VALUES ('12', 'DE GUAYAQUIL');
INSERT INTO `fac_banco_institucion` VALUES ('13', 'GENERAL RUMIÑAHUI');
INSERT INTO `fac_banco_institucion` VALUES ('14', 'DEL PACÍFICO');
INSERT INTO `fac_banco_institucion` VALUES ('15', 'DE LOJA');
INSERT INTO `fac_banco_institucion` VALUES ('16', 'DEL AUSTRO');
INSERT INTO `fac_banco_institucion` VALUES ('17', 'DEL BANK');
INSERT INTO `fac_banco_institucion` VALUES ('18', 'CAPITAL');
INSERT INTO `fac_banco_institucion` VALUES ('19', 'COMERCIAL DE MANABÍ');
INSERT INTO `fac_banco_institucion` VALUES ('20', 'COOPNACIONAL');
INSERT INTO `fac_banco_institucion` VALUES ('21', 'D-MIRO');
INSERT INTO `fac_banco_institucion` VALUES ('22', 'FINCA');
INSERT INTO `fac_banco_institucion` VALUES ('23', 'LITORAL');
INSERT INTO `fac_banco_institucion` VALUES ('24', 'BANCODESARROLLO');

-- ----------------------------
-- Table structure for fac_caja1
-- ----------------------------
DROP TABLE IF EXISTS `fac_caja1`;
CREATE TABLE `fac_caja1` (
  `ID_CAJA` int(11) NOT NULL AUTO_INCREMENT,
  `FECHA` date NOT NULL,
  `HORA_APERTURA` time NOT NULL,
  `FECHA_HORA_CIERRE` datetime DEFAULT NULL,
  `SALDO_INICIAL` decimal(20,2) NOT NULL,
  `MONTO_RECIBO_CAJA` decimal(20,2) DEFAULT NULL,
  `MONTO_EFECTIVO` decimal(20,2) DEFAULT NULL,
  `MONTO_CHEQUE` decimal(20,2) DEFAULT NULL,
  `MONTO_NOTA_CREDITO` decimal(20,2) DEFAULT NULL,
  `MONTO_DEPOSITO` decimal(20,2) DEFAULT NULL,
  `MONTO_TRANSFERENCIA` decimal(20,2) DEFAULT NULL,
  `MONTO_CUENTA_CONTABLE` decimal(20,2) DEFAULT NULL,
  `MONTO_TARJETA` decimal(20,2) DEFAULT NULL,
  `MONTO_INGRESOS` decimal(20,2) DEFAULT NULL,
  `MONTO_EGRESOS` decimal(20,2) DEFAULT NULL,
  `MONTO_INGRESOS_EFECTIVO` decimal(20,2) DEFAULT NULL,
  `MONTO_EGRESOS_EFECTIVO` decimal(20,2) DEFAULT NULL,
  `ID_USUARIO` int(11) NOT NULL,
  `ESTADO` bit(1) NOT NULL,
  PRIMARY KEY (`ID_CAJA`),
  KEY `ID_USUARIO` (`ID_USUARIO`),
  CONSTRAINT `fac_caja1_ibfk_1` FOREIGN KEY (`ID_USUARIO`) REFERENCES `admin_usuarios` (`ID_USUARIO`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of fac_caja1
-- ----------------------------

-- ----------------------------
-- Table structure for fac_caja2
-- ----------------------------
DROP TABLE IF EXISTS `fac_caja2`;
CREATE TABLE `fac_caja2` (
  `ID_CAJA` int(11) NOT NULL AUTO_INCREMENT,
  `FECHA` date NOT NULL,
  `HORA_APERTURA` time NOT NULL,
  `FECHA_HORA_CIERRE` datetime DEFAULT NULL,
  `SALDO_INICIAL` decimal(20,2) NOT NULL,
  `MONTO_RECIBO_CAJA` decimal(20,2) DEFAULT NULL,
  `MONTO_EFECTIVO` decimal(20,2) DEFAULT NULL,
  `MONTO_CHEQUE` decimal(20,2) DEFAULT NULL,
  `MONTO_NOTA_CREDITO` decimal(20,2) DEFAULT NULL,
  `MONTO_DEPOSITO` decimal(20,2) DEFAULT NULL,
  `MONTO_TRANSFERENCIA` decimal(20,2) DEFAULT NULL,
  `MONTO_CUENTA_CONTABLE` decimal(20,2) DEFAULT NULL,
  `MONTO_TARJETA` decimal(20,2) DEFAULT NULL,
  `MONTO_INGRESOS` decimal(20,2) DEFAULT NULL,
  `MONTO_EGRESOS` decimal(20,2) DEFAULT NULL,
  `MONTO_INGRESOS_EFECTIVO` decimal(20,2) DEFAULT NULL,
  `MONTO_EGRESOS_EFECTIVO` decimal(20,2) DEFAULT NULL,
  `ID_USUARIO` int(11) NOT NULL,
  `ESTADO` bit(1) NOT NULL,
  PRIMARY KEY (`ID_CAJA`),
  KEY `ID_USUARIO` (`ID_USUARIO`),
  CONSTRAINT `fac_caja2_ibfk_1` FOREIGN KEY (`ID_USUARIO`) REFERENCES `admin_usuarios` (`ID_USUARIO`) ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of fac_caja2
-- ----------------------------

-- ----------------------------
-- Table structure for fac_caja_encerada1
-- ----------------------------
DROP TABLE IF EXISTS `fac_caja_encerada1`;
CREATE TABLE `fac_caja_encerada1` (
  `ID_CAJA_ENCERADA` int(11) NOT NULL AUTO_INCREMENT,
  `ID_EGRESO_CAJA` int(11) NOT NULL,
  `SALDO_INICIAL` decimal(20,2) DEFAULT NULL,
  `MONTO_RECIBO_CAJA` decimal(20,2) DEFAULT NULL,
  `MONTO_EFECTIVO` decimal(20,2) DEFAULT NULL,
  `MONTO_CHEQUE` decimal(20,2) DEFAULT NULL,
  `MONTO_NOTA_CREDITO` decimal(20,2) DEFAULT NULL,
  `MONTO_DEPOSITO` decimal(20,2) DEFAULT NULL,
  `MONTO_TRANSFERENCIA` decimal(20,2) DEFAULT NULL,
  `MONTO_CUENTA_CONTABLE` decimal(20,2) DEFAULT NULL,
  `MONTO_TARJETA` decimal(20,2) DEFAULT NULL,
  `MONTO_INGRESOS` decimal(20,2) DEFAULT NULL,
  `MONTO_EGRESOS` decimal(20,2) DEFAULT NULL,
  `MONTO_INGRESOS_EFECTIVO` decimal(20,0) DEFAULT NULL,
  `MONTO_EGRESOS_EFECTIVO` decimal(20,0) DEFAULT NULL,
  PRIMARY KEY (`ID_CAJA_ENCERADA`),
  KEY `ID_EGRESO_CAJA` (`ID_EGRESO_CAJA`),
  CONSTRAINT `fac_caja_encerada1_ibfk_1` FOREIGN KEY (`ID_EGRESO_CAJA`) REFERENCES `fac_egreso_caja1` (`ID_EGRESO_CAJA`) ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of fac_caja_encerada1
-- ----------------------------

-- ----------------------------
-- Table structure for fac_caja_encerada2
-- ----------------------------
DROP TABLE IF EXISTS `fac_caja_encerada2`;
CREATE TABLE `fac_caja_encerada2` (
  `ID_CAJA_ENCERADA` int(11) NOT NULL AUTO_INCREMENT,
  `ID_EGRESO_CAJA` int(11) NOT NULL,
  `SALDO_INICIAL` decimal(20,2) DEFAULT NULL,
  `MONTO_RECIBO_CAJA` decimal(20,2) DEFAULT NULL,
  `MONTO_EFECTIVO` decimal(20,2) DEFAULT NULL,
  `MONTO_CHEQUE` decimal(20,2) DEFAULT NULL,
  `MONTO_NOTA_CREDITO` decimal(20,2) DEFAULT NULL,
  `MONTO_DEPOSITO` decimal(20,2) DEFAULT NULL,
  `MONTO_TRANSFERENCIA` decimal(20,2) DEFAULT NULL,
  `MONTO_CUENTA_CONTABLE` decimal(20,2) DEFAULT NULL,
  `MONTO_TARJETA` decimal(20,2) DEFAULT NULL,
  `MONTO_INGRESOS` decimal(20,2) DEFAULT NULL,
  `MONTO_EGRESOS` decimal(20,2) DEFAULT NULL,
  `MONTO_INGRESOS_EFECTIVO` decimal(20,0) DEFAULT NULL,
  `MONTO_EGRESOS_EFECTIVO` decimal(20,0) DEFAULT NULL,
  PRIMARY KEY (`ID_CAJA_ENCERADA`),
  KEY `ID_EGRESO_CAJA` (`ID_EGRESO_CAJA`),
  CONSTRAINT `fac_caja_encerada2_ibfk_1` FOREIGN KEY (`ID_EGRESO_CAJA`) REFERENCES `fac_egreso_caja1` (`ID_EGRESO_CAJA`) ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of fac_caja_encerada2
-- ----------------------------

-- ----------------------------
-- Table structure for fac_caja_pto_ip
-- ----------------------------
DROP TABLE IF EXISTS `fac_caja_pto_ip`;
CREATE TABLE `fac_caja_pto_ip` (
  `CAJA` int(11) DEFAULT NULL,
  `PTO_EMISION` varchar(255) DEFAULT NULL,
  `IP` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of fac_caja_pto_ip
-- ----------------------------
INSERT INTO `fac_caja_pto_ip` VALUES ('1', '001-001', '192.168.0.10');
INSERT INTO `fac_caja_pto_ip` VALUES ('2', '001-002', '192.168.0.11');

-- ----------------------------
-- Table structure for fac_cheque_encerado1
-- ----------------------------
DROP TABLE IF EXISTS `fac_cheque_encerado1`;
CREATE TABLE `fac_cheque_encerado1` (
  `ID_CHEQUE_ENCERADO` int(11) NOT NULL AUTO_INCREMENT,
  `ID_EGRESO_CAJA` int(11) NOT NULL,
  `MONTO_CHEQUE` decimal(20,0) NOT NULL,
  `CHEQUE_NUMERO_DOCUMENTO` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `CHEQUE_BANCO_INSTITUCION` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ID_RECIBO_CAJA` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_CHEQUE_ENCERADO`),
  KEY `ID_EGRESO_CAJA` (`ID_EGRESO_CAJA`),
  CONSTRAINT `fac_cheque_encerado1_ibfk_1` FOREIGN KEY (`ID_EGRESO_CAJA`) REFERENCES `fac_egreso_caja1` (`ID_EGRESO_CAJA`) ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of fac_cheque_encerado1
-- ----------------------------

-- ----------------------------
-- Table structure for fac_cheque_encerado2
-- ----------------------------
DROP TABLE IF EXISTS `fac_cheque_encerado2`;
CREATE TABLE `fac_cheque_encerado2` (
  `ID_CHEQUE_ENCERADO` int(11) NOT NULL AUTO_INCREMENT,
  `ID_EGRESO_CAJA` int(11) NOT NULL,
  `MONTO_CHEQUE` decimal(20,0) NOT NULL,
  `CHEQUE_NUMERO_DOCUMENTO` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `CHEQUE_BANCO_INSTITUCION` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ID_RECIBO_CAJA` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_CHEQUE_ENCERADO`),
  KEY `ID_EGRESO_CAJA` (`ID_EGRESO_CAJA`),
  CONSTRAINT `fac_cheque_encerado2_ibfk_1` FOREIGN KEY (`ID_EGRESO_CAJA`) REFERENCES `fac_egreso_caja1` (`ID_EGRESO_CAJA`) ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of fac_cheque_encerado2
-- ----------------------------

-- ----------------------------
-- Table structure for fac_clientes_rubros
-- ----------------------------
DROP TABLE IF EXISTS `fac_clientes_rubros`;
CREATE TABLE `fac_clientes_rubros` (
  `ID_CLIENTE_RUBRO` int(11) NOT NULL AUTO_INCREMENT,
  `ID_RUBRO` int(11) NOT NULL,
  `ID_CLIENTE` int(11) NOT NULL,
  `ESTADO` tinyint(1) NOT NULL,
  `DETALLE` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FECHA_ASIGNACION` date NOT NULL,
  `PRECIO_UNITARIO_RUBRO` decimal(20,2) NOT NULL,
  `NRO_ITEMS` int(11) NOT NULL DEFAULT '1',
  `PRECIO_X_NRO_ITEMS` decimal(20,2) NOT NULL,
  `TIPO_DESCUENTO` int(11) DEFAULT NULL,
  `DESCUENTO` decimal(20,2) DEFAULT NULL,
  `DESCUENTO_BECA` int(11) DEFAULT NULL,
  `RECARGO_POR_GENERACION_RUBRO` decimal(20,2) DEFAULT NULL,
  `VALOR_SALDADO_DE_RECARGO_GENERACION` decimal(20,2) DEFAULT NULL,
  `VALOR_SALDADO_RECARGO_GENERACION_SIN_CONFIRMAR` decimal(20,2) DEFAULT NULL,
  `SUBTOTAL` decimal(20,2) NOT NULL,
  `VALOR_SALDADO_POR_PAGO` decimal(20,2) NOT NULL DEFAULT '0.00',
  `VALOR_SALDADO_POR_PAGO_SIN_CONFIRMAR` decimal(20,2) NOT NULL,
  `IVA` int(11) NOT NULL,
  `RECARGO_IVA` decimal(20,2) NOT NULL,
  `TOTAL` decimal(20,2) NOT NULL,
  `RETENCION_IVA_PORCENTAJE` int(11) DEFAULT NULL,
  `RETENCION_IR_PORCENTAJE` int(11) DEFAULT NULL,
  `RETENCION_IR` decimal(20,2) DEFAULT '0.00',
  `RETENCION_IVA` decimal(20,2) DEFAULT '0.00',
  `ID_PLAN_PAGO` int(11) DEFAULT NULL,
  `NUMERO_MATERIAS` int(11) DEFAULT NULL,
  `PERIODO_VIGENTE` int(11) DEFAULT NULL,
  `ID_CARRERA` int(11) DEFAULT NULL,
  `ID_SEMESTRE` int(11) DEFAULT NULL,
  `CUOTAS_EN_Q_SE_DEBE_COBRAR` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  `VALOR_PRIMERA_CUOTA` decimal(20,2) DEFAULT NULL,
  `VALOR_CUOTA_REGULAR` decimal(20,2) DEFAULT NULL,
  `VALOR_RECARGO` decimal(20,2) DEFAULT NULL,
  `PORCENTAJE_RECARGO` int(11) DEFAULT NULL,
  `VALOR_RECARGO_GENERACION` decimal(20,2) DEFAULT NULL,
  `PORCENTAJE_RECARGO_GENERACION` int(11) DEFAULT NULL,
  `PRECIO_DESCONTANDO_BECA` decimal(20,2) DEFAULT NULL,
  `SELECCIONADO_PLAN_PAGO` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`ID_CLIENTE_RUBRO`),
  KEY `ID_RUBRO` (`ID_RUBRO`),
  KEY `ID_CLIENTE` (`ID_CLIENTE`),
  CONSTRAINT `fac_clientes_rubros_ibfk_1` FOREIGN KEY (`ID_RUBRO`) REFERENCES `fac_rubros` (`ID_RUBRO`) ON UPDATE NO ACTION,
  CONSTRAINT `fac_clientes_rubros_ibfk_2` FOREIGN KEY (`ID_CLIENTE`) REFERENCES `tab_clientes` (`ID_CLIENTE`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=741 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of fac_clientes_rubros
-- ----------------------------

-- ----------------------------
-- Table structure for fac_clientes_rubros_cuota
-- ----------------------------
DROP TABLE IF EXISTS `fac_clientes_rubros_cuota`;
CREATE TABLE `fac_clientes_rubros_cuota` (
  `ID_CLIENTE_RUBRO_CUOTA` int(11) NOT NULL AUTO_INCREMENT,
  `ID_CLIENTE_RUBRO` int(11) NOT NULL,
  `CUOTA` tinyint(11) DEFAULT NULL,
  `VALOR_Q_DEBE_TENER_SALDADO` decimal(20,2) DEFAULT NULL,
  `PRECIO` decimal(20,2) DEFAULT '0.00',
  `VALOR_SALDADO_POR_PAGO` decimal(20,2) DEFAULT '0.00',
  `VALOR_SALDADO_POR_PAGO_SIN_CONFIRMAR` decimal(20,2) DEFAULT '0.00',
  `ATRAZO` decimal(20,2) DEFAULT '0.00',
  `RECARGO_POR_ATRAZO_EN_PAGO` decimal(20,2) DEFAULT '0.00',
  `RECARGO_POR_GENERACION_RUBRO` decimal(20,2) DEFAULT '0.00',
  `VALOR_SALDADO_DE_RECARGO_GENERACION` decimal(20,2) DEFAULT '0.00',
  `VALOR_SALDADO_DE_RECARGO_GENERACION_SIN_CONFIRMAR` decimal(20,2) DEFAULT '0.00',
  `ESTADO` tinyint(1) DEFAULT NULL,
  `FECHA_PRIMER_ATRAZO` date DEFAULT NULL,
  `CUOTA_LIQUIDACION` tinyint(4) DEFAULT NULL,
  `FECHA_DE_LIQUIDACION` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`ID_CLIENTE_RUBRO_CUOTA`),
  KEY `ID_CLIENTE_RUBRO` (`ID_CLIENTE_RUBRO`),
  CONSTRAINT `fac_clientes_rubros_cuota_ibfk_1` FOREIGN KEY (`ID_CLIENTE_RUBRO`) REFERENCES `fac_clientes_rubros` (`ID_CLIENTE_RUBRO`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=1056 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of fac_clientes_rubros_cuota
-- ----------------------------

-- ----------------------------
-- Table structure for fac_clientes_rubros_facturas
-- ----------------------------
DROP TABLE IF EXISTS `fac_clientes_rubros_facturas`;
CREATE TABLE `fac_clientes_rubros_facturas` (
  `ID_CLIENTE_RUBRO_FACTURA` int(11) NOT NULL AUTO_INCREMENT,
  `ID_CLIENTE_RUBRO` int(11) NOT NULL,
  `ID_FACTURA` int(11) NOT NULL,
  `ESTADO_ABONOS` decimal(20,2) NOT NULL,
  `CUOTA` tinyint(1) DEFAULT NULL,
  `VALOR_SALDADO_DE_RECARGO_GENERACION` decimal(20,2) DEFAULT NULL,
  `VALOR_SALDADO_ATRAZO` decimal(20,2) DEFAULT NULL,
  `VALOR_SALDADO_RECARGO_ATRAZO` decimal(20,2) DEFAULT NULL,
  `PRECIO_CUOTA` decimal(20,2) DEFAULT NULL,
  `PRECIO_REAL_CUOTA` decimal(20,2) DEFAULT NULL,
  `VALOR_SALDADO_CUOTA` decimal(20,2) DEFAULT NULL,
  `APORTE_VALOR_SALDADO_POR_PAGO` decimal(20,2) DEFAULT NULL,
  `SUBTOTAL` decimal(20,2) NOT NULL,
  `VALOR_RECARGO_IVA` decimal(20,2) NOT NULL,
  `TOTAL` decimal(20,2) NOT NULL,
  `RETENCION_IR` decimal(20,2) NOT NULL,
  `RETENCION_IVA` decimal(20,2) NOT NULL,
  `VALOR_FINAL` decimal(20,2) NOT NULL,
  `ESTADO` decimal(20,2) NOT NULL,
  PRIMARY KEY (`ID_CLIENTE_RUBRO_FACTURA`),
  KEY `ID_CLIENTE_RUBRO` (`ID_CLIENTE_RUBRO`),
  KEY `ID_FACTURA` (`ID_FACTURA`),
  CONSTRAINT `fac_clientes_rubros_facturas_ibfk_2` FOREIGN KEY (`ID_FACTURA`) REFERENCES `fac_facturas` (`ID_FACTURA`) ON UPDATE NO ACTION,
  CONSTRAINT `fac_clientes_rubros_facturas_ibfk_3` FOREIGN KEY (`ID_CLIENTE_RUBRO`) REFERENCES `fac_clientes_rubros` (`ID_CLIENTE_RUBRO`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=174 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of fac_clientes_rubros_facturas
-- ----------------------------

-- ----------------------------
-- Table structure for fac_cuotas_generales
-- ----------------------------
DROP TABLE IF EXISTS `fac_cuotas_generales`;
CREATE TABLE `fac_cuotas_generales` (
  `ID_CUOTA_GENERAL` int(11) NOT NULL AUTO_INCREMENT,
  `ID_CLIENTE` int(11) NOT NULL,
  `CUOTA` int(11) NOT NULL,
  `MONTO_SIN_VERIFICAR` decimal(20,2) NOT NULL,
  `MONTO_VERIFICADO` decimal(20,2) NOT NULL,
  `TOTAL_PAGADO` decimal(20,2) NOT NULL,
  `POR_PAGAR` decimal(20,2) NOT NULL,
  `PRECIO_CUOTA` decimal(20,2) NOT NULL,
  `RECARGO_ATRAZO` decimal(20,2) NOT NULL,
  `RECARGO_GENERACION` decimal(20,2) NOT NULL,
  `DEUDA_CON_RECARGO` decimal(20,2) NOT NULL,
  `ESTADO` bit(1) NOT NULL,
  PRIMARY KEY (`ID_CUOTA_GENERAL`),
  KEY `ID_CLIENTE` (`ID_CLIENTE`),
  CONSTRAINT `fac_cuotas_generales_ibfk_1` FOREIGN KEY (`ID_CLIENTE`) REFERENCES `tab_clientes` (`ID_CLIENTE`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2416 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of fac_cuotas_generales
-- ----------------------------

-- ----------------------------
-- Table structure for fac_cursos_cempres
-- ----------------------------
DROP TABLE IF EXISTS `fac_cursos_cempres`;
CREATE TABLE `fac_cursos_cempres` (
  `ID_CURSO_CEMPRES` int(11) NOT NULL AUTO_INCREMENT,
  `CURSO` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID_CURSO_CEMPRES`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of fac_cursos_cempres
-- ----------------------------

-- ----------------------------
-- Table structure for fac_egreso_caja1
-- ----------------------------
DROP TABLE IF EXISTS `fac_egreso_caja1`;
CREATE TABLE `fac_egreso_caja1` (
  `ID_EGRESO_CAJA` int(11) NOT NULL AUTO_INCREMENT,
  `ID_CAJA` int(11) NOT NULL,
  `DESCRIPCION` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ID_TIPO_EGRESO` int(11) NOT NULL,
  `MONTO` decimal(20,2) NOT NULL,
  `FECHA_HORA` datetime NOT NULL,
  `NUMERO_CAJA` int(11) NOT NULL,
  PRIMARY KEY (`ID_EGRESO_CAJA`),
  KEY `ID_CAJA` (`ID_CAJA`),
  KEY `ID_TIPO_EGRESO` (`ID_TIPO_EGRESO`),
  CONSTRAINT `fac_egreso_caja1_ibfk_1` FOREIGN KEY (`ID_CAJA`) REFERENCES `fac_caja1` (`ID_CAJA`) ON UPDATE NO ACTION,
  CONSTRAINT `fac_egreso_caja1_ibfk_2` FOREIGN KEY (`ID_TIPO_EGRESO`) REFERENCES `fac_tipo_egreso` (`ID_TIPO_EGRESO`) ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of fac_egreso_caja1
-- ----------------------------

-- ----------------------------
-- Table structure for fac_egreso_caja2
-- ----------------------------
DROP TABLE IF EXISTS `fac_egreso_caja2`;
CREATE TABLE `fac_egreso_caja2` (
  `ID_EGRESO_CAJA` int(11) NOT NULL AUTO_INCREMENT,
  `ID_CAJA` int(11) NOT NULL,
  `DESCRIPCION` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ID_TIPO_EGRESO` int(11) NOT NULL,
  `MONTO` decimal(20,2) NOT NULL,
  `FECHA_HORA` datetime NOT NULL,
  `NUMERO_CAJA` int(11) NOT NULL,
  PRIMARY KEY (`ID_EGRESO_CAJA`),
  KEY `ID_CAJA` (`ID_CAJA`),
  KEY `ID_TIPO_EGRESO` (`ID_TIPO_EGRESO`),
  CONSTRAINT `fac_egreso_caja2_ibfk_1` FOREIGN KEY (`ID_CAJA`) REFERENCES `fac_caja2` (`ID_CAJA`) ON UPDATE NO ACTION,
  CONSTRAINT `fac_egreso_caja2_ibfk_2` FOREIGN KEY (`ID_TIPO_EGRESO`) REFERENCES `fac_tipo_egreso` (`ID_TIPO_EGRESO`) ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of fac_egreso_caja2
-- ----------------------------

-- ----------------------------
-- Table structure for fac_estudiante_cempres
-- ----------------------------
DROP TABLE IF EXISTS `fac_estudiante_cempres`;
CREATE TABLE `fac_estudiante_cempres` (
  `ID_CLIENTE_RUBRO_CEMPRES_FACTURA` int(11) NOT NULL AUTO_INCREMENT,
  `ID_CLIENTE` int(11) NOT NULL,
  `ID_RUBRO` int(11) NOT NULL,
  `ID_FACTURA` int(11) NOT NULL,
  PRIMARY KEY (`ID_CLIENTE_RUBRO_CEMPRES_FACTURA`),
  KEY `ID_RUBRO` (`ID_RUBRO`),
  KEY `ID_FACTURA` (`ID_FACTURA`),
  CONSTRAINT `fac_estudiante_cempres_ibfk_1` FOREIGN KEY (`ID_RUBRO`) REFERENCES `fac_rubros_cempres` (`ID_RUBRO`) ON UPDATE NO ACTION,
  CONSTRAINT `fac_estudiante_cempres_ibfk_2` FOREIGN KEY (`ID_FACTURA`) REFERENCES `fac_facturas` (`ID_FACTURA`) ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of fac_estudiante_cempres
-- ----------------------------

-- ----------------------------
-- Table structure for fac_facturas
-- ----------------------------
DROP TABLE IF EXISTS `fac_facturas`;
CREATE TABLE `fac_facturas` (
  `ID_FACTURA` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE_DOCUMENTO` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NRO_FACTURA` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SUBTOTAL` decimal(20,2) DEFAULT NULL,
  `RECARGO_IVA` decimal(20,2) DEFAULT NULL,
  `TOTAL` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `RETENCION_IVA_PORCENTAJE` int(20) DEFAULT NULL,
  `RETENCION_IR_PORCENTAJE` int(20) DEFAULT NULL,
  `RETENCION_IVA` decimal(20,2) DEFAULT NULL,
  `RETENCION_IR` decimal(20,2) DEFAULT NULL,
  `VALOR_FINAL` decimal(20,2) DEFAULT NULL,
  `FECHA` date DEFAULT NULL,
  `ESTADO` tinyint(1) DEFAULT NULL,
  `DESCUENTO` decimal(20,2) DEFAULT NULL,
  `RECARGA_ES_DE_TIPO_VALOR` tinyint(4) DEFAULT NULL,
  `RECARGA` decimal(20,5) DEFAULT NULL,
  `ID_CLIENTE` int(20) DEFAULT NULL,
  `CLIENTE_DENOMINACION` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CLIENTE_DIRECCION` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CLIENTE_TELEFONOS` varchar(34) COLLATE utf8_unicode_ci NOT NULL,
  `CLIENTE_NRO_DOCUMENTO` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  `EMISOR_FECHA_AUTORIZACION` date DEFAULT NULL,
  `EMISOR_AUTORIZACION_SRI` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `EMISOR_NRO_DOCUMENTO` varchar(13) COLLATE utf8_unicode_ci DEFAULT NULL,
  `EMISOR_DENOMINACION` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `EMISOR_DIRECCION` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `EMISOR_TELEFONOS` varchar(34) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NRO_COMPROBANTE_RETENCION` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DESCUENTO_ES_DE_TIPO_VALOR` tinyint(1) DEFAULT '0',
  `CONCEPTO` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PTO_EMISION` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID_FACTURA`)
) ENGINE=InnoDB AUTO_INCREMENT=176 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of fac_facturas
-- ----------------------------

-- ----------------------------
-- Table structure for fac_factura_forma_pago
-- ----------------------------
DROP TABLE IF EXISTS `fac_factura_forma_pago`;
CREATE TABLE `fac_factura_forma_pago` (
  `ID_FACTURA_FORMA_PAGO` int(11) NOT NULL AUTO_INCREMENT,
  `ID_FACTURA` int(11) NOT NULL,
  `ID_FORMA_DE_PAGO` int(11) NOT NULL,
  `MONTO` decimal(20,2) NOT NULL,
  `TIPO_DE_TARJETA` int(11) DEFAULT NULL,
  `NUMERO_DOCUMENTO` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `BANCO_INSTITUCION` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID_FACTURA_FORMA_PAGO`),
  KEY `ID_FACTURA` (`ID_FACTURA`),
  KEY `ID_FORMA_PAGO` (`ID_FORMA_DE_PAGO`),
  CONSTRAINT `fac_factura_forma_pago_ibfk_1` FOREIGN KEY (`ID_FACTURA`) REFERENCES `fac_facturas` (`ID_FACTURA`) ON UPDATE NO ACTION,
  CONSTRAINT `fac_factura_forma_pago_ibfk_2` FOREIGN KEY (`ID_FORMA_DE_PAGO`) REFERENCES `fac_formas_de_pago` (`ID_FORMA_DE_PAGO`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=155 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of fac_factura_forma_pago
-- ----------------------------

-- ----------------------------
-- Table structure for fac_formas_de_pago
-- ----------------------------
DROP TABLE IF EXISTS `fac_formas_de_pago`;
CREATE TABLE `fac_formas_de_pago` (
  `ID_FORMA_DE_PAGO` int(11) NOT NULL AUTO_INCREMENT,
  `FORMA_DE_PAGO` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID_FORMA_DE_PAGO`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of fac_formas_de_pago
-- ----------------------------
INSERT INTO `fac_formas_de_pago` VALUES ('1', 'EFECTIVO');
INSERT INTO `fac_formas_de_pago` VALUES ('2', 'CHEQUE');
INSERT INTO `fac_formas_de_pago` VALUES ('3', 'NOTA DE CRÉDITO');
INSERT INTO `fac_formas_de_pago` VALUES ('4', 'DEPÓSITO');
INSERT INTO `fac_formas_de_pago` VALUES ('5', 'TRANSFERENCIA');
INSERT INTO `fac_formas_de_pago` VALUES ('6', 'CUENTA CONTABLE');
INSERT INTO `fac_formas_de_pago` VALUES ('7', 'TARJETA');

-- ----------------------------
-- Table structure for fac_ingreso_caja1
-- ----------------------------
DROP TABLE IF EXISTS `fac_ingreso_caja1`;
CREATE TABLE `fac_ingreso_caja1` (
  `ID_INGRESO_CAJA` int(11) NOT NULL AUTO_INCREMENT,
  `ID_CAJA` int(11) NOT NULL,
  `DESCRIPCION` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ID_TIPO_INGRESO` int(11) NOT NULL,
  `MONTO` decimal(20,2) NOT NULL,
  `ID_RECIBO_CAJA` int(11) DEFAULT NULL,
  `FECHA_HORA` datetime NOT NULL,
  `NUMERO_CAJA` int(11) NOT NULL,
  PRIMARY KEY (`ID_INGRESO_CAJA`),
  KEY `ID_CAJA` (`ID_CAJA`),
  KEY `ID_TIPO_INGRESO` (`ID_TIPO_INGRESO`),
  CONSTRAINT `fac_ingreso_caja1_ibfk_2` FOREIGN KEY (`ID_TIPO_INGRESO`) REFERENCES `fac_tipo_ingreso` (`ID_TIPO_INGRESO`) ON UPDATE NO ACTION,
  CONSTRAINT `fac_ingreso_caja1_ibfk_3` FOREIGN KEY (`ID_CAJA`) REFERENCES `fac_caja1` (`ID_CAJA`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of fac_ingreso_caja1
-- ----------------------------

-- ----------------------------
-- Table structure for fac_ingreso_caja2
-- ----------------------------
DROP TABLE IF EXISTS `fac_ingreso_caja2`;
CREATE TABLE `fac_ingreso_caja2` (
  `ID_INGRESO_CAJA` int(11) NOT NULL AUTO_INCREMENT,
  `ID_CAJA` int(11) NOT NULL,
  `DESCRIPCION` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ID_TIPO_INGRESO` int(11) NOT NULL,
  `MONTO` decimal(20,2) NOT NULL,
  `ID_RECIBO_CAJA` int(11) DEFAULT NULL,
  `FECHA_HORA` datetime NOT NULL,
  `NUMERO_CAJA` int(11) NOT NULL,
  PRIMARY KEY (`ID_INGRESO_CAJA`),
  KEY `ID_CAJA` (`ID_CAJA`),
  KEY `ID_TIPO_INGRESO` (`ID_TIPO_INGRESO`),
  CONSTRAINT `fac_ingreso_caja2_ibfk_1` FOREIGN KEY (`ID_CAJA`) REFERENCES `fac_caja1` (`ID_CAJA`) ON UPDATE NO ACTION,
  CONSTRAINT `fac_ingreso_caja2_ibfk_2` FOREIGN KEY (`ID_TIPO_INGRESO`) REFERENCES `fac_tipo_ingreso` (`ID_TIPO_INGRESO`) ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of fac_ingreso_caja2
-- ----------------------------

-- ----------------------------
-- Table structure for fac_nro_facturas_disponibles
-- ----------------------------
DROP TABLE IF EXISTS `fac_nro_facturas_disponibles`;
CREATE TABLE `fac_nro_facturas_disponibles` (
  `ID_NRO_FACTURAS_ELIMINADAS` int(11) NOT NULL AUTO_INCREMENT,
  `NRO_FACTURA` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID_NRO_FACTURAS_ELIMINADAS`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of fac_nro_facturas_disponibles
-- ----------------------------

-- ----------------------------
-- Table structure for fac_parametros1
-- ----------------------------
DROP TABLE IF EXISTS `fac_parametros1`;
CREATE TABLE `fac_parametros1` (
  `ID_PARAMETRO_FACTURACION` int(11) NOT NULL AUTO_INCREMENT,
  `DENOMINACION` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `VALOR` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID_PARAMETRO_FACTURACION`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of fac_parametros1
-- ----------------------------
INSERT INTO `fac_parametros1` VALUES ('1', 'NRO_INICIAL_STOCK', '1');
INSERT INTO `fac_parametros1` VALUES ('2', 'NRO_STOCK_DISPONIBLES', '1000');
INSERT INTO `fac_parametros1` VALUES ('3', 'ULTIMO_NRO_STOCK_ASIGNADO', '000010113');
INSERT INTO `fac_parametros1` VALUES ('4', 'FECHA_VENCIMIENTO_EMISION_FACTURAS', '2020-01-01');
INSERT INTO `fac_parametros1` VALUES ('5', 'DIA_TOPE_PAGO_RUBROS', '10');
INSERT INTO `fac_parametros1` VALUES ('6', 'AUTORIZACION_SRI', 'S.R.I. 1117923230 ');
INSERT INTO `fac_parametros1` VALUES ('7', 'NOMBRE_INSTITUTO', 'INSTITUTO TECNOLÓGICO SUPERIOR LENDAN');
INSERT INTO `fac_parametros1` VALUES ('8', 'TELEFONO', '2263 739 / 3310 124');
INSERT INTO `fac_parametros1` VALUES ('9', 'FECHA_AUTORIZACION', '23/Noviembre/2015');
INSERT INTO `fac_parametros1` VALUES ('10', 'RUC_INSTITUTO', '1719021758001');
INSERT INTO `fac_parametros1` VALUES ('11', 'DIRECCION', 'Juan Díaz Oe9 y Paseo de la Universidad');
INSERT INTO `fac_parametros1` VALUES ('12', 'EMISION', '001-001');

-- ----------------------------
-- Table structure for fac_parametros2
-- ----------------------------
DROP TABLE IF EXISTS `fac_parametros2`;
CREATE TABLE `fac_parametros2` (
  `ID_PARAMETRO_FACTURACION` int(11) NOT NULL AUTO_INCREMENT,
  `DENOMINACION` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `VALOR` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID_PARAMETRO_FACTURACION`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of fac_parametros2
-- ----------------------------
INSERT INTO `fac_parametros2` VALUES ('1', 'NRO_INICIAL_STOCK', '1');
INSERT INTO `fac_parametros2` VALUES ('2', 'NRO_STOCK_DISPONIBLES', '1000');
INSERT INTO `fac_parametros2` VALUES ('3', 'ULTIMO_NRO_STOCK_ASIGNADO', '000022222');
INSERT INTO `fac_parametros2` VALUES ('4', 'FECHA_VENCIMIENTO_EMISION_FACTURAS', '2020-01-01');
INSERT INTO `fac_parametros2` VALUES ('5', 'DIA_TOPE_PAGO_RUBROS', '10');
INSERT INTO `fac_parametros2` VALUES ('6', 'AUTORIZACION_SRI', 'SERI XXXX2222');
INSERT INTO `fac_parametros2` VALUES ('7', 'NOMBRE_INSTITUTO', 'INSTITUTO SUPERIOR JOSÉ CHIRIBOGA GRIJALVA');
INSERT INTO `fac_parametros2` VALUES ('8', 'TELEFONO', '062 5538 378   062 558 372');
INSERT INTO `fac_parametros2` VALUES ('9', 'FECHA_AUTORIZACION', '2010-01-01');
INSERT INTO `fac_parametros2` VALUES ('10', 'RUC_INSTITUTO', '312323434355555');
INSERT INTO `fac_parametros2` VALUES ('11', 'DIRECCION', 'HUERTOS FAMILIARES, EL ORO Y 13 DE ABRIL. IBARRA.ECUADOR.');
INSERT INTO `fac_parametros2` VALUES ('12', 'EMISION', '001-002');

-- ----------------------------
-- Table structure for fac_planes_pago
-- ----------------------------
DROP TABLE IF EXISTS `fac_planes_pago`;
CREATE TABLE `fac_planes_pago` (
  `ID_PLAN` int(11) NOT NULL AUTO_INCREMENT,
  `NUMERO_CUOTAS_DIVIDE` int(11) NOT NULL,
  `PLAN` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `CUOTAS_Q_SE_COBRA` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID_PLAN`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of fac_planes_pago
-- ----------------------------
INSERT INTO `fac_planes_pago` VALUES ('1', '3', 'C', '1-2-3');
INSERT INTO `fac_planes_pago` VALUES ('2', '2', 'B', '1-2');
INSERT INTO `fac_planes_pago` VALUES ('3', '4', 'D', '1-2-3-4');
INSERT INTO `fac_planes_pago` VALUES ('4', '1', 'A', '1');
INSERT INTO `fac_planes_pago` VALUES ('6', '6', 'F', '1-2-3-4-5-6');
INSERT INTO `fac_planes_pago` VALUES ('7', '5', 'E', '1-2-3-4-5');

-- ----------------------------
-- Table structure for fac_recargos
-- ----------------------------
DROP TABLE IF EXISTS `fac_recargos`;
CREATE TABLE `fac_recargos` (
  `ID_RECARGO` int(11) NOT NULL AUTO_INCREMENT,
  `ID_USUARIO` int(11) NOT NULL,
  `FECHA_HORA` datetime NOT NULL,
  PRIMARY KEY (`ID_RECARGO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of fac_recargos
-- ----------------------------

-- ----------------------------
-- Table structure for fac_recibo_caja
-- ----------------------------
DROP TABLE IF EXISTS `fac_recibo_caja`;
CREATE TABLE `fac_recibo_caja` (
  `ID_RECIBO_CAJA` int(11) NOT NULL AUTO_INCREMENT,
  `ABONO_EFECTIVO` decimal(20,2) DEFAULT NULL,
  `ABONO_CHEQUE` decimal(20,2) DEFAULT NULL,
  `CHEQUE_NUMERO_DOCUMENTO` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CHEQUE_BANCO_INSTITUCION` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ABONO_NOTA_CREDITO` decimal(20,2) DEFAULT NULL,
  `NOTA_CREDITO_NUMERO_DOCUMENTO` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NOTA_CREDITO_BANCO_INSTITUCION` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ABONO_DEPOSITO` decimal(20,2) DEFAULT NULL,
  `DEPOSITO_NUMERO_DOCUMENTO` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DEPOSITO_BANCO_INSTITUCION` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ABONO_TRANSFERENCIA` decimal(20,2) DEFAULT NULL,
  `TRANSFERENCIA_NUMERO_DOCUMENTO` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TRANSFERENCIA_BANCO_INSTITUCION` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ABONO_CUENTA_CONTABLE` decimal(20,2) DEFAULT NULL,
  `CUENTA_CONTABLE_NUMERO_DOCUMENTO` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CUENTA_CONTABLE_BANCO_INSTITUCION` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ABONO_TARJETA` decimal(20,2) DEFAULT NULL,
  `TARJETA_NUMERO_DOCUMENTO` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TARJETA_BANCO_INSTITUCION` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TIPO_TARJETA` int(11) DEFAULT NULL,
  `FECHA` date NOT NULL,
  `HORA` time NOT NULL,
  `ID_FACTURA` int(11) NOT NULL,
  `ID_USUARIO` int(11) NOT NULL,
  `ID_CAJA` int(11) NOT NULL,
  `CHEQUE_VERIFICADO` bit(1) NOT NULL DEFAULT b'0',
  `NUMERO_CAJA` int(11) NOT NULL,
  `CHEQUE_ENCERADO` bit(1) NOT NULL DEFAULT b'0',
  `FACTURACION_AUTOMATICA` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`ID_RECIBO_CAJA`),
  KEY `ID_FACTURA` (`ID_FACTURA`),
  KEY `ID_USUARIO` (`ID_USUARIO`),
  KEY `ID_CAJA` (`ID_CAJA`),
  CONSTRAINT `fac_recibo_caja_ibfk_1` FOREIGN KEY (`ID_FACTURA`) REFERENCES `fac_facturas` (`ID_FACTURA`) ON UPDATE NO ACTION,
  CONSTRAINT `fac_recibo_caja_ibfk_2` FOREIGN KEY (`ID_USUARIO`) REFERENCES `admin_usuarios` (`ID_USUARIO`) ON UPDATE NO ACTION,
  CONSTRAINT `fac_recibo_caja_ibfk_3` FOREIGN KEY (`ID_CAJA`) REFERENCES `fac_caja1` (`ID_CAJA`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of fac_recibo_caja
-- ----------------------------

-- ----------------------------
-- Table structure for fac_retenciones_impuesto_renta
-- ----------------------------
DROP TABLE IF EXISTS `fac_retenciones_impuesto_renta`;
CREATE TABLE `fac_retenciones_impuesto_renta` (
  `ID_RETENCION_IMPUESTO_RENTA` int(11) NOT NULL AUTO_INCREMENT,
  `PORCENTAJE` int(11) NOT NULL,
  `POR_DEFECTO` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`ID_RETENCION_IMPUESTO_RENTA`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of fac_retenciones_impuesto_renta
-- ----------------------------
INSERT INTO `fac_retenciones_impuesto_renta` VALUES ('1', '1', '0');
INSERT INTO `fac_retenciones_impuesto_renta` VALUES ('2', '2', '1');
INSERT INTO `fac_retenciones_impuesto_renta` VALUES ('3', '3', '0');
INSERT INTO `fac_retenciones_impuesto_renta` VALUES ('4', '4', '0');
INSERT INTO `fac_retenciones_impuesto_renta` VALUES ('5', '5', '0');
INSERT INTO `fac_retenciones_impuesto_renta` VALUES ('6', '6', '0');
INSERT INTO `fac_retenciones_impuesto_renta` VALUES ('7', '7', '0');
INSERT INTO `fac_retenciones_impuesto_renta` VALUES ('8', '8', '0');
INSERT INTO `fac_retenciones_impuesto_renta` VALUES ('9', '9', '0');
INSERT INTO `fac_retenciones_impuesto_renta` VALUES ('10', '10', '0');
INSERT INTO `fac_retenciones_impuesto_renta` VALUES ('11', '0', '0');

-- ----------------------------
-- Table structure for fac_retenciones_iva
-- ----------------------------
DROP TABLE IF EXISTS `fac_retenciones_iva`;
CREATE TABLE `fac_retenciones_iva` (
  `ID_RETENCION_IVA` int(11) NOT NULL AUTO_INCREMENT,
  `PORCENTAJE` int(3) DEFAULT NULL,
  `POR_DEFECTO` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`ID_RETENCION_IVA`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of fac_retenciones_iva
-- ----------------------------
INSERT INTO `fac_retenciones_iva` VALUES ('1', '30', '0');
INSERT INTO `fac_retenciones_iva` VALUES ('2', '70', '1');
INSERT INTO `fac_retenciones_iva` VALUES ('3', '100', '0');

-- ----------------------------
-- Table structure for fac_rubros
-- ----------------------------
DROP TABLE IF EXISTS `fac_rubros`;
CREATE TABLE `fac_rubros` (
  `ID_RUBRO` int(11) NOT NULL AUTO_INCREMENT,
  `RUBRO` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `PRECIO` decimal(20,2) NOT NULL,
  `PRIORIDAD` int(11) NOT NULL,
  `ESTADO` tinyint(1) NOT NULL DEFAULT '1',
  `ESTA_SUJETO_A_CONDONACION` tinyint(1) NOT NULL DEFAULT '0',
  `ESTA_GRAVADO_CON_IMPUESTO` tinyint(1) NOT NULL DEFAULT '0',
  `ID_TIPO_RUBRO` int(11) DEFAULT NULL,
  `PORCENTAJE_RECARGO` int(11) DEFAULT NULL,
  `VALOR_RECARGO` decimal(20,2) DEFAULT NULL,
  `PORCENTAJE_RECARGO_GENERACION` int(11) DEFAULT NULL,
  `VALOR_RECARGO_GENERACION` decimal(20,2) DEFAULT NULL,
  PRIMARY KEY (`ID_RUBRO`),
  KEY `fac_rubros_ibfk_1` (`ID_TIPO_RUBRO`),
  CONSTRAINT `fac_rubros_ibfk_1` FOREIGN KEY (`ID_TIPO_RUBRO`) REFERENCES `fac_tipos_rubros` (`ID_TIPO_RUBRO`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of fac_rubros
-- ----------------------------
INSERT INTO `fac_rubros` VALUES ('15', 'HORARIOS EXT', '230.00', '0', '1', '0', '0', '3', null, null, null, null);
INSERT INTO `fac_rubros` VALUES ('16', 'ARRASTRE', '45.00', '0', '1', '0', '0', '3', null, null, null, null);
INSERT INTO `fac_rubros` VALUES ('17', 'SEMESTRE', '0.00', '1', '1', '1', '0', '3', '15', null, null, '80.00');
INSERT INTO `fac_rubros` VALUES ('18', 'INSCRIPCIÓN', '50.00', '2', '1', '0', '0', '1', null, null, '25', null);
INSERT INTO `fac_rubros` VALUES ('19', 'NIVELACIÓN', '50.00', '0', '1', '0', '0', '1', null, null, null, null);
INSERT INTO `fac_rubros` VALUES ('24', 'MATRICULA', '150.00', '0', '1', '0', '0', '3', null, null, null, null);
INSERT INTO `fac_rubros` VALUES ('25', 'MATRICULA', '120.00', '0', '1', '0', '0', '3', null, null, null, null);
INSERT INTO `fac_rubros` VALUES ('26', 'ITEC', '100.00', '0', '1', '0', '0', '3', null, null, null, null);
INSERT INTO `fac_rubros` VALUES ('27', 'CORTE', '1.00', '0', '1', '0', '0', '6', null, null, null, null);
INSERT INTO `fac_rubros` VALUES ('28', 'CEPILLADO', '1.00', '0', '1', '0', '0', '6', null, null, null, null);
INSERT INTO `fac_rubros` VALUES ('29', 'RECOGIDO', '1.00', '0', '1', '0', '0', '6', null, null, null, null);
INSERT INTO `fac_rubros` VALUES ('30', 'TINTE 1 TUBO', '13.00', '0', '1', '0', '0', '6', null, null, null, null);
INSERT INTO `fac_rubros` VALUES ('31', 'TINTE 1/2 TUBO', '6.50', '0', '1', '0', '0', '6', null, null, null, null);
INSERT INTO `fac_rubros` VALUES ('32', 'TINTE 1/4 TUBO', '3.25', '0', '1', '0', '0', '6', null, null, null, null);
INSERT INTO `fac_rubros` VALUES ('33', 'TINTE 1/8 TUBO', '1.70', '0', '1', '0', '0', '6', null, null, null, null);
INSERT INTO `fac_rubros` VALUES ('34', 'TRATAMIENTO CAPILAR', '4.00', '0', '1', '0', '0', '6', null, null, null, null);
INSERT INTO `fac_rubros` VALUES ('35', 'PERÓXIDO 10ML', '0.20', '0', '1', '0', '0', '6', null, null, null, null);
INSERT INTO `fac_rubros` VALUES ('36', 'PERÓXIDO 20ML', '0.40', '0', '1', '0', '0', '6', null, null, null, null);
INSERT INTO `fac_rubros` VALUES ('37', 'PERÓXIDO 30ML', '0.60', '0', '1', '0', '0', '6', null, null, null, null);
INSERT INTO `fac_rubros` VALUES ('38', 'PERÓXIDO 40ML', '0.80', '0', '1', '0', '0', '6', null, null, null, null);
INSERT INTO `fac_rubros` VALUES ('39', 'PERÓXIDO 50ML', '1.00', '0', '1', '0', '0', '6', null, null, null, null);
INSERT INTO `fac_rubros` VALUES ('40', 'DECOLORANTE 10GR', '1.00', '0', '1', '0', '0', '6', null, null, null, null);
INSERT INTO `fac_rubros` VALUES ('41', 'DECOLORANTE 20GR', '2.00', '0', '1', '0', '0', '6', null, null, null, null);
INSERT INTO `fac_rubros` VALUES ('42', 'DECOLORANTE 30GR', '3.00', '0', '1', '0', '0', '6', null, null, null, null);
INSERT INTO `fac_rubros` VALUES ('43', 'DECOLORANTE 40GR', '4.00', '0', '1', '0', '0', '6', null, null, null, null);
INSERT INTO `fac_rubros` VALUES ('44', 'ONDULACIÓN 50ML', '5.00', '0', '1', '0', '0', '6', null, null, null, null);
INSERT INTO `fac_rubros` VALUES ('45', 'ONDULACIÓN 100ML', '10.00', '0', '1', '0', '0', '6', null, null, null, null);
INSERT INTO `fac_rubros` VALUES ('46', 'TRATAMIENTO FACIAL', '15.00', '0', '1', '0', '0', '6', null, null, null, null);
INSERT INTO `fac_rubros` VALUES ('47', 'TRATAMIENTO CORPORAL', '15.00', '0', '1', '0', '0', '6', null, null, null, null);
INSERT INTO `fac_rubros` VALUES ('48', 'MASAJE RELAJANTE', '10.00', '0', '1', '0', '0', '6', null, null, null, null);
INSERT INTO `fac_rubros` VALUES ('49', 'DEPILACIÓN', '13.00', '0', '1', '0', '0', '6', null, null, null, null);
INSERT INTO `fac_rubros` VALUES ('50', 'DRENAJE', '15.00', '0', '1', '0', '0', '6', null, null, null, null);
INSERT INTO `fac_rubros` VALUES ('51', 'LIMPIEZA', '8.00', '0', '1', '0', '0', '6', null, null, null, null);
INSERT INTO `fac_rubros` VALUES ('52', 'LIMPIEZA PROFUNDA', '15.00', '0', '1', '0', '0', '6', null, null, null, null);
INSERT INTO `fac_rubros` VALUES ('53', 'PROTOCOLO', '15.00', '0', '1', '0', '0', '6', null, null, null, null);
INSERT INTO `fac_rubros` VALUES ('54', 'DEPILACION BIKINI', '3.50', '0', '1', '0', '0', '6', null, null, null, null);
INSERT INTO `fac_rubros` VALUES ('55', 'DEPILACIÓN PIERNAS', '8.00', '0', '1', '0', '0', '6', null, null, null, null);
INSERT INTO `fac_rubros` VALUES ('56', 'DEPILACIÓN SOBRE LABIO', '3.00', '0', '1', '0', '0', '6', null, null, null, null);
INSERT INTO `fac_rubros` VALUES ('57', 'DEPILACIÓN CEJAS', '3.00', '0', '1', '0', '0', '6', null, null, null, null);

-- ----------------------------
-- Table structure for fac_rubros_cempres
-- ----------------------------
DROP TABLE IF EXISTS `fac_rubros_cempres`;
CREATE TABLE `fac_rubros_cempres` (
  `ID_RUBRO` int(11) NOT NULL AUTO_INCREMENT,
  `ID_CURSO_CEMPRES` int(11) NOT NULL,
  `FECHA_INICIO` date NOT NULL,
  `FECHA_FIN` date NOT NULL,
  `PROFESOR` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID_RUBRO`),
  KEY `ID_CURSO_CEMPRES` (`ID_CURSO_CEMPRES`),
  CONSTRAINT `fac_rubros_cempres_ibfk_1` FOREIGN KEY (`ID_RUBRO`) REFERENCES `fac_rubros` (`ID_RUBRO`) ON UPDATE NO ACTION,
  CONSTRAINT `fac_rubros_cempres_ibfk_2` FOREIGN KEY (`ID_CURSO_CEMPRES`) REFERENCES `fac_cursos_cempres` (`ID_CURSO_CEMPRES`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of fac_rubros_cempres
-- ----------------------------

-- ----------------------------
-- Table structure for fac_rubros_semestres
-- ----------------------------
DROP TABLE IF EXISTS `fac_rubros_semestres`;
CREATE TABLE `fac_rubros_semestres` (
  `ID_RUBRO` int(11) NOT NULL AUTO_INCREMENT,
  `ID_CARRERA` int(11) DEFAULT NULL,
  `SEMESTRES_Q_SE_APLICA` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SUJETO_A_PLAN_PAGO` tinyint(1) DEFAULT NULL,
  `CUOTAS_EN_Q_SE_DEBE_COBRAR` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SE_APLICA_ANUALMENTE` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`ID_RUBRO`),
  CONSTRAINT `fac_rubros_semestres_ibfk_1` FOREIGN KEY (`ID_RUBRO`) REFERENCES `fac_rubros` (`ID_RUBRO`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of fac_rubros_semestres
-- ----------------------------
INSERT INTO `fac_rubros_semestres` VALUES ('15', null, '4', '0', null, '0');
INSERT INTO `fac_rubros_semestres` VALUES ('16', null, null, '0', '1', '0');
INSERT INTO `fac_rubros_semestres` VALUES ('17', null, null, '1', null, '0');
INSERT INTO `fac_rubros_semestres` VALUES ('24', null, '1-2', '0', '1', '0');
INSERT INTO `fac_rubros_semestres` VALUES ('25', null, '3-4-5-6', '0', '1', '0');
INSERT INTO `fac_rubros_semestres` VALUES ('26', null, null, '0', '1', '0');

-- ----------------------------
-- Table structure for fac_tipos_rubros
-- ----------------------------
DROP TABLE IF EXISTS `fac_tipos_rubros`;
CREATE TABLE `fac_tipos_rubros` (
  `ID_TIPO_RUBRO` int(11) NOT NULL AUTO_INCREMENT,
  `TIPO_RUBRO` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID_TIPO_RUBRO`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of fac_tipos_rubros
-- ----------------------------
INSERT INTO `fac_tipos_rubros` VALUES ('1', 'INSCRIPCIÓN');
INSERT INTO `fac_tipos_rubros` VALUES ('3', 'SEMESTRE');
INSERT INTO `fac_tipos_rubros` VALUES ('4', 'CURSOS');
INSERT INTO `fac_tipos_rubros` VALUES ('6', 'OTROS');

-- ----------------------------
-- Table structure for fac_tipos_tarjetas
-- ----------------------------
DROP TABLE IF EXISTS `fac_tipos_tarjetas`;
CREATE TABLE `fac_tipos_tarjetas` (
  `ID_TIPO_TARJETA` int(11) NOT NULL AUTO_INCREMENT,
  `TIPO_TARJETA` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID_TIPO_TARJETA`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of fac_tipos_tarjetas
-- ----------------------------
INSERT INTO `fac_tipos_tarjetas` VALUES ('1', 'VISA');
INSERT INTO `fac_tipos_tarjetas` VALUES ('2', 'MASTERCARD');
INSERT INTO `fac_tipos_tarjetas` VALUES ('3', 'CUOTA FACIL');
INSERT INTO `fac_tipos_tarjetas` VALUES ('4', 'DINNERS CLUB');
INSERT INTO `fac_tipos_tarjetas` VALUES ('5', 'AMERICAN EXPRESS');

-- ----------------------------
-- Table structure for fac_tipo_egreso
-- ----------------------------
DROP TABLE IF EXISTS `fac_tipo_egreso`;
CREATE TABLE `fac_tipo_egreso` (
  `ID_TIPO_EGRESO` int(11) NOT NULL AUTO_INCREMENT,
  `TIPO` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID_TIPO_EGRESO`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of fac_tipo_egreso
-- ----------------------------
INSERT INTO `fac_tipo_egreso` VALUES ('1', 'efectivo');
INSERT INTO `fac_tipo_egreso` VALUES ('2', 'encerar cheque');
INSERT INTO `fac_tipo_egreso` VALUES ('3', 'encerar caja');

-- ----------------------------
-- Table structure for fac_tipo_ingreso
-- ----------------------------
DROP TABLE IF EXISTS `fac_tipo_ingreso`;
CREATE TABLE `fac_tipo_ingreso` (
  `ID_TIPO_INGRESO` int(11) NOT NULL,
  `TIPO` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID_TIPO_INGRESO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of fac_tipo_ingreso
-- ----------------------------
INSERT INTO `fac_tipo_ingreso` VALUES ('1', 'efectivo');
INSERT INTO `fac_tipo_ingreso` VALUES ('2', 'saldo inicial');
INSERT INTO `fac_tipo_ingreso` VALUES ('3', 'factura');

-- ----------------------------
-- Table structure for tab_cantones
-- ----------------------------
DROP TABLE IF EXISTS `tab_cantones`;
CREATE TABLE `tab_cantones` (
  `ID_CANTON` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PROVINCIA` int(11) DEFAULT NULL,
  `CANTON` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID_CANTON`),
  KEY `ID_PROVINCIA` (`ID_PROVINCIA`),
  CONSTRAINT `tab_cantones_ibfk_1` FOREIGN KEY (`ID_PROVINCIA`) REFERENCES `tab_provincias` (`ID_PROVINCIA`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=243 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tab_cantones
-- ----------------------------
INSERT INTO `tab_cantones` VALUES ('1', '1', 'CAMILO PONCE ENRIQUEZ');
INSERT INTO `tab_cantones` VALUES ('2', '1', 'CHORDELEG');
INSERT INTO `tab_cantones` VALUES ('3', '1', 'CUENCA');
INSERT INTO `tab_cantones` VALUES ('4', '1', 'EL PAN');
INSERT INTO `tab_cantones` VALUES ('5', '1', 'GIRON');
INSERT INTO `tab_cantones` VALUES ('6', '1', 'GUACHAPALA');
INSERT INTO `tab_cantones` VALUES ('7', '1', 'GUALACEO');
INSERT INTO `tab_cantones` VALUES ('8', '1', 'NABON');
INSERT INTO `tab_cantones` VALUES ('9', '1', 'OÑA');
INSERT INTO `tab_cantones` VALUES ('10', '1', 'PAUTE');
INSERT INTO `tab_cantones` VALUES ('11', '1', 'PUCARA');
INSERT INTO `tab_cantones` VALUES ('12', '1', 'SAN FERNANDO');
INSERT INTO `tab_cantones` VALUES ('13', '1', 'SANTA ISABEL');
INSERT INTO `tab_cantones` VALUES ('14', '1', 'SEVILLA DE ORO');
INSERT INTO `tab_cantones` VALUES ('15', '1', 'SIGSIG');
INSERT INTO `tab_cantones` VALUES ('16', '2', 'CALUMA');
INSERT INTO `tab_cantones` VALUES ('17', '2', 'CHILLANES');
INSERT INTO `tab_cantones` VALUES ('18', '2', 'CHIMBO');
INSERT INTO `tab_cantones` VALUES ('19', '2', 'ECHEANDIA');
INSERT INTO `tab_cantones` VALUES ('20', '2', 'GUARANDA');
INSERT INTO `tab_cantones` VALUES ('21', '2', 'LAS NAVES');
INSERT INTO `tab_cantones` VALUES ('22', '2', 'SAN MIGUEL');
INSERT INTO `tab_cantones` VALUES ('23', '3', 'AZOGUES');
INSERT INTO `tab_cantones` VALUES ('24', '3', 'BIBLIAN');
INSERT INTO `tab_cantones` VALUES ('25', '3', 'CAÑAR');
INSERT INTO `tab_cantones` VALUES ('26', '3', 'DELEG');
INSERT INTO `tab_cantones` VALUES ('27', '3', 'EL TAMBO');
INSERT INTO `tab_cantones` VALUES ('28', '3', 'LA TRONCAL');
INSERT INTO `tab_cantones` VALUES ('29', '3', 'SUSCAL');
INSERT INTO `tab_cantones` VALUES ('30', '4', 'BOLIVAR');
INSERT INTO `tab_cantones` VALUES ('31', '4', 'ESPEJO');
INSERT INTO `tab_cantones` VALUES ('32', '4', 'MIRA');
INSERT INTO `tab_cantones` VALUES ('33', '4', 'MONTUFAR');
INSERT INTO `tab_cantones` VALUES ('34', '4', 'SAN PEDRO DE HUACA');
INSERT INTO `tab_cantones` VALUES ('35', '4', 'TULCAN');
INSERT INTO `tab_cantones` VALUES ('36', '5', 'ALAUSI');
INSERT INTO `tab_cantones` VALUES ('37', '5', 'CHAMBO');
INSERT INTO `tab_cantones` VALUES ('38', '5', 'CHUNCHI');
INSERT INTO `tab_cantones` VALUES ('39', '5', 'COLTA');
INSERT INTO `tab_cantones` VALUES ('40', '5', 'CUMANDA');
INSERT INTO `tab_cantones` VALUES ('41', '5', 'GUAMOTE');
INSERT INTO `tab_cantones` VALUES ('42', '5', 'GUANO');
INSERT INTO `tab_cantones` VALUES ('43', '5', 'PALLATANGA');
INSERT INTO `tab_cantones` VALUES ('44', '5', 'PENIPE');
INSERT INTO `tab_cantones` VALUES ('45', '5', 'RIOBAMBA');
INSERT INTO `tab_cantones` VALUES ('46', '6', 'LA MANA');
INSERT INTO `tab_cantones` VALUES ('47', '6', 'LATACUNGA');
INSERT INTO `tab_cantones` VALUES ('48', '6', 'PANGUA');
INSERT INTO `tab_cantones` VALUES ('49', '6', 'PUJILI');
INSERT INTO `tab_cantones` VALUES ('50', '6', 'SALCEDO');
INSERT INTO `tab_cantones` VALUES ('51', '6', 'SAQUISILI');
INSERT INTO `tab_cantones` VALUES ('52', '6', 'SIGCHOS');
INSERT INTO `tab_cantones` VALUES ('53', '7', 'ARENILLAS');
INSERT INTO `tab_cantones` VALUES ('54', '7', 'ATAHUALPA');
INSERT INTO `tab_cantones` VALUES ('55', '7', 'BALSAS');
INSERT INTO `tab_cantones` VALUES ('56', '7', 'CHILLA');
INSERT INTO `tab_cantones` VALUES ('57', '7', 'EL GUABO');
INSERT INTO `tab_cantones` VALUES ('58', '7', 'HUAQUILLAS');
INSERT INTO `tab_cantones` VALUES ('59', '7', 'LAS LAJAS');
INSERT INTO `tab_cantones` VALUES ('60', '7', 'MACHALA');
INSERT INTO `tab_cantones` VALUES ('61', '7', 'MARCABELI');
INSERT INTO `tab_cantones` VALUES ('62', '7', 'PASAJE');
INSERT INTO `tab_cantones` VALUES ('63', '7', 'PIÑAS');
INSERT INTO `tab_cantones` VALUES ('64', '7', 'PORTOVELO');
INSERT INTO `tab_cantones` VALUES ('65', '7', 'SANTA ROSA');
INSERT INTO `tab_cantones` VALUES ('66', '7', 'ZARUMA');
INSERT INTO `tab_cantones` VALUES ('67', '8', 'ATACAMES');
INSERT INTO `tab_cantones` VALUES ('68', '8', 'ELOY ALFARO');
INSERT INTO `tab_cantones` VALUES ('69', '8', 'ESMERALDAS');
INSERT INTO `tab_cantones` VALUES ('70', '8', 'LA CONCORDIA');
INSERT INTO `tab_cantones` VALUES ('71', '8', 'MUISNE');
INSERT INTO `tab_cantones` VALUES ('72', '8', 'QUININDE');
INSERT INTO `tab_cantones` VALUES ('73', '8', 'RIOVERDE');
INSERT INTO `tab_cantones` VALUES ('74', '8', 'SAN LORENZO');
INSERT INTO `tab_cantones` VALUES ('75', '9', 'ISABELA');
INSERT INTO `tab_cantones` VALUES ('76', '9', 'SAN CRISTOBAL');
INSERT INTO `tab_cantones` VALUES ('77', '9', 'SANTA CRUZ');
INSERT INTO `tab_cantones` VALUES ('78', '10', 'ALFREDO BAQUERIZO MORENO (JUJAN)');
INSERT INTO `tab_cantones` VALUES ('79', '10', 'BALAO');
INSERT INTO `tab_cantones` VALUES ('80', '10', 'BALZAR');
INSERT INTO `tab_cantones` VALUES ('81', '10', 'COLIMES');
INSERT INTO `tab_cantones` VALUES ('82', '10', 'CORONEL MARCELINO MARIDUEÑA');
INSERT INTO `tab_cantones` VALUES ('83', '10', 'DAULE');
INSERT INTO `tab_cantones` VALUES ('84', '10', 'DURAN');
INSERT INTO `tab_cantones` VALUES ('85', '10', 'EL EMPALME');
INSERT INTO `tab_cantones` VALUES ('86', '10', 'EL TRIUNFO');
INSERT INTO `tab_cantones` VALUES ('87', '10', 'GENERAL ANTONIO ELIZALDE (BUCAY)');
INSERT INTO `tab_cantones` VALUES ('88', '10', 'GUAYAQUIL');
INSERT INTO `tab_cantones` VALUES ('89', '10', 'ISIDRO AYORA');
INSERT INTO `tab_cantones` VALUES ('90', '10', 'LOMAS DE SARGENTILLO');
INSERT INTO `tab_cantones` VALUES ('91', '10', 'MILAGRO');
INSERT INTO `tab_cantones` VALUES ('92', '10', 'NARANJAL');
INSERT INTO `tab_cantones` VALUES ('93', '10', 'NARANJITO');
INSERT INTO `tab_cantones` VALUES ('94', '10', 'NOBOL');
INSERT INTO `tab_cantones` VALUES ('95', '10', 'PALESTINA');
INSERT INTO `tab_cantones` VALUES ('96', '10', 'PEDRO CARBO');
INSERT INTO `tab_cantones` VALUES ('97', '10', 'PLAYAS');
INSERT INTO `tab_cantones` VALUES ('98', '10', 'SALITRE (URBINA JADO)');
INSERT INTO `tab_cantones` VALUES ('99', '10', 'SAMBORONDON');
INSERT INTO `tab_cantones` VALUES ('100', '10', 'SAN JACINTO DE YAGUACHI');
INSERT INTO `tab_cantones` VALUES ('101', '10', 'SANTA LUCIA');
INSERT INTO `tab_cantones` VALUES ('102', '10', 'SIMON BOLIVAR');
INSERT INTO `tab_cantones` VALUES ('103', '11', 'ANTONIO ANTE');
INSERT INTO `tab_cantones` VALUES ('104', '11', 'COTACACHI');
INSERT INTO `tab_cantones` VALUES ('105', '11', 'IBARRA');
INSERT INTO `tab_cantones` VALUES ('106', '11', 'OTAVALO');
INSERT INTO `tab_cantones` VALUES ('107', '11', 'PIMAMPIRO');
INSERT INTO `tab_cantones` VALUES ('108', '11', 'SAN MIGUEL DE URCUQUI');
INSERT INTO `tab_cantones` VALUES ('109', '12', 'CALVAS');
INSERT INTO `tab_cantones` VALUES ('110', '12', 'CATAMAYO');
INSERT INTO `tab_cantones` VALUES ('111', '12', 'CELICA');
INSERT INTO `tab_cantones` VALUES ('112', '12', 'CHAGUARPAMBA');
INSERT INTO `tab_cantones` VALUES ('113', '12', 'ESPINDOLA');
INSERT INTO `tab_cantones` VALUES ('114', '12', 'GONZANAMA');
INSERT INTO `tab_cantones` VALUES ('115', '12', 'LOJA');
INSERT INTO `tab_cantones` VALUES ('116', '12', 'MACARA');
INSERT INTO `tab_cantones` VALUES ('117', '12', 'OLMEDO');
INSERT INTO `tab_cantones` VALUES ('118', '12', 'PALTAS');
INSERT INTO `tab_cantones` VALUES ('119', '12', 'PINDAL');
INSERT INTO `tab_cantones` VALUES ('120', '12', 'PUYANGO');
INSERT INTO `tab_cantones` VALUES ('121', '12', 'QUILANGA');
INSERT INTO `tab_cantones` VALUES ('122', '12', 'SARAGURO');
INSERT INTO `tab_cantones` VALUES ('123', '12', 'SOZORANGA');
INSERT INTO `tab_cantones` VALUES ('124', '12', 'ZAPOTILLO');
INSERT INTO `tab_cantones` VALUES ('125', '13', 'BABA');
INSERT INTO `tab_cantones` VALUES ('126', '13', 'BABAHOYO');
INSERT INTO `tab_cantones` VALUES ('127', '13', 'BUENA FE');
INSERT INTO `tab_cantones` VALUES ('128', '13', 'MOCACHE');
INSERT INTO `tab_cantones` VALUES ('129', '13', 'MONTALVO');
INSERT INTO `tab_cantones` VALUES ('130', '13', 'PALENQUE');
INSERT INTO `tab_cantones` VALUES ('131', '13', 'PUEBLOVIEJO');
INSERT INTO `tab_cantones` VALUES ('132', '13', 'QUEVEDO');
INSERT INTO `tab_cantones` VALUES ('133', '13', 'QUINSALOMA');
INSERT INTO `tab_cantones` VALUES ('134', '13', 'URDANETA');
INSERT INTO `tab_cantones` VALUES ('135', '13', 'VALENCIA');
INSERT INTO `tab_cantones` VALUES ('136', '13', 'VENTANAS');
INSERT INTO `tab_cantones` VALUES ('137', '13', 'VINCES');
INSERT INTO `tab_cantones` VALUES ('138', '14', '24 DE MAYO');
INSERT INTO `tab_cantones` VALUES ('139', '14', 'BOLIVAR');
INSERT INTO `tab_cantones` VALUES ('140', '14', 'CHONE');
INSERT INTO `tab_cantones` VALUES ('141', '14', 'EL CARMEN');
INSERT INTO `tab_cantones` VALUES ('142', '14', 'FLAVIO ALFARO');
INSERT INTO `tab_cantones` VALUES ('143', '14', 'JAMA');
INSERT INTO `tab_cantones` VALUES ('144', '14', 'JARAMIJO');
INSERT INTO `tab_cantones` VALUES ('145', '14', 'JIPIJAPA');
INSERT INTO `tab_cantones` VALUES ('146', '14', 'JUNIN');
INSERT INTO `tab_cantones` VALUES ('147', '14', 'MANTA');
INSERT INTO `tab_cantones` VALUES ('148', '14', 'MONTECRISTI');
INSERT INTO `tab_cantones` VALUES ('149', '14', 'OLMEDO');
INSERT INTO `tab_cantones` VALUES ('150', '14', 'PAJAN');
INSERT INTO `tab_cantones` VALUES ('151', '14', 'PEDERNALES');
INSERT INTO `tab_cantones` VALUES ('152', '14', 'PICHINCHA');
INSERT INTO `tab_cantones` VALUES ('153', '14', 'PORTOVIEJO');
INSERT INTO `tab_cantones` VALUES ('154', '14', 'PUERTO LOPEZ');
INSERT INTO `tab_cantones` VALUES ('155', '14', 'ROCAFUERTE');
INSERT INTO `tab_cantones` VALUES ('156', '14', 'SAN VICENTE');
INSERT INTO `tab_cantones` VALUES ('157', '14', 'SANTA ANA');
INSERT INTO `tab_cantones` VALUES ('158', '14', 'SUCRE');
INSERT INTO `tab_cantones` VALUES ('159', '14', 'TOSAGUA');
INSERT INTO `tab_cantones` VALUES ('160', '15', 'GUALAQUIZA');
INSERT INTO `tab_cantones` VALUES ('161', '15', 'HUAMBOYA');
INSERT INTO `tab_cantones` VALUES ('162', '15', 'LIMON INDANZA');
INSERT INTO `tab_cantones` VALUES ('163', '15', 'LOGROÑO');
INSERT INTO `tab_cantones` VALUES ('164', '15', 'MORONA');
INSERT INTO `tab_cantones` VALUES ('165', '15', 'PABLO SEXTO');
INSERT INTO `tab_cantones` VALUES ('166', '15', 'PALORA');
INSERT INTO `tab_cantones` VALUES ('167', '15', 'SAN JUAN BOSCO');
INSERT INTO `tab_cantones` VALUES ('168', '15', 'SANTIAGO');
INSERT INTO `tab_cantones` VALUES ('169', '15', 'SUCUA');
INSERT INTO `tab_cantones` VALUES ('170', '15', 'TAISHA');
INSERT INTO `tab_cantones` VALUES ('171', '15', 'TIWINTZA');
INSERT INTO `tab_cantones` VALUES ('172', '16', 'ARCHIDONA');
INSERT INTO `tab_cantones` VALUES ('173', '16', 'CARLOS JULIO AROSEMENA TOLA');
INSERT INTO `tab_cantones` VALUES ('174', '16', 'EL CHACO');
INSERT INTO `tab_cantones` VALUES ('175', '16', 'QUIJOS');
INSERT INTO `tab_cantones` VALUES ('176', '16', 'TENA');
INSERT INTO `tab_cantones` VALUES ('177', '17', 'AGUARICO');
INSERT INTO `tab_cantones` VALUES ('178', '17', 'LA JOYA DE LOS SACHAS');
INSERT INTO `tab_cantones` VALUES ('179', '17', 'LORETO');
INSERT INTO `tab_cantones` VALUES ('180', '17', 'ORELLANA');
INSERT INTO `tab_cantones` VALUES ('181', '18', 'ARAJUNO');
INSERT INTO `tab_cantones` VALUES ('182', '18', 'MERA');
INSERT INTO `tab_cantones` VALUES ('183', '18', 'PASTAZA');
INSERT INTO `tab_cantones` VALUES ('184', '18', 'SANTA CLARA');
INSERT INTO `tab_cantones` VALUES ('185', '19', 'CAYAMBE');
INSERT INTO `tab_cantones` VALUES ('186', '19', 'MEJIA');
INSERT INTO `tab_cantones` VALUES ('187', '19', 'PEDRO MONCAYO');
INSERT INTO `tab_cantones` VALUES ('188', '19', 'PEDRO VICENTE MALDONADO');
INSERT INTO `tab_cantones` VALUES ('189', '19', 'PUERTO QUITO');
INSERT INTO `tab_cantones` VALUES ('190', '19', 'QUITO');
INSERT INTO `tab_cantones` VALUES ('191', '19', 'RUMIÑAHUI');
INSERT INTO `tab_cantones` VALUES ('192', '19', 'SAN MIGUEL DE LOS BANCOS');
INSERT INTO `tab_cantones` VALUES ('193', '20', 'LA LIBERTAD');
INSERT INTO `tab_cantones` VALUES ('194', '20', 'SALINAS');
INSERT INTO `tab_cantones` VALUES ('195', '20', 'SANTA ELENA');
INSERT INTO `tab_cantones` VALUES ('196', '21', 'SANTO DOMINGO');
INSERT INTO `tab_cantones` VALUES ('197', '22', 'CASCALES');
INSERT INTO `tab_cantones` VALUES ('198', '22', 'CUYABENO');
INSERT INTO `tab_cantones` VALUES ('199', '22', 'GONZALO PIZARRO');
INSERT INTO `tab_cantones` VALUES ('200', '22', 'LAGO AGRIO');
INSERT INTO `tab_cantones` VALUES ('201', '22', 'PUTUMAYO');
INSERT INTO `tab_cantones` VALUES ('202', '22', 'SHUSHUFINDI');
INSERT INTO `tab_cantones` VALUES ('203', '22', 'SUCUMBIOS');
INSERT INTO `tab_cantones` VALUES ('204', '23', 'AMBATO');
INSERT INTO `tab_cantones` VALUES ('205', '23', 'BAÑOS DE AGUA SANTA');
INSERT INTO `tab_cantones` VALUES ('206', '23', 'CEVALLOS');
INSERT INTO `tab_cantones` VALUES ('207', '23', 'MOCHA');
INSERT INTO `tab_cantones` VALUES ('208', '23', 'PATATE');
INSERT INTO `tab_cantones` VALUES ('209', '23', 'QUERO');
INSERT INTO `tab_cantones` VALUES ('210', '23', 'SAN PEDRO DE PELILEO');
INSERT INTO `tab_cantones` VALUES ('211', '23', 'SANTIAGO DE PILLARO');
INSERT INTO `tab_cantones` VALUES ('212', '23', 'TISALEO');
INSERT INTO `tab_cantones` VALUES ('213', '24', 'CENTINELA DEL CONDOR');
INSERT INTO `tab_cantones` VALUES ('214', '24', 'CHINCHIPE');
INSERT INTO `tab_cantones` VALUES ('215', '24', 'EL PANGUI');
INSERT INTO `tab_cantones` VALUES ('216', '24', 'NANGARITZA');
INSERT INTO `tab_cantones` VALUES ('217', '24', 'PALANDA');
INSERT INTO `tab_cantones` VALUES ('218', '24', 'PAQUISHA');
INSERT INTO `tab_cantones` VALUES ('219', '24', 'YACUAMBI');
INSERT INTO `tab_cantones` VALUES ('220', '24', 'YANTZAZA');
INSERT INTO `tab_cantones` VALUES ('221', '24', 'ZAMORA');
INSERT INTO `tab_cantones` VALUES ('222', '25', 'SAN JUAN DE PASTO');
INSERT INTO `tab_cantones` VALUES ('224', '25', 'IPIALES');
INSERT INTO `tab_cantones` VALUES ('225', '26', 'NEIVA');
INSERT INTO `tab_cantones` VALUES ('229', '35', 'PALMIRA VALLE');
INSERT INTO `tab_cantones` VALUES ('230', '36', 'BOGOTÁ');
INSERT INTO `tab_cantones` VALUES ('231', '19', 'STO DGO DE LOS CLDS');
INSERT INTO `tab_cantones` VALUES ('232', '19', 'STO DGO DE LOS CLDS');
INSERT INTO `tab_cantones` VALUES ('233', '19', 'CAYAMBE JUAN MONTALVO');
INSERT INTO `tab_cantones` VALUES ('234', '19', 'GONZALES SUAREZ');
INSERT INTO `tab_cantones` VALUES ('235', '19', 'GONZALEZ SUAREZ');
INSERT INTO `tab_cantones` VALUES ('236', '8', 'SAN FRANCISCO');
INSERT INTO `tab_cantones` VALUES ('237', '8', 'SAN FRANCISCO');
INSERT INTO `tab_cantones` VALUES ('238', '35', 'VALLE');
INSERT INTO `tab_cantones` VALUES ('239', '37', 'TARMA');
INSERT INTO `tab_cantones` VALUES ('240', '25', 'CORDOBA');
INSERT INTO `tab_cantones` VALUES ('241', null, 'TABACUNDO');
INSERT INTO `tab_cantones` VALUES ('242', '4', 'CARPUELA');

-- ----------------------------
-- Table structure for tab_cargos_laborales
-- ----------------------------
DROP TABLE IF EXISTS `tab_cargos_laborales`;
CREATE TABLE `tab_cargos_laborales` (
  `ID_CARGO_LABORAL` int(11) NOT NULL AUTO_INCREMENT,
  `CARGO_LABORAL` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID_CARGO_LABORAL`)
) ENGINE=InnoDB AUTO_INCREMENT=750 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tab_cargos_laborales
-- ----------------------------
INSERT INTO `tab_cargos_laborales` VALUES ('1', 'ABOGADO/A');
INSERT INTO `tab_cargos_laborales` VALUES ('2', 'ACOMODADOR/A');
INSERT INTO `tab_cargos_laborales` VALUES ('3', 'ACOMODADOR/A-ACOMODADOR/A');
INSERT INTO `tab_cargos_laborales` VALUES ('4', 'ACTOR/ACTRIZ');
INSERT INTO `tab_cargos_laborales` VALUES ('5', 'ADMINISTRACION');
INSERT INTO `tab_cargos_laborales` VALUES ('6', 'ADMINISTRACION-ATENCION AL CLIENTE');
INSERT INTO `tab_cargos_laborales` VALUES ('7', 'ADMINISTRACION-AUXILIAR ADMINISTRATIVO/A');
INSERT INTO `tab_cargos_laborales` VALUES ('8', 'ADMINISTRACION-AUXILIAR CONTABLE');
INSERT INTO `tab_cargos_laborales` VALUES ('9', 'ADMINISTRACION-BECARIA ASUNTOS SOCIALES');
INSERT INTO `tab_cargos_laborales` VALUES ('10', 'ADMINISTRACION-BOTONES');
INSERT INTO `tab_cargos_laborales` VALUES ('11', 'ADMINISTRACION-CODIFICADOR DE DATOS');
INSERT INTO `tab_cargos_laborales` VALUES ('12', 'ADMINISTRACION-DIRECCION Y GESTION EMPRESARIAL');
INSERT INTO `tab_cargos_laborales` VALUES ('13', 'ADMINISTRACION-OFICIAL ADMINISTRATIVO/A');
INSERT INTO `tab_cargos_laborales` VALUES ('14', 'ADMINISTRACION-ORDENANZA');
INSERT INTO `tab_cargos_laborales` VALUES ('15', 'ADMINISTRACION-OTRO PERSONAL DE OFICINA');
INSERT INTO `tab_cargos_laborales` VALUES ('16', 'ADMINISTRACION-OTROS');
INSERT INTO `tab_cargos_laborales` VALUES ('17', 'ADMINISTRACION-PROFESIONAL DE CONTABILIDAD');
INSERT INTO `tab_cargos_laborales` VALUES ('18', 'ADMINISTRACION-RECEPCIONISTA');
INSERT INTO `tab_cargos_laborales` VALUES ('19', 'ADMINISTRACION-SECRETARIADO');
INSERT INTO `tab_cargos_laborales` VALUES ('20', 'AGENTE CENSAL');
INSERT INTO `tab_cargos_laborales` VALUES ('21', 'AGENTE DE IGUALDAD');
INSERT INTO `tab_cargos_laborales` VALUES ('22', 'AGENTE DESARROLLO LOCAL');
INSERT INTO `tab_cargos_laborales` VALUES ('23', 'AGENTE FORESTAL');
INSERT INTO `tab_cargos_laborales` VALUES ('24', 'AGENTE FORESTAL-AGENTE FORESTAL');
INSERT INTO `tab_cargos_laborales` VALUES ('25', 'AGENTE FORESTAL-VIVERISTA');
INSERT INTO `tab_cargos_laborales` VALUES ('26', 'AGENTE JUDICIAL');
INSERT INTO `tab_cargos_laborales` VALUES ('27', 'AGRICULTOR/A');
INSERT INTO `tab_cargos_laborales` VALUES ('28', 'AGRICULTOR/A-AGRICULTOR/A');
INSERT INTO `tab_cargos_laborales` VALUES ('29', 'ALFARERO/A');
INSERT INTO `tab_cargos_laborales` VALUES ('30', 'ANIMADOR/A SOCIOCULTURAL');
INSERT INTO `tab_cargos_laborales` VALUES ('31', 'APICULTOR/A');
INSERT INTO `tab_cargos_laborales` VALUES ('32', 'ARCHIVERO/A');
INSERT INTO `tab_cargos_laborales` VALUES ('33', 'ARCHIVERO/A-ARCHIVERO/A');
INSERT INTO `tab_cargos_laborales` VALUES ('34', 'ARCHIVERO/A-AUXILIAR DE ARCHIVO');
INSERT INTO `tab_cargos_laborales` VALUES ('35', 'ARCHIVERO/A-AYUDANTE DE ARCHIVO');
INSERT INTO `tab_cargos_laborales` VALUES ('36', 'ARTESANO/A');
INSERT INTO `tab_cargos_laborales` VALUES ('37', 'ASESOR');
INSERT INTO `tab_cargos_laborales` VALUES ('38', 'ASESOR DE IMAGEN');
INSERT INTO `tab_cargos_laborales` VALUES ('39', 'ASESOR EN PRL');
INSERT INTO `tab_cargos_laborales` VALUES ('40', 'ASESOR FISCAL Y TRIBUTARIO');
INSERT INTO `tab_cargos_laborales` VALUES ('41', 'ASESOR JURIDICO');
INSERT INTO `tab_cargos_laborales` VALUES ('42', 'ASESOR/A-OTROS');
INSERT INTO `tab_cargos_laborales` VALUES ('43', 'AUXILIAR');
INSERT INTO `tab_cargos_laborales` VALUES ('44', 'AUXILIAR DE CONTROL');
INSERT INTO `tab_cargos_laborales` VALUES ('45', 'AUXILIAR-AYUDA A DOMICILIO');
INSERT INTO `tab_cargos_laborales` VALUES ('46', 'AUXILIAR-JARDIN DE INFANCIA');
INSERT INTO `tab_cargos_laborales` VALUES ('47', 'AUXILIAR-SERVICIOS SOCIALES');
INSERT INTO `tab_cargos_laborales` VALUES ('48', 'AYUDANTE DE MARROQUINERIA');
INSERT INTO `tab_cargos_laborales` VALUES ('49', 'AYUDANTE DE PRODUCCION');
INSERT INTO `tab_cargos_laborales` VALUES ('50', 'AZAFATA');
INSERT INTO `tab_cargos_laborales` VALUES ('51', 'AZAFATA-AZAFATA DE VUELO');
INSERT INTO `tab_cargos_laborales` VALUES ('52', 'BIBLIOTECA-AUXILIAR DE BIBLIOTECA');
INSERT INTO `tab_cargos_laborales` VALUES ('53', 'BIBLIOTECA-AYUDANTE DE BIBLIOTECA');
INSERT INTO `tab_cargos_laborales` VALUES ('54', 'BIBLIOTECARIO/A');
INSERT INTO `tab_cargos_laborales` VALUES ('55', 'BIBLIOTECARIO/A-AUXILIAR');
INSERT INTO `tab_cargos_laborales` VALUES ('56', 'BIBLIOTECARIO/A-DIPLOMADO/A BIBLIOTECONOMIA');
INSERT INTO `tab_cargos_laborales` VALUES ('57', 'CALDERERO-AISLADOR');
INSERT INTO `tab_cargos_laborales` VALUES ('58', 'CAMARA');
INSERT INTO `tab_cargos_laborales` VALUES ('59', 'CAPATAZ FORESTAL');
INSERT INTO `tab_cargos_laborales` VALUES ('60', 'CARPINTERO/A');
INSERT INTO `tab_cargos_laborales` VALUES ('61', 'CARPINTERO DE ALUMINIO');
INSERT INTO `tab_cargos_laborales` VALUES ('62', 'CARPINTERO/A DE ARMAR EN CONSTR.');
INSERT INTO `tab_cargos_laborales` VALUES ('63', 'CARPINTERO/A DE DECORADOS');
INSERT INTO `tab_cargos_laborales` VALUES ('64', 'CARPINTERO/A DE PVC');
INSERT INTO `tab_cargos_laborales` VALUES ('65', 'CARPINTERO/A EBANISTA ARTESANO');
INSERT INTO `tab_cargos_laborales` VALUES ('66', 'CARPINTERO/A METALICO');
INSERT INTO `tab_cargos_laborales` VALUES ('67', 'CARPINTERO/A-OTROS');
INSERT INTO `tab_cargos_laborales` VALUES ('68', 'CERRAJERO/A');
INSERT INTO `tab_cargos_laborales` VALUES ('69', 'CHAPISTA');
INSERT INTO `tab_cargos_laborales` VALUES ('70', 'CHAPISTA DE ALUMINIO');
INSERT INTO `tab_cargos_laborales` VALUES ('71', 'CHAPISTA INDUSTRIAL');
INSERT INTO `tab_cargos_laborales` VALUES ('72', 'CHAPISTA-OTROS');
INSERT INTO `tab_cargos_laborales` VALUES ('73', 'COLOCADOR/A');
INSERT INTO `tab_cargos_laborales` VALUES ('74', 'COLOCADOR/A DE MOQUETA');
INSERT INTO `tab_cargos_laborales` VALUES ('75', 'COLOCADOR/A PAVIMENTOS LIGEROS');
INSERT INTO `tab_cargos_laborales` VALUES ('76', 'COLOCADOR/A PREFABRIC. HORMIGON');
INSERT INTO `tab_cargos_laborales` VALUES ('77', 'COLOCADOR/A PREFABRICADOS (LIG.)');
INSERT INTO `tab_cargos_laborales` VALUES ('78', 'COLOCADOR/A TUBERIA HORMIGON');
INSERT INTO `tab_cargos_laborales` VALUES ('79', 'COLOCADOR/A-OTROS');
INSERT INTO `tab_cargos_laborales` VALUES ('80', 'COMERCIO');
INSERT INTO `tab_cargos_laborales` VALUES ('81', 'COMERCIO-AGENTE COMERCIAL');
INSERT INTO `tab_cargos_laborales` VALUES ('82', 'COMERCIO-AGENTE DE SEGUROS');
INSERT INTO `tab_cargos_laborales` VALUES ('83', 'COMERCIO-AGENTE INMOBILIARIO');
INSERT INTO `tab_cargos_laborales` VALUES ('84', 'COMERCIO-ASESOR/A FINANCIERO/A');
INSERT INTO `tab_cargos_laborales` VALUES ('85', 'COMERCIO-AYUDANTE DE PANADERIA');
INSERT INTO `tab_cargos_laborales` VALUES ('86', 'COMERCIO-AYUDANTE DE PASTELERIA');
INSERT INTO `tab_cargos_laborales` VALUES ('87', 'COMERCIO-CAJERO/A');
INSERT INTO `tab_cargos_laborales` VALUES ('88', 'COMERCIO-CARNICERO/A');
INSERT INTO `tab_cargos_laborales` VALUES ('89', 'COMERCIO-CHARCUTERO/A');
INSERT INTO `tab_cargos_laborales` VALUES ('90', 'COMERCIO-CONTROL DE CALIDAD');
INSERT INTO `tab_cargos_laborales` VALUES ('91', 'COMERCIO-DEPENDIENTE/A');
INSERT INTO `tab_cargos_laborales` VALUES ('92', 'COMERCIO-ENCARGADO/A');
INSERT INTO `tab_cargos_laborales` VALUES ('93', 'COMERCIO-EXPENDEDOR/A');
INSERT INTO `tab_cargos_laborales` VALUES ('94', 'COMERCIO-FRUTERO/A');
INSERT INTO `tab_cargos_laborales` VALUES ('95', 'COMERCIO-JEFE/A DE ALMACEN');
INSERT INTO `tab_cargos_laborales` VALUES ('96', 'COMERCIO-MANIPULADOR/A DE ALIMENTOS');
INSERT INTO `tab_cargos_laborales` VALUES ('97', 'COMERCIO-MOZO/A DE ALMACEN');
INSERT INTO `tab_cargos_laborales` VALUES ('98', 'COMERCIO-OTROS');
INSERT INTO `tab_cargos_laborales` VALUES ('99', 'COMERCIO-PESCADERO/A');
INSERT INTO `tab_cargos_laborales` VALUES ('100', 'COMERCIO-REPARTIDOR/A A DOMICILIO');
INSERT INTO `tab_cargos_laborales` VALUES ('101', 'COMERCIO-REPONEDOR/A');
INSERT INTO `tab_cargos_laborales` VALUES ('102', 'COMERCIO-SECRETARIO COMERCIAL');
INSERT INTO `tab_cargos_laborales` VALUES ('103', 'COMERCIO-SUPERVISOR/A');
INSERT INTO `tab_cargos_laborales` VALUES ('104', 'COMERCIO-TELEOPERADOR/A');
INSERT INTO `tab_cargos_laborales` VALUES ('105', 'COMERCIO-VENDEDOR/A');
INSERT INTO `tab_cargos_laborales` VALUES ('106', 'COMERCIO-VENDEDOR/A A DOMICILIO');
INSERT INTO `tab_cargos_laborales` VALUES ('107', 'COMERCIO-VENDEDOR/A POR TELEFONO');
INSERT INTO `tab_cargos_laborales` VALUES ('108', 'COMERCIO-VERDULERO/A');
INSERT INTO `tab_cargos_laborales` VALUES ('109', 'COMERCIO-VIAJANTE');
INSERT INTO `tab_cargos_laborales` VALUES ('110', 'CONDUCTOR/A OPERARIO/A');
INSERT INTO `tab_cargos_laborales` VALUES ('111', 'CONDUCTOR/A OPERARIO/A-ADOQUIN-PAVIMENTADOR');
INSERT INTO `tab_cargos_laborales` VALUES ('112', 'CONDUCTOR/A OPERARIO/A-BULLDOZER');
INSERT INTO `tab_cargos_laborales` VALUES ('113', 'CONDUCTOR/A OPERARIO/A-CAMION VOLQUETE');
INSERT INTO `tab_cargos_laborales` VALUES ('114', 'CONDUCTOR/A OPERARIO/A-CARRETILLA ELEVADORA');
INSERT INTO `tab_cargos_laborales` VALUES ('115', 'CONDUCTOR/A OPERARIO/A-DUMPER');
INSERT INTO `tab_cargos_laborales` VALUES ('116', 'CONDUCTOR/A OPERARIO/A-EXCAVADORA');
INSERT INTO `tab_cargos_laborales` VALUES ('117', 'CONDUCTOR/A OPERARIO/A-EXTEND.ASFALTICA');
INSERT INTO `tab_cargos_laborales` VALUES ('118', 'CONDUCTOR/A OPERARIO/A-GRUA EN CAMION');
INSERT INTO `tab_cargos_laborales` VALUES ('119', 'CONDUCTOR/A OPERARIO/A-GRUA FIJA');
INSERT INTO `tab_cargos_laborales` VALUES ('120', 'CONDUCTOR/A OPERARIO/A-GRUA MOVIL');
INSERT INTO `tab_cargos_laborales` VALUES ('121', 'CONDUCTOR/A OPERARIO/A-GRUA PUENTE');
INSERT INTO `tab_cargos_laborales` VALUES ('122', 'CONDUCTOR/A OPERARIO/A-GRÚA TELESCÓPICA');
INSERT INTO `tab_cargos_laborales` VALUES ('123', 'CONDUCTOR/A OPERARIO/A-GRUA TORRE');
INSERT INTO `tab_cargos_laborales` VALUES ('124', 'CONDUCTOR/A OPERARIO/A-HORMIGONERA MOVIL');
INSERT INTO `tab_cargos_laborales` VALUES ('125', 'CONDUCTOR/A OPERARIO/A-MANITU');
INSERT INTO `tab_cargos_laborales` VALUES ('126', 'CONDUCTOR/A OPERARIO/A-MAQ. OBRAS PUBLICAS');
INSERT INTO `tab_cargos_laborales` VALUES ('127', 'CONDUCTOR/A OPERARIO/A-MAQ.INCADORA PILOTES');
INSERT INTO `tab_cargos_laborales` VALUES ('128', 'CONDUCTOR/A OPERARIO/A-MAQUIN. DE VIAS');
INSERT INTO `tab_cargos_laborales` VALUES ('129', 'CONDUCTOR/A OPERARIO/A-MAQUIN.COMPACTACION');
INSERT INTO `tab_cargos_laborales` VALUES ('130', 'CONDUCTOR/A OPERARIO/A-MAQUIN.DRAGADOS');
INSERT INTO `tab_cargos_laborales` VALUES ('131', 'CONDUCTOR/A OPERARIO/A-MAQUIN.EXPLANACION');
INSERT INTO `tab_cargos_laborales` VALUES ('132', 'CONDUCTOR/A OPERARIO/A-MAQUINARIA LIMPIEZA');
INSERT INTO `tab_cargos_laborales` VALUES ('133', 'CONDUCTOR/A OPERARIO/A-MAQUINAS MOV.T.');
INSERT INTO `tab_cargos_laborales` VALUES ('134', 'CONDUCTOR/A OPERARIO/A-MARTILLO NEUMATICO');
INSERT INTO `tab_cargos_laborales` VALUES ('135', 'CONDUCTOR/A OPERARIO/A-MOTONIVELADORA');
INSERT INTO `tab_cargos_laborales` VALUES ('136', 'CONDUCTOR/A OPERARIO/A-OTROS');
INSERT INTO `tab_cargos_laborales` VALUES ('137', 'CONDUCTOR/A OPERARIO/A-PALA CARGADORA');
INSERT INTO `tab_cargos_laborales` VALUES ('138', 'CONDUCTOR/A OPERARIO/A-RETROEXCAVADORA');
INSERT INTO `tab_cargos_laborales` VALUES ('139', 'CONSTRUCCION');
INSERT INTO `tab_cargos_laborales` VALUES ('140', 'CONSTRUCCION-ALBAÑIL');
INSERT INTO `tab_cargos_laborales` VALUES ('141', 'CONSTRUCCION-ALBAÑIL-REMATES');
INSERT INTO `tab_cargos_laborales` VALUES ('142', 'CONSTRUCCION-ALBAÑIL-REPLANTEO');
INSERT INTO `tab_cargos_laborales` VALUES ('143', 'CONSTRUCCION-ALBAÑIL-REVESTIDOR');
INSERT INTO `tab_cargos_laborales` VALUES ('144', 'CONSTRUCCION-ALICATADOR/A');
INSERT INTO `tab_cargos_laborales` VALUES ('145', 'CONSTRUCCION-APAREJADOR/A');
INSERT INTO `tab_cargos_laborales` VALUES ('146', 'CONSTRUCCION-APRENDIZ DE CONSTRUCCION');
INSERT INTO `tab_cargos_laborales` VALUES ('147', 'CONSTRUCCION-APUNTALADOR/A DE EDIFICIOS');
INSERT INTO `tab_cargos_laborales` VALUES ('148', 'CONSTRUCCION-ARTILLERO/A DE LA CONSTRUCCION');
INSERT INTO `tab_cargos_laborales` VALUES ('149', 'CONSTRUCCION-AUXILIAR ADMINIST. OBRA');
INSERT INTO `tab_cargos_laborales` VALUES ('150', 'CONSTRUCCION-AUXILIAR TECNICO DE OBRA');
INSERT INTO `tab_cargos_laborales` VALUES ('151', 'CONSTRUCCION-AYUDANTE DE OBRA');
INSERT INTO `tab_cargos_laborales` VALUES ('152', 'CONSTRUCCION-AZULEJERO/A ARTESANAL');
INSERT INTO `tab_cargos_laborales` VALUES ('153', 'CONSTRUCCION-BARRENISTA');
INSERT INTO `tab_cargos_laborales` VALUES ('154', 'CONSTRUCCION-CANTERO/A ARTESAN MARMOL O PIEDR');
INSERT INTO `tab_cargos_laborales` VALUES ('155', 'CONSTRUCCION-CANTERO/A DE CONSTRUCCION');
INSERT INTO `tab_cargos_laborales` VALUES ('156', 'CONSTRUCCION-CAPATAZ DE OBRA EDIFICACION');
INSERT INTO `tab_cargos_laborales` VALUES ('157', 'CONSTRUCCION-CRISTALERO/A DE EDIFICIOS');
INSERT INTO `tab_cargos_laborales` VALUES ('158', 'CONSTRUCCION-DEMOLEDOR DE EDIFICIOS');
INSERT INTO `tab_cargos_laborales` VALUES ('159', 'CONSTRUCCION-ENCARGADO/A DE OBRA');
INSERT INTO `tab_cargos_laborales` VALUES ('160', 'CONSTRUCCION-ENCARGADO/A DE OBRA EDIF');
INSERT INTO `tab_cargos_laborales` VALUES ('161', 'CONSTRUCCION-ENCARGADO/A DE OBRAS PUBLICAS');
INSERT INTO `tab_cargos_laborales` VALUES ('162', 'CONSTRUCCION-ESCAYOLISTA');
INSERT INTO `tab_cargos_laborales` VALUES ('163', 'CONSTRUCCION-OFICIAL DE PRIMERA');
INSERT INTO `tab_cargos_laborales` VALUES ('164', 'CONSTRUCCION-OFICIAL DE SEGUNDA');
INSERT INTO `tab_cargos_laborales` VALUES ('165', 'CONSTRUCCION-OFICIAL DE TERCERA');
INSERT INTO `tab_cargos_laborales` VALUES ('166', 'CONSTRUCCION-OTROS');
INSERT INTO `tab_cargos_laborales` VALUES ('167', 'CONSTRUCCION-PEON DE CAMINOS');
INSERT INTO `tab_cargos_laborales` VALUES ('168', 'CONSTRUCCION-PEON DE LA CONSTRUCCION');
INSERT INTO `tab_cargos_laborales` VALUES ('169', 'CONSTRUCCION-PIZARRISTA');
INSERT INTO `tab_cargos_laborales` VALUES ('170', 'CONSTRUCTORES/AS Y AFINADORES/AS DE INSTR. MUSICALES');
INSERT INTO `tab_cargos_laborales` VALUES ('171', 'CONSULTOR/A-MEDIO AMBIENTE');
INSERT INTO `tab_cargos_laborales` VALUES ('172', 'COORDINADOR/A DE PROYECTOS DE DESARROLLO');
INSERT INTO `tab_cargos_laborales` VALUES ('173', 'COORDINADOR/A DE FORMACIÓN');
INSERT INTO `tab_cargos_laborales` VALUES ('174', 'CRUPIER');
INSERT INTO `tab_cargos_laborales` VALUES ('175', 'DECORADOR/A');
INSERT INTO `tab_cargos_laborales` VALUES ('176', 'DECORADOR/A INTERIORES');
INSERT INTO `tab_cargos_laborales` VALUES ('177', 'DECORADOR/A-ADORNISTA');
INSERT INTO `tab_cargos_laborales` VALUES ('178', 'DECORADOR/A-ESCAPARATISTA');
INSERT INTO `tab_cargos_laborales` VALUES ('179', 'DECORADOR/A-OTROS');
INSERT INTO `tab_cargos_laborales` VALUES ('180', 'DELINEANTE');
INSERT INTO `tab_cargos_laborales` VALUES ('181', 'DELINEANTE CARTOGRAFICO');
INSERT INTO `tab_cargos_laborales` VALUES ('182', 'DELINEANTE DE LA CONSTRUCCION');
INSERT INTO `tab_cargos_laborales` VALUES ('183', 'DELINEANTE INDUSTRIAL');
INSERT INTO `tab_cargos_laborales` VALUES ('184', 'DELINEANTE PROYECTISTA');
INSERT INTO `tab_cargos_laborales` VALUES ('185', 'DELINEANTE TEC. CONSTRUCCION');
INSERT INTO `tab_cargos_laborales` VALUES ('186', 'DELINEANTE(COLAB. REDAC.PROY.)');
INSERT INTO `tab_cargos_laborales` VALUES ('187', 'DELINEANTE-OTROS');
INSERT INTO `tab_cargos_laborales` VALUES ('188', 'DIRECTOR/A');
INSERT INTO `tab_cargos_laborales` VALUES ('189', 'DIRECTOR/A COMERCIAL');
INSERT INTO `tab_cargos_laborales` VALUES ('190', 'DIRECTOR/A COMERCIAL DE PRODUCTO');
INSERT INTO `tab_cargos_laborales` VALUES ('191', 'DIRECTOR/A DE ADMINISTRACION');
INSERT INTO `tab_cargos_laborales` VALUES ('192', 'DIRECTOR/A DE CONTROL DE GESTION');
INSERT INTO `tab_cargos_laborales` VALUES ('193', 'DIRECTOR/A DE PERSONAL Y RR.HH.');
INSERT INTO `tab_cargos_laborales` VALUES ('194', 'DIRECTOR/A-OTROS');
INSERT INTO `tab_cargos_laborales` VALUES ('195', 'DISEÑADOR/A GRAFICO');
INSERT INTO `tab_cargos_laborales` VALUES ('196', 'DISEÑADOR/A GRAFICO-MAQUETADOR/A');
INSERT INTO `tab_cargos_laborales` VALUES ('197', 'DOCUMENTALISTA');
INSERT INTO `tab_cargos_laborales` VALUES ('198', 'EBANISTA');
INSERT INTO `tab_cargos_laborales` VALUES ('199', 'EDUCADOR/A SOCIAL');
INSERT INTO `tab_cargos_laborales` VALUES ('200', 'ELECTRICISTA');
INSERT INTO `tab_cargos_laborales` VALUES ('201', 'ELECTRICISTA-APRENDIZ ELECTRICISTA');
INSERT INTO `tab_cargos_laborales` VALUES ('202', 'ELECTRICISTA-AYUDANTE DE ELECTRICISTA');
INSERT INTO `tab_cargos_laborales` VALUES ('203', 'ELECTRICISTA-ELECTRICISTA');
INSERT INTO `tab_cargos_laborales` VALUES ('204', 'ENMOQUETADOR/A');
INSERT INTO `tab_cargos_laborales` VALUES ('205', 'ENTREVISTADOR/A-ENCUESTADOR/A');
INSERT INTO `tab_cargos_laborales` VALUES ('206', 'ESTETICISTA');
INSERT INTO `tab_cargos_laborales` VALUES ('207', 'FONTANERO/A');
INSERT INTO `tab_cargos_laborales` VALUES ('208', 'FOTOGRAFO/A');
INSERT INTO `tab_cargos_laborales` VALUES ('209', 'GRABADOR/A DE DATOS');
INSERT INTO `tab_cargos_laborales` VALUES ('210', 'HOSTELERIA');
INSERT INTO `tab_cargos_laborales` VALUES ('211', 'HOSTELERIA-APRENDIZ DE COCINA');
INSERT INTO `tab_cargos_laborales` VALUES ('212', 'HOSTELERIA-APRENDIZ DE HOSTELERÍA');
INSERT INTO `tab_cargos_laborales` VALUES ('213', 'HOSTELERIA-ASISTENTE/A DE GRUPOS TURISTICOS');
INSERT INTO `tab_cargos_laborales` VALUES ('214', 'HOSTELERIA-AYUDANTE/A DE COCINA');
INSERT INTO `tab_cargos_laborales` VALUES ('215', 'HOSTELERIA-BARMAN');
INSERT INTO `tab_cargos_laborales` VALUES ('216', 'HOSTELERIA-CAMARERO/A');
INSERT INTO `tab_cargos_laborales` VALUES ('217', 'HOSTELERIA-CAMARERO/A DE PLANTA');
INSERT INTO `tab_cargos_laborales` VALUES ('218', 'HOSTELERIA-ENCARGADO/A');
INSERT INTO `tab_cargos_laborales` VALUES ('219', 'HOSTELERIA-JEFE/A DE COCINA');
INSERT INTO `tab_cargos_laborales` VALUES ('220', 'HOSTELERIA-OFFICE');
INSERT INTO `tab_cargos_laborales` VALUES ('221', 'HOSTELERIA-OTROS');
INSERT INTO `tab_cargos_laborales` VALUES ('222', 'HOSTELERIA-PINCHE');
INSERT INTO `tab_cargos_laborales` VALUES ('223', 'ILUSTRADOR/A');
INSERT INTO `tab_cargos_laborales` VALUES ('224', 'INDUSTRIA');
INSERT INTO `tab_cargos_laborales` VALUES ('225', 'INDUSTRIA-ARTESANOS/AS DE LA MADERA');
INSERT INTO `tab_cargos_laborales` VALUES ('226', 'INDUSTRIA-ARTESANOS/AS DE TEXTILES');
INSERT INTO `tab_cargos_laborales` VALUES ('227', 'INDUSTRIA-ARTESANOS/AS DE TEXTILES Y CUEROS');
INSERT INTO `tab_cargos_laborales` VALUES ('228', 'INDUSTRIA-CONTROL SISTEMAS CALIDAD');
INSERT INTO `tab_cargos_laborales` VALUES ('229', 'INDUSTRIA-COSTUREROS/AS');
INSERT INTO `tab_cargos_laborales` VALUES ('230', 'INDUSTRIA-EMBALEJE');
INSERT INTO `tab_cargos_laborales` VALUES ('231', 'INDUSTRIA-ENCARGADO/A');
INSERT INTO `tab_cargos_laborales` VALUES ('232', 'INDUSTRIA-FRESADOR TORNERO');
INSERT INTO `tab_cargos_laborales` VALUES ('233', 'INDUSTRIA-OPERARIO/A INDUSTRIAL');
INSERT INTO `tab_cargos_laborales` VALUES ('234', 'INDUSTRIA-TINTORERIA');
INSERT INTO `tab_cargos_laborales` VALUES ('235', 'INDUSTRIA-TRATAMIENTO DE LA LECHE');
INSERT INTO `tab_cargos_laborales` VALUES ('236', 'INDUSTRIA-TRATAMIENTO DE LA LECHE Y PROD. LACTEOS');
INSERT INTO `tab_cargos_laborales` VALUES ('237', 'INDUSTRIA-ZAPATERIA');
INSERT INTO `tab_cargos_laborales` VALUES ('238', 'INFORMATICA');
INSERT INTO `tab_cargos_laborales` VALUES ('239', 'INFORMATICA-ANALISIS DE SISTEMAS');
INSERT INTO `tab_cargos_laborales` VALUES ('240', 'INFORMATICA-BASES DE DATOS');
INSERT INTO `tab_cargos_laborales` VALUES ('241', 'INFORMATICA-CIBERNETICA');
INSERT INTO `tab_cargos_laborales` VALUES ('242', 'INFORMATICA-DISEÑADOR GRAFICO MULTIMEDIA');
INSERT INTO `tab_cargos_laborales` VALUES ('243', 'INFORMATICA-HARDWARE');
INSERT INTO `tab_cargos_laborales` VALUES ('244', 'INFORMATICA-INTERNET');
INSERT INTO `tab_cargos_laborales` VALUES ('245', 'INFORMATICA-JEFE DEPARTAMENTO TECNICO');
INSERT INTO `tab_cargos_laborales` VALUES ('246', 'INFORMATICA-LENGUAJES DE PROGRAMACION');
INSERT INTO `tab_cargos_laborales` VALUES ('247', 'INFORMÁTICA-MODELADOR 3D');
INSERT INTO `tab_cargos_laborales` VALUES ('248', 'INFORMATICA-PROGRAMADOR/A WEB');
INSERT INTO `tab_cargos_laborales` VALUES ('249', 'INFORMATICA-REDES');
INSERT INTO `tab_cargos_laborales` VALUES ('250', 'INFORMATICA-SEGURIDAD INFORMATICA');
INSERT INTO `tab_cargos_laborales` VALUES ('251', 'INFORMATICA-SISTEMAS OPERATIVOS');
INSERT INTO `tab_cargos_laborales` VALUES ('252', 'INFORMATICA-SOFTWARE');
INSERT INTO `tab_cargos_laborales` VALUES ('253', 'INFORMATICA-TELEINFORMATICA');
INSERT INTO `tab_cargos_laborales` VALUES ('254', 'INSTALADOR/A');
INSERT INTO `tab_cargos_laborales` VALUES ('255', 'INSTALADOR/A AIRE ACOND Y VENTIL');
INSERT INTO `tab_cargos_laborales` VALUES ('256', 'INSTALADOR/A CALEFACCION');
INSERT INTO `tab_cargos_laborales` VALUES ('257', 'INSTALADOR/A DE ANTENAS');
INSERT INTO `tab_cargos_laborales` VALUES ('258', 'INSTALADOR/A ELECTRIC.EDIFICIOS');
INSERT INTO `tab_cargos_laborales` VALUES ('259', 'INSTALADOR/A ELECTRICISTA');
INSERT INTO `tab_cargos_laborales` VALUES ('260', 'INSTALADOR/A ELECTRICISTA INDUST');
INSERT INTO `tab_cargos_laborales` VALUES ('261', 'INSTALADOR/A IMPERMEABILIZACION');
INSERT INTO `tab_cargos_laborales` VALUES ('262', 'INSTALADOR/A MAT.AISLANT.INSONOR');
INSERT INTO `tab_cargos_laborales` VALUES ('263', 'INSTALADOR/A MATERIAL AISLANTE');
INSERT INTO `tab_cargos_laborales` VALUES ('264', 'INSTALADOR/A TUBERIAS DE GAS');
INSERT INTO `tab_cargos_laborales` VALUES ('265', 'INSTALADOR/A TUBERIAS INDUSTRIAL');
INSERT INTO `tab_cargos_laborales` VALUES ('266', 'INSTALADOR/A TUBOS EN ZANJAS');
INSERT INTO `tab_cargos_laborales` VALUES ('267', 'INSTALADOR/A-OTROS');
INSERT INTO `tab_cargos_laborales` VALUES ('268', 'INTERPRETE');
INSERT INTO `tab_cargos_laborales` VALUES ('269', 'INTÉRPRETE LENGUAJE DE SIGNOS');
INSERT INTO `tab_cargos_laborales` VALUES ('270', 'INVESTIGADOR/A SOCIAL');
INSERT INTO `tab_cargos_laborales` VALUES ('271', 'JARDINERO/A');
INSERT INTO `tab_cargos_laborales` VALUES ('272', 'JOYERO/A');
INSERT INTO `tab_cargos_laborales` VALUES ('273', 'LICENCIADOS/AS');
INSERT INTO `tab_cargos_laborales` VALUES ('274', 'LICENCIADOS/AS- PSICOPEDAGOGIA');
INSERT INTO `tab_cargos_laborales` VALUES ('275', 'LICENCIADOS/AS-ABOGADO/A');
INSERT INTO `tab_cargos_laborales` VALUES ('276', 'LICENCIADOS/AS-ABOGADO/A LABORALISTA');
INSERT INTO `tab_cargos_laborales` VALUES ('277', 'LICENCIADOS/AS-ARQUITECTO');
INSERT INTO `tab_cargos_laborales` VALUES ('278', 'LICENCIADOS/AS-ARQUITECTO TECNICO');
INSERT INTO `tab_cargos_laborales` VALUES ('279', 'LICENCIADOS/AS-BELLAS ARTES');
INSERT INTO `tab_cargos_laborales` VALUES ('280', 'LICENCIADOS/AS-BIOLOGIA');
INSERT INTO `tab_cargos_laborales` VALUES ('281', 'LICENCIADOS/AS-ECONOMISTA');
INSERT INTO `tab_cargos_laborales` VALUES ('282', 'LICENCIADOS/AS-ECONOMISTA ACTUARIAL');
INSERT INTO `tab_cargos_laborales` VALUES ('283', 'LICENCIADOS/AS-ESTADISTICA');
INSERT INTO `tab_cargos_laborales` VALUES ('284', 'LICENCIADOS/AS-FISICAS');
INSERT INTO `tab_cargos_laborales` VALUES ('285', 'LICENCIADOS/AS-GEOLOGO/A');
INSERT INTO `tab_cargos_laborales` VALUES ('286', 'LICENCIADOS/AS-ING. CAMINOS, CANALES Y PUERTOS');
INSERT INTO `tab_cargos_laborales` VALUES ('287', 'LICENCIADOS/AS-ING. TECNICO AGRONOMO');
INSERT INTO `tab_cargos_laborales` VALUES ('288', 'LICENCIADOS/AS-ING.TECNICO INFORMATICO');
INSERT INTO `tab_cargos_laborales` VALUES ('289', 'LICENCIADOS/AS-INGENIERIA INFORMATICA');
INSERT INTO `tab_cargos_laborales` VALUES ('290', 'LICENCIADOS/AS-INGENIERIA TECNICA AGRICOLA');
INSERT INTO `tab_cargos_laborales` VALUES ('291', 'LICENCIADOS/AS-INGENIERO INDUSTRIAL');
INSERT INTO `tab_cargos_laborales` VALUES ('292', 'LICENCIADOS/AS-INGENIERO TECNICO INDUSTRIAL');
INSERT INTO `tab_cargos_laborales` VALUES ('293', 'LICENCIADOS/AS-MATEMATICAS');
INSERT INTO `tab_cargos_laborales` VALUES ('294', 'LICENCIADOS/AS-OTROS');
INSERT INTO `tab_cargos_laborales` VALUES ('295', 'LICENCIADOS/AS-PEDAGOGIA');
INSERT INTO `tab_cargos_laborales` VALUES ('296', 'LICENCIADOS/AS-PERIODISTA');
INSERT INTO `tab_cargos_laborales` VALUES ('297', 'LICENCIADOS/AS-PSICOLOGIA');
INSERT INTO `tab_cargos_laborales` VALUES ('298', 'LICENCIADOS/AS-PSICOPEDAGOGIA');
INSERT INTO `tab_cargos_laborales` VALUES ('299', 'LICENCIADOS/AS-QUIMICAS');
INSERT INTO `tab_cargos_laborales` VALUES ('300', 'LICENCIADOS/AS-SOCIOLOGO/A');
INSERT INTO `tab_cargos_laborales` VALUES ('301', 'LICENCIADOS/AS-VETERINARIA');
INSERT INTO `tab_cargos_laborales` VALUES ('302', 'LIMPIADOR/A');
INSERT INTO `tab_cargos_laborales` VALUES ('303', 'LIMPIADOR/A ACABADOS EDIFICIOS');
INSERT INTO `tab_cargos_laborales` VALUES ('304', 'LIMPIADOR/A DE ALCANTARILLAS');
INSERT INTO `tab_cargos_laborales` VALUES ('305', 'LIMPIADOR/A DE FACHADAS');
INSERT INTO `tab_cargos_laborales` VALUES ('306', 'LIMPIADOR/A DE PORTALES Y ESC.');
INSERT INTO `tab_cargos_laborales` VALUES ('307', 'LIMPIADOR/A DE VENTANAS');
INSERT INTO `tab_cargos_laborales` VALUES ('308', 'LIMPIADOR/A DE VENTANAS GRAN ALT');
INSERT INTO `tab_cargos_laborales` VALUES ('309', 'LIMPIADOR/A FACHADAS AGUA');
INSERT INTO `tab_cargos_laborales` VALUES ('310', 'LIMPIADOR/A FACHADAS CON ARENA');
INSERT INTO `tab_cargos_laborales` VALUES ('311', 'LIMPIADOR/A-AUXILIAR DE LIMPIEZA');
INSERT INTO `tab_cargos_laborales` VALUES ('312', 'LIMPIADOR/A-BARRENDERO/A');
INSERT INTO `tab_cargos_laborales` VALUES ('313', 'LIMPIADOR/A-MANTENEDOR/A PISCINAS');
INSERT INTO `tab_cargos_laborales` VALUES ('314', 'LIMPIADOR/A-OTROS');
INSERT INTO `tab_cargos_laborales` VALUES ('315', 'LOCUTOR/A DE RADIO');
INSERT INTO `tab_cargos_laborales` VALUES ('316', 'LOGISTICA');
INSERT INTO `tab_cargos_laborales` VALUES ('317', 'LOGISTICA-APARCACOCHES');
INSERT INTO `tab_cargos_laborales` VALUES ('318', 'LOGISTICA-CHOFER');
INSERT INTO `tab_cargos_laborales` VALUES ('319', 'LOGISTICA-CLASIFICADOR/A');
INSERT INTO `tab_cargos_laborales` VALUES ('320', 'LOGISTICA-CONDUCTOR/A');
INSERT INTO `tab_cargos_laborales` VALUES ('321', 'LOGISTICA-CONDUCTOR/A DE AMBULANCIAS');
INSERT INTO `tab_cargos_laborales` VALUES ('322', 'LOGISTICA-CONDUCTOR/A DE AUTOBUSES');
INSERT INTO `tab_cargos_laborales` VALUES ('323', 'LOGISTICA-CONDUCTOR/A DE CAMION CISTERNA');
INSERT INTO `tab_cargos_laborales` VALUES ('324', 'LOGISTICA-CONDUCTOR/A DE CAMIONES');
INSERT INTO `tab_cargos_laborales` VALUES ('325', 'LOGISTICA-CONDUCTOR/A DE GRUAS');
INSERT INTO `tab_cargos_laborales` VALUES ('326', 'LOGISTICA-CONDUCTOR/A DE GRUAS Y MAQ. PESADA');
INSERT INTO `tab_cargos_laborales` VALUES ('327', 'LOGISTICA-CONDUCTOR/A DE TRACTOCAMION');
INSERT INTO `tab_cargos_laborales` VALUES ('328', 'LOGISTICA-CONDUCTOR/A MAQUINARIA');
INSERT INTO `tab_cargos_laborales` VALUES ('329', 'LOGISTICA-MENSAJERO/A');
INSERT INTO `tab_cargos_laborales` VALUES ('330', 'LOGISTICA-OTROS TRABAJOS DE LOGISTICA');
INSERT INTO `tab_cargos_laborales` VALUES ('331', 'LOGISTICA-PEON CARGA Y DESCARGA');
INSERT INTO `tab_cargos_laborales` VALUES ('332', 'LOGISTICA-REPARTIDOR/A');
INSERT INTO `tab_cargos_laborales` VALUES ('333', 'MARKETING');
INSERT INTO `tab_cargos_laborales` VALUES ('334', 'MASAJISTA');
INSERT INTO `tab_cargos_laborales` VALUES ('335', 'MECANICO/A');
INSERT INTO `tab_cargos_laborales` VALUES ('336', 'MEDIADOR/A SOCIAL');
INSERT INTO `tab_cargos_laborales` VALUES ('337', 'MEDIO AMBIENTE-AUXILIAR FORESTAL');
INSERT INTO `tab_cargos_laborales` VALUES ('338', 'MILITAR');
INSERT INTO `tab_cargos_laborales` VALUES ('339', 'MILITAR-MILITAR');
INSERT INTO `tab_cargos_laborales` VALUES ('340', 'MODELO');
INSERT INTO `tab_cargos_laborales` VALUES ('341', 'MONITOR/A');
INSERT INTO `tab_cargos_laborales` VALUES ('342', 'MONITOR/A-AEROBIC');
INSERT INTO `tab_cargos_laborales` VALUES ('343', 'MONITOR/A-BAILE');
INSERT INTO `tab_cargos_laborales` VALUES ('344', 'MONITOR/A-BUS ESCOLAR');
INSERT INTO `tab_cargos_laborales` VALUES ('345', 'MONITOR/A-COMEDOR');
INSERT INTO `tab_cargos_laborales` VALUES ('346', 'MONITOR/A-COORDINACION DE ACTIVIDADES JUVENILES');
INSERT INTO `tab_cargos_laborales` VALUES ('347', 'MONITOR/A-DEPORTIVO/A');
INSERT INTO `tab_cargos_laborales` VALUES ('348', 'MONITOR/A-INFANTIL');
INSERT INTO `tab_cargos_laborales` VALUES ('349', 'MONITOR/A-MANTENIMIENTO');
INSERT INTO `tab_cargos_laborales` VALUES ('350', 'MONITOR/A-TECNICO DE JUVENTUD');
INSERT INTO `tab_cargos_laborales` VALUES ('351', 'MONTADOR/A');
INSERT INTO `tab_cargos_laborales` VALUES ('352', 'MONTADOR/A CERCADOS Y VALLAS MET');
INSERT INTO `tab_cargos_laborales` VALUES ('353', 'MONTADOR/A DE AISLAMIENTOS');
INSERT INTO `tab_cargos_laborales` VALUES ('354', 'MONTADOR/A DE ANDAMIOS');
INSERT INTO `tab_cargos_laborales` VALUES ('355', 'MONTADOR/A DE CARPINTERIA GRAL.');
INSERT INTO `tab_cargos_laborales` VALUES ('356', 'MONTADOR/A DE GRUA');
INSERT INTO `tab_cargos_laborales` VALUES ('357', 'MONTADOR/A DE PUERTAS AUTOMATIC.');
INSERT INTO `tab_cargos_laborales` VALUES ('358', 'MONTADOR/A DE PUERTAS BLINDADAS');
INSERT INTO `tab_cargos_laborales` VALUES ('359', 'MONTADOR/A DE TOLDOS');
INSERT INTO `tab_cargos_laborales` VALUES ('360', 'MONTADOR/A EN PIEDRA ESCULT/MONU');
INSERT INTO `tab_cargos_laborales` VALUES ('361', 'MONTADOR/A PLACAS ENERGIA SOLAR');
INSERT INTO `tab_cargos_laborales` VALUES ('362', 'MONTADOR/A-AJUST.MAQ.CONSTRUCC');
INSERT INTO `tab_cargos_laborales` VALUES ('363', 'MONTADOR/A-OTROS');
INSERT INTO `tab_cargos_laborales` VALUES ('364', 'MUSICO');
INSERT INTO `tab_cargos_laborales` VALUES ('365', 'ORIENTADOR/A LABORAL');
INSERT INTO `tab_cargos_laborales` VALUES ('366', 'OTROS SERVICIOS');
INSERT INTO `tab_cargos_laborales` VALUES ('367', 'PANADERO/A');
INSERT INTO `tab_cargos_laborales` VALUES ('368', 'PASTELERO/A');
INSERT INTO `tab_cargos_laborales` VALUES ('369', 'PATRONAJE-PROFESOR/A DE PATRONAJE INDUSTRIAL');
INSERT INTO `tab_cargos_laborales` VALUES ('370', 'PATRONISTA');
INSERT INTO `tab_cargos_laborales` VALUES ('371', 'PATRONISTA-DISEÑADOR/A');
INSERT INTO `tab_cargos_laborales` VALUES ('372', 'PELUQUERO/A');
INSERT INTO `tab_cargos_laborales` VALUES ('373', 'PELUQUERO/A-APRENDIZ PELUQUERO/A');
INSERT INTO `tab_cargos_laborales` VALUES ('374', 'PELUQUERO/A-AYUDANTE');
INSERT INTO `tab_cargos_laborales` VALUES ('375', 'PELUQUERO/A-CANINO');
INSERT INTO `tab_cargos_laborales` VALUES ('376', 'PELUQUERO/A-PELUQUERO/A');
INSERT INTO `tab_cargos_laborales` VALUES ('377', 'PEON');
INSERT INTO `tab_cargos_laborales` VALUES ('378', 'PEON AGRICOLA');
INSERT INTO `tab_cargos_laborales` VALUES ('379', 'PEON FORESTAL');
INSERT INTO `tab_cargos_laborales` VALUES ('380', 'PEON GANADERO');
INSERT INTO `tab_cargos_laborales` VALUES ('381', 'PEON-OTROS');
INSERT INTO `tab_cargos_laborales` VALUES ('382', 'PERIODISMO');
INSERT INTO `tab_cargos_laborales` VALUES ('383', 'PERIODISMO-CORRECTOR/A DE TEXTOS');
INSERT INTO `tab_cargos_laborales` VALUES ('384', 'PERIODISMO-REDACTOR/A');
INSERT INTO `tab_cargos_laborales` VALUES ('385', 'PERSONAL DE MANTENIMIENTO');
INSERT INTO `tab_cargos_laborales` VALUES ('386', 'PINTOR/A');
INSERT INTO `tab_cargos_laborales` VALUES ('387', 'POCERO');
INSERT INTO `tab_cargos_laborales` VALUES ('388', 'PRODUCCION DE ESPECTACULOS Y AUDIOVISUALES');
INSERT INTO `tab_cargos_laborales` VALUES ('389', 'PROFESOR/A');
INSERT INTO `tab_cargos_laborales` VALUES ('390', 'PROFESOR/A- DE COCINA');
INSERT INTO `tab_cargos_laborales` VALUES ('391', 'PROFESOR/A-ACTIVIDADES ARTISTICO-MANUALES');
INSERT INTO `tab_cargos_laborales` VALUES ('392', 'PROFESOR/A-ALEMÁN');
INSERT INTO `tab_cargos_laborales` VALUES ('393', 'PROFESOR/A-CLASES PARTICULARES');
INSERT INTO `tab_cargos_laborales` VALUES ('394', 'PROFESOR/A-DANZA');
INSERT INTO `tab_cargos_laborales` VALUES ('395', 'PROFESOR/A-DIPLOMADO/A MAGISTERIO');
INSERT INTO `tab_cargos_laborales` VALUES ('396', 'PROFESOR/A-EDUCACION FISICA');
INSERT INTO `tab_cargos_laborales` VALUES ('397', 'PROFESOR/A-EDUCADOR/A ADULTOS');
INSERT INTO `tab_cargos_laborales` VALUES ('398', 'PROFESOR/A-EDUCADOR/A ESPECIAL');
INSERT INTO `tab_cargos_laborales` VALUES ('399', 'PROFESOR/A-EDUCADOR/A INFANTIL');
INSERT INTO `tab_cargos_laborales` VALUES ('400', 'PROFESOR/A-ENSEÑANZA SECUNDARIA');
INSERT INTO `tab_cargos_laborales` VALUES ('401', 'PROFESOR/A-ENSEÑANZA SUPERIOR');
INSERT INTO `tab_cargos_laborales` VALUES ('402', 'PROFESOR/A-ESPAÑOL PARA EXTRANGEROS');
INSERT INTO `tab_cargos_laborales` VALUES ('403', 'PROFESOR/A-FORMADOR/A INFORMATICA');
INSERT INTO `tab_cargos_laborales` VALUES ('404', 'PROFESOR/A-FRANCES');
INSERT INTO `tab_cargos_laborales` VALUES ('405', 'PROFESOR/A-INGLÉS');
INSERT INTO `tab_cargos_laborales` VALUES ('406', 'PROFESOR/A-MONITOR DE FUTBOL');
INSERT INTO `tab_cargos_laborales` VALUES ('407', 'PROFESOR/A-MONITOR DE NATACION');
INSERT INTO `tab_cargos_laborales` VALUES ('408', 'PROFESOR/A-MONITOR/A DE TIEMPO LIBRE');
INSERT INTO `tab_cargos_laborales` VALUES ('409', 'PROFESOR/A-MUSICA');
INSERT INTO `tab_cargos_laborales` VALUES ('410', 'PROFESOR/A-TAI CHI');
INSERT INTO `tab_cargos_laborales` VALUES ('411', 'PROFESOR/A-UNIVERSIDAD');
INSERT INTO `tab_cargos_laborales` VALUES ('412', 'PROFESOR/A-YOGA');
INSERT INTO `tab_cargos_laborales` VALUES ('413', 'PROGRAMADOR/A');
INSERT INTO `tab_cargos_laborales` VALUES ('414', 'RELACIONES PUBLICAS');
INSERT INTO `tab_cargos_laborales` VALUES ('415', 'RESTAURADOR/A');
INSERT INTO `tab_cargos_laborales` VALUES ('416', 'SANIDAD');
INSERT INTO `tab_cargos_laborales` VALUES ('417', 'SANIDAD-ATS');
INSERT INTO `tab_cargos_laborales` VALUES ('418', 'SANIDAD-AUXILIAR DE CLINICA');
INSERT INTO `tab_cargos_laborales` VALUES ('419', 'SANIDAD-AUXILIAR DE ENFERMERIA');
INSERT INTO `tab_cargos_laborales` VALUES ('420', 'SANIDAD-AUXILIAR DE FARMACIA');
INSERT INTO `tab_cargos_laborales` VALUES ('421', 'SANIDAD-AUXILIAR DE GERIATRIA');
INSERT INTO `tab_cargos_laborales` VALUES ('422', 'SANIDAD-AYUDANTE DE ESTOMATOLOGIA');
INSERT INTO `tab_cargos_laborales` VALUES ('423', 'SANIDAD-BIOQUIMICA');
INSERT INTO `tab_cargos_laborales` VALUES ('424', 'SANIDAD-CELADOR/A');
INSERT INTO `tab_cargos_laborales` VALUES ('425', 'SANIDAD-CUIDADO DE ANCIANOS/AS');
INSERT INTO `tab_cargos_laborales` VALUES ('426', 'SANIDAD-DENTISTA');
INSERT INTO `tab_cargos_laborales` VALUES ('427', 'SANIDAD-DIPLOMADO/A FISIOTERAPIA');
INSERT INTO `tab_cargos_laborales` VALUES ('428', 'SANIDAD-ENFERMERO/A');
INSERT INTO `tab_cargos_laborales` VALUES ('429', 'SANIDAD-FARMACEUTICO/A');
INSERT INTO `tab_cargos_laborales` VALUES ('430', 'SANIDAD-HIGIENISTA DENTAL');
INSERT INTO `tab_cargos_laborales` VALUES ('431', 'SANIDAD-LABORATORIOS');
INSERT INTO `tab_cargos_laborales` VALUES ('432', 'SANIDAD-MASAJISTA');
INSERT INTO `tab_cargos_laborales` VALUES ('433', 'SANIDAD-MEDICO');
INSERT INTO `tab_cargos_laborales` VALUES ('434', 'SANIDAD-ODONTOLOGO/A');
INSERT INTO `tab_cargos_laborales` VALUES ('435', 'SANIDAD-OPTICOS');
INSERT INTO `tab_cargos_laborales` VALUES ('436', 'SANIDAD-OTROS');
INSERT INTO `tab_cargos_laborales` VALUES ('437', 'SANIDAD-PROTESICO DENTAL');
INSERT INTO `tab_cargos_laborales` VALUES ('438', 'SANIDAD-VETERINARIOS/AS');
INSERT INTO `tab_cargos_laborales` VALUES ('439', 'SEGURIDAD');
INSERT INTO `tab_cargos_laborales` VALUES ('440', 'SEGURIDAD-CONSERJE');
INSERT INTO `tab_cargos_laborales` VALUES ('441', 'SEGURIDAD-CONTROLADOR/A DE APARCAMIENTO');
INSERT INTO `tab_cargos_laborales` VALUES ('442', 'SEGURIDAD-DETECTIVE');
INSERT INTO `tab_cargos_laborales` VALUES ('443', 'SEGURIDAD-GUARDA');
INSERT INTO `tab_cargos_laborales` VALUES ('444', 'SEGURIDAD-GUARDA DE OBRA');
INSERT INTO `tab_cargos_laborales` VALUES ('445', 'SEGURIDAD-GUARDAESPALDAS');
INSERT INTO `tab_cargos_laborales` VALUES ('446', 'SEGURIDAD-GUARDIA JURADO');
INSERT INTO `tab_cargos_laborales` VALUES ('447', 'SEGURIDAD-MILITAR');
INSERT INTO `tab_cargos_laborales` VALUES ('448', 'SEGURIDAD-OTROS');
INSERT INTO `tab_cargos_laborales` VALUES ('449', 'SEGURIDAD-POLICIA MUNICIPAL');
INSERT INTO `tab_cargos_laborales` VALUES ('450', 'SEGURIDAD-POLICIA NACIONAL');
INSERT INTO `tab_cargos_laborales` VALUES ('451', 'SEGURIDAD-PORTERO/A');
INSERT INTO `tab_cargos_laborales` VALUES ('452', 'SEGURIDAD-PORTERO/A DE FINCA');
INSERT INTO `tab_cargos_laborales` VALUES ('453', 'SEGURIDAD-VIGILANTE');
INSERT INTO `tab_cargos_laborales` VALUES ('454', 'SERVICIO DOMESTICO-AUX. SERV. PERSONAL');
INSERT INTO `tab_cargos_laborales` VALUES ('455', 'SERVICIOS DOMESTICOS');
INSERT INTO `tab_cargos_laborales` VALUES ('456', 'SERVICIOS DOMESTICOS-AMA DE LLAVES');
INSERT INTO `tab_cargos_laborales` VALUES ('457', 'SERVICIOS DOMESTICOS-CANGURO');
INSERT INTO `tab_cargos_laborales` VALUES ('458', 'SERVICIOS DOMESTICOS-EMPLEADO/A DE HOGAR');
INSERT INTO `tab_cargos_laborales` VALUES ('459', 'SERVICIOS DOMESTICOS-EMPLEADO/A DE HOGAR INTERNA');
INSERT INTO `tab_cargos_laborales` VALUES ('460', 'SERVICIOS DOMESTICOS-LAVANDEROS/AS');
INSERT INTO `tab_cargos_laborales` VALUES ('461', 'SERVICIOS DOMESTICOS-LAVANDEROS/AS, PLANCHADORES/AS');
INSERT INTO `tab_cargos_laborales` VALUES ('462', 'SERVICIOS DOMESTICOS-LIMPIEZA');
INSERT INTO `tab_cargos_laborales` VALUES ('463', 'SERVICIOS DOMESTICOS-LIMPIEZA DE INTERIOR DE EDIFICIOS');
INSERT INTO `tab_cargos_laborales` VALUES ('464', 'SERVICIOS DOMESTICOS-OTROS');
INSERT INTO `tab_cargos_laborales` VALUES ('465', 'SOCORRISTA');
INSERT INTO `tab_cargos_laborales` VALUES ('466', 'SOLADOR/A');
INSERT INTO `tab_cargos_laborales` VALUES ('467', 'SOLDADOR/A');
INSERT INTO `tab_cargos_laborales` VALUES ('468', 'TALLER');
INSERT INTO `tab_cargos_laborales` VALUES ('469', 'TALLER-CHAPISTA');
INSERT INTO `tab_cargos_laborales` VALUES ('470', 'TALLER-ENSAMBLADOR/A');
INSERT INTO `tab_cargos_laborales` VALUES ('471', 'TALLER-FRESADOR/A');
INSERT INTO `tab_cargos_laborales` VALUES ('472', 'TALLER-JEFE/A DE MANTENIMIENTO');
INSERT INTO `tab_cargos_laborales` VALUES ('473', 'TALLER-JEFE/A DE TALLER');
INSERT INTO `tab_cargos_laborales` VALUES ('474', 'TALLER-MECANICA DE AUTOMOVILES');
INSERT INTO `tab_cargos_laborales` VALUES ('475', 'TALLER-MECANICA DE MAQUINARIA');
INSERT INTO `tab_cargos_laborales` VALUES ('476', 'TALLER-MONTADOR/A');
INSERT INTO `tab_cargos_laborales` VALUES ('477', 'TALLER-MOZO/A');
INSERT INTO `tab_cargos_laborales` VALUES ('478', 'TALLER-OTROS');
INSERT INTO `tab_cargos_laborales` VALUES ('479', 'TALLER-TECNICO/A DE ELECTRONICA');
INSERT INTO `tab_cargos_laborales` VALUES ('480', 'TALLER-TECNICO/A DE TELECOMUNICACIONES');
INSERT INTO `tab_cargos_laborales` VALUES ('481', 'TALLER-TRABAJADOR/A DE ARTES GRAFICAS');
INSERT INTO `tab_cargos_laborales` VALUES ('482', 'TAQUILLERO/A');
INSERT INTO `tab_cargos_laborales` VALUES ('483', 'TECNICO DE CULTURA');
INSERT INTO `tab_cargos_laborales` VALUES ('484', 'TECNICO DE IMAGEN');
INSERT INTO `tab_cargos_laborales` VALUES ('485', 'TECNICO DE SEMOVIENTES');
INSERT INTO `tab_cargos_laborales` VALUES ('486', 'TECNICO DE SONIDO');
INSERT INTO `tab_cargos_laborales` VALUES ('487', 'TECNICO EN COMERCIO EXTERIOR');
INSERT INTO `tab_cargos_laborales` VALUES ('488', 'TECNICO EN ELECTRONICA');
INSERT INTO `tab_cargos_laborales` VALUES ('489', 'TECNICO EN ESTADISTICA');
INSERT INTO `tab_cargos_laborales` VALUES ('490', 'TECNICO EN MEDIO AMBIENTE');
INSERT INTO `tab_cargos_laborales` VALUES ('491', 'TECNICO EN PROTECCION CIVIL');
INSERT INTO `tab_cargos_laborales` VALUES ('492', 'TECNICO EN RECURSOS HUMANOS');
INSERT INTO `tab_cargos_laborales` VALUES ('493', 'TECNICO EN SALUD AMBIENTAL');
INSERT INTO `tab_cargos_laborales` VALUES ('494', 'TÉCNICO EN TRATAMIENTO DE AGUAS');
INSERT INTO `tab_cargos_laborales` VALUES ('495', 'TECNICO/A EN PUBLICIDAD');
INSERT INTO `tab_cargos_laborales` VALUES ('496', 'TECNICO/A EN RELAC. PUBLICAS');
INSERT INTO `tab_cargos_laborales` VALUES ('497', 'TECNICO/A PREVENCION RIESGOS LABORALES');
INSERT INTO `tab_cargos_laborales` VALUES ('498', 'TERAPEUTA OCUPACIONAL');
INSERT INTO `tab_cargos_laborales` VALUES ('499', 'TRABAJADOR/A DE LA CERAMICA');
INSERT INTO `tab_cargos_laborales` VALUES ('500', 'TRABAJADOR/A INDUSTRIA TEXTIL');
INSERT INTO `tab_cargos_laborales` VALUES ('501', 'TRABAJADOR/A INDUSTRIA TEXTIL-COSTURERO/A');
INSERT INTO `tab_cargos_laborales` VALUES ('502', 'TRABAJADOR/A SOCIAL');
INSERT INTO `tab_cargos_laborales` VALUES ('503', 'TRADUCTOR/A');
INSERT INTO `tab_cargos_laborales` VALUES ('504', 'TRAMOYISTA');
INSERT INTO `tab_cargos_laborales` VALUES ('505', 'TURISMO');
INSERT INTO `tab_cargos_laborales` VALUES ('506', 'TURISMO- TURISMO RURAL');
INSERT INTO `tab_cargos_laborales` VALUES ('507', 'TURISMO-AGENTE DE VIAJES');
INSERT INTO `tab_cargos_laborales` VALUES ('508', 'TURISMO-AGENTE DE VIAJES');
INSERT INTO `tab_cargos_laborales` VALUES ('509', 'TURISMO-DIPLOMADO/A');
INSERT INTO `tab_cargos_laborales` VALUES ('510', 'TURISMO-GERENTE EMPRESAS TURISMO');
INSERT INTO `tab_cargos_laborales` VALUES ('511', 'TURISMO-GUIA');
INSERT INTO `tab_cargos_laborales` VALUES ('512', 'TURISMO-INFORMADOR/A TURISTICO/A');
INSERT INTO `tab_cargos_laborales` VALUES ('513', 'PROMOTORA');
INSERT INTO `tab_cargos_laborales` VALUES ('514', 'GERENTE DE CIRCULACIÓN');
INSERT INTO `tab_cargos_laborales` VALUES ('515', 'NOTIFICADOR');
INSERT INTO `tab_cargos_laborales` VALUES ('516', 'ESTIMULACIÓN TEMPRANA');
INSERT INTO `tab_cargos_laborales` VALUES ('517', 'AYUDANTE DE PRODUCCIÓN');
INSERT INTO `tab_cargos_laborales` VALUES ('518', 'TECNICA EN PROTECCIÓN INTEGRAL');
INSERT INTO `tab_cargos_laborales` VALUES ('519', 'JEFE DE CASETA');
INSERT INTO `tab_cargos_laborales` VALUES ('520', 'OPERADOR');
INSERT INTO `tab_cargos_laborales` VALUES ('521', 'OPERADOR');
INSERT INTO `tab_cargos_laborales` VALUES ('522', 'VIGILANTE');
INSERT INTO `tab_cargos_laborales` VALUES ('523', 'PROMOTORA');
INSERT INTO `tab_cargos_laborales` VALUES ('524', 'COORDINADORA PEDAGOGICA');
INSERT INTO `tab_cargos_laborales` VALUES ('525', 'ENSAMBLADOR');
INSERT INTO `tab_cargos_laborales` VALUES ('526', 'ASISTENTE EN VENTAS');
INSERT INTO `tab_cargos_laborales` VALUES ('527', 'EMPACADORA');
INSERT INTO `tab_cargos_laborales` VALUES ('528', 'PASAPORTES');
INSERT INTO `tab_cargos_laborales` VALUES ('529', 'AUXILIAR OPERTIVA');
INSERT INTO `tab_cargos_laborales` VALUES ('530', 'VOCERO/A');
INSERT INTO `tab_cargos_laborales` VALUES ('531', 'ANALISTA DE CONTROL DE CALIDAD');
INSERT INTO `tab_cargos_laborales` VALUES ('532', 'TECNICO SERVICIOS BANCARIOS');
INSERT INTO `tab_cargos_laborales` VALUES ('533', 'COORDINADORA DE REDACCION');
INSERT INTO `tab_cargos_laborales` VALUES ('534', 'DOCENTE');
INSERT INTO `tab_cargos_laborales` VALUES ('535', 'EDUCADOR COMUNITARIO');
INSERT INTO `tab_cargos_laborales` VALUES ('536', 'DOCENTE PARVULARIO');
INSERT INTO `tab_cargos_laborales` VALUES ('537', 'EMPACADORA');
INSERT INTO `tab_cargos_laborales` VALUES ('538', 'JEFE DE BODEGA');
INSERT INTO `tab_cargos_laborales` VALUES ('539', 'AUXILIAR DE FARMACIA');
INSERT INTO `tab_cargos_laborales` VALUES ('540', 'AUXILIAR DE FARMACIA');
INSERT INTO `tab_cargos_laborales` VALUES ('541', 'ASISTENTE DE OPERACIONES EN LOGISTICA');
INSERT INTO `tab_cargos_laborales` VALUES ('542', 'INSTALADOR DE PARQUET INDUSTRIAL');
INSERT INTO `tab_cargos_laborales` VALUES ('543', 'CHOFER');
INSERT INTO `tab_cargos_laborales` VALUES ('544', 'PINTADOR');
INSERT INTO `tab_cargos_laborales` VALUES ('545', 'FACILITADORA RURAL COMUNITARIA');
INSERT INTO `tab_cargos_laborales` VALUES ('546', 'ASISTENTE RECURSOS HUMANOS');
INSERT INTO `tab_cargos_laborales` VALUES ('547', 'PROPIETARIO/A');
INSERT INTO `tab_cargos_laborales` VALUES ('548', 'ASISTENTE DE SECRETARÍA');
INSERT INTO `tab_cargos_laborales` VALUES ('549', 'SERVICIO TECNICO');
INSERT INTO `tab_cargos_laborales` VALUES ('550', 'CORTADORA');
INSERT INTO `tab_cargos_laborales` VALUES ('551', 'DIGITADOR');
INSERT INTO `tab_cargos_laborales` VALUES ('552', 'SUPERVISORA');
INSERT INTO `tab_cargos_laborales` VALUES ('553', 'TECNICO');
INSERT INTO `tab_cargos_laborales` VALUES ('554', 'TEJEDORA');
INSERT INTO `tab_cargos_laborales` VALUES ('555', 'CUIDADORA');
INSERT INTO `tab_cargos_laborales` VALUES ('556', 'ARTESANA');
INSERT INTO `tab_cargos_laborales` VALUES ('557', 'AGENTE VENDEDOR');
INSERT INTO `tab_cargos_laborales` VALUES ('558', 'AGENTE VENDEDOR');
INSERT INTO `tab_cargos_laborales` VALUES ('559', 'ESTAMPADOR');
INSERT INTO `tab_cargos_laborales` VALUES ('560', 'DOCENTE PARVULARIA');
INSERT INTO `tab_cargos_laborales` VALUES ('561', 'SERVIDOR PUBLICO');
INSERT INTO `tab_cargos_laborales` VALUES ('562', 'AUDITORA EXTERNA');
INSERT INTO `tab_cargos_laborales` VALUES ('563', 'EJECUTIVA DE SERVICIOS');
INSERT INTO `tab_cargos_laborales` VALUES ('564', 'GERENTE');
INSERT INTO `tab_cargos_laborales` VALUES ('565', 'ASISTENTE DE MIGRACIONES');
INSERT INTO `tab_cargos_laborales` VALUES ('566', 'PLANTACIÓN FORESTAL');
INSERT INTO `tab_cargos_laborales` VALUES ('567', 'SUPERVISOR DE VENTAS');
INSERT INTO `tab_cargos_laborales` VALUES ('568', 'CHOFER');
INSERT INTO `tab_cargos_laborales` VALUES ('569', 'TÉCNICO EN SISTEMAS');
INSERT INTO `tab_cargos_laborales` VALUES ('570', 'OPERADOR');
INSERT INTO `tab_cargos_laborales` VALUES ('571', 'TÉCNICO AUTOMOTRÍZ');
INSERT INTO `tab_cargos_laborales` VALUES ('572', 'RECEPCIONISTA');
INSERT INTO `tab_cargos_laborales` VALUES ('573', 'PROMOTORA');
INSERT INTO `tab_cargos_laborales` VALUES ('574', 'TAREAS DIRIGIDAS A NIÑOS');
INSERT INTO `tab_cargos_laborales` VALUES ('575', 'SERVICIO AL CLIENTE');
INSERT INTO `tab_cargos_laborales` VALUES ('576', 'MÚSICO');
INSERT INTO `tab_cargos_laborales` VALUES ('577', 'MESERA');
INSERT INTO `tab_cargos_laborales` VALUES ('578', 'AUXILIAR CONTABLE');
INSERT INTO `tab_cargos_laborales` VALUES ('579', 'VENDEDORA');
INSERT INTO `tab_cargos_laborales` VALUES ('580', 'VENDEDOR');
INSERT INTO `tab_cargos_laborales` VALUES ('581', 'CONTROL DE CALIDAD');
INSERT INTO `tab_cargos_laborales` VALUES ('582', 'PROMOTOR');
INSERT INTO `tab_cargos_laborales` VALUES ('583', 'TÉCNICO');
INSERT INTO `tab_cargos_laborales` VALUES ('584', 'RECAUDACION');
INSERT INTO `tab_cargos_laborales` VALUES ('585', 'OBRERA');
INSERT INTO `tab_cargos_laborales` VALUES ('586', 'CONTRATISTA');
INSERT INTO `tab_cargos_laborales` VALUES ('587', 'CHOFER');
INSERT INTO `tab_cargos_laborales` VALUES ('588', 'RECEPCIONISTA');
INSERT INTO `tab_cargos_laborales` VALUES ('589', 'EJECUTIVA DE VENTAS');
INSERT INTO `tab_cargos_laborales` VALUES ('590', 'MENSAJERÍA');
INSERT INTO `tab_cargos_laborales` VALUES ('591', 'ADMINISTRACIÓN/DOCENTE');
INSERT INTO `tab_cargos_laborales` VALUES ('592', 'MATERNIDAD');
INSERT INTO `tab_cargos_laborales` VALUES ('593', 'PRESIDENTE EJECUTIVO');
INSERT INTO `tab_cargos_laborales` VALUES ('594', 'DIPLOMATICO');
INSERT INTO `tab_cargos_laborales` VALUES ('595', 'DIRECTOR DEPARTAMENTO DE CULTURA');
INSERT INTO `tab_cargos_laborales` VALUES ('596', 'LOCUTOR');
INSERT INTO `tab_cargos_laborales` VALUES ('597', 'SECRETARIA CONTADORA');
INSERT INTO `tab_cargos_laborales` VALUES ('598', 'BAILARINA');
INSERT INTO `tab_cargos_laborales` VALUES ('599', 'BAILARINA');
INSERT INTO `tab_cargos_laborales` VALUES ('600', 'BAILARINA');
INSERT INTO `tab_cargos_laborales` VALUES ('601', 'AUXILIAR EN COBRANZAS');
INSERT INTO `tab_cargos_laborales` VALUES ('602', 'COMPRAS PUBLICAS');
INSERT INTO `tab_cargos_laborales` VALUES ('603', 'APR');
INSERT INTO `tab_cargos_laborales` VALUES ('604', 'TRABAJADORA AGRICOLA');
INSERT INTO `tab_cargos_laborales` VALUES ('605', 'DANZA');
INSERT INTO `tab_cargos_laborales` VALUES ('606', 'CONFECCIONISTA');
INSERT INTO `tab_cargos_laborales` VALUES ('607', 'JEFE TÉCNICO');
INSERT INTO `tab_cargos_laborales` VALUES ('608', 'ASISTENTE DE CUIDADO');
INSERT INTO `tab_cargos_laborales` VALUES ('609', 'ATENCION AL CLIENTE');
INSERT INTO `tab_cargos_laborales` VALUES ('610', 'EJECUTIVO DE CREDITO');
INSERT INTO `tab_cargos_laborales` VALUES ('611', 'TUTORA');
INSERT INTO `tab_cargos_laborales` VALUES ('612', 'OPERADOR/A DE MAQUINARIA PESADA');
INSERT INTO `tab_cargos_laborales` VALUES ('613', 'BODEGUERO');
INSERT INTO `tab_cargos_laborales` VALUES ('614', 'OBRERO');
INSERT INTO `tab_cargos_laborales` VALUES ('615', 'SECRETARIA');
INSERT INTO `tab_cargos_laborales` VALUES ('616', 'CAJERA');
INSERT INTO `tab_cargos_laborales` VALUES ('617', 'POSCOSECHA');
INSERT INTO `tab_cargos_laborales` VALUES ('618', 'ADMINISTRADORA DE TALENTO HUMANO');
INSERT INTO `tab_cargos_laborales` VALUES ('619', 'COCEDORA');
INSERT INTO `tab_cargos_laborales` VALUES ('620', 'AYUDANTE DE BODEGA');
INSERT INTO `tab_cargos_laborales` VALUES ('621', 'AYUDANTE DE COCINA');
INSERT INTO `tab_cargos_laborales` VALUES ('622', 'OPERARIA');
INSERT INTO `tab_cargos_laborales` VALUES ('623', 'MUESTRISTA');
INSERT INTO `tab_cargos_laborales` VALUES ('624', 'ASESOR DE CREDITO');
INSERT INTO `tab_cargos_laborales` VALUES ('625', 'AUXILIAR DE ENFERMERIA');
INSERT INTO `tab_cargos_laborales` VALUES ('626', 'CORTADOR');
INSERT INTO `tab_cargos_laborales` VALUES ('627', 'AYUDANTE DE DISCOMOVIL');
INSERT INTO `tab_cargos_laborales` VALUES ('628', 'EMPLEADA DOMESTICA');
INSERT INTO `tab_cargos_laborales` VALUES ('629', 'COSTURERA');
INSERT INTO `tab_cargos_laborales` VALUES ('630', 'DISEÑADORA DE MODAS');
INSERT INTO `tab_cargos_laborales` VALUES ('631', 'CAJERO');
INSERT INTO `tab_cargos_laborales` VALUES ('632', 'TÉCNICO EN MAQUINAS');
INSERT INTO `tab_cargos_laborales` VALUES ('633', 'MESERO');
INSERT INTO `tab_cargos_laborales` VALUES ('634', 'AYUDANTE DE INFRAESTRUCTURA');
INSERT INTO `tab_cargos_laborales` VALUES ('635', 'ASISTENTE DE DIRECCIÓN');
INSERT INTO `tab_cargos_laborales` VALUES ('636', 'BONCHADOR');
INSERT INTO `tab_cargos_laborales` VALUES ('637', 'DESPACHADOR');
INSERT INTO `tab_cargos_laborales` VALUES ('638', 'BARTENDERS');
INSERT INTO `tab_cargos_laborales` VALUES ('639', 'NIÑERA');
INSERT INTO `tab_cargos_laborales` VALUES ('640', 'CONDUCTOR');
INSERT INTO `tab_cargos_laborales` VALUES ('641', 'MERCADEO');
INSERT INTO `tab_cargos_laborales` VALUES ('642', 'ALBAÑIL');
INSERT INTO `tab_cargos_laborales` VALUES ('643', 'BRIGADISTA');
INSERT INTO `tab_cargos_laborales` VALUES ('644', 'AUTORIDAD DE LA PARROQUIA- VOCAL');
INSERT INTO `tab_cargos_laborales` VALUES ('645', 'FLORICOLA');
INSERT INTO `tab_cargos_laborales` VALUES ('646', 'SEPARADORES DE CARTONES PARA FLORES');
INSERT INTO `tab_cargos_laborales` VALUES ('647', 'ANALISTA DE CALIDAD');
INSERT INTO `tab_cargos_laborales` VALUES ('648', 'JEFE ADMINISTRATIVO');
INSERT INTO `tab_cargos_laborales` VALUES ('649', 'AREA DE TERMINACIÓN');
INSERT INTO `tab_cargos_laborales` VALUES ('650', 'PARAMÉDICO');
INSERT INTO `tab_cargos_laborales` VALUES ('651', 'COCINERA');
INSERT INTO `tab_cargos_laborales` VALUES ('652', 'JORNALERO');
INSERT INTO `tab_cargos_laborales` VALUES ('653', 'DISEÑO DE CALZADO');
INSERT INTO `tab_cargos_laborales` VALUES ('654', 'INSPECTOR TÉCNICO');
INSERT INTO `tab_cargos_laborales` VALUES ('655', 'DOCENTE ALFABETIZADOR');
INSERT INTO `tab_cargos_laborales` VALUES ('656', 'EDUCADORA');
INSERT INTO `tab_cargos_laborales` VALUES ('657', 'AUXILIAR DE VENTAS');
INSERT INTO `tab_cargos_laborales` VALUES ('658', 'AUXILIAR DE VENTAS');
INSERT INTO `tab_cargos_laborales` VALUES ('659', 'ELABORA ARREGLOS FLORALES');
INSERT INTO `tab_cargos_laborales` VALUES ('660', 'ADMINISTRACIÓN DE TALENTO HUMANO');
INSERT INTO `tab_cargos_laborales` VALUES ('661', 'COORDINADORA DE SECRETARIADO EJECUTIVO');
INSERT INTO `tab_cargos_laborales` VALUES ('662', 'SECRETARIA GENERAL');
INSERT INTO `tab_cargos_laborales` VALUES ('663', 'DIRECTOR ACADÉMICO');
INSERT INTO `tab_cargos_laborales` VALUES ('664', 'JEFE DE PERSONAL');
INSERT INTO `tab_cargos_laborales` VALUES ('665', 'ASISTENTE CONTABLE');
INSERT INTO `tab_cargos_laborales` VALUES ('666', 'ANALISTA UBI');
INSERT INTO `tab_cargos_laborales` VALUES ('667', 'AUXILIAR DE RASTREO SATELITAL');
INSERT INTO `tab_cargos_laborales` VALUES ('668', 'AUXILIAR DE CUIDADO');
INSERT INTO `tab_cargos_laborales` VALUES ('669', 'RECICLADORA');
INSERT INTO `tab_cargos_laborales` VALUES ('670', 'AUXILIAR EN TOPOGRAFIA');
INSERT INTO `tab_cargos_laborales` VALUES ('671', 'VOCAL');
INSERT INTO `tab_cargos_laborales` VALUES ('672', 'JUGADOR DE FUTBOL');
INSERT INTO `tab_cargos_laborales` VALUES ('673', 'TRANSPORTE DE VALORES');
INSERT INTO `tab_cargos_laborales` VALUES ('674', 'PROMOTORA');
INSERT INTO `tab_cargos_laborales` VALUES ('675', 'TAREAS DIRIGIDAS');
INSERT INTO `tab_cargos_laborales` VALUES ('676', 'INSPECTOR');
INSERT INTO `tab_cargos_laborales` VALUES ('677', 'CULTIVO');
INSERT INTO `tab_cargos_laborales` VALUES ('678', 'COORDINADORA');
INSERT INTO `tab_cargos_laborales` VALUES ('679', 'PROMOTORA FAMILIAR');
INSERT INTO `tab_cargos_laborales` VALUES ('680', 'PROMOTORA FAMILIAR');
INSERT INTO `tab_cargos_laborales` VALUES ('681', 'PROMOTORA FAMILIAR');
INSERT INTO `tab_cargos_laborales` VALUES ('682', 'PROMOTORA FAMILIAR');
INSERT INTO `tab_cargos_laborales` VALUES ('683', 'PROMOTORA FAMILIAR');
INSERT INTO `tab_cargos_laborales` VALUES ('684', 'FUMIGADOR');
INSERT INTO `tab_cargos_laborales` VALUES ('685', 'TESORERA');
INSERT INTO `tab_cargos_laborales` VALUES ('686', 'MENSAJERO');
INSERT INTO `tab_cargos_laborales` VALUES ('687', 'ASISTENTE MEDICO CONDUCTOR');
INSERT INTO `tab_cargos_laborales` VALUES ('688', 'PRODUCCION');
INSERT INTO `tab_cargos_laborales` VALUES ('689', 'ESTIMULACION TEMPRANA');
INSERT INTO `tab_cargos_laborales` VALUES ('690', 'POS COSECHA');
INSERT INTO `tab_cargos_laborales` VALUES ('691', 'DESPACHADORA DE MERCADERIA');
INSERT INTO `tab_cargos_laborales` VALUES ('692', 'MENSAJERO');
INSERT INTO `tab_cargos_laborales` VALUES ('693', 'JORNALERA');
INSERT INTO `tab_cargos_laborales` VALUES ('694', 'GUARDIA');
INSERT INTO `tab_cargos_laborales` VALUES ('695', 'RECAUDADOR');
INSERT INTO `tab_cargos_laborales` VALUES ('696', 'FLORICULTOR');
INSERT INTO `tab_cargos_laborales` VALUES ('697', 'AUXILIAR DE RECURSO HUMANOS');
INSERT INTO `tab_cargos_laborales` VALUES ('698', 'DISTRIBUIDOR');
INSERT INTO `tab_cargos_laborales` VALUES ('699', 'RELOCTERA DE FRUTAS');
INSERT INTO `tab_cargos_laborales` VALUES ('700', 'MANTENIMIENTO MAQUINAS DE INFRAESTRUCTURA');
INSERT INTO `tab_cargos_laborales` VALUES ('701', 'AUXILIAR DE TRABAJO SOCIAL');
INSERT INTO `tab_cargos_laborales` VALUES ('702', 'TERAPISTA DE LENGUAJE');
INSERT INTO `tab_cargos_laborales` VALUES ('703', 'TELECOBRANZA');
INSERT INTO `tab_cargos_laborales` VALUES ('704', 'EJECUTIVO COMERCIAL');
INSERT INTO `tab_cargos_laborales` VALUES ('705', 'TEJEDOR');
INSERT INTO `tab_cargos_laborales` VALUES ('706', 'NUTRICIONISTA');
INSERT INTO `tab_cargos_laborales` VALUES ('707', 'NUTRICIONISTA');
INSERT INTO `tab_cargos_laborales` VALUES ('708', 'NUTRICIONISTA');
INSERT INTO `tab_cargos_laborales` VALUES ('709', 'COMISIONISTA');
INSERT INTO `tab_cargos_laborales` VALUES ('710', 'NIÑERA');
INSERT INTO `tab_cargos_laborales` VALUES ('711', 'ZAPATERO');
INSERT INTO `tab_cargos_laborales` VALUES ('712', 'AYUDANTE COMO CONTROLADORA DEL BUS');
INSERT INTO `tab_cargos_laborales` VALUES ('713', 'AYUDANTE DE COCINA');
INSERT INTO `tab_cargos_laborales` VALUES ('714', 'TRABAJADOR');
INSERT INTO `tab_cargos_laborales` VALUES ('715', 'ASESOR CONTAC CENTER');
INSERT INTO `tab_cargos_laborales` VALUES ('716', 'VENDEDORA');
INSERT INTO `tab_cargos_laborales` VALUES ('717', 'SECRETARIA');
INSERT INTO `tab_cargos_laborales` VALUES ('718', 'OPERADORA DE RADIO');
INSERT INTO `tab_cargos_laborales` VALUES ('719', 'SUPERVISOR DE CULTIVO');
INSERT INTO `tab_cargos_laborales` VALUES ('720', 'PARBULARIA');
INSERT INTO `tab_cargos_laborales` VALUES ('721', 'SERVICIO AL CLIENTE');
INSERT INTO `tab_cargos_laborales` VALUES ('722', 'AUXILIAR DE OBRERO');
INSERT INTO `tab_cargos_laborales` VALUES ('723', 'EMPLEADO');
INSERT INTO `tab_cargos_laborales` VALUES ('724', 'EMPLEADA');
INSERT INTO `tab_cargos_laborales` VALUES ('725', 'PROMOTORA');
INSERT INTO `tab_cargos_laborales` VALUES ('726', 'TÉCNICA DE ADULTOS MAYORES');
INSERT INTO `tab_cargos_laborales` VALUES ('727', 'VISITADOR MEDICO');
INSERT INTO `tab_cargos_laborales` VALUES ('728', 'SERVICIOS BANCARIOS');
INSERT INTO `tab_cargos_laborales` VALUES ('729', 'DIRECTOR EN VENTAS');
INSERT INTO `tab_cargos_laborales` VALUES ('730', 'AUXILIAR DE PARVULARIA');
INSERT INTO `tab_cargos_laborales` VALUES ('731', 'ACCESOR COMERCIAL');
INSERT INTO `tab_cargos_laborales` VALUES ('732', 'DISTRIBUIDOR');
INSERT INTO `tab_cargos_laborales` VALUES ('733', 'FACTURACION');
INSERT INTO `tab_cargos_laborales` VALUES ('734', 'AUXILIAR CONTABLE');
INSERT INTO `tab_cargos_laborales` VALUES ('735', 'VENDEDORA');
INSERT INTO `tab_cargos_laborales` VALUES ('736', 'AYUDANTE');
INSERT INTO `tab_cargos_laborales` VALUES ('737', 'AYUDANTE');
INSERT INTO `tab_cargos_laborales` VALUES ('738', 'EJECUTIVO DE NEGOCIOS');
INSERT INTO `tab_cargos_laborales` VALUES ('739', 'MOVILIZA DORA COMUNITARIA');
INSERT INTO `tab_cargos_laborales` VALUES ('740', 'EDUCADORA');
INSERT INTO `tab_cargos_laborales` VALUES ('741', 'ASISTENTE DE DISEÑO');
INSERT INTO `tab_cargos_laborales` VALUES ('742', 'ASISTENTE ADMINISTRATIVO');
INSERT INTO `tab_cargos_laborales` VALUES ('743', 'CAJERO');
INSERT INTO `tab_cargos_laborales` VALUES ('744', 'CHOFER DE SU CAMIONETA');
INSERT INTO `tab_cargos_laborales` VALUES ('745', 'BRIGADISTA');
INSERT INTO `tab_cargos_laborales` VALUES ('746', 'BODEGUERO');
INSERT INTO `tab_cargos_laborales` VALUES ('747', 'BRIGADISTA');
INSERT INTO `tab_cargos_laborales` VALUES ('748', 'NIÑERA');
INSERT INTO `tab_cargos_laborales` VALUES ('749', 'MENSAJERO');

-- ----------------------------
-- Table structure for tab_clientes
-- ----------------------------
DROP TABLE IF EXISTS `tab_clientes`;
CREATE TABLE `tab_clientes` (
  `ID_CLIENTE` int(11) NOT NULL AUTO_INCREMENT,
  `TIPO_DOCUMENTO` char(3) COLLATE utf8_unicode_ci NOT NULL,
  `NRO_DOCUMENTO` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `ID_NATURALEZA_PERSONA` int(11) NOT NULL,
  `ID_TIPO_CONTRIBUYENTE` int(11) NOT NULL,
  `ES_CONTRIBUYENTE_ESPECIAL` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID_CLIENTE`),
  KEY `ID_NATURALEZA_PERSONA` (`ID_NATURALEZA_PERSONA`),
  KEY `ID_TIPO_CONTRIBUYENTE` (`ID_TIPO_CONTRIBUYENTE`),
  CONSTRAINT `tab_clientes_ibfk_1` FOREIGN KEY (`ID_NATURALEZA_PERSONA`) REFERENCES `tab_naturalezas_personas` (`ID_NATURALEZA_PERSONA`) ON UPDATE NO ACTION,
  CONSTRAINT `tab_clientes_ibfk_2` FOREIGN KEY (`ID_TIPO_CONTRIBUYENTE`) REFERENCES `tab_tipos_contribuyentes` (`ID_TIPO_CONTRIBUYENTE`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=131 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tab_clientes
-- ----------------------------
INSERT INTO `tab_clientes` VALUES ('4', 'C', '1722225164', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('5', 'C', '1718064312', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('6', 'C', '1725337263', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('7', 'C', '1002794459', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('8', 'C', '0503708851', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('9', 'C', '1719859025', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('10', 'C', '1717309494', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('11', 'C', '1719417923', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('12', 'C', '1714386842', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('13', 'C', '0104963608', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('14', 'C', '1722902408', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('15', 'C', '0604850073', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('16', 'C', '1715899439', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('17', 'C', '1718447517', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('18', 'C', '1725042376', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('19', 'C', '1600801235', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('20', 'C', '0104965793', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('21', 'C', '1104199185', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('22', 'C', '1315802635', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('23', 'C', '1725899684', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('24', 'C', '1751537141', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('25', 'C', '1718549833', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('26', 'C', '1900467539', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('27', 'C', '1719360354', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('28', 'C', '1314041136', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('29', 'C', '1721455242', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('30', 'C', '1721753901', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('31', 'C', '1720108164', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('32', 'C', '1725054702', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('33', 'C', '1711116788', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('34', 'C', '1715491989', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('35', 'C', '1756982680', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('36', 'R', '1085293332', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('37', 'C', '1707125322', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('38', 'C', '1722649413', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('39', 'C', '0603148974', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('40', 'C', '1002411088', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('41', 'C', '1718916446', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('42', 'C', '1710826890', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('43', 'C', '1313163451', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('44', 'C', '1002017414', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('45', 'C', '1720457504', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('46', 'C', '2200367627', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('47', 'C', '1719242537', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('48', 'C', '1724522352', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('49', 'C', '1721763710', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('50', 'C', '1716210339', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('51', 'C', '1755882550', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('52', 'C', '1719387332', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('53', 'C', '1753851482', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('54', 'C', '1309080941', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('55', 'C', '1311753725', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('56', 'C', '1707896047', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('57', 'C', '1802030443', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('58', 'C', '1718651019', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('59', 'C', '1701799759', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('60', 'C', '1714994017', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('61', 'C', '1720447117', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('62', 'C', '2013943275', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('63', 'C', '0705300143', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('64', 'C', '1720010907', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('65', 'C', '1723491690', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('66', 'C', '1102583281', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('67', 'C', '1721232328', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('68', 'C', '1105036303', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('69', 'C', '1722520192', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('70', 'C', '1711193852', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('71', 'C', '1721828661', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('72', 'C', '1722393442', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('73', 'C', '1721713277', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('74', 'C', '1716945207', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('75', 'C', '1720275583', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('76', 'C', '1750033142', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('77', 'C', '1714897699', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('78', 'C', '1751217637', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('79', 'C', '1727489260', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('80', 'C', '1722780408', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('81', 'C', '1500800824', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('82', 'C', '1713314456', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('83', 'C', '1725568362', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('84', 'C', '1754462503', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('85', 'C', '1805411491', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('86', 'C', '1713880464', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('87', 'C', '1720916004', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('88', 'C', '1722275987', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('89', 'C', '1716848484', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('90', 'C', '2100224787', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('91', 'C', '2100458005', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('92', 'C', '1725438343', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('93', 'C', '1724370562', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('94', 'C', '1726947656', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('95', 'C', '0502940570', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('96', 'C', '1754205035', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('97', 'C', '1755120050', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('98', 'C', '1721625141', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('99', 'C', '0104441894', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('100', 'C', '1723793301', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('101', 'C', '1714949078', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('102', 'C', '1712777729', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('103', 'C', '1715286736', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('105', 'C', '1720411436', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('106', 'C', '1104602691', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('107', 'C', '1400745046', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('108', 'C', '1755412523', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('109', 'C', '2350167553', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('110', 'C', '1751383587', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('111', 'C', '0401325865', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('112', 'C', '1705309381', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('113', 'C', '1104233570', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('114', 'C', '1755054176', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('115', 'C', '1003873682', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('116', 'C', '1721983045', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('117', 'C', '1718858051', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('118', 'C', '1718188392', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('119', 'R', '31306978', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('120', 'C', '1715431704', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('121', 'C', '1725292526', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('122', 'C', '1717902553', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('123', 'C', '1311625584', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('124', 'C', '1718337296', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('125', 'C', '1711503290', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('126', 'C', '1721584827', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('127', 'C', '1712913084', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('128', 'C', '1755034012', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('129', 'C', '1718687419', '1', '1', '0');
INSERT INTO `tab_clientes` VALUES ('130', 'C', '1712793395', '1', '1', '0');

-- ----------------------------
-- Table structure for tab_clientes_juridicos
-- ----------------------------
DROP TABLE IF EXISTS `tab_clientes_juridicos`;
CREATE TABLE `tab_clientes_juridicos` (
  `ID_CLIENTE` int(11) NOT NULL,
  `NOMBRE_COMERCIAL` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `RAZON_SOCIAL` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ID_REPRESENTANTE` int(11) DEFAULT NULL,
  `ES_PUBLICO` tinyint(1) NOT NULL DEFAULT '0',
  `ES_SIN_FINES_DE_LUCRO` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID_CLIENTE`),
  KEY `ID_REPRESSENTANTE` (`ID_REPRESENTANTE`),
  CONSTRAINT `tab_clientes_juridicos_ibfk_1` FOREIGN KEY (`ID_CLIENTE`) REFERENCES `tab_clientes` (`ID_CLIENTE`) ON UPDATE NO ACTION,
  CONSTRAINT `tab_clientes_juridicos_ibfk_2` FOREIGN KEY (`ID_REPRESENTANTE`) REFERENCES `tab_representantes` (`ID_REPRESENTANTE`) ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tab_clientes_juridicos
-- ----------------------------

-- ----------------------------
-- Table structure for tab_clientes_naturales
-- ----------------------------
DROP TABLE IF EXISTS `tab_clientes_naturales`;
CREATE TABLE `tab_clientes_naturales` (
  `ID_CLIENTE` int(11) NOT NULL,
  `ID_PERSONA` int(11) NOT NULL,
  PRIMARY KEY (`ID_CLIENTE`),
  KEY `ID_PERSONA` (`ID_PERSONA`),
  CONSTRAINT `tab_clientes_naturales_ibfk_1` FOREIGN KEY (`ID_CLIENTE`) REFERENCES `tab_clientes` (`ID_CLIENTE`) ON UPDATE NO ACTION,
  CONSTRAINT `tab_clientes_naturales_ibfk_2` FOREIGN KEY (`ID_PERSONA`) REFERENCES `tab_personas` (`ID_PERSONA`) ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tab_clientes_naturales
-- ----------------------------
INSERT INTO `tab_clientes_naturales` VALUES ('4', '4');
INSERT INTO `tab_clientes_naturales` VALUES ('5', '5');
INSERT INTO `tab_clientes_naturales` VALUES ('6', '6');
INSERT INTO `tab_clientes_naturales` VALUES ('7', '7');
INSERT INTO `tab_clientes_naturales` VALUES ('8', '8');
INSERT INTO `tab_clientes_naturales` VALUES ('9', '9');
INSERT INTO `tab_clientes_naturales` VALUES ('10', '10');
INSERT INTO `tab_clientes_naturales` VALUES ('11', '11');
INSERT INTO `tab_clientes_naturales` VALUES ('12', '12');
INSERT INTO `tab_clientes_naturales` VALUES ('13', '13');
INSERT INTO `tab_clientes_naturales` VALUES ('14', '14');
INSERT INTO `tab_clientes_naturales` VALUES ('15', '15');
INSERT INTO `tab_clientes_naturales` VALUES ('16', '16');
INSERT INTO `tab_clientes_naturales` VALUES ('17', '17');
INSERT INTO `tab_clientes_naturales` VALUES ('18', '18');
INSERT INTO `tab_clientes_naturales` VALUES ('19', '19');
INSERT INTO `tab_clientes_naturales` VALUES ('20', '20');
INSERT INTO `tab_clientes_naturales` VALUES ('21', '21');
INSERT INTO `tab_clientes_naturales` VALUES ('22', '22');
INSERT INTO `tab_clientes_naturales` VALUES ('23', '23');
INSERT INTO `tab_clientes_naturales` VALUES ('24', '24');
INSERT INTO `tab_clientes_naturales` VALUES ('25', '25');
INSERT INTO `tab_clientes_naturales` VALUES ('26', '26');
INSERT INTO `tab_clientes_naturales` VALUES ('27', '27');
INSERT INTO `tab_clientes_naturales` VALUES ('28', '28');
INSERT INTO `tab_clientes_naturales` VALUES ('29', '29');
INSERT INTO `tab_clientes_naturales` VALUES ('30', '30');
INSERT INTO `tab_clientes_naturales` VALUES ('31', '31');
INSERT INTO `tab_clientes_naturales` VALUES ('32', '32');
INSERT INTO `tab_clientes_naturales` VALUES ('33', '33');
INSERT INTO `tab_clientes_naturales` VALUES ('34', '34');
INSERT INTO `tab_clientes_naturales` VALUES ('35', '35');
INSERT INTO `tab_clientes_naturales` VALUES ('36', '36');
INSERT INTO `tab_clientes_naturales` VALUES ('37', '37');
INSERT INTO `tab_clientes_naturales` VALUES ('38', '38');
INSERT INTO `tab_clientes_naturales` VALUES ('39', '39');
INSERT INTO `tab_clientes_naturales` VALUES ('40', '40');
INSERT INTO `tab_clientes_naturales` VALUES ('41', '41');
INSERT INTO `tab_clientes_naturales` VALUES ('42', '42');
INSERT INTO `tab_clientes_naturales` VALUES ('43', '43');
INSERT INTO `tab_clientes_naturales` VALUES ('44', '44');
INSERT INTO `tab_clientes_naturales` VALUES ('45', '45');
INSERT INTO `tab_clientes_naturales` VALUES ('46', '46');
INSERT INTO `tab_clientes_naturales` VALUES ('47', '47');
INSERT INTO `tab_clientes_naturales` VALUES ('48', '48');
INSERT INTO `tab_clientes_naturales` VALUES ('49', '49');
INSERT INTO `tab_clientes_naturales` VALUES ('50', '50');
INSERT INTO `tab_clientes_naturales` VALUES ('51', '51');
INSERT INTO `tab_clientes_naturales` VALUES ('52', '52');
INSERT INTO `tab_clientes_naturales` VALUES ('53', '53');
INSERT INTO `tab_clientes_naturales` VALUES ('54', '54');
INSERT INTO `tab_clientes_naturales` VALUES ('55', '55');
INSERT INTO `tab_clientes_naturales` VALUES ('56', '56');
INSERT INTO `tab_clientes_naturales` VALUES ('57', '57');
INSERT INTO `tab_clientes_naturales` VALUES ('58', '58');
INSERT INTO `tab_clientes_naturales` VALUES ('59', '59');
INSERT INTO `tab_clientes_naturales` VALUES ('60', '60');
INSERT INTO `tab_clientes_naturales` VALUES ('61', '61');
INSERT INTO `tab_clientes_naturales` VALUES ('62', '62');
INSERT INTO `tab_clientes_naturales` VALUES ('63', '63');
INSERT INTO `tab_clientes_naturales` VALUES ('64', '64');
INSERT INTO `tab_clientes_naturales` VALUES ('65', '65');
INSERT INTO `tab_clientes_naturales` VALUES ('66', '66');
INSERT INTO `tab_clientes_naturales` VALUES ('67', '67');
INSERT INTO `tab_clientes_naturales` VALUES ('68', '68');
INSERT INTO `tab_clientes_naturales` VALUES ('69', '69');
INSERT INTO `tab_clientes_naturales` VALUES ('70', '70');
INSERT INTO `tab_clientes_naturales` VALUES ('71', '71');
INSERT INTO `tab_clientes_naturales` VALUES ('72', '72');
INSERT INTO `tab_clientes_naturales` VALUES ('73', '73');
INSERT INTO `tab_clientes_naturales` VALUES ('74', '74');
INSERT INTO `tab_clientes_naturales` VALUES ('75', '75');
INSERT INTO `tab_clientes_naturales` VALUES ('76', '76');
INSERT INTO `tab_clientes_naturales` VALUES ('77', '77');
INSERT INTO `tab_clientes_naturales` VALUES ('78', '78');
INSERT INTO `tab_clientes_naturales` VALUES ('79', '79');
INSERT INTO `tab_clientes_naturales` VALUES ('80', '80');
INSERT INTO `tab_clientes_naturales` VALUES ('81', '81');
INSERT INTO `tab_clientes_naturales` VALUES ('82', '82');
INSERT INTO `tab_clientes_naturales` VALUES ('83', '83');
INSERT INTO `tab_clientes_naturales` VALUES ('84', '84');
INSERT INTO `tab_clientes_naturales` VALUES ('85', '85');
INSERT INTO `tab_clientes_naturales` VALUES ('86', '86');
INSERT INTO `tab_clientes_naturales` VALUES ('87', '87');
INSERT INTO `tab_clientes_naturales` VALUES ('88', '88');
INSERT INTO `tab_clientes_naturales` VALUES ('89', '89');
INSERT INTO `tab_clientes_naturales` VALUES ('90', '90');
INSERT INTO `tab_clientes_naturales` VALUES ('91', '91');
INSERT INTO `tab_clientes_naturales` VALUES ('92', '92');
INSERT INTO `tab_clientes_naturales` VALUES ('93', '93');
INSERT INTO `tab_clientes_naturales` VALUES ('94', '94');
INSERT INTO `tab_clientes_naturales` VALUES ('95', '95');
INSERT INTO `tab_clientes_naturales` VALUES ('96', '96');
INSERT INTO `tab_clientes_naturales` VALUES ('97', '97');
INSERT INTO `tab_clientes_naturales` VALUES ('98', '98');
INSERT INTO `tab_clientes_naturales` VALUES ('99', '99');
INSERT INTO `tab_clientes_naturales` VALUES ('100', '100');
INSERT INTO `tab_clientes_naturales` VALUES ('101', '101');
INSERT INTO `tab_clientes_naturales` VALUES ('102', '102');
INSERT INTO `tab_clientes_naturales` VALUES ('103', '103');
INSERT INTO `tab_clientes_naturales` VALUES ('105', '105');
INSERT INTO `tab_clientes_naturales` VALUES ('106', '106');
INSERT INTO `tab_clientes_naturales` VALUES ('107', '107');
INSERT INTO `tab_clientes_naturales` VALUES ('108', '108');
INSERT INTO `tab_clientes_naturales` VALUES ('109', '109');
INSERT INTO `tab_clientes_naturales` VALUES ('110', '110');
INSERT INTO `tab_clientes_naturales` VALUES ('111', '111');
INSERT INTO `tab_clientes_naturales` VALUES ('112', '112');
INSERT INTO `tab_clientes_naturales` VALUES ('113', '113');
INSERT INTO `tab_clientes_naturales` VALUES ('114', '114');
INSERT INTO `tab_clientes_naturales` VALUES ('115', '115');
INSERT INTO `tab_clientes_naturales` VALUES ('116', '116');
INSERT INTO `tab_clientes_naturales` VALUES ('117', '117');
INSERT INTO `tab_clientes_naturales` VALUES ('118', '118');
INSERT INTO `tab_clientes_naturales` VALUES ('119', '119');
INSERT INTO `tab_clientes_naturales` VALUES ('120', '120');
INSERT INTO `tab_clientes_naturales` VALUES ('121', '121');
INSERT INTO `tab_clientes_naturales` VALUES ('122', '122');
INSERT INTO `tab_clientes_naturales` VALUES ('123', '123');
INSERT INTO `tab_clientes_naturales` VALUES ('124', '124');
INSERT INTO `tab_clientes_naturales` VALUES ('125', '125');
INSERT INTO `tab_clientes_naturales` VALUES ('126', '126');
INSERT INTO `tab_clientes_naturales` VALUES ('127', '127');
INSERT INTO `tab_clientes_naturales` VALUES ('128', '128');
INSERT INTO `tab_clientes_naturales` VALUES ('129', '129');
INSERT INTO `tab_clientes_naturales` VALUES ('130', '130');

-- ----------------------------
-- Table structure for tab_contactos
-- ----------------------------
DROP TABLE IF EXISTS `tab_contactos`;
CREATE TABLE `tab_contactos` (
  `ID_CONTACTO` bigint(20) NOT NULL AUTO_INCREMENT,
  `CORREO_ELECTRONICO` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ID_PAIS` int(11) DEFAULT NULL,
  `ID_PROVINCIA` int(11) DEFAULT NULL,
  `ID_CANTON` int(11) DEFAULT NULL,
  `ID_PARROQUIA` int(11) DEFAULT NULL,
  `DIRECCION_CALLE_PRINCIPAL` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DIRECCION_NUMERO` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DIRECCION_CALLE_SECUNDARIA1` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DIRECCION_CALLE_SECUNDARIA2` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DIRECCION_REFERENCIA` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TELEFONO` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CELULAR` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ID_OPERADOR_TELEFONICO` int(11) DEFAULT NULL,
  `ID_TIPO_CONTACTO` int(11) NOT NULL,
  `DESCRIPCION` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ID_CLIENTE` int(11) DEFAULT NULL,
  `ESTADO` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`ID_CONTACTO`),
  KEY `fk_tipos_contacto` (`ID_TIPO_CONTACTO`),
  KEY `ID_CLIENTE` (`ID_CLIENTE`),
  KEY `ID_PAIS` (`ID_PAIS`),
  KEY `ID_PROVINCIA` (`ID_PROVINCIA`),
  KEY `ID_CANTON` (`ID_CANTON`),
  KEY `ID_PARROQUIA` (`ID_PARROQUIA`),
  KEY `ID_OPERADOR_TELEFONICO` (`ID_OPERADOR_TELEFONICO`),
  CONSTRAINT `fk_tipos_contacto` FOREIGN KEY (`ID_TIPO_CONTACTO`) REFERENCES `tab_tipos_contacto` (`ID_TIPO_CONTACTO`) ON UPDATE NO ACTION,
  CONSTRAINT `tab_contactos_ibfk_1` FOREIGN KEY (`ID_CLIENTE`) REFERENCES `tab_clientes` (`ID_CLIENTE`) ON UPDATE NO ACTION,
  CONSTRAINT `tab_contactos_ibfk_2` FOREIGN KEY (`ID_PAIS`) REFERENCES `tab_paises` (`ID_PAIS`) ON UPDATE NO ACTION,
  CONSTRAINT `tab_contactos_ibfk_3` FOREIGN KEY (`ID_PROVINCIA`) REFERENCES `tab_provincias` (`ID_PROVINCIA`) ON UPDATE NO ACTION,
  CONSTRAINT `tab_contactos_ibfk_4` FOREIGN KEY (`ID_CANTON`) REFERENCES `tab_cantones` (`ID_CANTON`) ON UPDATE NO ACTION,
  CONSTRAINT `tab_contactos_ibfk_5` FOREIGN KEY (`ID_PARROQUIA`) REFERENCES `tab_parroquias` (`ID_PARROQUIA`) ON UPDATE NO ACTION,
  CONSTRAINT `tab_contactos_ibfk_6` FOREIGN KEY (`ID_OPERADOR_TELEFONICO`) REFERENCES `tab_operadoras_telefonicas` (`ID_OPERADOR_TELEFONICO`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=137 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tab_contactos
-- ----------------------------
INSERT INTO `tab_contactos` VALUES ('4', 'mis-helita96@hotmail.com', '1', '19', '190', '1133', 'ENCOMENDEROS', 'OE11-104', 'ITURRALDE', null, null, '02-263-0252', '09-8323-6019', '3', '2', null, '4', '1');
INSERT INTO `tab_contactos` VALUES ('5', 'aida.ortiz92@outhllook.com', '1', '19', '190', '1133', 'MANUEL CORONADO', 'OE7-48', 'MARISCAL SUCRE', null, null, '02-284-2863', '09-9672-6688', '4', '2', null, '5', '1');
INSERT INTO `tab_contactos` VALUES ('6', 'karolains_@hotmail.com', '1', '19', '190', '1127', 'jose becerra', 'S2-108', 'SERANGE', null, null, '02-282-0230', '09-8491-3127', '3', '2', null, '6', '1');
INSERT INTO `tab_contactos` VALUES ('7', 'muenagakelly@gmail.com', '1', '19', '190', '1146', 'SAN FERNANDO', null, 'OCCIDENTAL', null, null, '02-292-2244', '09-8835-2524', '2', '2', null, '7', '1');
INSERT INTO `tab_contactos` VALUES ('8', 'diani_1508@hotmail.com', '1', '19', '190', '1146', 'NACIONES UNIDAS', 'DTO203', 'AMAZONAS', null, null, null, '09-9842-4778', '3', '2', null, '8', '1');
INSERT INTO `tab_contactos` VALUES ('9', 'pftg84@hotmail.com', '1', '19', '190', '1133', 'P1', '468', 'P2', null, null, '02-312-7112', '09-8350-9287', '3', '2', null, '9', '1');
INSERT INTO `tab_contactos` VALUES ('10', 'ximetorresg17@yahoo.com', '1', '19', '190', '1133', 'P1', 'OE11-290', 'P2', null, null, '02-263-6486', '09-9348-3890', '2', '2', null, '10', '1');
INSERT INTO `tab_contactos` VALUES ('11', 'marichacon83@hotmail.com', '1', '19', '190', '1133', 'FRANCISCO RUEDA', 'S19-151', 'SALVADOR BRAVO', null, null, '02-268-4125', '09-8331-2660', '3', '2', null, '11', '0');
INSERT INTO `tab_contactos` VALUES ('12', 'fernanda_rojas30@yahoo.es', '1', '19', '190', '1180', 'AV DE LOS EMISFERIOS', 'N1-130', 'EQUINOCCIAL', null, null, '02-239-5679', '09-8397-5094', '3', '2', null, '12', '1');
INSERT INTO `tab_contactos` VALUES ('13', 'coello.dani@gmail.com', '1', '19', '190', '1188', 'ROSA VELEZ', 'LOTE6', 'CARLOTA JARAMILLO', null, null, '02-204-6696', '09-9592-9324', '3', '2', null, '13', '1');
INSERT INTO `tab_contactos` VALUES ('14', 'nicolecarolinaemaldnd@gmail.com', '1', '19', '190', '1127', 'SAN CAMILO', 'N5-39', 'SANTA INES', null, null, '02-202-0839', '09-8381-2332', '3', '2', null, '14', '1');
INSERT INTO `tab_contactos` VALUES ('15', 'joseline-95@hotmail.es', '1', '19', '190', '1149', 'SAN MIGUEL DE ANA GAES', 'N52-540', 'LAS AVIJILAS', null, null, '02-241-9515', '09-9906-3004', '3', '2', null, '15', '1');
INSERT INTO `tab_contactos` VALUES ('16', 'svcc_24@hotrmail.com', '1', '19', '190', '1137', 'BENJAMIN CARRION', '14', 'CONJUNTO VALDEPRADO 2', null, null, '02-380-1052', '09-8759-3707', '3', '2', null, '16', '1');
INSERT INTO `tab_contactos` VALUES ('17', 'cejaramillome@hotmail.com', '1', '19', '190', '1138', 'UNIURCO', 'N80-105', 'PARALELA', null, null, '02-338-1565', '09-8890-9281', '2', '2', null, '17', '1');
INSERT INTO `tab_contactos` VALUES ('18', 'jazprincess1996@hotmail.es', '1', '19', '190', '1153', 'hermanad ferroviaria', 'S13-115', 'CARLOS ALVAREZ', null, null, '02-311-2119', '09-9922-2045', '3', '2', null, '18', '1');
INSERT INTO `tab_contactos` VALUES ('19', 'ok.carrascoortiz@gmail.com', '1', '19', '190', '1151', 'jose paredes', '122', 'felix ora la bad', null, null, null, '09-8433-2516', '3', '2', null, '19', '1');
INSERT INTO `tab_contactos` VALUES ('20', 'caroamoroso@hotmail.com', '1', '19', '190', '1139', 'LEONARDO DAVINCHI', 'DTO 202', 'LA FLORENCIA', null, null, '02-355-1452', '09-8460-0830', '3', '2', null, '20', '1');
INSERT INTO `tab_contactos` VALUES ('21', 'sofias_1015@hotmail.com', '1', '19', '190', '1149', '6 DE DICIEMBRE', 'EDIF TORRES 1006', 'PORTETE', null, null, '02-333-3061', '09-8717-2573', '3', '2', null, '21', '1');
INSERT INTO `tab_contactos` VALUES ('22', 'pamelamieles3@gmail.com', '1', '19', '190', '1155', 'AJAVI', 'S15-146', 'SOZORANGA', null, null, '02-262-7285', '09-9693-1642', '2', '2', null, '22', '1');
INSERT INTO `tab_contactos` VALUES ('23', 'bcevalloscriollo@gmail.com', '1', '19', '191', '1196', 'GARCIA MORENO', '1189', 'BOLIVAR', null, null, '02-233-6241', '09-8245-6187', '4', '2', null, '23', '1');
INSERT INTO `tab_contactos` VALUES ('24', 'nicoletoro25@gmail.com', '1', '19', '190', '1128', 'JOSE DE LAS CARRETAS', 'UR. URABA', 'LOTE3', null, null, '02-380-7248', '09-8558-6042', '2', '2', null, '24', '1');
INSERT INTO `tab_contactos` VALUES ('25', 'ale_jp14@hotmail.com', '1', '19', '190', '1172', 'LOS CEREZOS', 'CONJ.BARCINO 1', 'PSJE E 16', null, null, '02-247-6879', '09-9888-6874', '3', '2', null, '25', '1');
INSERT INTO `tab_contactos` VALUES ('26', 'salomecarrion1@gmail.com', '1', '19', '190', '1138', 'PEDRO FREILE', 'PSJE D', 'ANGEL LUDEÑA', null, null, '02-229-7319', '09-9178-8601', '2', '2', null, '26', '1');
INSERT INTO `tab_contactos` VALUES ('27', 'elileovene@gmail.com', '1', '19', '190', '1151', 'RAFAEL CUERVO', null, 'AV. LA FLORIDA', null, null, '02-333-0173', '09-8765-2845', '3', '2', null, '27', '1');
INSERT INTO `tab_contactos` VALUES ('28', 'lisbethcarol15@hotmail.com', '1', '19', '190', '1160', 'MARISCAL SUCRE', null, 'TOACASO', null, null, null, '09-8594-2842', '2', '2', null, '28', '1');
INSERT INTO `tab_contactos` VALUES ('29', 'kathy_100preamor@hotmail.com', '1', '19', '190', '1127', 'CONJUNTO EL CONDOR', '1514', null, null, null, null, '09-9642-4761', '4', '2', null, '29', '0');
INSERT INTO `tab_contactos` VALUES ('30', 'aselit@hotmail.com', '1', '19', '190', '1171', 'AV MANUEL CORDOVA GALARZA', 'KM10/2 CASA 20', 'CIUDAD EL SOL 1', null, null, '02-239-7607', '09-8747-0427', '3', '2', null, '30', '1');
INSERT INTO `tab_contactos` VALUES ('31', 'pamefj89@hotmail.com', '1', '19', '190', '1148', 'AZUCENAS', 'N44-214', 'AV. GRANADOS', null, null, '02-225-6932', '09-8764-4566', '3', '2', null, '31', '1');
INSERT INTO `tab_contactos` VALUES ('32', 'alejandra.freire@outhlook.es', '1', '19', '190', '1138', 'MACHALA', 'N59-28', 'ANGEL LUDEÑA', null, null, '02-259-7222', '09-9520-1684', '3', '2', null, '32', '1');
INSERT INTO `tab_contactos` VALUES ('33', 'michellhernandez2205@hotmail.com', '1', '19', '190', '1128', 'DIEGO DE VASQUEZ', '03', 'LIRIOS DE CARCELEN', null, null, '02-233-8065', '09-8630-5029', '2', '2', null, '33', '1');
INSERT INTO `tab_contactos` VALUES ('34', 'dommynox@gmail.com', '1', '19', '190', '1148', 'AV DE LOS GARNADOS', 'CONJ.EL BATAN ', '6 DE DICIEMBRE', null, null, '02-245-6461', '09-9700-0172', '2', '2', null, '34', '1');
INSERT INTO `tab_contactos` VALUES ('35', 'jesusantonio1970@outlook.com', '1', '19', '190', '1155', 'AV LIBERTADORES', null, null, null, null, '02-264-2603', '09-9281-3230', '3', '2', null, '35', '1');
INSERT INTO `tab_contactos` VALUES ('36', 'fernandobruschypriori@gmail.com', '1', '19', '190', '1127', 'MARIANAS', null, null, null, null, '09-842-2151', '09-9523-5790', '3', '2', null, '36', '1');
INSERT INTO `tab_contactos` VALUES ('37', 'drapatriciasalinas@live.com', '1', '19', '190', '1138', 'NASACOTA PUENTO', 'EO3-280', 'REAL AUDIENCIA', null, null, '02-259-1210', '09-8371-6265', '3', '2', null, '37', '1');
INSERT INTO `tab_contactos` VALUES ('38', 'ivonne.nnarvaez@gmail.com', '1', '19', '190', '1147', 'BUGA', 'N12-27', 'GUATEMALA', null, null, '02-257-1733', '09-8421-4811', '3', '2', null, '38', '1');
INSERT INTO `tab_contactos` VALUES ('39', 'ladycesen@gmail.com', '1', '19', '190', '1137', 'ABEL GILBER', 'CASA 24', 'SEBASTIAN DE BENALCAZAR', null, null, '02-381-0585', '09-7909-6328', '3', '2', null, '39', '1');
INSERT INTO `tab_contactos` VALUES ('40', 'soledad_helen@yahoo.es', '1', '19', '186', '1114', 'RUMIÑAHUI', '1003', 'ISIDRO AYORA', null, null, '02-285-5420', '09-8546-5364', '2', '2', null, '40', '1');
INSERT INTO `tab_contactos` VALUES ('41', 'tattyslae@hotmail.com', '1', '19', '190', '1128', 'panamericana norte', 'C97', 'QUILLAY', null, null, '02-242-8423', '09-9505-8001', '3', '2', null, '41', '1');
INSERT INTO `tab_contactos` VALUES ('42', 'yviviana22@yahoo.es', '1', '19', '190', '1134', 'CALLE J', '20-63', 'ALFONSO MORA', null, null, '02-232-3044', '09-8436-7077', '3', '2', null, '42', '1');
INSERT INTO `tab_contactos` VALUES ('43', 'anitabermellito@gmail.com', '1', '19', '190', '1138', 'AV OCCIDENTAL', null, 'BERNANDO LEON Y DIEGO DE MORA', null, null, null, '09-5874-4972', '3', '2', null, '43', '1');
INSERT INTO `tab_contactos` VALUES ('44', 'yhadita2@gmail.com', '1', '19', '190', '1146', 'AMAZONAS', 'EDIF.AMAZONAS PARK', null, null, null, '02-511-1194', '09-8932-5727', '2', '2', null, '44', '1');
INSERT INTO `tab_contactos` VALUES ('45', 'cris_pr@hotmail.com', '1', '19', '190', '1133', 'JULIO ANDRADE', 'S48-183', 'CARLOS ESPIN', null, null, '02-297-5421', '09-8472-2369', '3', '2', null, '45', '1');
INSERT INTO `tab_contactos` VALUES ('46', 'kathy_100preamor@hotmail.com', '1', '19', '190', '1127', '6 DE DICIEMBRE', '6038', 'JUAN MOLINEROS', null, null, null, '09-9642-4761', null, '2', null, '29', '0');
INSERT INTO `tab_contactos` VALUES ('47', 'kathy_100preamor@hotmail.com', '1', '19', '190', '1127', '6 DE DICIEMBRE', '6038', 'JUAN MOLINEROS', null, null, '02-346-4775', '09-9642-4761', null, '2', null, '29', '1');
INSERT INTO `tab_contactos` VALUES ('48', 'yilitzarivadeneira@hotmail.com', '1', '19', '190', '1136', 'XXXX', 'XX', 'XX', null, null, '02-280-6435', '09-6978-4610', '2', '2', null, '46', '0');
INSERT INTO `tab_contactos` VALUES ('49', 'johannatoledo1994@hotmail.com', '1', '19', '190', '1138', 'MACHALA', 'N60-160', 'FLAVIO ALFARO', null, null, '02-259-8131', '09-9271-1826', '3', '2', null, '47', '1');
INSERT INTO `tab_contactos` VALUES ('50', 'dan-i0609@hotmail.com', '1', '19', '190', '1138', 'REAL AUDIENCIA', 'OE160', 'BELLAVISTA', null, null, '02-259-0631', '09-8444-1138', '3', '2', null, '48', '1');
INSERT INTO `tab_contactos` VALUES ('51', 'yilitzarivadeneira@hotmail.com', '1', '19', '190', '1136', 'AV JORGE GARCES', 'N54-164', 'BALTAZAR CARRION', null, null, '02-280-6435', '09-6978-4610', null, '2', null, '46', '1');
INSERT INTO `tab_contactos` VALUES ('52', 'and_001@live.com', '1', '19', '190', '1128', 'CALLE A', ' E7-102', 'N91', null, null, '02-248-0869', '09-8348-8415', '3', '2', null, '49', '1');
INSERT INTO `tab_contactos` VALUES ('53', 'mgmv2935@yahoo.es', '1', '19', '190', '1138', 'BACA DE CASTRO', 'S/N', 'HUACHI', null, null, '02-600-3390', '09-8070-6445', '2', '2', null, '50', '1');
INSERT INTO `tab_contactos` VALUES ('54', 'mayra@tecnologicolendan.net', '1', '19', '190', '1138', 'SIN DATO', null, null, null, null, '00-251-2627', '09-8383-3437', null, '2', null, '51', '1');
INSERT INTO `tab_contactos` VALUES ('55', 'liliana@tecnologicolendan.net', '1', '19', '190', null, 'SIN DATO', null, null, null, null, '00-291-8247', '09-9265-8538', null, '2', null, '52', '1');
INSERT INTO `tab_contactos` VALUES ('56', 'deproyectos@tecnologicolendan.net', '1', '19', '190', null, 'SAN CARLOS', null, null, null, null, null, '09-8224-6391', null, '2', null, '53', '0');
INSERT INTO `tab_contactos` VALUES ('57', 'aracely@tecnologicolendan.net', '1', '19', '190', null, 'PONCIANO ALTO', null, null, null, null, '00-514-3868', '09-7983-7475', null, '2', null, '54', '1');
INSERT INTO `tab_contactos` VALUES ('58', 'amendoza@tecnologicolendan.net', '1', '19', '190', null, 'SAN VICENTE', null, null, null, null, '00-245-3725', '09-8241-5768', null, '2', null, '55', '1');
INSERT INTO `tab_contactos` VALUES ('59', 'alexsosaq@tecnologicolendan.net', '1', '19', '190', null, 'EL INCA', null, null, null, null, '00-240-3002', '09-9904-4771', null, '2', null, '56', '1');
INSERT INTO `tab_contactos` VALUES ('60', 'cecynu@tecnologicolendan.net', '1', '19', '190', null, 'SANTA LUCIA', null, null, null, 'SANTA LUCIA /6 DE DICIEMBRE', '00-346-4763', '09-9603-7190', null, '2', null, '57', '1');
INSERT INTO `tab_contactos` VALUES ('61', 'damaris@tecnologicolendan.net', '1', '19', '190', null, 'CARCELÉN', null, null, null, 'CARCELÉN', null, '09-9415-9570', null, '2', null, '58', '1');
INSERT INTO `tab_contactos` VALUES ('62', 'anaespinosa@tecnologicolendan.net', '1', '19', '190', null, 'CUMBAYA ', null, null, null, 'CUMBAYA ', '09-987-7589', null, null, '2', null, '59', '1');
INSERT INTO `tab_contactos` VALUES ('63', 'yessymendez16@tecnologicolendan.net', '1', '19', '190', null, 'AV. MARISCAL SUCRE', null, null, null, 'AV. MARISCAL SUCRE Y GONZALO VALDIVIESO', '00-229-6243', '09-9569-0892', null, '2', null, '60', '1');
INSERT INTO `tab_contactos` VALUES ('64', 'nutricion@tecnologicolendan.net', '1', '19', '190', null, 'EL COMERCIO', null, null, null, 'EL COMERCIO Y EL DIA', '00-224-4939', '09-8499-4190', null, '2', null, '61', '1');
INSERT INTO `tab_contactos` VALUES ('65', 'froman@tecnologicolendan.net', '1', '19', '190', null, 'AV.MANUEL CORDOVA ', null, null, null, 'AV.MANUEL CORDOVA GALARZA/PARACAYACU', null, '09-9168-3322', null, '2', null, '62', '1');
INSERT INTO `tab_contactos` VALUES ('66', 'lisbeth@tecnologicolendan.net', '1', '19', '190', null, 'LA GASCA', null, null, null, 'LA GASCA', null, '09-8331-7665', null, '2', null, '63', '1');
INSERT INTO `tab_contactos` VALUES ('67', 'nenearle4@tecnologicolendan.net', '1', '19', '190', null, 'LA FLORIDA', null, null, null, 'LA FLORIDA', '00-244-0524', '09-8452-6830', null, '2', null, '64', '1');
INSERT INTO `tab_contactos` VALUES ('68', 'claudia@tecnologicolendan.net', '1', '19', '190', null, 'PINAR ALTO', null, null, null, 'PINAR ALTO', '00-327-0940', '09-8440-4485', null, '2', null, '65', '1');
INSERT INTO `tab_contactos` VALUES ('69', 'rectorado@tecnologicolendan.net', '1', '19', '190', null, 'JARDINES DE CARCELEN', null, null, null, 'JARDINES DE CARCELEN', '02-242-5976', '09-8771-3377', null, '2', null, '66', '1');
INSERT INTO `tab_contactos` VALUES ('70', 'deproyectos@tecnologicolendan.net', '1', '19', '190', null, 'SAN CARLOS', null, null, null, 'SAN CARLOS', null, '09-8224-6391', null, '2', null, '53', '1');
INSERT INTO `tab_contactos` VALUES ('71', 'goovys_gd@hotmail.com', '1', '19', '190', '1128', 'calle a', 'CASA 562', 'PASJE ', null, null, '02-344-1019', '09-8420-3296', '3', '2', null, '67', '1');
INSERT INTO `tab_contactos` VALUES ('72', 'elyd_12@hotmail.com', '1', '19', '190', '1127', 'VANCOUVERTH', 'N8-21', 'PASJE OE4', null, null, '02-603-5870', '09-8309-9031', '3', '2', null, '68', '1');
INSERT INTO `tab_contactos` VALUES ('73', 'ana_leon1995@hotmail.com', '1', '19', '190', '1171', 'MANUEL CORDOVA GALARZA', 'CONJ.CIUDAD DEL SOL ', null, null, null, '02-343-3810', '09-8247-5238', '4', '2', null, '69', '1');
INSERT INTO `tab_contactos` VALUES ('74', 'evita_rubi@hotmail.com', '1', '19', '190', '1128', 'CALLE 7', 'COJ.VILLA URBANA ', 'LOS CIRUELOS', null, null, '02-280-8175', '09-9906-4986', '3', '2', null, '70', '1');
INSERT INTO `tab_contactos` VALUES ('75', 'kathysweet_666@hotmail.com', '1', '19', '190', '1138', 'CALLE 7', null, null, null, null, null, '09-9167-1929', '2', '2', null, '71', '1');
INSERT INTO `tab_contactos` VALUES ('76', 'eusa08@hotmail.com', '1', '19', '190', '1127', 'SECTOR JARDINES DEL SOL', null, null, null, null, '02-384-0140', '09-6883-4994', '2', '2', null, '72', '1');
INSERT INTO `tab_contactos` VALUES ('77', 'c19-victori@hotmail.es', '1', '19', '190', '1182', 'PSJ.E14C', 'N53-50', 'GENERAL MAMNUEL TAMAYO', null, null, '02-603-6147', '09-9576-5993', '3', '2', null, '73', '0');
INSERT INTO `tab_contactos` VALUES ('78', 'cnfranco@udlanet.ec', '1', '19', '190', '1140', 'URB. EL CONADO', 'CALLE V', null, null, null, '02-357-4328', '09-9545-4921', '3', '2', null, '74', '1');
INSERT INTO `tab_contactos` VALUES ('79', 'nicille_macas@outlook.es', '1', '19', '190', '1128', 'alonso de jerez', 'E2-25', 'JUAN CORREA', null, null, '02-247-3034', '09-9588-8785', '3', '2', null, '75', '1');
INSERT INTO `tab_contactos` VALUES ('80', 'veida_v@hotmail.com', '1', '19', '190', '1146', 'MAÑOSCA', null, 'MELCHOR LORIEGA', null, null, null, '09-9552-6935', '4', '2', null, '76', '1');
INSERT INTO `tab_contactos` VALUES ('81', 'stepaniecarolinaayala@gmail.com', '1', '19', '190', '1138', 'guillermo cornejo', 'N61-123', 'RIGOBERTO HEREDIA', null, null, '02-259-5474', '09-9856-6061', '3', '2', null, '77', '1');
INSERT INTO `tab_contactos` VALUES ('82', 'gisellenoemi@gmail.com', '1', '19', '190', '1138', 'ELOY ALFARO', null, 'JOSE CORREA', null, null, null, '09-9488-8705', '2', '2', null, '78', '1');
INSERT INTO `tab_contactos` VALUES ('83', 'jerustethania@hotmail.com', '1', '19', '190', '1137', 'SUCRE', 'S451', 'FLORES', null, null, '02-207-3246', '09-8470-8609', '3', '2', null, '79', '1');
INSERT INTO `tab_contactos` VALUES ('84', 'krlamarg1989@gmail.com', '1', '19', '190', '1127', 'ALABA', 'COJ.VILLAS 3', 'CASA 6', null, null, null, '09-8390-7622', '3', '2', null, '80', '1');
INSERT INTO `tab_contactos` VALUES ('85', 'alejita_gh@hotmail.es', '1', '19', '190', '1148', 'REINALDO ESPINOSA', null, 'JULIO ARELLANO', null, null, null, '09-8331-3030', '3', '2', null, '81', '1');
INSERT INTO `tab_contactos` VALUES ('86', 'ximenagomez20@hotmail.com', '1', '19', '190', '1146', 'PANAMA', 'N1548', 'BUENOS AIRES', null, null, '02-255-7775', '09-6963-2934', '2', '2', null, '82', '1');
INSERT INTO `tab_contactos` VALUES ('87', 'pamela_mc.96@hotmail.com', '1', '19', '190', '1134', 'GUAJALO', null, null, null, null, '02-273-2470', '09-8777-1133', '3', '2', null, '83', '1');
INSERT INTO `tab_contactos` VALUES ('88', 'dianaiza13@hotmail.com', '1', '19', '190', '1133', 'TRANSITO', 'CALLE A', 'MONJAS', null, null, '02-305-4434', '09-8450-2038', '3', '2', null, '84', '1');
INSERT INTO `tab_contactos` VALUES ('89', 'vacamedinaj@gmail.com', '1', '19', '190', '1148', 'ELOY ALFARO', null, 'PERALES', null, null, '02-334-2263', '09-5881-1155', '4', '2', null, '85', '1');
INSERT INTO `tab_contactos` VALUES ('90', 'sambitta2@hotmail.com', '1', '19', '190', '1128', 'GUALAQUIZA CONDOMINIO LOS REYES', '47', 'AV. VASQUEZ DE CEPEDA', null, null, '02-259-3882', '09-8469-8494', '3', '2', null, '86', '1');
INSERT INTO `tab_contactos` VALUES ('91', 'erika.lara2010@hotmail.com', '1', '19', '191', '1196', 'AV.GRAL ENRIQUEZ', '757', 'MONTUFAR', null, null, null, '09-7913-6572', '3', '2', null, '87', '1');
INSERT INTO `tab_contactos` VALUES ('92', 'xxxxxxxx@hotmail.com', '1', '19', '190', '1128', 'BELLAVISTA', 'N65', 'LAS CASCADAS', null, null, null, '09-9741-6711', '3', '2', null, '88', '1');
INSERT INTO `tab_contactos` VALUES ('93', 'fercha33@hotmail.es', '1', '19', '190', '1151', 'OCCIDENTAL', 'CONJ.CORDILLERA', 'MELCHOR DE VALDEZ', null, null, '02-513-1218', '09-8384-8266', '4', '2', null, '89', '1');
INSERT INTO `tab_contactos` VALUES ('94', 'diana_gonz001@hotmail.com', '1', '19', '190', '1154', 'COLON', 'OE3-31', 'VERSALLLES', null, null, '02-255-6034', '09-8622-3463', '2', '2', null, '90', '1');
INSERT INTO `tab_contactos` VALUES ('95', 'kyml@hotmail.es', '1', '19', '190', '1151', 'BRASIL', 'COJ.CIUDAD REAL', 'ALCIVAR', null, null, '02-244-9737', '09-9882-1639', '3', '2', null, '91', '1');
INSERT INTO `tab_contactos` VALUES ('96', 'chinadiaznol@hotmail.com', '1', '19', '190', '1128', 'URB. URABA CALLE G', 'CASA 115', null, null, null, '02-380-7139', '09-8479-5831', '2', '2', null, '92', '1');
INSERT INTO `tab_contactos` VALUES ('97', 'tania.salome.fiscal@gmail.com', '1', '19', '190', '1138', 'CALLE DE LOS MOLLES', 'N64-101', 'JAIME ALBUJA', null, null, '02-256-3586', '09-9540-2463', '3', '2', null, '93', '1');
INSERT INTO `tab_contactos` VALUES ('98', 'ame.gonzalezz@hotmail.com', '1', '19', '190', '1128', 'AV GALO PLAZA LASSO', 'CONJ.COLINA', 'CASA A2 BELLAVISTA', null, null, '02-515-3967', '09-5891-8103', '3', '2', null, '94', '1');
INSERT INTO `tab_contactos` VALUES ('99', 'saga393@yahoo.com', '1', '19', '190', '1155', 'MICHELENA', 'S11-48', 'CABO TIPANTUÑA', null, null, null, '09-7872-4020', '3', '2', null, '95', '1');
INSERT INTO `tab_contactos` VALUES ('100', 'nejoeid@hotmail.com', '1', '19', '190', '1160', 'MARISCAL FOSH', 'EDI 404 LOS LARES', 'JOSE TAMAYO', null, null, '02-290-7504', '09-9927-7242', '3', '2', null, '96', '1');
INSERT INTO `tab_contactos` VALUES ('101', 'ambar.acgt20@hotmail.com', '1', '19', '190', '1155', 'EL CANELO', 'OE9-229', 'S12E', null, null, '02-602-5283', '09-9935-4497', '2', '2', null, '97', '1');
INSERT INTO `tab_contactos` VALUES ('102', 'mayra.hervas03@gmail.com', '1', '19', '191', '1195', 'AMBATO', 'LOTE 30', 'QUEVEDO', null, null, '02-233-3041', '09-7923-6199', '3', '2', null, '98', '1');
INSERT INTO `tab_contactos` VALUES ('103', 'dani-aa1997@hotmail.com', '1', '19', '190', '1146', 'MAÑOSCA', 'EDF.SANTA CRUZ', 'OCCIDENTAL', null, null, '02-600-7087', '09-8393-9677', '3', '2', null, '99', '1');
INSERT INTO `tab_contactos` VALUES ('104', 'lil_paty95@hotmail.com', '1', '19', '190', '1138', 'LOS ESCULTORES', 'OE2-212', 'AV.REAL AUDIENCIA', null, null, '02-280-7741', '09-9967-5878', '4', '2', null, '100', '1');
INSERT INTO `tab_contactos` VALUES ('105', 'meryfuela_81@hotmail.com', '1', '19', '190', '1137', 'SANTA MONICA ALTA', 'M4-44', 'PASAJE G', null, null, '02-234-8821', '09-9299-5848', '3', '2', null, '101', '1');
INSERT INTO `tab_contactos` VALUES ('106', 'joferli2014@gmail.com', '1', '19', '190', '1180', 'LA CURIA', 'COJ.CACA162', 'LULUMBAMBA', null, null, '02-351-8126', '09-9581-8551', '3', '2', null, '102', '1');
INSERT INTO `tab_contactos` VALUES ('107', 'acmm893@gmail.com', '1', '19', '190', '1139', 'RODRIGUEZ', '116', 'VALENZUELA', null, null, '02-289-6348', '09-8435-9701', '3', '2', null, '103', '1');
INSERT INTO `tab_contactos` VALUES ('109', 'churos128@hotmail.com', '1', '19', '190', '1147', 'CONSUELO BENAVIDES', 'S643', 'T', null, null, '02-260-8335', '09-6833-6024', '2', '2', null, '105', '1');
INSERT INTO `tab_contactos` VALUES ('110', 'arevalojocelyne@gmail.com', '1', '19', '190', '1149', 'JOAQUIN SUMALTA', 'N47-301', 'SEBASTIAN ARMAS', null, null, '02-256-4017', '09-9029-0611', '3', '2', null, '106', '1');
INSERT INTO `tab_contactos` VALUES ('111', 'majonarvaezortiz@gmail.com', '1', '19', '190', '1149', 'JOAQUIN SUMALTA', 'N47-301', 'SEBASTIAN ARMAS', null, null, '07-304-8190', '09-9370-6815', '2', '2', null, '107', '1');
INSERT INTO `tab_contactos` VALUES ('112', 'tefam13@gmail.com', '1', '19', '190', '1137', 'AUTOPISTA RUMIÑAHUI', '116 BLOQ.A', 'PASJE LONTAG', null, null, '02-283-5644', '09-8939-3866', '2', '2', null, '108', '1');
INSERT INTO `tab_contactos` VALUES ('113', 'diani-carol@hotmail.com', '1', '19', '190', '1149', 'ELOY ALFARO', '69', 'PEDRO MALDONADO', null, null, '02-276-5865', '09-8223-7915', '4', '2', null, '109', '1');
INSERT INTO `tab_contactos` VALUES ('114', 'lsandoval55@hotmail.com', '1', '19', '190', '1153', 'EL CONDE', '5B', 'AV. TURUBAMBA', null, null, '02-301-1208', '09-9819-3905', '3', '2', null, '110', '1');
INSERT INTO `tab_contactos` VALUES ('115', 'vanne1208@hotmail.com', '1', '19', '190', '1147', 'BOLIVIA', 'OE6-79', 'AV. UNIVERSITARIA', null, null, '02-513-0498', '09-9173-3814', '2', '2', null, '111', '1');
INSERT INTO `tab_contactos` VALUES ('116', 'marichacon131@gmail.com', '1', '19', '190', '1133', 'FRANCISCO RUEDA', 'S19-151', 'SALVADOR BRAVO', null, null, '02-268-4125', '09-8331-2660', '3', '2', null, '11', '1');
INSERT INTO `tab_contactos` VALUES ('117', null, '1', '19', '190', null, 'MITAD DEL MUNDO', null, null, null, null, '02-156-6088', null, null, '2', null, '112', '1');
INSERT INTO `tab_contactos` VALUES ('118', 'alejabarmal@hotmail.com', '1', '19', '190', '1137', 'PADRE JOSE CAROLO', null, 'CESAR VILLACIS', null, null, null, '09-9927-4474', '2', '2', null, '113', '1');
INSERT INTO `tab_contactos` VALUES ('119', 'sanmosque@hotmail.com', '1', '19', '190', '1140', 'CALLE E', 'N72-212', 'CALLE  N', null, null, '02-249-5835', '09-8760-7784', '3', '2', null, '114', '1');
INSERT INTO `tab_contactos` VALUES ('120', 'SOFIADOMENICA97@OUTLOOK.COM', '1', '19', '190', '1138', 'MENA DEL HIERRO', null, 'CONJ. EL PRADO N7', null, null, null, '09-8533-4830', '2', '2', null, '115', '1');
INSERT INTO `tab_contactos` VALUES ('121', 'kellymoreno21@hotmail.com', '1', '19', '190', '1138', '3ra TRANSVERSAL', 'N80-142', 'LOS PINOS', null, null, '02-338-1783', '09-8314-5434', '3', '2', null, '116', '1');
INSERT INTO `tab_contactos` VALUES ('122', 'madein9.grace@gmail.com', '1', '19', '190', '1148', 'PARIS', 'N43', 'TOMAS DE BERLANGA', null, null, '02-600-3901', '09-8756-1676', '2', '2', null, '117', '1');
INSERT INTO `tab_contactos` VALUES ('123', 'sunmyjofreire@gmail.com', '1', '19', '190', '1146', 'AV. EDMUNDO CARVAJAL', 'PASAJE  C', 'CONJUNTO CASA GRANDE', null, null, '02-246-4565', '09-9275-9798', '3', '2', null, '118', '1');
INSERT INTO `tab_contactos` VALUES ('124', 'johanna.0726@hotmail.com', '1', '19', '190', '1138', 'MARIA DE LA VEGA S/N', 'DTO.302', 'MANUELA QUIROGA', null, null, null, '09-9856-9416', '3', '2', null, '119', '1');
INSERT INTO `tab_contactos` VALUES ('125', 'carol_chinchin@hotmail.com', '1', '19', '190', '1138', 'LA OCCIDENTAL', 'DTO 235', 'MACHALA', null, null, '02-249-3280', '09-8421-0786', '3', '2', null, '120', '1');
INSERT INTO `tab_contactos` VALUES ('126', 'sydney.96.0807@gmail.com', '1', '19', '190', '1127', 'CARLOS MANTILLA', 'CASA11', 'CALLE CICILIA', null, null, '02-203-2415', '09-8558-1106', '2', '2', null, '121', '1');
INSERT INTO `tab_contactos` VALUES ('127', 'sogark@hotmail.com', '1', '19', '190', '1172', 'AV. JHON F KENEDY', 'N67-64', 'RAMON CHIRIBOGA', null, null, '02-253-0942', '09-8390-1433', '3', '2', null, '122', '1');
INSERT INTO `tab_contactos` VALUES ('128', 'panesoza@hotmail.com', '1', '19', '190', '1146', 'EDMUNDO CARVAJAL', 'N43-16', 'PASJE F', null, null, '02-226-2034', '09-8112-5252', '2', '2', null, '123', '1');
INSERT INTO `tab_contactos` VALUES ('129', 'frias-gera@hotmail.com', '1', '19', '190', '1149', 'JUAN DE AVILA', 'E6-67', 'PEDRO DE COLLAZOS', null, null, '02-264-8592', '09-8410-7631', '3', '2', null, '124', '1');
INSERT INTO `tab_contactos` VALUES ('130', 'POLO.BENIGNO@GMAIL.COM', '1', '19', '190', '1160', 'AMAZONAS', 'N21-147', 'RAMON ROCA', null, null, null, '09-9803-7214', '3', '2', null, '125', '1');
INSERT INTO `tab_contactos` VALUES ('131', 'TATIANA@TECNOLOGICOLENDAN.NET', '1', '19', '190', '1149', 'EL DIA ', null, 'EL TELEGRAFO', null, null, null, '09-8458-7750', '3', '2', null, '126', '1');
INSERT INTO `tab_contactos` VALUES ('132', 'ANITA3591@LIVE.COM', '1', '19', '190', '1122', 'ZAMORA URBA PLAYA CHICA 2', 'CASA 6', null, null, null, '02-286-0245', '09-8441-9526', '3', '2', null, '127', '1');
INSERT INTO `tab_contactos` VALUES ('133', 'carencadena-@hotmail.es', '1', '19', '190', '1138', 'LA OCCIDENTAL', 'N59-116', 'D Y F', null, null, '02-341-4366', '09-9591-0900', '3', '2', null, '128', '1');
INSERT INTO `tab_contactos` VALUES ('134', 'c19-victori@hotmail.es', '1', '19', '190', '1127', 'ALAVA', 'N9-166', 'GEOVANY CALLES', null, null, '02-282-9869', '09-9576-5993', '3', '2', null, '73', '1');
INSERT INTO `tab_contactos` VALUES ('135', 'llerenadiego168@gmail.com', '1', '19', '190', '1137', 'JUANA PINTO', 'N4-22', 'E8C', null, null, '02-234-1530', '09-9821-2944', '4', '2', null, '129', '1');
INSERT INTO `tab_contactos` VALUES ('136', 'PATY_0875@HOTMAIL.COM', '1', '19', '190', '1133', 'ALFARO PAREDES', 'PSJA 1 CASA OE6-160', null, null, null, '02-366-1063', '09-9038-0284', '2', '2', null, '130', '1');

-- ----------------------------
-- Table structure for tab_estados_civiles
-- ----------------------------
DROP TABLE IF EXISTS `tab_estados_civiles`;
CREATE TABLE `tab_estados_civiles` (
  `ID_ESTADO_CIVIL` decimal(6,0) NOT NULL,
  `ESTADO_CIVIL` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID_ESTADO_CIVIL`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tab_estados_civiles
-- ----------------------------
INSERT INTO `tab_estados_civiles` VALUES ('1', 'SOLTERO(A)');
INSERT INTO `tab_estados_civiles` VALUES ('2', 'CASADO(A)');
INSERT INTO `tab_estados_civiles` VALUES ('3', 'UNION LIBRE');
INSERT INTO `tab_estados_civiles` VALUES ('4', 'VIUDO(A)');
INSERT INTO `tab_estados_civiles` VALUES ('5', 'DIVORCIADO(A)');

-- ----------------------------
-- Table structure for tab_generos
-- ----------------------------
DROP TABLE IF EXISTS `tab_generos`;
CREATE TABLE `tab_generos` (
  `ID_GENERO` int(11) NOT NULL AUTO_INCREMENT,
  `GENERO` varchar(9) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ABREVIATURA_GENERO` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID_GENERO`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tab_generos
-- ----------------------------
INSERT INTO `tab_generos` VALUES ('1', 'MASCULINO', 'M');
INSERT INTO `tab_generos` VALUES ('2', 'FEMENINO', 'F');

-- ----------------------------
-- Table structure for tab_grupos_culturales
-- ----------------------------
DROP TABLE IF EXISTS `tab_grupos_culturales`;
CREATE TABLE `tab_grupos_culturales` (
  `ID_GRUPO_CULTURAL` int(11) NOT NULL AUTO_INCREMENT,
  `GRUPO_CULTURAL` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID_GRUPO_CULTURAL`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tab_grupos_culturales
-- ----------------------------
INSERT INTO `tab_grupos_culturales` VALUES ('1', 'MESTIZO');
INSERT INTO `tab_grupos_culturales` VALUES ('2', 'BLANCO');
INSERT INTO `tab_grupos_culturales` VALUES ('3', 'INDÍGENA');
INSERT INTO `tab_grupos_culturales` VALUES ('4', 'NEGRO');
INSERT INTO `tab_grupos_culturales` VALUES ('5', 'MONTUBIOS');
INSERT INTO `tab_grupos_culturales` VALUES ('6', 'ASIÁTICO');
INSERT INTO `tab_grupos_culturales` VALUES ('7', 'AFROECUATORIANO');

-- ----------------------------
-- Table structure for tab_nacionalidades
-- ----------------------------
DROP TABLE IF EXISTS `tab_nacionalidades`;
CREATE TABLE `tab_nacionalidades` (
  `ID_NACIONALIDAD` int(11) NOT NULL AUTO_INCREMENT,
  `NACIONALIDAD` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID_NACIONALIDAD`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tab_nacionalidades
-- ----------------------------
INSERT INTO `tab_nacionalidades` VALUES ('1', 'AFGANA');
INSERT INTO `tab_nacionalidades` VALUES ('2', 'ALEMANA');
INSERT INTO `tab_nacionalidades` VALUES ('3', 'ÁRABE');
INSERT INTO `tab_nacionalidades` VALUES ('4', 'ARGENTINA');
INSERT INTO `tab_nacionalidades` VALUES ('5', 'AUSTRALIANA');
INSERT INTO `tab_nacionalidades` VALUES ('6', 'BELGA');
INSERT INTO `tab_nacionalidades` VALUES ('7', 'BOLIVIANA');
INSERT INTO `tab_nacionalidades` VALUES ('8', 'BRASILERA');
INSERT INTO `tab_nacionalidades` VALUES ('9', 'CAMBOYANA');
INSERT INTO `tab_nacionalidades` VALUES ('10', 'CANADIENSE');
INSERT INTO `tab_nacionalidades` VALUES ('11', 'CHILENA');
INSERT INTO `tab_nacionalidades` VALUES ('12', 'CHINA');
INSERT INTO `tab_nacionalidades` VALUES ('13', 'COLOMBIANA');
INSERT INTO `tab_nacionalidades` VALUES ('14', 'COREANA');
INSERT INTO `tab_nacionalidades` VALUES ('15', 'COSTARRICENSE');
INSERT INTO `tab_nacionalidades` VALUES ('16', 'CUBANA');
INSERT INTO `tab_nacionalidades` VALUES ('17', 'DANESA');
INSERT INTO `tab_nacionalidades` VALUES ('18', 'ECUATORIANA');
INSERT INTO `tab_nacionalidades` VALUES ('19', 'EGIPCIA');
INSERT INTO `tab_nacionalidades` VALUES ('20', 'SALVADOREÑA');
INSERT INTO `tab_nacionalidades` VALUES ('21', 'ESPAÑOLA');
INSERT INTO `tab_nacionalidades` VALUES ('22', 'ESTADOUNIDENSE');
INSERT INTO `tab_nacionalidades` VALUES ('23', 'ESTONIA');
INSERT INTO `tab_nacionalidades` VALUES ('24', 'ETIOPE');
INSERT INTO `tab_nacionalidades` VALUES ('25', 'FILIPINA');
INSERT INTO `tab_nacionalidades` VALUES ('26', 'FINLANDESA');
INSERT INTO `tab_nacionalidades` VALUES ('27', 'FRANCESA');
INSERT INTO `tab_nacionalidades` VALUES ('28', 'GALESA');
INSERT INTO `tab_nacionalidades` VALUES ('29', 'GRIEGA');
INSERT INTO `tab_nacionalidades` VALUES ('30', 'GUATEMALTECA');
INSERT INTO `tab_nacionalidades` VALUES ('31', 'HAITIANA');
INSERT INTO `tab_nacionalidades` VALUES ('32', 'HOLANDESA');
INSERT INTO `tab_nacionalidades` VALUES ('33', 'HONDUREÑA');
INSERT INTO `tab_nacionalidades` VALUES ('34', 'INDONESA');
INSERT INTO `tab_nacionalidades` VALUES ('35', 'INGLESA');
INSERT INTO `tab_nacionalidades` VALUES ('36', 'IRLANDESA');
INSERT INTO `tab_nacionalidades` VALUES ('37', 'ISRAELÍ');
INSERT INTO `tab_nacionalidades` VALUES ('38', 'ITALIANA');
INSERT INTO `tab_nacionalidades` VALUES ('39', 'JAPONESA');
INSERT INTO `tab_nacionalidades` VALUES ('40', 'JORDANA');
INSERT INTO `tab_nacionalidades` VALUES ('41', 'LAOSIANA');
INSERT INTO `tab_nacionalidades` VALUES ('42', 'LETONA');
INSERT INTO `tab_nacionalidades` VALUES ('43', 'LETONESA');
INSERT INTO `tab_nacionalidades` VALUES ('44', 'MALAYA');
INSERT INTO `tab_nacionalidades` VALUES ('45', 'MARROQUÍ');
INSERT INTO `tab_nacionalidades` VALUES ('46', 'MEXICANA');
INSERT INTO `tab_nacionalidades` VALUES ('47', 'NICARAGÜENSE');
INSERT INTO `tab_nacionalidades` VALUES ('48', 'NORUEGA');
INSERT INTO `tab_nacionalidades` VALUES ('49', 'NEOCELANDESA');
INSERT INTO `tab_nacionalidades` VALUES ('50', 'PANAMEÑA');
INSERT INTO `tab_nacionalidades` VALUES ('51', 'PARAGUAYA');
INSERT INTO `tab_nacionalidades` VALUES ('52', 'PERUANA');
INSERT INTO `tab_nacionalidades` VALUES ('53', 'POLACA');
INSERT INTO `tab_nacionalidades` VALUES ('54', 'PORTUGUESA');
INSERT INTO `tab_nacionalidades` VALUES ('55', 'PUERTORRIQUEÑO');
INSERT INTO `tab_nacionalidades` VALUES ('56', 'DOMINICANA');
INSERT INTO `tab_nacionalidades` VALUES ('57', 'RUMANA');
INSERT INTO `tab_nacionalidades` VALUES ('58', 'RUSA');
INSERT INTO `tab_nacionalidades` VALUES ('59', 'SUECA');
INSERT INTO `tab_nacionalidades` VALUES ('60', 'SUIZA');
INSERT INTO `tab_nacionalidades` VALUES ('61', 'TAILANDESA');
INSERT INTO `tab_nacionalidades` VALUES ('62', 'TAIWANESA');
INSERT INTO `tab_nacionalidades` VALUES ('63', 'TURCA');
INSERT INTO `tab_nacionalidades` VALUES ('64', 'UCRANIANA');
INSERT INTO `tab_nacionalidades` VALUES ('65', 'URUGUAYA');
INSERT INTO `tab_nacionalidades` VALUES ('66', 'VENEZOLANA');
INSERT INTO `tab_nacionalidades` VALUES ('67', 'VIETNAMITA');

-- ----------------------------
-- Table structure for tab_naturalezas_personas
-- ----------------------------
DROP TABLE IF EXISTS `tab_naturalezas_personas`;
CREATE TABLE `tab_naturalezas_personas` (
  `ID_NATURALEZA_PERSONA` int(11) NOT NULL AUTO_INCREMENT,
  `NATURALEZA_PERSONA` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID_NATURALEZA_PERSONA`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tab_naturalezas_personas
-- ----------------------------
INSERT INTO `tab_naturalezas_personas` VALUES ('1', 'PERSONA NATURAL');
INSERT INTO `tab_naturalezas_personas` VALUES ('2', 'PERSONA JURÍDICA');

-- ----------------------------
-- Table structure for tab_ocupaciones
-- ----------------------------
DROP TABLE IF EXISTS `tab_ocupaciones`;
CREATE TABLE `tab_ocupaciones` (
  `ID_OCUPACION` int(11) NOT NULL AUTO_INCREMENT,
  `OCUPACION` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID_OCUPACION`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tab_ocupaciones
-- ----------------------------
INSERT INTO `tab_ocupaciones` VALUES ('1', 'ESTUDIANTE');
INSERT INTO `tab_ocupaciones` VALUES ('2', 'DOCENTE');

-- ----------------------------
-- Table structure for tab_operadoras_telefonicas
-- ----------------------------
DROP TABLE IF EXISTS `tab_operadoras_telefonicas`;
CREATE TABLE `tab_operadoras_telefonicas` (
  `ID_OPERADOR_TELEFONICO` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE_OPERADOR` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ESTADO` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID_OPERADOR_TELEFONICO`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tab_operadoras_telefonicas
-- ----------------------------
INSERT INTO `tab_operadoras_telefonicas` VALUES ('1', 'ALEGRO', 'P');
INSERT INTO `tab_operadoras_telefonicas` VALUES ('2', 'CLARO', 'A');
INSERT INTO `tab_operadoras_telefonicas` VALUES ('3', 'MOVISTAR', 'A');
INSERT INTO `tab_operadoras_telefonicas` VALUES ('4', 'CNT', 'A');

-- ----------------------------
-- Table structure for tab_paises
-- ----------------------------
DROP TABLE IF EXISTS `tab_paises`;
CREATE TABLE `tab_paises` (
  `ID_PAIS` int(11) NOT NULL AUTO_INCREMENT,
  `PAIS` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID_PAIS`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tab_paises
-- ----------------------------
INSERT INTO `tab_paises` VALUES ('1', 'ECUADOR');
INSERT INTO `tab_paises` VALUES ('2', 'ESPAÑA');
INSERT INTO `tab_paises` VALUES ('3', 'COLOMBIA');
INSERT INTO `tab_paises` VALUES ('4', 'CANADA');
INSERT INTO `tab_paises` VALUES ('5', 'PERU');
INSERT INTO `tab_paises` VALUES ('6', 'ESTADOS UNIDOS');
INSERT INTO `tab_paises` VALUES ('7', 'ITALIA');
INSERT INTO `tab_paises` VALUES ('8', 'VENEZUELA');
INSERT INTO `tab_paises` VALUES ('9', 'EUROPA');
INSERT INTO `tab_paises` VALUES ('10', 'CUBA');

-- ----------------------------
-- Table structure for tab_parentezcos
-- ----------------------------
DROP TABLE IF EXISTS `tab_parentezcos`;
CREATE TABLE `tab_parentezcos` (
  `ID_PARENTEZCO` int(11) NOT NULL AUTO_INCREMENT,
  `PARENTEZCO` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID_PARENTEZCO`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tab_parentezcos
-- ----------------------------
INSERT INTO `tab_parentezcos` VALUES ('1', 'PADRE/MADRE');
INSERT INTO `tab_parentezcos` VALUES ('2', 'TÍO(A)');
INSERT INTO `tab_parentezcos` VALUES ('3', 'ABUELO(A)');
INSERT INTO `tab_parentezcos` VALUES ('4', 'SIBRINO(A)');
INSERT INTO `tab_parentezcos` VALUES ('5', 'HERMANO(A)');
INSERT INTO `tab_parentezcos` VALUES ('6', 'PAREJA');
INSERT INTO `tab_parentezcos` VALUES ('7', 'ESPOSO(A)');
INSERT INTO `tab_parentezcos` VALUES ('8', 'AMIGO(A)');

-- ----------------------------
-- Table structure for tab_parroquias
-- ----------------------------
DROP TABLE IF EXISTS `tab_parroquias`;
CREATE TABLE `tab_parroquias` (
  `ID_PARROQUIA` int(11) NOT NULL AUTO_INCREMENT,
  `ID_CANTON` int(11) DEFAULT NULL,
  `PARROQUIA` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TIPO_PARROQUIA` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID_PARROQUIA`),
  KEY `ID_CANTON` (`ID_CANTON`),
  CONSTRAINT `tab_parroquias_ibfk_1` FOREIGN KEY (`ID_CANTON`) REFERENCES `tab_cantones` (`ID_CANTON`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=1387 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tab_parroquias
-- ----------------------------
INSERT INTO `tab_parroquias` VALUES ('1', '1', 'CAMILO PONCE ENRIQUEZ', 'S');
INSERT INTO `tab_parroquias` VALUES ('2', '1', 'EL CARMEN DE PIJILI', 'S');
INSERT INTO `tab_parroquias` VALUES ('3', '2', 'CHORDELEG', 'S');
INSERT INTO `tab_parroquias` VALUES ('4', '2', 'LA UNION', 'S');
INSERT INTO `tab_parroquias` VALUES ('5', '2', 'LUIS GALARZA ORELLANA', 'S');
INSERT INTO `tab_parroquias` VALUES ('6', '2', 'PRINCIPAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('7', '2', 'SAN MARTIN DE PUZHIO', 'S');
INSERT INTO `tab_parroquias` VALUES ('8', '3', 'BAÑOS', 'S');
INSERT INTO `tab_parroquias` VALUES ('9', '3', 'BELLAVISTA', 'S');
INSERT INTO `tab_parroquias` VALUES ('10', '3', 'CAÑARIBAMBA', 'S');
INSERT INTO `tab_parroquias` VALUES ('11', '3', 'CHAUCHA', 'S');
INSERT INTO `tab_parroquias` VALUES ('12', '3', 'CHECA JIDCAY', 'S');
INSERT INTO `tab_parroquias` VALUES ('13', '3', 'CHIQUINTAD', 'S');
INSERT INTO `tab_parroquias` VALUES ('14', '3', 'CUENCA', 'S');
INSERT INTO `tab_parroquias` VALUES ('15', '3', 'CUMBE', 'S');
INSERT INTO `tab_parroquias` VALUES ('16', '3', 'EL BATAN', 'S');
INSERT INTO `tab_parroquias` VALUES ('17', '3', 'EL SAGRARIO', 'S');
INSERT INTO `tab_parroquias` VALUES ('18', '3', 'EL VECINO', 'S');
INSERT INTO `tab_parroquias` VALUES ('19', '3', 'GIL RAMIREZ DAVALOS', 'S');
INSERT INTO `tab_parroquias` VALUES ('20', '3', 'HERMANO MIGUEL', 'S');
INSERT INTO `tab_parroquias` VALUES ('21', '3', 'HUAYNACAPAC', 'S');
INSERT INTO `tab_parroquias` VALUES ('22', '3', 'LLACAO', 'S');
INSERT INTO `tab_parroquias` VALUES ('23', '3', 'MACHANGARA', 'S');
INSERT INTO `tab_parroquias` VALUES ('24', '3', 'MOLLETURO', 'S');
INSERT INTO `tab_parroquias` VALUES ('25', '3', 'MONAY', 'S');
INSERT INTO `tab_parroquias` VALUES ('26', '3', 'NULTI', 'S');
INSERT INTO `tab_parroquias` VALUES ('27', '3', 'OCTAVIO CORDERO PALACIOS SANTA ROSA', 'S');
INSERT INTO `tab_parroquias` VALUES ('28', '3', 'PACCHA', 'S');
INSERT INTO `tab_parroquias` VALUES ('29', '3', 'QUINGEO', 'S');
INSERT INTO `tab_parroquias` VALUES ('30', '3', 'RICAURTE', 'S');
INSERT INTO `tab_parroquias` VALUES ('31', '3', 'SAN BLAS', 'S');
INSERT INTO `tab_parroquias` VALUES ('32', '3', 'SAN JOAQUIN', 'S');
INSERT INTO `tab_parroquias` VALUES ('33', '3', 'SAN SEBASTIAN', 'S');
INSERT INTO `tab_parroquias` VALUES ('34', '3', 'SANTA ANA', 'S');
INSERT INTO `tab_parroquias` VALUES ('35', '3', 'SAYAUSI', 'S');
INSERT INTO `tab_parroquias` VALUES ('36', '3', 'SIDCAY', 'S');
INSERT INTO `tab_parroquias` VALUES ('37', '3', 'SININCAY', 'S');
INSERT INTO `tab_parroquias` VALUES ('38', '3', 'SUCRE', 'S');
INSERT INTO `tab_parroquias` VALUES ('39', '3', 'TARQUI', 'S');
INSERT INTO `tab_parroquias` VALUES ('40', '3', 'TOTORACOCHA', 'S');
INSERT INTO `tab_parroquias` VALUES ('41', '3', 'TURI', 'S');
INSERT INTO `tab_parroquias` VALUES ('42', '3', 'VALLE', 'S');
INSERT INTO `tab_parroquias` VALUES ('43', '3', 'VICTORIA DEL PORTETE', 'S');
INSERT INTO `tab_parroquias` VALUES ('44', '3', 'YANUNCAY', 'S');
INSERT INTO `tab_parroquias` VALUES ('45', '4', 'AMALUZA', 'S');
INSERT INTO `tab_parroquias` VALUES ('46', '4', 'EL PAN CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('47', '4', 'PALMAS', 'S');
INSERT INTO `tab_parroquias` VALUES ('48', '4', 'SAN VICENTE', 'S');
INSERT INTO `tab_parroquias` VALUES ('49', '5', 'ASUNCION', 'S');
INSERT INTO `tab_parroquias` VALUES ('50', '5', 'GIRON', 'S');
INSERT INTO `tab_parroquias` VALUES ('51', '5', 'SAN GERARDO', 'S');
INSERT INTO `tab_parroquias` VALUES ('52', '6', 'GUACHAPALA', 'S');
INSERT INTO `tab_parroquias` VALUES ('53', '7', 'CHORDELEG', 'S');
INSERT INTO `tab_parroquias` VALUES ('54', '7', 'DANIEL CORDOVA TORAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('55', '7', 'GUALACEO', 'S');
INSERT INTO `tab_parroquias` VALUES ('56', '7', 'JADAN', 'S');
INSERT INTO `tab_parroquias` VALUES ('57', '7', 'LUIS CORDERO VEGA', 'S');
INSERT INTO `tab_parroquias` VALUES ('58', '7', 'MARIANO MORENO', 'S');
INSERT INTO `tab_parroquias` VALUES ('59', '7', 'PRINCIPAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('60', '7', 'REMIGIO CRESPO TORAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('61', '7', 'SAN JUAN', 'S');
INSERT INTO `tab_parroquias` VALUES ('62', '7', 'SIMON BOLIVAR', 'S');
INSERT INTO `tab_parroquias` VALUES ('63', '7', 'ZHIDMAD', 'S');
INSERT INTO `tab_parroquias` VALUES ('64', '8', 'COCHAPATA', 'S');
INSERT INTO `tab_parroquias` VALUES ('65', '8', 'EL PROGRESO', 'S');
INSERT INTO `tab_parroquias` VALUES ('66', '8', 'LA PAZ', 'S');
INSERT INTO `tab_parroquias` VALUES ('67', '8', 'LAS NIEVES', 'S');
INSERT INTO `tab_parroquias` VALUES ('68', '8', 'NABON', 'S');
INSERT INTO `tab_parroquias` VALUES ('69', '8', 'OÑA', 'S');
INSERT INTO `tab_parroquias` VALUES ('70', '9', 'SAN FELIPE DE OÑA', 'S');
INSERT INTO `tab_parroquias` VALUES ('71', '9', 'SUSUDEL', 'S');
INSERT INTO `tab_parroquias` VALUES ('72', '10', 'AMALUZA', 'S');
INSERT INTO `tab_parroquias` VALUES ('73', '10', 'BULAN', 'S');
INSERT INTO `tab_parroquias` VALUES ('74', '10', 'CHICAN', 'S');
INSERT INTO `tab_parroquias` VALUES ('75', '10', 'DUG DUG', 'S');
INSERT INTO `tab_parroquias` VALUES ('76', '10', 'EL CABO', 'S');
INSERT INTO `tab_parroquias` VALUES ('77', '10', 'GUACHAPALA', 'S');
INSERT INTO `tab_parroquias` VALUES ('78', '10', 'GUARAINAG', 'S');
INSERT INTO `tab_parroquias` VALUES ('79', '10', 'PALMAS', 'S');
INSERT INTO `tab_parroquias` VALUES ('80', '10', 'PAN', 'S');
INSERT INTO `tab_parroquias` VALUES ('81', '10', 'PAUTE', 'S');
INSERT INTO `tab_parroquias` VALUES ('82', '10', 'SAN CRISTOBAL (CARLOS ORDOÑEZ LAZO)', 'S');
INSERT INTO `tab_parroquias` VALUES ('83', '10', 'SEVILLA DE ORO', 'S');
INSERT INTO `tab_parroquias` VALUES ('84', '10', 'TOMEBAMBA', 'S');
INSERT INTO `tab_parroquias` VALUES ('85', '11', 'CAMILO PONCE ENRIQUEZ (CAB. EN RIO 7 DE MOLLEPONGO)', 'S');
INSERT INTO `tab_parroquias` VALUES ('86', '11', 'PUCARA- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('87', '11', 'SAN RAFAEL DE SHARUG', 'S');
INSERT INTO `tab_parroquias` VALUES ('88', '12', 'SAN FERNANDO', 'S');
INSERT INTO `tab_parroquias` VALUES ('89', '12', 'SANTA ISABEL CHAGUARURCO', 'S');
INSERT INTO `tab_parroquias` VALUES ('90', '13', 'ABDON CALDERON LA UNION', 'S');
INSERT INTO `tab_parroquias` VALUES ('91', '13', 'EL CARMEN DE PIJILI', 'S');
INSERT INTO `tab_parroquias` VALUES ('92', '13', 'SANTA ISABEL CHAGUARURCO', 'S');
INSERT INTO `tab_parroquias` VALUES ('93', '13', 'ZHAGLLI SHAGLLI', 'S');
INSERT INTO `tab_parroquias` VALUES ('94', '14', 'AMALUZA', 'S');
INSERT INTO `tab_parroquias` VALUES ('95', '14', 'PALMAS', 'S');
INSERT INTO `tab_parroquias` VALUES ('96', '14', 'SEVILLA DE ORO- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('97', '15', 'CUCHIL CUTCHIL', 'S');
INSERT INTO `tab_parroquias` VALUES ('98', '15', 'GUEL', 'S');
INSERT INTO `tab_parroquias` VALUES ('99', '15', 'JIMA GIMA', 'S');
INSERT INTO `tab_parroquias` VALUES ('100', '15', 'LUDO', 'S');
INSERT INTO `tab_parroquias` VALUES ('101', '15', 'SAN BARTOLOME', 'S');
INSERT INTO `tab_parroquias` VALUES ('102', '15', 'SAN JOSE DE RARANGA', 'S');
INSERT INTO `tab_parroquias` VALUES ('103', '15', 'SIGSIG- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('104', '16', 'CALUMA- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('105', '17', 'CHILLANES', 'S');
INSERT INTO `tab_parroquias` VALUES ('106', '17', 'SAN JOSE DEL TAMBO (TAMBOPAMBA)', 'S');
INSERT INTO `tab_parroquias` VALUES ('107', '18', 'ASUNCION (ASANCOTO)', 'S');
INSERT INTO `tab_parroquias` VALUES ('108', '18', 'CALUMA', 'S');
INSERT INTO `tab_parroquias` VALUES ('109', '18', 'MAGDALENA (CHAPACOTO)', 'S');
INSERT INTO `tab_parroquias` VALUES ('110', '18', 'SAN JOSE DE CHIMBO- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('111', '18', 'SAN SEBASTIAN', 'S');
INSERT INTO `tab_parroquias` VALUES ('112', '18', 'TELIMBELA', 'S');
INSERT INTO `tab_parroquias` VALUES ('113', '19', 'ECHEANDIA- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('114', '20', 'ANGEL POLIBIO CHAVES', 'S');
INSERT INTO `tab_parroquias` VALUES ('115', '20', 'FACUNDO VELA', 'S');
INSERT INTO `tab_parroquias` VALUES ('116', '20', 'GABRIEL IGNACIO VEINTIMILLA', 'S');
INSERT INTO `tab_parroquias` VALUES ('117', '20', 'GUANUJO', 'S');
INSERT INTO `tab_parroquias` VALUES ('118', '20', 'GUANUJO', 'S');
INSERT INTO `tab_parroquias` VALUES ('119', '20', 'GUARANDA', 'S');
INSERT INTO `tab_parroquias` VALUES ('120', '20', 'JULIO E. MORENO', 'S');
INSERT INTO `tab_parroquias` VALUES ('121', '20', 'LAS NAVES', 'S');
INSERT INTO `tab_parroquias` VALUES ('122', '20', 'SALINAS', 'S');
INSERT INTO `tab_parroquias` VALUES ('123', '20', 'SAN LORENZO', 'S');
INSERT INTO `tab_parroquias` VALUES ('124', '20', 'SAN LUIS DE PAMBIL', 'S');
INSERT INTO `tab_parroquias` VALUES ('125', '20', 'SAN SIMON', 'S');
INSERT INTO `tab_parroquias` VALUES ('126', '20', 'SANTAFE', 'S');
INSERT INTO `tab_parroquias` VALUES ('127', '20', 'SIMIATUG', 'S');
INSERT INTO `tab_parroquias` VALUES ('128', '21', 'LAS MERCEDES', 'S');
INSERT INTO `tab_parroquias` VALUES ('129', '21', 'LAS NAVES', 'S');
INSERT INTO `tab_parroquias` VALUES ('130', '21', 'LAS NAVES- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('131', '22', 'BALSAPAMBA', 'S');
INSERT INTO `tab_parroquias` VALUES ('132', '22', 'BILOVAN', 'S');
INSERT INTO `tab_parroquias` VALUES ('133', '22', 'REGULO DE MORA', 'S');
INSERT INTO `tab_parroquias` VALUES ('134', '22', 'SAN MIGUEL- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('135', '22', 'SAN PABLO (SAN PABLO DE ATENAS)', 'S');
INSERT INTO `tab_parroquias` VALUES ('136', '22', 'SAN VICENTE', 'S');
INSERT INTO `tab_parroquias` VALUES ('137', '22', 'SANTIAGO', 'S');
INSERT INTO `tab_parroquias` VALUES ('138', '23', 'AURELIO BAYAS MARTINEZ', 'S');
INSERT INTO `tab_parroquias` VALUES ('139', '23', 'AZOGUES', 'S');
INSERT INTO `tab_parroquias` VALUES ('140', '23', 'AZOGUES', 'S');
INSERT INTO `tab_parroquias` VALUES ('141', '23', 'BORRERO', 'S');
INSERT INTO `tab_parroquias` VALUES ('142', '23', 'COJITAMBO', 'S');
INSERT INTO `tab_parroquias` VALUES ('143', '23', 'DELEG', 'S');
INSERT INTO `tab_parroquias` VALUES ('144', '23', 'GUAPAN', 'S');
INSERT INTO `tab_parroquias` VALUES ('145', '23', 'JAVIER LOYOLA (CHUQUIPATA)', 'S');
INSERT INTO `tab_parroquias` VALUES ('146', '23', 'LUIS CORDERO', 'S');
INSERT INTO `tab_parroquias` VALUES ('147', '23', 'PINDILIG', 'S');
INSERT INTO `tab_parroquias` VALUES ('148', '23', 'RIVERA', 'S');
INSERT INTO `tab_parroquias` VALUES ('149', '23', 'SAN FRANCISCO', 'S');
INSERT INTO `tab_parroquias` VALUES ('150', '23', 'SAN MIGUEL', 'S');
INSERT INTO `tab_parroquias` VALUES ('151', '23', 'SOLANO', 'S');
INSERT INTO `tab_parroquias` VALUES ('152', '23', 'TADAY', 'S');
INSERT INTO `tab_parroquias` VALUES ('153', '24', 'BIBLIAN- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('154', '24', 'JERUSALEN', 'S');
INSERT INTO `tab_parroquias` VALUES ('155', '24', 'NAZON', 'S');
INSERT INTO `tab_parroquias` VALUES ('156', '24', 'SAN FRANCISCO DE SAGEO', 'S');
INSERT INTO `tab_parroquias` VALUES ('157', '24', 'TURUPAMBA', 'S');
INSERT INTO `tab_parroquias` VALUES ('158', '25', 'CAÑAR- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('159', '25', 'CHONTAMARCA', 'S');
INSERT INTO `tab_parroquias` VALUES ('160', '25', 'CHOROCOPTE', 'S');
INSERT INTO `tab_parroquias` VALUES ('161', '25', 'DUCUR', 'S');
INSERT INTO `tab_parroquias` VALUES ('162', '25', 'GENERAL MORALES (SOCARTE)', 'S');
INSERT INTO `tab_parroquias` VALUES ('163', '25', 'GUALLETURO', 'S');
INSERT INTO `tab_parroquias` VALUES ('164', '25', 'HONORATO VASQUEZ (TAMBO VIEJO)', 'S');
INSERT INTO `tab_parroquias` VALUES ('165', '25', 'INGAPIRCA', 'S');
INSERT INTO `tab_parroquias` VALUES ('166', '25', 'JUNCAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('167', '25', 'SAN ANTONIO', 'S');
INSERT INTO `tab_parroquias` VALUES ('168', '25', 'SUSCAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('169', '25', 'TAMBO', 'S');
INSERT INTO `tab_parroquias` VALUES ('170', '25', 'VENTURA', 'S');
INSERT INTO `tab_parroquias` VALUES ('171', '25', 'ZHUD', 'S');
INSERT INTO `tab_parroquias` VALUES ('172', '26', 'DELEG- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('173', '26', 'SOLANO', 'S');
INSERT INTO `tab_parroquias` VALUES ('174', '27', 'EL TAMBO- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('175', '28', 'LA TRONCAL- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('176', '28', 'MANUEL J. CALLE', 'S');
INSERT INTO `tab_parroquias` VALUES ('177', '28', 'PANCHO NEGRO', 'S');
INSERT INTO `tab_parroquias` VALUES ('178', '29', 'SUSCAL- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('179', '30', 'BOLIVAR- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('180', '30', 'GARCIA MORENO', 'S');
INSERT INTO `tab_parroquias` VALUES ('181', '30', 'LOS ANDES', 'S');
INSERT INTO `tab_parroquias` VALUES ('182', '30', 'MONTE OLIVO', 'S');
INSERT INTO `tab_parroquias` VALUES ('183', '30', 'SAN RAFAEL', 'S');
INSERT INTO `tab_parroquias` VALUES ('184', '30', 'SAN VICENTE DE PUSIR', 'S');
INSERT INTO `tab_parroquias` VALUES ('185', '31', '27 DE SEPTIEMBRE', 'S');
INSERT INTO `tab_parroquias` VALUES ('186', '31', 'EL ANGEL', 'S');
INSERT INTO `tab_parroquias` VALUES ('187', '31', 'EL ANGEL- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('188', '31', 'EL GOALTAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('189', '31', 'LA LIBERTAD (ALIZO)', 'S');
INSERT INTO `tab_parroquias` VALUES ('190', '31', 'SAN ISIDRO', 'S');
INSERT INTO `tab_parroquias` VALUES ('191', '32', 'CONCEPCION', 'S');
INSERT INTO `tab_parroquias` VALUES ('192', '32', 'JIJON Y CAAMAÑO (CAB. EN RIO BLANCO)', 'S');
INSERT INTO `tab_parroquias` VALUES ('193', '32', 'JUAN MONTALVO (SAN IGNACIO DE QUIL)', 'S');
INSERT INTO `tab_parroquias` VALUES ('194', '32', 'MIRA (CHONTAHUASI)', 'S');
INSERT INTO `tab_parroquias` VALUES ('195', '33', 'CHITAN DE NAVARRETE', 'S');
INSERT INTO `tab_parroquias` VALUES ('196', '33', 'CRISTOBAL COLON', 'S');
INSERT INTO `tab_parroquias` VALUES ('197', '33', 'FERNANDEZ SALVADOR', 'S');
INSERT INTO `tab_parroquias` VALUES ('198', '33', 'GONZALEZ SUAREZ', 'S');
INSERT INTO `tab_parroquias` VALUES ('199', '33', 'LA PAZ', 'S');
INSERT INTO `tab_parroquias` VALUES ('200', '33', 'PIARTAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('201', '33', 'SAN GABRIEL- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('202', '33', 'SAN JOSE', 'S');
INSERT INTO `tab_parroquias` VALUES ('203', '34', 'HUACA- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('204', '34', 'MARISCAL SUCRE', 'S');
INSERT INTO `tab_parroquias` VALUES ('205', '35', 'EL CARMELO (EL PUN)', 'S');
INSERT INTO `tab_parroquias` VALUES ('206', '35', 'EL CHICAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('207', '35', 'GONZALEZ SUAREZ', 'S');
INSERT INTO `tab_parroquias` VALUES ('208', '35', 'HUACA', 'S');
INSERT INTO `tab_parroquias` VALUES ('209', '35', 'JULIO ANDRADE (OREJUELA)', 'S');
INSERT INTO `tab_parroquias` VALUES ('210', '35', 'MALDONADO', 'S');
INSERT INTO `tab_parroquias` VALUES ('211', '35', 'MARISCAL SUCRE', 'S');
INSERT INTO `tab_parroquias` VALUES ('212', '35', 'PIOTER', 'S');
INSERT INTO `tab_parroquias` VALUES ('213', '35', 'SANTA MARTHA DE CUBA', 'S');
INSERT INTO `tab_parroquias` VALUES ('214', '35', 'TOBAR DONOSO (LA BOCANA DE CAMUMBI)', 'S');
INSERT INTO `tab_parroquias` VALUES ('215', '35', 'TUFIÑO', 'S');
INSERT INTO `tab_parroquias` VALUES ('216', '35', 'TULCAN', 'S');
INSERT INTO `tab_parroquias` VALUES ('217', '35', 'TULCAN- CABECERA CANTONAL Y CAPITAL PROVINCIAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('218', '35', 'URBINA (TAYA)', 'S');
INSERT INTO `tab_parroquias` VALUES ('219', '36', 'ACHUPALLAS', 'S');
INSERT INTO `tab_parroquias` VALUES ('220', '36', 'ALAUSI- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('221', '36', 'CUMANDA', 'S');
INSERT INTO `tab_parroquias` VALUES ('222', '36', 'GUASUNTOS', 'S');
INSERT INTO `tab_parroquias` VALUES ('223', '36', 'HUIGRA', 'S');
INSERT INTO `tab_parroquias` VALUES ('224', '36', 'MULTITUD', 'S');
INSERT INTO `tab_parroquias` VALUES ('225', '36', 'PISTISHI (NARIZ DEL DIABLO)', 'S');
INSERT INTO `tab_parroquias` VALUES ('226', '36', 'PUMALLACTA', 'S');
INSERT INTO `tab_parroquias` VALUES ('227', '36', 'SEVILLA', 'S');
INSERT INTO `tab_parroquias` VALUES ('228', '36', 'SIBAMBE', 'S');
INSERT INTO `tab_parroquias` VALUES ('229', '36', 'TIXAN', 'S');
INSERT INTO `tab_parroquias` VALUES ('230', '37', 'CHAMBO- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('231', '38', 'CAPZOL', 'S');
INSERT INTO `tab_parroquias` VALUES ('232', '38', 'CHUNCHI- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('233', '38', 'COMPUD', 'S');
INSERT INTO `tab_parroquias` VALUES ('234', '38', 'GONZOL', 'S');
INSERT INTO `tab_parroquias` VALUES ('235', '38', 'LLAGOS', 'S');
INSERT INTO `tab_parroquias` VALUES ('236', '39', 'CAJABAMBA', 'S');
INSERT INTO `tab_parroquias` VALUES ('237', '39', 'CAÑI', 'S');
INSERT INTO `tab_parroquias` VALUES ('238', '39', 'COLUMBE', 'S');
INSERT INTO `tab_parroquias` VALUES ('239', '39', 'JUAN DE VELASCO (PANGOR)', 'S');
INSERT INTO `tab_parroquias` VALUES ('240', '39', 'SANTIAGO DE QUITO', 'S');
INSERT INTO `tab_parroquias` VALUES ('241', '39', 'SICALPA', 'S');
INSERT INTO `tab_parroquias` VALUES ('242', '39', 'VILLA LA UNION', 'S');
INSERT INTO `tab_parroquias` VALUES ('243', '40', 'CUMANDA- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('244', '41', 'CEBADAS', 'S');
INSERT INTO `tab_parroquias` VALUES ('245', '41', 'GUAMOTE- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('246', '41', 'PALMIRA', 'S');
INSERT INTO `tab_parroquias` VALUES ('247', '42', 'EL ROSARIO', 'S');
INSERT INTO `tab_parroquias` VALUES ('248', '42', 'GUANANDO', 'S');
INSERT INTO `tab_parroquias` VALUES ('249', '42', 'GUANO- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('250', '42', 'ILAPO', 'S');
INSERT INTO `tab_parroquias` VALUES ('251', '42', 'LA MATRIZ', 'S');
INSERT INTO `tab_parroquias` VALUES ('252', '42', 'LA PROVIDENCIA', 'S');
INSERT INTO `tab_parroquias` VALUES ('253', '42', 'SAN ANDRES', 'S');
INSERT INTO `tab_parroquias` VALUES ('254', '42', 'SAN GERARDO DE PACAICAGUAN', 'S');
INSERT INTO `tab_parroquias` VALUES ('255', '42', 'SAN ISIDRO DE PATULU', 'S');
INSERT INTO `tab_parroquias` VALUES ('256', '42', 'SAN JOSE DEL CHAZO', 'S');
INSERT INTO `tab_parroquias` VALUES ('257', '42', 'SANTA FE DE GALAN', 'S');
INSERT INTO `tab_parroquias` VALUES ('258', '42', 'VALPARAISO', 'S');
INSERT INTO `tab_parroquias` VALUES ('259', '43', 'PALLATANGA- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('260', '44', 'BILBAO (CAB.EN QUILLUYACU)', 'S');
INSERT INTO `tab_parroquias` VALUES ('261', '44', 'EL ALTAR', 'S');
INSERT INTO `tab_parroquias` VALUES ('262', '44', 'LA CANDELARIA', 'S');
INSERT INTO `tab_parroquias` VALUES ('263', '44', 'MATUS', 'S');
INSERT INTO `tab_parroquias` VALUES ('264', '44', 'PENIPE- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('265', '44', 'PUELA', 'S');
INSERT INTO `tab_parroquias` VALUES ('266', '44', 'SAN ANTONIO DE BAYUSHIG', 'S');
INSERT INTO `tab_parroquias` VALUES ('267', '45', 'CACHA (CAB. EN MACHANGARA)', 'S');
INSERT INTO `tab_parroquias` VALUES ('268', '45', 'CALPI', 'S');
INSERT INTO `tab_parroquias` VALUES ('269', '45', 'CUBIJIES', 'S');
INSERT INTO `tab_parroquias` VALUES ('270', '45', 'FLORES', 'S');
INSERT INTO `tab_parroquias` VALUES ('271', '45', 'LICAN', 'S');
INSERT INTO `tab_parroquias` VALUES ('272', '45', 'LICAN', 'S');
INSERT INTO `tab_parroquias` VALUES ('273', '45', 'LICTO', 'S');
INSERT INTO `tab_parroquias` VALUES ('274', '45', 'LIZARZABURU', 'S');
INSERT INTO `tab_parroquias` VALUES ('275', '45', 'MALDONADO', 'S');
INSERT INTO `tab_parroquias` VALUES ('276', '45', 'PUNGALA', 'S');
INSERT INTO `tab_parroquias` VALUES ('277', '45', 'PUNIN', 'S');
INSERT INTO `tab_parroquias` VALUES ('278', '45', 'QUIMIAG', 'S');
INSERT INTO `tab_parroquias` VALUES ('279', '45', 'RIOBAMBA', 'S');
INSERT INTO `tab_parroquias` VALUES ('280', '45', 'SAN JUAN', 'S');
INSERT INTO `tab_parroquias` VALUES ('281', '45', 'SAN LUIS', 'S');
INSERT INTO `tab_parroquias` VALUES ('282', '45', 'VELASCO', 'S');
INSERT INTO `tab_parroquias` VALUES ('283', '45', 'VELOZ', 'S');
INSERT INTO `tab_parroquias` VALUES ('284', '45', 'YARUQUIES', 'S');
INSERT INTO `tab_parroquias` VALUES ('285', '46', 'EL CARMEN', 'S');
INSERT INTO `tab_parroquias` VALUES ('286', '46', 'EL TRIUNFO', 'S');
INSERT INTO `tab_parroquias` VALUES ('287', '46', 'GUASAGANDA (CAB. EN GUASAGANDA CENTRO)', 'S');
INSERT INTO `tab_parroquias` VALUES ('288', '46', 'LA MANA', 'S');
INSERT INTO `tab_parroquias` VALUES ('289', '46', 'LA MANA- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('290', '46', 'PUCAYACU', 'S');
INSERT INTO `tab_parroquias` VALUES ('291', '47', '11 DE NOVIEMBRE (ILINCHISI)', 'S');
INSERT INTO `tab_parroquias` VALUES ('292', '47', 'ALAQUES (ALAQUEZ)', 'S');
INSERT INTO `tab_parroquias` VALUES ('293', '47', 'BELISARIO QUEVEDO (GUANAILIN)', 'S');
INSERT INTO `tab_parroquias` VALUES ('294', '47', 'ELOY ALFARO (SAN FELIPE)', 'S');
INSERT INTO `tab_parroquias` VALUES ('295', '47', 'GUAITACAMA (GUAYTACAMA)', 'S');
INSERT INTO `tab_parroquias` VALUES ('296', '47', 'IGNACIO FLORES (PARQUE FLORES)', 'S');
INSERT INTO `tab_parroquias` VALUES ('297', '47', 'JOSEGUANGO BAJO', 'S');
INSERT INTO `tab_parroquias` VALUES ('298', '47', 'JUAN MONTALVO (SAN SEBASTIAN)', 'S');
INSERT INTO `tab_parroquias` VALUES ('299', '47', 'LA MATRIZ', 'S');
INSERT INTO `tab_parroquias` VALUES ('300', '47', 'LAS PAMPAS', 'S');
INSERT INTO `tab_parroquias` VALUES ('301', '47', 'LATACUNGA', 'S');
INSERT INTO `tab_parroquias` VALUES ('302', '47', 'MULALO', 'S');
INSERT INTO `tab_parroquias` VALUES ('303', '47', 'PALO QUEMADO', 'S');
INSERT INTO `tab_parroquias` VALUES ('304', '47', 'PALO QUEMADO', 'S');
INSERT INTO `tab_parroquias` VALUES ('305', '47', 'POALO', 'S');
INSERT INTO `tab_parroquias` VALUES ('306', '47', 'SAN BUENAVENTURA', 'S');
INSERT INTO `tab_parroquias` VALUES ('307', '47', 'SAN JUAN DE PASTOCALLE', 'S');
INSERT INTO `tab_parroquias` VALUES ('308', '47', 'SIGCHOS', 'S');
INSERT INTO `tab_parroquias` VALUES ('309', '47', 'TOACASO', 'S');
INSERT INTO `tab_parroquias` VALUES ('310', '48', 'EL CORAZON- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('311', '48', 'MORASPUNGO', 'S');
INSERT INTO `tab_parroquias` VALUES ('312', '48', 'PINLLOPATA', 'S');
INSERT INTO `tab_parroquias` VALUES ('313', '48', 'RAMON CAMPAÑA', 'S');
INSERT INTO `tab_parroquias` VALUES ('314', '49', 'ANGAMARCA', 'S');
INSERT INTO `tab_parroquias` VALUES ('315', '49', 'CHUCCHILAN (CHUGCHILAN)', 'S');
INSERT INTO `tab_parroquias` VALUES ('316', '49', 'GUANGAJE', 'S');
INSERT INTO `tab_parroquias` VALUES ('317', '49', 'ISINLIBI (ISINLIVI)', 'S');
INSERT INTO `tab_parroquias` VALUES ('318', '49', 'LA VICTORIA', 'S');
INSERT INTO `tab_parroquias` VALUES ('319', '49', 'PILALO', 'S');
INSERT INTO `tab_parroquias` VALUES ('320', '49', 'PUJILI- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('321', '49', 'TINGO', 'S');
INSERT INTO `tab_parroquias` VALUES ('322', '49', 'ZUMBAHUA', 'S');
INSERT INTO `tab_parroquias` VALUES ('323', '50', 'ANTONIO JOSE HOLGUIN (SANTA LUCIA)', 'S');
INSERT INTO `tab_parroquias` VALUES ('324', '50', 'CUSUBAMBA', 'S');
INSERT INTO `tab_parroquias` VALUES ('325', '50', 'MULALILLO', 'S');
INSERT INTO `tab_parroquias` VALUES ('326', '50', 'MULLIQUINDIL (SANTA ANA)', 'S');
INSERT INTO `tab_parroquias` VALUES ('327', '50', 'PANSALEO', 'S');
INSERT INTO `tab_parroquias` VALUES ('328', '50', 'SAN MIGUEL- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('329', '51', 'CANCHAGUA', 'S');
INSERT INTO `tab_parroquias` VALUES ('330', '51', 'CHANTILIN', 'S');
INSERT INTO `tab_parroquias` VALUES ('331', '51', 'COCHAPAMBA', 'S');
INSERT INTO `tab_parroquias` VALUES ('332', '51', 'SAQUISILI- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('333', '52', 'CHUGCHILLAN', 'S');
INSERT INTO `tab_parroquias` VALUES ('334', '52', 'ISINLIVI', 'S');
INSERT INTO `tab_parroquias` VALUES ('335', '52', 'LAS PAMPAS', 'S');
INSERT INTO `tab_parroquias` VALUES ('336', '52', 'PALO QUEMADO', 'S');
INSERT INTO `tab_parroquias` VALUES ('337', '52', 'SIGCHOS- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('338', '53', 'ARENILLAS- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('339', '53', 'CARCABON', 'S');
INSERT INTO `tab_parroquias` VALUES ('340', '53', 'CHACRAS', 'S');
INSERT INTO `tab_parroquias` VALUES ('341', '53', 'LA LIBERTAD', 'S');
INSERT INTO `tab_parroquias` VALUES ('342', '53', 'LAS LAJAS (CAB. EN LA VICTORIA)', 'S');
INSERT INTO `tab_parroquias` VALUES ('343', '53', 'PALMALES', 'S');
INSERT INTO `tab_parroquias` VALUES ('344', '54', 'AYAPAMBA', 'S');
INSERT INTO `tab_parroquias` VALUES ('345', '54', 'CORDONCILLO', 'S');
INSERT INTO `tab_parroquias` VALUES ('346', '54', 'MILAGRO', 'S');
INSERT INTO `tab_parroquias` VALUES ('347', '54', 'PACCHA- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('348', '54', 'SAN JOSE', 'S');
INSERT INTO `tab_parroquias` VALUES ('349', '54', 'SAN JUAN DE CERRO AZUL', 'S');
INSERT INTO `tab_parroquias` VALUES ('350', '55', 'BALSAS- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('351', '55', 'BELLAMARIA', 'S');
INSERT INTO `tab_parroquias` VALUES ('352', '56', 'CHILLA- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('353', '57', 'BARBONES (SUCRE)', 'S');
INSERT INTO `tab_parroquias` VALUES ('354', '57', 'EL GUABO- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('355', '57', 'LA IBERIA', 'S');
INSERT INTO `tab_parroquias` VALUES ('356', '57', 'RIO BONITO', 'S');
INSERT INTO `tab_parroquias` VALUES ('357', '57', 'TENDALES (CAB.EN PUERTO TENDALES)', 'S');
INSERT INTO `tab_parroquias` VALUES ('358', '58', 'ECUADOR', 'S');
INSERT INTO `tab_parroquias` VALUES ('359', '58', 'EL PARAISO', 'S');
INSERT INTO `tab_parroquias` VALUES ('360', '58', 'HUALTACO', 'S');
INSERT INTO `tab_parroquias` VALUES ('361', '58', 'HUAQUILLAS- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('362', '58', 'MILTON REYES', 'S');
INSERT INTO `tab_parroquias` VALUES ('363', '58', 'UNION LOJANA', 'S');
INSERT INTO `tab_parroquias` VALUES ('364', '59', 'EL PARAISO', 'S');
INSERT INTO `tab_parroquias` VALUES ('365', '59', 'LA LIBERTAD', 'S');
INSERT INTO `tab_parroquias` VALUES ('366', '59', 'LA VICTORIA', 'S');
INSERT INTO `tab_parroquias` VALUES ('367', '59', 'LA VICTORIA- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('368', '59', 'PLATANILLOS', 'S');
INSERT INTO `tab_parroquias` VALUES ('369', '59', 'SAN ISIDRO', 'S');
INSERT INTO `tab_parroquias` VALUES ('370', '59', 'VALLE HERMOSO', 'S');
INSERT INTO `tab_parroquias` VALUES ('371', '60', 'EL CAMBIO', 'S');
INSERT INTO `tab_parroquias` VALUES ('372', '60', 'EL CAMBIO', 'S');
INSERT INTO `tab_parroquias` VALUES ('373', '60', 'EL RETIRO', 'S');
INSERT INTO `tab_parroquias` VALUES ('374', '60', 'LA PROVIDENCIA', 'S');
INSERT INTO `tab_parroquias` VALUES ('375', '60', 'MACHALA', 'S');
INSERT INTO `tab_parroquias` VALUES ('376', '60', 'MACHALA', 'S');
INSERT INTO `tab_parroquias` VALUES ('377', '60', 'NUEVE DE MAYO', 'S');
INSERT INTO `tab_parroquias` VALUES ('378', '60', 'PUERTO BOLIVAR', 'S');
INSERT INTO `tab_parroquias` VALUES ('379', '61', 'EL INGENIO', 'S');
INSERT INTO `tab_parroquias` VALUES ('380', '61', 'MARCABELI- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('381', '62', 'BOLIVAR', 'S');
INSERT INTO `tab_parroquias` VALUES ('382', '62', 'BUENAVISTA', 'S');
INSERT INTO `tab_parroquias` VALUES ('383', '62', 'CAÑAQUEMADA', 'S');
INSERT INTO `tab_parroquias` VALUES ('384', '62', 'CASACAY', 'S');
INSERT INTO `tab_parroquias` VALUES ('385', '62', 'LA PEAÑA', 'S');
INSERT INTO `tab_parroquias` VALUES ('386', '62', 'LOMA DE FRANCO', 'S');
INSERT INTO `tab_parroquias` VALUES ('387', '62', 'OCHOA LEON', 'S');
INSERT INTO `tab_parroquias` VALUES ('388', '62', 'PASAJE- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('389', '62', 'PROGRESO', 'S');
INSERT INTO `tab_parroquias` VALUES ('390', '62', 'TRES CERRITOS', 'S');
INSERT INTO `tab_parroquias` VALUES ('391', '62', 'UZHCURRUMI', 'S');
INSERT INTO `tab_parroquias` VALUES ('392', '63', 'CAPIRO (CAB. EN LA CAPILLA DE CAPIRO)', 'S');
INSERT INTO `tab_parroquias` VALUES ('393', '63', 'LA BOCANA', 'S');
INSERT INTO `tab_parroquias` VALUES ('394', '63', 'LA MATRIZ', 'S');
INSERT INTO `tab_parroquias` VALUES ('395', '63', 'LA SUSAYA', 'S');
INSERT INTO `tab_parroquias` VALUES ('396', '63', 'MOROMORO (CAB. EN EL VADO)', 'S');
INSERT INTO `tab_parroquias` VALUES ('397', '63', 'PIEDRAS', 'S');
INSERT INTO `tab_parroquias` VALUES ('398', '63', 'PIÑAS- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('399', '63', 'PIÑAS GRANDE', 'S');
INSERT INTO `tab_parroquias` VALUES ('400', '63', 'SAN ROQUE (AMBROSIO MALDONADO)', 'S');
INSERT INTO `tab_parroquias` VALUES ('401', '63', 'SARACAY', 'S');
INSERT INTO `tab_parroquias` VALUES ('402', '64', 'CURTINCAPA', 'S');
INSERT INTO `tab_parroquias` VALUES ('403', '64', 'MORALES', 'S');
INSERT INTO `tab_parroquias` VALUES ('404', '64', 'PORTOVELO- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('405', '64', 'SALATI', 'S');
INSERT INTO `tab_parroquias` VALUES ('406', '65', 'BELLAMARIA', 'S');
INSERT INTO `tab_parroquias` VALUES ('407', '65', 'BELLAVISTA', 'S');
INSERT INTO `tab_parroquias` VALUES ('408', '65', 'JAMBELI', 'S');
INSERT INTO `tab_parroquias` VALUES ('409', '65', 'JAMBELI (SATELITE)', 'S');
INSERT INTO `tab_parroquias` VALUES ('410', '65', 'JUMON (SATELITE)', 'S');
INSERT INTO `tab_parroquias` VALUES ('411', '65', 'LA AVANZADA', 'S');
INSERT INTO `tab_parroquias` VALUES ('412', '65', 'NUEVO SANTA ROSA', 'S');
INSERT INTO `tab_parroquias` VALUES ('413', '65', 'PUERTO JELI', 'S');
INSERT INTO `tab_parroquias` VALUES ('414', '65', 'SAN ANTONIO', 'S');
INSERT INTO `tab_parroquias` VALUES ('415', '65', 'SANTA ROSA', 'S');
INSERT INTO `tab_parroquias` VALUES ('416', '65', 'SANTA ROSA- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('417', '65', 'TORATA', 'S');
INSERT INTO `tab_parroquias` VALUES ('418', '65', 'VICTORIA', 'S');
INSERT INTO `tab_parroquias` VALUES ('419', '66', 'ABAÑIN', 'S');
INSERT INTO `tab_parroquias` VALUES ('420', '66', 'ARCAPAMBA', 'S');
INSERT INTO `tab_parroquias` VALUES ('421', '66', 'GUANAZAN', 'S');
INSERT INTO `tab_parroquias` VALUES ('422', '66', 'GUIZHAGUIÑA', 'S');
INSERT INTO `tab_parroquias` VALUES ('423', '66', 'HUERTAS', 'S');
INSERT INTO `tab_parroquias` VALUES ('424', '66', 'MALVAS', 'S');
INSERT INTO `tab_parroquias` VALUES ('425', '66', 'MULUNCAY GRANDE', 'S');
INSERT INTO `tab_parroquias` VALUES ('426', '66', 'SALVIAS', 'S');
INSERT INTO `tab_parroquias` VALUES ('427', '66', 'SINSAO', 'S');
INSERT INTO `tab_parroquias` VALUES ('428', '66', 'ZARUMA- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('429', '67', 'ATACAMES- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('430', '67', 'LA UNION', 'S');
INSERT INTO `tab_parroquias` VALUES ('431', '67', 'SUA (CAB. EN LA BOCANA)', 'S');
INSERT INTO `tab_parroquias` VALUES ('432', '67', 'TONCHIGUE', 'S');
INSERT INTO `tab_parroquias` VALUES ('433', '67', 'TONSUPA', 'S');
INSERT INTO `tab_parroquias` VALUES ('434', '68', 'ANCHAYACU', 'S');
INSERT INTO `tab_parroquias` VALUES ('435', '68', 'ATAHUALPA (CAB. EN CAMARONES)', 'S');
INSERT INTO `tab_parroquias` VALUES ('436', '68', 'BORBON', 'S');
INSERT INTO `tab_parroquias` VALUES ('437', '68', 'COLON ELOY DEL MARIA', 'S');
INSERT INTO `tab_parroquias` VALUES ('438', '68', 'LA TOLA', 'S');
INSERT INTO `tab_parroquias` VALUES ('439', '68', 'LUIS VARGAS TORRES (CAB EN PLAYA DE ORO)', 'S');
INSERT INTO `tab_parroquias` VALUES ('440', '68', 'MALDONADO', 'S');
INSERT INTO `tab_parroquias` VALUES ('441', '68', 'PAMPANAL DE BOLIVAR', 'S');
INSERT INTO `tab_parroquias` VALUES ('442', '68', 'SAN FRANCISCO DE ONZOLE', 'S');
INSERT INTO `tab_parroquias` VALUES ('443', '68', 'SAN JOSE DE CAYAPAS', 'S');
INSERT INTO `tab_parroquias` VALUES ('444', '68', 'SANTO DOMINGO DE ONZOLE', 'S');
INSERT INTO `tab_parroquias` VALUES ('445', '68', 'SELVA ALEGRE', 'S');
INSERT INTO `tab_parroquias` VALUES ('446', '68', 'TELEMBI', 'S');
INSERT INTO `tab_parroquias` VALUES ('447', '68', 'TIMBIRE', 'S');
INSERT INTO `tab_parroquias` VALUES ('448', '68', 'VALDEZ (LIMONES)- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('449', '69', '5 DE AGOSTO', 'S');
INSERT INTO `tab_parroquias` VALUES ('450', '69', 'ATACAMES', 'S');
INSERT INTO `tab_parroquias` VALUES ('451', '69', 'BARTOLOME RUIZ (CESAR FRANCO CARRION)', 'S');
INSERT INTO `tab_parroquias` VALUES ('452', '69', 'CAMARONES (CAB. EN SAN VICENTE)', 'S');
INSERT INTO `tab_parroquias` VALUES ('453', '69', 'CHINCA', 'S');
INSERT INTO `tab_parroquias` VALUES ('454', '69', 'CHONTADURO', 'S');
INSERT INTO `tab_parroquias` VALUES ('455', '69', 'CHUMUNDE', 'S');
INSERT INTO `tab_parroquias` VALUES ('456', '69', 'CRNEL. CARLOS CONCHA TORRES', 'S');
INSERT INTO `tab_parroquias` VALUES ('457', '69', 'ESMERALDAS', 'S');
INSERT INTO `tab_parroquias` VALUES ('458', '69', 'ESMERALDAS', 'S');
INSERT INTO `tab_parroquias` VALUES ('459', '69', 'LA UNION', 'S');
INSERT INTO `tab_parroquias` VALUES ('460', '69', 'LAGARTO', 'S');
INSERT INTO `tab_parroquias` VALUES ('461', '69', 'LUIS TELLO (LAS PALMAS)', 'S');
INSERT INTO `tab_parroquias` VALUES ('462', '69', 'MAJUA', 'S');
INSERT INTO `tab_parroquias` VALUES ('463', '69', 'MONTALVO (CAB. EN HORQUETA)', 'S');
INSERT INTO `tab_parroquias` VALUES ('464', '69', 'RIO VERDE', 'S');
INSERT INTO `tab_parroquias` VALUES ('465', '69', 'ROCAFUERTE', 'S');
INSERT INTO `tab_parroquias` VALUES ('466', '69', 'SAN MATEO', 'S');
INSERT INTO `tab_parroquias` VALUES ('467', '69', 'SIMON PLATA TORRES', 'S');
INSERT INTO `tab_parroquias` VALUES ('468', '69', 'SUA (CAB. EN LA BOCANA)', 'S');
INSERT INTO `tab_parroquias` VALUES ('469', '69', 'TABIAZO', 'S');
INSERT INTO `tab_parroquias` VALUES ('470', '69', 'TACHINA', 'S');
INSERT INTO `tab_parroquias` VALUES ('471', '69', 'TONCHIGUE', 'S');
INSERT INTO `tab_parroquias` VALUES ('472', '69', 'VUELTA LARGA', 'S');
INSERT INTO `tab_parroquias` VALUES ('473', '70', 'LA CONCORDIA- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('474', '71', 'BOLIVAR', 'S');
INSERT INTO `tab_parroquias` VALUES ('475', '71', 'DAULE', 'S');
INSERT INTO `tab_parroquias` VALUES ('476', '71', 'GALERA', 'S');
INSERT INTO `tab_parroquias` VALUES ('477', '71', 'MUISNE- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('478', '71', 'QUINGUE (OLMEDO PERDOMO FRANCO)', 'S');
INSERT INTO `tab_parroquias` VALUES ('479', '71', 'SALIMA', 'S');
INSERT INTO `tab_parroquias` VALUES ('480', '71', 'SAN FRANCISCO', 'S');
INSERT INTO `tab_parroquias` VALUES ('481', '71', 'SAN GREGORIO', 'S');
INSERT INTO `tab_parroquias` VALUES ('482', '71', 'SAN JOSE DE CHAMANGA', 'S');
INSERT INTO `tab_parroquias` VALUES ('483', '72', 'CHURA (CHANCAMA) (CAB. EN EL YERBERO)', 'S');
INSERT INTO `tab_parroquias` VALUES ('484', '72', 'CUBE', 'S');
INSERT INTO `tab_parroquias` VALUES ('485', '72', 'LA UNION', 'S');
INSERT INTO `tab_parroquias` VALUES ('486', '72', 'MALIMPIA', 'S');
INSERT INTO `tab_parroquias` VALUES ('487', '72', 'ROSA ZARATE (QUININDE)', 'S');
INSERT INTO `tab_parroquias` VALUES ('488', '72', 'VICHE', 'S');
INSERT INTO `tab_parroquias` VALUES ('489', '73', 'CHONTADURO', 'S');
INSERT INTO `tab_parroquias` VALUES ('490', '73', 'CHUMUNDE', 'S');
INSERT INTO `tab_parroquias` VALUES ('491', '73', 'LAGARTO', 'S');
INSERT INTO `tab_parroquias` VALUES ('492', '73', 'MONTALVO (CAB. EN HORQUETA)', 'S');
INSERT INTO `tab_parroquias` VALUES ('493', '73', 'RIOVERDE- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('494', '73', 'ROCAFUERTE', 'S');
INSERT INTO `tab_parroquias` VALUES ('495', '74', '5 DE JUNIO (CAB. EN UIMBI)', 'S');
INSERT INTO `tab_parroquias` VALUES ('496', '74', 'ALTO TAMBO (CAB. EN GUADUAL)', 'S');
INSERT INTO `tab_parroquias` VALUES ('497', '74', 'ANCON (PICHANGAL) (CAB. EN PALMA REAL)', 'S');
INSERT INTO `tab_parroquias` VALUES ('498', '74', 'CALDERON', 'S');
INSERT INTO `tab_parroquias` VALUES ('499', '74', 'CARONDELET', 'S');
INSERT INTO `tab_parroquias` VALUES ('500', '74', 'CONCEPCION', 'S');
INSERT INTO `tab_parroquias` VALUES ('501', '74', 'MATAJE (CAB. EN SANTANDER)', 'S');
INSERT INTO `tab_parroquias` VALUES ('502', '74', 'SAN JAVIER DE CACHAVI', 'S');
INSERT INTO `tab_parroquias` VALUES ('503', '74', 'SAN LORENZO- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('504', '74', 'SANTA RITA', 'S');
INSERT INTO `tab_parroquias` VALUES ('505', '74', 'TAMBILLO', 'S');
INSERT INTO `tab_parroquias` VALUES ('506', '74', 'TULULBI (CAB. EN RICAURTE)', 'S');
INSERT INTO `tab_parroquias` VALUES ('507', '74', 'URBINA', 'S');
INSERT INTO `tab_parroquias` VALUES ('508', '75', 'PUERTO VILLAMIL- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('509', '75', 'TOMAS DE BERLANGA (SANTO TOMAS)', 'S');
INSERT INTO `tab_parroquias` VALUES ('510', '76', 'EL PROGRESO', 'S');
INSERT INTO `tab_parroquias` VALUES ('511', '76', 'ISLA SANTA MARIA (FLOREANA) (CAB. EN PTO. VELASCO IBARRA)', 'S');
INSERT INTO `tab_parroquias` VALUES ('512', '76', 'PUERTO BAQUERIZO MORENO- CABECERA CANTONAL Y CAPITAL PROVINCIAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('513', '77', 'BELLAVISTA', 'S');
INSERT INTO `tab_parroquias` VALUES ('514', '77', 'PUERTO AYORA- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('515', '77', 'SANTA ROSA (INCLUYE LA ISLA BALTRA)', 'S');
INSERT INTO `tab_parroquias` VALUES ('516', '78', 'ALFREDO BAQUERIZO MORENO (JUJAN)', 'S');
INSERT INTO `tab_parroquias` VALUES ('517', '79', 'BALAO- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('518', '80', 'BALZAR- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('519', '81', 'COLIMES- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('520', '81', 'SAN JACINTO', 'S');
INSERT INTO `tab_parroquias` VALUES ('521', '82', 'CORONEL MARCELINO MARIDUEÑA (SAN CARLOS)- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('522', '83', 'BANIFE', 'S');
INSERT INTO `tab_parroquias` VALUES ('523', '83', 'DAULE', 'S');
INSERT INTO `tab_parroquias` VALUES ('524', '83', 'DAULE- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('525', '83', 'EMILIANO CAICEDO MARCOS', 'S');
INSERT INTO `tab_parroquias` VALUES ('526', '83', 'ISIDRO AYORA (SOLEDAD)', 'S');
INSERT INTO `tab_parroquias` VALUES ('527', '83', 'JUAN BAUTISTA AGUIRRE (LOS TINTOS)', 'S');
INSERT INTO `tab_parroquias` VALUES ('528', '83', 'LA AURORA', 'S');
INSERT INTO `tab_parroquias` VALUES ('529', '83', 'LAUREL', 'S');
INSERT INTO `tab_parroquias` VALUES ('530', '83', 'LIMONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('531', '83', 'LOMAS DE SARGENTILLO', 'S');
INSERT INTO `tab_parroquias` VALUES ('532', '83', 'LOS LOJAS (ENRIQUE BAQUERIZO MORENO)', 'S');
INSERT INTO `tab_parroquias` VALUES ('533', '83', 'MAGRO', 'S');
INSERT INTO `tab_parroquias` VALUES ('534', '83', 'PADRE JUAN BAUTISTA AGUIRRE', 'S');
INSERT INTO `tab_parroquias` VALUES ('535', '83', 'PIEDRAHITA (NOBOL)', 'S');
INSERT INTO `tab_parroquias` VALUES ('536', '83', 'SANTA CLARA', 'S');
INSERT INTO `tab_parroquias` VALUES ('537', '83', 'VICENTE PIEDREHITA', 'S');
INSERT INTO `tab_parroquias` VALUES ('538', '84', 'EL RECREO', 'S');
INSERT INTO `tab_parroquias` VALUES ('539', '84', 'ELOY ALFARO (DURAN)', 'S');
INSERT INTO `tab_parroquias` VALUES ('540', '84', 'ELOY ALFARO (DURAN)', 'S');
INSERT INTO `tab_parroquias` VALUES ('541', '85', 'EL ROSARIO', 'S');
INSERT INTO `tab_parroquias` VALUES ('542', '85', 'GUAYAS (PUEBLO NUEVO)', 'S');
INSERT INTO `tab_parroquias` VALUES ('543', '85', 'VELASCO IBARRA (EL EMPALME)- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('544', '86', 'EL TRIUNFO- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('545', '87', 'GENERAL ANTONIO ELIZALDE (BUCAY)- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('546', '88', 'AYACUCHO', 'S');
INSERT INTO `tab_parroquias` VALUES ('547', '88', 'BOLIVAR (SAGRARIO)', 'S');
INSERT INTO `tab_parroquias` VALUES ('548', '88', 'CARBO (CONCEPCION)', 'S');
INSERT INTO `tab_parroquias` VALUES ('549', '88', 'CHONGON', 'S');
INSERT INTO `tab_parroquias` VALUES ('550', '88', 'FEBRES CORDERO', 'S');
INSERT INTO `tab_parroquias` VALUES ('551', '88', 'GARCIA MORENO', 'S');
INSERT INTO `tab_parroquias` VALUES ('552', '88', 'GUAYAQUIL', 'S');
INSERT INTO `tab_parroquias` VALUES ('553', '88', 'JUAN GOMEZ RENDON (PROGRESO)', 'S');
INSERT INTO `tab_parroquias` VALUES ('554', '88', 'LETAMENDI', 'S');
INSERT INTO `tab_parroquias` VALUES ('555', '88', 'MORRO', 'S');
INSERT INTO `tab_parroquias` VALUES ('556', '88', 'NUEVE DE OCTUBRE', 'S');
INSERT INTO `tab_parroquias` VALUES ('557', '88', 'OLMEDO (SAN ALEJO)', 'S');
INSERT INTO `tab_parroquias` VALUES ('558', '88', 'PASCUALES', 'S');
INSERT INTO `tab_parroquias` VALUES ('559', '88', 'PLAYAS (GRAL. VILLAMIL)', 'S');
INSERT INTO `tab_parroquias` VALUES ('560', '88', 'POSORJA', 'S');
INSERT INTO `tab_parroquias` VALUES ('561', '88', 'PUNA', 'S');
INSERT INTO `tab_parroquias` VALUES ('562', '88', 'ROCA', 'S');
INSERT INTO `tab_parroquias` VALUES ('563', '88', 'ROCAFUERTE', 'S');
INSERT INTO `tab_parroquias` VALUES ('564', '88', 'SUCRE', 'S');
INSERT INTO `tab_parroquias` VALUES ('565', '88', 'TARQUI', 'S');
INSERT INTO `tab_parroquias` VALUES ('566', '88', 'TENGUEL', 'S');
INSERT INTO `tab_parroquias` VALUES ('567', '88', 'URDANETA', 'S');
INSERT INTO `tab_parroquias` VALUES ('568', '88', 'XIMENA', 'S');
INSERT INTO `tab_parroquias` VALUES ('569', '89', 'ISIDRO AYORA- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('570', '90', 'ISIDRO AYORA (SOLEDAD)', 'S');
INSERT INTO `tab_parroquias` VALUES ('571', '90', 'LOMAS DE SARGENTILLO- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('572', '91', 'CHOBO', 'S');
INSERT INTO `tab_parroquias` VALUES ('573', '91', 'GENERAL ELIZALDE (BUCAY)', 'S');
INSERT INTO `tab_parroquias` VALUES ('574', '91', 'MARISCAL SUCRE (HUAQUES)', 'S');
INSERT INTO `tab_parroquias` VALUES ('575', '91', 'MILAGRO- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('576', '91', 'ROBERTO ASTUDILLO (CAB. EN CRUCE DE VENECIA)', 'S');
INSERT INTO `tab_parroquias` VALUES ('577', '92', 'JESUS MARIA', 'S');
INSERT INTO `tab_parroquias` VALUES ('578', '92', 'NARANJAL- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('579', '92', 'SAN CARLOS', 'S');
INSERT INTO `tab_parroquias` VALUES ('580', '92', 'SANTA ROSA DE FLANDES', 'S');
INSERT INTO `tab_parroquias` VALUES ('581', '92', 'TAURA', 'S');
INSERT INTO `tab_parroquias` VALUES ('582', '93', 'NARANJITO- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('583', '94', 'NARCISA DE JESUS- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('584', '95', 'PALESTINA-CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('585', '96', 'PEDRO CARBO- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('586', '96', 'SABANILLA', 'S');
INSERT INTO `tab_parroquias` VALUES ('587', '96', 'VALLE DE LA VIRGEN', 'S');
INSERT INTO `tab_parroquias` VALUES ('588', '97', 'GENERAL VILLAMIL (PLAYAS)- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('589', '98', 'BOCANA', 'S');
INSERT INTO `tab_parroquias` VALUES ('590', '98', 'CANDILEJOS', 'S');
INSERT INTO `tab_parroquias` VALUES ('591', '98', 'CENTRAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('592', '98', 'EL SALITRE (LAS RAMAS)- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('593', '98', 'GENERAL VERNAZA (DOS ESTEROS)', 'S');
INSERT INTO `tab_parroquias` VALUES ('594', '98', 'JUNQUILLAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('595', '98', 'LA VICTORIA (ÑAUZA)', 'S');
INSERT INTO `tab_parroquias` VALUES ('596', '98', 'PARAISO', 'S');
INSERT INTO `tab_parroquias` VALUES ('597', '98', 'SAN MATEO', 'S');
INSERT INTO `tab_parroquias` VALUES ('598', '99', 'LA PUNTILLA (SATELITE)', 'S');
INSERT INTO `tab_parroquias` VALUES ('599', '99', 'SAMBORONDON', 'S');
INSERT INTO `tab_parroquias` VALUES ('600', '99', 'SAMBORONDON- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('601', '99', 'TARIFA', 'S');
INSERT INTO `tab_parroquias` VALUES ('602', '100', 'CRNEL. LORENZO DE GARAICOA (PEDREGAL)', 'S');
INSERT INTO `tab_parroquias` VALUES ('603', '100', 'CRNEL. MARCELINO MARIDUEÑA (SAN CARLOS)', 'S');
INSERT INTO `tab_parroquias` VALUES ('604', '100', 'GRAL. PEDRO J. MONTERO (BOLICHE)', 'S');
INSERT INTO `tab_parroquias` VALUES ('605', '100', 'SAN JACINTO DE YAGUACHI-CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('606', '100', 'SIMON BOLIVAR', 'S');
INSERT INTO `tab_parroquias` VALUES ('607', '100', 'VIRGEN DE FATIMA', 'S');
INSERT INTO `tab_parroquias` VALUES ('608', '100', 'YAGUACHI VIEJO (CONE)', 'S');
INSERT INTO `tab_parroquias` VALUES ('609', '101', 'SANTA LUCIA- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('610', '102', 'CRNEL.LORENZO DE GARAICOA (PEDREGAL)', 'S');
INSERT INTO `tab_parroquias` VALUES ('611', '102', 'SIMON BOLIVAR- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('612', '103', 'ANDRADE MARIN (LOURDES)', 'S');
INSERT INTO `tab_parroquias` VALUES ('613', '103', 'ATUNTAQUI', 'S');
INSERT INTO `tab_parroquias` VALUES ('614', '103', 'ATUNTAQUI- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('615', '103', 'IMBAYA (SAN LUIS DE COBUENDO)', 'S');
INSERT INTO `tab_parroquias` VALUES ('616', '103', 'SAN FRANCISCO DE NATABUELA', 'S');
INSERT INTO `tab_parroquias` VALUES ('617', '103', 'SAN JOSE DE CHALTURA', 'S');
INSERT INTO `tab_parroquias` VALUES ('618', '103', 'SAN ROQUE', 'S');
INSERT INTO `tab_parroquias` VALUES ('619', '104', '6 DE JULIO DE CUELLAJE (CAB. EN CUELLAJE)', 'S');
INSERT INTO `tab_parroquias` VALUES ('620', '104', 'APUELA', 'S');
INSERT INTO `tab_parroquias` VALUES ('621', '104', 'COTACACHI- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('622', '104', 'GARCIA MORENO (LLURIMAGUA)', 'S');
INSERT INTO `tab_parroquias` VALUES ('623', '104', 'IMANTAG', 'S');
INSERT INTO `tab_parroquias` VALUES ('624', '104', 'PEÑAHERRERA', 'S');
INSERT INTO `tab_parroquias` VALUES ('625', '104', 'PLAZA GUTIERREZ (CALVARIO)', 'S');
INSERT INTO `tab_parroquias` VALUES ('626', '104', 'QUIROGA', 'S');
INSERT INTO `tab_parroquias` VALUES ('627', '104', 'SAGRARIO', 'S');
INSERT INTO `tab_parroquias` VALUES ('628', '104', 'SAN FRANCISCO', 'S');
INSERT INTO `tab_parroquias` VALUES ('629', '104', 'VACAS GALINDO (EL CHURO) (CAB.EN SAN MIGUEL ALTO)', 'S');
INSERT INTO `tab_parroquias` VALUES ('630', '105', 'AMBUQUI', 'S');
INSERT INTO `tab_parroquias` VALUES ('631', '105', 'ANGOCHAGUA', 'S');
INSERT INTO `tab_parroquias` VALUES ('632', '105', 'CARANQUI', 'S');
INSERT INTO `tab_parroquias` VALUES ('633', '105', 'CAROLINA', 'S');
INSERT INTO `tab_parroquias` VALUES ('634', '105', 'GUAYAQUIL DE ALPACHACA', 'S');
INSERT INTO `tab_parroquias` VALUES ('635', '105', 'LA DOLOROSA DEL PRIORATO', 'S');
INSERT INTO `tab_parroquias` VALUES ('636', '105', 'LA ESPERANZA', 'S');
INSERT INTO `tab_parroquias` VALUES ('637', '105', 'LITA', 'S');
INSERT INTO `tab_parroquias` VALUES ('638', '105', 'SAGRARIO', 'S');
INSERT INTO `tab_parroquias` VALUES ('639', '105', 'SALINAS', 'S');
INSERT INTO `tab_parroquias` VALUES ('640', '105', 'SAN ANTONIO', 'S');
INSERT INTO `tab_parroquias` VALUES ('641', '105', 'SAN FRANCISCO', 'S');
INSERT INTO `tab_parroquias` VALUES ('642', '105', 'SAN MIGUEL DE IBARRA- CABECERA CANTONAL Y CAPITAL PROVINCIAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('643', '106', 'DR. MIGUEL EGAS CABEZAS (PEGUCHE)', 'S');
INSERT INTO `tab_parroquias` VALUES ('644', '106', 'EUGENIO ESPEJO (CALPAQUI)', 'S');
INSERT INTO `tab_parroquias` VALUES ('645', '106', 'GONZALEZ SUAREZ', 'S');
INSERT INTO `tab_parroquias` VALUES ('646', '106', 'JORDAN', 'S');
INSERT INTO `tab_parroquias` VALUES ('647', '106', 'OTAVALO- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('648', '106', 'PATAQUI', 'S');
INSERT INTO `tab_parroquias` VALUES ('649', '106', 'SAN JOSE DE QUICHINCHE', 'S');
INSERT INTO `tab_parroquias` VALUES ('650', '106', 'SAN JUAN DE ILUMAN', 'S');
INSERT INTO `tab_parroquias` VALUES ('651', '106', 'SAN LUIS', 'S');
INSERT INTO `tab_parroquias` VALUES ('652', '106', 'SAN PABLO', 'S');
INSERT INTO `tab_parroquias` VALUES ('653', '106', 'SAN RAFAEL', 'S');
INSERT INTO `tab_parroquias` VALUES ('654', '106', 'SELVA ALEGRE (CAB.EN SAN MIGUEL DE PAMPLONA)', 'S');
INSERT INTO `tab_parroquias` VALUES ('655', '107', 'CHUGA', 'S');
INSERT INTO `tab_parroquias` VALUES ('656', '107', 'MARIANO ACOSTA', 'S');
INSERT INTO `tab_parroquias` VALUES ('657', '107', 'PIMAMPIRO- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('658', '107', 'SAN FRANCISCO DE SIGSIPAMBA', 'S');
INSERT INTO `tab_parroquias` VALUES ('659', '108', 'CAHUASQUI', 'S');
INSERT INTO `tab_parroquias` VALUES ('660', '108', 'LA MERCED DE BUENOS AIRES', 'S');
INSERT INTO `tab_parroquias` VALUES ('661', '108', 'PABLO ARENAS', 'S');
INSERT INTO `tab_parroquias` VALUES ('662', '108', 'SAN BLAS', 'S');
INSERT INTO `tab_parroquias` VALUES ('663', '108', 'TUMBABIRO', 'S');
INSERT INTO `tab_parroquias` VALUES ('664', '108', 'URCUQUI- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('665', '109', 'CARIAMANGA', 'S');
INSERT INTO `tab_parroquias` VALUES ('666', '109', 'CARIAMANGA- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('667', '109', 'CHILE', 'S');
INSERT INTO `tab_parroquias` VALUES ('668', '109', 'COLAISACA', 'S');
INSERT INTO `tab_parroquias` VALUES ('669', '109', 'EL LUCERO', 'S');
INSERT INTO `tab_parroquias` VALUES ('670', '109', 'SAN VICENTE', 'S');
INSERT INTO `tab_parroquias` VALUES ('671', '109', 'SANGUILLIN', 'S');
INSERT INTO `tab_parroquias` VALUES ('672', '109', 'UTUANA', 'S');
INSERT INTO `tab_parroquias` VALUES ('673', '110', 'CATAMAYO', 'S');
INSERT INTO `tab_parroquias` VALUES ('674', '110', 'CATAMAYO (LA TOMA)- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('675', '110', 'EL TAMBO', 'S');
INSERT INTO `tab_parroquias` VALUES ('676', '110', 'GUAYQUICHUMA', 'S');
INSERT INTO `tab_parroquias` VALUES ('677', '110', 'SAN JOSE', 'S');
INSERT INTO `tab_parroquias` VALUES ('678', '110', 'SAN PEDRO DE LA BENDITA', 'S');
INSERT INTO `tab_parroquias` VALUES ('679', '110', 'ZAMBI', 'S');
INSERT INTO `tab_parroquias` VALUES ('680', '111', '12 DE DICIEMBRE', 'S');
INSERT INTO `tab_parroquias` VALUES ('681', '111', 'CELICA- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('682', '111', 'CHAQUINAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('683', '111', 'CRUZPAMBA (CAB. EN CARLOS BUSTAMANTE)', 'S');
INSERT INTO `tab_parroquias` VALUES ('684', '111', 'PINDAL (FEDERICO PAEZ)', 'S');
INSERT INTO `tab_parroquias` VALUES ('685', '111', 'POZUL (SAN JUAN DE POZUL)', 'S');
INSERT INTO `tab_parroquias` VALUES ('686', '111', 'SABANILLA', 'S');
INSERT INTO `tab_parroquias` VALUES ('687', '111', 'TNTE. MAXIMILIANO RODRIGUEZ LOAIZA', 'S');
INSERT INTO `tab_parroquias` VALUES ('688', '112', 'AMARILLOS', 'S');
INSERT INTO `tab_parroquias` VALUES ('689', '112', 'BUENAVISTA', 'S');
INSERT INTO `tab_parroquias` VALUES ('690', '112', 'CHAGUARPAMBA- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('691', '112', 'EL ROSARIO', 'S');
INSERT INTO `tab_parroquias` VALUES ('692', '112', 'SANTA RUFINA', 'S');
INSERT INTO `tab_parroquias` VALUES ('693', '113', '27 DE ABRIL (CAB. EN LA NARANJA)', 'S');
INSERT INTO `tab_parroquias` VALUES ('694', '113', 'AMALUZA- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('695', '113', 'BELLAVISTA', 'S');
INSERT INTO `tab_parroquias` VALUES ('696', '113', 'EL AIRO', 'S');
INSERT INTO `tab_parroquias` VALUES ('697', '113', 'EL INGENIO', 'S');
INSERT INTO `tab_parroquias` VALUES ('698', '113', 'JIMBURA', 'S');
INSERT INTO `tab_parroquias` VALUES ('699', '113', 'SANTA TERESITA', 'S');
INSERT INTO `tab_parroquias` VALUES ('700', '114', 'CHANGAIMINA (LA LIBERTAD)', 'S');
INSERT INTO `tab_parroquias` VALUES ('701', '114', 'FUNDOCHAMBA', 'S');
INSERT INTO `tab_parroquias` VALUES ('702', '114', 'GONZANAMA- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('703', '114', 'NAMBACOLA', 'S');
INSERT INTO `tab_parroquias` VALUES ('704', '114', 'PURUNUMA (EGUIGUREN)', 'S');
INSERT INTO `tab_parroquias` VALUES ('705', '114', 'QUILANGA (LA PAZ)', 'S');
INSERT INTO `tab_parroquias` VALUES ('706', '114', 'SACAPALCA', 'S');
INSERT INTO `tab_parroquias` VALUES ('707', '114', 'SAN ANTONIO DE LAS ARADAS (CAB. EN LAS ARADAS)', 'S');
INSERT INTO `tab_parroquias` VALUES ('708', '115', 'CHANTACO', 'S');
INSERT INTO `tab_parroquias` VALUES ('709', '115', 'CHUQUIRIBAMBA', 'S');
INSERT INTO `tab_parroquias` VALUES ('710', '115', 'EL CISNE', 'S');
INSERT INTO `tab_parroquias` VALUES ('711', '115', 'EL SAGRARIO', 'S');
INSERT INTO `tab_parroquias` VALUES ('712', '115', 'GUALEL', 'S');
INSERT INTO `tab_parroquias` VALUES ('713', '115', 'JIMBILLA', 'S');
INSERT INTO `tab_parroquias` VALUES ('714', '115', 'LOJA- CABECERA CANTONAL Y CAPITAL PROVINCIAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('715', '115', 'MALACATOS (VALLADOLID)', 'S');
INSERT INTO `tab_parroquias` VALUES ('716', '115', 'QUINARA', 'S');
INSERT INTO `tab_parroquias` VALUES ('717', '115', 'SAN LUCAS', 'S');
INSERT INTO `tab_parroquias` VALUES ('718', '115', 'SAN PEDRO DE VILCABAMBA', 'S');
INSERT INTO `tab_parroquias` VALUES ('719', '115', 'SAN SEBASTIAN', 'S');
INSERT INTO `tab_parroquias` VALUES ('720', '115', 'SANTIAGO', 'S');
INSERT INTO `tab_parroquias` VALUES ('721', '115', 'SUCRE', 'S');
INSERT INTO `tab_parroquias` VALUES ('722', '115', 'TAQUIL (MIGUEL RIOFRIO)', 'S');
INSERT INTO `tab_parroquias` VALUES ('723', '115', 'VALLE', 'S');
INSERT INTO `tab_parroquias` VALUES ('724', '115', 'VILCABAMBA (VICTORIA)', 'S');
INSERT INTO `tab_parroquias` VALUES ('725', '115', 'YANGANA (ARSENIO CASTILLO)', 'S');
INSERT INTO `tab_parroquias` VALUES ('726', '116', 'GENERAL ELOY ALFARO (SAN SEBASTIAN)', 'S');
INSERT INTO `tab_parroquias` VALUES ('727', '116', 'LA VICTORIA', 'S');
INSERT INTO `tab_parroquias` VALUES ('728', '116', 'LARAMA', 'S');
INSERT INTO `tab_parroquias` VALUES ('729', '116', 'MACARA (MANUEL ENRIQUE RENGEL SUQUILANDA)', 'S');
INSERT INTO `tab_parroquias` VALUES ('730', '116', 'MACARA- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('731', '116', 'SABIANGO (LA CAPILLA)', 'S');
INSERT INTO `tab_parroquias` VALUES ('732', '117', 'LA TINGUE', 'S');
INSERT INTO `tab_parroquias` VALUES ('733', '117', 'OLMEDO- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('734', '118', 'CANGONAMA', 'S');
INSERT INTO `tab_parroquias` VALUES ('735', '118', 'CASANGA', 'S');
INSERT INTO `tab_parroquias` VALUES ('736', '118', 'CATACOCHA', 'S');
INSERT INTO `tab_parroquias` VALUES ('737', '118', 'CATACOCHA- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('738', '118', 'GUACHANAMA', 'S');
INSERT INTO `tab_parroquias` VALUES ('739', '118', 'LA TINGUE', 'S');
INSERT INTO `tab_parroquias` VALUES ('740', '118', 'LAURO GUERRERO', 'S');
INSERT INTO `tab_parroquias` VALUES ('741', '118', 'LOURDES', 'S');
INSERT INTO `tab_parroquias` VALUES ('742', '118', 'OLMEDO (SANTA BARBARA)', 'S');
INSERT INTO `tab_parroquias` VALUES ('743', '118', 'ORIANGA', 'S');
INSERT INTO `tab_parroquias` VALUES ('744', '118', 'SAN ANTONIO', 'S');
INSERT INTO `tab_parroquias` VALUES ('745', '118', 'YAMANA', 'S');
INSERT INTO `tab_parroquias` VALUES ('746', '119', '12 DE DICIEMBRE (CAB.EN ACHIOTES)', 'S');
INSERT INTO `tab_parroquias` VALUES ('747', '119', 'CHAQUINAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('748', '119', 'PINDAL- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('749', '120', 'ALAMOR- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('750', '120', 'CIANO', 'S');
INSERT INTO `tab_parroquias` VALUES ('751', '120', 'EL ARENAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('752', '120', 'EL LIMO (MARIANA DE JESUS)', 'S');
INSERT INTO `tab_parroquias` VALUES ('753', '120', 'MERCADILLO', 'S');
INSERT INTO `tab_parroquias` VALUES ('754', '120', 'VICENTINO', 'S');
INSERT INTO `tab_parroquias` VALUES ('755', '121', 'FUNDOCHAMBA', 'S');
INSERT INTO `tab_parroquias` VALUES ('756', '121', 'QUILANGA- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('757', '121', 'SAN ANTONIO DE LAS ARADAS (CAB. EN LAS ARADAS)', 'S');
INSERT INTO `tab_parroquias` VALUES ('758', '122', 'EL PARAISO DE CELEN', 'S');
INSERT INTO `tab_parroquias` VALUES ('759', '122', 'EL TABLON', 'S');
INSERT INTO `tab_parroquias` VALUES ('760', '122', 'LLUZHAPA', 'S');
INSERT INTO `tab_parroquias` VALUES ('761', '122', 'MANU', 'S');
INSERT INTO `tab_parroquias` VALUES ('762', '122', 'SAN ANTONIO DE QUMBE (CUMBE)', 'S');
INSERT INTO `tab_parroquias` VALUES ('763', '122', 'SAN PABLO DE TENTA', 'S');
INSERT INTO `tab_parroquias` VALUES ('764', '122', 'SAN SEBASTIAN DE YULUC', 'S');
INSERT INTO `tab_parroquias` VALUES ('765', '122', 'SARAGURO- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('766', '122', 'SELVA ALEGRE', 'S');
INSERT INTO `tab_parroquias` VALUES ('767', '122', 'SUMAYPAMBA', 'S');
INSERT INTO `tab_parroquias` VALUES ('768', '122', 'URDANETA (PAQUISHAPA)', 'S');
INSERT INTO `tab_parroquias` VALUES ('769', '123', 'NUEVA FATIMA', 'S');
INSERT INTO `tab_parroquias` VALUES ('770', '123', 'SOZORANGA- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('771', '123', 'TACAMOROS', 'S');
INSERT INTO `tab_parroquias` VALUES ('772', '124', 'BOLASPAMBA', 'S');
INSERT INTO `tab_parroquias` VALUES ('773', '124', 'CAZADEROS (CAB.EN MANGAURCO)', 'S');
INSERT INTO `tab_parroquias` VALUES ('774', '124', 'GARZAREAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('775', '124', 'LIMONES', 'S');
INSERT INTO `tab_parroquias` VALUES ('776', '124', 'PALETILLAS', 'S');
INSERT INTO `tab_parroquias` VALUES ('777', '124', 'ZAPOTILLO- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('778', '125', 'BABA- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('779', '125', 'GUARE', 'S');
INSERT INTO `tab_parroquias` VALUES ('780', '125', 'ISLA DE BEJUCAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('781', '126', 'BABAHOYO- CABECERA CANTONAL Y CAPITAL PROVINCIAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('782', '126', 'BARREIRO', 'S');
INSERT INTO `tab_parroquias` VALUES ('783', '126', 'BARREIRO (SANTA RITA)', 'S');
INSERT INTO `tab_parroquias` VALUES ('784', '126', 'CARACOL', 'S');
INSERT INTO `tab_parroquias` VALUES ('785', '126', 'CLEMENTE BAQUERIZO', 'S');
INSERT INTO `tab_parroquias` VALUES ('786', '126', 'DR. CAMILO PONCE', 'S');
INSERT INTO `tab_parroquias` VALUES ('787', '126', 'EL SALTO', 'S');
INSERT INTO `tab_parroquias` VALUES ('788', '126', 'FEBRES CORDERO (LAS JUNTAS)(CAB. EN MATA DE CACAO)', 'S');
INSERT INTO `tab_parroquias` VALUES ('789', '126', 'LA UNION', 'S');
INSERT INTO `tab_parroquias` VALUES ('790', '126', 'PIMOCHA', 'S');
INSERT INTO `tab_parroquias` VALUES ('791', '127', '11 DE OCTUBRE', 'S');
INSERT INTO `tab_parroquias` VALUES ('792', '127', '7 DE AGOSTO', 'S');
INSERT INTO `tab_parroquias` VALUES ('793', '127', 'PATRICIA PILAR', 'S');
INSERT INTO `tab_parroquias` VALUES ('794', '127', 'SAN JACINTO DE BUENA FE', 'S');
INSERT INTO `tab_parroquias` VALUES ('795', '127', 'SAN JACINTO DE BUENA FE- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('796', '128', 'MOCACHE- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('797', '129', 'MONTALVO- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('798', '130', 'PALENQUE- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('799', '131', 'PUEBLOVIEJO- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('800', '131', 'PUERTO PECHICHE', 'S');
INSERT INTO `tab_parroquias` VALUES ('801', '131', 'SAN JUAN', 'S');
INSERT INTO `tab_parroquias` VALUES ('802', '132', '24 DE MAYO', 'S');
INSERT INTO `tab_parroquias` VALUES ('803', '132', 'BUENA FE', 'S');
INSERT INTO `tab_parroquias` VALUES ('804', '132', 'BUENA FE', 'S');
INSERT INTO `tab_parroquias` VALUES ('805', '132', 'LA ESPERANZA', 'S');
INSERT INTO `tab_parroquias` VALUES ('806', '132', 'MOCACHE', 'S');
INSERT INTO `tab_parroquias` VALUES ('807', '132', 'MOCACHE', 'S');
INSERT INTO `tab_parroquias` VALUES ('808', '132', 'QUEVEDO', 'S');
INSERT INTO `tab_parroquias` VALUES ('809', '132', 'QUEVEDO- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('810', '132', 'SAN CAMILO', 'S');
INSERT INTO `tab_parroquias` VALUES ('811', '132', 'SAN CARLOS', 'S');
INSERT INTO `tab_parroquias` VALUES ('812', '132', 'SAN JOSE', 'S');
INSERT INTO `tab_parroquias` VALUES ('813', '132', 'SIETE DE OCTUBRE', 'S');
INSERT INTO `tab_parroquias` VALUES ('814', '132', 'VALENCIA', 'S');
INSERT INTO `tab_parroquias` VALUES ('815', '132', 'VALENCIA', 'S');
INSERT INTO `tab_parroquias` VALUES ('816', '132', 'VENUS DEL RIO QUEVEDO', 'S');
INSERT INTO `tab_parroquias` VALUES ('817', '132', 'VIVA ALFARO', 'S');
INSERT INTO `tab_parroquias` VALUES ('818', '133', 'QUINSALOMA- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('819', '134', 'CATARAMA- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('820', '134', 'RICAURTE', 'S');
INSERT INTO `tab_parroquias` VALUES ('821', '135', 'VALENCIA- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('822', '136', 'QUINSALOMA', 'S');
INSERT INTO `tab_parroquias` VALUES ('823', '136', 'VENTANAS- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('824', '136', 'ZAPOTAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('825', '137', 'ANTONIO SOTOMAYOR (CAB. EN PLAYAS DE VINCES)', 'S');
INSERT INTO `tab_parroquias` VALUES ('826', '137', 'PALENQUE', 'S');
INSERT INTO `tab_parroquias` VALUES ('827', '137', 'VINCES- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('828', '138', 'ARQ. SIXTO DURAN BALLEN', 'S');
INSERT INTO `tab_parroquias` VALUES ('829', '138', 'BELLAVISTA', 'S');
INSERT INTO `tab_parroquias` VALUES ('830', '138', 'NOBOA', 'S');
INSERT INTO `tab_parroquias` VALUES ('831', '138', 'SUCRE- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('832', '139', 'CALCETA- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('833', '139', 'MEMBRILLO', 'S');
INSERT INTO `tab_parroquias` VALUES ('834', '139', 'QUIROGA', 'S');
INSERT INTO `tab_parroquias` VALUES ('835', '140', 'BOYACA', 'S');
INSERT INTO `tab_parroquias` VALUES ('836', '140', 'CANUTO', 'S');
INSERT INTO `tab_parroquias` VALUES ('837', '140', 'CHIBUNGA', 'S');
INSERT INTO `tab_parroquias` VALUES ('838', '140', 'CHONE', 'S');
INSERT INTO `tab_parroquias` VALUES ('839', '140', 'CHONE- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('840', '140', 'CONVENTO', 'S');
INSERT INTO `tab_parroquias` VALUES ('841', '140', 'ELOY ALFARO', 'S');
INSERT INTO `tab_parroquias` VALUES ('842', '140', 'RICAURTE', 'S');
INSERT INTO `tab_parroquias` VALUES ('843', '140', 'SAN ANTONIO', 'S');
INSERT INTO `tab_parroquias` VALUES ('844', '140', 'SANTA RITA', 'S');
INSERT INTO `tab_parroquias` VALUES ('845', '141', '4 DE DICIEMBRE', 'S');
INSERT INTO `tab_parroquias` VALUES ('846', '141', 'EL CARMEN', 'S');
INSERT INTO `tab_parroquias` VALUES ('847', '141', 'EL CARMEN- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('848', '141', 'SAN PEDRO DE SUMA', 'S');
INSERT INTO `tab_parroquias` VALUES ('849', '141', 'WILFRIDO LOOR MOREIRA (MAICITO)', 'S');
INSERT INTO `tab_parroquias` VALUES ('850', '142', 'FLAVIO ALFARO- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('851', '142', 'SAN FRANCISCO DE NOVILLO (CAB. EN NOVILLO)', 'S');
INSERT INTO `tab_parroquias` VALUES ('852', '142', 'ZAPALLO', 'S');
INSERT INTO `tab_parroquias` VALUES ('853', '143', 'JAMA- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('854', '144', 'JARAMIJO- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('855', '145', '*MACHALILLA', 'S');
INSERT INTO `tab_parroquias` VALUES ('856', '145', 'AMERICA', 'S');
INSERT INTO `tab_parroquias` VALUES ('857', '145', 'DR. MIGUEL MORAN LUCIO', 'S');
INSERT INTO `tab_parroquias` VALUES ('858', '145', 'EL ANEGADO (CAB. EN ELOY ALFARO)', 'S');
INSERT INTO `tab_parroquias` VALUES ('859', '145', 'JIPIJAPA- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('860', '145', 'JULCUY', 'S');
INSERT INTO `tab_parroquias` VALUES ('861', '145', 'LA UNION', 'S');
INSERT INTO `tab_parroquias` VALUES ('862', '145', 'MANUEL INOCENCIO PARRALES Y GUALE', 'S');
INSERT INTO `tab_parroquias` VALUES ('863', '145', 'MEMBRILLAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('864', '145', 'PEDRO PABLO GOMEZ', 'S');
INSERT INTO `tab_parroquias` VALUES ('865', '145', 'PUERTO DE CAYO', 'S');
INSERT INTO `tab_parroquias` VALUES ('866', '145', 'PUERTO LOPEZ', 'S');
INSERT INTO `tab_parroquias` VALUES ('867', '145', 'SAN LORENZO DE JIPIJAPA', 'S');
INSERT INTO `tab_parroquias` VALUES ('868', '146', 'JUNIN- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('869', '147', 'ELOY ALFARO', 'S');
INSERT INTO `tab_parroquias` VALUES ('870', '147', 'LOS ESTEROS', 'S');
INSERT INTO `tab_parroquias` VALUES ('871', '147', 'MANTA', 'S');
INSERT INTO `tab_parroquias` VALUES ('872', '147', 'MANTA- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('873', '147', 'SAN LORENZO', 'S');
INSERT INTO `tab_parroquias` VALUES ('874', '147', 'SAN MATEO', 'S');
INSERT INTO `tab_parroquias` VALUES ('875', '147', 'SANTA MARIANITA (BOCA DE PACOCHE)', 'S');
INSERT INTO `tab_parroquias` VALUES ('876', '147', 'TARQUI', 'S');
INSERT INTO `tab_parroquias` VALUES ('877', '148', 'ANIBAL SAN ANDRES', 'S');
INSERT INTO `tab_parroquias` VALUES ('878', '148', 'JARAMIJO', 'S');
INSERT INTO `tab_parroquias` VALUES ('879', '148', 'LA PILA', 'S');
INSERT INTO `tab_parroquias` VALUES ('880', '148', 'MONTECRISTI', 'S');
INSERT INTO `tab_parroquias` VALUES ('881', '148', 'MONTECRISTI- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('882', '149', 'OLMEDO- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('883', '150', 'CAMPOZANO (LA PALMA DE PAJAN)', 'S');
INSERT INTO `tab_parroquias` VALUES ('884', '150', 'CASCOL', 'S');
INSERT INTO `tab_parroquias` VALUES ('885', '150', 'GUALE', 'S');
INSERT INTO `tab_parroquias` VALUES ('886', '150', 'LASCANO', 'S');
INSERT INTO `tab_parroquias` VALUES ('887', '150', 'PAJAN- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('888', '151', '10 DE AGOSTO', 'S');
INSERT INTO `tab_parroquias` VALUES ('889', '151', 'ATAHUALPA', 'S');
INSERT INTO `tab_parroquias` VALUES ('890', '151', 'COJIMIES', 'S');
INSERT INTO `tab_parroquias` VALUES ('891', '151', 'PEDERNALES- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('892', '152', 'BARRAGANETE', 'S');
INSERT INTO `tab_parroquias` VALUES ('893', '152', 'PICHINCHA- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('894', '152', 'SAN SEBASTIAN', 'S');
INSERT INTO `tab_parroquias` VALUES ('895', '153', '12 DE MARZO', 'S');
INSERT INTO `tab_parroquias` VALUES ('896', '153', '18 DE OCTUBRE', 'S');
INSERT INTO `tab_parroquias` VALUES ('897', '153', 'ABDON CALDERON (SAN FRANCISCO)', 'S');
INSERT INTO `tab_parroquias` VALUES ('898', '153', 'ALHAJUELA (BAJO GRANDE)', 'S');
INSERT INTO `tab_parroquias` VALUES ('899', '153', 'ANDRES DE VERA', 'S');
INSERT INTO `tab_parroquias` VALUES ('900', '153', 'CHIRIJOS', 'S');
INSERT INTO `tab_parroquias` VALUES ('901', '153', 'COLON', 'S');
INSERT INTO `tab_parroquias` VALUES ('902', '153', 'CRUCITA', 'S');
INSERT INTO `tab_parroquias` VALUES ('903', '153', 'FRANCISCO PACHECO', 'S');
INSERT INTO `tab_parroquias` VALUES ('904', '153', 'PICOAZA', 'S');
INSERT INTO `tab_parroquias` VALUES ('905', '153', 'PORTOVIEJO', 'S');
INSERT INTO `tab_parroquias` VALUES ('906', '153', 'PORTOVIEJO- CABECERA CANTONAL Y CAPITAL PROVINCIAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('907', '153', 'PUEBLO NUEVO', 'S');
INSERT INTO `tab_parroquias` VALUES ('908', '153', 'RIOCHICO (RIO CHICO)', 'S');
INSERT INTO `tab_parroquias` VALUES ('909', '153', 'SAN PABLO', 'S');
INSERT INTO `tab_parroquias` VALUES ('910', '153', 'SAN PLACIDO', 'S');
INSERT INTO `tab_parroquias` VALUES ('911', '153', 'SIMON BOLIVAR', 'S');
INSERT INTO `tab_parroquias` VALUES ('912', '154', 'MACHALILLA', 'S');
INSERT INTO `tab_parroquias` VALUES ('913', '154', 'PUERTO LOPEZ- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('914', '154', 'SALANGO', 'S');
INSERT INTO `tab_parroquias` VALUES ('915', '155', 'ROCAFUERTE- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('916', '156', 'CANOA', 'S');
INSERT INTO `tab_parroquias` VALUES ('917', '156', 'SAN VICENTE- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('918', '157', 'AYACUCHO', 'S');
INSERT INTO `tab_parroquias` VALUES ('919', '157', 'HONORATO VASQUEZ (CAB. EN VASQUEZ)', 'S');
INSERT INTO `tab_parroquias` VALUES ('920', '157', 'LA UNION', 'S');
INSERT INTO `tab_parroquias` VALUES ('921', '157', 'LODANA', 'S');
INSERT INTO `tab_parroquias` VALUES ('922', '157', 'OLMEDO', 'S');
INSERT INTO `tab_parroquias` VALUES ('923', '157', 'SAN PABLO (CAB. EN PUEBLO NUEVO)', 'S');
INSERT INTO `tab_parroquias` VALUES ('924', '157', 'SANTA ANA', 'S');
INSERT INTO `tab_parroquias` VALUES ('925', '157', 'SANTA ANA DE VUELTA LARGA- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('926', '158', '10 DE AGOSTO', 'S');
INSERT INTO `tab_parroquias` VALUES ('927', '158', 'BAHIA DE CARAQUEZ', 'S');
INSERT INTO `tab_parroquias` VALUES ('928', '158', 'BAHIA DE CARAQUEZ- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('929', '158', 'CANOA', 'S');
INSERT INTO `tab_parroquias` VALUES ('930', '158', 'CHARAPOTO', 'S');
INSERT INTO `tab_parroquias` VALUES ('931', '158', 'COJIMIES', 'S');
INSERT INTO `tab_parroquias` VALUES ('932', '158', 'JAMA', 'S');
INSERT INTO `tab_parroquias` VALUES ('933', '158', 'LEONIDAS PLAZA GUTIERREZ', 'S');
INSERT INTO `tab_parroquias` VALUES ('934', '158', 'PEDERNALES', 'S');
INSERT INTO `tab_parroquias` VALUES ('935', '158', 'SAN ISIDRO', 'S');
INSERT INTO `tab_parroquias` VALUES ('936', '158', 'SAN VICENTE', 'S');
INSERT INTO `tab_parroquias` VALUES ('937', '159', 'ANGEL PEDRO GILER (LA ESTANCILLA)', 'S');
INSERT INTO `tab_parroquias` VALUES ('938', '159', 'BACHILLERO', 'S');
INSERT INTO `tab_parroquias` VALUES ('939', '159', 'TOSAGUA- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('940', '160', 'AMAZONAS (ROSARIO DE CUYES)', 'S');
INSERT INTO `tab_parroquias` VALUES ('941', '160', 'BERMEJOS', 'S');
INSERT INTO `tab_parroquias` VALUES ('942', '160', 'BOMBOIZA', 'S');
INSERT INTO `tab_parroquias` VALUES ('943', '160', 'CHIGUINDA', 'S');
INSERT INTO `tab_parroquias` VALUES ('944', '160', 'EL IDEAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('945', '160', 'EL ROSARIO', 'S');
INSERT INTO `tab_parroquias` VALUES ('946', '160', 'GUALAQUIZA', 'S');
INSERT INTO `tab_parroquias` VALUES ('947', '160', 'GUALAQUIZA- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('948', '160', 'MERCEDES MOLINA', 'S');
INSERT INTO `tab_parroquias` VALUES ('949', '160', 'NUEVA TARQUI', 'S');
INSERT INTO `tab_parroquias` VALUES ('950', '160', 'SAN MIGUEL DE CUYES', 'S');
INSERT INTO `tab_parroquias` VALUES ('951', '161', 'CHIGUAZA', 'S');
INSERT INTO `tab_parroquias` VALUES ('952', '161', 'HUAMBOYA- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('953', '161', 'PABLO SEXTO', 'S');
INSERT INTO `tab_parroquias` VALUES ('954', '162', 'GENERAL LEONIDAS PLAZA GUTIERREZ (LIMON)- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('955', '162', 'INDANZA', 'S');
INSERT INTO `tab_parroquias` VALUES ('956', '162', 'PAN DE AZUCAR', 'S');
INSERT INTO `tab_parroquias` VALUES ('957', '162', 'SAN ANTONIO (CAB. EN SAN ANTONIO CENTRO)', 'S');
INSERT INTO `tab_parroquias` VALUES ('958', '162', 'SAN CARLOS DE LIMON (SAN CARLOS DEL ZAMORA)', 'S');
INSERT INTO `tab_parroquias` VALUES ('959', '162', 'SAN JUAN BOSCO', 'S');
INSERT INTO `tab_parroquias` VALUES ('960', '162', 'SAN MIGUEL DE CONCHAY', 'S');
INSERT INTO `tab_parroquias` VALUES ('961', '162', 'SANTA SUSANA DE CHIVIAZA (CAB. EN CHIVIAZA)', 'S');
INSERT INTO `tab_parroquias` VALUES ('962', '162', 'YUNGANZA (CAB. EN EL ROSARIO)', 'S');
INSERT INTO `tab_parroquias` VALUES ('963', '163', 'LOGROÑO- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('964', '163', 'SHIMPIS', 'S');
INSERT INTO `tab_parroquias` VALUES ('965', '163', 'YAUPI', 'S');
INSERT INTO `tab_parroquias` VALUES ('966', '164', 'ALSHI (CAB. EN 9 DE OCTUBRE)', 'S');
INSERT INTO `tab_parroquias` VALUES ('967', '164', 'CHIGUAZA', 'S');
INSERT INTO `tab_parroquias` VALUES ('968', '164', 'CUCHAENTZA', 'S');
INSERT INTO `tab_parroquias` VALUES ('969', '164', 'GENERAL PROAÑO', 'S');
INSERT INTO `tab_parroquias` VALUES ('970', '164', 'HUASAGA (CAB.EN WAMPUIK)', 'S');
INSERT INTO `tab_parroquias` VALUES ('971', '164', 'MACAS- CABECERA CANTONAL Y CAPITAL PROVINCIAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('972', '164', 'MACUMA', 'S');
INSERT INTO `tab_parroquias` VALUES ('973', '164', 'RIO BLANCO', 'S');
INSERT INTO `tab_parroquias` VALUES ('974', '164', 'SAN ISIDRO', 'S');
INSERT INTO `tab_parroquias` VALUES ('975', '164', 'SAN JOSE DE MORONA', 'S');
INSERT INTO `tab_parroquias` VALUES ('976', '164', 'SEVILLA DON BOSCO', 'S');
INSERT INTO `tab_parroquias` VALUES ('977', '164', 'SINAI', 'S');
INSERT INTO `tab_parroquias` VALUES ('978', '164', 'TAISHA', 'S');
INSERT INTO `tab_parroquias` VALUES ('979', '164', 'TUUTINENTZA', 'S');
INSERT INTO `tab_parroquias` VALUES ('980', '164', 'ZUÑA (ZUÑAC)', 'S');
INSERT INTO `tab_parroquias` VALUES ('981', '165', 'PABLO SEXTO- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('982', '166', '16 DE AGOSTO', 'S');
INSERT INTO `tab_parroquias` VALUES ('983', '166', 'ARAPICOS', 'S');
INSERT INTO `tab_parroquias` VALUES ('984', '166', 'CUMANDA (CAB. EN COLONIA AGRICOLA SEVILLA DEL ORO)', 'S');
INSERT INTO `tab_parroquias` VALUES ('985', '166', 'HUAMBOYA', 'S');
INSERT INTO `tab_parroquias` VALUES ('986', '166', 'PALORA (METZERA)-CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('987', '166', 'SANGAY (CAB. EN NAYAMANACA)', 'S');
INSERT INTO `tab_parroquias` VALUES ('988', '167', 'PAN DE AZUCAR', 'S');
INSERT INTO `tab_parroquias` VALUES ('989', '167', 'SAN CARLOS DE LIMON', 'S');
INSERT INTO `tab_parroquias` VALUES ('990', '167', 'SAN JACINTO DE WAKAMBEIS', 'S');
INSERT INTO `tab_parroquias` VALUES ('991', '167', 'SAN JUAN BOSCO- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('992', '167', 'SANTIAGO DE PANANZA', 'S');
INSERT INTO `tab_parroquias` VALUES ('993', '168', 'CHUPIANZA', 'S');
INSERT INTO `tab_parroquias` VALUES ('994', '168', 'COPAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('995', '168', 'PATUCA', 'S');
INSERT INTO `tab_parroquias` VALUES ('996', '168', 'SAN FRANCISCO DE CHINIMBIMI', 'S');
INSERT INTO `tab_parroquias` VALUES ('997', '168', 'SAN LUIS DE EL ACHO (CAB. EN EL ACHO)', 'S');
INSERT INTO `tab_parroquias` VALUES ('998', '168', 'SANTIAGO', 'S');
INSERT INTO `tab_parroquias` VALUES ('999', '168', 'SANTIAGO DE MENDEZ- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1000', '168', 'TAYUZA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1001', '169', 'ASUNCION', 'S');
INSERT INTO `tab_parroquias` VALUES ('1002', '169', 'HUAMBI', 'S');
INSERT INTO `tab_parroquias` VALUES ('1003', '169', 'LOGROÑO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1004', '169', 'SANTA MARIANITA DE JESUS', 'S');
INSERT INTO `tab_parroquias` VALUES ('1005', '169', 'SUCUA- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1006', '169', 'YAUPI', 'S');
INSERT INTO `tab_parroquias` VALUES ('1007', '170', 'HUASAGA (CAB. EN WAMPUIK)', 'S');
INSERT INTO `tab_parroquias` VALUES ('1008', '170', 'MACUMA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1009', '170', 'TAISHA- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1010', '170', 'TUUTINENTZA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1011', '171', 'SAN JOSE DE MORONA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1012', '171', 'SANTIAGO- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1013', '172', 'ARCHIDONA- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1014', '172', 'AVILA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1015', '172', 'COTUNDO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1016', '172', 'LORETO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1017', '172', 'PUERTO MURIALDO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1018', '172', 'SAN PABLO DE USHPAYACU', 'S');
INSERT INTO `tab_parroquias` VALUES ('1019', '173', 'CARLOS JULIO AROSEMENA TOLA- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1020', '174', 'EL CHACO- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1021', '174', 'GONZALO DIAZ DE PINEDA (EL BOMBON)', 'S');
INSERT INTO `tab_parroquias` VALUES ('1022', '174', 'LINARES', 'S');
INSERT INTO `tab_parroquias` VALUES ('1023', '174', 'OYACACHI', 'S');
INSERT INTO `tab_parroquias` VALUES ('1024', '174', 'SANTA ROSA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1025', '174', 'SARDINAS', 'S');
INSERT INTO `tab_parroquias` VALUES ('1026', '175', 'BAEZA- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1027', '175', 'COSANGA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1028', '175', 'CUYUJA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1029', '175', 'PAPALLACTA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1030', '175', 'SAN FRANCISCO DE BORJA (VIRGILIO DAVILA)', 'S');
INSERT INTO `tab_parroquias` VALUES ('1031', '175', 'SAN JOSE DEL PAYAMINO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1032', '175', 'SUMACO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1033', '176', 'AHUANO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1034', '176', 'CARLOS JULIO AROSEMENA TOLA (ZATZA-YACU)', 'S');
INSERT INTO `tab_parroquias` VALUES ('1035', '176', 'CHONTAPUNTA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1036', '176', 'PANO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1037', '176', 'PUERTO MISAHUALLI', 'S');
INSERT INTO `tab_parroquias` VALUES ('1038', '176', 'PUERTO NAPO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1039', '176', 'TALAG', 'S');
INSERT INTO `tab_parroquias` VALUES ('1040', '176', 'TENA- CABECERA CANTONAL Y CAPITAL PROVINCIAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1041', '177', 'CAPITAN AUGUSTO RIVADENEYRA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1042', '177', 'CONONACO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1043', '177', 'NUEVO ROCAFUERTE- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1044', '177', 'SANTA MARIA DE HUIRIRIMA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1045', '177', 'TIPUTINI', 'S');
INSERT INTO `tab_parroquias` VALUES ('1046', '177', 'YASUNI', 'S');
INSERT INTO `tab_parroquias` VALUES ('1047', '178', 'ENOKANQUI (CAB. EN EL PARAISO)', 'S');
INSERT INTO `tab_parroquias` VALUES ('1048', '178', 'LA JOYA DE LOS SACHAS- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1049', '178', 'LAGO SAN PEDRO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1050', '178', 'POMPEYA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1051', '178', 'RUMIPAMBA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1052', '178', 'SAN CARLOS', 'S');
INSERT INTO `tab_parroquias` VALUES ('1053', '178', 'SAN SEBASTIAN DEL COCA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1054', '178', 'TRES DE NOVIEMBRE', 'S');
INSERT INTO `tab_parroquias` VALUES ('1055', '178', 'UNION MILAGREÑA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1056', '179', 'AVILA (CAB. EN HUIRUNO)', 'S');
INSERT INTO `tab_parroquias` VALUES ('1057', '179', 'LORETO- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1058', '179', 'PUERTO MURIALDO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1059', '179', 'SAN JOSE DE DAHUANO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1060', '179', 'SAN JOSE DE PAYAMINO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1061', '179', 'SAN VICENTE DE HUATICOCHA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1062', '180', 'ALEJANDRO LABACA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1063', '180', 'DAYUMA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1064', '180', 'EL DORADO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1065', '180', 'EL EDEN', 'S');
INSERT INTO `tab_parroquias` VALUES ('1066', '180', 'GARCIA MORENO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1067', '180', 'INES ARANGO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1068', '180', 'LA BELLEZA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1069', '180', 'NUEVO PARAISO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1070', '180', 'PUERTO FRANCISCO DE ORELLANA (COCA)-CABECERA CANTONAL Y CAPITAL PROVINCIAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1071', '180', 'SAN JOSE DE GUAYUSA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1072', '180', 'SAN LUIS DE ARMENIA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1073', '180', 'TARACOA (CAB. EN NUEVA ESPERANZA: YUCA)', 'S');
INSERT INTO `tab_parroquias` VALUES ('1074', '181', 'ARAJUNO- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1075', '181', 'CURARAY', 'S');
INSERT INTO `tab_parroquias` VALUES ('1076', '182', 'MADRE TIERRA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1077', '182', 'MERA- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1078', '182', 'SHELL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1079', '183', 'ARAJUNO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1080', '183', 'CANELOS', 'S');
INSERT INTO `tab_parroquias` VALUES ('1081', '183', 'CURARAY', 'S');
INSERT INTO `tab_parroquias` VALUES ('1082', '183', 'DIEZ DE AGOSTO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1083', '183', 'EL TRIUNFO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1084', '183', 'FATIMA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1085', '183', 'MONTALVO (ANDOAS)', 'S');
INSERT INTO `tab_parroquias` VALUES ('1086', '183', 'POMONA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1087', '183', 'PUYO CABECERA CANTONAL Y CAPITAL PROVINCIAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1088', '183', 'RIO CORRIENTES', 'S');
INSERT INTO `tab_parroquias` VALUES ('1089', '183', 'RIO TIGRE', 'S');
INSERT INTO `tab_parroquias` VALUES ('1090', '183', 'SANTA CLARA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1091', '183', 'SARAYACU', 'S');
INSERT INTO `tab_parroquias` VALUES ('1092', '183', 'SIMON BOLIVAR (CAB. EN MUSHULLACTA)', 'S');
INSERT INTO `tab_parroquias` VALUES ('1093', '183', 'TARQUI', 'S');
INSERT INTO `tab_parroquias` VALUES ('1094', '183', 'TENIENTE HUGO ORTIZ', 'S');
INSERT INTO `tab_parroquias` VALUES ('1095', '183', 'VERACRUZ (INDILLAMA) (CAB. EN INDILLAMA)', 'S');
INSERT INTO `tab_parroquias` VALUES ('1096', '184', 'SAN JOSE', 'S');
INSERT INTO `tab_parroquias` VALUES ('1097', '184', 'SANTA CLARA- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1098', '185', 'ASCAZUBI', 'S');
INSERT INTO `tab_parroquias` VALUES ('1099', '185', 'AYORA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1100', '185', 'CANGAHUA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1101', '185', 'CAYAMBE', 'S');
INSERT INTO `tab_parroquias` VALUES ('1102', '185', 'CAYAMBE- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1103', '185', 'JUAN MONTALVO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1104', '185', 'OLMEDO (PESILLO)', 'S');
INSERT INTO `tab_parroquias` VALUES ('1105', '185', 'OTON', 'S');
INSERT INTO `tab_parroquias` VALUES ('1106', '185', 'SANTA ROSA DE CUZUBAMBA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1107', '186', 'ALOAG', 'S');
INSERT INTO `tab_parroquias` VALUES ('1108', '186', 'ALOASI', 'S');
INSERT INTO `tab_parroquias` VALUES ('1109', '186', 'CUTUGLAHUA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1110', '186', 'EL CHAUPI', 'S');
INSERT INTO `tab_parroquias` VALUES ('1111', '186', 'MACHACHI- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1112', '186', 'MANUEL CORNEJO ASTORGA (TANDAPI)', 'S');
INSERT INTO `tab_parroquias` VALUES ('1113', '186', 'TAMBILLO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1114', '186', 'UYUMBICHO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1115', '187', 'LA ESPERANZA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1116', '187', 'MALCHINGUI', 'S');
INSERT INTO `tab_parroquias` VALUES ('1117', '187', 'TABACUNDO- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1118', '187', 'TOCACHI', 'S');
INSERT INTO `tab_parroquias` VALUES ('1119', '187', 'TUPIGACHI', 'S');
INSERT INTO `tab_parroquias` VALUES ('1120', '188', 'PEDRO VICENTE MALDONADO- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1121', '189', 'PUERTO QUITO- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1122', '190', 'ALANGASI', 'S');
INSERT INTO `tab_parroquias` VALUES ('1123', '190', 'AMAGUAÑA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1124', '190', 'ATAHUALPA (HABASPAMBA)', 'S');
INSERT INTO `tab_parroquias` VALUES ('1125', '190', 'BELISARIO QUEVEDO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1126', '190', 'CALACALI', 'S');
INSERT INTO `tab_parroquias` VALUES ('1127', '190', 'CALDERON (CARAPUNGO)', 'S');
INSERT INTO `tab_parroquias` VALUES ('1128', '190', 'CARCELEN', 'S');
INSERT INTO `tab_parroquias` VALUES ('1129', '190', 'CENTRO HISTORICO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1130', '190', 'CHAVEZPAMBA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1131', '190', 'CHECA (CHILPA)', 'S');
INSERT INTO `tab_parroquias` VALUES ('1132', '190', 'CHILIBULO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1133', '190', 'CHILLOGALLO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1134', '190', 'CHIMBACALLE', 'S');
INSERT INTO `tab_parroquias` VALUES ('1135', '190', 'COCHAPAMBA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1136', '190', 'COMITE DEL PUEBLO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1137', '190', 'CONOCOTO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1138', '190', 'COTOCOLLAO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1139', '190', 'CUMBAYA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1140', '190', 'EL CONDADO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1141', '190', 'EL QUINCHE', 'S');
INSERT INTO `tab_parroquias` VALUES ('1142', '190', 'GUALEA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1143', '190', 'GUAMANI', 'S');
INSERT INTO `tab_parroquias` VALUES ('1144', '190', 'GUANGOPOLO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1145', '190', 'GUAYLLABAMBA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1146', '190', 'IÑAQUITO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1147', '190', 'ITCHIMBIA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1148', '190', 'JIPIJAPA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1149', '190', 'KENNEDY', 'S');
INSERT INTO `tab_parroquias` VALUES ('1150', '190', 'LA ARGELIA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1151', '190', 'LA CONCEPCION', 'S');
INSERT INTO `tab_parroquias` VALUES ('1152', '190', 'LA ECUATORIANA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1153', '190', 'LA FERROVIARIA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1154', '190', 'LA LIBERTAD', 'S');
INSERT INTO `tab_parroquias` VALUES ('1155', '190', 'LA MAGDALENA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1156', '190', 'LA MENA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1157', '190', 'LA MERCED', 'S');
INSERT INTO `tab_parroquias` VALUES ('1158', '190', 'LLANO CHICO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1159', '190', 'LLOA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1160', '190', 'MARISCAL SUCRE', 'S');
INSERT INTO `tab_parroquias` VALUES ('1161', '190', 'MINDO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1162', '190', 'NANEGAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1163', '190', 'NANEGALITO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1164', '190', 'NAYON', 'S');
INSERT INTO `tab_parroquias` VALUES ('1165', '190', 'NONO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1166', '190', 'PACTO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1167', '190', 'PEDRO VICENTE MALDONADO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1168', '190', 'PERUCHO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1169', '190', 'PIFO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1170', '190', 'PINTAG', 'S');
INSERT INTO `tab_parroquias` VALUES ('1171', '190', 'POMASQUI', 'S');
INSERT INTO `tab_parroquias` VALUES ('1172', '190', 'PONCEANO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1173', '190', 'PUELLARO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1174', '190', 'PUEMBO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1175', '190', 'PUENGASI', 'S');
INSERT INTO `tab_parroquias` VALUES ('1176', '190', 'PUERTO QUITO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1177', '190', 'QUITO DISTRITO METROPOLITANO- CABECERA CANTONAL- CAPITAL PROVINCIAL Y DE LA REPUBLICA DEL ECUADOR', 'S');
INSERT INTO `tab_parroquias` VALUES ('1178', '190', 'QUITUMBE', 'S');
INSERT INTO `tab_parroquias` VALUES ('1179', '190', 'RUMIPAMBA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1180', '190', 'SAN ANTONIO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1181', '190', 'SAN BARTOLO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1182', '190', 'SAN ISIDRO DEL INCA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1183', '190', 'SAN JOSE DE MINAS', 'S');
INSERT INTO `tab_parroquias` VALUES ('1184', '190', 'SAN MIGUEL DE LOS BANCOS', 'S');
INSERT INTO `tab_parroquias` VALUES ('1185', '190', 'SANJUAN', 'S');
INSERT INTO `tab_parroquias` VALUES ('1186', '190', 'SOLANDA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1187', '190', 'TABABELA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1188', '190', 'TUMBACO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1189', '190', 'TURUBAMBA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1190', '190', 'YARUQUI', 'S');
INSERT INTO `tab_parroquias` VALUES ('1191', '190', 'ZAMBIZA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1192', '191', 'COTOGCHOA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1193', '191', 'RUMIPAMBA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1194', '191', 'SAN PEDRO DE TABOADA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1195', '191', 'SAN RAFAEL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1196', '191', 'SANGOLQUI', 'S');
INSERT INTO `tab_parroquias` VALUES ('1197', '191', 'SANGOLQUI- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1198', '192', 'MINDO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1199', '192', 'PEDRO VICENTE MALDONADO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1200', '192', 'PUERTO QUITO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1201', '192', 'SAN MIGUEL DE LOS BANCOS - CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1202', '193', 'LA LIBERTAD- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1203', '194', 'ANCONCITO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1204', '194', 'CARLOS ESPINOZA LARREA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1205', '194', 'GRAL. ALBERTO ENRIQUEZ GALLO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1206', '194', 'JOSE LUIS TAMAYO (MUEY)', 'S');
INSERT INTO `tab_parroquias` VALUES ('1207', '194', 'SALINAS- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1208', '194', 'SANTA ROSA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1209', '194', 'VICENTE ROCAFUERTE', 'S');
INSERT INTO `tab_parroquias` VALUES ('1210', '195', 'ATAHUALPA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1211', '195', 'BALLENITA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1212', '195', 'CHANDUY', 'S');
INSERT INTO `tab_parroquias` VALUES ('1213', '195', 'COLONCHE', 'S');
INSERT INTO `tab_parroquias` VALUES ('1214', '195', 'MANGLARALTO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1215', '195', 'SAN JOSE DE ANCON', 'S');
INSERT INTO `tab_parroquias` VALUES ('1216', '195', 'SANTA ELENA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1217', '195', 'SANTA ELENA- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1218', '195', 'SIMON BOLIVAR (JULIO MORENO)', 'S');
INSERT INTO `tab_parroquias` VALUES ('1219', '196', 'ABRAHAM CALAZACON', 'S');
INSERT INTO `tab_parroquias` VALUES ('1220', '196', 'ALLURIQUIN', 'S');
INSERT INTO `tab_parroquias` VALUES ('1221', '196', 'BOMBOLI', 'S');
INSERT INTO `tab_parroquias` VALUES ('1222', '196', 'CHIGUILPE', 'S');
INSERT INTO `tab_parroquias` VALUES ('1223', '196', 'EL ESFUERZO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1224', '196', 'LUZ DE AMERICA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1225', '196', 'PUERTO LIMON', 'S');
INSERT INTO `tab_parroquias` VALUES ('1226', '196', 'RIO TOACHI', 'S');
INSERT INTO `tab_parroquias` VALUES ('1227', '196', 'RIO VERDE', 'S');
INSERT INTO `tab_parroquias` VALUES ('1228', '196', 'SAN JACINTO DEL BUA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1229', '196', 'SANTA MARIA DEL TOACHI', 'S');
INSERT INTO `tab_parroquias` VALUES ('1230', '196', 'SANTO DOMINGO DE LOS COLORADOS', 'S');
INSERT INTO `tab_parroquias` VALUES ('1231', '196', 'SANTO DOMINGO DE LOS COLORADOS- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1232', '196', 'VALLE HERMOSO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1233', '196', 'ZARACAY', 'S');
INSERT INTO `tab_parroquias` VALUES ('1234', '197', 'EL DORADO DE CASCALES- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1235', '197', 'SANTA ROSA DE SUCUMBIOS', 'S');
INSERT INTO `tab_parroquias` VALUES ('1236', '197', 'SEVILLA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1237', '198', 'AGUAS NEGRAS', 'S');
INSERT INTO `tab_parroquias` VALUES ('1238', '198', 'CUYABENO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1239', '198', 'TARAPOA - CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1240', '199', 'EL DORADO DE CASCALES- LUMBAQUI- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1241', '199', 'EL REVENTADOR', 'S');
INSERT INTO `tab_parroquias` VALUES ('1242', '199', 'GONZALO PIZARRO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1243', '199', 'LUMBAQUI', 'S');
INSERT INTO `tab_parroquias` VALUES ('1244', '199', 'PUERTO LIBRE', 'S');
INSERT INTO `tab_parroquias` VALUES ('1245', '199', 'SANTA ROSA DE SUCUMBIOS', 'S');
INSERT INTO `tab_parroquias` VALUES ('1246', '200', 'AGUAS NEGRAS', 'S');
INSERT INTO `tab_parroquias` VALUES ('1247', '200', 'CUYABENO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1248', '200', 'DURENO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1249', '200', 'EL ENO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1250', '200', 'GENERAL FARFAN', 'S');
INSERT INTO `tab_parroquias` VALUES ('1251', '200', 'JAMBELI', 'S');
INSERT INTO `tab_parroquias` VALUES ('1252', '200', 'NUEVA LOJA- CABECERA CANTONAL Y CAPITAL PROVINCIAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1253', '200', 'PACAYACU', 'S');
INSERT INTO `tab_parroquias` VALUES ('1254', '200', 'SANTA CECILIA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1255', '200', 'TARAPOA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1256', '201', 'PALMA ROJA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1257', '201', 'PUERTO BOLIVAR (PUERTO MONTUFAR)', 'S');
INSERT INTO `tab_parroquias` VALUES ('1258', '201', 'PUERTO EL CARMEN DEL PUTUMAYO- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1259', '201', 'PUERTO RODRIGUEZ', 'S');
INSERT INTO `tab_parroquias` VALUES ('1260', '201', 'SANTA ELENA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1261', '202', 'LIMONCOCHA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1262', '202', 'PAÑACOCHA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1263', '202', 'SAN PEDRO DE LOS COFANES', 'S');
INSERT INTO `tab_parroquias` VALUES ('1264', '202', 'SAN ROQUE (CAB. EN SAN VICENTE)', 'S');
INSERT INTO `tab_parroquias` VALUES ('1265', '202', 'SHUSHUFINDI- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1266', '202', 'SIETE DE JULIO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1267', '203', 'EL PLAYON DE SAN FRANCISCO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1268', '203', 'LA BONITA- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1269', '203', 'LA SOFIA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1270', '203', 'ROSA FLORIDA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1271', '203', 'SANTA BARBARA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1272', '204', 'AMBATILLO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1273', '204', 'AMBATO- CABECERA CANTONAL Y CAPITAL PROVINCIAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1274', '204', 'ATAHUALPA (CHISALATA)', 'S');
INSERT INTO `tab_parroquias` VALUES ('1275', '204', 'ATOCHA FICOA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1276', '204', 'AUGUSTO N. MARTINEZ (MUNDUGLEO)', 'S');
INSERT INTO `tab_parroquias` VALUES ('1277', '204', 'CELIANO MONGE', 'S');
INSERT INTO `tab_parroquias` VALUES ('1278', '204', 'CONSTANTINO FERNANDEZ (CAB. EN CULLITAHUA)', 'S');
INSERT INTO `tab_parroquias` VALUES ('1279', '204', 'CUNCHIBAMBA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1280', '204', 'HUACHI CHICO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1281', '204', 'HUACHI GRANDE', 'S');
INSERT INTO `tab_parroquias` VALUES ('1282', '204', 'HUACHI LORETO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1283', '204', 'IZAMBA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1284', '204', 'JUAN BENIGNO VELA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1285', '204', 'LA MERCED', 'S');
INSERT INTO `tab_parroquias` VALUES ('1286', '204', 'LA PENINSULA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1287', '204', 'MATRIZ', 'S');
INSERT INTO `tab_parroquias` VALUES ('1288', '204', 'MONTALVO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1289', '204', 'PASA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1290', '204', 'PICAIGUA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1291', '204', 'PILAGUIN (PILAGUIN)', 'S');
INSERT INTO `tab_parroquias` VALUES ('1292', '204', 'PISHILATA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1293', '204', 'QUISAPINCHA (QUIZAPINCHA)', 'S');
INSERT INTO `tab_parroquias` VALUES ('1294', '204', 'SAN BARTOLOME DE PINLLOG', 'S');
INSERT INTO `tab_parroquias` VALUES ('1295', '204', 'SAN FERNANDO (PASA SAN FERNANDO)', 'S');
INSERT INTO `tab_parroquias` VALUES ('1296', '204', 'SAN FRANCISCO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1297', '204', 'SANTA ROSA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1298', '204', 'TOTORAS', 'S');
INSERT INTO `tab_parroquias` VALUES ('1299', '204', 'UNAMUNCHO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1300', '205', 'BAÑOS DE AGUA SANTA- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1301', '205', 'LLIGUA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1302', '205', 'RIO NEGRO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1303', '205', 'RIO VERDE', 'S');
INSERT INTO `tab_parroquias` VALUES ('1304', '205', 'ULBA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1305', '206', 'CEVALLOS- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1306', '207', 'MOCHA- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1307', '207', 'PINGUILI', 'S');
INSERT INTO `tab_parroquias` VALUES ('1308', '208', 'EL TRIUNFO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1309', '208', 'LOS ANDES (CAB. EN POATUG)', 'S');
INSERT INTO `tab_parroquias` VALUES ('1310', '208', 'PATATE- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1311', '208', 'SUCRE (CAB. EN SUCRE-PATATE URCO)', 'S');
INSERT INTO `tab_parroquias` VALUES ('1312', '209', 'QUERO- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1313', '209', 'RUMIPAMBA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1314', '209', 'YANAYACU - MOCHAPATA (CAB. EN YANAYACU)', 'S');
INSERT INTO `tab_parroquias` VALUES ('1315', '210', 'BENITEZ (PACHANLICA)', 'S');
INSERT INTO `tab_parroquias` VALUES ('1316', '210', 'BOLIVAR', 'S');
INSERT INTO `tab_parroquias` VALUES ('1317', '210', 'CHIQUICHA (CAB. EN CHIQUICHA GRANDE)', 'S');
INSERT INTO `tab_parroquias` VALUES ('1318', '210', 'COTALO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1319', '210', 'EL ROSARIO (RUMICHACA)', 'S');
INSERT INTO `tab_parroquias` VALUES ('1320', '210', 'GARCIA MORENO (CHUMAQUI)', 'S');
INSERT INTO `tab_parroquias` VALUES ('1321', '210', 'GUAMBALO (HUAMBALO)', 'S');
INSERT INTO `tab_parroquias` VALUES ('1322', '210', 'PELILEO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1323', '210', 'PELILEO- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1324', '210', 'PELILEO GRANDE', 'S');
INSERT INTO `tab_parroquias` VALUES ('1325', '210', 'SALASACA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1326', '211', 'BAQUERIZO MORENO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1327', '211', 'CIUDAD NUEVA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1328', '211', 'EMILIO MARIA TERAN (RUMIPAMBA)', 'S');
INSERT INTO `tab_parroquias` VALUES ('1329', '211', 'MARCOS ESPINEL (CHACATA)', 'S');
INSERT INTO `tab_parroquias` VALUES ('1330', '211', 'PILLARO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1331', '211', 'PILLARO- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1332', '211', 'PRESIDENTE URBINA (CHAGRAPAMBA -PATZUCUL)', 'S');
INSERT INTO `tab_parroquias` VALUES ('1333', '211', 'SAN ANDRES', 'S');
INSERT INTO `tab_parroquias` VALUES ('1334', '211', 'SAN JOSE DE POALO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1335', '211', 'SAN MIGUELITO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1336', '212', 'QUINCHICOTO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1337', '212', 'TISALEO- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1338', '213', 'PAQUISHA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1339', '213', 'ZUMBI- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1340', '214', 'CHITO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1341', '214', 'EL CHORRO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1342', '214', 'EL PORVENIR DEL CARMEN', 'S');
INSERT INTO `tab_parroquias` VALUES ('1343', '214', 'LA CHONTA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1344', '214', 'PALANDA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1345', '214', 'PUCAPAMBA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1346', '214', 'SAN ANDRES', 'S');
INSERT INTO `tab_parroquias` VALUES ('1347', '214', 'SAN FRANCISCO DEL VERGEL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1348', '214', 'VALLADOLID', 'S');
INSERT INTO `tab_parroquias` VALUES ('1349', '214', 'ZUMBA- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1350', '215', 'EL GUISME', 'S');
INSERT INTO `tab_parroquias` VALUES ('1351', '215', 'EL PANGUI- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1352', '215', 'PACHICUTZA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1353', '215', 'TUNDAYME', 'S');
INSERT INTO `tab_parroquias` VALUES ('1354', '216', 'GUAYZIMI- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1355', '216', 'ZURMI', 'S');
INSERT INTO `tab_parroquias` VALUES ('1356', '217', 'EL PORVENIR DEL CARMEN', 'S');
INSERT INTO `tab_parroquias` VALUES ('1357', '217', 'LA CANELA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1358', '217', 'PALANDA- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1359', '217', 'SAN FRANCISCO DEL VERGEL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1360', '217', 'VALLADOLID', 'S');
INSERT INTO `tab_parroquias` VALUES ('1361', '218', 'BELLAVISTA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1362', '218', 'NUEVO QUITO', 'S');
INSERT INTO `tab_parroquias` VALUES ('1363', '218', 'PAQUISHA- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1364', '219', '28 DE MAYO (SAN JOSE DE YACUAMBI)- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1365', '219', 'LA PAZ', 'S');
INSERT INTO `tab_parroquias` VALUES ('1366', '219', 'TUTUPALI', 'S');
INSERT INTO `tab_parroquias` VALUES ('1367', '220', 'CHICAÑA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1368', '220', 'EL PANGUI', 'S');
INSERT INTO `tab_parroquias` VALUES ('1369', '220', 'LOS ENCUENTROS', 'S');
INSERT INTO `tab_parroquias` VALUES ('1370', '220', 'YANTZAZA (YANZATZA)- CABECERA CANTONAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1371', '221', 'CUMBARATZA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1372', '221', 'EL LIMON', 'S');
INSERT INTO `tab_parroquias` VALUES ('1373', '221', 'GUADALUPE', 'S');
INSERT INTO `tab_parroquias` VALUES ('1374', '221', 'IMBANA (LA VICTORIA DE IMBANA)', 'S');
INSERT INTO `tab_parroquias` VALUES ('1375', '221', 'PAQUISHA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1376', '221', 'SABANILLA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1377', '221', 'SAN CARLOS DE LAS MINAS', 'S');
INSERT INTO `tab_parroquias` VALUES ('1378', '221', 'TIMBARA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1379', '221', 'ZAMORA', 'S');
INSERT INTO `tab_parroquias` VALUES ('1380', '221', 'ZAMORA- CABECERA CANTONAL Y CAPITAL PROVINCIAL', 'S');
INSERT INTO `tab_parroquias` VALUES ('1381', '221', 'ZUMBI', 'S');
INSERT INTO `tab_parroquias` VALUES ('1382', '225', 'NEIVA', 'U');
INSERT INTO `tab_parroquias` VALUES ('1383', '229', 'PALMIRA', 'U');
INSERT INTO `tab_parroquias` VALUES ('1384', null, null, 'U');
INSERT INTO `tab_parroquias` VALUES ('1385', null, null, null);
INSERT INTO `tab_parroquias` VALUES ('1386', null, 'CARPUELA', 'U');

-- ----------------------------
-- Table structure for tab_personas
-- ----------------------------
DROP TABLE IF EXISTS `tab_personas`;
CREATE TABLE `tab_personas` (
  `ID_PERSONA` int(11) NOT NULL AUTO_INCREMENT,
  `PRIMER_NOMBRE` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `SEGUNDO_NOMBRE` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `APELLIDO_PATERNO` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `APELLIDO_MATERNO` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FOTOGRAFIA` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ID_NACIONALIDAD` int(11) DEFAULT NULL,
  `NRO_DOCUMENTO_MILITAR` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FECHA_NACIMIENTO` date DEFAULT NULL,
  `ID_PAIS_NACIMIENTO` int(11) DEFAULT NULL,
  `ID_PROVINCIA_NACIMIENTO` int(11) DEFAULT NULL,
  `ID_CANTON_NACIMIENTO` int(11) DEFAULT NULL,
  `ID_ESTADO_CIVIL` decimal(6,0) DEFAULT NULL,
  `TIPO_SANGRE` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `GENERO` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ID_GRUPO_CULTURAL` int(11) DEFAULT NULL,
  `ID_PROFESION` int(11) DEFAULT NULL,
  `OCUPACION` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PERSONA_LLAMAR_EMERGENCIA` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PARENTESCO_AFINIDAD` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DIRECCION_EMERGENCIA` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TELEFONO_EMERGENCIA` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CARNET_CONADIS` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TIPO_DISCAPACIDAD` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PORCENTAJE_DICAPACIDAD` int(11) DEFAULT NULL,
  `DESCRIPCION_DISCAPACIDAD` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CLAVE_PERSONAL` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TRATO_PERSONAL` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CELULAR_EMERGENCIA` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ES_BECADO` tinyint(1) NOT NULL DEFAULT '0',
  `ID_TIPO_BECA` int(11) DEFAULT NULL,
  `TIENE_RUC` tinyint(1) DEFAULT '0',
  `NUMERO_RUC` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NOMBRE_COMERCIAL` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ES_DISCAPACITADO` tinyint(1) DEFAULT '0',
  `EST_COLEGIO_GRADUACION` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `EST_ANO_GRADUACION` int(11) DEFAULT NULL,
  `EST_PAIS_GRADUACION` int(11) DEFAULT NULL,
  `EST_TITULO_BACHILLER` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DOC_TITULO_PROF` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DOC_INSTITUCION` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DOC_REGISTRO_SENESCYT` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DOC_NIVEL_ALCANZADO` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `USUARIO` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CONTRASENA` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ESTADO` bit(1) DEFAULT b'1',
  `FUE_INSCRITA` bit(1) NOT NULL DEFAULT b'1',
  `NIVEL` int(11) DEFAULT '0',
  `ID_GRUPO` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_PERSONA`),
  KEY `ID_NACIONALIDAD` (`ID_NACIONALIDAD`),
  KEY `ID_PAIS_NACIMIENTO` (`ID_PAIS_NACIMIENTO`),
  KEY `ID_PROVINCIA_NACIMIENTO` (`ID_PROVINCIA_NACIMIENTO`),
  KEY `ID_CANTON_NACIMIENTO` (`ID_CANTON_NACIMIENTO`),
  KEY `ID_ESTADO_CIVIL` (`ID_ESTADO_CIVIL`),
  KEY `ID_TIPO_BECA` (`ID_TIPO_BECA`),
  KEY `ID_PROFESION` (`ID_PROFESION`),
  KEY `ID_GRUPO_CULTURAL` (`ID_GRUPO_CULTURAL`),
  CONSTRAINT `tab_personas_ibfk_1` FOREIGN KEY (`ID_NACIONALIDAD`) REFERENCES `tab_nacionalidades` (`ID_NACIONALIDAD`) ON UPDATE NO ACTION,
  CONSTRAINT `tab_personas_ibfk_12` FOREIGN KEY (`ID_TIPO_BECA`) REFERENCES `tab_tipos_becas` (`ID_TIPO_BECA`) ON UPDATE NO ACTION,
  CONSTRAINT `tab_personas_ibfk_13` FOREIGN KEY (`ID_PROFESION`) REFERENCES `tab_profesiones` (`ID_PROFESION`) ON UPDATE NO ACTION,
  CONSTRAINT `tab_personas_ibfk_14` FOREIGN KEY (`ID_GRUPO_CULTURAL`) REFERENCES `tab_grupos_culturales` (`ID_GRUPO_CULTURAL`) ON UPDATE NO ACTION,
  CONSTRAINT `tab_personas_ibfk_2` FOREIGN KEY (`ID_PAIS_NACIMIENTO`) REFERENCES `tab_paises` (`ID_PAIS`) ON UPDATE NO ACTION,
  CONSTRAINT `tab_personas_ibfk_3` FOREIGN KEY (`ID_PROVINCIA_NACIMIENTO`) REFERENCES `tab_provincias` (`ID_PROVINCIA`) ON UPDATE NO ACTION,
  CONSTRAINT `tab_personas_ibfk_5` FOREIGN KEY (`ID_CANTON_NACIMIENTO`) REFERENCES `tab_cantones` (`ID_CANTON`) ON UPDATE NO ACTION,
  CONSTRAINT `tab_personas_ibfk_6` FOREIGN KEY (`ID_ESTADO_CIVIL`) REFERENCES `tab_estados_civiles` (`ID_ESTADO_CIVIL`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=131 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tab_personas
-- ----------------------------
INSERT INTO `tab_personas` VALUES ('4', 'Joselin', 'Mishelle', 'Erazo', 'Bastidas', null, '18', null, '1996-10-20', '1', '19', null, '1', 'O+', 'F', '1', null, '1', 'NORMA BASTIDAS', 'PADRE/MADRE', null, null, null, null, null, null, null, null, '09-7904-4529', '0', null, '0', null, null, '0', 'JUAN MONTALVO', '2014', '1', 'CIENCIAS', null, null, null, null, 'jerazo', 'LENDAN001', '', '', '1', '25');
INSERT INTO `tab_personas` VALUES ('5', 'AIDA', 'CAROLINA', 'ORTIZ', 'MENDEZ', null, '18', null, '1992-05-10', '1', '19', null, '2', 'O+', 'F', '1', null, '1', 'LUIS CAJAS', 'ESPOSO(A)', null, null, null, null, null, null, null, null, '09-7902-1100', '0', null, '0', null, null, '0', 'BENITO JUAREZ', '2015', '1', 'GENERAL UNIFICADO', null, null, null, null, 'aortiz', 'LENDAN002', '', '', '1', '61');
INSERT INTO `tab_personas` VALUES ('6', 'KAROL', 'CRISTINA', 'VALLEJO', 'TERAN', null, '18', null, '1995-02-06', '1', '19', null, '2', 'A+', 'F', '1', null, '1', 'BRYAN BERMUDES', 'ESPOSO(A)', null, null, null, null, null, null, null, null, '09-9545-2524', '0', null, '0', null, null, '0', 'ABDON CALDERON', '2013', '1', 'QUIMICO BIOLOGICO', null, null, null, null, 'kvallejo', 'LENDAN003', '', '', '1', '61');
INSERT INTO `tab_personas` VALUES ('7', 'KELLY', 'THALIA', 'MUENALA', 'TONTAQUIMBA', null, '18', null, '1997-05-22', '1', '19', null, '1', 'O+', 'F', '1', null, '1', 'HENRY MUENAGA', 'PADRE/MADRE', null, null, null, null, null, null, null, null, '09-9476-6424', '0', null, '0', null, null, '0', 'SANTA JUANA DE CHANTAN', '2015', '1', 'GENERAL UNIFICADO', null, null, null, null, 'kmuenaga', 'LENDAN003', '', '', '1', '61');
INSERT INTO `tab_personas` VALUES ('8', 'DIANA', 'MARIBEL', 'VALENCIA', 'COFRE', null, '18', null, '1997-08-11', '1', '6', null, '1', 'O+', 'F', '1', null, '1', 'MARIA COFRE', 'PADRE/MADRE', null, null, null, null, null, null, null, null, '09-9464-3817', '0', null, '0', null, null, '0', 'VICTORIA BASCONES CUVI', '2015', '1', 'GENERAL UNIFICADO', null, null, null, null, 'dvalencia', 'LENDAN004', '', '', '1', '61');
INSERT INTO `tab_personas` VALUES ('9', 'PAOLA', 'FERNANDA', 'TORRES', 'GRANDA', null, '18', null, '1984-06-26', '1', '19', null, '2', 'O+', 'F', '1', null, '1', 'GORKY PALTA', 'ESPOSO(A)', null, null, null, null, null, null, null, null, '09-5899-5917', '0', null, '0', null, null, '0', 'ISPANOAMERICANO', '2002', '1', 'CONTABILIDAD', null, null, null, null, 'ptorres', 'LENDAN005', '', '', '1', '73');
INSERT INTO `tab_personas` VALUES ('10', 'XIMENA', 'SOLEDAD', 'TORRES', 'GRANDA', null, '18', null, '1981-01-17', '1', '19', null, '3', 'O+', 'F', '1', null, '1', 'CARLOS DIAZ', 'ESPOSO(A)', null, null, null, null, null, null, null, null, '09-9784-6925', '0', null, '0', null, null, '0', 'ISPANOAMERICANO', '1999', '1', 'AUXILIAR EN ADMINISTRACION DE EMPRESAS', null, null, null, null, 'xtorres', 'LENDAN006', '', '', '1', '73');
INSERT INTO `tab_personas` VALUES ('11', 'MARIANA', 'TERESA', 'CHACON', 'VINUEZA', null, '18', null, '1983-12-03', '1', '19', null, '1', 'A+', 'F', '1', null, '1', 'JHOANA CARRION', 'TÍO(A)', null, '02-306-0907', null, null, null, null, null, null, null, '0', null, '0', null, null, '0', 'EMILIO UZCATEGUI', '2002', '1', 'CIENCIAS SOCIALES', null, null, null, null, 'mchacon', 'LENDAN007', '', '', '1', '61');
INSERT INTO `tab_personas` VALUES ('12', 'ERIKA', 'FERNANDA', 'ROJAS', 'CHERREZ', null, '18', null, '1990-05-17', '1', '19', null, '2', 'B+', 'F', '1', null, '1', 'DAVID CAIZA', 'ESPOSO(A)', null, null, null, null, null, null, null, null, '09-8793-2784', '0', null, '0', null, null, '0', 'JUAN PABLO SEGUNDO', '2013', '1', 'CIENCIAS SOCIALES', null, null, null, null, 'erojas', 'LENDAN008', '', '', '1', '13');
INSERT INTO `tab_personas` VALUES ('13', 'MARIA', 'DANIELA', 'COELLO', 'CUEVA', null, '18', null, '1990-04-24', '1', '1', null, '2', 'O+', 'F', '1', null, '1', 'SEBASTIAN COELLO', 'ESPOSO(A)', null, null, null, null, null, null, null, null, '09-9870-0923', '0', null, '0', null, null, '0', 'ASUNCION', '2008', '1', 'CIENCIAS SOCIALES', null, null, null, null, 'mcoello', 'LENDAN009', '', '', '1', '61');
INSERT INTO `tab_personas` VALUES ('14', 'NICOLE', 'CAROLINA', 'MALDONADO', 'NOVILLO', null, '18', null, '1996-11-29', '1', '19', null, '1', 'O+', 'F', '1', null, '1', 'HECTOR MALDONADO', 'PADRE/MADRE', null, null, null, null, null, null, null, null, '09-9714-6636', '0', null, '0', null, null, '0', 'CHARLES DARWIN', '2015', '1', 'GENERAL UNIFICADO', null, null, null, null, 'nmaldonado', 'LENDAN010', '', '', '1', '61');
INSERT INTO `tab_personas` VALUES ('15', 'JOSELINE', 'ALEJANDRA', 'RODRIGUEZ', 'MEJIA', null, '18', null, '1995-06-08', '1', '5', null, '1', 'O+', 'F', '1', null, '1', 'XIMENA MEJIA', 'PADRE/MADRE', null, null, null, null, null, null, null, null, '09-8844-2304', '0', null, '0', null, null, '0', 'SANTA MARIANA DE JESUS', '2012', '1', 'QUIMICO BIOLOGICO', null, null, null, null, 'jrodriguez', 'LENDAN012', '', '', '1', '43');
INSERT INTO `tab_personas` VALUES ('16', 'SYLVIA', 'VERONICA', 'CISNEROS', 'CISNEROS', null, '18', null, '1998-08-17', '1', '19', null, '2', 'A+', 'F', '1', null, '1', 'LOURDES CISNEROS', 'PADRE/MADRE', null, null, null, null, null, null, null, null, '09-9779-0232', '0', null, '0', null, null, '0', 'MANUELA CAÑIZARES', '1998', '1', 'FISICO MATEMATICO', null, null, null, null, 'scisneros', 'LENDAN013', '', '', '1', '43');
INSERT INTO `tab_personas` VALUES ('17', 'CAROLINA', 'ELIZABETH', 'JARAMILLO', 'MEDRANDA', null, '18', null, '1997-02-19', '1', '6', null, '1', 'O+', 'F', '1', null, '1', 'MARGARITA MEDRANDA', 'PADRE/MADRE', null, null, null, null, '25', 'DEFICIT DE ATENCIÓN ', null, null, '09-8184-8481', '0', null, '0', null, null, '1', 'LEONARDO PONCE POZO', '2015', '1', 'GENERAL UNIFICADO', null, null, null, null, 'cjaramillo', 'LENDAN014', '', '', '1', '7');
INSERT INTO `tab_personas` VALUES ('18', 'GEOVANNA', 'JASMIN', 'PINTO', 'ZAPATA', null, '18', null, '1996-10-26', '1', '19', null, '1', 'O+', 'F', '1', null, '1', 'LILIANA ZAPATA', 'PADRE/MADRE', null, null, null, null, null, null, null, null, '09-8722-0509', '0', null, '0', null, null, '0', 'MARIA AUXILIADORA', '2014', '1', 'GENERAL UNIFICADO', null, null, null, null, 'gpinto', 'LENDAN014', '', '', '1', '7');
INSERT INTO `tab_personas` VALUES ('19', 'OLGA', 'KATHERINE', 'CARRASCO', 'ORTIZ', null, '18', null, '1992-02-27', '1', '1', null, '1', 'O+', 'F', '1', null, '1', 'LORENA CARRASCO', 'HERMANO(A)', null, null, null, null, null, null, null, null, '09-9998-9540', '0', null, '0', null, null, '0', 'HERLINDA TORAL', '2009', '1', 'QUIMICO BIOLOGICO', null, null, null, null, 'ocarrasco', 'LENDAN015', '', '', '1', '43');
INSERT INTO `tab_personas` VALUES ('20', 'FERNANDA', 'CAROLINA', 'AMOROSO ', 'ESPINOZA', null, '18', null, '1991-01-23', '1', '1', null, '1', 'A-', 'F', '1', null, '1', 'MARTHA AMOROSO', 'TÍO(A)', null, null, null, null, null, null, null, null, '09-9784-8945', '0', null, '0', null, null, '0', 'CATALINAS', '2008', '1', 'GENERAL UNIFICADO', null, null, null, null, 'fmoroso ', 'LENDAN016', '', '', '1', '43');
INSERT INTO `tab_personas` VALUES ('21', 'SANDRA', 'SOFIA', 'LOAIZA', 'AGUILAR', null, '18', null, '1996-10-15', '1', '12', null, '1', 'O+', 'F', '1', null, '1', 'MARIA LOAIZA', 'HERMANO(A)', null, null, null, null, null, null, null, null, '09-9500-6873', '0', null, '0', null, null, '0', 'CORDILLERA', '2014', '1', 'GENERAL UNIFICADO', null, null, null, null, 'sloaiza', 'LENDAN018', '', '', '1', '43');
INSERT INTO `tab_personas` VALUES ('22', 'IRIS', 'PAMELA', 'MIELES', 'ESPAÑA', null, '18', null, '1993-08-03', '1', '14', null, '3', 'A+', 'F', '1', null, '1', 'FRANKLIN GUERRA', 'ESPOSO(A)', null, null, null, null, null, null, null, null, '09-9693-1648', '0', null, '0', null, null, '0', '7 DE NOVIEMBRE', '2010', '1', 'INFORMATICA', null, null, null, null, 'imieles', 'LENDAN019', '', '', '1', '7');
INSERT INTO `tab_personas` VALUES ('23', 'PRISCILA', 'BELEN', 'CEVALLOS', 'CRIOLLO', null, '18', null, '1997-09-05', '1', '19', null, '1', 'O+', 'F', '1', null, '1', 'VERONICA CEVALLOS', 'HERMANO(A)', null, null, null, null, null, null, null, null, '09-8402-0307', '0', null, '0', null, null, '0', 'JUAN DE SALINAS', '2015', '1', 'GENERAL UNIFICADO', null, null, null, null, 'pcevallos', 'LENDAN020', '', '', '1', '43');
INSERT INTO `tab_personas` VALUES ('24', 'ANDREA', 'NICOLE', 'TORO', 'AVILA', null, '18', null, '1993-07-25', '1', '19', null, '1', 'O+', 'F', '1', null, '1', 'ANDREA AVILA', 'PADRE/MADRE', null, null, null, null, null, null, null, null, '09-8730-6377', '0', null, '0', null, null, '0', 'ATENAS SCHOOL', '2012', '1', 'GENERAL UNIFICADO', null, null, null, null, 'atoro', 'LENDAN021', '', '', '1', '43');
INSERT INTO `tab_personas` VALUES ('25', 'ALEXANDRA', 'ELIZABETH', 'ANDRADE', 'VALLEJO', null, '18', null, '1984-08-14', '1', '19', null, '2', 'O+', 'F', '1', null, '1', 'DAVID RODRIGUEZ', 'ESPOSO(A)', 'PADRE: VICTOR ANDRADE /  0999464923', null, null, null, null, null, null, null, '09-8403-0143', '0', null, '0', null, null, '0', 'PEDRO ZAMBRANO ISAGUIRRE', '2010', '1', 'CONTABILIDAD', null, null, null, null, 'aandrade', 'LENDAN022', '', '', '1', '43');
INSERT INTO `tab_personas` VALUES ('26', 'ADRIANA', 'SALOME', 'CARRION', 'CABRERA', null, '18', null, '1998-06-06', '1', '12', null, '1', 'O+', 'F', '1', null, '1', 'ELENA CARRION', 'HERMANO(A)', null, null, null, null, null, null, null, null, '09-8647-1438', '0', null, '0', null, null, '0', 'MARIA AUXILIADORA', '2016', '1', 'GENERAL UNIFICADO', null, null, null, null, 'acarrion', 'LENDAN023', '', '', '1', '43');
INSERT INTO `tab_personas` VALUES ('27', 'ELIZABETH', 'VANESSA', 'MONTALVAN', 'NARVAEZ', null, '18', null, '1985-08-05', '1', '19', null, '1', 'O+', 'F', '1', null, '1', 'CARMEN NARVAEZ', 'PADRE/MADRE', null, null, null, null, null, null, null, null, '09-7915-4902', '0', null, '0', null, null, '0', 'DAVID AUSULBEL', '2003', '1', 'QUIMICO BIOLOGICO', null, null, null, null, 'emontalvan', 'LENDAN024', '', '', '1', '43');
INSERT INTO `tab_personas` VALUES ('28', 'LISBETH', 'CAROLINA', 'CEDEÑO', 'RIVADENEIRA', null, '18', null, '1992-02-11', '1', '14', null, '1', 'B+', 'F', '1', null, '1', 'MARCOS ANDRADE', 'ESPOSO(A)', null, null, null, null, null, null, null, null, '09-8543-2082', '0', null, '0', null, null, '0', 'MANTA', '2009', '1', 'CIENCIAS SOCIALES', null, null, null, null, 'lcedeÑo', 'LENDAN0023', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('29', 'CATALINA', 'ELIZABETH', 'BENAVIDES', 'CHAMORRO', null, '18', null, '1991-06-09', '1', '19', null, '1', 'O+', 'F', '1', null, '1', 'TERESA BILAÑA', 'TÍO(A)', null, null, null, null, null, null, null, null, '09-9506-1695', '0', null, '0', null, null, '0', 'INTERNACIONAL', '2015', '1', 'GENERAL UNIFICADO', null, null, null, null, 'cbenavides', 'LENDAN023', '', '', '1', '7');
INSERT INTO `tab_personas` VALUES ('30', 'LISSET', 'YUSDARY', 'LAZ', 'YAGUANA', null, '18', null, '1987-11-06', '1', '13', null, '2', 'O+', 'F', '1', null, '1', 'FLOR YAGUANA', 'PADRE/MADRE', null, null, null, null, null, null, null, null, '09-9324-6869', '0', null, '0', null, null, '0', 'CARLOS CUEVA TAMARÍZ', '2005', '1', 'CIENCIAS SOCIALES', null, null, null, null, 'llaz', 'LENDAN024', '', '', '1', '7');
INSERT INTO `tab_personas` VALUES ('31', 'PAMELA', 'FERNANDA', 'JARRIN', 'POMBOZA', null, '18', null, '1989-11-17', '1', '19', null, '1', 'B+', 'F', '1', null, '1', 'ALICIA POMBOZA', 'PADRE/MADRE', null, null, null, null, null, null, null, null, '09-8706-8981', '0', null, '0', null, null, '0', 'MARTIN CERERE', '2008', '1', 'CIENCIAS BASICAS BILINGUE', null, null, null, null, 'pjarrin', 'LENDAN025', '', '', '1', '43');
INSERT INTO `tab_personas` VALUES ('32', 'ALEJANDRA', 'ESTEFANIA', 'FREIRE', 'ALCIVAR', null, '18', null, '1996-02-25', '1', '14', null, '1', 'O+', 'F', '1', null, '1', 'MAGALI ALCIVAR', 'PADRE/MADRE', null, null, null, null, null, null, null, null, '09-8125-3295', '0', null, '0', null, null, '0', 'ANDRES BELLO', '2014', '1', 'GENERAL UNIFICADO', null, null, null, null, 'afreire', 'LENDAN026', '', '', '1', '43');
INSERT INTO `tab_personas` VALUES ('33', 'MICHELLE', null, 'HERNANDEZ', 'ROSALES', null, '18', null, '1981-05-22', '1', '10', null, '2', 'A+', 'F', '1', null, '1', 'ANA MARIA ROSALES', 'PADRE/MADRE', null, null, null, null, null, null, null, null, '09-9500-7615', '0', null, '0', null, null, '0', 'NACIONAL ELOY ALFARO', '2001', '1', 'QUIMICO BIOLOGICO', null, null, null, null, 'mhernandez', 'LENDAN027', '', '', '1', '43');
INSERT INTO `tab_personas` VALUES ('34', 'ROMMY', 'YOLANDA', 'MANOSALVAS', 'MORA', null, '18', null, '1978-07-24', '1', '19', null, '2', 'B+', 'F', '1', null, '1', 'YOLANDA MORA', 'PADRE/MADRE', null, null, null, null, null, null, null, null, '09-9330-5654', '0', null, '0', null, null, '0', 'ESCOSES INTERNACIONAL', '1996', '1', 'QUIMICO BIOLOGICO', null, null, null, null, 'rommym', 'rommym1978-07-24', '', '', '1', '43');
INSERT INTO `tab_personas` VALUES ('35', 'GLORIANA', 'JOSE', 'MILLAN', 'GUARIGUATA', null, '18', null, '1986-08-31', '8', null, null, '1', 'A+', 'F', '1', null, '1', 'SANTIAGO ANCHALA', 'PAREJA', null, '02-264-3314', null, null, null, null, null, null, null, '0', null, '0', null, null, '0', 'JUAN DE URPIN', '2004', '8', 'CIENCIAS    ', null, null, null, null, 'gmillan', 'LENDAN030', '', '', '1', '61');
INSERT INTO `tab_personas` VALUES ('36', 'MARIO', 'FERNANDO', 'BRUSCHI', null, null, '18', null, '1991-10-21', '3', '25', null, '1', 'O+', 'M', '1', null, '1', 'MARIA LUISA BRUSCHY', 'PADRE/MADRE', null, null, null, null, null, null, null, null, '09-8422-1519', '0', null, '0', null, null, '0', 'SAN FRACISCO DE ASIS', '2009', '3', 'BACHILLER ACADEMICO', null, null, null, null, 'mbruschi', 'LENDAN031', '', '', '1', '61');
INSERT INTO `tab_personas` VALUES ('37', 'IVONNE', 'PATRICIA', 'SALINAS ', 'SALINAS', null, '18', null, '1966-06-21', '1', '19', null, '2', 'O+', 'F', '1', null, '1', 'PAUL ANDINO', 'SIBRINO(A)', null, null, null, null, null, null, null, null, '09-8454-2549', '0', null, '0', null, null, '0', 'CARDENAL DE LA TORRE', '1984', '1', 'QUIMICO BIOLOGICO', null, null, null, null, 'isalinas ', 'LENDAN032', '', '', '1', '43');
INSERT INTO `tab_personas` VALUES ('38', 'MAYRA', 'IVONNE', 'NARVAEZ', 'FIERRO', null, '18', null, '1987-07-26', '1', '19', null, '2', 'O+', 'F', '1', null, '1', 'MARCIA URQUIZO', 'PADRE/MADRE', null, '02-257-1733', null, null, null, null, null, null, null, '0', null, '0', null, null, '0', 'ESPEJO', '2005', '1', 'FISICO MATEMATICO', null, null, null, null, 'mnarvaez', 'LENDAN033', '', '', '1', '43');
INSERT INTO `tab_personas` VALUES ('39', 'LADY', 'TATIANA', 'CESEN', 'CASTILLO', null, '18', null, '1981-09-24', '1', '15', null, '5', 'O+', 'F', '1', null, '1', 'ANIBAL CESEN', 'PADRE/MADRE', null, '07-304-5792', null, null, null, null, null, null, null, '0', null, '0', null, null, '0', 'DON BOSCO', '2001', '1', 'CONTABILIDAD', null, null, null, null, 'lcesen', 'LENDAN034', '', '', '1', '7');
INSERT INTO `tab_personas` VALUES ('40', 'ELENA', 'SOLEDAD', 'IRAZABAL', 'ALARCON', null, '18', null, '1981-07-24', '1', '11', null, '5', 'O+', 'F', '1', null, '1', 'CARLOS IRAZABAL', 'PADRE/MADRE', null, '02-285-5420', null, null, null, null, null, null, null, '0', null, '0', null, null, '0', 'FRANK SXUBERTH', '2000', '1', 'CONTABILIDAD', null, null, null, null, 'eirazabal', 'LENDAN035', '', '', '1', '7');
INSERT INTO `tab_personas` VALUES ('41', 'TATYANA', 'LIZETH', 'ALMEIDA', 'EGAS', null, '18', null, '1989-09-22', '1', '4', null, '1', 'A+', 'F', '1', null, '1', 'PATRICIA EGAS', 'PADRE/MADRE', null, '02-242-8423', null, null, null, null, null, null, null, '0', null, '0', null, null, '0', 'MANUELA CAÑIZARES', '2007', '1', 'QUIMICO BIOLOGICO', null, null, null, null, 'talmeida', 'LENDAN036', '', '', '1', '19');
INSERT INTO `tab_personas` VALUES ('42', 'LURDES', 'VIVIANA', 'CULQUI', 'CHACON', null, '18', null, '1971-07-23', '1', '19', null, '2', 'O+', 'F', '1', null, '1', 'ISRAEL ESPINOSA', 'SIBRINO(A)', null, '02-232-3044', null, null, null, null, null, null, null, '0', null, '0', null, null, '0', 'ESPEJO', '2010', '1', 'CONTABILIDAD', null, null, null, null, 'lculqui', 'LENDAN037', '', '', '1', '7');
INSERT INTO `tab_personas` VALUES ('43', 'ROSA', 'ANNABEL', 'BERMELLO', 'TUAREZ', null, '18', null, '1991-05-03', '1', '14', null, '1', 'O+', 'F', '1', null, '1', 'YADIRA ARMAS', 'HERMANO(A)', null, null, null, null, null, null, null, null, '09-9250-3003', '0', null, '0', null, null, '0', 'JOKAY DE MANTA', '2010', '1', 'CONTABILIDAD', null, null, null, null, 'rbermello', 'LENDAN037', '', '', '1', '7');
INSERT INTO `tab_personas` VALUES ('44', 'WILMA', 'YHADIRA', 'ARMAS ', 'MORALES', null, '18', null, '1976-02-28', '1', '11', null, '5', 'A+', 'F', '1', null, '1', 'MANOLO FERNANDEZ', 'PAREJA', null, null, null, null, null, null, null, null, '09-8334-0806', '0', null, '0', null, null, '0', 'SEÑORITAS IBARRA', '1994', '1', 'SECRETARIADO', null, null, null, null, 'wilmaa', 'wilmaa1976-02-28', '', '', '1', '7');
INSERT INTO `tab_personas` VALUES ('45', 'CRISTINA', 'VERONICA', 'PILA', 'RUIZ', null, '18', null, '1984-06-01', '1', '19', null, '2', 'O+', 'F', '1', null, '1', 'CESAR GALLO', 'ESPOSO(A)', null, null, null, null, null, null, null, null, '09-9808-5073', '0', null, '0', null, null, '0', '5 DE JUNIO', '2007', '1', 'CONTABILIDAD', null, null, null, null, 'cpila', 'LENDAN038', '', '', '1', '73');
INSERT INTO `tab_personas` VALUES ('46', 'YULITZA', 'RASHEL', 'RIVADENEIRA', 'VILLAVICENCIO', null, '18', null, '1997-05-27', '1', '17', null, '1', 'O+', 'F', '1', null, '1', 'ISABEL QUIÑONEZ', 'HERMANO(A)', null, null, null, null, null, null, null, null, '09-9512-4847', '0', null, '0', null, null, '0', 'NACIONAL AMAZONAS', '2015', '1', 'SECRETARIADO', null, null, null, null, 'yrivadeneira', 'LENDAN039', '', '', '1', '19');
INSERT INTO `tab_personas` VALUES ('47', 'JOHANNA', 'VANESZA', 'TOLEDO', 'MOGROVEJO', null, '18', null, '1994-07-03', '1', '19', null, '1', 'O+', 'F', '1', null, '1', 'ELSA MOGROVEJO', 'PADRE/MADRE', null, null, null, null, null, 'ALTERACION NERVIOSA', null, null, '09-8354-0041', '0', null, '0', null, null, '1', 'BRASIL', '2013', '1', 'CONTABILIDAD', null, null, null, null, 'jtoledo', 'LENDAN040', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('48', 'BYRON', 'DANIEL', 'JURADO', 'GUAMAN', null, '18', null, '1996-06-09', '1', '19', null, '1', 'O+', 'M', '1', null, '1', 'CLARA GUAMAN', 'PADRE/MADRE', null, null, null, null, null, null, null, null, '09-8876-1867', '0', null, '0', null, null, '0', 'TECNICO DON BOSCO', '2014', '1', 'MECANICA INDUSTRIAL', null, null, null, null, 'bjurado', 'LENDAN040', '', '', '1', '61');
INSERT INTO `tab_personas` VALUES ('49', 'CARMEN', 'ELIZABETH', 'GRANJA', 'ALQUINGA', null, '18', null, '1989-09-11', '1', '19', null, '3', 'B+', 'F', '1', null, '1', 'JESE PARKER', 'ESPOSO(A)', null, null, null, null, null, null, null, null, '09-8704-4920', '0', null, '0', null, null, '0', 'JHON F KENEDY', '2009', '1', 'CONTABILIDAD', null, null, null, null, 'cgranja', 'LENDAN041', '', '', '1', '73');
INSERT INTO `tab_personas` VALUES ('50', 'MARIA', 'GABRIELA', 'MARTINEZ', 'VALLEJO', null, '18', null, '1980-09-26', '1', '19', null, '2', 'O+', 'F', '1', null, '1', 'PATRICIO ENDARA', 'ESPOSO(A)', null, null, null, null, null, null, null, null, '09-8971-0853', '0', null, '0', null, null, '0', 'RUDOLF HESTEINER', '1999', '1', 'CIENCIAS SOCIALES', null, null, null, null, 'mmartinez', 'LENDAN042', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('51', 'MAYRA', null, 'PEÑA ', 'RICARDO', null, '18', null, '1968-09-08', '10', null, null, '1', null, 'F', null, null, '2', null, null, null, null, null, null, null, null, null, null, null, '0', null, '0', null, null, '0', null, null, null, null, 'LIC. EN INGLÉS', 'INST.SUP.PEDAGÓGICO JOSÉ DE LA LUZ CABALLERO', 'CU-14-7513', 'SUPERIOR', 'mpeÑa ', 'LENDANLENDAN', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('52', 'MARÍA', 'LILIANA', 'URQUIZO', 'ALBÁN', null, '18', null, '1984-06-12', '1', '19', null, '1', null, 'F', null, null, '2', null, null, null, null, null, null, null, null, null, null, null, '0', null, '0', null, null, '0', null, null, null, null, 'TECNICO SUPERIOR EN ESTÉTICA INTEGRAL', 'INSTITUTO TECNOLOGICO SUPERIOR LENDAN', '2179-06-71218', 'TÉCNICO', 'murquizo', 'LENDANLENDAN', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('53', 'MAIKEL', null, 'CALZADILLA ', 'AVILA', null, '18', null, '1984-01-09', '10', null, null, '1', null, 'M', null, null, '2', null, null, null, null, null, null, null, null, null, null, null, '0', null, '0', null, null, '0', null, null, null, null, 'LCDO. EN EDUCACIÓN INFORMATICA', 'INST.SUP.PEDAGÓGICO JOSÉ DE LA LUZ CABALLERO', 'CU-13-3771', 'SUPERIOR', 'mkalzadilla ', 'lendanlendan', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('54', 'ARACELY', 'VERONICA ', 'ZAMBRANO ', 'ZAMBRANO', null, '18', null, '1982-08-30', '1', '19', null, '1', null, 'F', null, null, '2', null, null, null, null, null, null, null, null, null, null, null, '0', null, '0', null, null, '0', null, null, null, null, 'TECNICO SUPERIOR EN ESTÉTICA INTEGRAL', 'INSTITUTO TECNOLOGICO SUPERIOR LENDAN', '2179-14-165206', 'TÉCNICO', 'azambrano ', 'lendanlendan', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('55', 'ADRIAN', 'JAVIER ', 'MENDOZA ', 'PALMA', null, '18', null, '1990-03-23', '1', '19', null, '1', null, 'M', null, null, '2', null, null, null, null, null, null, null, null, null, null, null, '0', null, '0', null, null, '0', null, null, null, null, 'TECNICO SUPERIOR EN PELUQUERIA', 'INSTITUTO TECNOLOGICO SUPERIOR LENDAN', 'SIN DATO', 'TÉCNICO', 'amendoza ', 'LENDANLENDAN', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('56', 'ALEXANDRA', 'DEL ROSARIO', 'SOSA ', 'QUEZADA', null, '18', null, '1969-05-07', '1', '19', null, '1', null, 'F', null, null, '2', null, null, null, null, null, null, null, null, null, null, null, '0', null, '0', null, null, '0', null, null, null, null, 'QUIMICA FARMACEUTICA/BIOQUIMICA CLÍNICA', 'UNIVERSIDAD CENTRAL DEL ECUADOR', '1005-05-568275', 'SUPERIOR', 'asosa ', 'LENDANLENDAN', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('57', 'NANCY', 'CECILIA', 'NÚÑEZ ', 'NÚÑEZ ', null, '18', null, '1966-10-30', '1', '19', null, '1', null, 'F', null, null, '2', null, null, null, null, null, null, null, null, null, null, null, '0', null, '0', null, null, '0', null, null, null, null, 'TECNOLOGIA EN ASESORIA DE IMAGEN MENCION ESTETICA ', 'INSTITUTO TECNOLOGICO SUPERIOR LENDAN', '2179-06-71208', 'TECNOLOGIA', 'nnUÑez ', 'LENDANLENDAN', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('58', 'DAMARIS', 'DEL CARMEN', 'RUALES ', 'ENRIQUEZ', null, '18', null, '1985-05-27', '1', '19', null, '1', null, 'M', null, null, '2', null, null, null, null, null, null, null, null, null, null, null, '0', null, '0', null, null, '0', null, null, null, null, 'TECNOLOGIA EN ASESORIA DE IMAGEN MENCION ESTILISMO', 'INSTITUTO TECNOLOGICO SUPERIOR LENDAN', '2179-11-134496', 'TECNOLOGIA', 'druales ', 'LENDANLENDAN', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('59', 'ANA', 'CATALINA ', 'ESPINOSA ', 'CUESTA', null, '18', null, '1966-12-09', '1', '19', null, '1', null, 'F', null, null, '2', null, null, null, null, null, null, null, null, null, null, null, '0', null, '0', null, null, '0', null, null, null, null, 'TECNOLOGIA EN ASESORIA DE IMAGEN MENCION ESTETICA ', 'INSTITUTO TECNOLOGICO SUPERIOR LENDAN', '2179-06-71206', 'TECNOLOGIA', 'aespinosa ', 'LENDANLENDAN', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('60', 'YESSENIA', 'KARINA ', 'MENDEZ ', 'LLERENA', null, '18', null, '1981-12-16', '1', '19', null, '1', null, 'F', null, null, '2', null, null, null, null, null, null, null, null, null, null, null, '0', null, '0', null, null, '0', null, null, null, null, 'TECNOLOGIA EN ASESORIA DE IMAGEN MENCION ESTETICA ', 'INSTITUTO TECNOLOGICO SUPERIOR LENDAN', '2179-10-116783', 'TECNOLOGIA', 'ymendez ', 'LENDANLENDAN', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('61', 'CARLA', 'SOFIA ', 'RUEDA ', 'PÁEZ', null, '18', null, '1986-08-07', '1', '19', null, '1', null, 'F', null, null, '2', null, null, null, null, null, null, null, null, null, null, null, '0', null, '0', null, null, '0', null, null, null, null, 'LICENCIADA EN NUTRICION HUMANA', 'PONTIFICIA UNIVERSIDAD CATÓLOLICA DEL ECUADOR', '1027-12-1108589', 'SUPERIOR', 'crueda ', 'LENDANLENDAN', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('62', 'MARÍA', 'FERNANDA ', 'ROMÁN ', 'VERDEZOTO', null, '18', null, '1978-01-05', '1', '19', null, '1', null, 'F', null, null, '2', null, null, null, null, null, null, null, null, null, null, null, '0', null, '0', null, null, '0', null, null, null, null, 'TECNICO SUPERIOR EN ESTÉTICA INTEGRAL', 'INSTITUTO TECNOLOGICO SUPERIOR LENDAN', '2179-09-101035', 'TÉCNICO', 'mromAn ', 'LENDANLENDAN', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('63', 'LISBETH', 'ESTEFANÍA ', 'CAMPOS ', 'TORO', null, '18', null, '1989-02-16', '1', '19', null, '1', null, 'F', null, null, '2', null, null, null, null, null, null, null, null, null, null, null, '0', null, '0', null, null, '0', null, null, null, null, 'TECNICO SUPERIOR EN ESTÉTICA INTEGRAL', 'INSTITUTO TECNOLOGICO SUPERIOR LENDAN', '2179-10-121860', 'TÉCNICO', 'lcampos ', 'LENDANLENDAN', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('64', 'MARLENE', 'ROCIO ', 'ALVAREZ ', 'RAMOS', null, '18', null, '1984-03-04', '1', '19', null, '1', null, 'F', null, null, '2', null, null, null, null, null, null, null, null, null, null, null, '0', null, '0', null, null, '0', null, null, null, null, 'TECNOLOGIA EN ASESORIA DE IMAGEN MENCION ESTILISMO', 'INSTITUTO TECNOLOGICO SUPERIOR LENDAN', '2179-10-116788', 'TÉCNICO', 'malvarez ', 'LENDANLENDAN', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('65', 'CLAUDIA', 'VIVIANA ', 'SALAZAR ', 'RIOS', null, '18', null, '1987-09-17', '1', '19', null, '1', null, 'F', null, null, '2', null, null, null, null, null, null, null, null, null, null, null, '0', null, '0', null, null, '0', null, null, null, null, 'TECNOLOGIA EN ASESORIA DE IMAGEN MENCION ESTETICA ', 'INSTITUTO TECNOLOGICO SUPERIOR LENDAN', '2179-11-134497', 'TECNOLOGIA', 'csalazar ', 'LENDANLENDAN', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('66', 'MARÍA', 'JAKELINE ', 'BENÍTEZ ', 'BUSTAMANTE', null, '18', null, '1973-05-17', '1', '19', null, '1', null, 'F', null, null, '2', null, null, null, null, null, null, null, null, null, null, null, '0', null, '0', null, null, '0', null, null, null, null, 'MAGISTER', 'UNIVERSIDAD TECNICA PARTICULAR DE LOJA', 'SIN DATO', 'SUPERIOR', 'mbenItez ', 'LENDANLENDAN', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('67', 'GEOVANNA', 'JACQUELINE', 'COELLO', 'VALENZUELA', null, '18', null, '1990-08-09', '1', '19', null, '1', 'B+', 'F', '1', null, '1', 'TATIANA COELLO', 'HERMANO(A)', null, null, null, null, null, 'RODILLA-TRATAMIENTO', null, null, '09-9468-3543', '0', null, '0', null, null, '0', 'ITALIA', '2009', '1', 'INFORMATICA', null, null, null, null, 'gcoello', 'LENDAN044', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('68', 'DANIELA', 'ELIZABETH', 'MORTENSEN', 'VILLAGOMEZ', null, '18', null, '1995-10-12', '1', '19', null, '1', 'A+', 'F', '1', null, '1', 'RUTH VILLAGOMEZ', 'PADRE/MADRE', null, null, null, null, null, null, null, null, '09-9813-3014', '0', null, '0', null, null, '0', 'ANDINO', '2013', '1', 'CIENCIAS SOCIALES', null, null, null, null, 'dmortensen', 'LENDAN045', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('69', 'ANA', 'MISHELL', 'LEON', 'NOROÑA', null, '18', null, '1995-07-21', '1', '19', null, '2', 'A+', 'F', '1', null, '1', 'JUAN CARLOS LEON', 'PADRE/MADRE', null, null, null, null, null, null, null, null, '09-9601-5970', '0', null, '0', null, null, '0', 'JERICO', '2013', '1', 'CIENCIAS SOCIALES', null, null, null, null, 'anal', 'anal1995-07-21', '', '', '2', '56');
INSERT INTO `tab_personas` VALUES ('70', 'EVELIN', 'MARCELA', 'CORDOVA', 'IZURIETA', null, '18', null, '1986-04-19', '1', '19', null, '1', 'O+', 'F', '1', null, '1', 'OSWALDO CORDOVA', 'PADRE/MADRE', null, null, null, null, null, null, null, null, '09-8491-9227', '0', null, '0', null, null, '0', 'NACIONAL ELOY ALFARO', '2004', '1', 'QUIMICO BIOLOGICO', null, null, null, null, 'ecordova', 'LENDAN047', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('71', 'KETHERINE', 'NATHALIA', 'TORRES', 'ABARCA', null, '18', null, '1993-01-15', '1', '19', null, '1', 'O+', 'F', '1', null, '1', 'DANIXA ABARCA', 'PADRE/MADRE', null, null, null, null, null, null, null, null, '09-9421-2735', '0', null, '0', null, null, '0', 'PADRE MIGUEL GAMBOA', '2011', '1', 'QUIMICO BIOLOGICO', null, null, null, null, 'ktorres', 'LENDAN048', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('72', 'VIVIANA', 'EUGENIA', 'SAMANIEGO ', 'VALLE', null, '18', null, '1998-08-25', '1', '21', null, '1', 'O+', 'F', '1', null, '1', 'PATRICIA SAMANIEGO', 'HERMANO(A)', null, null, null, null, null, null, null, null, '09-3900-9811', '0', null, '0', null, null, '0', 'TECNICO EL ESFUERZO', '2008', '1', 'INFORMATICA', null, null, null, null, 'vsamaniego ', 'LENDAN049', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('73', 'MARIA', 'VICTORIA', 'CARRILLO', 'PUGA', null, '18', null, '1993-01-19', '1', '19', null, '1', 'O+', 'F', '1', null, '1', 'PAULINA PUGA', 'PADRE/MADRE', null, null, null, null, null, null, null, null, '09-9858-6590', '0', null, '0', null, null, '0', 'CENTEBAT', '2010', '1', 'CIENCIAS SOCIALES', null, null, null, null, 'mcarrillo', 'LENDAN050', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('74', 'CAMILA', null, 'FRANCO', 'PUENTE', null, '18', null, '1995-08-30', '1', '19', null, '1', 'O+', 'F', '1', null, '1', 'MONICA PUENTE', 'PADRE/MADRE', null, null, null, null, null, 'EN LOS OJOS QUERATOCOR', null, null, '09-9875-6633', '0', null, '0', null, null, '1', 'LICEO LA ALBORADA', '2013', '1', 'CIENCIAS SOCIALES', null, null, null, null, 'cfranco', 'LENDAN051', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('75', 'MIRIAM', 'NICOLLE', 'MACAS', 'LIMA', null, '18', null, '1986-02-09', '1', '19', null, '1', 'O+', 'F', '1', null, '1', 'FERNANDO MACAS', 'PADRE/MADRE', null, null, null, null, null, null, null, null, '09-8718-1687', '0', null, '0', null, null, '0', 'TECNICO RUMANIA', '2006', '1', 'CONTABILIDAD', null, null, null, null, 'mmacas', 'LENDAN052', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('76', 'VEIDA', 'ELINA', 'VEINTIMILLA', 'KLYNE', null, '18', null, '1994-10-10', '1', '19', null, '1', 'O+', 'F', '1', null, '1', 'IRENE VEINTIMILLA', 'SIBRINO(A)', null, null, null, null, null, null, null, null, '09-8310-6868', '0', null, '0', null, null, '0', 'SOUTH UOKANAGAM', '2012', '4', 'GENERAL   ', null, null, null, null, 'vveintimilla', 'LENDAN053', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('77', 'STEPANIE', 'CAROLINA', 'AYALA', 'VARGAS', null, '18', null, '1991-05-09', '1', '19', null, '1', 'A+', 'F', '1', null, '1', 'YOLANDA VARGAS', 'PADRE/MADRE', null, null, null, null, null, null, null, null, '09-9899-6936', '0', null, '0', null, null, '0', '24 DE MAYO', '2011', '1', 'CONTABILIDAD', null, null, null, null, 'sayala', 'LENDAN054', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('78', 'GISELLA', 'NOEMI', 'ZAMBRANO', 'TORO', null, '18', null, '1993-07-12', '1', '13', null, '1', 'O+', 'F', '1', null, '1', 'DIANA ZAMBRANO', 'HERMANO(A)', null, null, null, null, null, null, null, null, '09-8948-0913', '0', null, '0', null, null, '0', 'TECNICO ECUADOR', '2012', '1', 'CONTABILIDAD', null, null, null, null, 'gzambrano', 'LENDAN075', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('79', 'JERUSALEN', 'ESTEFANIA', 'NICOLALDE', 'CAIZAPANTA', null, '18', null, '1994-11-13', '1', '19', null, '1', 'B+', 'F', '1', null, '1', 'KARINA CAIZAPANTA', 'PADRE/MADRE', null, null, null, null, null, null, null, null, '09-8512-3918', '0', null, '0', null, null, '0', 'LAS AMERICAS DEL VALLE', '2012', '1', 'GENERAL UNIFICADO', null, null, null, null, 'jnicolalde', 'LENDAN047', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('80', 'KARLA', 'MARGARITA', 'PAREDES', 'BUENAÑO', null, '18', null, '1989-12-19', '1', '19', null, '2', 'O+', 'F', '1', null, '1', 'MARGARITA BUENAÑO', 'PADRE/MADRE', null, null, null, null, null, null, null, null, '09-8435-5230', '0', null, '0', null, null, '0', 'BENALCAZAR', '2007', '1', 'CIENCIAS SOCIALES', null, null, null, null, 'kparedes', 'LENDAN048', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('81', 'MARIA', 'ALEJANDRA', 'GUEVARA', 'HORNA', null, '18', null, '1995-04-04', '1', '16', null, '1', 'O+', 'F', '1', null, '1', 'NELLY HORNA', 'PADRE/MADRE', null, null, null, null, null, null, null, null, '09-7934-1343', '0', null, '0', null, null, '0', 'TECNICO MSÑ.MAXIMILIANO ESPILER', '2012', '1', 'CONTABILIDAD', null, null, null, null, 'mguevara', 'LENDAN049', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('82', 'LIGIA', 'XIMENA', 'GOMEZ', 'ROMERO', null, '18', null, '1978-06-20', '1', '19', null, '1', 'O+', 'F', '1', null, '1', 'NANCY GOMEZ', 'PADRE/MADRE', null, null, null, null, null, null, null, null, '09-8999-6918', '0', null, '0', null, null, '0', '10 DE AGOSTO', '1998', '1', 'CONTABILIDAD', null, null, null, null, 'lgomez', 'LENDAN057', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('83', 'PAMELA', 'ALEJANDRA', 'MADRID', 'CASTRO', null, '18', null, '1996-08-15', '1', '19', null, '1', 'B+', 'F', '1', null, '1', 'GLADYS CASTRO', 'PADRE/MADRE', null, null, null, null, null, null, null, null, '09-6995-6564', '0', null, '0', null, null, '0', 'CONSEJO PROVINCIAL', '2014', '1', 'GENERAL UNIFICADO', null, null, null, null, 'pmadrid', 'LENDAN059', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('84', 'DIANA', 'CAROLINA', 'IZA', 'CHICAIZA', null, '18', null, '1997-01-13', '1', '19', null, '1', 'O+', 'F', '1', null, '1', 'MARCELO IZA', 'PADRE/MADRE', null, null, null, null, null, null, null, null, '09-8779-7605', '0', null, '0', null, null, '0', 'AAMPRETRA', '2014', '1', 'GENERAL UNIFICADO', null, null, null, null, 'diza', 'LENDAN060', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('85', 'JEANNETTE', 'DEL ROCIO', 'VACA', 'MEDINA', null, '18', null, '1993-08-27', '1', '19', null, '1', 'O+', 'F', '1', null, '1', 'JEANNETTE MEDINA', 'PADRE/MADRE', null, null, null, null, null, null, null, null, '09-9690-7545', '0', null, '0', null, null, '0', 'INMACULADA', '2012', '1', 'FISICO MATEMATICO', null, null, null, null, 'jvaca', 'LENDAN061', '', '', '1', '7');
INSERT INTO `tab_personas` VALUES ('86', 'SILVANA', 'MACARENA', 'SALAZAR', 'CASTRO', null, '18', null, '1983-02-24', '1', '19', null, '2', 'O+', 'F', '1', null, '1', 'NICOLAS SALAZAR', 'PADRE/MADRE', null, null, null, null, null, null, null, null, '09-9556-3370', '0', null, '0', null, null, '0', 'HIPATIA CARDENAS', '2001', '1', 'QUIMICO BIOLOGICO', null, null, null, null, 'ssalazar', 'LENDAN064', '', '\0', '0', null);
INSERT INTO `tab_personas` VALUES ('87', 'ERIKA', 'GABRIELA', 'LARA', 'GUAMAN', null, '18', null, '1988-01-08', '1', '2', null, '2', 'O+', 'F', '1', null, '1', 'JAVIER AVILA', 'ESPOSO(A)', null, null, null, null, null, 'AUDITIVA', null, null, '09-9167-8898', '0', null, '0', null, null, '1', 'TECNICO ECUADOR', '2014', '1', 'INFORMATICA', null, null, null, null, 'elara', 'LENDAN066', '', '\0', '0', null);
INSERT INTO `tab_personas` VALUES ('88', 'LIGIA', 'ELENA', 'CARVAJAL', 'MUÑOZ', null, '18', null, '1985-09-18', '1', '19', null, '1', 'O-', 'F', '1', null, '1', 'WILLSON SUAREZ', 'ESPOSO(A)', null, '02-362-9850', null, null, null, null, null, null, null, '0', null, '0', null, null, '0', 'IRFEYAL', '2000', '1', 'INFORMATICA', null, null, null, null, 'lcarvajal', 'LENDAN068', '', '', '1', '7');
INSERT INTO `tab_personas` VALUES ('89', 'MARIA', 'FERNANDA', 'RAMIREZ', 'OÑATE', null, '18', null, '1996-06-26', '1', '19', null, '1', 'O+', 'F', '1', null, '1', 'AMPARO RAMIREZ', 'TÍO(A)', null, null, null, null, null, null, null, null, '09-9275-7483', '0', null, '0', null, null, '0', 'DE LIGA', '2014', '1', 'GENERAL UNIFICADO', null, null, null, null, 'mariar', 'mariar1996-06-26', '', '', '2', '56');
INSERT INTO `tab_personas` VALUES ('90', 'DIANA', 'ISABEL', 'GONZALEZ', 'RODRIGUEZ', null, '18', null, '1991-02-02', '1', '19', null, '1', 'O+', 'F', '1', null, '1', 'ELIANA GONZALEZ', 'HERMANO(A)', null, '02-339-0465', null, null, null, null, null, null, null, '0', null, '0', null, null, '0', 'ADVENTISTA', '2009', '1', 'CONTABILIDAD', null, null, null, null, 'dianag', 'dianag1991-02-02', '', '', '2', '68');
INSERT INTO `tab_personas` VALUES ('91', 'YADIRA', 'KATHERINE', 'MARTINEZ', 'LUNA', null, '18', null, '1986-11-13', '1', '23', null, '1', 'O+', 'F', '1', null, '1', 'LETICIA LUNA', 'HERMANO(A)', null, null, null, null, null, null, null, null, '09-9803-3371', '0', null, '0', null, null, '0', 'IEVIZA', '2003', '1', 'INFORMATICA', null, null, null, null, 'yadiram', 'yadiram1986-11-13', '', '', '2', '56');
INSERT INTO `tab_personas` VALUES ('92', 'DANIELA', 'MICHELLE', 'DIAZ', 'NOLIVOS', null, '18', null, '1991-06-24', '1', '19', null, '2', 'A+', 'F', '1', null, '1', 'ALICIA NOLIVOS', 'PADRE/MADRE', null, null, null, null, null, null, null, null, '09-9565-5856', '0', null, '0', null, null, '0', 'ECUATORIANO SUIZO', '2009', '1', 'QUIMICO BIOLOGICO', null, null, null, null, 'danielad', 'danielad1991-06-24', '', '', '2', '68');
INSERT INTO `tab_personas` VALUES ('93', 'TANIA', 'SALOME', 'FISCAL', 'RIVADENEIRA', null, '18', null, '1990-01-27', '1', '19', null, '1', 'O+', 'F', '1', null, '1', 'SILVIA RIVADENEIRA', 'PADRE/MADRE', null, null, null, null, null, null, null, null, '09-9925-6607', '0', null, '0', null, null, '0', 'EUFRACIA', '2008', '1', 'FISICO MATEMATICO', null, null, null, null, 'taniaf', 'taniaf1990-01-27', '', '', '2', '56');
INSERT INTO `tab_personas` VALUES ('94', 'SLENDY', 'AMELY', 'GONZALEZ', 'CARRERA', null, '18', null, '1995-01-15', '1', '19', null, '1', 'O+', 'F', '1', null, '1', 'GISELLA CARRERA', 'PADRE/MADRE', null, null, null, null, null, null, null, null, '09-9897-3515', '0', null, '0', null, null, '0', 'ADVENTISTA', '2012', '1', 'GENERAL UNIFICADO', null, null, null, null, 'slendyg', 'slendyg1995-01-15', '', '', '2', '56');
INSERT INTO `tab_personas` VALUES ('95', 'GRACE', 'ANGELICA', 'SEGOVIA', 'ALARCON', null, '18', null, '1997-04-05', '1', '5', null, '2', 'O+', 'F', '1', null, '1', 'LIGIA ALARCON', 'PADRE/MADRE', null, null, null, null, null, null, null, null, '09-8227-8705', '0', null, '0', null, null, '0', 'VICTORIA VASCONEZ ', '2014', '1', 'GENERAL UNIFICADO', null, null, null, null, 'graces', 'graces1997-04-05', '', '', '2', '56');
INSERT INTO `tab_personas` VALUES ('96', 'JENNY', null, 'AID', null, null, '18', null, '1987-10-02', '9', null, null, '1', 'O+', 'F', '1', null, '1', 'SALAMEH AID', 'PADRE/MADRE', null, null, null, null, null, null, null, null, '09-8700-0095', '0', null, '0', null, null, '0', 'EL ASIA', '2009', '9', 'PROFESORA DE INGLES', null, null, null, null, 'jaid', 'LENDAN079', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('97', 'AMBAR', 'CAROLINA', 'GAVIDIA', 'TERAN', null, '18', null, '1997-12-20', '1', '19', null, '1', 'O+', 'F', '1', null, '1', 'GRECIA TERAN', 'PADRE/MADRE', null, null, null, null, null, null, null, null, '09-7903-6103', '0', null, '0', null, null, '0', 'GRAN COLOMBIA', '2015', '1', 'SECRETARIADO BILINGUE', null, null, null, null, 'agabidia', 'LENDAN079', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('98', 'MAYRA', 'ALEJANDRA', 'HERVAS', 'GONZALEZ', null, '18', null, '1986-09-13', '1', '19', null, '1', 'A+', 'F', '1', null, '1', 'MICHELLE HERVAS', 'HERMANO(A)', null, null, null, null, null, null, null, null, '09-9584-0261', '0', null, '0', null, null, '0', 'NUEVO ECUADOR', '2003', '1', 'CIENCIAS SOCIALES', null, null, null, null, 'mhervas', 'LENDAN079', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('99', 'DANIELA', 'MERCEDES', 'ACOSTA', 'ALVAREZ', null, '18', null, '1997-04-11', '1', '1', null, '1', 'O+', 'F', '1', null, '1', 'ALEXANDRA ALVAREZ', 'PADRE/MADRE', null, null, null, null, null, null, null, null, '09-7912-0051', '0', null, '0', null, null, '0', 'VERBO', '2015', '1', 'GENERAL UNIFICADO', null, null, null, null, 'danielaa', 'danielaa1997-04-11', '', '', '2', '56');
INSERT INTO `tab_personas` VALUES ('100', 'LILIAN', 'PATRICIA', 'PUJOTA', 'ANDRADE', null, '18', null, '1995-07-02', '1', '19', null, '1', 'O+', 'F', '1', null, '1', 'SALVADORA PUJOTA', 'PADRE/MADRE', null, null, null, null, null, null, null, null, '09-9913-3979', '0', null, '0', null, null, '0', 'BENJAMIN CARRION MORA', '2014', '1', 'GENERAL UNIFICADO', null, null, null, null, 'lpujota', 'LENDAN081', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('101', 'MERY', 'DEL ROCIO', 'FUELA', 'YANZA', null, '18', null, '1981-01-28', '1', '7', null, '2', 'O+', 'F', '1', null, '1', 'WILLSON JIMENEZ', 'ESPOSO(A)', null, null, null, null, null, null, null, null, '09-9996-8714', '0', null, '0', null, null, '0', 'SEGUNDO TORRES', '2015', '1', 'GENERAL UNIFICADO', null, null, null, null, 'mfuela', 'LENDAN082', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('102', 'LILIAN', 'CUMANDA', 'MARCILLO', 'ACOSTA', null, '18', null, '1973-12-18', '1', '19', null, '1', 'A+', 'F', '1', null, '1', 'ELIZABETH MARCILLO', 'HERMANO(A)', null, '02-263-7259', null, null, null, null, null, null, null, '0', null, '0', null, null, '0', 'CONSEJO PROVINCIAL', '1992', '1', 'CONTABILIDAD', null, null, null, null, 'lmarcillo', 'LENDAN084', '', '', '1', '43');
INSERT INTO `tab_personas` VALUES ('103', 'ANDREA', 'CAROLINA', 'MORALES', 'MARIN', null, '18', null, '1989-03-01', '1', '19', null, '1', 'O+', 'F', '1', null, '1', 'CARMITA MARIN', 'PADRE/MADRE', null, null, null, null, null, null, null, null, '09-9978-4331', '0', null, '0', null, null, '0', 'METROPOLITANO', '2006', '1', 'CIENCIAS BASICAS BILINGUE', null, null, null, null, 'amorales', 'LENDAN085', '', '', '1', '43');
INSERT INTO `tab_personas` VALUES ('105', 'JEANNETH', 'ALEXANDRA', 'MORA', 'CRUZ', null, '18', null, '1984-11-08', '1', '19', null, '1', 'A+', 'F', '1', null, '1', 'MARIA ELENA MORA', 'HERMANO(A)', null, null, null, null, null, null, null, null, '09-9404-6981', '0', null, '0', null, null, '0', 'YACKET COUSTODE', '2010', '1', 'CIENCIAS SOCIALES', null, null, null, null, 'jmora', 'LENDAN090', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('106', 'JOCELYNE', 'ANDREA', 'AREVALO', 'CRIOLLO', null, '18', null, '1996-10-02', '1', '12', null, '1', 'O+', 'F', '1', null, '1', 'JANETH CRIOLLO', 'PADRE/MADRE', null, null, null, null, null, null, null, null, '09-9626-0585', '0', null, '0', null, null, '0', 'EUGENIO ESPEJO', '2014', '1', 'GENERAL UNIFICADO', null, null, null, null, 'jarevalo', 'LENDAN091', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('107', 'MARIA', 'JOSE', 'NARVAEZ', 'ORTIZ', null, '18', null, '1997-04-14', '1', '15', null, '1', 'A+', 'F', '1', null, '1', 'MARISOL ORTÍZ', 'PADRE/MADRE', null, null, null, null, null, null, null, null, '09-9244-1723', '0', null, '0', null, null, '0', 'DON BOSCO', '2014', '1', 'GENERAL UNIFICADO', null, null, null, null, 'marian', 'LENDAN092', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('108', 'STHEFANIA', null, 'GARCIA', 'MILLAN', null, '18', null, '1995-03-13', '3', '38', null, '1', 'A+', 'F', '1', null, '1', 'HELENA MILLAN', 'PADRE/MADRE', null, null, null, null, null, 'EPILEPSIA', null, null, '09-9271-4201', '0', null, '0', null, null, '1', 'SAN RAFAEL', '2014', '1', 'GENERAL UNIFICADO', null, null, null, null, 'sgarcia', 'LENDAN093', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('109', 'DIANA', 'CAROLINA', 'RIVERA', 'RIVERA', null, '18', null, '1995-12-10', '1', '21', null, '1', 'O+', 'F', '1', null, '1', 'CARMEN RIVERA', 'PADRE/MADRE', null, null, null, null, null, null, null, null, '09-9160-1277', '0', null, '0', null, null, '0', 'ANTONIO NEUMANE', '2014', '1', 'GENERAL UNIFICADO', null, null, null, null, 'drivera', 'LENDAN094', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('110', 'BETHY', 'ELIZABETH', 'LARA', 'RUIZ', null, '18', null, '1993-07-12', '1', '19', null, '1', 'O+', 'F', '1', null, '1', 'JACQUELINE RUIZ', 'PADRE/MADRE', null, null, null, null, null, 'ARTRITIS', null, null, '09-9593-4405', '0', null, '0', null, null, '1', 'ISACC PILLMAN', '2012', '1', 'GENERAL UNIFICADO', null, null, null, null, 'blara', 'LENDAN095', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('111', 'VANESSA', 'ESTEFANIA', 'GORDON', 'REINA', null, '18', null, '1991-08-12', '1', '4', null, '1', 'B+', 'F', '1', null, '1', 'MARCELO GORDON', 'PADRE/MADRE', null, null, null, null, null, null, null, null, '09-9168-2641', '0', null, '0', null, null, '0', 'INSTITUTO TEC. TULCAN', '2009', '1', 'QUIMICO BIOLOGICO', null, null, null, null, 'vgordon', 'LENDAN095', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('112', 'FERNANDO', null, 'TOLEDO', null, null, '1', null, null, null, null, null, null, null, null, null, null, '3', null, null, null, null, null, null, null, null, null, null, null, '0', null, '0', null, null, '0', null, null, null, null, null, null, null, null, null, null, '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('113', 'BRIGGITTI', 'ALEJANDRA', 'BARRAGAN', 'MALDONADO', null, '18', null, '1993-04-11', '1', '12', null, '1', 'O+', 'F', '1', null, '1', 'LUISA ALARCON', 'TÍO(A)', null, null, null, null, null, null, null, null, '09-9978-4017', '0', null, '0', null, null, '0', 'MILITAR TNTE CORONEL.LAURO GUERRERO', '2010', '1', 'GENERAL UNIFICADO', null, null, null, null, 'bbarragan', 'LENDAN095', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('114', 'PAULA', 'ANDREA', 'CACERES', 'MOSQUERA', null, '18', null, '1996-11-23', '1', '19', null, '1', 'O+', 'F', '1', null, '1', 'SANDRA MOSQUERA', 'PADRE/MADRE', null, '02-249-5835', null, null, null, null, null, null, null, '0', null, '0', null, null, '0', 'LUIGUI GALVANI', '2015', '1', 'GENERAL UNIFICADO', null, null, null, null, 'pcaceres', 'LENDAN096', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('115', 'SOFIA', 'DOMENICA', 'ROMERO', 'SALGADO', null, '18', null, '1997-12-16', '1', '6', null, '1', 'O+', 'F', '1', null, '1', 'MICAELA ROMERO', 'HERMANO(A)', null, null, null, null, null, null, null, null, '09-9779-1429', '0', null, '0', null, null, '0', 'SANATA JUANA DE CHANTAL', '2015', '1', 'GENERAL UNIFICADO', null, null, null, null, 'sofiar', 'sofiar1997-12-16', '', '', '2', '56');
INSERT INTO `tab_personas` VALUES ('116', 'KELLY', 'EVELYN ', 'MORENO', 'TIPAN', null, '18', null, '1994-08-01', '1', '19', null, '1', 'O-', 'F', '1', null, '1', 'ROSA MORALES', 'TÍO(A)', null, null, null, null, null, null, null, null, '09-9811-4938', '0', null, '0', null, null, '0', 'DAVID AUSUBE', '2015', '1', 'GENERAL UNIFICADO', null, null, null, null, 'kellym', 'kellym1994-08-01', '', '', '1', '73');
INSERT INTO `tab_personas` VALUES ('117', 'MADELAINE', 'GRACE', 'AILLON', 'SALGUERO', null, '18', null, '1982-12-14', '1', '19', null, '2', 'O+', 'F', '1', null, '1', 'SINTIA AILLON', 'HERMANO(A)', null, '02-600-3901', null, null, null, null, null, null, null, '0', null, '0', null, null, '0', 'ANDINO', '2001', '1', 'QUIMICO BIOLOGICO', null, null, null, null, 'madelainea', 'madelainea1982-12-14', '', '', '1', '61');
INSERT INTO `tab_personas` VALUES ('118', 'SUNMY', 'PRISCILA', 'JO', 'FREIRE', null, '18', null, '1994-02-03', '1', '19', null, '1', 'O+', 'F', '1', null, '1', 'NOEMI FREIRE', 'PADRE/MADRE', null, null, null, null, null, null, null, null, '09-8377-5713', '0', null, '0', null, null, '0', 'ALIANZA AMERICANA', '2012', '1', 'GENERAL UNIFICADO', null, null, null, null, null, 'LENDAN100', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('119', 'LADY', 'JOHANNA', 'VELASQUEZ', 'HERRERA', null, '18', null, '1984-07-26', '3', '39', null, '1', 'O+', 'F', '1', null, '1', 'HERNAN QUEVEDO TOBAR', 'AMIGO(A)', null, null, null, null, null, null, null, null, '09-9955-2889', '0', null, '0', null, null, '0', 'NORMAL SUPERIOR FARAYONES DE CALI', '2001', '3', 'NORMALISTA', null, null, null, null, null, 'LENDAN101', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('120', 'CINTHYA', 'CAROLINA', 'GUERRERO', 'RODRIGUEZ', null, '18', null, '1993-04-10', '1', '19', null, '1', 'O+', 'F', '1', null, '1', 'FRANKLIN GUERRERO', 'PADRE/MADRE', null, null, null, null, null, null, null, null, '09-9892-9519', '0', null, '0', null, null, '0', 'COLEGIO BRASIL', '2012', '1', 'CIENCIAS SOCIALES', null, null, null, null, null, 'LENDAN102', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('121', 'SYDNEY', 'NATHALY', 'MORALES ', 'FUENTES', null, '18', null, '1996-08-07', '1', '19', null, '1', 'O+', 'F', '1', null, '1', 'NANCY FUENTES', 'PADRE/MADRE', null, null, null, null, null, null, null, null, '09-8447-7529', '0', null, '0', null, null, '0', 'HIPATIA CARDENAS', '2014', '1', 'GENERAL UNIFICADO', null, null, null, null, null, 'LENDAN104', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('122', 'SOFIA', 'KARINA', 'GARCIA ', 'SANTOS', null, '18', null, '1987-10-11', '1', '19', null, '1', 'O+', 'F', '1', null, '1', 'ZORAIDA SANTOS', 'PADRE/MADRE', null, null, null, null, null, null, null, null, '09-9937-0437', '0', null, '0', null, null, '0', 'RAFAEL LARREA ANDRADE', '2006', '1', 'QUIMICO BIOLOGICO', null, null, null, null, null, 'LENDAN105', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('123', 'PATRICIA', 'NEREYCI', 'SOLORSANO', 'ZAMBRANO', null, '18', null, '1985-03-31', '1', '14', null, '2', 'O+', 'F', '1', null, '1', 'MAXIME BINGON', 'PADRE/MADRE', null, '02-226-2034', null, null, null, null, null, null, null, '0', null, '0', null, null, '0', 'ORACIO HIDROBO VELASQUEZ', '2001', '1', 'QUIMICO BIOLOGICO', null, null, null, null, null, 'LENDAN106', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('124', 'GERELDINE', 'ESTEFANIA', 'PAREDES', 'CORTEZ', null, '18', null, '1992-03-25', '1', '19', null, '1', 'O+', 'F', '1', null, '1', 'JAQUELINE CORTEZ', 'PADRE/MADRE', null, null, null, null, null, null, null, null, '09-9839-8711', '0', null, '0', null, null, '0', 'JOSE VICENTE DE UNDA', '2011', '8', 'CIENCIAS GENERALES', null, null, null, null, 'gereldinep', 'gereldinep1992-03-25', '', '', '1', '13');
INSERT INTO `tab_personas` VALUES ('125', 'BENIGNO', 'SAMUEL', 'POLO', 'ABAD', null, '18', null, '1971-08-29', '1', '19', null, '2', 'B+', 'M', '1', null, '2', null, null, null, null, null, null, null, null, null, null, null, '0', null, '0', null, null, '0', null, null, null, null, 'LICENCIADO EN CIANCIAS POLITICAS Y SOCIALES', 'UNIVERSIDAD CENTRAL DEL ECUADOR', '1005-07-766439', 'LICENCIADO', 'bpolo', 'LENDAN0030', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('126', 'TATIANA', 'ALEJANDRA', 'LUZURIAGA', 'SANCHEZ', null, '18', null, '1986-03-10', '1', '19', null, '2', 'O+', 'F', '1', null, '2', null, null, null, null, null, null, null, null, null, null, null, '0', null, '0', null, null, '0', null, null, null, null, 'TECNOLOGO EN DISEÑO DE MODAS', 'SAN FRANCISCO', '1038-09-935374', 'TECNOLOGICO', 'tluzuriaga', 'LENDAN0031', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('127', 'ANA', 'BELEN', 'HERRERA', 'ERAZO', null, '18', null, '1991-05-03', '1', '19', null, '1', 'O+', 'F', '1', null, '1', 'LUIS HERRERA', 'PADRE/MADRE', null, null, null, null, null, null, null, null, '09-9980-3025', '0', null, '0', null, null, '0', 'INTEGRAL', '2009', '1', 'FISICO MATEMATICO', null, null, null, null, null, 'LENDAN105', '', '', '0', null);
INSERT INTO `tab_personas` VALUES ('128', 'KAREN', 'ANTONELLA', 'CADENA', 'CARRIEL', null, '18', null, '1997-09-22', '1', '19', null, '1', 'O+', 'F', '1', null, '1', 'BETSAIDA CARRIEL', 'PADRE/MADRE', null, null, null, null, null, null, null, null, '09-9896-2231', '0', null, '0', null, null, '0', 'THEIARD DE CHARDAA', '2015', '1', 'GENERAL UNIFICADO', null, null, null, null, 'kcadena', 'kcadena1997-09-22', '', '', '2', '56');
INSERT INTO `tab_personas` VALUES ('129', 'DIEGO', 'ANDRES', 'LLERENA', 'FUENMAYOR', null, '18', null, '1985-08-16', '1', '10', null, '1', 'A+', 'M', '1', null, '1', 'JORGE LLERENA', 'PADRE/MADRE', null, null, null, null, null, null, null, null, '09-9500-4255', '0', null, '0', null, null, '0', 'LICEO NAVAL', '2002', '1', 'FISICO MATEMATICO', null, null, null, null, 'dllerena', 'dllerena1985-08-16', '', '', '2', '68');
INSERT INTO `tab_personas` VALUES ('130', 'PATRICIA', 'MARIECELA', 'ELIZALDE', 'JARAMILLO', null, '18', null, '1975-08-26', '1', '12', null, '2', 'A+', 'F', '1', null, '1', 'RAMIRO CORAQUILLA', 'SIBRINO(A)', null, null, null, null, null, null, null, null, '09-9584-1141', '0', null, '0', null, null, '0', 'JUAN PABLO SEGUNDO', '2015', '1', 'CONTABILIDAD', null, null, null, null, 'pelizalde', 'pelizalde1975-08-26', '', '', '2', '56');

-- ----------------------------
-- Table structure for tab_personas_a_contactar
-- ----------------------------
DROP TABLE IF EXISTS `tab_personas_a_contactar`;
CREATE TABLE `tab_personas_a_contactar` (
  `ID_PERSONA_CONTACTAR` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE_COMPLETO` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `CORREO_ELECTRONICO` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TELEFONO` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CELULAR` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ESTADO` tinyint(1) DEFAULT '1',
  `ID_CLIENTE_JURIDICO` int(11) DEFAULT NULL,
  `AREA_CARGO` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID_PERSONA_CONTACTAR`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tab_personas_a_contactar
-- ----------------------------
INSERT INTO `tab_personas_a_contactar` VALUES ('1', 'MARIA DE LOS ANGELES SANTANA', 'alcampos@cui.cu', '22-222-2222', '22-2222-2222', '1', '4257', 'DIRECTOR EJECUTIVO');
INSERT INTO `tab_personas_a_contactar` VALUES ('2', 'MARIA DE LOS ANGELES SANTANA', 'alcampos@cui.cu', '44-444-4444', '', '1', '4255', null);
INSERT INTO `tab_personas_a_contactar` VALUES ('3', 'MELISA MAURA PEREZ DIAZ', 'melisa@uci.cu', '', '22-2222-2222', '1', '4257', 'DIRECTOR DE VENTAS');
INSERT INTO `tab_personas_a_contactar` VALUES ('4', 'JORGE ARCOS', 'jorge.arcos@datosmedia.com', '02-382-6725', '09-8752-9050', '1', '4276', 'GERENTE DE DESARROLLO');

-- ----------------------------
-- Table structure for tab_profesiones
-- ----------------------------
DROP TABLE IF EXISTS `tab_profesiones`;
CREATE TABLE `tab_profesiones` (
  `ID_PROFESION` int(11) NOT NULL AUTO_INCREMENT,
  `PROFESION` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID_PROFESION`)
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tab_profesiones
-- ----------------------------
INSERT INTO `tab_profesiones` VALUES ('1', 'INGENIERO(A) EN SISTEMAS COMPUTACIONALES');
INSERT INTO `tab_profesiones` VALUES ('2', 'CONTADOR (A)');
INSERT INTO `tab_profesiones` VALUES ('3', 'LICENCIADO (A)');
INSERT INTO `tab_profesiones` VALUES ('4', 'MODISTA');
INSERT INTO `tab_profesiones` VALUES ('5', 'ABOGADO (A)');
INSERT INTO `tab_profesiones` VALUES ('6', 'LICENCIADO(A)  EN ENFERMERÍA');
INSERT INTO `tab_profesiones` VALUES ('7', 'INGENIERO(A) EN ADMINISTRACIÓN DE EMPRESAS');
INSERT INTO `tab_profesiones` VALUES ('8', 'LICENCIADO(A) EN NUTRICIÓN');
INSERT INTO `tab_profesiones` VALUES ('9', 'INGENIERO(A) EN MEDIO AMBIENTE');
INSERT INTO `tab_profesiones` VALUES ('10', 'TECNÓLOGO(A) EN GESTIÓN TURÍSTICA');
INSERT INTO `tab_profesiones` VALUES ('11', 'TECNÓLOGO(A) EN DISEÑO DE MODAS');
INSERT INTO `tab_profesiones` VALUES ('12', 'TECNÓLOGOEN ADMINISTRACIÓN HOTELERA');
INSERT INTO `tab_profesiones` VALUES ('13', 'ABOGADO');
INSERT INTO `tab_profesiones` VALUES ('14', 'INGENIERO(A) EN CONTABILIDAD Y AUDITORÍA');
INSERT INTO `tab_profesiones` VALUES ('15', 'SECRETARIO(A) EJECUTIVO(A)');
INSERT INTO `tab_profesiones` VALUES ('16', 'LICENCIADO(A) EN CIENCIAS DE LA EDUCACIÓN');
INSERT INTO `tab_profesiones` VALUES ('17', 'INGENIERO(A) EN MECATRÓNICA');
INSERT INTO `tab_profesiones` VALUES ('18', 'PARVULARIO(A)');
INSERT INTO `tab_profesiones` VALUES ('19', 'LICENCIADO(A) EN LENGUAS INTERNACIONALES');
INSERT INTO `tab_profesiones` VALUES ('20', 'INGENIERO(A) CIVIL');
INSERT INTO `tab_profesiones` VALUES ('21', 'TECNÓLOGO(A) EN SISTEMAS');
INSERT INTO `tab_profesiones` VALUES ('22', 'HIGIENISTA DENTAL');
INSERT INTO `tab_profesiones` VALUES ('23', 'ECONOMISTA');
INSERT INTO `tab_profesiones` VALUES ('24', 'LICENCIADO(A) EN PERIODISMO');
INSERT INTO `tab_profesiones` VALUES ('25', 'INGENIERO(A) EN MECÁNICA AUTOMOTRIZ');
INSERT INTO `tab_profesiones` VALUES ('26', 'POLICIA');
INSERT INTO `tab_profesiones` VALUES ('27', 'TECNÓLOGO(A) EN ARTES PLÁSTICAS');
INSERT INTO `tab_profesiones` VALUES ('28', 'OFICIAL DE POLICA');
INSERT INTO `tab_profesiones` VALUES ('29', 'TÉCNICO AERONAUTICO');
INSERT INTO `tab_profesiones` VALUES ('30', 'LICENCIADO(A) EN TERAPIA FÍSICA MÉDICA');
INSERT INTO `tab_profesiones` VALUES ('31', 'MAESTRA EN BELLEZA');
INSERT INTO `tab_profesiones` VALUES ('32', 'INGENIERO(A) EN SISTEMAS E INFORMATICA');
INSERT INTO `tab_profesiones` VALUES ('33', 'INGENIERO(A) COMERCIAL');
INSERT INTO `tab_profesiones` VALUES ('34', 'ODONTOLOGO');
INSERT INTO `tab_profesiones` VALUES ('35', 'TÉCNICO(A) EN SECRETARIADO EJECUTIVO');
INSERT INTO `tab_profesiones` VALUES ('36', 'CHOFER');
INSERT INTO `tab_profesiones` VALUES ('37', 'BACHILLER');
INSERT INTO `tab_profesiones` VALUES ('38', 'INGENIERO(A) ELECTRONICA Y TELECOMUNICACIONES');
INSERT INTO `tab_profesiones` VALUES ('39', 'AYUDANTE DE COSINA');
INSERT INTO `tab_profesiones` VALUES ('40', 'INGENIERO(A) MECÁNICO');
INSERT INTO `tab_profesiones` VALUES ('41', 'LICENCIADO EN ADMINISTRACIÓN HOTELERA');
INSERT INTO `tab_profesiones` VALUES ('42', 'MAGISTER EN EDUCACIÓN');
INSERT INTO `tab_profesiones` VALUES ('43', 'INGENIERO(A) EN FINANZAS');
INSERT INTO `tab_profesiones` VALUES ('44', 'EJECUTIVO DE COBRANZA');
INSERT INTO `tab_profesiones` VALUES ('45', 'INGENIERO(A) EN RECURSOS NATURALES NO RENOVABLES');
INSERT INTO `tab_profesiones` VALUES ('46', 'TÉCNICO(A) EN INFORMÁTICA');
INSERT INTO `tab_profesiones` VALUES ('47', 'JORNALERO');
INSERT INTO `tab_profesiones` VALUES ('48', 'INGENIERO EN ELECTRICIDAD INDUSTRIAL');
INSERT INTO `tab_profesiones` VALUES ('49', 'JARDINERO');
INSERT INTO `tab_profesiones` VALUES ('50', 'TALABARTERIA');
INSERT INTO `tab_profesiones` VALUES ('52', 'MAGISTER EN RECURSOS HIDRICOS');
INSERT INTO `tab_profesiones` VALUES ('53', 'AGRICULTOR');
INSERT INTO `tab_profesiones` VALUES ('54', 'COMERCIANTE');
INSERT INTO `tab_profesiones` VALUES ('55', 'CHEF');
INSERT INTO `tab_profesiones` VALUES ('56', 'MECÁNICO AUTOMOTRIS');
INSERT INTO `tab_profesiones` VALUES ('57', 'ESTUDIANTE');
INSERT INTO `tab_profesiones` VALUES ('58', 'VETERINARIO');
INSERT INTO `tab_profesiones` VALUES ('59', 'AUXILIAR DE FARMACIA');
INSERT INTO `tab_profesiones` VALUES ('60', 'ARTESANO');
INSERT INTO `tab_profesiones` VALUES ('61', 'ENFERMERA');
INSERT INTO `tab_profesiones` VALUES ('62', 'CARPITERO');
INSERT INTO `tab_profesiones` VALUES ('63', 'INGENIERO (A) AGRONOMO');
INSERT INTO `tab_profesiones` VALUES ('64', 'INGENIERO EN AGROINDUSTRIAS');
INSERT INTO `tab_profesiones` VALUES ('65', 'CERRAJERO');
INSERT INTO `tab_profesiones` VALUES ('66', 'PSICÓLOGA INDUSTRIAL');
INSERT INTO `tab_profesiones` VALUES ('67', 'SHAMAN');
INSERT INTO `tab_profesiones` VALUES ('68', 'TÉCNOLOGA EN MERCADO TECNIA');
INSERT INTO `tab_profesiones` VALUES ('69', 'PROFESOR/A');
INSERT INTO `tab_profesiones` VALUES ('70', 'MILITAR');
INSERT INTO `tab_profesiones` VALUES ('71', 'PROFESORA DE SEGUNDA ENSEÑANZA');
INSERT INTO `tab_profesiones` VALUES ('72', 'INGENIERA EN MERCADO TECNIA');
INSERT INTO `tab_profesiones` VALUES ('73', 'TECNOLOGO(A) ADMINISTRACIÓN DE EMPRESAS');
INSERT INTO `tab_profesiones` VALUES ('74', 'LICENCIADO EN IMAGINOLOGIA');
INSERT INTO `tab_profesiones` VALUES ('75', 'MAGISTER EN EPIDEMIOLOGIA');
INSERT INTO `tab_profesiones` VALUES ('76', 'LICENCIADO EN DISEÑO Y MARKETING');
INSERT INTO `tab_profesiones` VALUES ('77', 'OTROS SERVICIOS');
INSERT INTO `tab_profesiones` VALUES ('78', 'SARGENTO PRIMERO');
INSERT INTO `tab_profesiones` VALUES ('79', 'ALBAÑIL');
INSERT INTO `tab_profesiones` VALUES ('80', 'OPERARIA');
INSERT INTO `tab_profesiones` VALUES ('81', 'EMPLEADO PRIVADO');
INSERT INTO `tab_profesiones` VALUES ('82', 'CONTRATISTA');
INSERT INTO `tab_profesiones` VALUES ('83', 'TECNOLOGO EN EDUCACIÓN FISICA');
INSERT INTO `tab_profesiones` VALUES ('84', 'CAPACITADORA');
INSERT INTO `tab_profesiones` VALUES ('85', 'MAGISTER EN ADMINISTRACIÓN PÚBLICA MENCION DESARROLLO INSTITUCIONAL');
INSERT INTO `tab_profesiones` VALUES ('86', 'LICENCIADO(A) EN MÚSICA');
INSERT INTO `tab_profesiones` VALUES ('87', 'FISIOTERAPISTA');
INSERT INTO `tab_profesiones` VALUES ('88', 'ANALISTA DE CALIDAD');
INSERT INTO `tab_profesiones` VALUES ('89', 'TECNOLOGO EN ELECTRICIDAD');
INSERT INTO `tab_profesiones` VALUES ('90', 'INGENIERO(A) EN ADMINISTRACIÓN HOTELERA');
INSERT INTO `tab_profesiones` VALUES ('91', 'LICENCIADA EN PSICOLOGÍA EDUCATIVA Y ORIENTACIÓN VOCACIONAL');
INSERT INTO `tab_profesiones` VALUES ('92', 'BODEGUERO');
INSERT INTO `tab_profesiones` VALUES ('93', 'NINGUNA');
INSERT INTO `tab_profesiones` VALUES ('94', 'SECRETARIA');
INSERT INTO `tab_profesiones` VALUES ('95', 'AMA DE CASA');

-- ----------------------------
-- Table structure for tab_provincias
-- ----------------------------
DROP TABLE IF EXISTS `tab_provincias`;
CREATE TABLE `tab_provincias` (
  `ID_PROVINCIA` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PAIS` int(11) DEFAULT NULL,
  `PROVINCIA` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID_PROVINCIA`),
  KEY `ID_PAIS` (`ID_PAIS`),
  CONSTRAINT `tab_provincias_ibfk_1` FOREIGN KEY (`ID_PAIS`) REFERENCES `tab_paises` (`ID_PAIS`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tab_provincias
-- ----------------------------
INSERT INTO `tab_provincias` VALUES ('1', '1', 'AZUAY');
INSERT INTO `tab_provincias` VALUES ('2', '1', 'BOLIVAR');
INSERT INTO `tab_provincias` VALUES ('3', '1', 'CAÑAR');
INSERT INTO `tab_provincias` VALUES ('4', '1', 'CARCHI');
INSERT INTO `tab_provincias` VALUES ('5', '1', 'CHIMBORAZO');
INSERT INTO `tab_provincias` VALUES ('6', '1', 'COTOPAXI');
INSERT INTO `tab_provincias` VALUES ('7', '1', 'EL ORO');
INSERT INTO `tab_provincias` VALUES ('8', '1', 'ESMERALDAS');
INSERT INTO `tab_provincias` VALUES ('9', '1', 'GALAPAGOS');
INSERT INTO `tab_provincias` VALUES ('10', '1', 'GUAYAS');
INSERT INTO `tab_provincias` VALUES ('11', '1', 'IMBABURA');
INSERT INTO `tab_provincias` VALUES ('12', '1', 'LOJA');
INSERT INTO `tab_provincias` VALUES ('13', '1', 'LOS RIOS');
INSERT INTO `tab_provincias` VALUES ('14', '1', 'MANABI');
INSERT INTO `tab_provincias` VALUES ('15', '1', 'MORONA SANTIAGO');
INSERT INTO `tab_provincias` VALUES ('16', '1', 'NAPO');
INSERT INTO `tab_provincias` VALUES ('17', '1', 'ORELLANA');
INSERT INTO `tab_provincias` VALUES ('18', '1', 'PASTAZA');
INSERT INTO `tab_provincias` VALUES ('19', '1', 'PICHINCHA');
INSERT INTO `tab_provincias` VALUES ('20', '1', 'SANTA ELENA');
INSERT INTO `tab_provincias` VALUES ('21', '1', 'STO .DOMINGO DE LOS TSACHILAS');
INSERT INTO `tab_provincias` VALUES ('22', '1', 'SUCUMBIOS');
INSERT INTO `tab_provincias` VALUES ('23', '1', 'TUNGURAHUA');
INSERT INTO `tab_provincias` VALUES ('24', '1', 'ZAMORA CHINCHIPE');
INSERT INTO `tab_provincias` VALUES ('25', '3', 'NARIÑO');
INSERT INTO `tab_provincias` VALUES ('26', '3', 'HUILA');
INSERT INTO `tab_provincias` VALUES ('28', '2', 'VALENCIA');
INSERT INTO `tab_provincias` VALUES ('30', '2', 'ALMERIA');
INSERT INTO `tab_provincias` VALUES ('31', '4', 'TORONTO');
INSERT INTO `tab_provincias` VALUES ('32', '2', 'BARCELONA');
INSERT INTO `tab_provincias` VALUES ('33', '5', 'ZAPOTILLO');
INSERT INTO `tab_provincias` VALUES ('34', '2', 'MADRID');
INSERT INTO `tab_provincias` VALUES ('35', '3', 'VALLE DEL CAUCA');
INSERT INTO `tab_provincias` VALUES ('36', '3', 'BOGOTÁ');
INSERT INTO `tab_provincias` VALUES ('37', '5', 'JUNIN');
INSERT INTO `tab_provincias` VALUES ('38', '3', 'CALI');
INSERT INTO `tab_provincias` VALUES ('39', '3', 'CALI');

-- ----------------------------
-- Table structure for tab_representantes
-- ----------------------------
DROP TABLE IF EXISTS `tab_representantes`;
CREATE TABLE `tab_representantes` (
  `ID_REPRESENTANTE` int(11) NOT NULL AUTO_INCREMENT,
  `PRIMER_NOMBRE` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SEGUNDO_NOMBRE` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `APELLIDO_PATERNO` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `APELLIDO_MATERNO` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID_REPRESENTANTE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tab_representantes
-- ----------------------------

-- ----------------------------
-- Table structure for tab_tipos_becas
-- ----------------------------
DROP TABLE IF EXISTS `tab_tipos_becas`;
CREATE TABLE `tab_tipos_becas` (
  `ID_TIPO_BECA` int(11) NOT NULL AUTO_INCREMENT,
  `TIPO_BECA` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `PORCENTAJE` int(3) NOT NULL,
  PRIMARY KEY (`ID_TIPO_BECA`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tab_tipos_becas
-- ----------------------------
INSERT INTO `tab_tipos_becas` VALUES ('1', 'SNNA - 100', '100');
INSERT INTO `tab_tipos_becas` VALUES ('2', 'SNNA - 50', '50');
INSERT INTO `tab_tipos_becas` VALUES ('3', 'SNNA - 25', '25');
INSERT INTO `tab_tipos_becas` VALUES ('4', 'LENDAN - 100', '100');
INSERT INTO `tab_tipos_becas` VALUES ('5', 'LENDAN - 50', '50');
INSERT INTO `tab_tipos_becas` VALUES ('6', 'LENDAN - 20', '20');
INSERT INTO `tab_tipos_becas` VALUES ('7', 'LENDAN 15', '15');

-- ----------------------------
-- Table structure for tab_tipos_contacto
-- ----------------------------
DROP TABLE IF EXISTS `tab_tipos_contacto`;
CREATE TABLE `tab_tipos_contacto` (
  `ID_TIPO_CONTACTO` int(11) NOT NULL AUTO_INCREMENT,
  `TIPO_CONTACTO` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID_TIPO_CONTACTO`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tab_tipos_contacto
-- ----------------------------
INSERT INTO `tab_tipos_contacto` VALUES ('1', 'LABORAL');
INSERT INTO `tab_tipos_contacto` VALUES ('2', 'DOMICILIO');

-- ----------------------------
-- Table structure for tab_tipos_contribuyentes
-- ----------------------------
DROP TABLE IF EXISTS `tab_tipos_contribuyentes`;
CREATE TABLE `tab_tipos_contribuyentes` (
  `ID_TIPO_CONTRIBUYENTE` int(11) NOT NULL AUTO_INCREMENT,
  `TIPO_CONTRIBUYENTE` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID_TIPO_CONTRIBUYENTE`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tab_tipos_contribuyentes
-- ----------------------------
INSERT INTO `tab_tipos_contribuyentes` VALUES ('1', 'NO OBLIGADOS A LLEVAR CONTABILIDAD');
INSERT INTO `tab_tipos_contribuyentes` VALUES ('2', 'OBLIGADOS A LLEVAR CONTABILIDAD');

-- ----------------------------
-- Table structure for tab_tipos_documentos
-- ----------------------------
DROP TABLE IF EXISTS `tab_tipos_documentos`;
CREATE TABLE `tab_tipos_documentos` (
  `ID_TIPO_DOCUMENTO` int(11) NOT NULL AUTO_INCREMENT,
  `TIPO_DOCUMENTO` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NOMBRE_TIPO_DOCUMENTO` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID_TIPO_DOCUMENTO`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tab_tipos_documentos
-- ----------------------------
INSERT INTO `tab_tipos_documentos` VALUES ('1', 'C', 'CÉDULA');
INSERT INTO `tab_tipos_documentos` VALUES ('2', 'P', 'PASAPORTE');
INSERT INTO `tab_tipos_documentos` VALUES ('3', 'R', 'REFUGIADO');
INSERT INTO `tab_tipos_documentos` VALUES ('4', 'RUC', 'RUC');

-- ----------------------------
-- Table structure for tab_tipos_sangre
-- ----------------------------
DROP TABLE IF EXISTS `tab_tipos_sangre`;
CREATE TABLE `tab_tipos_sangre` (
  `ID_TIPO_SANGRE` int(11) NOT NULL AUTO_INCREMENT,
  `TIPO_SANGRE` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID_TIPO_SANGRE`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tab_tipos_sangre
-- ----------------------------
INSERT INTO `tab_tipos_sangre` VALUES ('1', 'AB+');
INSERT INTO `tab_tipos_sangre` VALUES ('2', 'AB-');
INSERT INTO `tab_tipos_sangre` VALUES ('3', 'A+');
INSERT INTO `tab_tipos_sangre` VALUES ('4', 'A-');
INSERT INTO `tab_tipos_sangre` VALUES ('5', 'B+');
INSERT INTO `tab_tipos_sangre` VALUES ('6', 'B-');
INSERT INTO `tab_tipos_sangre` VALUES ('7', 'O+');
INSERT INTO `tab_tipos_sangre` VALUES ('8', 'O-');

-- ----------------------------
-- Table structure for tab_tratos_personales
-- ----------------------------
DROP TABLE IF EXISTS `tab_tratos_personales`;
CREATE TABLE `tab_tratos_personales` (
  `ID_TRATO` int(11) NOT NULL AUTO_INCREMENT,
  `ABREVIATURA_TRATO` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TRATO` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ID_GENERO` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_TRATO`),
  KEY `ID_GENERO` (`ID_GENERO`),
  CONSTRAINT `tab_tratos_personales_ibfk_1` FOREIGN KEY (`ID_GENERO`) REFERENCES `tab_generos` (`ID_GENERO`) ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tab_tratos_personales
-- ----------------------------
INSERT INTO `tab_tratos_personales` VALUES ('1', 'SRTA', 'SEÑORITA', null);
INSERT INTO `tab_tratos_personales` VALUES ('2', 'SR', 'SEÑOR', null);
INSERT INTO `tab_tratos_personales` VALUES ('3', 'SRA', 'SEÑORA', null);
