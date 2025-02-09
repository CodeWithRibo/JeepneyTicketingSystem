DELIMITER //

CREATE TRIGGER reset_auto_increment_after_delete
AFTER DELETE ON contact
FOR EACH ROW
BEGIN
    -- Reset AUTO_INCREMENT value
    SET @max_id = (SELECT IFNULL(MAX(id), 0) FROM my_table);
    SET @new_auto_increment = @max_id + 1;
    SET @sql = CONCAT('ALTER TABLE contact AUTO_INCREMENT = ', @new_auto_increment);
    PREPARE stmt FROM @sql;
    EXECUTE stmt;
    DEALLOCATE PREPARE stmt;
END //

DELIMITER ;