-- 1. AUDIT TABLE
CREATE TABLE audit (
    audit_id INT AUTO_INCREMENT PRIMARY KEY,
    address VARCHAR(255),
    contact_person VARCHAR(100),
    contact_info VARCHAR(100),
    year_built INT,
    building_type VARCHAR(100),
    square_footage INT,
    occupants INT,
    operating_hours VARCHAR(100)
);

-- 2. TRANSFORMER DETAILS
CREATE TABLE transformer_details (
    transformer_id VARCHAR(50) PRIMARY KEY,
    audit_id INT,
    location VARCHAR(100),
    manufacturer VARCHAR(100),
    capacity_kva DOUBLE,
    voltage_rating VARCHAR(100),
    frequency_hz DOUBLE,
    type VARCHAR(50),
    temperature VARCHAR(50),
    cooling_type VARCHAR(50),
    installation_date DATE,
    FOREIGN KEY (audit_id) REFERENCES audit(audit_id) ON DELETE CASCADE
);

-- 3. MOTOR DETAILS
CREATE TABLE motor_details (
    motor_id VARCHAR(50) PRIMARY KEY,
    audit_id INT,
    motor_rating_kw DOUBLE,
    motor_efficiency DOUBLE,
    FOREIGN KEY (audit_id) REFERENCES audit(audit_id) ON DELETE CASCADE
);

-- 4. CHILLER PLANT DETAILS
CREATE TABLE chiller_plant_details (
    chiller_id INT AUTO_INCREMENT PRIMARY KEY,
    audit_id INT,
    chiller_capacity_tr DOUBLE,
    chiller_cop DOUBLE,
    running_hours INT,
    FOREIGN KEY (audit_id) REFERENCES audit(audit_id) ON DELETE CASCADE
);

-- 5. FAN DETAILS
CREATE TABLE fan_details (
    fan_id VARCHAR(50) PRIMARY KEY,
    audit_id INT,
    fan_power_w DOUBLE,
    fan_runtime_hours_per_day INT,
    FOREIGN KEY (audit_id) REFERENCES audit(audit_id) ON DELETE CASCADE
);

-- 6. OBSERVATIONS & RECOMMENDATIONS
CREATE TABLE observations_recommendations (
    obs_id INT AUTO_INCREMENT PRIMARY KEY,
    audit_id INT,
    observations TEXT,
    recommendations TEXT,
    FOREIGN KEY (audit_id) REFERENCES audit(audit_id) ON DELETE CASCADE
);
