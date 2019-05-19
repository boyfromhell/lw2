export function isBoolean(val) { return typeof val === 'boolean'; }

export function isString(val) { return typeof val === 'string'; }

export function isNumber(val) { return typeof val === 'number'; }

export function isFunction(val) { return typeof val === 'function'; }

export function isDefined(val) { return typeof val !== 'undefined'; }

export function isNull(val) { return val === null; }

export function isUndefined(val) { return typeof val === 'undefined'; }

export function isPresent(val) { return val !== undefined && val !== null; }

export function isBlank(val) { return val === undefined || val === null; }

export function isObject(val) { return typeof val === 'object'; }

export function isArray(val) { return Array.isArray(val); }

