SELECT ABS(TO_DAYS(MAX(date)) - TO_DAYS(MIN(date))) as uptime
FROM member_history;