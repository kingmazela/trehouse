
-- +++++++++++++++++++++++++++++TREE HOUSE REPORTING+++++++++++++++++++++++++++++++++++++++
-- No 1. SELECT Company name, Associations, Domains 
SELECT a.name AS Company_Name, b.name AS Associations_Name, c.domain AS Domains
FROM companies a
INNER JOIN associations b
INNER JOIN domains c
WHERE a.id = b.id AND a.id = b.name='Basement Systems'


-- No 2. Provide a list (association name, company name, site name) of all active sites that do
-- not have a domain.

SELECT a.name AS Company_Name, b.name AS Associations_Name, c.domain AS Domains, d.is_deleted 
FROM companies a
INNER JOIN associations b
INNER JOIN domains c
INNER JOIN sites d 
WHERE d.is_deleted = 0

-- No 3. Provide a list (site id, site name) of distinct active sites who have one or more domain,
-- and whose domains are all deleted.
SELECT DISTINCT b.domain AS Domains_name, b.site AS Site_Name, a.id as Site_id
FROM sites a
INNER JOIN domains b
WHERE b.site > 1